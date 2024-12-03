<?php # POST
header('Content-Type: application/json');

session_start();

include 'connection.php';

if (!checkLevelInSession(1)) {
    echo error_json(4, 'Permissão insuficiente para manipulação.');
    exit();
}

if (isset($_POST['id']) || $_SESSION['id']) {
    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
        $id_type = 'session';
    }
    if (isset($_POST['id'])) {
        if (checkLevelInSession(2)) {
            $id = $_POST['id'];
            $id_type = 'admin';
        } else {
            echo error_json(4, 'Permissão insuficiente para manipulação.');
            exit();
        }
    }
} else {
    echo error_json(5, 'Nenhum ID fornecido para manipulação.');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    echo error_json(1, 'Método de requisição incorreto.');
    exit();
}

if (!isset($_POST['action'])) {
    echo error_json(2, 'Método de manipulação não fornecido.');
    exit();
}

switch ($_POST['action']) {
    case 'delete':
        if ($id === "") {
            echo error_json(6, 'ID fornecido está vazio.');
            exit();
        }
        if (!is_numeric($id)) {
            echo error_json(6, 'ID fornecido não é numérico.', 'ID fornecido: ' . $id);
            exit();
        }

        $id = (int) $id;

        $query = "DELETE FROM usuarios WHERE id = ?";

        $statement = $connection->prepare($query);
        $statement->bind_param('i', $id);
        $statement->execute();

        if ($statement->error) {
            echo error_json(7, 'Erro na execução da exclusão.', $statement->error);
            exit();
        }

        if ($id_type === "session") {
            session_unset();
            session_destroy();
        }

        echo crud_json('delete', $id, 'deleted');
        exit();
    
    case 'update':
        if (!isset($id)) {
            echo error_json(5, 'ID não fornecido para edição.');
            exit();
        }

        if ($id === "") {
            echo error_json(6, 'ID fornecido está vazio.');
            exit();
        }
        if (!is_numeric($id)) {
            echo error_json(6, 'ID fornecido não é numérico.', 'ID fornecido: ' . $id);
            exit();
        }

        $id = (int) $id;

        $editing_params = [];
        $empty_params = [];
        $non_numeric_params = [];

        $valid_levels = [ 'admin', 'cliente' ];

        $param_types = [];

        if (isset($_POST['nome'])) {
            $nome = $_POST['nome'];
            if ($nome === "") {
                array_push($empty_params, 'nome');
            } else {
                $editing_params['nome'] = $nome;
                array_push($param_types, 's');
            }
        }
        if (isset($_POST['telefone'])) {
            $telefone = $_POST['telefone'];
            if ($telefone === "") {
                array_push($empty_params, 'telefone');
            } else {
                $editing_params['telefone'] = $telefone;
                array_push($param_types, 's');
            }
        }

        if (isset($_POST['cpf'])) {
            $cpf = $_POST['cpf'];
            if ($cpf === "") {
                array_push($empty_params, 'cpf');
            } else {
                $editing_params['cpf'] = $cpf;
                array_push($param_types, 's');
            }
        }

        if (isset($_POST['endereco'])) {
            $endereco = $_POST['endereco'];
            if ($endereco === "") {
                array_push($empty_params, 'endereco');
            } else {
                $editing_params['endereco'] = $endereco;
                array_push($param_types, 's');
            }
        }

        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            if ($email === "") {
                array_push($empty_params, 'email');
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($non_numeric_params, 'email');
            } else {
                $editing_params['email'] = $email;
                array_push($param_types, 's');
            }
        }

        if (isset($_POST['senha'])) {
            $senha = $_POST['senha'];
            if ($senha === "") {
                array_push($empty_params, 'senha');
            } else {
                $hashed_password = password_hash($senha, PASSWORD_DEFAULT);
                $editing_params['senha'] = $hashed_password;
                array_push($param_types, 's');
            }
        }

        if (count($empty_params) > 0) {
            echo error_json(6, 'Parâmetros vazios encontrados para edição.', 'Parâmetros vazios: ' . join(', ', $empty_params));
            exit();
        }
        if (count($non_numeric_params) > 0 ) {
            echo error_json(6, 'Parâmetros não numéricos encontrados para edição.', 'Parâmetros não numéricos: ' . join(', ', $non_numeric_params));
            exit();
        }
        if (count($editing_params) === 0) {
            echo error_json(5, 'Parâmetros insuficientes para edição.');
            exit();
        }

        $setting = [];
        foreach ($editing_params as $key => $value) {
            array_push($setting, $key . ' = ?');
        }
        $setting = join(', ', $setting);
        $params = array_values($editing_params);
        array_push($params, $id);
        $param_types = join('', $param_types) . 'i';

        $query = "UPDATE usuarios SET $setting WHERE id = ?";

        $statement = $connection->prepare($query);
        $statement->bind_param($param_types, ...$params);
        $statement->execute();

        if ($statement->error) {
            echo error_json(7, 'Erro na execução da edição', $statement->error);
            exit();
        }

        if (isset($editing_params['senha'])) {
            $senha_alterada = true;
            unset($editing_params['senha']);
        }

        echo crud_json('update', [
            'changes' => $editing_params, 'id' => $id, 'password_changed' => isset($senha_alterada)
        ], 'edited');
        exit();

    default:
        echo error_json(3, 'Método de manipulação desconhecido.');
        exit();
}

# erros
# 1-> metodo de requisição nao post
# 2-> método de manipulação nao fornecido
# 3-> método de manipulação desconhecido
# 4-> falta de permissão
# 5-> parametros insuficientes
# 6-> parametros incorretos
# 7-> erro na execução da manipulação
<?php # GET | POST
header('Content-Type: application/json');

include 'connection.php';
session_start();

if (isset($_GET['id']) || isset($_SESSION['id'])) {
    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
    }
    if (isset($_GET['id'])) {
        if (checkLevelInSession(2)) {
            $id = $_GET['id'];
        } else if (isset($_SESSION['id'])) {
            if ($_SESSION['id'] === $_GET['id']) {
                $id = $_GET['id'];
            } else {
                echo error_json(2, 'Permissão insuficiente para acessar perfil.');
                exit();
            }
        } else {
            echo error_json(2, 'Permissão insuficiente para acessar perfil.');
            exit();
        }
    }

    if (!isset($id)) {
        echo error_json(1, 'ID de usuário não fornecido.', 'Inicialize uma sessão de conta ou forneça um ID.');
        exit();
    }

    if (!is_numeric($id)) {
        echo error_json(3, 'ID não numérico.', 'ID procurado: ' . $id);
        exit();
    }

    $id = (int) $id;

    $action = 'read';
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }

    $query = "SELECT * FROM listas_desejos WHERE id_usuario = ? LIMIT 1";

    $statement = $connection->prepare($query);
    $statement->bind_param('i', $id);
    $statement->execute();

    if ($statement->error) {
        echo error_json(5, 'Erro na execução da requisição.', $statement->error);
        exit();
    }

    $result = $statement->get_result();

    if ($result->num_rows === 0) {
        $query = "INSERT INTO listas_desejos (id_usuario) VALUES (?)";

        $statement = $connection->prepare($query);
        $statement->bind_param('i', $id);
        $statement->execute();

        if ($statement->error) {
            echo error_json(5, 'Erro na execução da requisição.', $statement->error);
            exit();
        }

        $query = "SELECT * FROM listas_desejos WHERE id_usuario = ? LIMIT 1";

        $statement = $connection->prepare($query);
        $statement->bind_param('i', $id);
        $statement->execute();

        if ($statement->error) {
            echo error_json(5, 'Erro na execução da requisição.', $statement->error);
            exit();
        }
    }

    $wish_list = $result->fetch_assoc();

    $items = new itemsList($id, 'lista_desejos', $connection);

    switch ($action) {
        case 'read':
            echo wish_list_json($wish_list, $items->get_items_json());
            break;
        case 'add':
            if (!isset($_SESSION['produto'])) {
                echo error_json(2, 'Produto não fornecido.', 'Forneça um ID de produto.');
                exit();
            }

            $produto = $_SESSION['produto'];

            if (!is_numeric($produto)) {
                echo error_json(3, 'ID de produto não numérico.', 'ID de produto fornecido: ' . $produto);
                exit();
            }

            $produto = (int) $produto;

            echo $items->add_item($produto, 1);
            exit();
        case 'remove':
            if (!isset($_SESSION['item'])) {
                echo error_json(2, 'Item não fornecido.', 'Forneça um ID de item.');
                exit();
            }

            $item = $_SESSION['item'];

            if (!is_numeric($item)) {
                echo error_json(3, 'ID de item não numérico.', 'ID de item fornecido: ' . $item);
                exit();
            }

            $item = (int) $item;

            echo $items->remove_item($item);
            exit();
        case 'clear':
            echo $items->clear_items();
            exit();
        default:
            echo error_json(4, 'Ação não reconhecida.', 'Ações disponíveis: read, add, remove, clear.');
            exit();
    }
} else {
    echo error_json(1, 'ID de usuário não fornecido.', 'Inicialize uma sessão de conta ou forneça um ID.');
    exit();
}

# erros
# 1-> parametros insuficientes
# 2-> permissao insuficiente
# 3-> parametros incorretos
# 4-> acao nao reconhecida
# 5-> erro sql
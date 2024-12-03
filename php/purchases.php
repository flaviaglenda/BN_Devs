<?php
header('Content-Type: application/json');

include 'connection.php';
session_start();

if (isset($_SESSION['id']) || isset($_GET['id'])) {
    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
    }
    if (isset($_GET['id'])) {
        if (checkLevelInSession(2)) {
            $id = $_GET['id'];
        } else {
            echo error_json(2, "Permissão insuficiente.");
            exit();
        }
    }

    if (!isset($id)) {
        echo error_json(1, "ID de usuário não fornecido.", "Inicialize uma sessão de conta ou forneça um ID.");
        exit();
    }

    if (!is_numeric($id)) {
        echo error_json(3, "ID não numérico.", "ID procurado: " . $id);
        exit();
    }

    $id = (int) $id;

    $query = "SELECT * FROM compras WHERE id_usuario = ?";

    $statement = $connection->prepare($query);
    $statement->bind_param('i', $id);
    $statement->execute();

    if ($statement->error) {
        echo error_json(4, "Erro na execução da requisição.", $statement->error);
        exit();
    }

    $result = $statement->get_result();

    echo purchases_json($result);
}

# erros
# 1-> parametros insuficientes
# 2-> parametros incorretos
# 3-> permissao insuficiente
# 4-> erro sql
<?php
header('Content-Type: application/json');

include 'connection.php';
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (!is_numeric($id)) {
        echo error_json(3, "ID não numérico.", "ID procurado: " . $id);
        exit();
    }

    $id = (int) $id;

    $query = "SELECT * FROM compras WHERE id = ?";

    $statement = $connection->prepare($query);
    $statement->bind_param('i', $id);
    $statement->execute();

    if ($statement->error) {
        echo error_json(4, "Erro na execução da requisição.", $statement->error);
        exit();
    }

    $result = $statement->get_result();

    $purchase = $result->fetch_assoc();

    if (!checkLevelInSession(2)) {
        if ($id !== $purchase['id_usuario']) {
            echo error_json(2, "Permissão insuficiente.");
            exit();
        }
    }

    if ($result->num_rows === 0) {
        echo error_json(2, "Compra não encontrada.");
        exit();
    }

    
    $items = new itemsList($purchase['id'], 'compra', $connection);
    
    if (isset($_GET['status'])) {
        $status = $_GET['status'];
        
        $query = "UPDATE compras SET status = ? WHERE id = ?";

        $statement = $connection->prepare($query);
        $statement->bind_param('si', $status, $id);
        $statement->execute();

        if ($statement->error) {
            echo error_json(4, "Erro na execução da requisição.", $statement->error);
            exit();
        }
    
        $purchase['status'] = $status;
    }

    echo purchase_json($purchase, $items->get_items_json(), isset($_GET['status']));
} else {
    echo error_json(1, "ID de compra não fornecido.");
    exit();
}
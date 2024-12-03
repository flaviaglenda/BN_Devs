<?php
header('Content-Type: application/json');

include 'connection.php';
session_start();

if (!isset($_GET['id'])) {
    echo error_json(1, "ID de produto não fornecido.");
    exit();
}

$id = $_GET['id'];

if (!is_numeric($id)) {
    echo error_json(3, "ID não numérico.", "ID procurado: " . $id);
    exit();
}

$id = (int) $id;

$query = "SELECT * FROM produtos WHERE id = ?";

$statement = $connection->prepare($query);
$statement->bind_param('i', $id);
$statement->execute();

if ($statement->error) {
    echo error_json(4, "Erro na execução da requisição.", $statement->error);
    exit();
}

$result = $statement->get_result();

if ($result->num_rows === 0) {
    echo error_json(2, "Produto não encontrado.");
    exit();
}

$product = $result->fetch_assoc();

echo product_json($product);
exit();

#erros
# 1-> parametros insuficientes
# 2-> produto nao encontrado
# 3-> parametros incorretos
# 4-> erro sql
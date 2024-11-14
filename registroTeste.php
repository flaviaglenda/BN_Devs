<?php
include './php/connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], null);

        $query = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
        $statement = $connection->prepare($query);
        $statement->bind_param("sss", $nome, $email, $senha);
        $statement->execute();

        if ($connection->error) {
            die("Erro: {$connection->error}");
        }

        echo "usuario registrado";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="POST" id="registroForm">
            <label for="">nome</label><br>
            <input type="text" name="nome" max="150" min="2"><br>
            <label for="">email</label><br>
            <input type="email" name="email" max="80" min="5" required><br>
            <label for="">senha</label><br>
            <input type="password" name="senha" max="64" min="8" required><br>
            <button type="submit">Enviar</button>
            <p>só um texte</p>
        </form>
    </body>
</html>
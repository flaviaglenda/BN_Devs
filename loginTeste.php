<?php
include './php/connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['email']) && isset($_POST['senha'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $query = "SELECT senha FROM usuarios WHERE email = ?";
        $statement = $connection->prepare($query);
        $statement->bind_param("s", $email);
        $statement->execute();
        $result = $statement->get_result();

        if ($result->num_rows == 0) {
            echo "Usuário não registrado";
        }

        if ($result->num_rows > 0) {
            $userdata = $result->fetch_assoc();
            if (password_verify($senha, $userdata['senha'])) {
                echo "Login realizado";
            } else {
                echo "Senha incorreta";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <?php include './html/links.php' ?>
    </head>
    <body>
        <form action="" method="POST" id="loginForm">
            <label for="">email</label><br>
            <input type="email" name="email" id="" required><br>
            <label for="">senha</label><br>
            <input type="password" name="senha" required><br>
            <button type="submit">Entrar</button>
        </form>
    </body>
</html>
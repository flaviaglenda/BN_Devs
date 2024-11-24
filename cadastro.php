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
    <link rel="stylesheet" href="./css/cadastro.css">
    <title>Document</title>
    <script src="./js/script.js"></script>
</head>
<body>

    <form action="" method="post">
        <h1>Cadastre-se</h1>
        <section>
            <label for="nome">Nome: </label>
            <input type="text" name = "nome" id="nome" required>
        </section>

        <section>
            <label for="email">Digite seu Email: </label>
            <input type="email" name = "email" id="email" required>
        </section>

        <section>
            <label for="senha">Digite sua senha: </label>
            <input type="password" name = "senha" id="senha" required>
        </section>

        <section>
            <label for="comf_senha">Comfirme a sua senha: </label>
            <input type="password" name = "comf_senha" id="comf_senha" required>
        </section>

        <button type="submit">Cadastrar</button>
        
    </form>
    
</body>
</html>
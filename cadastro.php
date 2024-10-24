<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cadastro.css">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <h1>Cadastre-se</h1>
        <section>
            <label for="nome">Nome: </label>
            <input type="text" name = "nome" required>
        </section>

        <section>
            <label for="email">Digite seu Email: </label>
            <input type="email" name = "email" required>
        </section>

        <section>
            <label for="senha">Digite sua senha: </label>
            <input type="password" name = "senha" required>
        </section>

        <section>
            <label for="comf_senha">Comfirme a sua senha: </label>
            <input type="password" name = "comf_senha" required>
        </section>

        <input type="submit" id="enviar" >
        
    </form>
    
</body>
</html>
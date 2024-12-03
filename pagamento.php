<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pagamento</title>
        <link rel="stylesheet" href="./css/pagamento.css">
        <link rel="stylesheet" href="./css/style.css">
        <?php include './html/head.php' ?>
        <?php
        $id_usuario = -1;
        if (isset($_GET['id_usuario'])) $id_usuario = $_GET['id_usuario'];
        if (!is_numeric($id_usuario)) $id_usuario = -1;
        $id_usuario = (int) $id_usuario;
        ?>
        <script>
            if (window.opener === null) window.location.href = project_dir;
            const id_usuario = <?= $id_usuario ?> ;
            if (id_usuario < 1) window.close();
        </script>
    </head>
    <body>
        <section id="main-section">
            <div>
                <h1>Efetuar pagamento</h1>
                <p class="legenda big">Esta página é um ambiente controlado para efetuação do pagamento e registro de sua compra em nosso sistema.</p>
            </div>
            <form id="form-pagamento">
                <div class="first">
                    <label for="select-metodo">Método de pagamento:</label>
                    <select name="metodo" id="select-metodo" required>
                        <option value="">Selecione uma opção</option>
                        <option value="PIX">PIX</option>
                        <option value="Boleto">Boleto</option>
                        <option value="Cartão de crédito">Cartão de crédito</option>
                        <option value="Cartão de débito">Cartão de débito</option>
                    </select>
                </div>
                <div class="second">
                    <label for="textarea-descricao">Descrição do pedido:</label>
                    <textarea name="descricao" id="textarea-descricao" rows="6"></textarea>
                    <p class="legenda">Complemente as especificações do seu pedido.</p>
                </div>
                <div class="third">
                    <button type="submit">Realizar compra</button>
                    <p class="legenda">Guarde as credenciais de sua conta, seu pedido será registrado através dela.</p>
                    <p class="legenda">Caso deseje cancelar sua compra, <a onclick="window.close()">clique aqui</a>.</p>
                </div>
            </form>
            <script>
                document.getElementById('form-pagamento').addEventListener('submit', event => {
                    event.preventDefault();
                    const form = event.target;

                    window.opener.processPayment(id_usuario, form.metodo.value, form.descricao.value);
                    window.close();
                })
            </script>
        </section>
    </body>
</html>
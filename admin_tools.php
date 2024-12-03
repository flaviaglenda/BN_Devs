<?php include './php/setup.php' ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Tools</title>
        <?php include './html/head.php' ?>
        <link rel="stylesheet" href="./css/admin_tools.css">
        <script>
            if (window.opener === null) window.close();
        </script>
        <?php
        if (!checkLevelInSession(2)) {
            echo `<script>
                opener.Swal.fire({
                    icon: 'error',
                    title: 'Acesso negado',
                    text: 'Você não tem permissão para acessar essa página.'
                });
                window.close();
            </script>`;
        }
        ?>
    </head>
    <body>
        <section id="main-section">
            <div>
                <h1>Ferramentas</h1>
                <p class="legenda">Ferramentas de administrador</p>
            </div>
            <div id="botoes">
                <div>
                    <input type="number" id="editar-perfil-id" min="0" step="1" value="0" required>
                    <button id="editar-perfil">Editar perfil</button>
                    <script>
                        document.getElementById('editar-perfil').addEventListener('click', async () => {
                            const id =document.getElementById('editar-perfil-id').value;
                            opener.editarPerfilPopup(id);
                        });
                    </script>
                </div>
                <hr>
                <div>
                    <input type="number" id="editar-produto-id" min="0" step="1" value="0" required>
                    <button id="editar-produto">Editar produto</button>
                    <script>
                        document.getElementById('editar-produto').addEventListener('click', async () => {
                            const id =document.getElementById('editar-produto-id').value;
                            opener.editarProdutoPopup(id);
                        });
                    </script>
                </div>
            </div>
        </section>
    </body>
</html>
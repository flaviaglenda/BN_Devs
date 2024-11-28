<?php
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/perfil.css">
    </head>
    <body>
        <main>
            <section id="centersection">
                <div id="perfil-info">
                    <hr style="opacity: 0; border: 0px">
                    <article>
                        <label for="perfil-nome">Nome:</label>
                        <p id="perfil-nome">NOME</p>
                    </article>
                    <hr>
                    <article>
                        <label for="perfil-email">Email:</label>
                        <p id="perfil-email">EMAIL</p>
                    </article>
                    <hr>
                    <div class="article-line">
                        <article style="width: 70%">
                            <label for="perfil-endereco">Endereço:</label>
                            <p id="perfil-endereco">ENDERECO sdff sdf sd sdfdf sf sdf sf  fsd fsd fsdf sdf sdf sdf s df dsdsdf </p>
                        </article><article style="width: 30%">
                            <label for="perfil-cep">CEP:</label>
                            <p id="perfil-cep">CEP</p>
                        </article>
                    </div>
                    <hr>
                </div>
            </section>
        </main>

    </body>
    <script>
        function checkOverflow(element) {
            return element.scrollHeight > element.clientHeight || element.scrollWidth > element.clientWidth;
        }
        
        function addOverflowClass() {
            const elements = document.querySelectorAll('#perfil-info article p');
            elements.forEach(element => {
                if (checkOverflow(element)) {
                    element.classList.add('overflowing');
                } else {
                    element.classList.remove('overflowing');
                }
            });
        }
        
        // Chame a função quando necessário, por exemplo, após o carregamento da página ou redimensionamento da janela
        window.addEventListener('load', addOverflowClass);
        window.addEventListener('resize', addOverflowClass);
    </script>
</html>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="Papelaria BoasNovas Material Produtos">
        <title>Carrinho - Boas Novas Papelaria</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Matemasie&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/carrinho.css">
        <link rel="shortcut icon" href="img/logo-boasnovas.png" type="image/x-icon">
        <script src="./js/script.js" defer></script>
    </head>
    <body>
        <header>
            <img src="./img/logo-boasnovas.png" alt="Logo BoasNovas" class="logo" onclick="navigateTo('./index.php')">
            <form action="./pesquisa.php" id="header-search">
                <input type="input" name="search" placeholder="Faça uma pesquisa...">
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="search"><g><path d="m20.71 19.29-3.4-3.39A7.92 7.92 0 0 0 19 11a8 8 0 1 0-8 8 7.92 7.92 0 0 0 4.9-1.69l3.39 3.4a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42zM5 11a6 6 0 1 1 6 6 6 6 0 0 1-6-6z"></path></g></svg>
                </button>
            </form>
            <nav>
                <svg xmlns="http://www.w3.org/2000/svg" width="92" height="92" viewBox="0 0 92 92" id="cart" onclick="navigateTo('./carrinho.php')">
                    <path fill="#FFFFFF" d="M91.8 27.3 81.1 61c-.8 2.4-2.9 4-5.4 4H34.4c-2.4 0-4.7-1.5-5.5-3.7L13.1 19H4c-2.2 0-4-1.8-4-4s1.8-4 4-4h11.9c1.7 0 3.2 1.1 3.8 2.7L36 57h38l8.5-27H35.4c-2.2 0-4-1.8-4-4s1.8-4 4-4H88c1.3 0 2.5.7 3.2 1.7.8 1 1 2.4.6 3.6zm-55.4 43c-1.7 0-3.4.7-4.6 1.9-1.2 1.2-1.9 2.9-1.9 4.6 0 1.7.7 3.4 1.9 4.6 1.2 1.2 2.9 1.9 4.6 1.9s3.4-.7 4.6-1.9c1.2-1.2 1.9-2.9 1.9-4.6 0-1.7-.7-3.4-1.9-4.6-1.2-1.2-2.9-1.9-4.6-1.9zm35.9 0c-1.7 0-3.4.7-4.6 1.9s-1.9 2.9-1.9 4.6c0 1.7.7 3.4 1.9 4.6 1.2 1.2 2.9 1.9 4.6 1.9 1.7 0 3.4-.7 4.6-1.9 1.2-1.2 1.9-2.9 1.9-4.6 0-1.7-.7-3.4-1.9-4.6s-2.9-1.9-4.6-1.9z"></path>
                  </svg>
                  
                  <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" id="avatar" onclick="navigateTo('./conta.php')">
                    <path fill="#FFFFFF" d="M24 8c-4.42 0-8 3.58-8 8 0 4.41 3.58 8 8 8s8-3.59 8-8c0-4.42-3.58-8-8-8zm0 20c-5.33 0-16 2.67-16 8v4h32v-4c0-5.33-10.67-8-16-8z"></path>
                    <path fill="none" d="M0 0h48v48H0z"></path>
                  </svg>
                  
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="chat" onclick="navigateTo('./contato.php')">
                    <g fill="none" fill-rule="evenodd" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" transform="translate(2 2)">
                      <path d="M10.0568181,-3.37507799e-14 C6.54686532,-0.0141015786 3.28556632,1.80703838 1.46050022,4.80034679 C-0.364565872,7.7936552 -0.487081058,11.5223413 1.13756771,14.6286303 L1.33789312,15.0191059 C1.50209106,15.3263704 1.53643729,15.6864194 1.43328617,16.0191043 C1.14742034,16.7783674 0.908488743,17.5544276 0.71783828,18.3429101 C0.71783828,18.7429095 0.832309942,18.9714806 1.26157868,18.9619568 C2.02189879,18.7940564 2.77067506,18.5777416 3.5033154,18.3143388 C3.81886183,18.2274425 4.15437035,18.2475403 4.45724592,18.3714815 C4.73388577,18.5048146 5.29670478,18.8476712 5.31578339,18.8476712 C8.99153503,20.7804333 13.4807954,20.2472199 16.5997521,17.5074142 C19.7187087,14.7676084 20.8198838,10.3899785 19.3676078,6.50403406 C17.9153318,2.6180896 14.211089,0.0305307279 10.0568181,-3.37507799e-14 L10.0568181,-3.37507799e-14 Z"></path>
                      <circle cx="5.287" cy="10" r="1" fill="#FFFFFF"></circle>
                      <circle cx="10.057" cy="10" r="1" fill="#FFFFFF"></circle>
                      <circle cx="14.826" cy="10" r="1" fill="#FFFFFF"></circle> 
                    </g>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 64 64" viewBox="0 0 64 64" id="arrow" onclick="navigateTo('./login.php')">
                    <g transform="translate(28 328)">
                        <path fill="#ffffff" d="M4-272.1c-13.2 0-23.9-10.7-23.9-23.9S-9.2-319.9 4-319.9s23.9 10.7 23.9 23.9S17.2-272.1 4-272.1zm0-45.2c-11.7 0-21.3 9.6-21.3 21.3s9.6 21.3 21.3 21.3 21.3-9.6 21.3-21.3-9.6-21.3-21.3-21.3z">
                        </path>
                        <path fill="#ffffff" d="m3.5-282.3-1.8-1.9L13.4-296 1.7-307.8l1.8-1.9L17.2-296 3.5-282.3">
                        </path>
                        <path fill="#ffffff" d="M15.3-294.6h-24v-2.8h24z">
                        </path>
                    </g>
                </svg>
            </nav>                  
        </header>
        <main>
            <div class="paragrafocarrinho">Carrinho</div>
            <div class="grid-container">
                <div class="grid-item">
                    <div class="carrosselpequeno">
                        <input type="radio" name="carrossel1" id="slide1" checked>
                        <input type="radio" name="carrossel1" id="slide2">
                        <input type="radio" name="carrossel1" id="slide3">
                        <div class="imagenscarrossel">
                            <div class="carrossel-slide">
                                <img src="img/STABILO IMAGEM 1.jpg" alt="Imagem 1" class="imagenscarrossel">
                            </div>
                            <div class="carrossel-slide">
                                <img src="img/STABILO IMAGEM 2.jpg" alt="Imagem 2" class="imagenscarrossel">
                            </div>
                            <div class="carrossel-slide">
                                <img src="img/STABILO IMAGEM 3.jpg" alt="Imagem 3" class="imagenscarrossel">
                            </div>
                        </div>
                        <div class="controleCarrossel">
                            <label for="slide1" class="passarcarrossel"></label>
                            <label for="slide2" class="passarcarrossel"></label>
                            <label for="slide3" class="passarcarrossel"></label>
                        </div>
                    </div>
                    <div class="paragrafos">
                        <p class="nomeproduto">Caneta Ponta Fina– STABILO point 88 –<br> Estojo com 10 unidades – Em 10 cores.</p>
                        <p class="descricao">
                            <button class="botaoacao">Excluir</button>
                            <button class="botaoacao">Comprar</button>
                        </p>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="carrosselpequeno">
                        <input type="radio" name="carrossel2" id="slide4" checked>
                        <input type="radio" name="carrossel2" id="slide5">
                        <input type="radio" name="carrossel2" id="slide6">
                        <div class="imagenscarrossel">
                            <div class="carrossel-slide">
                                <img src="./img/MOCHILA 1.webp" alt="Imagem 1" class="imagenscarrossel">
                            </div>
                            <div class="carrossel-slide">
                                <img src="./img/MOCHILA 2.webp" alt="Imagem 2" class="imagenscarrossel">
                            </div>
                            <div class="carrossel-slide">
                                <img src="./img/MOCHILA 3.webp" alt="Imagem 3" class="imagenscarrossel">
                            </div>
                        </div>
                        <div class="controleCarrossel">
                            <label for="slide4" class="passarcarrossel"></label>
                            <label for="slide5" class="passarcarrossel"></label>
                            <label for="slide6" class="passarcarrossel"></label>
                        </div>
                    </div>
                    <div class="paragrafos">
                        <p class="nomeproduto">Mochila Maideng Notebook.</p>
                        <p class="descricao">
                            <button class="botaoacao">Excluir</button>
                            <button class="botaoacao">Comprar</button>
                        </p>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="carrosselpequeno">
                        <input type="radio" name="carrossel3" id="slide7" checked>
                        <input type="radio" name="carrossel3" id="slide8">
                        <div class="imagenscarrossel">
                            <div class="carrossel-slide">
                                <img src="./img/SULFITE IMAGEM 1.jfif" alt="Imagem 1" class="imagenscarrossel">
                            </div>
                            <div class="carrossel-slide">
                                <img src="./img/SULFITE IMAGEM 2.jfif" alt="Imagem 2" class="imagenscarrossel">
                            </div>
                        </div>
                        <div class="controleCarrossel">
                            <label for="slide7" class="passarcarrossel"></label>
                            <label for="slide8" class="passarcarrossel"></label>
                        </div>
                    </div>
                    <div class="paragrafos">
                        <p class="nomeproduto">Chamex - Papel Sulfite, A4, 75g, 500 folhas.</p>
                        <p class="descricao">
                            <button class="botaoacao">Excluir</button>
                            <button class="botaoacao">Comprar</button>
                        </p>
                    </div>
                </div>
        
                <div class="grid-item">
                    <div class="carrosselpequeno">
                        <input type="radio" name="carrossel4" id="slide10" checked>
                        <input type="radio" name="carrossel4" id="slide11">
                        <div class="imagenscarrossel">
                            <div class="carrossel-slide">
                                <img src="./img/POST IT 1.jpg" alt="Imagem 1" class="imagenscarrossel">
                            </div>
                            <div class="carrossel-slide">
                                <img src="./img/post it 2.jfif" alt="Imagem 2" class="imagenscarrossel">
                            </div>
                           
                        </div>
                        <div class="controleCarrossel">
                            <label for="slide10" class="passarcarrossel"></label>
                            <label for="slide11" class="passarcarrossel"></label>
                        </div>
                    </div>
                    <div class="paragrafos">
                        <p class="nomeproduto">Nota Autoadesiva, Tris, 7897476677446, <br> Multicor, pacote de 100.</p>
                        <p class="descricao">
                            <button class="botaoacao">Excluir</button>
                            <button class="botaoacao">Comprar</button>
                        </p>
                    </div>
                </div>
        
                <div class="grid-item">
                    <div class="carrosselpequeno">
                        <input type="radio" name="carrossel5" id="slide13" checked>
                        <input type="radio" name="carrossel5" id="slide14">
                        <input type="radio" name="carrossel5" id="slide15">
                        <div class="imagenscarrossel">
                            <div class="carrossel-slide">
                                <img src="./img/CALCULADORA 1.jpg" alt="Imagem 1" class="imagenscarrossel">
                            </div>
                            <div class="carrossel-slide">
                                <img src="img/CALCULADORA 2.jpg" alt="Imagem 2" class="imagenscarrossel">
                            </div>
                            <div class="carrossel-slide">
                                <img src="./img/CALCULADORA 3.jpg" alt="Imagem 3" class="imagenscarrossel">
                            </div>
                        </div>
                        <div class="controleCarrossel">
                            <label for="slide13" class="passarcarrossel"></label>
                            <label for="slide14" class="passarcarrossel"></label>
                            <label for="slide15" class="passarcarrossel"></label>
                        </div>
                    </div>
                    <div class="paragrafos">
                        <p class="nomeproduto">Helect Calculadora científica de<br> engenharia de 2 linhas, adequada para <br>jescola e negócios (preto)</p>
                        <p class="descricao">
                            <button class="botaoacao">Excluir</button>
                            <button class="botaoacao">Comprar</button>
                        </p>
                    </div>
                </div>
        
            </div>
        </main>

        <footer>
            <img src="img/logo-boasnovas.png" alt="Logo BoasNovas" id="footer-logo">
            <div id="footer-devs">
                <p><b>Desenvolvido por <u>BN Devs</u></b></p>
                <p>Equipe responsável:</p>
                <p><i>Guilherme Paiva, Lanna Kamilly, Flávia Glenda, Miguel Borges</i></p>
            </div>
            <div class="footer-group">
                <div>
                    <p><b>Contatos Boas Novas:</b></p>
                    <ul>
                        <li><u>Instagram:</u> <a href="https://www.instagram.com/papelariaboasnovas/" id="footer-instagram" target="_blank">@papelariaboasnovas</a></li>
                        <li><u>Whatsapp:</u> (12) 98897-9497</li>
                        <li><u>Email:</u> </li>
                    </ul>
                </div>
                <div id="footer-address">
                    <p><b>Nosso endereço:</b></p>
                    <p><i>AV Luiz Benedito de Medeiros n'220 Galo Branco SJC, São José dos Campos</i></p>
                </div>
            </div>
            <div id="footer-manual">
                <a href="https://www.canva.com/design/DAGHeBvZ4-Y/Pm_GaNIMyLYQLhP2qBR3EQ/view?utm_content=DAGHeBvZ4-Y&utm_campaign=designshare&utm_medium=link&utm_source=editor" target="_blank">Manual de Uso de Marca (Boas Novas + BN Devs)</a>
            </div>
        </footer>
    </body>
</html>
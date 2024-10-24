<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="Papelaria BoasNovas Material Produtos">
        <title>Conta - Boas Novas Papelaria</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Matemasie&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/conta.css">
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
            <section id="main-sidebar">
                <button onclick="navigateTo('#info-conta')">Conta</button>
                <button onclick="navigateTo('#info-config')">Configurações</button>
                <button onclick="navigateTo('#info-editar')">Editar Informações</button>
                <button onclick="navigateTo('#info-ped-andamento')">Pedidos em Andamento</button>
                <button onclick="navigateTo('#info-ped-concluidos')">Pedidos Concluídos</button>
                <button onclick="navigateTo('#info-cupons')">Cupons</button>
            </section>
            <section id="main-info">
                <section id="info-conta">
                    <div id="info-conta-data">
                        <article>
                            <p class="info-title">Nome:</p>
                            <p id="info-conta-name">---</p>
                        </article>
                        <article>
                            <p class="info-title">Email:</p>
                            <p id="info-conta-email">---</p>
                        </article>
                        <article>
                            <p class="info-title">Endereço:</p>
                            <p id="info-conta-address">---</p>
                        </article>
                        <div id="info-data-numdatas">
                            <article>
                                <p class="info-title">Número:</p>
                                <p id="info-conta-number">---</p>
                            </article>
                            <article>
                                <p class="info-title">CEP:</p>
                                <p id="info-conta-cep">---</p>
                            </article>
                        </div>
                    </div>
                    <div id="info-conta-avatar">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61.8 61.8" id="avatar"><g><g><circle cx="30.9" cy="30.9" r="30.9" fill="#ffc200"></circle><path fill="#677079" fill-rule="evenodd" d="M52.587 52.908a30.895 30.895 0 0 1-43.667-.291 9.206 9.206 0 0 1 4.037-4.832 19.799 19.799 0 0 1 4.075-2.322c-2.198-7.553 3.777-11.266 6.063-12.335 0 3.487 3.265 1.173 7.317 1.217 3.336.037 9.933 3.395 9.933-1.035 3.67 1.086 7.67 8.08 4.917 12.377a17.604 17.604 0 0 1 3.181 2.002 10.192 10.192 0 0 1 4.144 5.22z"></path><path fill="#f9dca4" fill-rule="evenodd" d="m24.032 38.68 14.92.09v3.437l-.007.053a2.784 2.784 0 0 1-.07.462l-.05.341-.03.071c-.966 5.074-5.193 7.035-7.803 8.401-2.75-1.498-6.638-4.197-6.947-8.972l-.013-.059v-.2a8.897 8.897 0 0 1-.004-.207c0 .036.003.07.004.106z"></path><path fill-rule="evenodd" d="M38.953 38.617v4.005a7.167 7.167 0 0 1-.095 1.108 6.01 6.01 0 0 1-.38 1.321c-5.184 3.915-13.444.704-14.763-5.983z" opacity=".11"></path><path fill="#f9dca4" fill-rule="evenodd" d="M18.104 25.235c-4.94 1.27-.74 7.29 2.367 7.264a19.805 19.805 0 0 1-2.367-7.264zM43.837 25.235c4.94 1.27.74 7.29-2.368 7.263a19.8 19.8 0 0 0 2.368-7.263z"></path><path fill="#ffe8be" fill-rule="evenodd" d="M30.733 11.361c20.523 0 12.525 32.446 0 32.446-11.83 0-20.523-32.446 0-32.446z"></path><path fill="#8a5c42" fill-rule="evenodd" d="M21.047 22.105a1.738 1.738 0 0 1-.414 2.676c-1.45 1.193-1.503 5.353-1.503 5.353-.56-.556-.547-3.534-1.761-5.255s-2.032-13.763 4.757-18.142a4.266 4.266 0 0 0-.933 3.6s4.716-6.763 12.54-6.568a5.029 5.029 0 0 0-2.487 3.26s6.84-2.822 12.54.535a13.576 13.576 0 0 0-4.145 1.947c2.768.076 5.443.59 7.46 2.384a3.412 3.412 0 0 0-2.176 4.38c.856 3.503.936 6.762.107 8.514-.829 1.752-1.22.621-1.739 4.295a1.609 1.609 0 0 1-.77 1.214c-.02.266.382-3.756-.655-4.827-1.036-1.07-.385-2.385.029-3.163 2.89-5.427-5.765-7.886-10.496-7.88-4.103.005-14 1.87-10.354 7.677z"></path><path fill="#434955" fill-rule="evenodd" d="M19.79 49.162c.03.038 10.418 13.483 22.63-.2-1.475 4.052-7.837 7.27-11.476 7.26-6.95-.02-10.796-5.6-11.154-7.06z"></path><path fill="#e6e6e6" fill-rule="evenodd" d="M36.336 61.323c-.41.072-.822.135-1.237.192v-8.937a.576.576 0 0 1 .618-.516.576.576 0 0 1 .619.516v8.745zm-9.82.166q-.622-.089-1.237-.2v-8.711a.576.576 0 0 1 .618-.516.576.576 0 0 1 .62.516z"></path></g></g></svg>
                    </div>
                </section>
                <section id="info-config">
                    <h2>Configurações</h2>
                    <form action="#">
                        <article>
                            <label for="config1">Modo Escuro</label>
                            <div class="checkbox-slide-div">
                                <input type="checkbox" name="config1" id="config1">
                                <div class="checkbox-slide">
                                    <div class="checkbox-slide-ball"></div>
                                </div>
                            </div>
                        </article>
                        <article>
                            <label for="config2">Receber notificações</label>
                            <div class="checkbox-slide-div">
                                <input type="checkbox" name="config2" id="config2">
                                <div class="checkbox-slide">
                                    <div class="checkbox-slide-ball"></div>
                                </div>
                            </div>
                        </article>
                    </form>
                    <!-- Configurações: Modo Claro/Escuro;  -->
                </section>
                <section id="info-editar">
                    <h2>Editar Informações</h2>
                    <div id="info-editar-block">
                        <form action="#" method="post">
                            <h3>Informações de Perfil e Entrega</h2>
                            <article>
                                <label for="info-editar-name">Nome:</label>
                                <input type="text" name="name" id="info-editar-name" pattern="[a-zA-Z]{1,}" placeholder="Digite um novo nome...">
                            </article>
                            <article>
                                <label for="info-editar-address">Endereço:</label>
                                <input type="text" name="address" id="info-editar-address" placeholder="Digite um novo endereço...">
                            </article>
                            <article>
                                <label for="info-editar-cep">CEP:</label>
                                <input type="text" name="cep" id="info-editar-cep" pattern="[0-9\-\.]{1,}" placeholder="Digite um novo CEP...">
                            </article>
                            <button type="submit" class="info-alterar">Alterar</button>
                        </form>
                        <hr>
                        <form action="#">
                            <h3>Informações Pessoais</h2>
                            <article>
                                <label for="info-editar-email">Email:</label>
                                <input type="text" name="email" id="info-editar-email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+.[a-z.]{2,}" placeholder="Digite um novo email...">
                            </article>
                            <article>
                                <label for="info-editar-number">Número:</label>
                                <input type="text" name="number" id="info-editar-number" pattern="[0-9+-]{,}" placeholder="Digite um novo número...">
                            </article>
                            <div id="info-editar-passwordblock">
                                <article>
                                    <label for="info-editar-password">Senha:</label>
                                    <input type="text" name="password" id="info-editar-password" pattern="[0-9a-zA-Z_\.#\&\-\@]{6,16}" placeholder="Digite uma nova senha...">
                                </article>
                                <article>
                                    <label for="info-editar-passwordconfirm">Confirmar Senha:</label>
                                    <input type="text" name="password-confirm" id="info-editar-passwordconfirm" pattern="[0-9a-zA-Z_\.#\&\-\@]{6,16}" placeholder="Confirme sua nova senha...">
                                </article>
                            </div>
                            <p class="info-editar-descricao">A senha deve conter caracteres de <b>a-z</b>, <b>A-Z</b>, <b>0-9</b> e especiais (<b>_ . # & - @</b>).</p>
                            <p class="info-editar-descricao">Somente de <b>6</b> a <b>16</b> caracteres.</p>
                            <button type="submit" class="info-alterar">Alterar</button>
                        </form>
                    </div>
                </section>
                <section id="info-ped-andamento">
                    <h2>Pedidos em Andamento</h2>
                    <div class="info-list info-list-grid">
                        <div class="info-list-element">
                            <h3>__ Produtos</h3>
                            <p><b>Data da compra: </b><span>--/--/----</span></p>
                            <p><b>Destino: </b><span>---</span></p>
                            <p><b>Previsão de entrega: </b><span>--/--/----</span></p>
                        </div>
                        <div class="info-list-element">
                            <h3>__ Produtos</h3>
                            <p><b>Data da compra: </b><span>--/--/----</span></p>
                            <p><b>Destino: </b><span>---</span></p>
                            <p><b>Previsão de entrega: </b><span>--/--/----</span></p>
                        </div>
                        <div class="info-list-element">
                            <h3>__ Produtos</h3>
                            <p><b>Data da compra: </b><span>--/--/----</span></p>
                            <p><b>Destino: </b><span>---</span></p>
                            <p><b>Previsão de entrega: </b><span>--/--/----</span></p>
                        </div>
                        <div class="info-list-element">
                            <h3>__ Produtos</h3>
                            <p><b>Data da compra: </b><span>--/--/----</span></p>
                            <p><b>Destino: </b><span>---</span></p>
                            <p><b>Previsão de entrega: </b><span>--/--/----</span></p>
                        </div>
                    </div>
                </section>
                <section id="info-ped-concluidos">Pedidos Concluidos</section>
                <section id="info-cupons">Cupons</section>
            </section>
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
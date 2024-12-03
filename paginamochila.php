<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="./css/paginasprodutos.css">
   <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">
  <script src="./assets/js/script.js"></script>
  <script src="./js/main.js"></script>
  <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon_io (1)/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
   <script src="./js/produtos.js" defer></script>
   <title>MOCHILAS</title>
</head>
<body>
<header>
    <div class="header-main">
      <div class="container">
        <a href="index.php" class="header-logo">
          <img src="./img/logo.png" alt="BN DEVS" width="90" height="55">
        </a>
        <div class="header-search-container">
          <input type="search" name="search" class="search-field" placeholder="Procure aqui...">
          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

        </div>
        <div class="header-user-actions">
        <a href="loginTeste.php">
          <button class="action-btn">
            <ion-icon name="person-outline"></ion-icon>
          </button>
          </a>
      
          <a href="carrinho.php">
          <button class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>
          </button>
          </a>
        </div>
      </div>
    </div>
</header>
    <div class="caixa">
        <h3 class="titulo">MOCHILAS</h3>
        <div class="produtos-caixa">
            <div class="produto" data-nome="p-1">
                <img src="./img/mochila1.jpg" alt="MOCHILA">
                <h3>Mochila Notebook Feminina Tecido Tactel Impermeavel </h3>
                <div class="preco">R$116,00</div>
            </div>
            <div class="produto" data-nome="p-2">
                <img src="./img/mochila2.jpg" alt="MOCHILA">
                <h3>Mochila Cross Town Jansport, Unissex.</h3>
                <div class="preco">R$268,00</div>
            </div>
            
            <div class="produto" data-nome="p-3">
                <img src="./img/mochila4.jpg" alt="MOCHILA">
                <h3>Mochila Impermeável Feminina Escolar</h3>
                <div class="preco">R$75,89</div>
            </div>
            
            <div class="produto" data-nome="p-4">
                <img src="./img/mochila3.jpg" alt="MOCHILA">
                <h3>Mochila Bolsa Leve Fofa Feminina Moderna.</h3>
                <div class="preco">R$119,90</div>
            </div>
            
            <div class="produto" data-nome="p-5">
                <img src="./img/mochila5.jpg" alt="MOCHILA">
                <h3>Mochila De Costas Fofa Feminina Escolar Rosa</h3>
                <div class="preco">R$99,97</div>
            </div>
            
            <div class="produto" data-nome="p-6">
                <img src="./img/mochila6.webp"alt="MOCHILA">
                <h3>Mochila Olympikus Braze Unissex</h3>
                <div class="preco">R$179,99</div>
            </div>
        </div>
    </div>
    

    <div class="produtos-preview">
        <div class="preview" data-alvo="p-1">
            <i class="fas fa-times"></i>
            <img src="./img/mochila1.jpg" alt="MOCHILA">
            <h3>Mochila Notebook Feminina Tecido Tactel Molinho Impermeavel Escola Trabalho Passeio Multineos</h3>
            <p>Mochila feminina super estilosa para o dia a dia, tanto para o trabalho, passeios, escola, viagens e etc. </p>
            <div class="preco">R$116,00</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        
        <div class="preview" data-alvo="p-2">
            <i class="fas fa-times"></i>
            <img src="./img/mochila2.jpg" alt="MOCHILA">
            <h3>Mochila Jansport Cross Town Balck</h3>
            <p>Feita em parte com materiais reciclados Bolso unilateral para garrafa d'gua Um largo compartimento principal Bolso frontal com organizador Alça de mão</p>
            <div class="preco">R$268,00</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        <div class="preview" data-alvo="p-3">
            <i class="fas fa-times"></i>
            <img src="./img/mochila4.jpg" alt="MOCHILA">
            <h3>Mochila Impermeável Feminina Escolar colorido.</h3>
            <p>Ideal para trabalhos artesanais e escolares. Ótimo acabamento. Pode ser aplicada sobre papel, papel cartão, gesso, madeira, MDF e cerâmica. Não tóxica.</p>
            <div class="preco">R$75,89</div>
            <div class="botoes">
                <a href="carrinho.php"  class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        <div class="preview" data-alvo="p-4">
            <i class="fas fa-times"></i>
            <img src="./img/mochila3.jpg" alt="MOCHILA">
            <h3>Conjunto Pincel De Pintura</h3>
            <p>A mochila inclui 5 bolsos frontais com zíper e 2 bolsos laterais para garrafas ou objetos pequenos, é projetada para ser leve, garantindo conforto durante o uso diário.</p>
            <div class="preco">R$119,90</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        
        <div class="preview" data-alvo="p-5">
            <i class="fas fa-times"></i>
            <img src="./img/mochila5.jpg" alt="MOCHILA">
            <h3>Mochila De Costas Feminina Escolar Rosa Impermeável</h3>
            <p>Facilidade para carregar seu notebook, agenda, revistas, tablet, guarda-chuva, telefone, chaves, documentos e ainda serve para te ajudar a carregar suas compras ou para viajar</p>
            <div class="preco">R$99,97</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        
        <div class="preview" data-alvo="p-6">
            <i class="fas fa-times"></i>
            <img src="./img/mochila66.webp"alt="MOCHILA">
            <h3>Mochila Olympikus Braze Unissex</h3>
            <p>A Mochila Braze é feita em tecido 100% poliéster, leve, durável, com 2 compartimentos grandes, sendo o principal com compartimento para laptop. </p>
            <div class="preco">R$179,99</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
    </div>
</body>
</html>

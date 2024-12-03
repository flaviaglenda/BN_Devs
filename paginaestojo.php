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
   <title>Estojos</title>
    <?php include './html/head.php' ?>
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
        <a href="login.php">
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
        <h3 class="titulo">ESTOJOS</h3>
        <div class="produtos-caixa">
            <div class="produto" data-nome="p-1">
                <img src="./img/estojo1.jpg" alt="ESTOJO TILIBRA">
                <h3>Estojo Escolar Papelaria Fofa Infantil Unissex</h3>
                <div class="preco">R$33,90</div>
            </div>
            <div class="produto" data-nome="p-2">
                <img src="./img/estojo2.jpg" alt="ESTOJO">
                <h3>Estojo Escolar Box, Calmfy.</h3>
                <div class="preco">R$28,90</div>
            </div>
            
            <div class="produto" data-nome="p-3">
                <img src="./img/estojo3.webp" alt="ESTOJO TILIBRA">
                <h3>Estojo Triplo Académie Cereja - Tilibra</h3>
                <div class="preco">R$88,90</div>
            </div>
            
            <div class="produto" data-nome="p-4">
                <img src="./img/estojo4.webp" alt="ESTOJO ESCOLAR">
                <h3>Estojo BOX escolar de grande capacidade </h3>
                <div class="preco">R$66,50</div>
            </div>
            
            <div class="produto" data-nome="p-5">
                <img src="./img/estojo6.webp" alt="ESTOJO ESCOLAR">
                <h3>Estojo de Grande Capacidade em Poliéster - Leve e Portátil</h3>
                <div class="preco">R$99,90</div>
            </div>
            
            <div class="produto" data-nome="p-6">
                <img src="./img/estojo5.webp" alt="ESTOJO ESCOLAR">
                <h3>Estojo HD Escolar Organizador Faculdade 2 Divisórias - Preto</h3>
                <div class="preco">R$62,79</div>
            </div>
        </div>
    </div>
    
    <div class="produtos-preview">
        <div class="preview" data-alvo="p-1">
            <i class="fas fa-times"></i>
            <img src="./img/estojo1.jpg" alt="ESTOJO TILIBRA">
            <h3>Estojo Escolar Feminino Masculino Grande Box Ziper Escolar Papelaria </h3>
            <p>Design moderno e arrojado. Forro reforçado. Zípers resistentes e seguros. Com organizadores para armazenar lápis e/ou canetas.</p>
            <div class="preco">R$33,90</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        
        <div class="preview" data-alvo="p-2">
            <i class="fas fa-times"></i>
            <img src="./img/estojo2.jpg" alt="ESTOJO">
            <h3>Estojo Escolar de grande capacidade</h3>
            <p>Material primeira linha- Costura reforçado com materias de qualidade garantindo elegancia e durabilidade, permite armazenar 100 lápis tranquilamente, além disso possui bolso externo facilitando o armazenamento rápido</p>
            <div class="preco">R$28,90</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        <div class="preview" data-alvo="p-3">
            <i class="fas fa-times"></i>
            <img src="./img/estojo3.webp" alt="ESTOJO TILIBRA">
            <h3>Estojo Triplo Académie Cereja - Tilibra</h3>
            <p>A coleção possui estojos triplos, no formato grande (200 x 90 mm), com três compartimentos fechados por zíper para manter a organização dos objetos.</p>
            <div class="preco">R$88,90</div>
            <div class="botoes">
                <a href="carrinho.php"  class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        <div class="preview" data-alvo="p-4">
            <i class="fas fa-times"></i>
            <img src="./img/estojo4.webp" alt="ESTOJO">
            <h3>Estojo BOX escolar</h3>
            <p>Feito com material de alta qualidade, este estojo organizador não apenas armazena, mas eleva seu estilo
            Com uma grande capacidade distribuída em 4 camadas, oferece 72 orifícios para inserção, garantindo um espaço para cada ferramenta de escrita ou desenho.</p>
            <div class="preco">R$66,50</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        
        <div class="preview" data-alvo="p-5">
            <i class="fas fa-times"></i>
            <img src="./img/estojo6.webp" alt="ESTOJO">
            <h3>Estojo de Grande Capacidade </h3>
            <p>Feito de poliéster leve e durável, o estojo é fácil de transportar e proporciona longa vida útil. Seu design funcional combina portabilidade e estilo, sendo uma escolha versátil para o uso diário.</p>
            <div class="preco">R$99,90</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        
        <div class="preview" data-alvo="p-6">
            <i class="fas fa-times"></i>
            <img src="./img/estojo55.webp" alt="ESTOJO">
            <h3>Estojo HD Escolar</h3>
            <p>A Upper Fashion, varejo constituído para a revenda de Mochilas, Bolsas e Malas de Viagem, vem se especializando no varejo online e se tornando referência em qualidade e confiança. </p>
            <div class="preco">R$62,79</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
    </div>
</body>
</html>

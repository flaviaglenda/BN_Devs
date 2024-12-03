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
   <title>Decorações</title>
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
        <h3 class="titulo">DECORAÇÕES</h3>
        <div class="produtos-caixa">
            <div class="produto" data-nome="p-1">
                <img src="./img/brinquedo1.jpg" alt="UNO">
                <h3>UNO Original</h3>
                <div class="preco">R$16,14</div>
            </div>
            <div class="produto" data-nome="p-2">
                <img src="./img/brinquedo2.jpg" alt="BRINQUEDO BLOCOS">
                <h3> Blocos De Montar 96 peças educativos </h3>
                <div class="preco">R$19,90</div>
            </div>
            
            <div class="produto" data-nome="p-3">
                <img src="./img/brinquedo3.webp" alt="MASSINHA DE MODELAR">
                <h3>Massinha de Modelar Soft Acrilex - 12 cores</h3>
                <div class="preco">R$05,90</div>
            </div>
            
            <div class="produto" data-nome="p-4">
                <img src="./img/brinquedo4.jpg" alt="BRINQUEDO">
                <h3>Kendy Cubo Baby Educativo</h3>
                <div class="preco">R$14,99</div>
            </div>
            
            <div class="produto" data-nome="p-5">
                <img src="./img/brinquedo5.jpg" alt="BRINQUEDO">
                <h3>Cometa Brinquedos, Coleção Bichinhos, Vinil, Elefante</h3>
                <div class="preco">R$14,90</div>
            </div>
            
            <div class="produto" data-nome="p-6">
                <img src="./img/brinquedo6.webp" alt="BRINQUEDO">
                <h3>Super Truck Blocolândia 18 Peças Dismat </h3>
                <div class="preco">R$17,99</div>
            </div>
        </div>
    </div>
    

    <div class="produtos-preview">
        <div class="preview" data-alvo="p-1">
            <i class="fas fa-times"></i>
            <img src="./img/brinquedo1.jpg" alt="UNO">
            <h3>UNO Original</h3>
            <p>As cartas de ação especiais e curingas para emoções inesperadas e diversão que pode mudar o jogo.</p>
            <div class="preco">R$16,14</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        
        <div class="preview" data-alvo="p-2">
            <i class="fas fa-times"></i>
            <img src="./img/brinquedo2.jpg" alt="BRINQUEDO BLOCOS">
            <h3>Blocos De Montar 96 peças educativos didático infantil</h3>
            <p>+3 anos
Para montar e desmontar
Com 96 peças
Peças coloridas
Resistente</p>
            <div class="preco">R$19,90</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        <div class="preview" data-alvo="p-3">
            <i class="fas fa-times"></i>
            <img src="./img/brinquedo3.webp" alt="MASSINHA DE MODELAR">
            <h3>Massinha de Modelar Soft Acrilex - 12 cores</h3>
            <p>Foi desenvolvida para uso escolar ou entretenimento. Ideal para atividades de desenvolvimento da coordenação motora e percepção de formas. </p>
            <div class="preco">R$05,90</div>
            <div class="botoes">
                <a href="carrinho.php"  class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        <div class="preview" data-alvo="p-4">
            <i class="fas fa-times"></i>
            <img src="./img/brinquedo4.jpg" alt="BRINQUEDO">
            <h3>Kendy Cubo Baby Educativo Com Blocos Colorido</h3>
            <p>O Cubo Baby Educativo auxilia no aprendizado através do reconhecimento de cores e formas geométricass. Aprender brincando é mais divertido!</p>
            <div class="preco">R$14,99</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        
        <div class="preview" data-alvo="p-5">
            <i class="fas fa-times"></i>
            <img src="./img/brinquedo5.jpg" alt="BRINQUEDO">
            <h3>Cometa Brinquedos, Coleção Bichinhos, Vinil, Elefante, Colorido, Levemente Perfumado</h3>
            <p>Coleção de bichinhos para sua criança!
            Divertido e Educativo!</p>
            <div class="preco">R$14,90</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        
        <div class="preview" data-alvo="p-6">
            <i class="fas fa-times"></i>
            <img src="./img/brinquedo6.webp" alt="BRINQUEDO">
            <h3>Super Truck Blocolândia 18 Peças Dismat</h3>
            <p>Brinquedo que estimula a inteligência, criatividade, e imaginação, melhorando as atividades motoras, foco e concentração. Formas que auxiliam no aprendizado e coordenação motora. </p>
            <div class="preco">R$17,99</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
    </div>
</body>
</html>

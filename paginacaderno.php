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
   <title>Cadernos</title>
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
        <h3 class="titulo">Cadernos</h3>
        <div class="produtos-caixa">
            <div class="produto" data-nome="p-1">
                <img src="./img/caderno1.jpg" alt="CADERNO CICERO">
                <h3>Caderno Organizador Duo Astral Pautado & Pontado, Cicero</h3>
                <div class="preco">R$42,11</div>
            </div>
            <div class="produto" data-nome="p-2">
                <img src="./img/caderno2.jpg" alt="CADERNO CICERO">
                <h3>Caderno Espiral Bossa Nova Pautado 17x24 Boemia, Cicero</h3>
                <div class="preco">R$47,59</div>
            </div>
            
            <div class="produto" data-nome="p-3">
                <img src="./img/caderno3.jpg" alt="CADERNO TILIBRA">
                <h3>Tilibra - Caderneta Espiral Capa Plástica, Turquesa, 80 folhas</h3>
                <div class="preco">R$19,70</div>
            </div>
            
            <div class="produto" data-nome="p-4">
                <img src="./img/caderno4.jpg" alt="CADERNO ZIP">
                <h3>Caderno Espiral Capa Dura Universitário, Zip</h3>
                <div class="preco">R$13,90</div>
            </div>
            
            <div class="produto" data-nome="p-5">
                <img src="./img/caderno5.avif" alt="CADERNO SPIRAL SOOT">
                <h3>Caderno Universitário Argolado Capa Dura, Lilás, Spiral Soot</h3>
                <div class="preco">R$99,90</div>
            </div>
            
            <div class="produto" data-nome="p-6">
                <img src="./img/caderno6.avif" alt="CADERNO SPIRAL BRIEF">
                <h3>Caderno Universitário Capa Dura, Rosa Spiral, Brief</h3>
                <div class="preco">R$16,00</div>
            </div>
        </div>
    </div>
    
    <div class="produtos-preview">
        <div class="preview" data-alvo="p-1">
            <i class="fas fa-times"></i>
            <img src="./img/cicero1.jpg" alt="CADERNO CICERO">
            <h3>Caderno Cicero</h3>
            <p><strong>Esse produto tem:</strong> -Bolsa Pasta -Cartela de adesivos funcionais exclusiva do produto -4 divisórias coloridas com abas customizáveis -Miolo Duo Offset 90g: 40 folhas pautadas + 40 folhas pontado.</p>
            <div class="preco">R$42,11</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        
        <div class="preview" data-alvo="p-2">
            <i class="fas fa-times"></i>
            <img src="./img/cadernocicero2.jpg" alt="CADERNO CICERO">
            <h3>Caderno Espiral Bossa Nova </h3>
            <p>O Caderno Espiral Bossa Nova Pautado 17x24 Boemia é perfeito para estudos, trabalhos e ideias.</p>
            <div class="preco">R$47,59</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        <div class="preview" data-alvo="p-3">
            <i class="fas fa-times"></i>
            <img src="./img/caderno3.jpg" alt="CADERNO TILIBRA">
            <h3>Tilibra - Caderneta Espiral</h3>
            <p><strong>Formato:</strong> 110mm x 154mm
            <strong>Gramatura:</strong> 75 g/m²
            <strong>Número de folhas:</strong> 80 folhas
            <strong>Produto certificado:</strong> FSC
            Capa , <strong>Folhas:</strong> coloridas</p>
            <div class="preco">R$19,70</div>
            <div class="botoes">
                <a href="carrinho.php"  class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        <div class="preview" data-alvo="p-4">
            <i class="fas fa-times"></i>
            <img src="./img/caderno4.jpg" alt="CADERNO ZIP">
            <h3>Caderno Espiral Capa Dura Universitário</h3>
            <p>O Caderno Universitário 1 Matéria Zip é uma ótima opção para quem deseja um produto versátil. Este modelo tem acabamento em espiral, capa dura e 80 folhas pautadas.</p>
            <div class="preco">R$13,90</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        
        <div class="preview" data-alvo="p-5">
            <i class="fas fa-times"></i>
            <img src="./img/caderno55.avif" alt="CADERNO SPIRAL SOOT">
            <h3>Caderno Universitário Argolado Capa Dura</h3>
            <p>O caderno universitário argolado Soothing é ideal para estimular a organização dos estudos diários e alcançar as metas e objetivos sem perder a motivação. Com 160 folhas pautadas 10 divisórias plásticas coloridas e fechamento em imã.</p>
            <div class="preco">R$99,90</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        
        <div class="preview" data-alvo="p-6">
            <i class="fas fa-times"></i>
            <img src="./img/caderno6.avif" alt="">
            <h3>Caderno Universitário Capa Dura, Rosa Spiral</h3>
            <p>O Caderno Espiral Capa Dura Universitário 1 Matéria Brief 80 Folhas, possui capa dura com a parte interna decorada, bolsa de plástico para guardar trabalhos e anotações e folhas pautada padrão.</p>
            <div class="preco">R$16,00</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
    </div>
</body>
</html>

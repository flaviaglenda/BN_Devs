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
   <title>Pintura</title>
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
        <h3 class="titulo">PINTURAS</h3>
        <div class="produtos-caixa">
            <div class="produto" data-nome="p-1">
                <img src="./img/pintura1.webp" alt="TINTA GUACHE">
                <h3>Kit Tinta Guache 12 Cores Acrilex + 2 Pincéis</h3>
                <div class="preco">R$23,50</div>
            </div>
            <div class="produto" data-nome="p-2">
                <img src="./img/pintura2.webp" alt="TINTA ACRILEX">
                <h3>Tinta PVA Fosca Acrilex 500ml</h3>
                <div class="preco">R$44,30</div>
            </div>
            
            <div class="produto" data-nome="p-3">
                <img src="./img/pintura3.png" alt="TINTA FOSCA">
                <h3>Tinta Fosca para Artes 37ml 6 cores Acrilex</h3>
                <div class="preco">R$47,30</div>
            </div>
            
            <div class="produto" data-nome="p-4">
                <img src="./img/pintura4.webp"alt="KIT PINCÉIS">
                <h3>6 Peças Conjunto Pincel De Pintura Com Aquarela Artigos De Papelaria</h3>
                <div class="preco">R$22,79</div>
            </div>
            
            <div class="produto" data-nome="p-5">
                <img src="./img/pintura5.jpg" alt="TELA DE PINTURA">
                <h3>Tela de Pintura 18x24</h3>
                <div class="preco">R$07,31</div>
            </div>
            
            <div class="produto" data-nome="p-6">
                <img src="./img/pintura6.webp"  alt="GIZ">
                <h3>Conjunto de cores para desenho e arte em massa macia, giz.</h3>
                <div class="preco">R$61,06</div>
            </div>
        </div>
    </div>
    

    <div class="produtos-preview">
        <div class="preview" data-alvo="p-1">
            <i class="fas fa-times"></i>
            <img src="./img/pintura1.webp"alt="TINTA GUACHE">
            <h3>Kit Tinta Guache</h3>
            <p>Kit Tinta guache 12 cores Acrilex + 2 Pincéis O kit inclui: Tinta guache 12 cores Acrilex + Brinde 2 Pincéis Tinta guache 15ml 12 cores Acrilex Utilizada para pintar em papel cartão, papel, gesso, cartolina, madeira, cerâmica e e.v.a.</p>
            <div class="preco">R$23,50</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        
        <div class="preview" data-alvo="p-2">
            <i class="fas fa-times"></i>
            <img src="./img/pintura2.webp"alt="TINTA PVA">
            <h3>Tinta PVA Fosca Acrilex 500ml 03250</h3>
            <p>Tinta fosca para Artesanato.</p>
            <div class="preco">R$44,30</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        <div class="preview" data-alvo="p-3">
            <i class="fas fa-times"></i>
            <img src="./img/pintura3.png" alt="TINTA FOSCA">
            <h3>Tinta Fosca para Artes</h3>
            <p>Ideal para trabalhos artesanais e escolares. Ótimo acabamento. Pode ser aplicada sobre papel, papel cartão, gesso, madeira, MDF e cerâmica. Não tóxica.</p>
            <div class="preco">R$47,30</div>
            <div class="botoes">
                <a href="carrinho.php"  class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        <div class="preview" data-alvo="p-4">
            <i class="fas fa-times"></i>
            <img src="./img/pintura4.webp" alt="KIT PINCEIS">
            <h3>Conjunto Pincel De Pintura</h3>
            <p>Quantidade: 6pçs Tamanho:#000,#00,#0,#1,#2,#4 Comprimento: aprox. 185mm/7,28 polegadas Cor: vermelho Aplicação: aquarela, guache, pintura de óleo, pintura acrílica, pintura miniatura miniatura</p>
            <div class="preco">R$22,79</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        
        <div class="preview" data-alvo="p-5">
            <i class="fas fa-times"></i>
            <img src="./img/pintura5.jpg" alt="TELA DE PINTURA">
            <h3>Tela de Pintura  </h3>
            <p>Marca	Supertela Cor	BRANCO Material	Madeira, Linho Dimensões do produto	18C x 24L centímetros Tipo de pintura	Óleo, Acrílica, Aquarela</p>
            <div class="preco">R$07,31</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        
        <div class="preview" data-alvo="p-6">
            <i class="fas fa-times"></i>
            <img src="./img/pintura6.webp" alt="GIZ">
            <h3>Quadro de pintura maria em 48 cores.</h3>
            <p>A Upper Fashion, varejo constituído para a revenda de Mochilas, Bolsas e Malas de Viagem, vem se especializando no varejo online e se tornando referência em qualidade e confiança. </p>
            <div class="preco">R$61,06</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
    </div>
</body>
</html>

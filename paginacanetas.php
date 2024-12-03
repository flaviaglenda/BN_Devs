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
   <title>CANETAS</title>
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
        <h3 class="titulo">CANETAS</h3>
        <div class="produtos-caixa">
            <div class="produto" data-nome="p-1">
                <img src="./img/caneta1.webp" alt="CANETA BIC">
                <h3>Canetas Coloridas Bic Cristal </h3>
                <div class="preco">R$14,25</div>
            </div>
            <div class="produto" data-nome="p-2">
                <img src="./img/caneta2.webp" alt="CANETA">
                <h3>Canetas Coloridas Ponta Fina Fineliner 0.4mm Kit</h3>
                <div class="preco">R$25,85</div>
            </div>
            
            <div class="produto" data-nome="p-3">
                <img src="./img/caneta3.webp" alt="CANETA">
                <h3>Caneta Esferográfica Cristal Dura Mais, A Clássica.</h3>
                <div class="preco">R$09,70</div>
            </div>
            
            <div class="produto" data-nome="p-4">
                <img src="./img/caneta4.webp" alt="CANETA">
                <h3>Caneta esferográfica 0.7mm Spiro</h3>
                <div class="preco">R$31,10</div>
            </div>
            
            <div class="produto" data-nome="p-5">
                <img src="./img/caneta5.webp" alt="CANETA">
                <h3>Caneta Pincel dual Tip Aquarelável.</h3>
                <div class="preco">R$32,91</div>
            </div>
            
            <div class="produto" data-nome="p-6">
                <img src="./img/caneta66.webp" alt="CANETA">
                <h3>Caneta Esferográfica SPIRO, CIS.</h3>
                <div class="preco">R$64,90</div>
            </div>
        </div>
    </div>
    

    <div class="produtos-preview">
        <div class="preview" data-alvo="p-1">
            <i class="fas fa-times"></i>
            <img src="./img/caneta11.jpg" alt="CANETABIC">
            <h3>Canetas Coloridas Bic Cristal Fashion 10 Cores Vibrantes</h3>
            <p>Canetas coloridas com 10 cores diferentes
Escrita suave
Cores vibrantes
Caneta esferográfica com ponta de tungstênio ultra resistente</p>
            <div class="preco">R$14,25</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        
        <div class="preview" data-alvo="p-2">
            <i class="fas fa-times"></i>
            <img src="./img/caneta2.webp"  alt="MOCHILA">
            <h3>Canetas Coloridas Ponta Fina Fineliner 0.4mm Kit</h3>
            <p>Marca	Artpen
Cor da tinta	Várias cores
Número de itens	24
Tipo de ponto	Fino</p>
            <div class="preco">R$25,85</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        <div class="preview" data-alvo="p-3">
            <i class="fas fa-times"></i>
            <img src="./img/caneta3.webp" alt="CANETA">
            <h3> Caneta Esferográfica Cristal Dura Mais, A Clássica, 4 Unidades</h3>
            <p>Ideal para trabalhos artesanais e escolares. Ótimo acabamento. Pode ser aplicada sobre papel, papel cartão, gesso, madeira, MDF e cerâmica. Não tóxica.</p>
            <div class="preco">R$09,70</div>
            <div class="botoes">
                <a href="carrinho.php"  class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        <div class="preview" data-alvo="p-4">
            <i class="fas fa-times"></i>
            <img src="./img/caneta4.webp" alt="CANETA">
            <h3>Caneta esferográfica 0.7mm Spiro com 8 unidades Cis</h3>
            <p>
Marca	CIS
Formato de instrumento de escrita	Caneta esferográfica
Cor	Multicolorido</p>
            <div class="preco">R$31,10</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        
        <div class="preview" data-alvo="p-5">
            <i class="fas fa-times"></i>
            <img src="./img/caneta5.webp" alt="CANETA">
            <h3>Caneta Pincel dual Tip Aquarelável com 10 cores Cis</h3>
            <p>Marca	CIS
Cor da tinta	Multicor
Número de itens	1
Tipo de ponto	Fino</p>
            <div class="preco">R$32,91</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
        
        <div class="preview" data-alvo="p-6">
            <i class="fas fa-times"></i>
            <img src="./img/caneta66.webp" alt="CANETA">
            <h3>Caneta Esferográfica SPIRO, CIS, Azul e Preta, pacote de 24.</h3>
            <p>
Marca	CIS
Formato de instrumento de escrita	Caneta esferográfica
Cor	Azul e Preta
Cor da tinta	Preto/azul</p>
            <div class="preco">R$64,90</div>
            <div class="botoes">
                <a href="carrinho.php" class="carrinho">adicionar ao carrinho</a>
            </div>
        </div>
    </div>
</body>
</html>

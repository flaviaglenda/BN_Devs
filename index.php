<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Papelaria Boas Novas</title>
  <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./css/home.css" />
  <script src="./assets/js/script.js"></script>
  <script src="./js/main.js"></script>
  <?php include './html/head.php' ?>
  <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon_io (1)/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
  <div class="overlay" data-overlay></div>
  <header>
    <div class="header-main">
      <div class="container">
        <a href="#" class="header-logo">
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
    <nav class="desktop-navigation-menu">
      <div class="container">
        <ul class="desktop-menu-category-list">
          <li class="menu-category">
            <a href="#" class="menu-title">Início</a>
          </li>

        

          <li class="">
           

          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Categorias</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="paginacaderno.php">Caderno</a>
              </li>

              <li class="dropdown-item">
                <a href="paginapintura.php">Pintura</a>
              </li>

              <li class="dropdown-item">
                <a href="paginamochila.php">Mochila</a>
              </li>

              <li class="dropdown-item">
                <a href="paginaacessorios.php">Acessórios</a>
              </li>
              <li class="dropdown-item">
                <a href="paginabrinquedo.php">Brinquedos</a>
              </li>
              <li class="dropdown-item">
                <a href="paginacanetas.php">Canetas</a>
              </li>
              <li class="dropdown-item">
                <a href="paginaestojo.php">Estojo</a>
              </li>
            </ul>
          </li>

      </div>
    </nav>

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </button>

    </div>

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      <ul class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="#" class="menu-title">Home</a>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Men's</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Shirt</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Shorts & Jeans</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Safety Shoes</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Wallet</a>
            </li>
          </ul>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Women's</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Dress & Frock</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Earrings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Necklace</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Makeup Kit</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Jewelry</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Earrings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Couple Rings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Necklace</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Bracelets</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Perfume</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Clothes Perfume</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Deodorant</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Flower Fragrance</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Air Freshener</a>
            </li>
          </ul>
        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Blog</a>
        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Hot Offers</a>
        </li>

      </ul>

      <div class="menu-bottom">
        <ul class="menu-category-list">
          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Language</p>
              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>
            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">English</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Espa&ntilde;ol</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Fren&ccedil;h</a>
              </li>
            </ul>

          </li>
          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Currency</p>
              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">USD &dollar;</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">EUR &euro;</a>
              </li>
            </ul>
          </li>
        </ul>

        <ul class="menu-social-container">
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <main>
    <div class="banner">
      <div class="container">
        <div class="slider-container has-scrollbar">
          <div class="slider-item">
            <img src="./img/slide1.jpeg"  alt="women's latest fashion sale" class="banner-img">
          </div>

          <div class="slider-item">
            <img src="./img/slide2.jpeg"  alt="modern sunglasses" class="banner-img">
          </div>

          <div class="slider-item">
            <img src="./img/slide3.jpeg"  alt="new fashion summer sale" class="banner-img">
          </div>
        </div>
      </div>
    </div>

    <div class="category">
      <div class="container">
        <div class="category-item-container has-scrollbar">
          <div class="category-item">
            <div class="category-img-box">
              <img src="./img/brinq.jpeg" alt="dress & frock" width="30">
            </div>

            <div class="category-content-box">
            <a href="brinq.php">
              <div class="category-content-flex">
                <h3 class="category-item-title">Brinquedos</h3>

             
              </div>
              <a href="paginabrinquedo.php" class="category-btn">Clique aqui</a></a>
            </div>
          </div>

          <div class="category-item">
            <div class="category-img-box">
              <img src="./img/caderno.jpeg" alt="winter wear" width="30">
            </div>
            <div class="category-content-box">
            <a href="caderno.php">
              <div class="category-content-flex">
                <h3 class="category-item-title">Cadernos</h3>
              </div>

              <a href="paginacaderno.php" class="category-btn">Clique aqui</a></a>
            </div>
          </div>
          <div class="category-item">

            <div class="category-img-box">
              <img src="./img/estojo.jpeg" alt="glasses & lens" width="30">
            </div>

            <div class="category-content-box">
              <div class="category-content-flex">
                <h3 class="category-item-title">Estojo</h3>

              </div>
              <a href="paginaestojo.php" class="category-btn">Clique aqui</a></a>

            </div>
          </div>
          <div class="category-item">
            <div class="category-img-box">
              <img src="./img/balao.jpeg" alt="shorts & jeans" width="30">
            </div>

            <div class="category-content-box">
            <a href="acesso.php">
              <div class="category-content-flex">
                <h3 class="category-item-title">Decorações</h3>

              </div>

              <a href="paginadecoracao.php" class="category-btn">Clique aqui</a></a>
            </div>
          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./img/lapis.jpeg" alt="t-shirts" width="30">
            </div>

            <div class="category-content-box">
            <a href="caderno.php">
              <div class="category-content-flex">
                <h3 class="category-item-title">Pintura</h3>

              
              </div>

              <a href="paginapintura.php" class="category-btn">Clique aqui</a></a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./img/mochila.jpeg" alt="jacket" width="30">
            </div>

            <div class="category-content-box">
            <a href="acesso.php">
              <div class="category-content-flex">
                <h3 class="category-item-title">mochila</h3>

             
              </div>

              <a href="paginamochila.php" class="category-btn">Clique aqui</a></a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./img/acessorio.jpeg" alt="watch" width="30">
            </div>

            <div class="category-content-box">
            <a href="acesso.php">
              <div class="category-content-flex">
                <h3 class="category-item-title">acessórios</h3>

              
              </div>

              <a href="paginaacessorios.php" class="category-btn">Clique aqui</a></a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./img/caneta.jpeg" alt="hat & caps" width="30">
            </div>

            <div class="category-content-box">
            <a href="estojo.php">
              <div class="category-content-flex">
                <h3 class="category-item-title">canetas</h3>
              </div>

              <a href="paginacanetas.php" class="category-btn">Clique aqui</a>
              </a>
            </div>

          </div>

        </div>

      </div>

    </div>


    <div class="product-container">

      <div class="container">

        <div class="sidebar  has-scrollbar" data-mobile-menu>

          <div class="sidebar-category">

            <div class="sidebar-top">
              <h2 class="sidebar-title">Marcas</h2>

              <button class="sidebar-close-btn" data-mobile-menu-close-btn>
              
              </button>
            </div>

            <ul class="sidebar-menu-category-list">

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                  <img src="./img/cis.webp" alt="clothes" width="35" height="30"
                      class="menu-title-img">

                    <p class="menu-title">Cis</p>
                  </div>

                  <div>
                    
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Kids</p>
                      <data value="300" class="stock" title="Available Stock">300</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Decoraçaõ</p>
                      <data value="60" class="stock" title="Available Stock">60</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">TodoLivro</p>
                      <data value="50" class="stock" title="Available Stock">50</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">dress & frock</p>
                      <data value="87" class="stock" title="Available Stock">87</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                  <img src="./img/todol.png" alt="footwear" class="menu-title-img" width="35"
                      height="35">

                    <p class="menu-title">TodoLivro</p>
                  </div>

                  <div>
                    
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Sports</p>
                      <data value="45" class="stock" title="Available Stock">45</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Formal</p>
                      <data value="75" class="stock" title="Available Stock">75</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Casual</p>
                      <data value="35" class="stock" title="Available Stock">35</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Safety Shoes</p>
                      <data value="26" class="stock" title="Available Stock">26</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                  <img src="./img/castel.png" alt="clothes" class="menu-title-img" width="40"
                      height="45">

                    <p class="menu-title">Faber Castell</p>
                  </div>

                  <div>
                  
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Earrings</p>
                      <data value="46" class="stock" title="Available Stock">46</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Couple Rings</p>
                      <data value="73" class="stock" title="Available Stock">73</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Necklace</p>
                      <data value="61" class="stock" title="Available Stock">61</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                  <img src="./img/acril.jpg" alt="cosmetics" class="menu-title-img" width="40"
                      height="50">

                    <p class="menu-title">Acrilex</p>
                  </div>

                  <div>
                   
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Shampoo</p>
                      <data value="68" class="stock" title="Available Stock">68</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Sunscreen</p>
                      <data value="46" class="stock" title="Available Stock">46</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Body Wash</p>
                      <data value="79" class="stock" title="Available Stock">79</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Makeup Kit</p>
                      <data value="23" class="stock" title="Available Stock">23</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                  <img src="./img/dac.png" alt="glasses" class="menu-title-img" width="40"
                      height="40">

                    <p class="menu-title">Dac</p>
                  </div>

                  <div>
                   
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Sunglasses</p>
                      <data value="50" class="stock" title="Available Stock">50</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Lenses</p>
                      <data value="48" class="stock" title="Available Stock">48</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  
              </li>

            </ul>

          </div>
<!-- sobre a loja... -->
          <div class="product-showcase">
            <h3 class="showcase-heading">ㅤ</h3>
            <div class="showcase-wrapper">
              <div class="showcase-container">
                <div class="showcase">
                  <div class="showcase-content">
                    <a href="#">
                      <h4 class="showcase-title">ㅤ</h4>
                    </a>
                   </div>
                   </div>
               <div class="showcase">
                  <div class="showcase-content">
                  </div>
                </div>
                <div class="showcase">
                 <div class="showcase-content">
                  </div>
                </div>
                <div class="showcase">
                  <div class="showcase-content">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="product-box">
          <div class="product-minimal">
            <div class="product-showcase">

            <!-- produtos -->
              <h2 class="title">Novidades</h2>

              <div class="showcase-wrapper has-scrollbar">

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./img/nov1.jpeg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Marcadores MultiMark</h4>
                      </a>

                      <a href="#" class="showcase-category">Preço </a>

                      <div class="price-box">
                        <p class="price">R$ 149,90</p>
                     
                      </div>

                    </div>

                  </div>

                  <div class="showcase">
                  
                    <a href="#" class="showcase-img-box">
                      <img src="./img/nov2.jpeg"  alt="girls pink embro design top" class="showcase-img" width="70">
                    </a>
                  
                    <div class="showcase-content">
                  
                      <a href="#">
                        <h4 class="showcase-title">Borracha BRW Sachê </h4>
                      </a>
                  
                      <a href="#" class="showcase-category">Preço </a>
                  
                      <div class="price-box">
                        <p class="price">R$ 12,00</p>
                     
                      </div>
                  
                    </div>
                  
                  </div>

                  <div class="showcase">
                  
                    <a href="#" class="showcase-img-box">
                      <img src="./img/nov3.jpeg"  alt="black floral wrap midi skirt" class="showcase-img"
                        width="70">
                    </a>
                  
                    <div class="showcase-content">
                  
                      <a href="#">
                        <h4 class="showcase-title">Caneta Esferográfica 1.0mm</h4>
                      </a>
                  
                      <a href="#" class="showcase-category">Preço </a>
                  
                      <div class="price-box">
                        <p class="price">R$ 25,90</p>
                     
                      </div>
                  
                    </div>
                  
                  </div>

                  <div class="showcase">
                  
                    <a href="#" class="showcase-img-box">
                      <img src="./img/nov4.jpeg"  alt="pure garment dyed cotton shirt" class="showcase-img"
                        width="70">
                    </a>
                  
                    <div class="showcase-content">
                  
                      <a href="#">
                        <h4 class="showcase-title">Teclado Oex Multiwork</h4>
                      </a>
                  
                      <a href="#" class="showcase-category">Preço </a>
                  
                      <div class="price-box">
                        <p class="price">R$ 59,60</p>
                
                      </div>
                  
                    </div>
                  
                  </div>

                </div>

                <div class="showcase-container">
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                   

                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">ㅤ</h4>
                      </a>
                
                      <a href="#" class="showcase-category">ㅤ</a>
                
                      <div class="price-box">
                        <p class="price">ㅤ</p>
                        <del>ㅤ</del>
                      </div>
                
                    </div>
                
                  </div>
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                    
                   
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">ㅤ</h4>
                      </a>
                
                      <a href="#" class="showcase-category">ㅤ</a>
                
                      <div class="price-box">
                        <p class="price">ㅤ</p>
                        <del>ㅤ</del>
                      </div>
                
                    </div>
                  </div>
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                   
                   
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">ㅤ</h4>
                      </a>
                
                      <a href="#" class="showcase-category">ㅤ</a>
                
                      <div class="price-box">
                        <p class="price">ㅤ</p>
                        <del>ㅤ</del>
                      </div>
                
                    </div>
                
                  </div>
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                 
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">ㅤ</h4>
                      </a>
                
                      <a href="#" class="showcase-category">ㅤ</a>
                
                      <div class="price-box">
                        <p class="price">ㅤ</p>
                        <del>ㅤ</del>
                      </div>
                
                    </div>
                
                  </div>
                
                </div>

              </div>

            </div>

            <div class="product-showcase">
            
              <h2 class="title">Mais vendidos</h2>
            
              <div class="showcase-wrapper  has-scrollbar">
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./img/mv1.jpeg" alt="running & trekking shoes - white" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Marca Texto Stabilo</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Preço</a>
            
                      <div class="price-box">
                        <p class="price">$49.00</p>
                  
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./img/mv2.jpeg" alt="trekking & running shoes - black" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Marca Texto Cis</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Preço</a>
            
                      <div class="price-box">
                        <p class="price">$78.00</p>
                  
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./img/mv3.jpeg" alt="womens party wear shoes" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Caneta Stabilo Point</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Preço</a>
            
                      <div class="price-box">
                        <p class="price">$94.00</p>
                 
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./img/m4.jpeg"alt="sports claw women's shoes" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Aquarela Cis </h4>
                      </a>
            
                      <a href="#" class="showcase-category">Preço</a>
            
                      <div class="price-box">
                        <p class="price">$54.00</p>
                       
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
            
                
                <div class="showcase-container">
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                   

                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">ㅤ</h4>
                      </a>
                
                      <a href="#" class="showcase-category">ㅤ</a>
                
                      <div class="price-box">
                        <p class="price">ㅤ</p>
                        <del>ㅤ</del>
                      </div>
                
                    </div>
                
                  </div>
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                    
                   
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">ㅤ</h4>
                      </a>
                
                      <a href="#" class="showcase-category">ㅤ</a>
                
                      <div class="price-box">
                        <p class="price">ㅤ</p>
                        <del>ㅤ</del>
                      </div>
                
                    </div>
                  </div>
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                   
                   
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">ㅤ</h4>
                      </a>
                
                      <a href="#" class="showcase-category">ㅤ</a>
                
                      <div class="price-box">
                        <p class="price">ㅤ</p>
                        <del>ㅤ</del>
                      </div>
                
                    </div>
                
                  </div>
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                 
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">ㅤ</h4>
                      </a>
                
                      <a href="#" class="showcase-category">ㅤ</a>
                
                      <div class="price-box">
                        <p class="price">ㅤ</p>
                        <del>ㅤ</del>
                      </div>
                
                    </div>
                
                  </div>
                
                </div>

              </div>

            </div>

            <div class="product-showcase">
            
              <h2 class="title">Ofertas</h2>
            
              <div class="showcase-wrapper  has-scrollbar">
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./img/ofert1.jpeg"alt="pocket watch leather pouch" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Mochila de Costas </h4>
                      </a>
            
                      <a href="#" class="showcase-category">Preço</a>
            
                      <div class="price-box">
                        <p class="price">$50.00</p>
                        <del>$60.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./img/ofert2.jpeg" alt="silver deer heart necklace" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Garrafa Plástica</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Preço</a>
            
                      <div class="price-box">
                        <p class="price">$84.00</p>
                        <del>$90,00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./img/ofert3.jpeg" alt="titan 100 ml womens perfume" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">apontador Metal Cis</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Preço</a>
            
                      <div class="price-box">
                        <p class="price">$8,90</p>
                        <del>$10.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./img/ofert4.jpeg" alt="men's leather reversible belt" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Caneca Mosquetão</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Preço</a>
            
                      <div class="price-box">
                        <p class="price">$24.00</p>
                        <del>$30.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
                <div class="showcase-container">
                
                <div class="showcase">
              
                  <a href="#" class="showcase-img-box">
                 

                  </a>
              
                  <div class="showcase-content">
              
                    <a href="#">
                      <h4 class="showcase-title">ㅤ</h4>
                    </a>
              
                    <a href="#" class="showcase-category">ㅤ</a>
              
                    <div class="price-box">
                      <p class="price">ㅤ</p>
                      <del>ㅤ</del>
                    </div>
              
                  </div>
              
                </div>
              
                <div class="showcase">
              
                  <a href="#" class="showcase-img-box">
                  
                 
                  </a>
              
                  <div class="showcase-content">
              
                    <a href="#">
                      <h4 class="showcase-title">ㅤ</h4>
                    </a>
              
                    <a href="#" class="showcase-category">ㅤ</a>
              
                    <div class="price-box">
                      <p class="price">ㅤ</p>
                      <del>ㅤ</del>
                    </div>
              
                  </div>
                </div>
              
                <div class="showcase">
              
                  <a href="#" class="showcase-img-box">
                 
                 
                  </a>
              
                  <div class="showcase-content">
              
                    <a href="#">
                      <h4 class="showcase-title">ㅤ</h4>
                    </a>
              
                    <a href="#" class="showcase-category">ㅤ</a>
              
                    <div class="price-box">
                      <p class="price">ㅤ</p>
                      <del>ㅤ</del>
                    </div>
              
                  </div>
              
                </div>
              
                <div class="showcase">
              
                  <a href="#" class="showcase-img-box">
               
                  </a>
              
                  <div class="showcase-content">
              
                    <a href="#">
                      <h4 class="showcase-title">ㅤ</h4>
                    </a>
              
                    <a href="#" class="showcase-category">ㅤ</a>
              
                    <div class="price-box">
                      <p class="price">ㅤ</p>
                      <del>ㅤ</del>
                    </div>
              
                  </div>
              
                </div>
              
              </div>

            </div>

          </div>
             
          </div>
  </main>
  <footer>
 <div class="footer-nav">

      <div class="container">

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Integrantes</h2>
          </li>

          <li class="footer-nav-item">
            <a href="https://www.instagram.com/_lanna_kamilly_/?locale=zh_CN" target="blank" class="footer-nav-link">Lanna</a>
          </li>

          <li class="footer-nav-item">
            <a href="https://www.instagram.com/flaviaglendaa_?igsh=MTFvdnpmb25qZ2k3dQ==" target="blank" class="footer-nav-link">Flávia</a>
          </li>

          <li class="footer-nav-item">
            <a href="https://www.instagram.com/borgesm58?igsh=MWhiaDYzdzRjN2VjZw==" target="blank" class="footer-nav-link">Miguel</a>
          </li>

          <li class="footer-nav-item">
            <a href="https://www.instagram.com/l1nn_l?igsh=eXBnd3NmZXV0MXZu" target="blank" class="footer-nav-link">Guilherme</a>
          </li>
         </ul>
         <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Contato</h2>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="content">
              Rua Jabur Nascer
            </address>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="tel:+607936-8058" class="footer-nav-link">(12) 98897-9497</a>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <a href="mailto:example@gmail.com" class="footer-nav-link">papelariaboasnovas@gmail</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Follow Us</h2>
          </li>

          <li>
            <ul class="social-link">

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">

      <div class="container">
        <p class="copyright">
          BN DEVS &copy; <a href="#">2024</a> EMPRESA.
        </p>
      </div>

    </div>
  </footer>
</body>
</html>
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
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/carrinhocompras.css">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon_io (1)/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <script src="./assets/js/script.js"></script>
    <script src="./js/main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
     <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/home.css" />
    <link rel="shortcut icon" href="img/logo-boasnovas.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        <span class="count">0</span>
      </button>
</a>
    </div>

  </div>

</div>
<div class="carrinho-container">
    <h2>Carrinho de Compras</h2>
    <div class="carrinho-itens">
        <!-- <div class="carrinho-item" data-preco="206.56">
            <img src="./img/lapisfaber.jpg" alt="Lápis Faber Castell">
            <div class="detalhes-item">
                <h3>Lápis de Cor, Faber-Castell, EcoLápis Supersoft, 100 Cores</h3>
                <p class="preco">R$ 206.56</p>
                <div class="controle-quantidade">
                    <button onclick="diminuirQuantidade(this)">-</button>
                    <input type="number" value="1" min="1" onchange="atualizarTotal()">
                    <button onclick="aumentarQuantidade(this)">+</button>
                </div>
                <button class="btn-remover" onclick="confirmarRemocao(this)">Remover</button>
            </div>
        </div>

        <div class="carrinho-item" data-preco="7.50">
            <img src="./img/bloquinho.webp" alt="Bloco de Notas">
            <div class="detalhes-item">
                <h3>Bloquinhos de Notas Lista de Compras - 25 folhas Papel Offset 90g</h3>
                <p class="preco">R$ 7.50</p>
                <div class="controle-quantidade">
                    <button onclick="diminuirQuantidade(this)">-</button>
                    <input type="number" value="1" min="1" onchange="atualizarTotal()">
                    <button onclick="aumentarQuantidade(this)">+</button>
                </div>
                <button class="btn-remover" onclick="confirmarRemocao(this)">Remover</button>
            </div>
        </div>

        <div class="carrinho-item" data-preco="289.00">
            <img src="./img/sulfite.jpg" alt="Folhas Sulfite">
            <div class="detalhes-item">
                <h3>Papel Sulfite A4 75g, Chamex, Caixa com 10 Pacotes x 500 Folhas cada</h3>
                <p class="preco">R$ 289.00</p>
                <div class="controle-quantidade">
                    <button onclick="diminuirQuantidade(this)">-</button>
                    <input type="number" value="1" min="1" onchange="atualizarTotal()">
                    <button onclick="aumentarQuantidade(this)">+</button>
                </div>
                <button class="btn-remover" onclick="confirmarRemocao(this)">Remover</button>
            </div>
        </div>

        <div class="carrinho-item" data-preco="52.29">
            <img src="./img/borracha.jpg" alt="Borracha">
            <div class="detalhes-item">
                <h3>Borracha Branca Pequena com Cinta Plástica, Faber-Castell, Caixa com 24 Unidades</h3>
                <p class="preco">R$ 52.29</p>
                <div class="controle-quantidade">
                    <button onclick="diminuirQuantidade(this)">-</button>
                    <input type="number" value="1" min="1" onchange="atualizarTotal()">
                    <button onclick="aumentarQuantidade(this)">+</button>
                </div>
                <button class="btn-remover" onclick="confirmarRemocao(this)">Remover</button>
            </div>
        </div> -->
    </div>

    <div class="resumo-carrinho">
        <p>Subtotal: <span id="subtotal">R$ 0,00</span></p>
        <p>Frete: <span id="frete">R$ 10,00</span></p>
        <h3>Total: <span id="total">R$ 0,00</span></h3>
        <button class="btn-finalizar" id="button-pagamento">Continuar para o Pagamento</button>
        <script>
            searchElement('button-pagamento').addEventListener('click', async () => {
                pay();
            })
        </script>
    </div>
    <div id="div-carrinho-itens">
        <script>
            function adicionarItemCarrinho(imagem, nome, preco) {
                const carrinhoItens = document.querySelector('.carrinho-itens');
                const itemHTML = `
                    <div class="carrinho-item" data-preco="${preco}">
                        <img src="${imagem}" alt="${nome}" style="opacity: 0">
                        <div class="detalhes-item">
                            <h3>${nome}</h3>
                            <p class="preco">R$ ${preco.toFixed(2).replace('.', ',')}</p>
                            <div class="controle-quantidade">
                                <button onclick="diminuirQuantidade(this)">-</button>
                                <input type="number" value="1" min="1" onchange="atualizarTotal()">
                                <button onclick="aumentarQuantidade(this)">+</button>
                            </div>
                            <button class="btn-remover" onclick="confirmarRemocao(this)">Remover</button>
                        </div>
                    </div>
                `;
                carrinhoItens.insertAdjacentHTML('beforeend', itemHTML);
                atualizarTotal();
            }
        </script>
    </div>
</div>

<script>
    // aumentar a quantidade
    function aumentarQuantidade(botao) {
        const input = botao.previousElementSibling;
        input.value = parseInt(input.value) + 1;
        atualizarTotal();
    }

    // diminuir a quantidade
    function diminuirQuantidade(botao) {
        const input = botao.nextElementSibling;
        if (input.value > 1) {
            input.value = parseInt(input.value) - 1;
            atualizarTotal();
        }
    }

    // atualizar o subtotal e total do carrinho
    function atualizarTotal() {
        let subtotal = 0;
        const itens = document.querySelectorAll('.carrinho-item');

        itens.forEach((item) => {
            const preco = parseFloat(item.getAttribute('data-preco'));
            const quantidade = parseInt(item.querySelector('input').value);
            subtotal += preco * quantidade;
        });

        //atualiza subtotal e total 
        document.getElementById('subtotal').textContent = `R$ ${subtotal.toFixed(2).replace('.', ',')}`;
        const frete = 10.00;
        const total = subtotal + frete;
        document.getElementById('total').textContent = `R$ ${total.toFixed(2).replace('.', ',')}`;
    }

    //  remover item do carrinho c sweet
    function confirmarRemocao(botao) {
        Swal.fire({
            title: 'Tem certeza?',
            text: "Você realmente quer remover este item do carrinho?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                const item = botao.closest('.carrinho-item');
                item.remove();
                atualizarTotal();
                Swal.fire(
                    'Removido!',
                    'O item foi removido do seu carrinho.',
                    'success'
                );
            }
        });
    }

    document.addEventListener("DOMContentLoaded", atualizarTotal);
</script>

<script>
    serverRequests.cart().then(json => json.products.forEach(product => {
        adicionarItemCarrinho('./img/balao.jpeg', product.nome, product.preco)
    }))
</script>
</body>
</html>

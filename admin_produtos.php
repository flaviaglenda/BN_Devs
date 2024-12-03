<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <?php include './html/head.php' ?>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/admin_produtos.css" />
    <script>
        if (window.opener === null) window.close();
    </script>
</head>
<body style="style="height: 100vh !important"">
    <section id="main-section">
        <h1>Lista de produtos</h1>
        <ul id="ul-produtos"></ul>
    </section>
    <script>
        (async function() {
            const listaProdutos = searchElement('ul-produtos');

            const produtosjson = await serverRequests.search('*');

            produtosjson.results.forEach(produto => {
                let li =document.createElement('li');

                let textNome =document.createElement('p');
                let titleNome =document.createElement('b');
                let spanNome =document.createElement('span');

                textNome.append(titleNome, spanNome);
                titleNome.innerHTML = 'Nome: ';
                spanNome.innerHTML =produto.nome;

                let textPreco =document.createElement('p');
                let titlePreco =document.createElement('b');
                let spanPreco =document.createElement('span');

                textPreco.append(titlePreco, spanPreco);
                titlePreco.innerHTML = 'Preço: ';
                spanPreco.innerHTML = "R$" + produto.preco.toFixed(2).replace('.', ',');

                let textEstoque =document.createElement('p');
                let titleEstoque =document.createElement('b');
                let spanEstoque =document.createElement('span');

                textEstoque.append(titleEstoque, spanEstoque);
                titleEstoque.innerHTML = 'Estoque: ';
                spanEstoque.innerHTML =produto.estoque;

                let textDescricao =document.createElement('p');
                let titleDescricao =document.createElement('b');
                let spanDescricao =document.createElement('span');

                textDescricao.append(titleDescricao, spanDescricao);
                titleDescricao.innerHTML = 'Descrição: ';
                spanDescricao.innerHTML =produto.descricao ?? "";

                let divInfo =document.createElement('div');

                divInfo.append(textNome, textPreco, textEstoque, textDescricao);

                let editbutton =document.createElement('button');
                editbutton.innerHTML = "Editar"
                editbutton.addEventListener('click', () => {
                    opener.editarProdutoPopup(produto.id);
                })

                li.append(divInfo, editbutton)

                listaProdutos.append(li);
            })
        })()
    </script>
</body>
</html>
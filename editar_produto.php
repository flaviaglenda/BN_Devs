<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar produto</title>
        <link rel="stylesheet" href="./css/editar_produto.css">
        <link rel="stylesheet" href="./css/style.css">
        <?php include './html/head.php' ?>
        <script>
            if (window.opener === null) window.location.href = project_dir;

        </script>
    </head>
    <body style="height: 100vh !important">
        <section id="main-section">
            <div>
                <h1>Editar produto</h1>
                <p class="legenda big">Esta página é um ambiente controlado para editar as informações dos produtos da loja.</p>
            </div>
            <form id="form-editar">
                <div>
                    <label for="input-nome">Nome:</label>
                    <input type="text" name="nome" id="input-nome">
                </div>
                <div>
                    <label for="textarea-descricao">Descrição:</label>
                    <textarea name="descricao" id="textarea-descricao" rows="6"></textarea>
                </div>
                <div>
                    <label for="input-estoque">Estoque:</label>
                    <input type="number" name="estoque" id="input-estoque" min="0">
                </div>
                <div>
                    <label for="input-preco">Preço:</label>
                    <input type="number" name="preco" id="input-preco" min="0" step="0.01">
                </div>
                <div>
                    <button type="submit" id="button-alterar">Alterar informações</button>
                    <button type="button" id="button-cancelar">Cancelar</button>
                </div>
            </form>
            <script>
                document.getElementById('form-editar').addEventListener('submit', async event => {
                    event.preventDefault();
                    const form = event.target;

                    let editproductid = edittingProduct.id;
                    delete edittingProduct.id;

                    const formData = new FormData();

                    Object.entries(edittingProduct).forEach(([key, value]) => {
                        if (!form[key]) return;
                        if (form[key].value != `${value}`) {
                            if (form[key].value === "" && value === null) return;
                            formData.append(key, form[key].value);
                        }
                    });

                    const formKeys = [...formData.keys()];

                    if (formKeys.length === 0) {
                        Swal.fire({
                            title: 'Sem alterações',
                            text: 'Nenhuma informação foi alterada.',
                            icon: 'warning',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Entendi'
                        });
                    } else {
                        const params = {};
                        for (const [key, value] of formData.entries()) {
                            params[key] = value;
                        }
                        opener.editProduct(editproductid, params)
                        window.close();
                    }
                })
            </script>
            <script>
                window.addEventListener('load', () => {
                    if (typeof window.edittingProduct == "undefined") window.close();
                });
                document.getElementById('button-cancelar').addEventListener('click', async () => {
                    Swal.fire({
                        title: 'Cancelar edição',
                        text: 'Tem certeza que deseja cancelar a edição o produto?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sim, cancelar',
                        cancelButtonText: 'Não, continuar editando'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.close();
                        }
                    });
                });
            </script>
        </section>
    </body>
</html>
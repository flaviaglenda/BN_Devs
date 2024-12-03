<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar usuário</title>
        <link rel="stylesheet" href="./css/editar_usuario.css">
        <link rel="stylesheet" href="./css/style.css">
        <?php include './html/head.php' ?>
        <script>
            if (window.opener === null) window.location.href = project_dir;

        </script>
    </head>
    <body style="height: 100vh !important">
        <section id="main-section">
            <div>
                <h1>Editar usuário</h1>
                <p class="legenda big">Esta página é um ambiente controlado para editar as credenciais de seu perfil e registrá-las em nosso sistema.
                    Tenha cuidado com suas informações e não as perca.</p>
            </div>
            <form id="form-editar">
                <div>
                    <label for="input-nome">Nome:</label>
                    <input type="text" name="nome" id="input-nome">
                </div>
                <div>
                    <label for="input-email">E-mail:</label>
                    <input type="email" name="email" id="input-email" disabled>
                </div>
                <div>
                    <label for="input-cep">CEP:</label>
                    <input type="text" name="cep" id="input-cep">
                </div>
                <div>
                    <label for="input-endereco">Endereço:</label>
                    <input type="text" name="endereco" id="input-endereco">
                </div>
                <div>
                    <label for="input-telefone">Telefone:</label>
                    <input type="text" name="telefone" id="input-telefone">
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

                    if (form.email) delete form.email;
                    let edituserid = edittingUser.id;
                    delete edittingUser.id;

                    const formData = new FormData();

                    Object.entries(edittingUser).forEach(([key, value]) => {
                        if (!form[key]) return;
                        if (form[key].value !== value) {
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
                        opener.editPerfil(edituserid, params);
                        window.close();
                    }
                })
            </script>
            <script>
                window.addEventListener('load', () => {
                    if (typeof window.edittingUser == "undefined") window.close();
                });
                document.getElementById('button-cancelar').addEventListener('click', async () => {
                    Swal.fire({
                        title: 'Cancelar edição',
                        text: 'Tem certeza que deseja cancelar a edição de seu perfil?',
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
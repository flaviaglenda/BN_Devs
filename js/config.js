const HTML = searchElement('html', 'query');
const project_dir = `${location.protocol}//${location.host}/BN_Devs/`;
// ALTERAR DE ACORDO COM O DIRETÓRIO ONDE O PROJETO ESTÁ

function lightTheme() {
    ChromaticManager.apply('light', 'bn_orange');
}

function darkTheme() {
    ChromaticManager.apply('dark', 'bn_blue');
}

// urgentemente implementar as funções de interação com php

class getStr {
    constructor(object) {
        this.assign(object);
    }

    assign(object = {}) {
        Object.entries(object).forEach(double => {
            this.#values[double[0]] = `${double[1]}`;
        });
    }

    #values = {};

    toString() {
        return Object.entries(this.#values).map(double => `${encodeURIComponent(double[0])}=${encodeURIComponent(double[1])}`).join('&');
    }
}

const serverRequests = {};

serverRequests.perfil = async function perfil(id) {
    let get = new getStr();
    if (typeof id !== 'undefined') get.assign({id: id});

    return await fetch(`${project_dir}php/perfil.php?${get}`)
        .then(resp => resp.json());
}

serverRequests.search = async function search(search) {
    let get = new getStr();
    if (typeof search !== 'undefined') get.assign({search: search});

    return await fetch(`${project_dir}php/search.php?${get}`)
        .then(resp => resp.json());
}

serverRequests.login = async function login(email, senha) {
    let post = new FormData();
    if (typeof email !== 'undefined') post.append('email', email);
    if (typeof senha !== 'undefined') post.append('senha', senha);

    return await fetch(`${project_dir}php/login.php`, {
        method: 'POST',
        body: post
    }).then(resp => resp.json());
}

serverRequests.register = async function register(email, senha, nome) {
    let post = new FormData();
    if (typeof email !== 'undefined') post.append('email', email);
    if (typeof senha !== 'undefined') post.append('senha', senha);
    if (typeof nome !== 'undefined') post.append('nome', nome);

    return await fetch(`${project_dir}php/register.php`, {
        method: 'POST',
        body: post
    }).then(resp => resp.json());
}

serverRequests.cart = async function cart(id, action, params = {}) {
    let get = new getStr();
    if (typeof id !== 'undefined') get.assign({id: id});
    if (typeof action !== 'undefined') get.assign({action: action});
    if (typeof params !== 'undefined') get.assign(params);

    console.log(get.toString());

    return await fetch(`${project_dir}php/cart.php?${get}`)
        .then(resp => resp.json());
}

serverRequests.purchase = async function purchase(id, status) {
    let get = new getStr();
    if (typeof id !== 'undefined') get.assign({id: id});
    if (typeof status !== 'undefined') get.assign({status: status});

    return await fetch(`${project_dir}php/purchase.php?${get}`)
        .then(resp => resp.json());
}

serverRequests.product = async function product(id) {
    let get = new getStr();
    if (typeof id !== 'undefined') get.assign({id: id});

    return await fetch(`${project_dir}php/product.php?${get}`)
        .then(resp => resp.json());
}

serverRequests.purchases = async function purchases(id) {
    let get = new getStr();
    if (typeof id !== 'undefined') get.assign({id: id});

    return await fetch(`${project_dir}php/purchases.php?${get}`)
        .then(resp => resp.json());
}

serverRequests.crud_produtos = async function crud_produtos(action, params = {}) {
    let post = new FormData();
    if (typeof action !== 'undefined') post.append('action', action);
    if (typeof params !== 'undefined') {
        Object.entries(params).forEach(([key, value]) => {
            post.append(key, value);
        });
    }

    return await fetch(`${project_dir}php/crud_produtos.php`, {
        method: 'POST',
        body: post
    }).then(resp => resp.json());
}

serverRequests.crud_promocoes = async function crud_promocoes(action, params = {}) {
    let post = new FormData();
    if (typeof action !== 'undefined') post.append('action', action);
    if (typeof params !== 'undefined') {
        Object.entries(params).forEach(([key, value]) => {
            post.append(key, value);
        });
    }

    return await fetch(`${project_dir}php/crud_promocoes.php`, {
        method: 'POST',
        body: post
    }).then(resp => resp.json());
}

serverRequests.crud_usuarios = async function crud_usuarios(action, params = {}) {
    let post = new FormData();
    if (typeof action !== 'undefined') post.append('action', action);
    if (typeof params !== 'undefined') {
        Object.entries(params).forEach(([key, value]) => {
            post.append(key, value);
        });
    }

    return await fetch(`${project_dir}php/crud_usuarios.php`, {
        method: 'POST',
        body: post
    }).then(resp => resp.json());
}

serverRequests.logout = async function logout(redirect = true) {
    let resp = await fetch(`${project_dir}php/logout.php`).then(resp => resp.json());
    if (redirect) window.location.href = project_dir;
    return resp;
}

// ---

function swalResponse(swalSpecificFunction, ...params) {
    return function(json) {
        if (json.status === "error") return swalErrorJson(json);
        swalSpecificFunction(json, ...params);
    }
}

function swalErrorJson(json) {
    if (!(json instanceof Object)) return;
    if (typeof json.error === "undefined") return;
    if (typeof json.status === "undefined") return;
    if (json.status !== "error") return;
    if (typeof json.message === "undefined") return;
    if (typeof json.comment === "undefined") return;

    Swal.fire({
        icon: 'error',
        title: json.message,
        text: json.comment,
        footer: `Código do erro: ${json.error}`
    });

    return json;
}

function swalLogin(json, redirectThen = false, destination = '') {
    Swal.fire({
        icon: 'success',
        title: 'Entrou na conta!',
        text: `Entrou com usuário ${json.user.nome} (${json.user.nivel})`,
        footer: `ID do usuário: ${json.user.id}`
    }).then(() => { if(redirectThen) window.location.href = `${project_dir}${destination}`});
    return json;
}

function swalRegister(json, redirectThen = false, destination = '') {
    Swal.fire({
        icon: 'success',
        title: 'Conta criada!',
        text: `Conta criada para usuário ${json.user.nome}`,
        footer: `ID do usuário: ${json.user.id}`
    }).then(() => { if(redirectThen) window.location.href = `${project_dir}${destination}`});
    return json;
}

function swalCart(json) {
    switch (json.action) {
        case 'add':
            Swal.fire({
                icon: 'success',
                title: 'Produto adicionado ao carrinho!',
                text: `Produto ${json.item.produto.nome} adicionado ao carrinho com sucesso!`
            });
            break;
    }
}

async function swalPurchase(json)  {
    if (json.change_status) {
        Swal.fire({
            icon: 'success',
            title: 'Status da compra atualizado!',
            text: `Atualizado para: ${json.purchase.status}`,
            footer: `ID da compra: ${json.purchase.id}`
        });
    } else {
        let user = await serverRequests.perfil(json.purchase.id_usuario);
        Swal.fire({
            icon: 'info',
            title: 'Informações da compra',
            html: `<b>Status:</b> ${json.purchase.status}<br><b>Usuário:</b> ${user.user.nome}<br><b>Quantidade de Produtos:</b> ${json.products.length}<br><b>Preço total:</b> R$${json.price.toFixed(2)}`,
            footer: `ID da compra: ${json.purchase.id}`
        });
    }
}

async function swalEditPerfil(json) {
    let changes = json.edited.changes;
    changes = Object.entries(changes).map(([key, value]) => `<b>${key}:</b> ${value}`).join('<br>');
    if (json.edited.password_changed) changes += '<br><b>Senha alterada!!!</b>';
    Swal.fire({
        icon: 'success',
        title: 'Perfil atualizado!',
        html: `Informações alteradas:<br>${changes}`,
        footer: `ID do usuário: ${json.edited.id}`
    })
}

async function swalDeletePerfil(json) {
    Swal.fire({
        icon: 'success',
        title: 'Perfil apagado!',
        text: `Perfil do usuário de ID ${json.deleted} apagado com sucesso!`,
    });
}

async function swalAddProdutoCart(json) {
    const produto = await serverRequests.product(json.item.produto);
    Swal.fire({
        icon: 'success',
        title: 'Produto adicionado ao carrinho!',
        html: `Produto ${produto.product.nome} adicionado ao carrinho com sucesso!<br>Quantidade: ${json.item.quantidade}`,
        footer: `ID do produto: ${produto.product.id}`
    });
}

// ----

function logout(redirect, ...params) {
    serverRequests.logout(redirect)
}

function login(email, senha, ...params) {
    serverRequests.login(email, senha).then(swalResponse(swalLogin, ...params));
}

function purchaseCheck(id, status, ...params) {
    serverRequests.purchase(id, status).then(swalResponse(swalPurchase, ...params));
}

function productCheck(id, ...params) {
    serverRequests.product(id).then(swalResponse(swalProduct, ...params));
}

function addProduto(id_usuario, id_produto, qnt, ...params) {
    serverRequests.cart(id_usuario, 'add', { produto: id_produto, qnt: qnt }).then(swalResponse(swalAddProdutoCart, ...params));
}

function perfil(id, ...params) {}

function editPerfil(id, editing = {}, ...params) {
    if (typeof id !== "undefined") editing['id'] = id;
    serverRequests.crud_usuarios('update', {...editing}).then(swalResponse(swalEditPerfil, ...params));
}

function deletePerfil(id, ...params) {
    Swal.fire({
        icon: 'warning',
        title: 'Tem certeza que deseja apagar o perfil?',
        text: `Esta ação é irreversível, não terá mais controle sobre as compras deste usuário.`,
        confirmButtonText: 'Sim, apagar',
        showCancelButton: true,
        cancelButtonText: 'Manter'
    }).then(result => {
        if (result.isConfirmed) {
            serverRequests.crud_usuarios('delete', {id: id}).then(swalResponse(swalDeletePerfil, ...params));
        }
    })
}

// -----

async function pay(id_usuario_input) {
    const width = 500;
    const height = 800;

    const left = (screen.width / 2) - (width / 2);
    const top = (screen.height / 2) - (height / 2);

    const cart = await serverRequests.cart(id_usuario_input);

    if (cart.status === "error") {
        swalErrorJson(cart);
        return;
    }

    let id_usuario = cart.cart.id_usuario;

    if (cart.products.length === 0) {
        Swal.fire({
            icon: 'error',
            title: 'Erro ao prosseguir à compra.',
            text: 'Carrinho vazio.'
        });
        return;
    }

    window.open('pagamento.php?id_usuario=' + id_usuario, '_blank', `width=${width},height=${height},top=${top},left=${left}`);
}

async function processPayment(id_usuario, method, descricao) {
    const purchase = await serverRequests.cart(id_usuario, 'purchase', { descricao: descricao });

    if (purchase.status === "error") {
        swalErrorJson(purchase);
        return;
    } else {
        Swal.fire({
            icon: 'success',
            title: 'Pagamento efetuado com sucesso!',
            text: `Forma de pagamento: ${method}`
        });
        return;
    }
}
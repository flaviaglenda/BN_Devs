function navigateTo(destination) {
    try {
        window.location.href = destination
    } catch(err) {
        console.log("Não foi possível viajar até esta página")
    }
}

function writeIn(elementId, text) {
    document.getElementById(elementId).innerHTML = text;
}

(function alerta(alertClass) {
    let elements = document.getElementsByClassName(alertClass)
    
    for (let i = 0; i < elements.length; i++) {
        const element = elements[i];
        element.innerHTML = "Conteúdo Incompleto"
    }
})("alerta-incompleto")

let loginForm = document.getElementById('loginForm');

if (loginForm) {
    loginForm.addEventListener("submit", event => {
        event.preventDefault();
        const form = event.target;

        if (form.method !== "post") return console.log("metodo post pls");

        if (!(form.email && form.senha)) return console.log("Precisa de email e senha");
        let email = form.email.value;
        let senha = form.senha.value;

        if (typeof email !== "string") return console.log("email string pls");
        if (typeof senha !== "string") return console.log("senha string pls");

        if (email.length > 80) return console.log("email grande");
        if (email.length == 0) return console.log("email vazio");
        if (senha.length > 64) return console.log("senha grande");
        if (senha.length < 8) return console.log("senha pequena");

        form.submit();
    });
}

let registroForm = document.getElementById('registroForm');

if (registroForm) {
    registroForm.addEventListener("submit", event => {
        event.preventDefault();
        const form = event.target;

        if (form.method !== "post") return console.log("metodo errado");

        if (!(form.email && form.senha && form.nome && form.comf_senha)) return console.log("precisa email senha e nome");
        let nome = form.nome.value
        let email = form.email.value
        let senha = form.senha.value
        let comf_senha = form.comf_senha.value;

        if (typeof nome !== "string") return console.log("nome string");
        if (typeof email !== "string") return console.log("email string");
        if (typeof senha !== "string") return console.log("senha string");
        if (typeof comf_senha !== "string") return console.log("comf_senha string");

        if (nome.length > 150) return console.log("nome grande");
        if (nome.length < 2) return console.log("nome pequeno");
        if (email.length > 80) return console.log("email grande");
        if (nome.length < 5) return console.log("email pequeno");
        if (email.length > 64) return console.log("senha grande");
        if (nome.length < 8) return console.log("senha pequeno");

        if (senha !== comf_senha) return console.log("senha e comf_senha diferentes");

        form.submit();
    })
}

// Pensar em meios para implementar modo claro e escuro.
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


// Pensar em meios para implementar modo claro e escuro.
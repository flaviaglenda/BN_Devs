function navigateTo(destination) {
    try {
        window.location.href = destination
    } catch(err) {
        console.log("Não foi possível viajar até esta página")
    }
}
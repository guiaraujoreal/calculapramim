document.addEventListener('DOMContentLoaded',() =>{
    new TypeIt("#titulo_page", {
        speed:30,
        loop: false
    }).type('Olá! Sou a Mafê, sua assistente matemática virtual . Em que posso te ajudar? ',{delay:900})
    .go()
})
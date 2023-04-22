document.addEventListener('DOMContentLoaded',() =>{
    new TypeIt("#titulo_page", {
        speed:30,
        loop: false
    }).type('Olá! Sou Math, seu assistente matemático virtual . Em que posso te ajudar? ',{delay:900})
    .go()
})
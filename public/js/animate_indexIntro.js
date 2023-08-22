document.addEventListener('DOMContentLoaded',() =>{
    new TypeIt("#txtLoading", {
        speed:30,
        loop: false
    }).type('Olá! Só um instante enquanto entramos no fantástico mundo da matemática... ',{delay:2000})
    .go()
})
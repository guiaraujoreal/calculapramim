document.addEventListener('DOMContentLoaded',() =>{
    new TypeIt("#titulo_page", {
        speed:30,
        loop: true
    }).type('matemática',{delay:3000})
    .delete(10)
    .type('tecnologia',{delay:3000})
    .delete(10)
    .go()
})
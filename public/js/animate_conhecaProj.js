document.addEventListener('DOMContentLoaded',() =>{
    new TypeIt("#titulo_page", {
        speed:30,
        loop: true
    }).type('matemática',{delay:2000}).delete(14)
    .type('tecnologia',{delay:2000}).delete(14)
    .go()
})
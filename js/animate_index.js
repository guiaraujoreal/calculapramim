document.addEventListener('DOMContentLoaded',() =>{
    new TypeIt(".animated", {
        speed:200,
        loop: true
    }).type('ela responde.',{delay:2000}).delete(14)
    .go()
})
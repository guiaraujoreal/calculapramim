document.addEventListener('DOMContentLoaded',() =>{
    new TypeIt(".animated", {
        speed:200,
        loop: true
    }).type('elas respondem.',{delay:2000}).delete(14)
    .go()
})
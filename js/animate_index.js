document.addEventListener('DOMContentLoaded',() =>{
    new TypeIt(".animated", {
        speed:200,
        loop: true
    }).type('Potenciação?',{delay:900}).delete(12).type('Radiciação?',{delay:900}).delete(11).type('Notação Cietífica?',{delay:900}).delete(17)
    .go()
})
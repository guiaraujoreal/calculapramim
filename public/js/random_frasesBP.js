 //Botpage
 document.addEventListener("DOMContentLoaded", function() {
const frases = [
    "Deixa eu pensar...",
    "Opa! Deixa eu pensar...",
    "Só um instante...",
    "Deixa eu procurar sobre isso...",
    "Deixa eu raciocinar...",
    "Pensando como um humano...",
    "Legal! Deixa eu ver sobre isso...",
    "Raciocinando com um humano",
    "Pensando sobre isso, só um minutinho..."
  ];
  
  // Função para sortear uma frase
  function sortearFrase() {
    // Gerar um índice aleatório entre 0 e o comprimento do array - 1
    const indice = Math.floor(Math.random() * frases.length);
    
    // Retornar a frase sorteada
    return frases[indice];
  };

    var class_text = document.getElementsByClassName("text_load")[0];
    class_text.innerText = sortearFrase();
  });
 //Botpage
 document.addEventListener("DOMContentLoaded", function() {
const frases = [
    "3, 2, 1...vamos lá!",
    "Aperte o cinto e vamos decolar!",
    "Plift...Ploft...e zooom!",
    "Simbora pro conteúdo!",
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
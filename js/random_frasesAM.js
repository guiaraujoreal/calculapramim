//Artigos Matematicos
document.addEventListener("DOMContentLoaded", function() {
const frases = [
    'Zero é o único número que não é positivo nem negativo.',
    'A palavra "matemática" vem do grego "mathema", que significa "estudo", ou "aprendizagem".',
    'O símbolo matemático para "mais" (+) tem origem na palavra latina "et", que significa "e", indicando a adição de números.',
    'O número π (pi) é uma constante matemática que representa a razão entre o perímetro de uma circunferência e o seu diâmetro (aproximadamente 3,14159).',
    'A famosa sequência de Fibonacci é uma série de números em que cada número é a soma dos dois anteriores: 0, 1, 1, 2, 3, 5, 8, 13, 21, ...',
    'A matemática é considerada a linguagem universal, pois seus princípios e conceitos são os mesmos em qualquer lugar do mundo.',
    'Existem infinitos números, mas há mais infinitos do que outros. Por exemplo, existem mais números reais entre 0 e 1 do que números inteiros.',
    'O número zero foi inventado pelos matemáticos indianos por volta do século VI, embora tenha sido uma ideia controversa em algumas culturas.',
    'A teoria dos jogos é um ramo da matemática que estuda as estratégias e decisões em situações competitivas.',
    'O número 2 é o único número primo par. Todos os outros números primos são ímpares.',
    'O número 4 é o único número com o mesmo número de letras do próprio valor.',
    'O número 9 é um número mágico em matemática. Multiplicar qualquer número por 9 e, em seguida, somar os dígitos do resultado sempre resultará em 9. Por exemplo, 9 x 7 = 63, e 6 + 3 = 9.'
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
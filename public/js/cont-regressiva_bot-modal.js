// Defina a quantidade de segundos para a contagem regressiva
var segundosTotais = 60; // Altere este valor para a quantidade desejada de segundos

// Converte os segundos para milissegundos
var milissegundosTotais = segundosTotais * 1000;

// Atualiza a contagem regressiva a cada segundo
var contador = setInterval(function() {
  // Obtém a quantidade de segundos restantes
  var segundosRestantes = Math.floor(milissegundosTotais / 1000);

  // Exibe a contagem regressiva na página
  document.getElementById("contagem").innerHTML = segundosRestantes + "s";

  // Verifica se a contagem regressiva terminou
  if (segundosRestantes <= 0) {
    clearInterval(contador);
    document.getElementById("contagem").innerHTML = "Contagem regressiva concluída!";
  }

  // Reduz a quantidade de milissegundos restantes em 1 segundo
  milissegundosTotais -= 1000;
}, 1000);
const botao_card = document.getElementsByClassName("botao_card");

for (let i = 0; i < botao_card.length; i++) {
  botao_card[i].addEventListener("click", function(event){
    event.preventDefault(); // Impede o comportamento padrão do link (redirecionar para a página do link)
    onLoadCont();
  });
}

  function onLoadCont(){
    var overlay = document.getElementById("overlay");

    overlay.style.display = "block";

    setTimeout(function(){
      window.location.href = document.querySelector(".botao_card").href;
    }, 3000);
  };




  
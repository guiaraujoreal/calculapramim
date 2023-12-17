document.getElementById("botao_send").addEventListener("click", function(event){
  event.preventDefault(); // Impede o comportamento padrão do botão (no caso de estar dentro de um formulário)
  
  var box = document.getElementById("inputUser");
  
  if(box.value.trim() === ""){
    var boxEmpty = document.getElementById("boxEmpty");
    boxEmpty.innerText = "Digite algo para enviar!";
    box.style.border = "1px solid red";
  }else{
    onLoadCont();
    setTimeout(function(){
      enviarFormulario();
    }, 3000);
}
  
  });

  document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("formIA");
    
    form.addEventListener("keydown", function(event) {
      if (event.key === "Enter") {
        event.preventDefault(); // Evita que o formulário seja enviado normalmente
        var box = document.getElementById("inputUser");
  
        if(box.value.trim() === ""){
          var boxEmpty = document.getElementById("boxEmpty");
          boxEmpty.innerText = "Digite algo para enviar!";
        }else{
          onLoadCont();
          setTimeout(function(){
            enviarFormulario();
          }, 3000);
        }
      }
    });
  });
  


function onLoadCont() {
  var overlay = document.getElementById("overlay");
  overlay.style.display = "block";
}

function enviarFormulario() {
  var form = document.getElementById("formIA");
  form.submit();
}
  
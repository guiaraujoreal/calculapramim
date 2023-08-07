
document.getElementById("botao_send").addEventListener("click", function(event){
  event.preventDefault(); // Impede o comportamento padrão do botão (no caso de estar dentro de um formulário)
  
  var box = document.getElementById("box_pergunta");
  
  if(box.value.trim() === ""){
    var boxEmpty = document.getElementById("boxEmpty");
    boxEmpty.innerText = "Digite algo para enviar!";
  }else{
    onLoadCont();
    setTimeout(function(){
      enviarFormulario();
    }, 3000);
}
  
  });


function onLoadCont() {
  var overlay = document.getElementById("overlay");
  overlay.style.display = "block";
}

function enviarFormulario() {
  var form = document.getElementById("form_perg");
  form.submit();
}
  
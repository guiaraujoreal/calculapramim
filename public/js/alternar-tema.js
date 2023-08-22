function alternarTema() {
  var estiloTema = document.getElementById("estilo-tema");
  if (estiloTema.getAttribute("href") === "../../style/theme/tema-escuro.css") {
    estiloTema.setAttribute("href", "../../style/theme/tema-claro.css");
  } else {
    estiloTema.setAttribute("href", "../../style/theme/tema-escuro.css");
  }
    
  document.body.classList.remove("../../style/theme/tema-claro.css"); // Remova a classe "dark-theme" do body para retornar ao tema claro
}
  
  
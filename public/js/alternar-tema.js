// Função para definir um cookie
function setCookie(name, value, days) {
  var expires = "";
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    expires = "; expires=" + date.toUTCString();
  }
  document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

// Função para obter o valor de um cookie
function getCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) === ' ') c = c.substring(1, c.length);
    if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
  }
  return null;
}

  var thLight = document.getElementById('alertThemeLight');
  var thDark = document.getElementById('alertThemeDark');
  var estiloTema = document.getElementById("estilo-tema");
  var btnLight_n = document.querySelector(".btnThemeLight_nMenu");
  var btnDark_n = document.querySelector(".btnThemeDark_nMenu");
  var btnLight_h = document.querySelector(".btnThemeLight_hMenu");
  var btnDark_h = document.querySelector(".btnThemeDark_hMenu");

  // Função para alternar o tema e exibir alertas
  function alternarTema() {
    if (estiloTema.getAttribute("href") === "../../style/themes/tema-escuro.css") {
      estiloTema.setAttribute("href", "../../style/themes/tema-claro.css");
      thLight.classList.remove('d-none');

      btnDark_n.classList.remove('d-block');
      btnDark_n.classList.add('d-none');

      btnLight_n.classList.add('d-block');
      btnLight_n.classList.remove('d-none');

      btnDark_h.classList.remove('d-block');
      btnDark_h.classList.add('d-none');

      btnLight_h.classList.add('d-block');
      btnLight_h.classList.remove('d-none');

      setCookie("themePreference", "light", 30);
    } else {
      estiloTema.setAttribute("href", "../../style/themes/tema-escuro.css");
      thDark.classList.remove('d-none');

      btnDark_n.classList.remove('d-none');
      btnDark_n.classList.add('d-block');

      btnLight_n.classList.add('d-none');
      btnLight_n.classList.remove('d-block');

      btnDark_h.classList.remove('d-none');
      btnDark_h.classList.add('d-block');

      btnLight_h.classList.add('d-none');
      btnLight_h.classList.remove('d-block');

      setCookie("themePreference", "dark", 30);
    }

    // Exibir alertas aqui
    setTimeout(function() {
      thLight.classList.add('alertDisperse');
      thDark.classList.add('alertDisperse');

      setTimeout(function() {
        thLight.classList.add('d-none');
        thDark.classList.add('d-none');
        thLight.classList.remove('alertDisperse');
        thDark.classList.remove('alertDisperse');
      }, 500);
    }, 3000);
  }

document.addEventListener('DOMContentLoaded', function() {

  var cookieNotice = document.getElementById('alertCookies');
  var acceptCookiesButton = document.getElementById('acceptCookies');
  var cookies = document.getElementById('cookies');

  // Verifica se o cookie de preferência de tema já existe
  var themePreference = getCookie("themePreference");

  // Verifica se o usuário já aceitou os cookies
  var cookiesAccepted = getCookie("cookiesAccepted");

  if (!themePreference) {
    // Define o tema padrão ou preferido pelo usuário
    setCookie("themePreference", "dark", 30);
  }

  if (!cookiesAccepted) {
    // Mostra o aviso de cookies apenas se não tiver sido aceito ainda
    cookieNotice.style.display = 'block';
  }

  acceptCookiesButton.addEventListener('click', function() {
    // Define o cookie para indicar que os cookies foram aceitos
    setCookie("cookiesAccepted", "true", 365);
    // Esconde o aviso de cookies
    setTimeout(() =>{
        cookies.classList.remove('animCookies_intro');
        cookies.classList.add('animCookies_out');
      setTimeout(()=>{
        cookieNotice.style.display = 'none';
      },1000);
      
    },200);
  });

  // Recupere a preferência de tema do cookie
  var themePreference = getCookie("themePreference");
  if (themePreference === "light") {
    estiloTema.setAttribute("href", "../../style/themes/tema-claro.css");

      btnDark_n.classList.remove('d-block');
      btnDark_n.classList.add('d-none');

      btnLight_n.classList.add('d-block');
      btnLight_n.classList.remove('d-none');

      btnDark_h.classList.remove('d-block');
      btnDark_h.classList.add('d-none');

      btnLight_h.classList.add('d-block');
      btnLight_h.classList.remove('d-none');

  } else {
    estiloTema.setAttribute("href", "../../style/themes/tema-escuro.css");

      btnDark_n.classList.remove('d-none');
      btnDark_n.classList.add('d-block');

      btnLight_n.classList.add('d-none');
      btnLight_n.classList.remove('d-block');

      btnDark_h.classList.remove('d-none');
      btnDark_h.classList.add('d-block');

      btnLight_h.classList.add('d-none');
      btnLight_h.classList.remove('d-block');
  }
});

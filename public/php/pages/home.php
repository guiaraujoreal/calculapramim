<!doctype html>
<html lang="pt" data-bs-theme="auto">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Este é o MathLearn - um site educativo que mescla a tecnologia aliada a educação básica">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js"></script>
    
    <link rel="shortcut icon" href="../../imgs/ico.png" type="image/x-icon">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--Tema-->
    <link rel="stylesheet" href="../../style/themes/tema-escuro.css"  id="estilo-tema">
    
    <!-- Custom styles for this template -->
    <link href="../../style/home.css" rel="stylesheet">

    <title>Bem-vindo ao MathLearn!</title>
  </head>

  <body>

    <header>
      <?php include('../includes/cabecalho.php') ?>
    </header>

  <main>
    
    <section id="sec01">
      <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="bd-placeholder-img bd-imgs"  src="../../imgs/side01.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice">
            <div class="container">
              <div class="carousel-caption text-start">
                <h1 class="txt-slide"><b>Bem-vindo ao MathLearn!</b></h1>
                <p class="subtxt-slide">Somos uma equipe de alunos buscando inovar a educação de forma prática e inclusiva.</p>
                <p><a class="btn btn-lg btn-primary" href="404_page.php">Conheça o projeto</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
          <img class="bd-placeholder-img bd-imgs" src="../../imgs/slide02.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice">
            <div class="container">
              <div class="carousel-caption">
                <h1 class="txt-slide"><b>A Inteligência Artificial em prol da educação.</b></h1>
                <p class="subtxt-slide">Solucione questões e perguntas usando nossas Inteligência Artificiais!</p>
                <p><a class="btn btn-lg btn-dark" href="ias.php">Conhecê-las</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
          <img class="bd-placeholder-img bd-imgs" src="../../imgs/side03.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice">
            <div class="container">
              <div class="carousel-caption text-end">
                <h1 class="txt-slide"><b>Conhecimento nunca é demais.</b></h1>
                <p class="subtxt-slide">Este site possui uma seção onde divulgamos mais materiais sobre conteúdo matemático.</p>
                <p><a class="btn btn-lg btn-danger" href="art-mat.php">Acessar esta seção</a></p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="d-flex justify-content-center">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player src="https://lottie.host/89ef8021-4dcb-4c51-b0ec-a8da7249a0f2/prtSK7cN58.json" background="transparent" speed="1" style="width: 100px; height: 100px" direction="1" mode="normal" loop autoplay></lottie-player>
      </div>
      
    </section>


    <section id="sec02">
      <div class="container marketing">

        <hr class="featurette-divider">
        
        <div class="border-section01 container-fluid d-flex justify-content-center">
          <div id="sections_info" class="container-fluid d-flex justify-content-center">
            <div class="row featurette">
              <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1 text_card">Você pergunta, <span class="animated"></span></h2>
                <p class="lead text_card">Nossas Inteligências Artificiais podem ajudar você a sanar várias questões matemáticas, elaborando
                  métodos eficazes e economizando seu tempo na hora de resolver uma expressão matemática. Venha conhecer!
                  <br><br>*Obs: consulte as informações sobre veracidade da I.A  <a href="#">aqui</a>.
                </p>
              </div>
              <div class="col-md-5">
                <div id="animation" class="col d-flex justify-content-center">
                  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                  <lottie-player id="anim_obj" src="https://assets3.lottiefiles.com/packages/lf20_itilDAyVNt.json"  background="transparent"  speed="1"  loop  autoplay></lottie-player>
                </div>
              </div>
              <div class="row botao_sec">
                <button class="btn_sec" onclick="window.location.href='ias.php'">
                  <span>Conhecer</span>
                </button>
            </div>
            </div>
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="border-section02 container-fluid d-flex justify-content-center">
          <div id="sections_info" class="d-flex justify-content-center sec_02">
            <div class="row featurette">
            <div class="col_img_sec col-md-4 d-flex justify-content-center">
                <div class="col-md-5 d-flex justify-content-center">
                    <img id="anim_sec02" class="anim_sec02" src="../../imgs/trofeu.svg">
                </div>
              </div>
              <div class="col-md-7 col_body_sec02">
                <h2 class="featurette-heading fw-normal lh-1 text_card">Games - para <span class="txt_aprend"> aprender</span> da melhor forma possivel.</h2>
                <p class="lead text_card">Os games possuem grandes atribuições no comportamento em relação ao aprendizado,
                  deixando a forma de aprender mais intuitiva e aprimorada. Ao final de cada artigo matemático, há sempre 
                um gamer para o usuario colocar o conteúdo em prática. Conheça os Artigos Matemáticos!
                </p>
              </div>
              <div class="row botao_sec btn_sec02">
                <button class="btn_sec" onclick="window.location.href='art-mat.php'">
                  <span>Vamos lá!</span>
                </button>
            </div>
            </div>
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="border-section03 container-fluid d-flex justify-content-center">
          <div id="sections_info" class="container-fluid d-flex justify-content-center">
            <div class="row featurette">
              <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1 text_card title_sec03">Aprimorar nunca é demais</span></h2>
                <p class="lead text_card">Pensando no aprendizado de nossos usuários, não dermarcando um público alvo específico,
                  nós separamos algumas vídeo-aulas de terceiros para que sintetize e otimize o tempo de estudo e encontre tudo
                  em um só lugar. Você os encontrará na sessão "Artigos Matemáticos" de acordo com o tema escolhido. Aproveite!
                </p>
              </div>
              <div class="col-md-5">
                <div id="animation" class="col d-flex justify-content-center">
                  <img id="img_sec03" src="../../imgs/online-courses.svg">
                </div>
              </div>
              <div class="row botao_sec">
                <button class="btn_sec" onclick="window.location.href='art-mat.php'">
                  <span>Explorar</span>
                </button>
            </div>
            </div>
          </div>
        </div>


        <hr class="featurette-divider">

      </div><!-- /.container -->
    </section>

    <!--Modal-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="TituloModalCentralizado">Olá visitante! :)</h5>
                </div>
                <div class="modal-body">
                  <div class="anim_modal d-flex justify-content-center">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_F2Mv1p.json"  background="transparent"  speed="1"  style="width: 300px; height: 200px;" loop   autoplay></lottie-player>
                  </div>
                  Estamos felizes em te ver! Nós, alunos do 9° ano 01 do CTPM Curvelo, elaboramos este site 
                  para facilitar sua relação com alguns cálculos matemáticos no seu dia a dia. Aproveite!
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Vamos lá!</button>
                </div>
              </div>
            </div>
          </div>


  </main>

      <!--Alertas de alternancia de tema-->
      <div id="alertThemeLight" class="alert alert-success d-none alertIntro" role="alert">
        ✅<b>Êba!!! Você mudou para o tema claro.</b>☀️
      </div>

      <div id="alertThemeDark" class="alert alert-success d-none alertIntro" role="alert">
      ✅<b>Sinistro! Você mudou para o tema escuro.</b>🌙
      </div>

      <footer>
          <?php include('../includes/rodape.php'); ?>
      </footer>

      <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
      <script src="../../js/menu_responsivo.js"></script>
      <script src="../../js/functions.js"></script>
      <script src="../../js/animate_index.js"></script>
      <script src="../../js/acionar_modalpage.js"></script>
      <script src="../../js/marca-text_index.js"></script>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      <script>
      window.addEventListener('blur', function() {
        setTimeout(function() {
          document.title = "Ei! Volta aqui!!!🤨";
        }, 1000); // Altere o valor em milissegundos para personalizar o tempo de espera
      });
      
      window.addEventListener('focus', function() {
        document.title = "Bem-vindo ao MathLearn!";
      });
  
    </script>

    <!--Tema-->
<script>
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

  // Função para alternar o tema e exibir alertas
  function alternarTema() {
    if (estiloTema.getAttribute("href") === "../../style/themes/tema-escuro.css") {
      estiloTema.setAttribute("href", "../../style/themes/tema-claro.css");
      thLight.classList.remove('d-none');
      setCookie("themePreference", "light", 30);
    } else {
      estiloTema.setAttribute("href", "../../style/themes/tema-escuro.css");
      thDark.classList.remove('d-none');
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

  var botaoTema = document.getElementByClass('themeCheckbox');

  if (botaoTema) {
    botaoTema.addEventListener('click', alternarTema);
  }

  // Recupere a preferência de tema do cookie
  var themePreference = getCookie("themePreference");
  if (themePreference === "dark") {
    estiloTema.setAttribute("href", "../../style/themes/tema-escuro.css");
    
  } else {
    estiloTema.setAttribute("href", "../../style/themes/tema-claro.css");
  }
});

    </script>
            
  </body>
</html>

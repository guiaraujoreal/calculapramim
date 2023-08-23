<!doctype html>
<html lang="pt">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <link href="../../style/ias.css" rel="stylesheet">

    <title>MathLearn | Escolha uma de nossas IAs</title>
  </head>

  <body>

    <header>
    <?php include('../includes/cabecalho.php') ?>
    </header>

  <main>
    <?php include "../includes/overlayContAM.php"  ?>

  <section id="sec01" class="container-fluid">
    <h1 class="txt-title01">Escolha uma de nossas IAs</h1>
  </section>

  <div class="divisory d-flex justify-content-center">
    <hr class="featurette-divider">
  </div>

  

    <div id="sec02" class="container-fluid  d-flex justify-content-center">
      <div class="row rowCards d-flex justify-content-center">
        <div class="col-5 card card-1 d-flex justify-content-center" onclick="window.location.href='bot.php'">
          <div class="row rowBodyCards d-flex justify-content-center">
            <div class="col-4 img-card img-card-1 d-flex justify-content-center align-items-center"><script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player src="https://lottie.host/184a521b-1cf1-4bed-9010-ea220d384e6a/chVFOalE01.json" background="#FFFFFF00" speed="1" style="width: 150px; height: 150px" direction="1" mode="normal" autoplay></lottie-player>
            </div>
            <div class="col txtCard">
              <p class="titleCard">Bate-papo</p>
              <p class="subtitleCard">Converse e interaja com nossa IA. Faça perguntas, peça explicações e muito mais.</p>
            </div>
          </div>
        </div>
        <div class="col-5 card d-flex justify-content-center"  onclick="window.location.href='https://edu.mathlearn.com.br/'">
          <div class="row rowBodyCards d-flex justify-content-center flex">
            <div class="col-4 img-card img-card-2 d-flex justify-content-center align-items-center card-2"><script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player src="https://lottie.host/9d36a6b4-45da-4211-9553-fe4fc8ae3ff6/ypi7X6u8Mi.json" background="#FFFFFF00" speed="1" style="width: 100px; height: 100px" direction="1" mode="normal" autoplay></lottie-player>
            </div>
            <div class="col txtCard">
              <p class="titleCard">Gerador Calculacional</p>
              <p class="subtitleCard">Resolva cálculos, veja gráficos e o passo a passo de expressões.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  <footer>
    <?php include('../includes/rodape.php'); ?>
  </footer>

      <!--Includes-->
      <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
      <script src="../../js/menu_responsivo.js"></script>
      <script src="../../js/functions.js"></script>
      <script src="../../js/load_containerAM.js"></script>
      <script src="../..//js/random_frasesAM.js"></script>

      <!--CDNs-->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      <!--Scripts-->
      <script>
        $(document).ready(function() {
            function alignLayout() {
                if ($(window).width() < 855) {
                    $('.card').removeClass('col-5');
                    $('.card').addClass('col-10');

                    $('.rowCards').addClass('flex-column');
                }else {
                    $('.card').addClass('col-5');
                    $('.card').removeClass('col-10');

                    $('.rowCards').removeClass('flex-column');
                }
            }

            function alignImgCards() {
                if ($(window).width() < 350) {
                    $('.img-card').removeClass('col-4');
                    $('.img-card').addClass('col-12');

                    $('.rowBodyCards').addClass('flex-column');
                }else {
                    $('.img-card').addClass('col-4');
                    $('.img-card').removeClass('col-12');

                    $('.rowBodyCards').removeClass('flex-column');
                }
            }
            
            alignLayout();
            alignImgCards();

            $(window).resize(function() {
                alignLayout();
                alignImgCards();
            });
        });


    </script>
      <script>
      window.addEventListener('blur', function() {
        setTimeout(function() {
          document.title = "Ei! Volta aqui!!!🤨";
        }, 1000); // Altere o valor em milissegundos para personalizar o tempo de espera
      });
      
      window.addEventListener('focus', function() {
        document.title = "MathLearn | Escolha uma de nossas IAs";
      });
  
    </script>

    <script>
          function alternarTema() {
          var estiloTema = document.getElementById("estilo-tema");
          if (estiloTema.getAttribute("href") === "../../style/themes/tema-escuro.css") {
            estiloTema.setAttribute("href", "../../style/themes/tema-claro.css");
          } else {
            estiloTema.setAttribute("href", "../../style/themes/tema-escuro.css");
          }
            
          document.body.classList.remove("../../style/themes/tema-claro.css"); // Remova a classe "dark-theme" do body para retornar ao tema claro
        }
    </script>

    <!--<script>
      function acess_sec(){

      }
    </script> -->
            
  </body>
</html>

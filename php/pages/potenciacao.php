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

    <link rel="stylesheet" href="../../style/themes/tema-escuro.css"  id="estilo-tema">
    
    <!-- Custom styles for this template -->
    <link href="../../style/potenciacao.css" rel="stylesheet">

    <title>MathLearn | Potenciação</title>
  </head>

  <body>

    <header>
    <?php include('../includes/cabecalho.php') ?>
    </header>

  <main>


  <section id="sec01" class="container-fluid">
    <h1 class="txt-title01" >Potenciação</h1>
  </section>

  <div class="divisory d-flex justify-content-center">
    <hr class="featurette-divider">
  </div>

    <section id="sec02" class="container-fluid">
      <div class="row d-flex justify-content-center ">
        <div class="col">
          <p class="entrada txt"><span class="space"></span>Multiplica aqui, eleva alí...ufa! As vezes é tanto cálculo que ficamos desesperados.🤯 Mas calma! Neste artigo,
            você entenderá como calcular potenciação e tirar aquele 10 ou mais na prova. Simbora!
          </p>
        </div>
      </div>
      
      <div class="row">
        <div class="col d-flex justify-content-center">
          <img src="../../imgs/img_pot01.jpg" class="img-fluid img-top">
        </div>
      </div>
    </section>

    <section id="sec03">
      
    </section>

  </main>

      <footer>
          <?php include('../includes/rodape.php'); ?>
      </footer>

      <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
      <script src="../../js/menu_responsivo.js"></script>
      <script src="../../js/functions.js"></script>
      <script src="../../js/animate_index.js"></script>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      <script>
      window.addEventListener('blur', function() {
        setTimeout(function() {
          document.title = "Ei! Não demore muito...";
        }, 1000); // Altere o valor em milissegundos para personalizar o tempo de espera
      });
      
      window.addEventListener('focus', function() {
        document.title = "MathLearn | Artigos Matemáticos";
      });
  
    </script>

    <!--Tema-->
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


            
  </body>
</html>

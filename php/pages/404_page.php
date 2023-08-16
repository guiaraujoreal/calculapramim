<!DOCTYPE html>
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
    <link href="../../style/pages_artigos.css" rel="stylesheet">

    <title>MathLearn | Conheça o projeto</title>
  </head>

  <body>

    <header>
      <?php include('../includes/cabecalho.php') ?>
    </header>
    
    <main>
      <section class="container-fluid d-flex justify-content-center flex-wrap" style="padding-top: 200px; padding-bottom: 10vw">
        <div class="col-12 d-flex justify-content-center">
          <img src="../../imgs/4040_error.svg" style="height: auto; width: 300px;">
        </div>
        <div class="col d-flex d-flex justify-content-center">
          <p style="font-size: 25px; text-align: center" >Ops! Ainda estamos construindo essa página.</p>
        </div>
      </section>
    </main>
    
    <footer>
      <?php include('../includes/rodape.php'); ?>
    </footer>

      <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
      <script src="../../js/menu_responsivo.js"></script>
      <script src="../../js/functions.js"></script>


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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

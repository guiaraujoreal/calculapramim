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
    <link href="../../style/art-mat.css" rel="stylesheet">

    <title>MathLearn | Artigos Matemáticos</title>
  </head>

  <body>

    <header>
    <?php include('../includes/cabecalho.php') ?>
    </header>

  <main>

  <section id="sec01" class="container-fluid">
    <h1 class="txt-title01">Artigos Matemáticos</h1>
    <h2 class="subtitle_sec">Conteúdos, Vídeos, Games Educacionais - Tudo isso em apenas um lugar. Escolha abaixo o conteúdo que deseja aprender.😎</h2>
  </section>

  <div class="divisory d-flex justify-content-center">
    <hr class="featurette-divider">
  </div>

    <section id="sec02">
    <div id="card_geral" class="container-fluid d-flex justify-content-center">
            <div id="row" class="row justify-content-around">
                <div id="coluna" class="col-md-5 col-lg-3 col-xs-12" data-toggle="tooltip" data-placement="bottom" title="Descubra o resultado de um número elevado ao seu fator expoente!">
                    <div id="cards" class="card text-center mx-auto shadow bg-white rounded">
                        <img class="card-img-top" src="../../imgs/card01.png" alt="Imagem de capa do card">
                        <div id="card-body01" class="card-body">
                          <h5 class="card-title"><b>Potenciação</b></h5>
                          <a href="potenciacao.php" id="botao_card01" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Descubra o resultado de um número elevado ao seu fator expoente!">Vamos Aprender!</a>
                        </div>
                    </div>
                </div>
                <div id="coluna" class="col-md-5 col-lg-3 col-xs-12">
                    <div id="cards" class="card text-center mx-auto shadow bg-white rounded" data-toggle="tooltip" data-placement="bottom" title="Determine e encontre a raiz quadrada de algum número!">
                        <img class="card-img-top" src="../../imgs/card02.png" alt="Imagem de capa do card">
                        <div id="card-body02" class="card-body">
                          <h5 class="card-title"><b>Radiciação</b></h5>
                          <a href="radiciacao.php" id="botao_card02" class="btn btn-primary btn-block">Vamos Aprender!</a>
                        </div>
                    </div>
                </div>
                <div id="coluna" class="col-md-5 col-lg-3 col-xs-12">
                    <div id="cards" class="card text-center mx-auto shadow bg-white rounded" data-toggle="tooltip" data-placement="bottom" title="Calcule e/ou simplifique uma expressão envolvendo Notação Científica!" >
                        <img class="card-img-top" src="../../imgs/card03.png" alt="Imagem de capa do card">
                        <div id="card-body03" class="card-body">
                          <h5 class="card-title"><b>Notação Científica</b></h5>
                          <a href="notacao-cientifica.php" id="botao_card03" class="btn btn-primary btn-block">Vamos Aprender!</a>
                        </div>
                    </div>
                </div>
                <div id="coluna" class="col-md-5 col-lg-3 col-xs-12">
                    <div id="cards" class="card text-center mx-auto shadow bg-white rounded" data-toggle="tooltip" data-placement="bottom" title="Aprenda como calcular uma operação envolvendo regra de 3!" >
                        <img class="card-img-top" src="../../imgs/card04.png" alt="Imagem de capa do card">
                        <div id="card-body04" class="card-body">
                          <h5 class="card-title"><b>Regra de Três</b></h5>
                          <a href="regra-3.php" id="botao_card04" class="btn btn-primary btn-block">Vamos Aprender!</a>
                        </div>
                    </div>
                </div>
                <div id="coluna" class="col-md-5 col-lg-3 col-xs-12">
                    <div id="cards" class="card text-center mx-auto shadow bg-white rounded" data-toggle="tooltip" data-placement="bottom" title="Aprenda como calcular uma operação envolvendo regra de 3!" >
                        <img class="card-img-top" src="../../imgs/card05.png" alt="Imagem de capa do card">
                        <div id="card-body05" class="card-body">
                          <h5 class="card-title"><b>Fração</b></h5>
                          <a href="fracao.php" id="botao_card05" class="btn btn-primary btn-block">Vamos Aprender!</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section id="sec034">

    </section>

  </main>

  <footer>
    <?php include('../includes/rodape.php'); ?>
  </footer>

      <!--Includes-->
      <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
      <script src="../../js/menu_responsivo.js"></script>
      <script src="../../js/functions.js"></script>

      <!--CDNs-->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      <!--Scripts-->
      <script>
      window.addEventListener('blur', function() {
        setTimeout(function() {
          document.title = "Ei! Volta aqui!!!🤨";
        }, 1000); // Altere o valor em milissegundos para personalizar o tempo de espera
      });
      
      window.addEventListener('focus', function() {
        document.title = "MathLearn | Artigos Matemáticos";
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

            
  </body>
</html>

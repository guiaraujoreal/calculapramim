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
    <?php include "../includes/overlayContAM.php"  ?>

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
                          <a href="potenciacao.php" id="botao_card01" class="botao_card btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Descubra o resultado de um número elevado ao seu fator expoente!">Vamos Aprender!</a>
                        </div>
                    </div>
                </div>
                <div id="coluna" class="col-md-5 col-lg-3 col-xs-12">
                    <div id="cards" class="card text-center mx-auto shadow bg-white rounded" data-toggle="tooltip" data-placement="bottom" title="Determine e encontre a raiz quadrada de algum número!">
                        <img class="card-img-top" src="../../imgs/card02.png" alt="Imagem de capa do card">
                        <div id="card-body02" class="card-body">
                          <h5 class="card-title"><b>Radiciação</b></h5>
                          <a href="radiciacao.php" id="botao_card02" class="botao_card btn btn-primary btn-block">Vamos Aprender!</a>
                        </div>
                    </div>
                </div>
                <div id="coluna" class="col-md-5 col-lg-3 col-xs-12">
                    <div id="cards" class="card text-center mx-auto shadow bg-white rounded" data-toggle="tooltip" data-placement="bottom" title="Calcule e/ou simplifique uma expressão envolvendo Notação Científica!" >
                        <img class="card-img-top" src="../../imgs/card03.png" alt="Imagem de capa do card">
                        <div id="card-body03" class="card-body">
                          <h5 class="card-title"><b>Notação Científica</b></h5>
                          <a href="notacao-cientifica.php" id="botao_card03" class="botao_card btn btn-primary btn-block">Vamos Aprender!</a>
                        </div>
                    </div>
                </div>
                <div id="coluna" class="col-md-5 col-lg-3 col-xs-12">
                    <div id="cards" class="card text-center mx-auto shadow bg-white rounded" data-toggle="tooltip" data-placement="bottom" title="Aprenda como calcular uma operação envolvendo regra de 3!" >
                        <img class="card-img-top" src="../../imgs/card04.png" alt="Imagem de capa do card">
                        <div id="card-body04" class="card-body">
                          <h5 class="card-title"><b>Regra de Três</b></h5>
                          <a href="regra-3.php" id="botao_card04" class="botao_card btn btn-primary btn-block">Vamos Aprender!</a>
                        </div>
                    </div>
                </div>
                <div id="coluna" class="col-md-5 col-lg-3 col-xs-12">
                    <div id="cards" class="card text-center mx-auto shadow bg-white rounded" data-toggle="tooltip" data-placement="bottom" title="Aprenda como calcular frações e as dominá-las de uma vez por todas!" >
                        <img class="card-img-top" src="../../imgs/card05.png" alt="Imagem de capa do card">
                        <div id="card-body05" class="card-body">
                          <h5 class="card-title"><b>Fração</b></h5>
                          <a href="fracao.php" id="botao_card05" class="botao_card btn btn-primary btn-block">Vamos Aprender!</a>
                        </div>
                    </div>
                </div>
                <div id="coluna" class="col-md-5 col-lg-3 col-xs-12" data-toggle="tooltip" data-placement="bottom" title="Conheça mais sobre o Pi!">
                    <div id="cards" class="card text-center mx-auto shadow bg-white rounded">
                        <img class="card-img-top" src="../../imgs/card06.png" alt="Imagem de capa do card">
                        <div id="card-body06" class="card-body">
                          <h5 class="card-title"><b>Número Pi</b></h5>
                          <a href="pi.php" id="botao_card06" class="botao_card btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Conheça mais sobre o Pi!">Vamos Aprender!</a>
                        </div>
                    </div>
                </div>
                <div id="coluna" class="col-md-5 col-lg-3 col-xs-12" data-toggle="tooltip" data-placement="bottom" title="Saiba como calcular os componentes de um triângulo usando o Teorema de Pitágoras.">
                    <div id="cards" class="card text-center mx-auto shadow bg-white rounded">
                        <img class="card-img-top" src="../../imgs/card07.png" alt="Imagem de capa do card">
                        <div id="card-body07" class="card-body">
                          <h5 class="card-title"><b>Teorema de Pitágoras</b></h5>
                          <a href="teorema-pitagoras.php" id="botao_card07" class="botao_card btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Saiba como calcular os componentes de um triângulo usando o Teorema de Pitágoras.">Vamos Aprender!</a>
                        </div>
                    </div>
                </div>
                <div id="coluna" class="col-md-5 col-lg-3 col-xs-12" data-toggle="tooltip" data-placement="bottom" title="Saiba os principais métodos relacionados ao Logaritmo.">
                    <div id="cards" class="card text-center mx-auto shadow bg-white rounded">
                        <img class="card-img-top" src="../../imgs/card08.png" alt="Imagem de capa do card">
                        <div id="card-body08" class="card-body">
                          <h5 class="card-title"><b>Logaritmo</b></h5>
                          <a href="logaritmo.php" id="botao_card08" class="botao_card btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Saiba os principais métodos relacionados ao Logaritmo.">Vamos Aprender!</a>
                        </div>
                    </div>
                </div>
                <div id="coluna" class="col-md-5 col-lg-3 col-xs-12" data-toggle="tooltip" data-placement="bottom" title="Aprenda os principais conceitos sobre estatística.">
                    <div id="cards" class="card text-center mx-auto shadow bg-white rounded">
                        <img class="card-img-top" src="../../imgs/card09.png" alt="Imagem de capa do card">
                        <div id="card-body09" class="card-body">
                          <h5 class="card-title"><b>Estatística</b></h5>
                          <a href="estatistica.php" id="botao_card09" class="botao_card btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Aprenda os principais conceitos sobre estatística.">Vamos Aprender!</a>
                        </div>
                    </div>
                </div>
                <div id="coluna" class="col-md-5 col-lg-3 col-xs-12" data-toggle="tooltip" data-placement="bottom" title="Veja os tipos e as razões de proporcionalidade.">
                    <div id="cards" class="card text-center mx-auto shadow bg-white rounded">
                        <img class="card-img-top" src="../../imgs/card10.png" alt="Imagem de capa do card">
                        <div id="card-body10" class="card-body">
                          <h5 class="card-title"><b>Proporcionalidade</b></h5>
                          <a href="proporcao.php" id="botao_card10" class="botao_card btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Veja os tipos e as razões de proporcionalidade.">Vamos Aprender!</a>
                        </div>
                    </div>
                </div>
                <div id="coluna" class="col-md-5 col-lg-3 col-xs-12" data-toggle="tooltip" data-placement="bottom" title="Aprenda a calcular as principais formas dos produtos notáveis!">
                    <div id="cards" class="card text-center mx-auto shadow bg-white rounded">
                        <img class="card-img-top" src="../../imgs/card11.png" alt="Imagem de capa do card">
                        <div id="card-body11" class="card-body">
                          <h5 class="card-title"><b>Produtos Notáveis</b></h5>
                          <a href="prod-not.php" id="botao_card11" class="botao_card btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Aprenda a calcular as principais formas dos produtos notáveis!">Vamos Aprender!</a>
                        </div>
                    </div>
                </div>
                <div id="coluna" class="col-md-5 col-lg-3 col-xs-12" data-toggle="tooltip" data-placement="bottom" title="Aprenda a calcular as principais formas dos produtos notáveis!">
                    <div id="cards" class="card text-center mx-auto shadow bg-white rounded">
                        <img class="card-img-top" src="../../imgs/card12.webp" alt="Imagem de capa do card">
                        <div id="card-body12" class="card-body">
                          <h5 class="card-title"><b>Equações</b></h5>
                          <a href="equacao.php" id="botao_card12" class="botao_card btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Aprenda a calcular as principais formas dos produtos notáveis!">Vamos Aprender!</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <div class="divisory d-flex justify-content-center">
    <hr class="featurette-divider">
  </div>

    <section id="sec03" class="container-fluid d-flex justify-content-center">
      <p class="fimArtigo">Por enquanto é isso. Estamos adicionando mais e mais artigos diariamente ;)</p>
    </section>


    <!--Alertas de alternancia de tema-->
    <div id="alertThemeLight" class="alert alert-success d-none alertIntro" role="alert">
    ✅<b>Êba!!! Você mudou para o tema claro.</b>☀️
      </div>

      <div id="alertThemeDark" class="alert alert-success d-none alertIntro" role="alert">
      ✅<b>Sinistro! Você mudou para o tema escuro.</b>🌙
      </div>

      <!--Aviso cookies-->
      <div id="alertCookies" class="container-fluid">
        <div id="divCookie" class="d-flex justify-content-end align-items-end w-100 h-100">
            <div id="cookies" class="animCookies_intro">
              <div class="titleCookie">
                <b>Vamos aceitar os cookies?</b>
              </div>
              <div class="body d-flex flex-row">
                <div class="imgCookie d-flex align-items-center justify-content-center">
                  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player class="cookieAnimation" src="https://lottie.host/b68720c6-4797-45f1-8fcb-a8f4a8ab0ca8/BeyU03IeZ7.json" background="transparent" speed="1"  direction="1" mode="normal" loop autoplay></lottie-player>
                </div>
                <div class="textCookie">
                  <br>Esta página usa cookies para a melhora de performance de acordo com o seu uso.
                  <br><br>Aceite os cookies para prosseguirmos com seu uso. Vamos aceitar?
                </div>
              </div>
              <div class="btnsCookie">
                  <div class="row d-flex flex-row">
                    <div class="col d-flex justify-content-center">
                      <button data-toggle="modal" data-target="#modalCookies" class="btn btn-secondary btn-block btnCook">O que é isso?</button>
                    </div>
                    <div class="col d-flex justify-content-center">
                      <button id="acceptCookies" class="btn btn-success btn-block btnCook">Vamos!</button>
                    </div>
                    
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

      <!--Modal sobre Cookies-->
      <div class="modal fade" id="modalCookies" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">O que são cookies?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="img d-flex justify-content-center">
                        <img class="img_cookies" src="../../imgs/img_cookies.png">
                    </div>
                    <p>Os cookies são dados salvos usados pelo seu navegador, a fim de que melhore a precisão
                        na navegação caso você retorne ao site, como, por exemplo, recarregar paginas de onde você parou. Esses dados não são coletados.
                    </p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Ok, entendi.</button>
                </div>
                </div>
            </div>
            </div>
        </section>

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
      <script src="../../js/alternar-tema.js"></script>

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
        $(document).ready(function() {
            function flexCookie() {
                if ($(window).width() < 370) {
                    $('.body').addClass('flex-column');
                    $('.body').removeClass('flex-row');

                }else {
                    $('.body').removeClass('flex-column');
                    $('.body').addClass('flex-row');
                }
            }
            
            flexCookie();

            $(window).resize(function() {
                flexCookie();
            });
        });


    </script>
            
  </body>
</html>

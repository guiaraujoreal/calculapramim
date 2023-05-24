<!DOCTYPE html>
<html lang="pt" content-type="UTF-8">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../style/bot.css" media="screen" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@1,300&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js" crossorigin="anonymous"></script>

    <!--Tema-->
    <link rel="stylesheet" href="#"  id="estilo-tema">

    <link rel="shortcut icon" href="../../imgs/ico.png" type="image/x-icon">
    <title>Converse com nossa IA!</title>
</head>
<body>
    <header>
        <?php include('../includes/cabecalho.php') ?>
    </header>

    <main>

        <section id="sec01">
            <div id="container02" class="container container-fluid">
                <div class="row justify-content-around">
                    <span id="titulo_page"></span>
                </div>
            </div>

        
        <div id="container01" class="container container-fluid" >
            <div class="row">
                
                <?php
                require_once '../../vendor/autoload.php';
                include_once('../includes/api/api.php');

                use OpenAI\Client;

                if(isset($_POST['pergunta'])){

                $client = OpenAI::client($api_key);


                $texto = $_POST['pergunta'];

                $result = $client->completions()->create([
                    'model' => 'text-davinci-003',
                    'prompt' => $texto,
                    'max_tokens' => 1000,
                    'temperature' => 0.1,
                ]);
                $paragrafo = explode("\n", $result['choices'][0]['text']);
                $resposta = '';
                echo '<div id="resp_geral" class="col col-sm-11 col-md-5 col-11">
                <div id="area_sub">
                <div class="label_ label_math"><p class="tag_sub"><b><img class="img_user_response" src="../../imgs/user_img_response.png"> Você enviou:</b></p></div>
                        <div  name="resposta" class="" id="box_resposta_sub">>> '. $texto . '</div>
                        </div>
                <div id="area_resp">
                        <div class="label_ label_math"><p class="tag_math"><b><img class="img_ia" src="../../imgs/ai_response.png">I.A:</b></p></div>
                        <div  name="resposta" class="" id="box_resposta">';
                
                foreach ($paragrafo as $paragrafo) {
                    $resposta .= '<p>' . $paragrafo . '<p>';
                    }
                 
            
            echo $resposta . '</div>
                        </div>
                        </div>';
                }
            ?>
            
                <div id="col_perg" class="col col-sm-12 col-md-5 col-12">
                <form id="form_perg" action="" method="post" class="form-group">
                    <div id="area_perg">
                        <div class="label_ label_voce"><p class="tag_voce"><b><img class="img_user" src="../../imgs/user_img.png">  Você:</b></p></div>
                        <textarea name="pergunta" class="" id="box_pergunta" rows="3" placeholder="Que bom ter você por aqui :)! Pergunte-me algo, como: 'me mostre como calcular a expressão 3x-27²=0'." required></textarea>
                        <div id="botao_send" class="col d-flex justify-content-center"><button>
                                <div class="svg-wrapper-1">
                                    <div class="svg-wrapper">
                                    <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" fill="currentColor"></path>
                                    </svg>
                                    </div>
                                </div>
                                <span>Enviar</span>
                            </button>
                        </div>
                    </div>
                </form>
                </div>
                
            </div>
        </div>
        </section>

        <section>
            <div id="container03" class="container">
                <div id="title_infos" class="d-flex justify-content-center">Tire dúvidas sobre a I.A👇</div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed buttons_cards" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <p class="title_card">> 01. O que significa "I.A"?</p>
                            </button>
                        </h5>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            "I.A" é a abreviação de <b>Inteligência Artificial</b>. A Inteligência Artificial é um mecanismo artificial onde um meio digital/virtual atua com comportamentos
                            semelhantes aos dos humanos. <a class="link_card" href="#"> Clique aqui</a> para saber mais sobre a I.A usada pelo MathLearn. 
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed buttons_cards" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <p class="title_card">> 02. O que posso perguntar para a I.A?</p>
                            </button>
                        </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            Como Inteligência Artificial, você pode perguntar o que quiser, ela não foi especificamente treinada apenas para a matemática. <br>Mas lembre-se!
                             Tenha ciência de que este é um site educativo e apenas coisas relacionadas ao nicho devem ser pesquisadas. Por ser uma I.A terceirizada, não nos
                             responsabilizamos por qualquer tipo de pergunta que você perguntar a ela.
                             <br> Mas, veja alguns exemplos de perguntas:
                             <ul class="list_card" >
                                <li>'Passo a passo raiz cúbica de 27';</li>
                                <li>'Como fazer teorema de Pitágoras?';</li>
                                <li>'Qual o resultado da expressão 3x + 27 = 0?';</li>
                                <li>'Qual a origem do número PI?'.</li>
                             </ul>
                             <br>Lembre-se! Esta inteligência ainda é recente e pode gerar erros. Confira
                             mais informações <a class="link_card" href="#">clicando aqui</a>. Aproveite sem moderação ;) .
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed buttons_cards" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <p class="title_card">> 03. Obtive erros na resposta. É normal?</p>
                            </button>
                        </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            A princípio, não. Porém, esta I.A ainda está em treinamento e possíveis erros podem ocorrer. Por certificação, pergunte a mesma
                            coisa mais de uma vez. Se o erro persistir, diga a I.A a possível resposta correta, caso saiba. Nossa I.A possui a capacidade
                            de aprender as formas corretas com seus próprios erros.
                            <br> Mas lembre-se! Nunca confie diretamente na resposta dela em casos de operações matemáticas mais complexas, certifique-se confirmar mais de uma vez.
                            Estamos aperfeiçoando mais a cada dia.😊
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed buttons_cards" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <p class="title_card">> 04. É normal a resposta vim em outro idioma?</p>
                            </button>
                        </h5>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            A princípio, não. Porém, nossa I.A responde você conforme o idioma que você direciona uma pergunta ou frase qualquer a ele.
                            Por isso, é recomendável que você faça perguntas <b>específicas e diretas</b>, não envolvendo perguntas muito curtas ou confusas.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Modal tempo excedido-->
        <section>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalCentralizado">Ooops! Tudo muito quieto por aqui...👀</h5>
                        </div>
                    <div class="modal-body">
                        <div class="animation d-flex justify-content-center">
                            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                            <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_KqyKvM.json"  background="transparent"  speed="1"  style="width: 150px; height: 150px;"  loop  autoplay></lottie-player>
                        </div>
                    Esta página ficou muito tempo parada. Por favor, recarregue-a para prosseguir.
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="location.reload()" ><img src="../../imgs/icon_refresh_img.png" style="width: 25px; height: 25px" > Recarregar!</button>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <!--Modal Tema infuncional-->
        <section>
            <!--Modal-->
    <div class="modal fade" id="myModal_theme" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="TituloModalCentralizado">Desculpe, vamos ficar te devendo essa...</h5>
                </div>
                <div class="modal-body">
                  <div class="anim_modal d-flex justify-content-center">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_aiwdh2wk.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop  autoplay></lottie-player>
                  </div>
                  No momento, esta página não permite alternar o tema do layout. Não fique triste com a gente! Iremos resolver isto em breve.
                </div>
                <div class="modal-footer">
                  <div id="contagem"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
    
    </main>

    <footer>
        <?php include('../includes/rodape.php'); ?>
    </footer>

    <script src="../../js/aumentar_box.js"></script>
    <script src="../../js/menu_responsivo.js"></script>
    <script src="../../js/functions.js"></script>
    <script src="../../js/page_inative.js" ></script>
    <script src="../../js/alternar-tema.js" ></script>


    
    <script src="../../js/animate_bot.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
      window.addEventListener('blur', function() {
        setTimeout(function() {
          document.title = "Ei! Não demore muito...";
        }, 1000); // Altere o valor em milissegundos para personalizar o tempo de espera
      });
      
      window.addEventListener('focus', function() {
        document.title = "Converse com nossa IA!";
      });
  
    </script>

    <!--Aciona o Modal de tema indefinido do layout e mostra tempo"-->
    <script>
        function alternarTema() {
            var estiloTema = document.getElementById("estilo-tema");
            if (estiloTema.getAttribute("href") === "#") {

                // Defina a quantidade de segundos para a contagem regressiva
                var segundosTotais = 7; // Altere este valor para a quantidade desejada de segundos

                // Converte os segundos para milissegundos
                var milissegundosTotais = segundosTotais * 1000;

                // Atualiza a contagem regressiva a cada segundo
                var contador = setInterval(function() {
                // Obtém a quantidade de segundos restantes
                var segundosRestantes = Math.floor(milissegundosTotais / 1000);

                // Exibe a contagem regressiva na página
                document.getElementById("contagem").innerHTML = "Fechando este aviso em " + segundosRestantes + " segundos";

                // Verifica se a contagem regressiva terminou
                if (segundosRestantes <= 0) {
                    clearInterval(contador);
                    document.getElementById("contagem").innerHTML = "Iniciando contagem...";
                }

                // Reduz a quantidade de milissegundos restantes em 1 segundo
                milissegundosTotais -= 1000;
                }, 1000);

                var myModal = new bootstrap.Modal(document.getElementById('myModal_theme'), {
                keyboard: false
                });
                myModal.show();

                // Fechar o modal após 3 segundos
                setTimeout(function() {
                myModal.hide();
                }, 8000);
            }
            }
    </script>

<script>
  
</script>


</body>
</html>

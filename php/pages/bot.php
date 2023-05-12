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
                            Grupo de itens colapsável #1
                            </button>
                        </h5>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non alemanha 0 x 2 coreia do sul cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed buttons_cards" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Grupo de itens colapsável #2
                            </button>
                        </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed buttons_cards" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Grupo de itens colapsável #3
                            </button>
                        </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
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


    
    <script src="../../js/animate_bot.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>

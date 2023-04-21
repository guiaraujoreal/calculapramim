<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style/bot.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../style/cabecalho-rodape.css" media="screen" />

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

    <link rel="shortcut icon" href="../imgs/ico.png" type="image/x-icon">
    <title>Prazer! Sou o Math!</title>
</head>
<body>
<header>
        <div id="cabecalho" class="container container-fluid">
            <div id="col_logo" class="row d-flex align-items-center">
                <div><img id="logo" class="col" src="../imgs/logo.png" alt="logotipo"></div>
                <div id="menu">
            <div id="menu-bar" onclick="menuOnClick()">
                <div id="bar1" class="bar"></div>
                <div id="bar2" class="bar"></div>
                <div id="bar3" class="bar"></div>
            </div>
        <nav class="nav" id="nav">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="index.html#mensagem">Funcionalidades</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </nav> 
        </div>
        <div class="menu-bg" id="menu-bg"></div>
            </div>
        </div>
        <nav class="nav02">
          <ul>
              <li><a class="item_menu" href="index.html">Home</a></li>
              <li><a class="item_menu" href="index.html#mensagem">Funcionalidades</a></li>
              <li><a class="item_menu" href="#">Contact</a></li>
              <li><a class="item_menu" href="#">Blog</a></li>
          </ul>
      </nav> 
    </header>

    <main>

        <div id="container01" class="container container-fluid">
            <div class="row justify-content-around">
                <div class="col">
                <form id="form_perg" action="" method="post" class="form-group">
                    <label class="label_pergunta" for="exampleFormControlTextarea1">Exemplo de textarea</label>
                    <textarea name="pergunta" class="form-control" id="box_pergunta" rows="3" placeholder="Pergunte algo, como: 'me mostre como calcular a expressão 3x-27²=0'"></textarea>
                    <div class="col"><button class="btn btn-success" type="submit">Enviar</div>
                </form>
                </div>
                
            </div>
        </div>

        <div id="container03" class="container container-fluid">
        <div class="row justify-content-around">
        <div id="resposta"></div>


        <?php
                require_once '../vendor/autoload.php';

                use OpenAI\Client;
                if(isset($_POST['pergunta'])){

                $client = OpenAI::client('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');

                $texto = $_POST['pergunta'];

                $result = $client->completions()->create([
                    'model' => 'text-davinci-003',
                    'prompt' => 'passo a passo '.$texto,
                    'max_tokens' => 200,
                    'temperature' => 0.5,
                ]);
                $paragrafo = explode("\n", $result['choices'][0]['text']);
                $resposta = '';
                echo '<div class="col">
                <form id="form_resp" class="form-group">
                    <label class="label_resposta" for="exampleFormControlTextarea1">Exemplo de textarea</label>
                    <div id="label_resp">Você: ' . $texto . '</div>';
                    echo '<div name="resposta" class="form-control" id="box_resposta" readonly>';
                
                foreach ($paragrafo as $paragrafo) {
                    $resposta .= '<p>' . $paragrafo . '<p>';
                    }
                 echo $resposta . '</div>
                </form>
                </div>';
            }
            ?>
        </div>
        </div>

        '<div class="load_animation">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lotstie-player class="animt_load" src="https://assets6.lottiefiles.com/packages/lf20_e8ESDXD2HV.json"  background="transparent"  speed="1"  loop  autoplay></lotstie-player>
            </div>'
    
    </main>

    <footer id="rodape" class="container">
        <p id="copy">&copy; 2023 Meu Site</p>
    </footer>


    <script src="../js/aumentar_box.js"></script>

    <script>
        window.addEventListener('load', function() {
        document.querySelector('.animt_load').style.display = 'none';
        });
    </script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>

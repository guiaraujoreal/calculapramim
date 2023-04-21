<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .oc{
            width: 500vw;
            height: auto;
            background-color: blue;
        }
        #texto {
            color: aliceblue;
            display: inline-block;
            overflow: hidden; /* oculta o que passar da borda */
            border-right: .15em solid orange; /* cria a borda que irá piscar */
            font-size: 2em;
            white-space: nowrap; /* evita quebras de linha */
            margin: 0 auto; /* centraliza horizontalmente */
            overflow: hidden;
            }

            .typing-animation{
            animation: blinkCursor 500ms steps(15) infinite normal,
                        typing 1s steps(15) 1s normal both;
            }

            @keyframes typing{
            from {
                width: 0;
            }
            }

            @keyframes blinkCursor{
            from {
                border-right-color: rgba(255, 255, 255, 0.75)
            }
            to {
                border-right-color:transparent;
            }
            }

    </style>

    <?php
    $texto = "O código acima irá percorrer cada letra da resposta da API, <br>adicionando uma letra por vez à saída HTML com um atraso de 50 milissegundos entre cada <br> letra, criando o efeito de digitação.";
    $cont = strlen($texto);
?>
<div class="oc">
    <p id="texto"  class="typing-animation" style="width:<?php echo $cont ?>ch"><?php echo $texto ?></p>
</div>

    <script>
        const divTexto = document.querySelector(".oc");
        const paragrafo = divTexto.querySelector("p");
        const linhas = paragrafo.innerHTML.split("\n");
        paragrafo.innerHTML = "";

        for (let i = 0; i < linhas.length; i++) {
            const linha = linhas[i];
            const span = document.createElement("span");
            span.textContent = linha;
            paragrafo.appendChild(span);
            if (i < linhas.length - 1) {
                paragrafo.appendChild(document.createElement("br"));
            }
        }

    </script>
    
</body>
</html>
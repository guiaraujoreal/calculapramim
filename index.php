<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@1,300&family=Space+Mono&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js"></script>

    <title>MathLearn Education</title>
    <link rel="stylesheet" href="style/index.css">
    <link rel="shortcut icon" href="imgs/ico.png" type="image/x-icon">
</head>
<body>
    <section id="sec01" class="container-fluid d-flex justify-content-center align-items-center">
        <div class="row d-flex justify-content-center align-items-center flex-column">
            <div class="col-12  d-flex justify-content-center">
              <img class="img-fluid img" src="imgs/logo_corp.png" alt="Logo da MathLearn Education">  
            </div>
            <div class="col-10  d-flex justify-content-center ">
              <p id="txtLoading" class="txt" ></p>  
            </div>
        </div>
    </section>
    <div id="overlayWhite"></div>

    <script src="js/animate_indexIntro.js" ></script>

    <script>
        setTimeout(() =>{
            const overlay = document.getElementById("overlayWhite");
            overlay.style.display = "block";
            setTimeout(() =>{
                window.location.href = "php/pages/home.php";
            },3000);
        }, 7000);
    </script>

    <!--CDNs-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
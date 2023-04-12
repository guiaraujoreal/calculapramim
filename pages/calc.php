<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="" method="post">
        Valor01:<input type="text" name="v1">
        <br>Valor02:<input type="text" name="v2">
        <button type="submit">Calcular</button>
    </form>

    <?php
    if(isset($_POST['v1']) && isset($_POST['v2'])){
    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];
    $result = floatval($v1) + floatval($v2);
    echo "<br>O resultado é: " . $result;
    }
    ?>
    
</body>
</html>
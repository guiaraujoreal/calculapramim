<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <form action="" method="post">
        Valor:<input type="text" name="valor">
        <br>Expoente:<input type="text" name="exp">
        <button type="submit">Enviar</button>
    </form>
    <?php
    if(isset($_POST['valor']) && isset($_POST['exp'])){
        $v = $_POST['valor'];
        $e = $_POST['exp'];
        $result = floatval($v) ** floatval($e);

        echo "<br>O resultado é " . $result . ". Para realizar esse calculo, é necessário multiplicar o número " . $v . " por ele mesmo " . $e . "x";
    }
    ?>
    
</body>
</html>
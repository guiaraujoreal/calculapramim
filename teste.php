<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Valor01:<input type="text" name="v1">
        Valor02:<input type="text" name="v2">
        <button type="submit">Enviar</button>
    </form>
    <?php
    include_once('calc.php');
    if (isset($_POST['v1']) && isset($_POST['v2'])) {
        $v1 = $_POST['v1'];
        $v2 = $_POST['v2'];
        $v11 = floatval($v1);
        $v22 = floatval($v2);
        echo calcc($v11,$v22);
    }
    ?>
    <textarea><?php echo "oi" ?></textarea>
</body>
</html>
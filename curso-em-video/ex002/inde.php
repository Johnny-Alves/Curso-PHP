<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); 
        //gmt-03:00
        echo "Hoje é dia ". date("d/M/Y"). "<br>";
        echo "Hora atual: ". date("H:i:s"). "<br>";
    ?>
</body>
</html>
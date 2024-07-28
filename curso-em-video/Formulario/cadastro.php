<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>Resultado do processamento</header>
    <main>
        <?php
             // A VARIAVEL $_REQUEST É UMA JUNÇÃO DAS VARIAVEIS $_GET $_POST $_COOKIES
             $nome = $_GET['nome'] ?? "Visitante" ;
             $snome = $_GET['snome'] ?? "Desconhecido"  ;
             echo "É um prazer te conhecer <strong>$nome $snome</strong>, este é o meu site!";
        ?>
        <p><a href="javascript:history.go(-1)"> Voltar para a página anterior.</a></p>
</body>
</html>
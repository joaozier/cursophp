<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando funções de data e hora</title>
</head>
<body>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia ".date("d/M/Y T");
        echo "A hora é ".date("G:i:s");
    ?>
</body>
</html>
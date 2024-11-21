<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $numero = $_GET["numero"];

            echo "Analisando o número $numero informado pelo usuário: <br><br>";
            echo "<li><ul>A parte inteira do número é ".(int)$numero."</ul><br><ul>A parte fracionária do número é ".number_format(($numero-(int)$numero),2)."</ul></li>";
        ?>
        <button onclick="javascript:history.go(-1)">Retornar</button>
        
    </main>
</body>
</html>
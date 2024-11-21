<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sorteador de Números</title>
</head>
<body>
    <div style="height: 100px;"></div>
    <main>
        <h1>Sorteador de Números</h1>
        <?php 
            $numero = random_int(0,100);

            echo "O valor gerado foi <strong>$numero</strong>.";
        ?>
        <div style="height: 50px;"></div>
        <a href="javascript:location.reload()"><button>🔄 Gerar outro</button></a>
    </main>
</body>
</html>
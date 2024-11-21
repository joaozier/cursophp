<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado - Conversor de Moedas v1.0</title>
</head>
<body>
    <main>
        <?php
            $padrao=numfmt_create("pt_BR",NumberFormatter::CURRENCY);
            $dinheiro = $_GET["dinheiro"];
            $dolar = $dinheiro/5.77;

            echo "Seus R\$".numfmt_format_currency($padrao,$dinheiro,"BRL"). "equivalem a".numfmt_format_currency($padrao,$dolar,"USD");
            echo "<br><strong>*Cotação fixa de R$ 5,77</strong>";
            ?>
        <a href="javascript:history.go(-1)"><button>Retornar</button></a>
    </main>
</body>
</html>
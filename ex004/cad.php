<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "Sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "sem sobrenome";

            echo "<p> Olá $nome $sobrenome ! Seja bem vindo(a) ao meu site.";
        ?>
        <p><a href="javascript:history.go (-1)">Voltar</a></p>
    </main>
</body>
</html>
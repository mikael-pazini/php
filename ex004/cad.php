<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
            // $_REQUEST = Junção - $_GET + $_POST + $_COOLIES
            $nome = $_GET["nome"] ?? "ERRO";
            $sobrenome = $_GET["sobrenome"] ?? "404";
            echo"Seja bem vindo "."<strong>$nome $sobrenome</strong>".", aqui você encontra tudo para seu crescimento profissional e pessoal";
        ?>
        <br>
        <p><a href="javascript:history.go(-1)">Voltar a página anterior</a></p>
    </main>
</body>
</html>
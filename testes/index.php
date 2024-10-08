<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <h1>Exemplo de variavel</h1>
    <?php
        $nome = "Mikael";
        $sobrenome = "Pazini";
        $idade = 22;
        $peso = 105.5;
        $casado = true;
        const PAIS = "Brasil";
        const _CURSO = "DEV";
        //
        $nomeCompletoCliente = "Camel Case";
        $telefone_contato_cliente = "Snake Case";
        //
        # const PAIS = "EUA";
        // $nome = "Leakim";

        echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS . ". tem $idade anos, pesa $peso quilos, e trabalha como " . _CURSO . "."
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de número aleatório</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=keyboard_return" />
</head>
<body>
    <main>
        
        <?php
            $numAle = 0;
            function gerarNumAle() {
                return rand(1, 100);
            }

            if (isset($_POST["gerarNumAle"])) {
                $numAle = gerarNumAle();
            }
            echo "<h1><strong>Gerador de números aleatórios</strong></h1>";
            echo "Gerando um número aleatório entre <strong>0 e 100</strong>...<br>";
            echo "O valor gerado foi <strong>$numAle</strong> <br>";
        ?>
        <br>
            <form method="post" action="">
                <button type="submit" name="gerarNumAle">🔄 Gerar Número</button>
            </form>
    </main>
</body>
</html>
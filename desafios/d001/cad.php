<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=keyboard_return" />
</head>
<body>
    <main>
        <?php
            
            $num = $_GET["num"] ?? "0";
            echo "<h1><strong>Resultado Final</strong></h1>";
            echo "O número escolhido foi <strong>$num</strong><br>";
            echo "O seu antecessor é ".($num - 1)."<br>";
            echo "O seu sucessor é ".($num + 1)."<br>";
        ?>
        <br>
        <input type="button" value="🠔 Voltar" onclick="voltarPagina()">
    </main>
    <script>
        function voltarPagina() {
            window.history.back();
        }
    </script>
</body>
</html>
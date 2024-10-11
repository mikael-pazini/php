<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php
            function format($par) {
                $par = number_format($par, 3,",",".");
                return $par;
            }
            $num = $_GET["num"] ?? 0;

            $int = (int) $num;
            $frac = $num - $int;

            echo"<p>Analisando o número <strong>".format($num)."</strong> informado pelo usuário:</p>";
            echo "<ul><li>A parte inteira do número é <strong>".number_format($int,0,",",".")."</strong></li>"."<li>A parte fracionária é <strong>".number_format($frac,3,",",".")."</strong></li></ul>";
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
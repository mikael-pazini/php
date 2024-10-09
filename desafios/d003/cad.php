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
        <?php
            $num = $_GET["num"];
            $cot = 5.59;
            $conv = $num / $cot;

            function format($par) {
                $par = number_format($par, 2,",",".");
                return $par;
            }
            echo "<h1><strong>Conversor de Moedas v1.0</strong></h1>";
            echo "Seus <strong>R\$".format($num)."</strong> equivalem a <strong>US\$".format($conv)."</strong><br>";
            echo "<strong><p>*Cotação fixa de R\$".format($cot)."</strong> informada diretamente no código.</p>";
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
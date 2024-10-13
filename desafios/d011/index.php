<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
            function format($par) {
                $par = number_format($par, 2,",",".");
                return $par;
            }
            $preco = $_REQUEST['preco'] ?? 0;
            $reajuste = $_REQUEST['reajuste'] ?? 0;
        ?>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" required value="<?=$preco?>" step="0.01" min="0.10" >
            <label for="reajuste">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reajuste" id="reajuste" required value="<?=$reajuste?>" min="0" max="100" step="1" oninput="mudaValor()">

            <input type="submit" value="Reajustar">
            
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado do Reajuste</h2>
        <?php
            $pfinal = $preco * (1+($reajuste/100));
            echo "O produto custava R\$".format($preco).", com <strong>$reajuste% de aumento</strong> vai passar a custar <strong>R\$".format($pfinal)."</strong> a partir de agora.";
        ?>
    </section>
    <script>
        // Declarações automáticas
        mudaValor()
        function mudaValor() {
            p.innerText = reajuste.value;
        }
    </script>
</body>
</html>
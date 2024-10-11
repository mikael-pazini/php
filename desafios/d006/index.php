<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados do Formulário Retroalimentado
        $divid = $_GET['dividendo']?? 0;
        $divis = $_GET['divisor']?? 0;

    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" required value="<?=$divid?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" required value="<?=$divis?>" >
            <input type="submit" value="Dividir">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado da Operação</h2>
        <?php 
            $div = $divid / $divis;
            echo "A soma entre os valores ".$divid." e ".$divis." é <strong>igua a $div</strong>.";
        ?>
    </section>
</body>
</html>
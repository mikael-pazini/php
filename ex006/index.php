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
        $value1 = $_GET['value1']?? 0;
        $value2 = $_GET['value2']?? 0;

    ?>
    <main>
        <h1>Somando Valores</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="value1">Valor 1 </label>
            <input type="number" name="value1" id="value1" required value="<?=$value1?>" step="0.0000001">
            <label for="value2">Valor 2 </label>
            <input type="number" name="value2" id="value2" required value="<?=$value2?>" step="0.0000001">
            <input type="submit" value="Somar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php 
            $sum = $value1 + $value2;
            echo "A soma entre os valores ".$value1." e ".$value2." é <strong>igua a $sum</strong>.";
        ?>
    </section>
</body>
</html>
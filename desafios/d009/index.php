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
        function format($par) {
            $par = number_format($par, 2,",",".");
            return $par;
        }
        // Capturando os dados do Formulário Retroalimentado
        $value1 = $_GET['value1']?? 1;
        $weight1 = $_GET['weight1']?? 1;
        $value2 = $_GET['value2']?? 1;
        $weight2 = $_GET['weight2']?? 1;

    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="value1">1º Valor</label>
            <input type="number" name="value1" id="value1" required value="<?=$value1?>" min="0" max="10">
            <label for="divisor">1º Peso</label>
            <input type="number" name="weight1" id="weight1" required value="<?=$weight1?>" min="1">
            <label for="value1">2º Valor</label>
            <input type="number" name="value2" id="value2" required value="<?=$value2?>" min="0" max="10">
            <label for="divisor">2º Peso</label>
            <input type="number" name="weight2" id="weight2" required value="<?=$weight2?>" min="1">

            <input type="submit" value="Calcular Médias">
            
        </form>
    </main>

    <section id="resultado">
        <h2>Cálculo das Médias</h2>
        <?php
            echo "Analisando os valores $value1 e $value2:";
            $mediaS = ($value1+$value2)/2;
            $mediaP = (($value1*$weight1)+($value2*$weight2))/($weight1+$weight2);
            echo "<ul><li>A <strong>Média Aritimética Simples</strong> entre os valores é igual a ".format($mediaS)."</li>";
            echo "<li>A <strong>Média Aritimética Ponderada</strong> com pesos $weight1 e $weight2 é igua a ".format($mediaP)."</li></ul>";
        ?>
        
    </section>
</body>
</html>
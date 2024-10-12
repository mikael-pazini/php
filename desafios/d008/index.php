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
        $num = $_GET['num']?? 1;
        $raiz2 = (1/2);
        $raiz3 = (1/3);
    ?>
    <main>
        <h1>Cálculo de Raizes</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="numo" required value="<?=$num?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
            $r2 = pow($num, $raiz2);
            $r3 = pow($num, $raiz3);

            echo "Analisando o <strong>número $num</strong>, temos:";
            echo "<ul><li>A sua raiz quadrada é <strong>".number_format($r2,3,",",".")."</strong></li>";
            echo "<li>A sua raiz cúbica é <strong>".number_format($r3,3,",",".")."</strong></li></ul>";
        ?>
        
    </section>
</body>
</html>
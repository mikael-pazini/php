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
        $sal = $_GET['salario']?? 1412.00;
        $smin = 1412.00;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" step="0.01" required value="<?=$sal?>">
            <p>Considerando um salário mínimo de <strong>R$ 1.412,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
            $qtdsal = intval($sal / $smin);
            $restosal = $sal-($qtdsal*$smin);

            echo "Quem recebe um salário de R$ ".number_format($sal,2,",",".")." ganha <strong>$qtdsal salários mínimos</strong> + R\$". number_format($restosal,2,",",".").".";
        ?>
        
    </section>
</body>
</html>
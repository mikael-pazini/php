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
        $anoA = date('Y');
        $anoN = $_GET['anoN']?? $anoA;
        $anoD = $_GET['anoD']?? $anoA;
        

    ?>
    <main>
        <h1>Calculando sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="anoN">Em que ano você nasceu?</label>
            <input type="number" name="anoN" id="anoN" required value="<?=$anoN?>" step="1" min="1900" max="<?=$anoA?>" >
            <label for="anoD">Quer saber sua idade em que ano? <?="(atualmente estamos em <strong>$anoA</strong>)"?></label>
            <input type="number" name="anoD" id="anoD" required value="<?=$anoD?>" step="1">

            <input type="submit" value="Qual será minha idade?">
            
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>
        <?php
            $idade = $anoD - $anoN;
            echo "Quem nasceu em $anoN vai ter <strong>$idade anos</strong> em $anoD!";
        ?>
        
    </section>
</body>
</html>
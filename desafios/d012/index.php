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
            $tempo = $_REQUEST['tempo'] ?? 1;
        ?>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Qual o total de segundos?</label>
            <input type="number" name="tempo" id="tempo" required value="<?=$tempo?>" step="1">

            <input type="submit" value="Calcular">
            
        </form>
    </main>

    <section id="resultado">
        <h2>Total de tempo</h2>
        <?php
            $Vsem = 604800;
            $Vdia = 86400;
            $Vhor = 3600;
            $Vmin = 60;
            $Vseg = 1;

            $sem = intval($tempo/$Vsem);
            $dia = intval((($tempo-($sem*$Vsem))/86400));
            $hor = intval((($tempo-($sem*$Vsem)-($dia*$Vdia))/3600));
            $min = intval((($tempo-($sem*$Vsem)-($dia*$Vdia)-($hor*$Vhor))/60));
            $seg = intval((($tempo-($sem*$Vsem)-($dia*$Vdia)-($hor*$Vhor)-($min*$Vmin))/1));

            // $resto = $tempo;
            // $sem = intval($resto/$Vsem);
            // $resto = $resto % $Vsem;
            // $dia = intval($resto/$Vdia);
            // $resto = $resto % $Vdia;
            // $hor = intval($resto/$Vhor);
            // $resto = $resto % $Vhor;
            // $min = intval($resto/$Vmin);
            // $resto = $resto % $Vmin;
            // $seg = $resto;

            echo "Analisando o valor que você digitou, <strong>".number_format($tempo,0,",",".")." segundos</strong> equivalem a um total de:";
            echo"<ul><li>$sem semanas</li>";
            echo"<li>$dia dias</li>";
            echo"<li>$hor horas</li>";
            echo"<li>$min minutos</li>";
            echo"<li>$seg segundos</li></ul>";
        ?>
        
    </section>
</body>
</html>
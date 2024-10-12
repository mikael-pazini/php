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
            $reais = $_REQUEST['reais'] ?? 0;
        ?>
        <h1>Caixa eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="reais" id="reais" required value="<?=$reais?>" step="5">
            <p>*Notas disponíveis: R$200 R$100, R$50, R$20, R$10, R$5</p>
            <input type="submit" value="Sacar">
            
        </form>
    </main>

    <section id="resultado">
        <h2>Saque de R$<?=$reais?> realizado</h2>
        <?php
            $v200 = intval($reais/200);
            $v100 = intval((($reais-($v200*200))/100));
            $v50 = intval((($reais-($v200*200)-($v100*100))/50));
            $v20 = intval((($reais-($v200*200)-($v100*100)-($v50*50))/20));
            $v10 = intval((($reais-($v200*200)-($v100*100)-($v50*50)-($v20*20))/10));
            $v5 = intval((($reais-($v200*200)-($v100*100)-($v50*50)-($v20*20)-($v10*10))/5));

            echo "O caixa eletrônico vai te entregar as seguintes notas:";
            echo "<ul><li>R$200 X $v200 </li>";
            echo "<li>R$100 X $v100 </li>";
            echo "<li>R$50 X $v50 </li>";
            echo "<li>R$20 X $v20 </li>";
            echo "<li>R$10 X $v10 </li>";
            echo "<li>R$5 X $v5 </li></ul>";
        ?>
        
    </section>
</body>
</html>
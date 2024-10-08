<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
1<body>
    <h1>Tipos primitivos em PHP</h1>
    <?php
    // 0x = Hexadecimal
    // 0b = Binário
    // 0  = Octal
        // $num = 0b1011;
        // echo "O valor da variável é $num"

        // $v = "Mikael";
        // var_dump($v);

        // $num = 3e2; // 3 x 10(^2)
        // var_dump((int)$num); // (int) ou (integer) chamado de coerção

        // $num ="950";
        // var_dump((float)$num);

        // $casado = true;
        // var_dump($casado);
        // echo "O valor para casado é $casado"

        // $vet = ["Mikael", 22, 100.5, true];
        // var_dump($vet)

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>
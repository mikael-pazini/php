<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
            //
            $start = date("m-d-Y", strtotime("-7 days"));
            $now = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$start.'\'&@dataFinalCotacao=\''.$now.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            // var_dump($dados);

            $cot = $dados["value"][0]["cotacaoCompra"];
            //

            $num = $_GET["num"];
            // $cot = 5.59;
            $conv = $num / $cot;

            function format($par) {
                $par = number_format($par, 2,",",".");
                return $par;
            }
            echo "<h1><strong>Conversor de Moedas v1.0</strong></h1>";
            // Biblioteca intl (PHP) - Verificar se está habilitado
            // $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            // echo "Seus <strong>".numfmt_create($padrao, $num, "BRL")."</strong> equivalem a <strong>".numfmt_create($padrao, $conv, "USD")."</strong><br>";
            echo "Seus <strong>R\$".format($num)."</strong> equivalem a <strong>US\$".format($conv)."</strong><br>";
            echo "<strong><p>*Cotação de R\$".format($cot)."</strong> informada diretamente pelo <em>Banco Central</em>.</p>";
        ?>
        <br>
        <input type="button" value="🠔 Voltar" onclick="voltarPagina()">
    </main>
    <script>
        function voltarPagina() {
            window.history.back();
        }
    </script>
</body>
</html>
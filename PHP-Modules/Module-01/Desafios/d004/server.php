<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Conversor de Moedas</h1>
        <?php 
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            
            $reais = $_GET['numero'];
            $dolares = $reais / $cotacao;
            
            // echo "<p>Seus R$" . number_format($reais, 2, ",", ".") . " equivalem a US$" . number_format($dolares, 2, ",", "."). "</p>"; // este é o jeito tradicional/simples

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seus <strong>" . numfmt_format_currency($padrao, $reais, "BRL") . "</strong> equivalem a <strong>" . numfmt_format_currency($padrao, $dolares, "USD") . "</strong></p>";
        ?>
        <form action="javascript:history.go(-1)"><button type="submit">Voltar</button></form>
    </div>
</body>
</html>
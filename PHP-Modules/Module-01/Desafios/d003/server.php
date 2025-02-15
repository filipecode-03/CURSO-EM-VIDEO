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
            $reais = $_GET['numero'];
            $dolares = $reais / 5.17;
            
            // echo "<p>Seus R$" . number_format($reais, 2, ",", ".") . " equivalem a US$" . number_format($dolares, 2, ",", "."). "</p>"; // este é o jeito tradicional/simples

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolares, "USD") . "</p>";
        ?>
        <form action="javascript:history.go(-1)"><button type="submit">Voltar</button></form>
    </div>
</body>
</html>
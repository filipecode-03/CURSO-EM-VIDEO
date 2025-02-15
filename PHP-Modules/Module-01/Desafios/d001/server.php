<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado Final</title>
</head>
<body>
    <div class="container">
        <h1>Resultado Final</h1>
        <?php 
            $n = $_GET["numero"];
            $ant = $n - 1;
            $suc = $n + 1;
            
            echo "<p>O número escolhido foi <strong>$n</strong></p>";
            echo "<p>O seu antecessor é <strong>$ant</strong></p>";
            echo "<p>O seu sucessor é <strong>$suc</strong></p>";
        ?>
        <form action="javascript:history.go(-1)"><button type="submit">Voltar</button></form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
    $v1 = $_GET['valor1'] ?? 0;
    $p1 = $_GET['peso1'] ?? 1;
    
    $v2 = $_GET['valor2'] ?? 0;
    $p2 = $_GET['peso2'] ?? 1;
    ?>

    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">1° Valor</label>
            <input type="number" name="valor1" id="valor1" value="<?=$v1?>">
            
            <label for="peso1">1° Peso</label>
            <input type="number" name="peso1" id="peso1" value="<?=$p1?>">

            <label for="valor2">2° Valor</label>
            <input type="number" name="valor2" id="valor2" value="<?=$v2?>">

            <label for="peso2">2° Peso</label>
            <input type="number" name="peso2" id="peso2" value="<?=$p2?>">

            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <h2>Cálculo das Médias</h2>
        <?php
            $soma = ($v1 + $v2) / 2;
            $soma1 = ($v1 * $p1) + ($v2 * $p2);
            $soma2 = $p1 + $p2; 
            $somaF = $soma1 / $soma2;
            echo "<p>Analisando os valores $v1 e $v2:</p>";

            echo "<ul>";
                echo "<li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a ". number_format($soma, 2, ",", ".") ."</li>";
                echo "<li>A <strong>Média Aritmética Ponderada</strong> com pesos $p1 e $p2 é igual a ". number_format($somaF, 2, ",", ".") ."</li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>
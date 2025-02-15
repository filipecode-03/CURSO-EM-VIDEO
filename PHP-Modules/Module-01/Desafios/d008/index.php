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
        $num = $_GET['numero'] ?? 0;
        $raizQ = sqrt($num);
        $raizC = pow($num, 1/3);
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="<?=$num?>">
            <input type="submit" value="Clacular Raízes">
        </form>
    </main>

    <section>
        <h2>Resultado final</h2>
        <?php 
            echo "Analisando o <strong>número $num</strong>, temos:";
            echo "<ul>";
                echo "<li>A sua raiz quadrada é <strong>". number_format($raizQ, 3, ",", ".") ."</strong></li>";
                echo "<li>A sua raiz cúbica é <strong>". number_format($raizC, 3, ",", ".") ."</strong></li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>
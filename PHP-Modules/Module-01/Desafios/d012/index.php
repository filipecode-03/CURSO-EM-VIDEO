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
        $seg = $_GET['segundos'] ?? 0;
    ?>

    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" value="<?=$seg?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <?php 
            $semanas = floor($seg / 604800);
            $restoSemanas = $seg % 604800;
        
            $dias = floor($restoSemanas / 86400);
            $restoDias = $restoSemanas % 86400;
        
            $horas = floor($restoDias / 3600);
            $restoHoras = $restoDias % 3600;
        
            $minutos = floor($restoHoras / 60);
            $segundos = $restoHoras % 60;
        ?>

        <h2>totalizando tudo</h2>
    <p>Analisando o valor que você digitou, <strong><?=number_format($seg, 0, ",", ".")?> segundos</strong> equivalem a um total de :</p>
        <ul>
            <li><?=number_format($semanas, 0, ",", ".")?> semanas</li>
            <li><?=number_format($dias, 0, ",", ".")?> dias</li>
            <li><?=number_format($horas, 0, ",", ".")?> horas</li>
            <li><?=number_format($minutos, 0, ",", ".")?> minutos</li>
            <li><?=number_format($segundos, 0, ",", ".")?> segundos</li>
        </ul>
    </section>
</body>
</html>
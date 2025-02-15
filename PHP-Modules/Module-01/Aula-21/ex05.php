<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        $casado = false;
        var_dump($casado);
        echo "O valor de casado é $casado" //os valores booleanos do php funcionam da seguinte forma -> se você colocar uma variável com um valor booleano você não pode esperar que ele vai colocar na tela "true" ou "false".
        //Para o php os resultados serão esses: true = 1 e false = 0 ou nada
    ?>
</body>
</html>
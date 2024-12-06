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
        <h1>Analisador de Número Real</h1>
        <?php 
            $num = $_GET['numero'] ?? 0;
            echo "<p>Analisando o número <strong>". number_format($num, 3, ",", ".") ."</strong> informado pelo usuário.</p>";

            $int = (int) $num;
            $fra = $num - $int;

            echo "<ul><li> A parte inteira do número é <strong>". number_format($int, 0, ",", ".") ."</strong></li>";
            echo "<li> A parte fracionário do número é <strong>". number_format($fra, 3, ",", ".") ."</strong></li></ul>";
        ?>
        <form action="javascript:history.go(-1)"><button type="submit">Voltar</button></form>
    </div>
</body>
</html>
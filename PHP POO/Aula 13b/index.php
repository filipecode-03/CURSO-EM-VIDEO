<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once 'Lobo.php';
        require_once 'Cachorro.php';

        $c = new Cachorro();
            $c->reagir("Olá");
            $c->reagir("Vai apanhar");
            $c->reagir(12, 45);
            $c->reagir(21, 80);
            $c->reagir(true);
            $c->reagir(false);
            $c->reagir(2, 12.5);
            $c->reagir(17, 4.5);
    ?>
</body>
</html>
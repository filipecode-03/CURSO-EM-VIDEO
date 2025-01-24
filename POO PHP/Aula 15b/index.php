<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once 'Video.php';
        require_once 'Gafanhoto.php';
        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML5");

        $g[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
        $g[1] = new Gafanhoto("Creuza", 12, "F", "creuzita");

        $via[0] = new Visualizacao($g[0], $v[2]); // Jubilue assiste HTML5
            $vi[0]->avaliar();
        $via[1] = new Visualizacao($g[0], $v[1]); // Jubileu assiste PHP
            $via[1]->avaliarPorc(85);
    ?>
</body>
</html>
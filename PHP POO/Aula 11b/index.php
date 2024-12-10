<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once 'Visitante.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
        $v1 = new Visitante("Juvenal", 33, "M");

        $a1 = new Aluno("Pedro", 16, "M");
        $a1->setMatricula(1111);
        $a1->setCurso("Informática");
        $a1->pagarMensalidade();

        $b1 = new Bolsista("Jubileu", 17,"M");
        $b1->setMatricula(1112);
        $b1->setBolsa(12.5);
        $b1->setCurso("Adimistração");
        $b1->pagarMensalidade();
    ?>
</body>
</html>
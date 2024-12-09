<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once 'Pessoa.php';
        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new Funcionario();

        $p1->setNome("Pedro");
        $p2->setNome("Maria");
        $p3->setNome("Cláudio");
        $p4->setNome("Fabiana");

        $p2->setCurso("Informática");
        $p3->setSalario(2500.75);
        $p4->setSetor("Estoque");
    ?>
</body>
</html>
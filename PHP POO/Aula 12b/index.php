<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';

        $m = new Mamifero();
            $m->setPeso(85.3);
            $m->setIdade(2);
            $m->setMembros(4);
            $m->locomover();
            $m->alimentar();
            $m->emitirSom();

        $r = new Reptil();


        $p = new Peixe();
            $p->setPeso(8.35);
            $p->setIdade(1);
            $p->setMembros(0);
            $p->locomover();
            $p->alimentar();
            $p->emitirSom();
            $p->soltarBolha();

        $a = new Ave();
            $a->setPeso(0.89);
            $a->setIdade(2);
            $a->setMembros(2);
            $a->locomover();
            $a->alimentar();
            $a->emitirSom();
            $a->fazerNinho();
    ?>
</body>
</html>
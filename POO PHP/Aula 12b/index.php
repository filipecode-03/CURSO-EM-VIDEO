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
            require_once 'Canguru.php';
            require_once 'Cachorro.php';
        require_once 'Reptil.php';
            require_once 'Cobra.php';
            require_once 'Tartaruga.php';
        require_once 'Peixe.php';
            require_once 'GoldFish.php';
        require_once 'Ave.php';
            require_once 'Arara.php';

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

        $c = new Canguru();
            $c->setPeso(55.30);
            $c->setIdade(3);
            $c->setMembros(4);
            $c->locomover();
            $c->alimentar();
            $c->emitirSom();
            $c->usarBolsa();
        
        $k = new Cachorro();
            $k->setPeso(3.94);
            $k->setIdade(5);
            $k->setMembros(4);
            $k->locomover();
            $k->alimentar();
            $k->emitirSom();
            $k->abanarRabo();
    ?>
</body>
</html>
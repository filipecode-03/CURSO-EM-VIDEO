<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once 'ContaBanco.php';
        $p1 = new ContaBanco(); // Jubileu
        $p2 = new ContaBanco(); // Creuza
        
        $p1->abrirConta("CC");
        $p1->setnumConta(1111);
        $p1->setDono("Jubileu");
        $p1->depositar(300);
        $p1->pagarMensal();

        $p2->abrirConta("CP");
        $p2->setnumConta(2222);
        $p2->setDono("Creuza");
        $p2->depositar(500);
        $p2->sacar(100);
        $ps->pagarMensal();
    ?>
</body>
</html>
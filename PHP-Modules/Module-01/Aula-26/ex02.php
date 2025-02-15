<?php 
    $oc = base_convert(254, 10, 8);
    $hex = base_convert(254, 10, 16);
    $bin = base_convert(254, 10, 2);

    $bin2 = base_convert(1011, 2, 10);
    /* desse modo quando na primeira virgula vc bota o valor que vc quer converter.
    
    Na segunda virgula vc coloca a base original. 
    
    E na ultima virgula vc vai pedir qual a base que vc quer converter.

    no exemplo vc pediu para mudar o valor 254 de base 10 em base 8.
    */ 
    echo "A resposta é $oc";
    echo "A resposta é $hex";
    echo "A resposta é $bin";

    echo "A resposta é $bin2";
?>
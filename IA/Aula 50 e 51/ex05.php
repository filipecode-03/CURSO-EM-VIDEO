<?php
/**
 * Script para imprimir números primos de 1 a 100.
 */

// Loop para verificar todos os números de 2 a 100
for ($num = 2; $num <= 100; $num++) {
    $isPrime = true;

    // Verifica divisores até a raiz quadrada do número
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    // Imprime o número se for primo
    if ($isPrime) {
        echo $num . "\n";
    }
}
?>
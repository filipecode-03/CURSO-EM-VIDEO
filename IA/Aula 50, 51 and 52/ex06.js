// Loop para verificar números de 2 a 100
for (let num = 2; num <= 100; num++) {
    let isPrime = true;
    let max = Math.sqrt(num);

    // Verifica divisores até a raiz quadrada do número
    for (let i = 2; i <= max; i++) {
        if (num % i === 0) {
            isPrime = false;
            break;
        }
    }

    // Imprime o número se for primo
    if (isPrime) {
        console.log(num);
    }
}

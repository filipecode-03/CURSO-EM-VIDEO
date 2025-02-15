<?php

// Array com os departamentos
$departamentos = [
    'Departamento financeiro',
    'Departamento de RH',
    'Departamento de atendimento',
    'Departamento administrativo',
    'Departamento de manutenção'
];

// Ordenar o array em ordem crescente
sort($departamentos);

// Exibir os departamentos ordenados
foreach ($departamentos as $departamento) {
    echo $departamento . PHP_EOL;
}

?>
<?php

function imprimirCalendario($mes, $ano) {
    // Nomes dos dias da semana
    $diasDaSemana = ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'];

    // Número de dias no mês
    $diasNoMes = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);

    // Primeiro dia do mês
    $primeiroDia = date('w', strtotime("$ano-$mes-01"));

    // Título do calendário
    echo "Calendário de $mes/$ano\n";
    echo implode(" ", $diasDaSemana) . "\n";

    // Espaços em branco antes do primeiro dia
    for ($i = 0; $i < $primeiroDia; $i++) {
        echo "    ";
    }

    // Imprime os dias do mês
    for ($dia = 1; $dia <= $diasNoMes; $dia++) {
        printf("%3d ", $dia);

        // Quebra de linha no final da semana
        if (($dia + $primeiroDia) % 7 == 0) {
            echo "\n";
        }
    }

    echo "\n";
}

// Exemplo de uso
imprimirCalendario(1, 2025); // Exibe o calendário de Janeiro de 2025
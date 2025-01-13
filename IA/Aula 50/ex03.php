<?php 
    /**
     * Função para obter o dia da semana a partir de uma data fornecida.
     *
     * @param string $date Data no formato 'YYYY-MM-DD'.
     * @return string Nome do dia da semana correspondente.
     */
    function getDayOfWeek($date) {
        // Cria um objeto DateTime a partir da data fornecida
        $dateTime = new DateTime($date);
        
        // Obtém o índice do dia da semana (0 = Domingo, 6 = Sábado)
        $dayOfWeek = $dateTime->format('w');
        
        // Array com os nomes dos dias da semana em português
        $days = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
        
        // Retorna o nome do dia da semana correspondente ao índice
        return $days[$dayOfWeek];
    }
?>

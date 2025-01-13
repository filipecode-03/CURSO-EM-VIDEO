<?php 
    function getDayOfWeek($date) {
        $dateTime = new DateTime($date);
        $dayOfWeek = $dateTime->format('w');
        $days = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
        return $days[$dayOfWeek];
    }
?>
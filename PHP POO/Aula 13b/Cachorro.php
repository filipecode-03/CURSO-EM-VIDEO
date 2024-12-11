<?php 
    require_once 'Lobo.php';
    class Cachorro extends Lobo {
        // Métodos
        public function reagir($frase) {
            if ($frase = "toma comida" or $frase = "Olá") {
                echo "Abanar e Latir";
            } else {
                echo "Rosnar";
            }
        }
        public function reagir($hora, $min) {
            if ($hora < 12) {
                echo "Abanar";
            } elseif ($hora >= 18) {
                echo "Ignorar";
            } else {
                echo "Abanar e Latir";
            }
        }
        public function reagir($dono) {
            if ($dono = true) {
                echo "Abanar";
            } else {
                echo "Rosnar e Latir";
            }
        }
        public function reagir($idade, $peso) {
            if ($idade < 5) {
                if ($peso < 10) {
                    echo "Abanar";
                } else {
                    echo "Latir";
                }
            } else {
                if ($peso < 10) {
                    echo "Rosnar";
                } else {
                    echo "Ignorar";
                }
            }
        }
    }
?>
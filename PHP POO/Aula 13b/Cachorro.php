<?php 
    require_once 'Lobo.php';
    class Cachorro extends Lobo {
        // Métodos
        function emitirSom()
        {
            echo "<p>Au!Au!Au!</p>";
        }
        public function reagirFrase($frase) {
            if ($frase == "Toma Comida" || $frase == "Olá") {
                echo "Abanar e Latir";
            } else {
                echo "Rosnar";
            }
        }
        public function reagirHora($hora, $min) {
            if ($hora < 12) {
                echo "Abanar";
            } elseif ($hora >= 18) {
                echo "Ignorar";
            } else {
                echo "Abanar e Latir";
            }
        }
        public function reagirDono($dono) {
            if ($dono) {
                echo "Abanar";
            } else {
                echo "Rosnar e Latir";
            }
        }
        public function reagirIdadePeso($idade, $peso) {
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
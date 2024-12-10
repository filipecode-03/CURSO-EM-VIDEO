<?php 
    require_once 'Mamifero.php';
    class Cachorro extends Mamifero {
        // Métodos
        public function enterrarOsso() {
            echo "<p>Enterrando Osso</p>";
        }
        public function abanarRabo() {
            echo "<p>Abanando o Rabo</p>";
        }
    }
?>
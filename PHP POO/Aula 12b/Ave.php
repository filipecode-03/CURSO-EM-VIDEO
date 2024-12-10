<?php 
    require_once 'Animal.php';
    class Ave extends Animal {
        // Atributos
        private $corPena;

        // Métodos
        public function locomover()
        {
            echo "<p>Voando</p>";
        }
        public function alimentar()
        {
            echo "<p>Comendo frutas</p>";
        }
        public function emitirSom()
        {
            echo "<p>Som de ave</p>";
        }
        public function fazerNinho() {
            echo "<p>Construiu um ninho</p>"; 
        }
    }
?>
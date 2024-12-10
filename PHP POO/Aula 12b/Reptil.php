<?php 
    require_once 'Animal.php';
    class Reptil extends Animal {
        // Atributos
        private $corEscama;

        // Métodos
        public function locomover()
        {
            echo "<p>Rastejando</p>";
        }
        public function alimentar()
        {
            echo "<p>Comendo Vegetais</p>";
        }
        public function emitirSom()
        {
            echo "<p>som de Réptil</p>";
        }
    }  
?>
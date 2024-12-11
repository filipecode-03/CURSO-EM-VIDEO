<?php 
    require_once 'Animal.php';
    class Mamifero extends Animal {
        // Atributos
        private $corPelo;

        // Métodos
        public function locomover()
        {
            echo "<p>Correndo</p>";
        }
        public function alimentar()
        {
            echo "<p>mamando</p>";
        }
        public function emitirSom()
        {
            echo "<p>som de Mamifero</p>";
        }

        // Métodos Especiais
        public function getCorPelo() {
            return $this->corPelo;
        }
        public function setCorPelo($co) {
            $this->corPelo = $co;
        }
    }
?>
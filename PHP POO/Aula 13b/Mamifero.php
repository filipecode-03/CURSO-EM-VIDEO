<?php 
    require_once 'Animal.php';
    class Mamifero extends Animal {
        protected $corPelo;
        public function emitirSom()
        {
            echo "<p>Som de Mamifero</p>";
        }
        public function locomover()
        {
            
        }
        public function alimentar()
        {
            
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
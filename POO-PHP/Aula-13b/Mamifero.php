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
            
        } // Essa não é pra estar aqui, mais por conta de algum erro ela precisa estar aqui.
        public function alimentar()
        {
            
        } // Essa não é pra estar aqui, mais por conta de algum erro ela precisa estar aqui.

        // Métodos Especiais
        public function getCorPelo() {
            return $this->corPelo;
        }
        public function setCorPelo($co) {
            $this->corPelo = $co;
        }
    }
?>
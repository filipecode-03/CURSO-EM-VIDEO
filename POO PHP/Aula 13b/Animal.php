<?php 
    abstract class Animal {
        protected $peso, $idade, $membros;
        abstract function emitirSom();

        // Métodos Especiais
        public function getPeso() {
            return $this->peso;
        }
        public function setPeso($pe) {
            $this->peso = $pe;
        }

        public function getIdade() {
            return $this->idade;
        }
        public function setIdade($id) {
            $this->idade = $id;
        }

        public function getMembros() {
            return $this->membros;
        }
        public function setMembros($me) {
            $this->membros = $me;
        }
    }
?>
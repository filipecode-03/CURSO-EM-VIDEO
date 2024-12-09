<?php 
    class Professor extends Pessoa {
        // Atributos
        private $especialidade;
        private $salario;

        // Métodos
        public function receberAum() {

        }

        // Métodos Especiais
        public function getEspecialidade() {
            return $this->especialidade;
        }
        public function setEspecialidade($es) {
            $this->especialidade = $es;
        }

        public function getSalario() {
            return $this->salario;
        }
        public function setSalario($sa) {
            $this->salario = $sa;
        }
    }
?>
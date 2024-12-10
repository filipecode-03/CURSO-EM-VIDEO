<?php 
    require_once 'Pessoa.php';
    class Aluno extends Pessoa {
        // Atributos
        private $matricula;
        private $curso;

        // Métodos
        public function pagarMensalidade() {

        }

        // Métodos Especiais
        public function getMatricula() {
            return $this->matricula;
        }
        public function setMatricula($ma) {
            $this->matricula = $ma;
        }

        public function getCurso() {
            return $this->curso;
        }
        public function setCurso($cu) {
            $this->curso = $cu;
        }
    }
?>
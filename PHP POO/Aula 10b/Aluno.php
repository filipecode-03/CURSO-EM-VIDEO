<?php 
    class Aluno extends Pessoa {
        // Atributos
        private $matr;
        private $curso;

        // Métodos
        public function cancelarMatr() {

        }

        //Métodos Especiais
        public function getMatr() {
            return $this->matr;
        }
        public function setMatr($ma) {
            $this->matr = $ma;
        }

        public function getCuso() {
            return $this->curso;
        }
        public function setCurso($cu) {
            $this->curso = $cu;
        }
    }
?>
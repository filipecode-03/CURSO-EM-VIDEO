<?php 
    require_once 'Pessoa.php';
    class Funcionario extends Pessoa {
        // Atributos
        private $setor;
        private $trabalhando;

        // Métodos
        public function mudarTrabalho() {
            $this->trabalhando = ! $this->trabalhando;
        }

        // Métodos Especiais
        public function getSetor() {
            return $this->setor;
        }
        public function setSetor($se) {
            $this->setor = $se;
        }

        public function getTrabalhando() {
            return $this->trabalhando;
        }
        public function setTrabalhando($tr) {
            $this->trabalhando = $tr;
        }
    }
?>
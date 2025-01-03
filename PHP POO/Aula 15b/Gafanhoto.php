<?php 
    require_once 'Pessoa.php';
    class Gafanhoto extends Pessoa {
        // Atributos
        private $login;
        private $totAssistido;

        // Métodos
        public function assistirMaisUm() {
            $this->totAssistido ++;
        }

        // Métodos Especiais
        public function __construct($nome, $idade, $sexo, $login)
        {
            parent::__construct($nome, $idade, $sexo);
            $this->login = $login;
            $this->totAssistido = 0;
        }

        public function getLogin() {
            return $this->login;
        }
        public function setLogin($lo) {
            $this->login = $lo;
        }

        public function getTotAssistido() {
            return $this->totAssistido;
        }
        public function setTotAssistindo($ta) {
            $this->totAssistido = $ta;
        }
    }
?>
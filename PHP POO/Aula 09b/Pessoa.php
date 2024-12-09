<?php 
    class Pessoa {
        // Atributos
        private $nome;
        private $idade;
        private $sexo;

        // Métodos
        public function fazerAniver() {
            $this->idade ++;
        }

        // Métodos Especiais
        function __construct($nome, $idade, $sexo)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }

        function getNome() {
            return $this->nome;
        }
        function setNome($no) {
            $this->nome = $no;
        }

        function getIdade() {
            return $this->idade;
        }
        function setIdade($id) {
            $this->idade = $id;
        }

        function getSexo() {
            return $this->sexo;
        }
        function setSexo($se) {
            $this->sexo = $se;
        }
    }
?>
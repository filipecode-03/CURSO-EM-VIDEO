<?php 
    require_once 'Aluno.php';
    class Bolsista extends Aluno {
        // Atributos
        private $bolsa;

        // Métodos
        public function renovartBolsa() {
            echo "<p>Bolsa Renovada</p>";
        }
        public function pagarMensalidade()
        {
            echo "<p>". $this->nome ." é bolsista! Então paga com desconto!</p>";
        }

        // Métodos Especiais
        public function getBolsa() {
            return $this->bolsa;
        }
        public function setBolsa($bo) {
            $this->bolsa = $bo;
        }
    }
?>
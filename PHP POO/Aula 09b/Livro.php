<?php 
    require_once 'Pessoa';
    require_once 'Publicacao.php';
    class Livro implements Publicacao {
        // Atributos
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        // Métodos
        public function detalhes() {

        }

        // Métodos Especiais
        function __construct($titulo, $autor, $totPaginas, $leitor)
        {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->leitor = $leitor;
        }

        function getTitulo() {
            return $this->titulo;
        }
        function setTitulo($ti) {
            $this->titulo = $ti;
        }

        function getAutor() {
            return $this->autor;
        }
        function setAutor($au) {
            $this->autor = $au;
        }

        function getTotPaginas() {
            return $this->totPaginas;
        }
        function setTotPaginas($tp) {
            $this->totPaginas = $tp;
        }

        function getPagAtual() {
            return $this->pagAtual;
        }
        function setPagAtual($pa) {
            $this->pagAtual = $pa;
        }

        function getAberto() {
            return $this->pagAtual;
        }
        function setAberto($ab) {
            $this->aberto = $ab;
        }

        function getLeitor() {
            return $this->leitor;
        }
        function setLeitor($le) {
            $this->leitor = $le;
        }

        // Métedos abstratos
        public function abrir() {
            $this->aberto = true;
        }
        public function fechar() {
            $this->aberto = false;
        }
        public function folhear($p) {
            if ($p > $this->totPaginas) {
                $this->pagAtual = 0;
            } else {
                $this->pagAtual = $p;
            }
        }   
        public function avançarPag() {
            $this->pagAtual ++;
        }   
        public function voltarPag() {
            $this->pagAtual --;
        }
    }
?>
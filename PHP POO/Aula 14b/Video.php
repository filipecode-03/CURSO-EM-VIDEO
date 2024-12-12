<?php 
    require_once 'AcoesVideo.php';
    class Video implements AcoesVideo {
        // Atributos
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;

        // Métodos
        public function play() {
            $this->curtidas ++;
        }
        public function pause() {
            $this->reproduzindo = false;
        }
        public function like() {
            $this->reproduzindo = true;
        }

        // Métodos Especiais
        public function __construct($titulo)
        {
            $this->titulo = $titulo;
            $this->avaliacao = 1;
            $this->views = 0;
            $this->curtidas = 0;
            $this->reproduzindo = false;
        }
        public function getTitulo() {
            return $this->titulo;
        }
        public function setTitulo($ti) {
            $this->titulo = $ti;
        }

        public function getAvaliacao() {
            return $this->avaliacao;
        }
        public function setAvaliacao($av) {
            $this->avaliacao = $av;
        }

        public function getViews() {
            return $this->views;
        }
        public function setViews($vi) {
            $this->views = $vi;
        }

        public function getCurtidas() {
            return $this->curtidas;
        }
        public function setCurtidas($cu) {
            $this->curtidas = $cu;
        }

        public function getReproduzindo() {
            return $this->reproduzindo;
        }
        public function setReproduzindo($re) {
            $this->reproduzindo = $re;
        }

    }
?>
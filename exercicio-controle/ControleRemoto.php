<?php 
    require_once 'Controlador.php';
    class ControleRemoto implements Controlador {   
        // Implementando a interface Controlador

        // Atributos
        private $volume;
        private $ligado;
        private $tocando;

        // Método Contrutor
        public function __construct() {
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }

        // Métodos Getters e Setters
        public function getVolume() {
            return $this->volume;
        }
        public function setVolume($volume) {
            $this->volume = $volume;
        }

        public function getLigado() {
            return $this->ligado;
        }
        public function setLigado($ligado) {
            $this->ligado = $ligado;
        }

        public function getTocando() {
            return $this->tocando;
        }
        public function setTocando($tocando) {
            $this->tocando = $tocando;
        }

        // Implementando Métodos a interface Controlador
        public function ligar() {
            $this->setLigado(true);
            echo "Controle remoto ligado!<br>";
        }
        
        public function desligar() {
            $this->setLigado(false);
            echo "Controle remoto desligado!<br>";
        }
        
        public function pause() {
            if ($this->getTocando() == true) {
                $this->setTocando(false);
                echo "Pausando...<br>";
            } else {
                echo "Erro! Não tem nada tocando.<br>";
            }
        }
        
        public function play() {
            if ($this->getTocando() == false && $this->getLigado() == true) {
                $this->setTocando(true);
            } else {
                echo "Erro! Já está tocando.<br>";
            }
        }
        
        public function abrirMenu() {
            echo "<br>Ligado: " . ($this->getLigado() ? "Sim" : "Não");
            echo "<br>Tocando: " . ($this->getTocando() ? "Sim" : "Não");
            for ($i = 0; $i <= $this->getVolume(); $i += 10) {
                echo " | ";
            }
            echo "<br>Volume: " . $this->getVolume() . "<br>";
            echo "<br>Menu aberto!<br>";
        }
        
        public function fecharMenu() {
            echo "<br>Fechando menu...";
        }
        
        public function maisVolume() {
            if ($this->getLigado() == true && $this->getVolume() < 100) {
                $this->setVolume($this->getVolume() + 1);
            } else {
                echo "<br>Erro! O controle remoto está desligado.";
            }
        }

        public function menosVolume() {
            if ($this->getLigado() == true && $this->getVolume() > 0) {
                $this->setVolume($this->getVolume() - 1);
            } else {
                echo "<br>Erro! O controle remoto está desligado.";
            }
        }

        public function ligarMudo() {
            if ($this->getLigado() && $this->getVolume() > 0) {
                $this->setVolume(0);
            } else {
                echo "<br>Erro! O controle remoto está desligado ou o volume já está mudo.";
            }
        }

        public function desligarMudo() {
            if ($this->getLigado() && $this->getVolume() == 0) {
                $this->setVolume(30);
            } else {
                echo "<br>Erro! O controle remoto está desligado ou o volume não está mudo.";
            }
        }
    }
?>
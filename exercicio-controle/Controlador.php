<?php 
    interface Controlador {
        
        // Métodos Abstratos (implicitamente abstratos em interfaces)
        public function ligar();
        public function desligar();
        public function pause();
        public function play();
        public function abrirMenu();
        public function fecharMenu();
        public function maisVolume();
        public function menosVolume();
        public function ligarMudo();
        public function desligarMudo();
    }
?>
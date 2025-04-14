<?php
    // Importa a classe Lutador
    require_once 'Lutador.php';
    
    class Config {
        // Propriedade para armazenar os lutadores
        private $lutador = [];

        // Getter para acessar os lutadores
        public function getLutadores() {
            return $this->lutador;
        }

        // Setter para definir os lutadores
        public function setLutadores($lutador) {
            $this->lutador = $lutador;
        }

        // Inicializa o array de lutadores no construtor
        public function inicializarLutadores() {
            // Criação de lutadores com seus dados
            // Cada lutador é instanciado com nome, nacionalidade, idade, altura e peso
            $this->lutador[0] = new Lutador("Carlos Silva", "Brasil", 28, 1.75, 85.5);
            $this->lutador[0]->setVitorias(10);
            $this->lutador[0]->setDerrotas(3);
            $this->lutador[0]->setEmpates(1);

            $this->lutador[1] = new Lutador("John Doe", "EUA", 30, 1.80, 85.0);
            $this->lutador[1]->setVitorias(15);
            $this->lutador[1]->setDerrotas(5);
            $this->lutador[1]->setEmpates(2);

            $this->lutador[2] = new Lutador("Mario Oliveira", "Brasil", 25, 1.65, 99.0);
            $this->lutador[2]->setVitorias(8);
            $this->lutador[2]->setDerrotas(2);
            $this->lutador[2]->setEmpates(0);

            $this->lutador[3] = new Lutador("Mike Tyson", "EUA", 35, 1.78, 95.0);
            $this->lutador[3]->setVitorias(20);
            $this->lutador[3]->setDerrotas(5);
            $this->lutador[3]->setEmpates(1);

            $this->lutador[4] = new Lutador("Anderson Silva", "Brasil", 40, 1.85, 93.0);
            $this->lutador[4]->setVitorias(30);
            $this->lutador[4]->setDerrotas(10);
            $this->lutador[4]->setEmpates(2);

            $this->lutador[5] = new Lutador("Conor McGregor", "Irlanda", 32, 1.80, 92.0);
            $this->lutador[5]->setVitorias(25);
            $this->lutador[5]->setDerrotas(6);
            $this->lutador[5]->setEmpates(3);
        }

        // Construtor da classe Config
        public function __construct() {
            // Inicializa os lutadores com seus dados
            $this->inicializarLutadores();
        }
    }
?>
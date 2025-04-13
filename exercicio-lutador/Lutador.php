<?php 
    class Lutador {
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        // Constructor
        public function __construct($nome, $nacionalidade, $idade, $altura, $peso) {
            $this->nome = $nome;
            $this->nacionalidade = $nacionalidade;
            $this->idade = $idade;
            $this->altura = $altura;
            $this->peso = $peso;
        }

        // Getters and Setters
        public function getNome() {
            return $this->nome;
        }
        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getNacionalidade() {
            return $this->nacionalidade;
        }
        public function setNacionalidade($nacionalidade) {
            $this->nacionalidade = $nacionalidade;
        }

        public function getIdade() {
            return $this->idade;
        }
        public function setIdade($idade) {
            $this->idade = $idade;
        }

        public function getAltura() {
            return $this->altura;
        }
        public function setAltura($altura) {
            $this->altura = $altura;
        }

        public function getPeso() {
            return $this->peso;
        }
        public function setPeso($peso) {
            $this->peso = $peso;
            $this->setCategoria(); // Atualiza a categoria ao definir o peso
        }

        public function getCategoria() {
            return $this->categoria;
        }
        public function setCategoria() {
            if ($this->peso < 52.2) {
                $this->categoria = "Invalido";
            } elseif ($this->peso <= 70.3) {
                $this->categoria = "Leve";
            } elseif ($this->peso <= 83.9) {
                $this->categoria = "Médio";
            } elseif ($this->peso <= 120.2) {
                $this->categoria = "Pesado";
            } else {
                $this->categoria = "Invalido";
            }
        }

        public function getVitorias() {
            return $this->vitorias;
        }
        public function setVitorias($vitorias) {
            $this->vitorias = $vitorias;
        }

        public function getDerrotas() {
            return $this->derrotas;
        }
        public function setDerrotas($derrotas) {
            $this->derrotas = $derrotas;
        }

        public function getEmpates() {
            return $this->empates;
        }
        public function setEmpates($empates) {
            $this->empates = $empates;
        }

        // Métodos
        public function apresentar() {
            echo "Lutador: {$this->getNome()}<br>";
            echo "Origem: {$this->getNacionalidade()}<br>";
            echo "Idade: {$this->getIdade()} anos<br>";
            echo "Altura: {$this->getAltura()} m<br>";
            echo "Peso: {$this->getPeso()} kg<br>";
            echo "Categoria: {$this->getCategoria()}<br>";
            echo "Vitórias: {$this->getVitorias()}<br>";
            echo "Derrotas: {$this->getDerrotas()}<br>";
            echo "Empates: {$this->getEmpates()}<br>";
        }

        public function status() {
            echo "{$this->getNome()} é um lutador da categoria {$this->getCategoria()} com {$this->getVitorias()} vitórias, {$this->getDerrotas()} derrotas e {$this->getEmpates()} empates.<br>";
        }

        public function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta() {
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);
        }
    }


?>
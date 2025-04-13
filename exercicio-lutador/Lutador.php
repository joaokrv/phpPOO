<?php 
    // Classe Lutador que define as propriedades e métodos de um lutador
    class Lutador {
        // Propriedades privadas do lutador
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        // Construtor da classe Lutador, inicializa as propriedades
        public function __construct($nome, $nacionalidade, $idade, $altura, $peso) {
            $this->setNome($nome);
            $this->setNacionalidade($nacionalidade);
            $this->setIdade($idade);
            $this->setAltura($altura);
            $this->setPeso($peso); // Define a categoria ao setar o peso
            $this->vitorias = 0;
            $this->derrotas = 0;
            $this->empates = 0;
        }

        // Métodos getters e setters com validações
        public function getNome() {
            return $this->nome;
        }
        public function setNome($nome) {
            if (!empty($nome)) $this->nome = $nome;
        }
    
        public function getNacionalidade() {
            return $this->nacionalidade;
        }
        public function setNacionalidade($nacionalidade) {
            if (!empty($nacionalidade)) $this->nacionalidade = $nacionalidade;
        }
    
        public function getIdade() {
            return $this->idade;
        }
        public function setIdade($idade) {
            if ($idade > 0) $this->idade = $idade;
        }
    
        public function getAltura() {
            return $this->altura;
        }
        public function setAltura($altura) {
            if ($altura > 0) $this->altura = $altura;
        }
    
        public function getPeso() {
            return $this->peso;
        }
        public function setPeso($peso) {
            if ($peso > 0) {
                $this->peso = $peso;
                $this->setCategoria(); // Atualiza a categoria com base no peso
            }
        }
    
        public function getCategoria() {
            return $this->categoria;
        }
        private function setCategoria() {
            // Define a categoria com base no peso
            if ($this->peso < 52.2) {
                $this->categoria = "Inválido";
            } elseif ($this->peso <= 70.3) {
                $this->categoria = "Leve";
            } elseif ($this->peso <= 83.9) {
                $this->categoria = "Médio";
            } elseif ($this->peso <= 120.2) {
                $this->categoria = "Pesado";
            } else {
                $this->categoria = "Inválido";
            }
        }
    
        // Métodos para vitórias, derrotas e empates
        public function getVitorias() {
            return $this->vitorias;
        }
        public function setVitorias($vitorias) {
            if ($vitorias >= 0) $this->vitorias = $vitorias;
        }
    
        public function getDerrotas() {
            return $this->derrotas;
        }
        public function setDerrotas($derrotas) {
            if ($derrotas >= 0) $this->derrotas = $derrotas;
        }
    
        public function getEmpates() {
            return $this->empates;
        }
        public function setEmpates($empates) {
            if ($empates >= 0) $this->empates = $empates;
        }

        // Método privado para avaliar o desempenho do lutador
        private function avaliarDesempenho() {
            $v = $this->getVitorias();
            $d = $this->getDerrotas();
        
            // Avaliação baseada no número de vitórias e derrotas
            if ($v > 20 && $d <= 3) return 'S';
            if ($v > 15 && $d <= 5) return 'A';
            if ($v > $d) return 'B';
            if ($v == $d) return 'C';
            return 'D';
        }
        
        // Método público para apresentar informações do lutador
        public function apresentar() {
            $avaliacao = $this->avaliarDesempenho(); // Chama a função de avaliação
        
            // Retorna as informações formatadas do lutador
            return "
                <div class='lutador-card'>
                    <h2>{$this->getNome()}</h2>
                    <p><strong>Idade:</strong> {$this->getIdade()} anos</p>
                    <p><strong>Nacionalidade:</strong> {$this->getNacionalidade()}</p>
                    <p><strong>Altura:</strong> {$this->getAltura()} m</p>
                    <p><strong>Peso:</strong> {$this->getPeso()} kg</p>
                    <p><strong>Categoria:</strong> {$this->getCategoria()}</p>
                    <p><strong>Vitórias:</strong> {$this->getVitorias()}</p>
                    <p><strong>Derrotas:</strong> {$this->getDerrotas()}</p>
                    <p><strong>Empates:</strong> {$this->getEmpates()}</p>
                    <p><strong>Avaliação:</strong> <span class='avaliacao nota-{$avaliacao}'>{$avaliacao}</span></p>
                </div>
            ";
        }

        // Método para exibir status resumido do lutador
        public function status() {
            return "<p>{$this->getNome()} é um lutador da categoria {$this->getCategoria()}, com {$this->getVitorias()} vitórias, {$this->getDerrotas()} derrotas e {$this->getEmpates()} empates.</p>";
        }

        // Métodos para registrar resultados das lutas
        public function ganharLuta() {
            $this->vitorias++;
        }

        public function perderLuta() {
            $this->derrotas++;
        }

        public function empatarLuta() {
            $this->empates++;
        }
    }
?>
<?php 
class Lutador {
    // Atributos
    private $nome;
    private $idade;
    private $nacionalidade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;   

    // Construtor
    public function __construct($nome, $idade, $nacionalidade, $altura, $peso) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->nacionalidade = $nacionalidade;
        $this->altura = $altura;
        $this->setPeso($peso); // Usando o setter para definir o peso e a categoria
    }

    // Getters e Setters
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }
    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
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
    private function setCategoria() {
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
        echo "<p>Nome: {$this->getNome()}</p>";
        echo "<p>Idade: {$this->getIdade()} anos</p>";
        echo "<p>Nacionalidade: {$this->getNacionalidade()}</p>";
        echo "<p>Altura: {$this->getAltura()} m</p>";
        echo "<p>Peso: {$this->getPeso()} kg</p>";
        echo "<p>Categoria: {$this->getCategoria()}</p>";
        echo "<p>Vitórias: {$this->getVitorias()}</p>";
        echo "<p>Derrotas: {$this->getDerrotas()}</p>";
        echo "<p>Empates: {$this->getEmpates()}</p>";
    }

    public function status() {
        echo "<p>{$this->getNome()} é um lutador da categoria {$this->getCategoria()} com {$this->getVitorias()} vitórias, {$this->getDerrotas()} derrotas e {$this->getEmpates()} empates.</p>";
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
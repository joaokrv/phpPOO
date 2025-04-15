<?php 
class Pessoa {
    // Atributos
    private $nome;
    private $idade;
    private $sexo;

    // Método Construtor
    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }
    
    // Método Mágico __toString
    // Esse método é chamado quando o objeto é convertido para string    
    public function __toString(): string {
        return $this->nome;
    }

    public function getDadosCompletos(): string {
    return "{$this->nome} ({$this->idade} anos, {$this->sexo})";
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

    public function getSexo() {
        return $this->sexo;
    }
    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    // Métodos
    public function fazerAniversario() {
        $this->idade++;
        echo "Feliz aniversário, {$this->nome}!<br>";
        echo "Você agora tem " . ($this->idade) . " anos!<br>";
    }
}
?>
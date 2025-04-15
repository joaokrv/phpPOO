<?php 
class Pessoa {
    // Atributos
    private $nome;
    private $idade;
    private $sexo;

    // Construtor
    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
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
    // Método para retornar o status da pessoa
    public function status() {
        echo "<div class='status-item'><strong>Nome:</strong> " . $this->getNome() . "</div>";
        echo "<div class='status-item'><strong>Idade:</strong> " . $this->getIdade() . " anos</div>";
        echo "<div class='status-item'><strong>Sexo:</strong> " . $this->getSexo() . "</div>";
    }
    
    // Método aniversário
    public function fazerAniversario() {
        $this->idade++;
        echo "<div class='method'>";
        echo "<h3><strong>Fazer Aniversário</strong></h3>";
        echo "<p>Feliz aniversário, " . $this->getNome() . "! Agora você tem " .    $this->getIdade() . " anos.</p>";
        echo "<div class='action success'>Parabéns!</div>";
        echo "</div>";
    }
}
?>
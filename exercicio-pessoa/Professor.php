<?php 
// Importa a classe mãe Pessoa
require_once 'Pessoa.php';

class Professor extends Pessoa{ 
    // Atributos
    private $especialidade;
    private $salario;
    
    // Construtor
    public function __construct($nome, $idade, $sexo, $especialidade, $salario) {
        parent::__construct($nome, $idade, $sexo); // Chama o construtor da classe mãe
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }

    // Getters e Setters
    public function getEspecialidade() {
        return $this->especialidade;
    }
    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }
    public function setSalario($salario) {
        $this->salario = $salario;
    }

    // Métodos
    // Método para retornar o status do professor
    public function status() {
        echo "<div class='status-item'><strong>Nome:</strong> " . $this->getNome() . "</div>";
        echo "<div class='status-item'><strong>Idade:</strong> " . $this->getIdade() . " anos</div>";
        echo "<div class='status-item'><strong>Sexo:</strong> " . $this->getSexo() . "</div>";
        echo "<div class='status-item'><strong>Especialidade:</strong> " . $this->getEspecialidade() . "</div>";
        echo "<div class='status-item'><strong>Salário:</strong> R$" . number_format($this->getSalario(), 2) . "</div>";
    }

    // Método para simular o aumento do salário
    public function receberAumento($aumento) {
        $this->salario += $aumento;
        echo "<div class='method'>";
        echo "<h3><strong>Receber Aumento</strong></h3>";
        echo "<p>O salário de " . $this->getNome() . " foi aumentado para R$" .     number_format($this->salario, 2) . ".</p>";
        echo "<div class='action success'>Aumento realizado com sucesso!</div>";
        echo "</div>";
    }
}
?>
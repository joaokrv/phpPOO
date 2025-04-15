<?php 
// Implementa classe Pessoa
require_once 'Pessoa.php';

class Professor extends Pessoa {
    // Atributos
    private $especialidade;  
    private $salario;

    // Construtor
    public function __construct($nome, $idade, $sexo, $especialidade, $salario) {
        parent::__construct($nome, $idade, $sexo);
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }
    
    // Métodos getters e setters
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
    // Método para receber aumento
    public function receberAumento($aumento) {
        $this->salario += $aumento;
        echo "<p class='destaque'>Salário atualizado para: " . $this->salario . "</p>";
    }
    
    // Método para apresentar
    public function apresentar() {
        echo "<h3>Professor(a)</h3>";
        echo "<strong>Nome: </strong>" . $this->getNome() . "<br>";
        echo "<strong>Idade: </strong>" . $this->getIdade() . "<br>";
        echo "<strong>Sexo: </strong>" . $this->getSexo() . "<br>";
        echo "<strong>Especialidade : </strong>" . $this->getEspecialidade() . "<br>";
        echo "<strong>Salário: </strong>" . $this->getSalario() . "<br>";
    }
}
?>
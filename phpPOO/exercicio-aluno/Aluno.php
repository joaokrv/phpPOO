<?php 
// Implementa classe Pessoa
require_once 'Pessoa.php';

class Aluno extends Pessoa{
    // Atributos
    private $matricula;
    private $curso;

    // Construtor
    public function __construct($nome, $idade, $sexo, $matricula, $curso) {
        parent::__construct($nome, $idade, $sexo);
        $this->matricula = $matricula;
        $this->curso = $curso;
    }
    
    // Métodos getters e setters
    public function getMatricula() {
        return $this->matricula;
    }
    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function getCurso() {
        return $this->curso;
    }
    public function setCurso($curso) {
        $this->curso = $curso;
    }

    // Métodos
    // Método para pagar mensalidade
    public function pagarMensalidade(){
        echo "<p class='destaque-aluno'>Pagando mensalidade do aluno " . $this->getNome() . "</p>";
    }

    // Método para apresentar
    public function apresentar() {
        echo "<h3>Aluno</h3> " . "<br>";
        echo "<strong>Nome: </strong>" . $this->getNome() . "<br>";
        echo "<strong>Idade: </strong>" . $this->getIdade() . "<br>";
        echo "<strong>Sexo: </strong>" . $this->getSexo() . "<br>";
        echo "<strong>Matrícula: </strong>" . $this->getMatricula() . "<br>";
        echo "<strong>Curso: </strong>" . $this->getCurso() . "<br>";
    }
}
?>
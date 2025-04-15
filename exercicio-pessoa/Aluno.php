<?php 

// Importa a classe mãe Pessoa
require_once 'Pessoa.php';

class Aluno extends Pessoa {

    // Atributos
    private $matricula;
    private $curso;
    private $pessoa;

    // Construtor
    public function __construct($nome, $idade, $sexo, $matricula, $curso) {
        parent::__construct($nome, $idade, $sexo); // Chama o construtor da classe mãe
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    // Getters e Setters
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
    // Método para retornar o status do aluno
    public function status() {
        echo "<div class='status-item'><strong>Nome:</strong> " . $this->getNome() . "</div>";
        echo "<div class='status-item'><strong>Idade:</strong> " . $this->getIdade() . " anos</div>";
        echo "<div class='status-item'><strong>Sexo:</strong> " . $this->getSexo() . "</div>";
        echo "<div class='status-item'><strong>Matrícula:</strong> " . $this->getMatricula() . "</div>";
        echo "<div class='status-item'><strong>Curso:</strong> " . $this->getCurso() . "</div>";
    }

    // Método para simular o estudo do aluno
    public function estudar() {
        echo "<div class='method'>";
        echo "<h3><strong>Estudar</strong></h3>";
        echo "<p>" . $this->getNome() . " está estudando no curso de " . $this->getCurso    () . ".</p>";
        echo "<div class='action success'>Estudo iniciado com sucesso!</div>";
        echo "</div>";
    }
    
    // Método para simular o cancelamento da matrícula do aluno
    public function cancelarMatricula() {
        echo "<div class='method'>";
        echo "<h3><strong>Cancelar Matrícula</strong></h3>";
        echo "<p>" . $this->getNome() . " teve sua matrícula cancelada.</p>";
        echo "<div class='action error'>Matrícula cancelada!</div>";
        echo "</div>";
    }
}
?>
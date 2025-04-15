<?php 
// Implementa classe Aluno
require_once 'Aluno.php';

class Tecnico extends Aluno {
    // Atributos
    private $registroProfissional;

    // Construtor
    public function __construct($nome, $idade, $sexo, $matricula, $curso, $registroProfissional) {
        parent::__construct($nome, $idade, $sexo, $matricula, $curso);
        $this->registroProfissional = $registroProfissional;
    }

    // Métodos getters e setters
    public function getRegistroProfissional() {
        return $this->registroProfissional;
    }
    public function setRegistroProfissional($registroProfissional) {
        $this->registroProfissional = $registroProfissional;
    }

    // Métodos
    // Método para praticar
    public function praticar() {
        echo "<p class='destaque'>Praticando...</p>";
    }


    // Método para apresentar
    // Método para apresentar
    public function apresentar() {
        echo "<h3>Aluno Técnico</h3>" . "<br>";
        echo "<strong>Nome: </strong>" . $this->getNome() . "<br>";
        echo "<strong>Idade: </strong>" . $this->getIdade() . "<br>";
        echo "<strong>Sexo: </strong>" . $this->getSexo() . "<br>";
        echo "<strong>Matrícula: </strong>" . $this->getMatricula() . "<br>";
        echo "<strong>Curso: </strong>" . $this->getCurso() . "<br>";
        echo "<strong>Registro Profissional: </strong>" . $this->getRegistroProfissional() . "<br>";
    }
}
?>
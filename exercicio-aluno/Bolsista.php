<?php 
// Implementa classe Aluno
require_once 'Aluno.php';

class Bolsista extends Aluno {
    // Atributos
    private $bolsa;

    // Construtor
    public function __construct($nome, $idade, $sexo, $matricula, $curso, $bolsa) {
        parent::__construct($nome, $idade, $sexo, $matricula, $curso);
        $this->bolsa = $bolsa;
    }

    // Métodos Getters e Setters
    public function getBolsa() {
        return $this->bolsa;
    }
    public function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }

    // Métodos
    // Método para pagar mensalidade
    public function pagarMensalidade() {
        if ($this->bolsa > 0) {
            echo "<p class='destaque'>Mensalidade paga com desconto de " . $this->bolsa . "%.</p>";
        } else {
            echo "<p class='destaque'>Mensalidade paga sem desconto.</p>";
        }
    }

    // Método para renovar Bolsa
    public function renovarBolsa($novaBolsa) {
        $this->setBolsa($novaBolsa);
        echo "<p class='destaque'>Bolsa renovada para " . $this->getBolsa() . "%.</p>";
    }

    // Método para apresentar
    public function apresentar() {
        echo "<h3>Aluno Bolsista</h3>" . "<br>";
        echo "<strong>Nome: </strong>" . $this->getNome() . "<br>";
        echo "<strong>Idade: </strong>" . $this->getIdade() . "<br>";
        echo "<strong>Sexo: </strong>" . $this->getSexo() . "<br>";
        echo "<strong>Matrícula: </strong>" . $this->getMatricula() . "<br>";
        echo "<strong>Curso: </strong>" . $this->getCurso() . "<br>";
        echo "<strong>Bolsa: </strong>" . $this->getBolsa() . "%<br>";
    }
}
?>
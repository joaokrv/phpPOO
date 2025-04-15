<?php 
// Implementa classe Pessoa
require_once 'Pessoa.php';

class Visitante extends Pessoa {
    // Atributos
    private $identificador;
    
    // Construtor
    public function __construct($nome, $idade, $sexo, $identificador) {
        parent::__construct($nome, $idade, $sexo);
        $this->identificador = $identificador;
    }
    
    // Métodos getters e setters
    public function getIdentificador() {
        return $this->identificador;
    }
    
    public function setIdentificador($identificador) {
        $this->identificador = $identificador;
    }
    
    // Métodos
    // Método para apresentar
    public function apresentar() {
        echo "<h3>Visitante</h3>" . "<br>";
        echo "<strong>Nome: </strong>" . $this->getNome() . "<br>";
        echo "<strong>Idade: </strong>" . $this->getIdade() . "<br>";
        echo "<strong>Sexo: </strong>" . $this->getSexo() . "<br>";
        echo "<strong>Identificador de Visitante: </strong>" . $this->getIdentificador() . "<br>";
    }
}
?>
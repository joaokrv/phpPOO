<?php
abstract class Pessoa {
    // Atributos
    private $nome;
    private $idade;
    private $sexo;
    private $experiencia;

    // Construtor
    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0; // Inicializa a experiência como 0
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

    public function getExperiencia() {
        return $this->experiencia;
    }
    public function setExperiencia($experiencia) {
        $this->experiencia = $experiencia;
    }

    // Método abstrato
    abstract public function apresentar(); // Método para exibir informações da pessoa
    // Método para adicionar experiência
    abstract public function ganharExperiencia($exp); // Método para ganhar experiência
}
?>
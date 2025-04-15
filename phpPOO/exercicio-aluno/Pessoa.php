<?php 
abstract class Pessoa {
    private $nome;
    private $idade;
    private $sexo;

    // Construtor
    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    // Métodos getters e setters
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
    // Método aniversário
    public final function fazerAniversario() {
        $this->idade++;
    }

    // Método apresentar (abstrato, deve ser implementado nas classes filhas)
    abstract public function apresentar();
}
?>
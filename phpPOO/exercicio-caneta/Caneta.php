<?php 

class Caneta {
    private $modelo;
    private $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    // Construtor
    
    public function __construct($modelo, $cor, $ponta, $carga, $tampada) {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ponta = $ponta;
        $this->carga = $carga;
        $this->tampada = $tampada;
    }

    // Getters e Setters

    public function getPonta(){
        return $this->ponta;
    }
    
    public function setPonta($ponta){
        $this->ponta = $ponta;
    }

    public function getCarga(){
        return $this->carga;
    }

    public function setCarga($carga){
        $this->carga = $carga;
    }
    
    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getCor(){
        return $this->cor;
    }

    public function setCor($cor){
        $this->cor = $cor;
    }

    public function getTampada(){
        return $this->tampada;
    }

    public function setTampada($tampada){
        $this->tampada = $tampada;
    }

    // Métodos

    public function statusCaneta(){
        echo "Modelo: {$this->getModelo()}<br>";
        echo "Cor: {$this->getCor()}<br>";
        echo "Ponta: {$this->getPonta()}<br>";
        echo "Carga: {$this->getCarga()}%<br>";
        echo "Tampada: {$this->getTampada()}<br>";
    }

    public function escrever(){
        if ($this->tampada == true) {
            echo "Caneta tampada! Não pode escrever!<br>";
        } else {
            echo "Escrevendo...<br>";
        }
    }

    public function rabiscar(){    
        if ($this->tampada == true) {
            echo "Caneta tampada! Não pode rabiscar!<br>";
        } else {
            echo "Rabiscando...<br>";
        }
    }

    public function tampar(){
        $this->setTampada(true);
        echo "Caneta tampada!<br>";
    }

    public function destampar(){
        $this->setTampada(false);
        echo "Caneta destampada!<br>";
    }  
    
}

?>
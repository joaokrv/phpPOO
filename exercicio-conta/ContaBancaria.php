<?php 

class ContaBancaria {
    // Atributos
    private $numConta;
    private $tipo;
    private $dono;
    private $saldo;
    private $status;

    // Construtor
    public function __construct($dono, $numConta, $tipo, $status, $saldo) {
        $this->dono = $dono;
        $this->numConta = $numConta;
        $this->tipo = $tipo;
        $this->status = $status;
        $this->saldo = $saldo; 
    }

    // Getters e Setters
    public function getNumConta(){
        return $this->numConta;
    }
    public function setNumConta($numConta){
        $this->numConta = $numConta;
    }

    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getDono(){
        return $this->dono;
    }
    public function setDono($dono){
        $this->dono = $dono;
    }

    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status = $status;
    }
}   

?>
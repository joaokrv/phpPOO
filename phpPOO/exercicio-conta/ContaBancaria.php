<?php 
class ContaBancaria {

    // Atributos
    public $numConta;
    protected $tipo;
    private $dono = null; // Cliente
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

    // Métodos

    public function exibirDados() {
        echo "--------------------------------<br>";
        echo "Dados da conta:<br>";
        echo "Número da conta: {$this->getNumConta()}<br>";
        echo "Tipo da conta: {$this->getTipo()}<br>";
        echo "Dono da conta: {$this->getDono()}<br>";
        echo "Saldo: R$ {$this->getSaldo()}<br>";
        echo "Status: " . ($this->getStatus() ? "Ativa" : "Inativa") . "<br>";
        echo "--------------------------------<br>";
    }

    public function abrirConta($dono, $numConta, $tipo, $status) {
        $this->setTipo($tipo);
        $this->setStatus(true);
        if ($tipo == "CC") {
            $this->setSaldo(50);
            $this->dono = $dono;
            $this->numConta = $numConta;
            $this->status = $status; 
        } elseif ($tipo == "CP") {
            $this->setSaldo(150);
            $this->dono = $dono;
            $this->numConta = $numConta;
            $this->status = $status;
        } echo "Conta de {$this->getTipo()} aberta com sucesso para {$this->getDono()}!<br>";

    }

    public function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo "Conta não pode ser fechada, saldo positivo!<br>";
        } elseif ($this->getSaldo() < 0) {
            echo "Conta não pode ser fechada, saldo negativo!<br>";
        } else {
            $this->setStatus(false);
            echo "Conta de {$this->getDono()} fechada com sucesso!<br>";
        }
    }

    public function depositar($valor) {
        if ($this->getStatus() == true) {
            if ($valor > 0) {
                $this->setSaldo($this->getSaldo() + $valor);
                echo "Depósito de R$ {$valor} realizado com sucesso!<br>";
            } else {
                echo "Valor inválido para depósito!<br>";
            }
        } else {
            echo "Conta fechada, não é possível depositar!<br>";
        }
    }

    public function sacar($valor) {
        if ($this->getStatus() == true) {
            if ($this->getSaldo() > 0) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "Saque de R$ {$valor} realizado com sucesso!<br>";
            } else {
                echo "Saldo insuficiente para saque!<br>";
            }
        } else {
            echo "Conta fechada, não é possível sacar!<br>";
        }
    }

    public function pagarMensal() {
        if ($this->getTipo() == "CC") {
            $valor = 12;
        } elseif ($this->getTipo() == "CP") {
            $valor = 20;
        }
        if ($this->getStatus() == true) {
            if ($this->getSaldo() > 0) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "Mensalidade de R$ {$valor} paga com sucesso!<br>";
            } else {
                echo "Saldo insuficiente para pagar mensalidade!<br>";
            }
        } else {
            echo "Conta fechada, não é possível pagar mensalidade!<br>";
        }
    }
}   

?>
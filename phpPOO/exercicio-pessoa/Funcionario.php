<?php 
// Importa a classe mãe Pessoa
require_once 'Pessoa.php';

class Funcionario extends Pessoa{
    // Atributos
    private $setor;
    private $trabalhando;

    // Construtor
    public function __construct($nome, $idade, $sexo, $setor) {
        parent::__construct($nome, $idade, $sexo); // Chama o construtor da classe mãe
        $this->setor = $setor;
        $this->trabalhando = true; // Por padrão, o funcionário começa trabalhando
    }

    // Getters e Setters
    public function getSetor() {
        return $this->setor;
    }
    public function setSetor($setor) {
        $this->setor = $setor;
    }

    public function getTrabalhando() {
        return $this->trabalhando;
    }
    public function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
    }

    // Métodos
    
    // Método para retornar o status do funcionário
    public function status() {
        echo "<div class='status-item'><strong>Nome:</strong> " . $this->getNome() . "</div>";
        echo "<div class='status-item'><strong>Idade:</strong> " . $this->getIdade() . " anos</div>";
        echo "<div class='status-item'><strong>Sexo:</strong> " . $this->getSexo() . "</div>";
        echo "<div class='status-item'><strong>Setor:</strong> " . $this->getSetor() . "</div>";
    }

    // Método para mudar o setor do funcionário
    public function mudarSetor($novoSetor) {
        $this->setor = $novoSetor;
        echo "<div class='method'>";
        echo "<h3><strong>Mudar Setor</strong></h3>";
        echo "<p>" . $this->getNome() . " foi transferido para o setor " . $this->setor .   ".</p>";
        echo "<div class='action success'>Transferência realizada com sucesso!</div>";
        echo "</div>";
    }
    
    // Método para iniciar o trabalho
    public function iniciarTrabalho() {
        $this->trabalhando = true;
        echo "<div class='method'>";
        echo "<h3><strong>Iniciar Trabalho</strong></h3>";
        echo "<p>" . $this->getNome() . " começou a trabalhar.</p>";
        echo "<div class='action success'>Trabalho iniciado com sucesso!</div>";
        echo "</div>";
    }
    
    // Método para parar o trabalho
    public function pararTrabalho() {
        $this->trabalhando = false;
        echo "<div class='method'>";
        echo "<h3><strong>Parar Trabalho</strong></h3>";
        echo "<p>" . $this->getNome() . " parou de trabalhar.</p>";
        echo "<div class='action error'>Trabalho parado!</div>";
        echo "</div>";
    }
    
    // Método para voltar ao trabalho
    public function voltarTrabalho() {
        $this->trabalhando = true;
        echo "<div class='method'>";
        echo "<h3><strong>Voltar ao Trabalho</strong></h3>";
        echo "<p>" . $this->getNome() . " voltou a trabalhar.</p>";
        echo "<div class='action success'>Trabalho retomado com sucesso!</div>";
        echo "</div>";
    }

}
?>
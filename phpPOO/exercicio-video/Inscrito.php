<?php 
// Implementação classe Pessoa e Video
require_once 'Pessoa.php';
require_once 'Video.php';
require_once 'AcoesVideo.php';

class Inscrito extends Pessoa {
    // Atributos
    private $login;
    private $totAssistido;

    // Construtor
    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo); // Chama o construtor da classe pai
        $this->login = $login;
        $this->totAssistido = 0; // Inicializa o total assistido como 0
    }

    // Getters e Setters
    public function getLogin() {
        return $this->login;
    }
    public function setLogin($login) {
        $this->login = $login;
    }

    public function getTotAssistido() {
        return $this->totAssistido;
    }
    public function setTotAssistido($totAssistido) {
        $this->totAssistido = $totAssistido;
    }

    // Métodos
    // Método para ganhar experiência
    public function ganharExperiencia($exp) {
        $this->setExperiencia($this->getExperiencia() + $exp); // Adiciona experiência
    }

    // Método para assistir vídeo
    public function assistirVideo($video) {
        $this->totAssistido++;
        $video->setViews($video->getViews() + 1); // Aumenta o número de views do vídeo
        $video->setCurtidas($video->getCurtidas() + 1); // Aumenta o número de curtidas do vídeo
        $this->ganharExperiencia(5); // Adiciona 5 de experiência ao inscrito
    }

    // Método para exibir informações do inscrito
    public function apresentar() {
        echo "<div class='card'>";
        echo "<h2>🙋‍♂️ Inscrito: " . $this->getNome() . "</h2>";
        echo "<p><strong>Login:</strong> " . $this->getLogin() . "</p>";
        echo "<p><strong>Idade:</strong> " . $this->getIdade() . "</p>";
        echo "<p><strong>Experiência:</strong> " . $this->getExperiencia() . "</p>";
        echo "</div>";
    }
    
}
?>
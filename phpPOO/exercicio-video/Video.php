<?php 
// Imlpementando interface
require_once 'AcoesVideo.php';
class Video implements AcoesVideo {
    // Atributos
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    // Construtor
    public function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avaliacao = 1; // Inicializa a avaliação como 1
        $this->views = 0; // Inicializa as views como 0
        $this->curtidas = 0; // Inicializa as curtidas como 0
        $this->reproduzindo = false; // Inicializa como não reproduzindo
    }

    // Getters e Setters
    public function getTitulo() {
        return $this->titulo;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAvaliacao() {
        return $this->avaliacao;
    }
    public function setAvaliacao($avaliacao) {
        $this->avaliacao = $avaliacao;
    }

    public function getViews() {
        return $this->views;
    }
    public function setViews($views) {
        $this->views = $views;
    }

    public function getCurtidas() {
        return $this->curtidas;
    }
    public function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
    }

    public function getReproduzindo() {
        return $this->reproduzindo;
    }
    public function setReproduzindo($reproduzindo) {
        $this->reproduzindo = $reproduzindo;
    }

    // Métodos
    // Métodos da interface AcoesVideo
    public function play() {
        $this->reproduzindo = true; // Define como reproduzindo
        $this->views++; // Incrementa as views
    }

    // Método para parar a reprodução
    public function pause(){
        $this->reproduzindo = false; // Define como não reproduzindo
    }

    // Métodos para curtir e descurtir
    public function like(){
        $this->curtidas++; // Incrementa as curtidas
    }

    public function dislike(){
        $this->curtidas--; // Decrementa as curtidas
    }

    // Método para avaliar o vídeo
    public function avaliar($nota){
        $this->avaliacao = ($this->avaliacao + $nota) / 2; // Calcula a média da avaliação
    }

    // Método para exibir detalhes do vídeo
    // Este método pode ser chamado para exibir informações do vídeo
    public function details(){
        echo "<div class='card'>";
        echo "<h2>🎥 Vídeo: " . $this->getTitulo() . "</h2>";
        echo "<p><strong>Avaliação:</strong> " . $this->getAvaliacao() . "</p>";
        echo "<p><strong>Views:</strong> " . $this->getViews() . "</p>";
        echo "<p><strong>Curtidas:</strong> " . $this->getCurtidas() . "</p>";
        echo "<p><strong>Reproduzindo:</strong> " . ($this->getReproduzindo() ? 'Sim' : 'Não') . "</p>";
        echo "</div>";
    }
    
}
?>
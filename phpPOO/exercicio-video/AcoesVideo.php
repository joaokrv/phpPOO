<?php 
interface AcoesVideo {
    public function play();
    public function pause();
    public function like();
    public function dislike();
    public function details(); // Método para exibir detalhes do vídeo
}
?>
<?php 
// Implementação interface
require_once 'Publicacao.php';

// Implementação da classe Pessoa
require_once 'Pessoa.php';

class Livro implements Publicacao {
    
    //Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $leitor;
    private $aberto;

    //Método Construtor
    public function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
        $this->pagAtual = 0;
        $this->aberto = false;
    }

    // Getters e Setters
    public function getTitulo() {
        return $this->titulo;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAutor() {
        return $this->autor;
    }
    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getTotPaginas() {
        return $this->totPaginas;
    }
    public function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    public function getPagAtual() {
        return $this->pagAtual;
    }
    public function setPagAtual($pagAtual) {
        if ($pagAtual <= $this->totPaginas && $pagAtual >= 0) {
            $this->pagAtual = $pagAtual;
        } else {
            echo "Número de páginas inválido!<br>";
        }
    }

    public function getLeitor() {
        return $this->leitor;
    }
    public function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

    public function getAberto() {
        return $this->aberto;
    }
    public function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    //Métodos

    public function detalhes(){
        echo "<div class='livro'>";
        echo "<h2>{$this->titulo}</h2>";
        echo "<p><strong>Autor:</strong> {$this->autor}</p>";
        echo "<p><strong>Total de Páginas:</strong> {$this->totPaginas}</p>";
        echo "<p><strong>Página Atual:</strong> {$this->pagAtual}</p>";
        echo "<p><strong>Leitor:</strong> {$this->leitor->getDadosCompletos()}</p>";
        echo "<p><strong>Aberto:</strong> " . ($this->aberto ? "Sim" : "Não") . "</p>";
        echo "</div>";
    }

    public function abrir() {
        $this->aberto = true;
    }
    
    public function fechar() {
        $this->aberto = false;
    }
    
    public function folhear($pag) {
        if ($pag <= $this->totPaginas && $pag >= 0) {
            $this->pagAtual = $pag;
        } else {
            echo "Número de páginas inválido!<br>";
        }
    }
    
    public function avancarPag() {
        if ($this->pagAtual < $this->totPaginas) {
            $this->pagAtual++;
        } else {
            echo "Você já está na última página!<br>";
        }
    }
    
    public function voltarPag() {
        if ($this->pagAtual > 0) {
            $this->pagAtual--;
        } else {
            echo "Você já está na primeira página!<br>";
        }
    }
}
?>
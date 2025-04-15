<?php 
    // Importa a classe Lutador, que deve ser definida em outro arquivo
    require_once 'Lutador.php';

    class Luta {      
        
        // Propriedades privadas da classe Luta
        private $desafiado;  // Lutador desafiado (quem está sendo desafiado)
        private $desafiante; // Lutador desafiante (quem faz o desafio)
        private $rounds;     // Número de rounds da luta
        private $aprovada;   // Indica se a luta foi aprovada ou não

        // Getters e Setters para as propriedades privadas
        public function setDesafiado($desafiado) {
            $this->desafiado = $desafiado;
        }
        public function getDesafiado() {
            return $this->desafiado;
        }

        public function setDesafiante($desafiante) {
            $this->desafiante = $desafiante;
        }
        public function getDesafiante() {
            return $this->desafiante;
        }

        // Método para marcar a luta
        public function marcarLuta($desafiado, $desafiante) {
            // Define os lutadores na luta
            $this->setDesafiado($desafiado);
            $this->setDesafiante($desafiante);
        
            // Verifica se os lutadores são da mesma categoria e não são o mesmo lutador
            if ($this->getDesafiado()->getCategoria() == $this->getDesafiante()->getCategoria() && $this->getDesafiado() != $this->getDesafiante()) {
                
                // Aprova a luta
                $this->aprovada = true;

                // Define o número de rounds
                $this->rounds = 5;
            } else {
                // Caso a luta não seja aprovada, limpa os lutadores
                echo "❌ Luta não pode ser marcada!<br>";
                $this->aprovada = false;
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }
        }

        // Método para realizar a luta
        public function lutar() {
            // Inicializa a variável para armazenar as mensagens
            $mensagens = '';
        
            // Verifica se a luta foi aprovada
            if ($this->aprovada) {
                // Exibe as apresentações dos lutadores
                $mensagens .= $this->desafiado->apresentar();
                $mensagens .= $this->desafiante->apresentar();
        
                // Mensagem informando que a luta foi aprovada
                $mensagens .= "<div class='luta-mensagem aprovado'>";
                $mensagens .= "<p>💥 Luta marcada entre " . $this->getDesafiado()->getNome() . " e " . $this->getDesafiante()->getNome() . "!</p>";
                $mensagens .= "<p>🎯 Número de rounds: " . $this->rounds . "</p>";
                $mensagens .= "</div>";
        
                // Gera um número aleatório para determinar o vencedor (0: desafiado, 1: desafiante, 2: empate)
                $vencedor = rand(0, 2); 
                switch ($vencedor) {
                    case 0:
                        // Se o desafiado ganhar
                        $mensagens .= "<div class='resultado-vencedor'>";
                        $mensagens .= "<p>O vencedor é: " . $this->getDesafiado()->getNome() . "🏆</p>";
                        $this->getDesafiado()->ganharLuta(); // Desafiado ganha
                        $this->getDesafiante()->perderLuta(); // Desafiante perde
                        $this->getDesafiado()->status(); // Exibe o status do desafiado
                        $mensagens .= "</div>";
                        break;
                    case 1:
                        // Se o desafiante ganhar
                        $mensagens .= "<div class='resultado-vencedor'>";
                        $mensagens .= "<p>O vencedor é: " . $this->getDesafiante()->getNome() . " 🏆</p>";
                        $this->getDesafiado()->perderLuta(); // Desafiado perde
                        $this->getDesafiante()->ganharLuta(); // Desafiante ganha
                        $this->getDesafiante()->status(); // Exibe o status do desafiante
                        $mensagens .= "</div>";
                        break;
                    case 2:
                        // Se houver empate
                        $mensagens .= "<div class='resultado-empate'>";
                        $mensagens .= "<p>A luta terminou em empate!</p>";
                        $this->getDesafiado()->empatarLuta(); // Desafiado empata
                        $this->getDesafiante()->empatarLuta(); // Desafiante empata
                        $this->getDesafiado()->status(); // Exibe o status do desafiado
                        $this->getDesafiante()->status(); // Exibe o status do desafiante
                        $mensagens .= "</div>";
                        break;
                }
        
            } else {
                // Caso a luta não tenha sido aprovada
                $mensagens .= "<div class='luta-mensagem erro'>";
                $mensagens .= "<p>❌ Luta não aprovada!</p>";
                $mensagens .= "</div>";
            }
        
            // Retorna as mensagens formatadas
            return $mensagens;
        }
    }
?>
<?php 
    // Importa a classe Lutador
    require_once 'Lutador.php';

    class Luta{      
        
        // Propriedades privadas da classe Luta
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        // Getters e Setters
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

        // Métodos
        public function marcarLuta($desafiado, $desafiante) {
            // Verifica se os lutadores estão na mesma categoria e não são o mesmo lutador
            if ($this->getDesafiado()->getCategoria() == $this->getDesafiante()->getCategoria() && $this->getDesafiado() != $this->getDesafiante()) {
                // Aprova a luta
                $this->aprovada = true;

                // Define os lutadores
                $this->setDesafiado($desafiado);
                $this->setDesafiante($desafiante);

            } else {
                // Se não estiverem na mesma categoria ou forem o mesmo lutador, a luta não pode ser marcada
                echo "Luta não pode ser marcada!";
                $this->aprovada = false;
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }
        }

        public function lutar() {
            // Verifica se a luta foi aprovada
            if ($this->aprovada) {
                // Apresenta os lutadores
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();

                // Lógica para determinar o vencedor
                echo "Lutadores prontos para a luta!<br>";
                echo "Lutadores lutando...<br>";
                
                $vencedor = rand(0, 2); // 0: desafiado, 1: desafiante, 2: empate  
                switch ($vencedor) {
                    case 0:
                        echo "O vencedor é: " . $this->getDesafiado()->getNome() . "!<br>";
                        $this->getDesafiado()->ganharLuta();
                        $this->getDesafiante()->perderLuta();
                        $this->getDesafiado()->status();
                        break;
                    case 1:
                        echo "O vencedor é: " . $this->getDesafiante()->getNome() . "!<br>";
                        $this->getDesafiante()->ganharLuta();
                        $this->getDesafiado()->perderLuta();
                        $this->getDesafiante()->status();
                        break;
                    case 5:
                        echo "A luta terminou em empate!<br>";
                        $this->getDesafiado()->empatarLuta();
                        $this->getDesafiante()->empatarLuta();
                        $this->getDesafiado()->status();
                        $this->getDesafiante()->status();
                        break;
                }
                
            } else {
                echo "Luta não aprovada!";
            }
        }
    }
?>
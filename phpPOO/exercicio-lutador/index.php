<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lutadores</title>
    <link rel="stylesheet" href="style.css"> <!-- Link para o arquivo de estilo CSS -->
</head>

<body>
    <h1>🏆 Ficha dos Lutadores</h1>

    <div class="container">
        <?php
        // Inclui as classes necessárias
        require_once 'Lutador.php';
        require_once 'config.php';

        // Instancia a configuração que carrega os lutadores
        $config = new Config();
        $lutadores = $config->getLutadores(); // Recupera o array de lutadores

        // Exibe os dados de cada lutador (apresentação e status)
        for ($i = 0; $i < 6; $i++) {
            $lutador = $lutadores[$i];
            echo $lutador->apresentar(); // Exibe apresentação do lutador
            echo '<div class="status-card">';
            $lutador->status(); // Exibe o status do lutador
            echo '</div>';
        }

        // Recupera qual lutador foi selecionado no campo 1, caso o formulário tenha sido enviado
        $lutador1Selecionado = isset($_POST['lutador1']) ? $_POST['lutador1'] : 0;
        ?>


        <main>
            <!-- Formulário para marcar uma luta entre dois lutadores -->
            <div class="luta-box">
                <h2>🥊 Marcar Luta</h2>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <!-- Campo de seleção do Lutador 1 -->
                    <label for="lutador1">Selecione o Desafiado</label>
                    <select name="lutador1" id="lutador1">
                        <?php
                    // Gera as opções do Lutador 1
                    for ($i = 0; $i < 6; $i++) {
                        // Mantém selecionado após envio do formulário
                        $selected = ($i == $lutador1Selecionado) ? "selected" : ""; 
                        echo "<option value='{$i}' {$selected}>{$lutadores[$i]->getNome()}</option>";
                    }
                    ?>
                    </select>
                    <br><br>
                    <!-- Campo de seleção do Lutador 2 -->
                    <label for="lutador2">Selecione o Desafiante</label>
                    <select name="lutador2" id="lutador2">
                        <?php
                    // Gera as opções do Lutador 2, excluindo o que foi selecionado no campo anterior
                    for ($i = 0; $i < 6; $i++) {
                        if ($i != $lutador1Selecionado) {
                            echo "<option value='{$i}'>{$lutadores[$i]->getNome()}</option>";
                        }
                    }
                    ?>
                    </select>
                    <br><br>
                    <!-- Botão para enviar o  formulário -->
                    <input type="submit" value="Marcar Luta" class="btn-submit">
                    <br><br>
                </form>
            </div>
        </main>

        <!-- Script JavaScript para atualizar o segundo select dinamicamente -->
        <script>
        const lutador1Select = document.getElementById('lutador1');
        const lutador2Select = document.getElementById('lutador2');

        // Recebe os nomes dos lutadores diretamente do PHP, convertidos para um array JavaScript
        const lutadores = <?= json_encode(array_map(function($l) {
            return $l->getNome();
        }, $lutadores)) ?>;

        // Função que atualiza as opções do select de Lutador 2 com base no Lutador 1 selecionado
        function atualizarLutador2() {
            const selecionado = parseInt(lutador1Select.value); // Índice do lutador selecionado
            lutador2Select.innerHTML = ""; // Limpa o select de Lutador 2

            // Cria opções excluindo o lutador já selecionado
            lutadores.forEach((nome, index) => {
                if (index !== selecionado) {
                    const option = document.createElement("option");
                    option.value = index;
                    option.textContent = nome;
                    lutador2Select.appendChild(option);
                }
            });
        }

        // Atualiza o Lutador 2 sempre que o Lutador 1 for alterado
        lutador1Select.addEventListener("change", atualizarLutador2);

        // Atualiza o Lutador 2 assim que a página for carregada
        window.addEventListener("load", atualizarLutador2);
        </script>

        <!-- Resultado da luta -->
        <section id="resultado">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $lutador1Index = $_POST['lutador1'];
                $lutador2Index = $_POST['lutador2'];
            
                if (isset($lutadores[$lutador1Index]) && isset($lutadores[$lutador2Index])) {
                    $lutador1 = $lutadores[$lutador1Index];
                    $lutador2 = $lutadores[$lutador2Index];
                
                    require_once 'Luta.php'; // Garante que a classe Luta está disponível
                    $luta = new Luta();
                    $resultado = $luta->marcarLuta($lutador1, $lutador2); // Resultado da luta, se necessário
                    $vencedor = $luta->lutar(); // Chama o método lutar que retorna o vencedor      como string (nome)

                    // Verifica se houve vencedor ou empate e exibe a mensagem adequada
                    if ($vencedor === 'empate') {
                        echo "<div class='resultado-empate'>A luta terminou em empate!</div>";
                    } else {
                        echo "<div class='resultado-vencedor'>{$vencedor}</div>"; //      Exibe diretamente o nome do vencedor
                    }
                } else {
                    // Mensagem de erro caso o formulário tenha dados inválidos
                    echo "<div class='luta-mensagem erro'>❌ Erro: Lutador inválido selecionado.        </div>";
                }
            }
        ?>
        </section>

    </div>
</body>

</html>
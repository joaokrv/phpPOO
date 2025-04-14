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
        // Importa a classe Lutador
        require_once 'Lutador.php';

        // Criação do primeiro lutador e definição de suas vitórias, derrotas e empates
        $lutador1 = new Lutador("Carlos Silva", "Brasil", 28, 1.75, 75.5);
        $lutador1->setVitorias(10);
        $lutador1->setDerrotas(3);
        $lutador1->setEmpates(1);

        // Exibe a apresentação do lutador1 e seu status
        echo $lutador1->apresentar();
        echo '<div class="status-card">';
        $lutador1->status(); // Exibe status do lutador
        echo '</div>';

        // Criação do segundo lutador com suas informações
        $lutador2 = new Lutador("John Doe", "EUA", 30, 1.80, 85.0);
        $lutador2->setVitorias(15);
        $lutador2->setDerrotas(5);
        $lutador2->setEmpates(2);

        // Exibe a apresentação do lutador2 e seu status
        echo $lutador2->apresentar();
        echo '<div class="status-card">';
        $lutador2->status(); // Exibe status do lutador
        echo '</div>';

        ?>

    </div>
</body>

</html>
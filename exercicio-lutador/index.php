<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lutadores</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>🏆 Ficha dos Lutadores</h1>
    <div class="container">

        <?php
        require_once 'Lutador.php';

        $lutador1 = new Lutador("Carlos Silva", 28, "Brasil", 1.75, 75.5);
        $lutador1->setVitorias(10);
        $lutador1->setDerrotas(2);
        $lutador1->setEmpates(1);

        echo '<div class="lutador-card">';
        echo '<h2>' . $lutador1->getNome() . '</h2>';
        $lutador1->apresentar();
        echo '</div>';

        echo '<div class="status-card">';
        $lutador1->status();
        echo '</div>';
        ?>

    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício - Caneta</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Status da Caneta</h1>
        <div class="resultado">
            <?php 
                require_once 'Caneta.php';
                $caneta1 = new Caneta("BIC", "Azul", 0.5, 100, true);
                $caneta1->setModelo("BIC Cristal");
                $caneta1->statusCaneta();
            ?>
        </div>
    </div>
</body>

</html>
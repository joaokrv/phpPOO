<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio - 1</title>
</head>

<body>
    <?php 
        require_once 'Caneta.php';
        $caneta1 = new Caneta("BIC", "Azul", 0.5, 100, true);
        $caneta1->setModelo("BIC Cristal");
        $caneta1->statusCaneta();
    ?>
</body>

</html>
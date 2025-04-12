<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio - Conta Banco</title>
</head>

<body>
    <h1>Exercicio Conta Bancaria</h1>
    <?php 
        require_once 'ContaBancaria.php';
        require_once 'Cliente.php';

        // Criando clientes para teste
        $cliente1 = new Cliente("João", "12345678900", "11987654321");
        $cliente2 = new Cliente("Maria", "98765432100", "11987654322");

        // Criando contas para os clientes
        $conta1 = new ContaBancaria($cliente1->getNome(), "12345", "CC", true, 0);
        $conta2 = new ContaBancaria($cliente2->getNome(), "67890", "CP", true, 0);

    ?>
</body>

</html>
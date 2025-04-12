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

        // Criando contas para teste
        $conta1 = new ContaBancaria("CC", $cliente1->getNome(), 12345, true, 0);
        $conta2 = new ContaBancaria("CP", $cliente2->getNome(), 67890, true, 0);

        $conta1->abrirConta($cliente1->getNome(), 12345, "CC", true, 0);
        $conta2->abrirConta($cliente2->getNome(), 67890, "CP", true, 0);

        $conta1->exibirDados();
        $conta1->depositar(1000);
        $conta1->exibirDados();
        $conta1->sacar(500);
        $conta1->exibirDados();
        $conta1->pagarMensal();
        $conta1->exibirDados();
        $conta1->fecharConta();
        $conta1->exibirDados();
        $conta1->sacar(538);
        $conta1->fecharConta();
        $conta1->exibirDados();

        $conta2->exibirDados();
        $conta2->depositar(1234);
        $conta2->exibirDados();
        $conta2->sacar(1000);
        $conta2->exibirDados();
        $conta2->pagarMensal();
        $conta2->exibirDados();
        $conta2->fecharConta();
        $conta2->exibirDados();
        $conta2->sacar(364);
        $conta2->fecharConta();
        $conta2->exibirDados();
    ?>
</body>

</html>
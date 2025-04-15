<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Pessoa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Exercicio Pessoa</h1>
        <h2>Teste de Herança</h2>

        <!-- Seção Aluno -->
        <div class="section aluno">
            <h2>Aluno</h2>
            <?php
                // Cria um objeto da classe Aluno
                require_once 'Pessoa.php';
                require_once 'Aluno.php';

                $aluno = new Aluno("João", 20, "Masculino", 12345, "Engenharia");
                $aluno->status();
                $aluno->estudar();
            ?>
        </div>

        <br>

        <!-- Seção Professor -->
        <div class="section professor">
            <h2>Professor</h2>
            <?php
                // Cria um objeto da classe Professor
                require_once 'Professor.php';

                $professor = new Professor("Maria", 35, "Feminino", "Matemática", 5000);
                $professor->status();
                $professor->receberAumento(500);
            ?>
        </div>

        <br>

        <!-- Seção Funcionario -->
        <div class="section funcionario">
            <h2>Funcionario</h2>
            <?php
                // Cria um objeto da classe Funcionario
                require_once 'Funcionario.php';

                $funcionario = new Funcionario("Carlos", 30, "Masculino", "TI");
                $funcionario->status();
                $funcionario->mudarSetor("RH");
            ?>
        </div>
    </div>
</body>

</html>
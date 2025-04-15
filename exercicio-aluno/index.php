<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Aluno</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Exercício Aluno</h1>
    </header>

    <main>
        <section>
            <h2>Dados dos Alunos</h2>
            <div class="alunos-container">
                <div class="aluno-card">
                    <?php
                        require_once 'Aluno.php';
                        require_once 'Tecnico.php';
                        require_once 'Bolsista.php';

                        $aluno = new Aluno("João", 20, "Masculino", "12345", "Engenharia");
                        $aluno->apresentar();
                        echo "<br>";
                        $aluno->pagarMensalidade();
                    ?>
                </div>
                <div class="aluno-card">
                    <?php
                        $tecnico = new Tecnico("Maria", 22, "Feminino", "67890", "Informática", "123456789");
                        $tecnico->apresentar();
                        echo "<br>";
                        $tecnico->praticar();
                    ?>
                </div>
                <div class="aluno-card">
                    <?php
                        $bolsista = new Bolsista("Ana", 19, "Feminino", "54321", "Biologia", 50);
                        $bolsista->apresentar();
                        echo "<br>";
                        $bolsista->pagarMensalidade();
                    ?>
                </div>
            </div>

            <h2> Dados dos Professores </h2>

            <div class="professores-container">
                <div class="professor-card">
                    <?php 
                        require_once 'Professor.php';

                        $professor = new Professor("Carlos", 40, "Masculino", "Matemática", 5000);
                        $professor->apresentar();
                        echo "<br>";
                        $professor->receberAumento(1000);
                    ?>
                </div>

                <div class="professor-card">
                    <?php 
                        $professor2 = new Professor("Fernanda", 35, "Feminino", "Física", 6000);
                        $professor2->apresentar();
                        echo "<br>";
                        $professor2->receberAumento(1500);
                    ?>
                </div>
            </div>

            <h2> Dados dos Visitantes </h2>
            <div class="visitantes-container">
                <div class="visitante-card">
                    <?php 
                        // Implementa classe Visitante
                        require_once 'Visitante.php';

                        // Cria um objeto da classe Visitante
                        $visitante = new Visitante("Lucas", 25, "Masculino", "123456789");
                        $visitante->apresentar();
                        echo "<br>";
                    ?>
                </div>
                <div class="visitante-card">
                    <?php 
                        $visitante2 = new Visitante("Juliana", 30, "Feminino", "987654321");
                        $visitante2->apresentar();
                    ?>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
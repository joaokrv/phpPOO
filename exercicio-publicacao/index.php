<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Publicação</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php 
            // Incluindo os arquivos necessários
            require_once 'Publicacao.php';
            require_once 'Pessoa.php';
            require_once 'Livro.php';

            // Criando um array de objetos do tipo Pessoa
            $p[0] = new Pessoa("João", 25, "Masculino");
            $p[1] = new Pessoa("Maria", 30, "Feminino");
            $p[2] = new Pessoa("Carlos", 22, "Masculino");
            $p[3] = new Pessoa("Ana", 28, "Feminino");

            // Criando um array de objetos do tipo Livro
            $l[0] = new Livro("Aprendendo PHP", "José da Silva", 300, $p[0]);
            $l[1] = new Livro("Programação Orientada a Objetos", "Maria Oliveira", 250, $p[1]);
            $l[2] = new Livro("Desenvolvimento Web", "Carlos Santos", 400, $p[2]);
            $l[3] = new Livro("Banco de Dados", "Ana Costa", 350, $p[3]);
            $l[4] = new Livro("JavaScript Avançado", "Pedro Almeida", 500, $p[0]);

            // Exibindo os detalhes de alguns livros
            $l[0]->abrir();
            $l[0]->folhear(50);
            $l[0]->detalhes();

            $l[2]->abrir();
            $l[2]->folhear(150);
            $l[2]->detalhes();

            $l[4]->abrir();
            $l[4]->folhear(320);
            $l[4]->detalhes();
        ?>
    </main>
</body>

</html>
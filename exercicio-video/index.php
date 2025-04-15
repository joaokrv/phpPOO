<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Vídeos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>🎬 Sistema de Vídeos com Inscritos</h1>
    </header>

    <main>
        <!-- Macro-bloco de Vídeos -->
        <section class="macro-block-videos">
            <h2>📹 Vídeos Disponíveis</h2>
            <div class="videos-container">
                <?php 
                require_once 'Pessoa.php';
                require_once 'Video.php';
                require_once 'AcoesVideo.php';
                require_once 'Inscrito.php';

                // Criando vídeos
                $video1 = new Video("Aula 1 de POO");
                $video1->setAvaliacao(5);
                $video1->setCurtidas(10);
                $video1->setViews(100);
                $video1->play();
                $video1->like();

                // Exibindo detalhes do vídeo 1
                ?>
                <div class="video-card">
                    <p><?php echo $video1->details(); ?></p>
                </div>

                <?php
                $video2 = new Video("Aula 2 de POO");
                $video2->setAvaliacao(4);
                $video2->setCurtidas(5);
                $video2->setViews(50);
                $video2->play();
                $video2->like();

                // Exibindo detalhes do vídeo 2
                ?>
                <div class="video-card">
                    <p><?php echo $video2->details(); ?></p>
                </div>
            </div>
        </section>

        <!-- Macro-bloco de Inscritos -->
        <section class="macro-block-inscritos">
            <h2>👤 Inscritos</h2>
            <div class="inscritos-container">
                <?php
                // Criando inscritos
                $p1 = new Inscrito("Lucas", 25, "M", "lucas123");
                $p2 = new Inscrito("Maria", 30, "F", "maria456");
                $p3 = new Inscrito("João", 20, "M", "joao789");

                // Exibindo informações dos inscritos
                ?>
                <div class="inscrito-card">
                    <p><?php echo $p1->apresentar(); ?></p>
                    <?php 
                        $p1->assistirVideo($video1);
                        $p1->assistirVideo($video2);
                        $p1->ganharExperiencia(2); // Adiciona 10 de experiência ao inscrito
                    ?>
                </div>
                <div class="inscrito-card">
                    <p><?php echo $p2->apresentar(); ?></p>
                    <?php 
                        $p2->assistirVideo($video1);
                        $p2->assistirVideo($video2);
                        $p2->ganharExperiencia(10); // Adiciona 10 de experiência ao inscrito
                    ?>
                </div>
                <div class="inscrito-card">
                    <p><?php echo $p3->apresentar(); ?></p>
                    <?php 
                        $p3->assistirVideo($video1);
                        $p3->assistirVideo($video2);
                        $p3->ganharExperiencia(20); // Adiciona 10 de experiência ao inscrito
                    ?>
                </div>
            </div>
        </section>

        <!-- Macro-bloco de Atualizações -->
        <section class="macro-block-videos">
            <h2>📹 Atualizações Vídeos</h2>
            <div class="videos-container">
                <div class="video-card">
                    <p><?php echo $video1->details(); ?></p>
                </div>
                <div class="video-card">
                    <p><?php echo $video2->details(); ?></p>
                </div>
            </div>
        </section>

        <section class="macro-block-inscritos">
            <h2>👤 Atualizações Inscritos</h2>
            <div class="videos-container">
                <div class="inscrito-card">
                    <p><?php echo $p1->apresentar(); ?></p>
                </div>
                <div class="inscrito-card">
                    <p><?php echo $p2->apresentar(); ?></p>
                </div>
                <div class="inscrito-card">
                    <p><?php echo $p3->apresentar(); ?></p>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
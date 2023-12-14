<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Letra da musica</title>
    <link rel="stylesheet" href="../style/letraMusica.css">
</head>
<body>
    <main>
        <section>
            <article>
                <p>
                <?php
                include '../database/tituloMusicas.php';

                $id = $_GET['id'];

                foreach ($musicas as $musica) {
                    if ($musica['id'] == $id) {
                        echo $musica['letra'];
                        break;
                    }
                }
                ?>
                </p>
            </article>
        </section>
    </main>
    
</body>
</html>
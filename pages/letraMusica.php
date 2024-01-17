<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Letra da musica</title>
    <link rel="stylesheet" href="../style/letra.css">
    <?php include '../database/tituloMusicas.php'; ?>
</head>
<body>

    <header>
        <div id="cabecalho">
            <div id="logo">
                <a href="index.html"><img src="../img/logoJE.png"></a>
            </div>
            <div id="menu">
                <a href="../../img/facebook.png">Inicial</a>
                <a href="../img/facebook.png">Musicas</a>
                <a href="../img/facebook.png">Sobre</a>
            </div>
            <div id="redesSociais">
                <img src="../img/whatsapp.png">
                <img src="../img/facebook.png">
                <img src="../img/instagram.png">
                <img src="../img/youtube.png">
            </div>
        </div>
    </header>

    <main>
        <section>
            <article>
                <h1 id="titulo">
                    <?php
                    $id = $_GET['id'];

                    foreach ($musicas as $musica) {
                        if ($musica['id'] == $id) {
                            echo $musica['titulo'];
                            break;
                        }
                    }
                    ?>
                </h1>
                <h1 id="artista">
                    <?php
                    $id = $_GET['id'];

                    foreach ($musicas as $musica) {
                        if ($musica['id'] == $id) {
                            echo $musica['artista'];
                            break;
                        }
                    }
                    ?>
                </h1>
                <p id="letra">
                    <?php
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
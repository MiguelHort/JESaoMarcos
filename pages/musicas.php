<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musicas</title>
    <link rel="stylesheet" href="../style/musicas.css">
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
        <section id="pesquisa">
            <input type="text">
        </section>

        <section id="todasMusicas">
            <article id="nomeMusicas">
                <?php
                include '../database/tituloMusicas.php';

                // Loop através dos títulos e crie a div
                foreach ($musicas as $musica) {
                    echo "<a href='../pages/letraMusica.php?id={$musica['id']}'>
                            <div id='conteiner'>
                              <img src='../img/capas/{$musica['capa']}' alt='' width='150px'>
                              <p id='pbrabo'>{$musica['titulo']}</p>
                            </div>
                          </a>";
                }
                ?>
            </article>
        </section>

    </main>

</body>

</html>
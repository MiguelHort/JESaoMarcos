<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albuns de fotos</title>
    <link rel="stylesheet" href="../style/albuns.css">
</head>

<body>

    <header>
        <div id="cabecalho">
            <div id="logo">
                <a href="index.html"><img src="../img/logoJE1.png"></a>
            </div>
            <button id="iconeMenu" onclick="menu()">
                <hr>
                <hr>
                <hr>
            </button>
            <nav id="menuCelular">
                <img src="../img/x.png" alt="" onclick="fecharMenu()">
                <a href="../index.html">Inicial</a>
                <a href="musicas.php">Músicas</a>
                <a href="/img/facebook.png">Sobre</a>
                <a href="albuns.php">Albuns</a>
                <a href="/img/facebook.png">Calendário</a>
                <div id="redesSociaisCelular">
                    <a href="" target="_blank"><img src="../img/whatsapp.png"></a>
                    <a href="https://www.facebook.com/ParoquiaSaoMarcosIECLBJoinville" target="_blank"><img src="../img/facebook.png"></a>
                    <a href="https://www.instagram.com/jesaomarcos/?hl=pt-br" target="_blank"><img src="../img/instagram.png"></a>
                    <a href="https://www.youtube.com/@jesaomarcos800" target="_blank"><img src="../img/youtube.png"></a>
                </div>
            </nav>
            <nav id="menu">
                <a href="../index.html">Inicial</a>
                <a href="musicas.php">Músicas</a>
                <a href="/img/facebook.png">Sobre</a>
                <a href="albuns.php">Albuns</a>
                <a href="/img/facebook.png">Calendário</a>
            </nav>
            <div id="redesSociais">
                <a href="" target="_blank"><img src="../img/whatsapp.png"></a>
                <a href="https://www.facebook.com/ParoquiaSaoMarcosIECLBJoinville" target="_blank"><img src="../img/facebook.png"></a>
                <a href="https://www.instagram.com/jesaomarcos/?hl=pt-br" target="_blank"><img src="../img/instagram.png"></a>
                <a href="https://www.youtube.com/@jesaomarcos800" target="_blank"><img src="../img/youtube.png"></a>
            </div>
        </div>
    </header>

    <main>
        <section id="pesquisa">
            <form method="post" action="">
                <input id="procurar" type="text" name="pesquisa" placeholder="Qual o louvor de hoje?">
                <input id="lupa" type="submit" value="Procurar">
            </form>
        </section>

        <section id="todasMusicas">
            <article id="nomeMusicas">
                <?php
                include '../database/tituloAlbuns.php';

                $pesquisa = isset($_POST['pesquisa']) ? $_POST['pesquisa'] : '';
                $query = "SELECT * FROM albuns";
                if (!empty($pesquisa)) {
                    $pesquisa = mysqli_real_escape_string($conexao, $pesquisa);
                    $query .= " WHERE titulo LIKE '%$pesquisa%'";
                }
                $result = mysqli_query($conexao, $query);

                while ($row = mysqli_fetch_array($result)) {
                    echo "<a href='../pages/fotos.php?id={$row['id']}'>
            <div id='conteiner'>
              <img src='{$row['capa']}' alt='' width='150px'>
              <p id='pbrabo'>{$row['titulo']}</p>
            </div>
          </a>";
                }


                ?>
            </article>
        </section>

    </main>

    <script>
        function menu() {
            document.getElementById("menuCelular").style.display = "flex";
        };

        function fecharMenu() {
            document.getElementById("menuCelular").style.display = "";
        };
    </script>

</body>

</html>
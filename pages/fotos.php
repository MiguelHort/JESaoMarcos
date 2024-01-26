<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albuns de fotos</title>
    <link rel="stylesheet" href="../style/fotos.css">
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
        <section id="fotos">
            <?php
            include '../database/caminhoFotos.php';

            $id = $_GET['id'];


            foreach ($fotos as $foto) {
                if ($foto['album'] == $id)
                    echo "<a href='{$foto['caminho']}' target='_blank'><img id='foto' src='{$foto['caminho']}' alt=''></a>";
            }
            ?>
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
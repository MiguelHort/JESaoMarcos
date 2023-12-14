<?php
include("conexao.php");

// Consulta para obter os 10 primeiros títulos e capas
$resultado = mysqli_query($conexao, "SELECT id, titulo, artista, letra, capa FROM musicas");

// Fetch all of the remaining rows in the result set
$musicas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);



?>
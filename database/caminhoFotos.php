<?php
include("conexao.php");

// Consulta para obter os 10 primeiros títulos e capas
$resultado = mysqli_query($conexao, "SELECT id, album, caminho FROM fotos");

// Fetch all of the remaining rows in the result set
$fotos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);



?>
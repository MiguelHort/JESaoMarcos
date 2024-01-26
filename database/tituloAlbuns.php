<?php
include("conexao.php");

// Consulta para obter os 10 primeiros títulos e capas
$resultado = mysqli_query($conexao, "SELECT id, titulo, capa FROM albuns");

// Fetch all of the remaining rows in the result set
$albuns = mysqli_fetch_all($resultado, MYSQLI_ASSOC);



?>
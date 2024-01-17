<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'jesaomarcos');
 
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

if (!mysqli_set_charset($conexao, 'utf8')) {
    printf('Erro ao usar utf8: %s', mysqli_error($conexao));
    exit;
}
?>

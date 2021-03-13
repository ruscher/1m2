<?php
$conexao = mysql_connect('localhost', 'root', 'acesso302010');
if (!$conexao) {
    die('Não foi possível conectar => ' . mysql_error());
}
echo 'Conexão bem sucedida';
// mysql_close($link);
$db = mysql_select_db("intranet");

?>
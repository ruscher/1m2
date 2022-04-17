<?php

$conexao = mysqli_connect('localhost', 'root', '!!qweasd', 'intranet');

if (!$conexao) {

    die('Não foi possível conectar => ' . mysql_error());

}

//echo 'Conexão bem sucedida';
// mysql_close($link);
//$db = mysql_select_db("intranet");

?>

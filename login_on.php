<?php
session_start(); 

//INICIALIZA A SESSÃO
$banir = $_SESSION['banir'];
$confirma = $_SESSION['confirma'];

//SE NÃO TIVER VARIÁVEIS REGISTRADAS
//RETORNA PARA A TELA DE LOGIN
if((!isset($_SESSION['id_corretor']))AND(!isset($_SESSION['nome']))){
	echo 	$_SESSION['confirma'];
	// header("Location: default.php");
} else if($banir=="s"){
	echo "<br><br>Você foi <strong>banido</strong> do sistema por isso não pode acessar a area restrita. Procure seu lider ou entre com contato com o Departamento de TI.<br><br>";	
	exit;
} elseif($confirma=="sim"){ 
	
}else{
	echo "<br><br>Você não confirmou seu cadastro no site, por isso não pode acessar a area restrita<br><br>".$administrador;	
	exit;
}
?>
<?php
session_start(); ob_start();
// Conexão com o banco de dados
require "connect.php";

$sgr = 			$_POST['sgr']; 
$login = 		$_POST['login']; 
$senha = 		$_POST['senha'];
$senha2 = 		md5($senha);

$arquivo = 		'logacess.txt'; 
$data = 		date( "d/m/Y H:i:s"); 
$ip = 			$_SERVER["REMOTE_ADDR"]; 
$host = 		getHostByAddr($_SERVER["REMOTE_ADDR"]); 
$pagina = 		$_SERVER["PHP_SELF"]; 
$browser = 		$_SERVER["HTTP_USER_AGENT"];

$fp = fopen("$arquivo", "a"); 
fwrite($fp,"Data: $data | login: $login |  IP: $ip | host: $host | Pagina Acessada: $pagina | Navegador: $browser \r\n"); 
fwrite($fp,""); 
fclose($fp); 

$SQL = "SELECT * FROM corretor WHERE usuario='$login' AND senha='$senha2'";

$result_id = @mysql_query($SQL) or die("Erro no SQL!");
$total = @mysql_num_rows($result_id);

// Usuário não forneceu a senha ou o login 
if(!$login || !$senha || !$sgr) { 

	$mensagem_erro = "<table border='0' cellpadding='0' cellspacing='0'><tr><td valign='top'><img src='img/icon_alert.gif'></td><td><font size='1'>Você deve digitar seu usúario e senha.</font></td></tr></table>";
	session_start();
	$_SESSION['mensagem_erro'] = $mensagem_erro;
	header("Location: index.php");

} elseif($total==0) { // Caso o usuário tenha digitado um login válido o número de linhas será 1..

  $sqlnum = "SELECT usuario,tentativa FROM corretor WHERE usuario='$login'";
  $result_num = @mysql_query($sqlnum) or die("Erro no SQL!");
  $dados_num = mysql_fetch_array($result_num);

  $tentativa=$dados_num['tentativa']+1;
  
	if($tentativa>'3' or $tentativa==""){
		
		$sql_bloqueia = "update corretor set banir = 's' WHERE usuario='$login'";
		mysql_query($sql_bloqueia);
		
		$mensagem_erro = "<table border='0' cellpadding='0' cellspacing='0'><tr><td valign='top'><img src='img/icon_out.gif'> </td><td><font size='1'> Usuário bloqueado.</font></td></tr></table>";
		session_start();
		$_SESSION['mensagem_erro'] = $mensagem_erro;
		
		header("Location: index.php");
	
	} else {
	
		$sql_altera = "update corretor set tentativa = '".$tentativa."' where usuario='$login'";
		
		mysql_query($sql_altera);
		
		$mensagem_erro = "<table border='0' cellpadding='0' cellspacing='0'><tr><td valign='top'><img src='img/icon_alert.gif'></td><td><font size='1'>Usuário ou senha estão errados.</font></td></tr></table>";
		session_start();
		$_SESSION['mensagem_erro'] = $mensagem_erro;
		
		header("Location: index.php");
		
	}

}else{

  //ARMAZENAR AS SESSOES
  $dados 	= mysql_fetch_array($result_id);
  $id 		= $dados[0];
  $nome		= $dados[1];
  $email	= $dados[2];
  $usuario	= $dados[3];
  $confirma = $dados[5];
  $tipo		= $dados[6];
  $banir	= $dados[7];
  $cargo	= $dados[28];
  
	if($dados[7]=="n") {
	
		$sql_tentativa = "update corretor set tentativa='0', lastlogon='".date( "Y-m-d H:i:s")."' where id_corretor='$id'";
		//echo($sql_tentativa);
		mysql_query($sql_tentativa);
		
		session_start();
		
		$_SESSION['id_corretor']	= $id;
		$_SESSION['nome']			= $nome;
		$_SESSION['email']			= $email;
		$_SESSION['usuario']		= $usuario;
		$_SESSION['confirma']		= $confirma;
		$_SESSION['tipousuario']	= $tipo;
		$_SESSION['banir']			= $banir;
		$_SESSION['cargo']			= $cargo;
	
		header("Location: main.php");
		
	} else {
		
		echo "<br><br>Você foi <strong>banido</strong> do sistema por isso não pode acessar a area restrita. Procure seu lider ou entre com contato com o Departamento de TI.<br><br>";			
		exit;  
		
	}
}
?>

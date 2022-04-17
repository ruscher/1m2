<?php
session_start(); 

require_once('login_on.php');
$id_corretor = $_SESSION['id_corretor'];
$usuario = $_SESSION['nome'];
$tipousuario = $_SESSION['tipousuario'];
$cargo = $_SESSION['cargo'];

?>


<!DOCTYPE html>
<html lang="en">
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta name="author" content="Rafael Augusto Ruscher"> 
	<meta http-equiv="Reply-to" content="rafael@ruscher.com.br">
	<meta name="generator" content=""> 
	<meta name="description" content="Versão 1.0">
	<meta name="keywords" content=""> 
               
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <title>1m² |  Plataforma Imobili&aacute;ria</title>

        <link href="css/font-awesome.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/simple-line-icons.css" rel="stylesheet">
        <link href="css/fullscreen-slider.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="notransition black">
        <div id="page-container">
            <ul class="cb-slideshow">
                <li><span></span></li>
                <li><span></span></li>
                <li><span></span></li>
                <li><span></span></li>
                <li><span></span></li>
                <li><span></span></li>
            </ul>
        </div>
		<form name="frmAutentica" method="post" action="login_db.php">
			<div class="modal fade" id="signin" role="dialog" aria-labelledby="signinLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm">
					<div class="signLogo osLight"><img  src="images/logo_master.png" alt="1m²"></div>

					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="signinLabel">Connectar</h4>
							<?php
								$mensagem_erro = $_SESSION['mensagem_erro'];
								print $mensagem_erro;
							?>
						</div>
						<div class="modal-body">
							<form role="form">
								<div class="form-group">
									<div class="btn-group-justified">
										<a href="main.php" class="btn btn-lg btn-facebook"><span class="fa fa-facebook pull-left"></span>Entrar com Facebook</a>
									</div>
								</div>
								<div class="form-group">
									<div class="btn-group-justified">
										<a href="main.php" class="btn btn-lg btn-google"><span class="fa fa-google-plus pull-left"></span>Entrar com Google+</a>
									</div>
								</div>
								<div class="signOr">OU</div>
								<div class="form-group">
									<input name="login" type="text" placeholder="E-mail" class="form-control">
								</div>
								<div class="form-group">
									<input name="senha" type="password" placeholder="Senha" class="form-control">
								</div>
								<input type="hidden" name="sgr" value="1">
								
							
								
								<div class="form-group">
									<div class="row">
										<div class="col-xs-6">
											<div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Lembrar</label></div>
										</div>
										<div class="col-xs-6 align-right">
											<p class="help-block"><a href="#" class="text-green">Esqueceu sua senha?</a></p>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="btn-group-justified">
										<a href="main.php" class="btn btn-lg btn-green">Entrar</a>
									</div>
									<input name="btnLogar" type="submit" class="botao" value="ok"  class="btn btn-lg btn-green">
									
								</div>
								<p class="help-block">N&atilde;o tenho uma conta? <a href="signup.html" class="text-green">Assinar</a></p>
							</form>
						</div>
					</div>
					<div class="signFooter">1m² |  Plataforma Imobili&aacute;ria<br>&copy; 2018</div>
				</div>
			</div>
		</form>

        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery-ui-touch-punch.js"></script>
        <script src="js/jquery.placeholder.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery.touchSwipe.min.js"></script>
        <script src="js/jquery.visible.js"></script>
        <script src="js/signin.js" type="text/javascript"></script>
    </body>
</html>

<?php
$arquivo = 'logtmp.txt'; 
$data = date( "d/m/Y H:i:s"); 
$ip = $_SERVER["REMOTE_ADDR"]; 
$host = getHostByAddr($_SERVER["REMOTE_ADDR"]); 
$pagina = $_SERVER["PHP_SELF"]; 
$browser = $_SERVER["HTTP_USER_AGENT"];

$fp = fopen("$arquivo", "a"); 
fwrite($fp,"Data: $data | IP: $ip | host: $host | Pagina Acessada: $pagina | Navegador: $browser \r\n"); 
fwrite($fp,""); 
fclose($fp); 
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="iso-8859-1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <title>1m² |  Plataforma Imobiliária</title>

        <link href="css/font-awesome.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/simple-line-icons.css" rel="stylesheet">
        <link href="css/jquery-ui.css" rel="stylesheet">
        <link href="css/datepicker.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">
        
    	<link rel="stylesheet" href="css/jquery.gritter.css" />
        
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body class="notransition">
    
		<?php include 'inc_page_top.php'; ?>
        <?php include 'inc_menu_lateral.php'; ?>
        <?php //include 'inc_main.php'; ?>
        <!-- INICIO DIV WRAPPER -->
         <div id="wrapper">
            <div id="mapView" class="mob-min"><div class="mapPlaceholder"><span class="fa fa-spin fa-spinner"></span> Carregando mapa...</div></div>
            <div id="content" class="mob-max">
                <div class="rightContainer">
                    <ol class="breadcrumb">
                        <li><a href="#"><span class="icon-home"></span> Início</a></li>
                        <li><a href="#"><span class="icon-plus"></span> Novo</a></li>
                        <li><a href="#"><span class="icon-home"></span> Imóvel</a></li>
                    </ol>                
                    <h1>Formulário de Imóvel</h1>
                    <form role="form">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                <div class="form-group">
                                    <label>Título</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>Preço</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">$</div>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Descrição</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Endereço <span id="latitude" class="label label-default"></span> <span id="longitude" class="label label-default"></span></label>
                            <input class="form-control" type="text" id="address" placeholder="Informe um Local" autocomplete="off">
                            <p class="help-block">Você pode arrastar o marcador para a posição propriedade</p>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="form-group">
                                    <label>Quartos</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="form-group">
                                    <label>Suítes</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="form-group">
                                    <label>Area</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text">
                                        <div class="input-group-addon">m²</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="btn-group">
                                    <label>Tipo</label>
                                    <div class="clearfix"></div>
                                    <a href="#" data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                                        <span class="dropdown-label">Venda</span>&nbsp;&nbsp;&nbsp;<span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-select">
                                        <li class="active"><input type="radio" name="ptype" checked="checked"><a href="#">Venda</a></li>
                                        <li><input type="radio" name="ptype"><a href="#">Aluguel</a></li>
                                        <li><input type="radio" name="ptype"><a href="#">Lançamento</a></li>
                                        <li><input type="radio" name="ptype"><a href="#">Temporada</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label>Fotos</label>
                                    <input type="file" class="file" multiple data-show-upload="false" data-show-caption="false" data-show-remove="false" accept="image/jpeg,image/png" data-browse-class="btn btn-o btn-default" data-browse-label="Browse Images">
                                    <p class="help-block">Você pode selecionar várias imagens de uma vez</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>Características adicionais</label>
                                    <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Garagem</label></div>
                                    <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Sistema de segurança</label></div>
                                    <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Ar condicionado</label></div>
                                    <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Varanda</label></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Piscina exterior</label></div>
                                    <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Internet</label></div>
                                    <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Aquecimento</label></div>
                                    <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> TV por assinatura</label></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Jardim</label></div>
                                    <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Telefone</label></div>
                                    <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Lareira</label></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <a href="#" class="btn btn-green btn-lg">Adicionar Imóvel</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- FIM DIV WRAPPER -->
        
    
		<script src="js/json2.js"></script>
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="js/underscore.js"></script>
        <script src="js/moment-2.5.1.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery-ui-touch-punch.js"></script>
        <script src="js/jquery.placeholder.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery.touchSwipe.min.js"></script>
        <script src="js/jquery.slimscroll.min.js"></script>
        <script src="js/jquery.visible.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=true&amp;libraries=geometry&amp;libraries=places" type="text/javascript"></script>
        <script src="js/infobox.js"></script>
        <script src="js/clndr.js"></script>
        <script src="js/jquery.tagsinput.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/app.js"></script>
        <script src="js/calendar.js"></script>  
        <?php include 'inc_busca_autocomptext.php'; ?>  
		<script src="js/jquery.gritter.min.js"></script>
        <?php include 'inc_notificacao_gritter.php'; ?>
        
    </body>
</html>
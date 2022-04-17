<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="iso-8859-1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <title>1m� |  Plataforma imobili�ria</title>

        <link href="css/font-awesome.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/simple-line-icons.css" rel="stylesheet">
        <link href="css/jquery-ui.css" rel="stylesheet">
        <link href="css/datepicker.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">
        
    	<link rel="stylesheet" href="css/jquery.gritter.css" />
    	<style type="text/css">
    	body,td,th {
	font-family: "open_sansregular", sans-serif, Arial;
}
        </style>
        
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
        <div id="wrapper" class="full">
            <div id="mapView" class="min"><div class="mapPlaceholder"><span class="fa fa-spin fa-spinner"></span> Carregando mapa...</div></div>
            <!-- INICIO DIV CONTENT -->
			<div id="content" class="max">
            	<!-- INICIO DIV WIDGETS -->
				<div class="widgets">
					<!-- INICIO  -->
                    <ol class="breadcrumb">
                        <li><a href="#"><span class="icon-home"></span> Início</a></li>
                        <li><a href="#"><span class="fa fa-money"></span> Financeiro</a></li>
                    </ol>
                    <h4>Financeiro</h4>
                        
                    <div class="row">       
                    
                        <div class="panel panel-default">
                            <div class="panel-heading">Filtro</div>
                            <div class="panel-body">
                                <form class="form-inline" role="form">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label round">De:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control round" id="datepicker" size="10">
                                            <div class="input-group-addon round"><span class="icon-calendar"></span></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Até:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control round" id="datepicker1" size="10">
                                            <div class="input-group-addon round"><span class="icon-calendar"></span></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Min:</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <input class="form-control round" type="text" size="10">
                                                <div class="input-group-addon round">.00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Max:</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <input class="form-control round" type="text" size="10">
                                                <div class="input-group-addon round">.00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-round btn-green">Enviar</a>
                                    <!--
                                    <div class="btn-group open">
                                        <button data-toggle="dropdown" class="btn btn-o btn-gray dropdown-toggle">
                                            <span class="dropdown-label">Option 1</span> <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-select">
                                            <li class="active"><input type="radio" name="ds1" checked="checked"><a href="#">Option 1</a></li>
                                            <li><input type="radio" name="ds1"><a href="#">Option 2</a></li>
                                            <li><input type="radio" name="ds1"><a href="#">Option 3</a></li>
                                            <li class="disabled"><input type="radio" name="ds1" disabled=""><a href="#">Option disabled</a></li>
                                        </ul>
                                    </div>
                                    -->
                                </form>
                            </div>
                        </div>           
 
                        <div class="panel panel-default">
                            <div class="panel-heading">Transações Financeiras</div>
                            <div class="row tableContainer">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <a href="#" class="btn btn-sm btn-blue mb5"><span class="icon-drawer"></span> Arquivo</a>
                                    <a href="#" class="btn btn-sm btn-yellow mb5"><span class="icon-ban"></span> Reportar Spam</a>
                                    <a href="#" class="btn btn-sm btn-red mb5"><span class="icon-trash"></span> Deletar</a>
                                    <div class="btn-group mb5">
                                        <a data-toggle="dropdown" class="btn btn-sm btn-gray dropdown-toggle">
                                            <span class="dropdown-label">Ações</span> <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Marcar como lida</a></li>
                                            <li><a href="#">Marcar como não lido</a></li>
                                            <li><a href="#">Marcar como importante</a></li>
                                            <li><a href="#">Marcar como não importante</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                    <div class="input-group input-group-sm mb5">
                                        <input type="text" class="form-control" placeholder="Procurar...">
                                        <span class="input-group-btn"><a class="btn btn-sm btn-green"><span class="icon-magnifier"></span></a></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                    <div class="btn-group pull-right mb5">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-o btn-gray dropdown-toggle" data-toggle="dropdown">
                                            1-50 of 121
                                            <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="disabled"><a href="#">Newest</a></li>
                                                <li><a href="#">Oldest</a></li>
                                            </ul>
                                        </div>
                                        <button type="button" class="btn btn-sm btn-gray"><span class="fa fa-angle-left"></span></button>
                                        <button type="button" class="btn btn-sm btn-gray"><span class="fa fa-angle-right"></span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="table-overflow">
                                <table class="table" id="inboxTable">
                                    <thead>
                                        <tr>
                                            <th style="width:10px;"><input type="checkbox"></th>
                                            <th style="width:10px;"><span class="fa icon-flag"></span></th>
                                            <th><span class="fa fa-sort sortIcon"></span><span class="fa fa-caret-up sortIconAsc"></span><span class="fa fa-caret-down sortIconDesc"></span> Transação</th>
                                            <th><span class="fa fa-sort sortIcon"></span><span class="fa fa-caret-up sortIconAsc"></span><span class="fa fa-caret-down sortIconDesc"></span> Valor</th>
                                            <th style="width:100px;">Data</th>
                                            <th style="width:115px;">Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table">
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td><span class="fa fa-arrow-up text-red"></span></td>
                                            <td>CEB Lago Norte</td>
                                            <td>R$ 860,40</td>
                                            <td>August 24, 2013</td>
                                            <td>
                                                <nobr><div class="btn-group">
                                                    <button type="button" class="btn btn-xs btn-round btn-o btn-round btn-gray"><span class="fa fa-eye"></span></button>
                                                    <button type="button" class="btn btn-xs btn-round btn-o btn-round btn-green"><span class="fa fa-pencil"></span></button>
                                                    <button type="button" class="btn btn-xs btn-round btn-o btn-round btn-red"><span class="fa fa-trash-o"></span></button>
                                                </div></nobr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td><span class="fa fa-arrow-down text-green"></span></td>
                                            <td>Comissão</td>
                                            <td>R$ 10.000,00</td>
                                            <td>September 13, 2013</td>
                                            <td>
                                                <nobr><div class="btn-group">
                                                    <button type="button" class="btn btn-xs btn-round btn-o btn-round btn-gray"><span class="fa fa-eye"></span></button>
                                                    <button type="button" class="btn btn-xs btn-round btn-o btn-round btn-green"><span class="fa fa-pencil"></span></button>
                                                    <button type="button" class="btn btn-xs btn-round btn-o btn-round btn-red"><span class="fa fa-trash-o"></span></button>
                                                </div></nobr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td><span class="fa fa-arrow-up text-red"></span></td>
                                            <td>CEB Lago Norte</td>
                                            <td>R$ 860,40</td>
                                            <td>July 8, 2014</td>
                                            <td>
                                                <nobr><div class="btn-group">
                                                    <button type="button" class="btn btn-xs btn-round btn-o btn-round btn-gray"><span class="fa fa-eye"></span></button>
                                                    <button type="button" class="btn btn-xs btn-round btn-o btn-round btn-green"><span class="fa fa-pencil"></span></button>
                                                    <button type="button" class="btn btn-xs btn-round btn-o btn-round btn-red"><span class="fa fa-trash-o"></span></button>
                                                </div></nobr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td><span class="fa fa-arrow-down text-green"></span></td>
                                            <td>Comissão</td>
                                            <td>R$ 10.000,00</td>
                                            <td>September 10, 2014</td>
                                            <td>
                                                <nobr><div class="btn-group">
                                                    <button type="button" class="btn btn-xs btn-round btn-o btn-round btn-gray"><span class="fa fa-eye"></span></button>
                                                    <button type="button" class="btn btn-xs btn-round btn-o btn-round btn-green"><span class="fa fa-pencil"></span></button>
                                                    <button type="button" class="btn btn-xs btn-round btn-o btn-round btn-red"><span class="fa fa-trash-o"></span></button>
                                                </div></nobr>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>    
                        
                        <div class="row gridSystem">
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">MONTANTE TOTAL</div>
                                <div class="panel-body">     
                                	<div class="panel-body"><h4>R$ 50.000,00</h4></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">TOTAL Á RECEBER</div>
                                <div class="panel-body">     
                                	<div class="panel-body"><h4>R$ 60.000,00</h4></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">TOTAL Á PAGAR</div>
                                <div class="panel-body">     
                                	<div class="panel-body"><h4>R$ 2.000,00</h4></div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                        
                           
                        <div class="form-group">
                            <a href="#" class="btn btn-green btn-lg">Adicionar</a>
                        </div>                           

           
                    </div>
                    <!-- FIM  -->
                    
                </div>
        		<?php include 'inc_page_down.php'; ?>
            	<!-- FIM DIV WIDGETS -->
            </div>
            <!-- FIM DIV CONTENT -->
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
        <script src="js/tablesorter.js"></script>
        <script src="js/table.js"></script>  
        
        <script>
		$(document).ready(function(){
			$('#datepicker').datepicker();
			$('#datepicker1').datepicker();
		});  
		</script>      
        
    </body>
</html>
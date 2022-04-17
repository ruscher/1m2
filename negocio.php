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
        <div id="wrapper" class="full">
            <div id="mapView" class="min"><div class="mapPlaceholder"><span class="fa fa-spin fa-spinner"></span> Carregando mapa...</div></div>
            <!-- INICIO DIV CONTENT -->
			<div id="content" class="max">
            	<!-- INICIO DIV WIDGETS -->
				<div class="widgets">
					<!-- INICIO  -->
                    <ol class="breadcrumb">
                        <li><a href="#"><span class="icon-home"></span> Início</a></li>
                        <li><a href="#"><span class="icon-hourglass"></span> Negócios</a></li>
                    </ol>
                    <h4>Negócios</h4>
                    <div class="row">
						<ol class="breadcrumb">
							<li class="active"><a href="#"><span class="badge">1</span> Pré-atendimento</a></li>
							<li><a href="#"><span class="badge">2</span> Seleção de Perfil</a></li>
							<li><a href="#"><span class="badge">3</span> Seleção de Imóveis</a></li>
							<li><a href="#"><span class="badge">4</span> Visita</a></li>
							<li><a href="#"><span class="badge">5</span> Proposta</a></li>
							<li><a href="#"><span class="badge">6</span> Negociação</a></li>
							<li><a href="#"><span class="badge">7</span> Negócio Realizado</a></li>
						</ol>


						<div class="panel panel-default">
							<div class="row tableContainer">
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<a href="#" class="btn btn-sm btn-blue mb5"><span class="icon-drawer"></span> Arquivar</a>
									<a href="#" class="btn btn-sm btn-yellow mb5"><span class="icon-ban"></span> Bloquear</a>
									<a href="#" class="btn btn-sm btn-red mb5"><span class="icon-trash"></span> Delete</a>
									<div class="btn-group mb5">
										<a data-toggle="dropdown" class="btn btn-sm btn-gray dropdown-toggle">
											<span class="dropdown-label">Ações</span> <span class="caret"></span>
										</a>
										<ul class="dropdown-menu pull-right" role="menu">
											<li><a href="#">Marcar como lido</a></li>
											<li><a href="#">Marcar como não lido</a></li>
											<li><a href="#">Marcar como Importante</a></li>
											<li><a href="#">Marcar como não importante</a></li>
										</ul>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
									<div class="input-group input-group-sm mb5">
										<input type="text" class="form-control" placeholder="Buscar">
										<span class="input-group-btn"><a class="btn btn-sm btn-green"><span class="icon-magnifier"></span></a></span>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
									<div class="btn-group pull-right mb5">
										<div class="btn-group">
											<button type="button" class="btn btn-sm btn-o btn-gray dropdown-toggle" data-toggle="dropdown">
											1-50 de 121
											<span class="caret"></span>
											</button>
											<ul class="dropdown-menu" role="menu">
												<li class="disabled"><a href="#">Mais recente</a></li>
												<li><a href="#">Mais antigo</a></li>
											</ul>
										</div>
										<button type="button" class="btn btn-sm btn-gray"><span class="fa fa-angle-left"></span></button>
										<button type="button" class="btn btn-sm btn-gray"><span class="fa fa-angle-right"></span></button>
									</div>
								</div>
							</div>
							<div class="table-overflow">
								<table class="table tablesorter tablesorter-default" id="inboxTable" role="grid">
									<thead>
										<tr role="row" class="tablesorter-headerRow">
											<th style="width: 10px; user-select: none;" data-column="0" class="tablesorter-header sorter-false tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="true" unselectable="on" aria-sort="none">
												<div class="tablesorter-header-inner"><input type="checkbox"></div>
											</th>
											<th style="width: 10px; user-select: none;" data-column="1" class="tablesorter-header sorter-false tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="true" unselectable="on" aria-sort="none">
												<div class="tablesorter-header-inner"><span class="fa fa-star-o"></span></div>
											</th>
											<th data-column="2" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="inboxTable" unselectable="on" aria-sort="none" aria-label=" FROM: No sort applied, activate to apply an ascending sort" style="user-select: none;">
												<div class="tablesorter-header-inner"><span class="fa fa-sort sortIcon"></span><span class="fa fa-caret-up sortIconAsc"></span><span class="fa fa-caret-down sortIconDesc"></span> CLIENTE</div>
											</th>
											<th data-column="3" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="inboxTable" unselectable="on" aria-sort="none" aria-label=" SUBJECT: No sort applied, activate to apply an ascending sort" style="user-select: none;">
												<div class="tablesorter-header-inner"><span class="fa fa-sort sortIcon"></span><span class="fa fa-caret-up sortIconAsc"></span><span class="fa fa-caret-down sortIconDesc"></span> ASSUNTO</div>
											</th>
											<th style="width: 100px; user-select: none;" data-column="4" class="tablesorter-header sorter-false tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="true" unselectable="on" aria-sort="none">
												<div class="tablesorter-header-inner">DATA</div>
											</th>
										</tr>
									</thead>
									<tbody class="table" aria-live="polite" aria-relevant="all">
										<tr role="row">
											<td><input type="checkbox"></td>
											<td><span class="fa fa-star-o text-yellow"></span></td>
											<td>Rafael Augusto</td>
											<td>Residência moderna em Brasília</td>
											<td>6:07 pm</td>
										</tr>
										<tr role="row">
											<td><input type="checkbox"></td>
											<td><span class="fa fa-star-o text-yellow"></span></td>
											<td>Patricia Dourado</td>
											<td>Bela propriedade</td>
											<td>Sep 27</td>
										</tr>
										<tr role="row">
											<td><input type="checkbox"></td>
											<td><span class="fa fa-star-o text-yellow"></span></td>
											<td>Matheus Ruscher</td>
											<td>Residência sofisticada</td>
											<td>Sep 25</td>
										</tr>
										<tr role="row">
											<td><input type="checkbox"></td>
											<td><span class="fa fa-star-o text-yellow"></span></td>
											<td>Muryel Moss</td>
											<td>Casa com um lindo telhado de vidro</td>
											<td>Sep 23</td>
										</tr>
										<tr role="row">
											<td><input type="checkbox"></td>
											<td><span class="fa fa-star-o text-yellow"></span></td>
											<td>Nelson Ruscher</td>
											<td>Residência moderna em São Paulo</td>
											<td>Sep 21</td>
										</tr>
									</tbody>
								</table>
							</div>
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
        
    
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery-ui-touch-punch.js"></script>
        <script src="js/jquery.placeholder.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery.touchSwipe.min.js"></script>
        <script src="js/jquery.slimscroll.min.js"></script>
        <script src="js/jquery.visible.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=true&amp;libraries=geometry&amp;libraries=places" type="text/javascript"></script>
        <script src="js/infobox.js"></script>
        <script src="js/tablesorter.js"></script>
        <script src="js/jquery.tagsinput.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/app.js" type="text/javascript"></script>
        <script src="js/table.js"></script>
<!--        <script src="js/jquery.mjs.nestedSortable.js"></script>
        <script src="js/sortable.js"></script>-->        

        
        
    </body>
</html>
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
        <link href="css/jquery.tagsinput.css" rel="stylesheet">
        <link href="css/fileinput.min.css" rel="stylesheet">
        
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
                        <li><a href="#"><span class="icon-speedometer"></span> Paniel</a></li>
                    </ol>
                    <h4>Painel</h4>
                    <div class="row">
                    	<div class="col-sm-12">
							<div class="alert alert-success alert-dismissible fade in" role="alert">
								<div class="icon"><span class="fa fa-check-circle"></span></div>
								<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
								<strong>Well done!</strong> Bem feito! Você leu com êxito esta importante mensagem de alerta.
							</div>
						</div>

                   	
						<div class="col-xs-12">
							<div class="panel panel-default">
								<div class="panel-heading">Relatórios Gerenciais</div>
								<div class="panel-body">
									<form class="form-inline" role="form">
									
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">De</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="datepicker">
                                            </div>
                                        </div>
									
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Até</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="datepicker1">
                                            </div>
                                        </div>
                                        
                                        <a href="#" class="btn btn-round btn-green"><span class="fa fa-search"></span> Pesquisar</a>
									</form>
								</div>
							</div>
						</div>                   	
                   	
						<div class="clearfix"></div>
                   	
						<div class="col-md-6">
							<h5>Negócios <small>(Andamentos)</small></h5>
							<div class="list-group">
								<a class="list-group-item"><span class="fa fa-bell text-green"></span> Pré-atendimento <span class="fa fa-angle-right arrow"></span> <span class="badge badge-green">240</span></a>
								<a class="list-group-item"><span class="fa fa-filter text-green"></span> Seleção de perfil <span class="fa fa-angle-right arrow"></span> <span class="badge badge-green">13</span></a>
								<a class="list-group-item"><span class="fa fa-home text-green"></span> Seleção de Imóveis <span class="fa fa-angle-right arrow"></span> <span class="badge badge-green">36</span></a>
								<a class="list-group-item"><span class="fa fa-car text-green"></span> Visitas <span class="fa fa-angle-right arrow"></span> <span class="badge badge-green">156</span></a>
								<a class="list-group-item"><span class="fa fa-rocket text-green"></span> Prorpostas <span class="fa fa-angle-right arrow"></span> <span class="badge badge-green">28</span></a>
								<a class="list-group-item"><span class="fa fa-random text-green"></span> Negociação <span class="fa fa-angle-right arrow"></span> <span class="badge badge-green">28</span></a>
								<a class="list-group-item"><span class="fa fa-trophy text-green"></span> Fechamento <span class="fa fa-angle-right arrow"></span> <span class="badge badge-green">28</span></a>
							</div>
						</div>
                   	
                   	                   	
						<div class="col-md-6">
							<h5>Calendário <small>(Compromissos)</small></h5>
                            <div class="calendarWidget">
								<div class="cal">
									<div class="clndr">
										<div class="clndr-controls">
											<div class="clndr-control-button"><span class="clndr-previous-button"><span class="fa fa-angle-left"></span></span>
											</div>
											<div class="month">August 2017</div>
											<div class="clndr-control-button rightalign"><span class="clndr-next-button"><span class="fa fa-angle-right"></span></span>
											</div>
										</div>
										<table class="clndr-table" border="0" cellspacing="0" cellpadding="0">
											<thead>
												<tr class="header-days">
													<td class="header-day">MON</td>
													<td class="header-day">TUE</td>
													<td class="header-day">WED</td>
													<td class="header-day">THU</td>
													<td class="header-day">FRI</td>
													<td class="header-day">SAT</td>
													<td class="header-day">SUN</td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="day past adjacent-month last-month calendar-day-2017-07-31 calendar-dow-1">
														<div class="day-contents">31</div>
													</td>
													<td class="day past calendar-day-2017-08-01 calendar-dow-2">
														<div class="day-contents">1</div>
													</td>
													<td class="day past calendar-day-2017-08-02 calendar-dow-3">
														<div class="day-contents">2</div>
													</td>
													<td class="day past calendar-day-2017-08-03 calendar-dow-4">
														<div class="day-contents">3</div>
													</td>
													<td class="day past calendar-day-2017-08-04 calendar-dow-5">
														<div class="day-contents">4</div>
													</td>
													<td class="day past calendar-day-2017-08-05 calendar-dow-6">
														<div class="day-contents">5</div>
													</td>
													<td class="day past calendar-day-2017-08-06 calendar-dow-0">
														<div class="day-contents">6</div>
													</td>
												</tr>
												<tr>
													<td class="day past calendar-day-2017-08-07 calendar-dow-1">
														<div class="day-contents">7</div>
													</td>
													<td class="day past calendar-day-2017-08-08 calendar-dow-2">
														<div class="day-contents">8</div>
													</td>
													<td class="day past calendar-day-2017-08-09 calendar-dow-3">
														<div class="day-contents">9</div>
													</td>
													<td class="day past event calendar-day-2017-08-10 calendar-dow-4">
														<div class="day-contents">10<span class="fa fa-circle"></span>
														</div>
													</td>
													<td class="day past event calendar-day-2017-08-11 calendar-dow-5">
														<div class="day-contents">11<span class="fa fa-circle"></span>
														</div>
													</td>
													<td class="day past event calendar-day-2017-08-12 calendar-dow-6">
														<div class="day-contents">12<span class="fa fa-circle"></span>
														</div>
													</td>
													<td class="day past event calendar-day-2017-08-13 calendar-dow-0">
														<div class="day-contents">13<span class="fa fa-circle"></span>
														</div>
													</td>
												</tr>
												<tr>
													<td class="day past event calendar-day-2017-08-14 calendar-dow-1">
														<div class="day-contents">14<span class="fa fa-circle"></span>
														</div>
													</td>
													<td class="day past calendar-day-2017-08-15 calendar-dow-2">
														<div class="day-contents">15</div>
													</td>
													<td class="day past calendar-day-2017-08-16 calendar-dow-3">
														<div class="day-contents">16</div>
													</td>
													<td class="day past calendar-day-2017-08-17 calendar-dow-4">
														<div class="day-contents">17</div>
													</td>
													<td class="day past calendar-day-2017-08-18 calendar-dow-5">
														<div class="day-contents">18</div>
													</td>
													<td class="day past calendar-day-2017-08-19 calendar-dow-6">
														<div class="day-contents">19</div>
													</td>
													<td class="day past calendar-day-2017-08-20 calendar-dow-0">
														<div class="day-contents">20</div>
													</td>
												</tr>
												<tr>
													<td class="day past event calendar-day-2017-08-21 calendar-dow-1">
														<div class="day-contents">21<span class="fa fa-circle"></span>
														</div>
													</td>
													<td class="day past event calendar-day-2017-08-22 calendar-dow-2">
														<div class="day-contents">22<span class="fa fa-circle"></span>
														</div>
													</td>
													<td class="day past event calendar-day-2017-08-23 calendar-dow-3">
														<div class="day-contents">23<span class="fa fa-circle"></span>
														</div>
													</td>
													<td class="day past calendar-day-2017-08-24 calendar-dow-4">
														<div class="day-contents">24</div>
													</td>
													<td class="day past calendar-day-2017-08-25 calendar-dow-5">
														<div class="day-contents">25</div>
													</td>
													<td class="day past calendar-day-2017-08-26 calendar-dow-6">
														<div class="day-contents">26</div>
													</td>
													<td class="day past calendar-day-2017-08-27 calendar-dow-0">
														<div class="day-contents">27</div>
													</td>
												</tr>
												<tr>
													<td class="day past calendar-day-2017-08-28 calendar-dow-1">
														<div class="day-contents">28</div>
													</td>
													<td class="day today calendar-day-2017-08-29 calendar-dow-2">
														<div class="day-contents">29</div>
													</td>
													<td class="day calendar-day-2017-08-30 calendar-dow-3">
														<div class="day-contents">30</div>
													</td>
													<td class="day calendar-day-2017-08-31 calendar-dow-4">
														<div class="day-contents">31</div>
													</td>
													<td class="day adjacent-month next-month calendar-day-2017-09-01 calendar-dow-5">
														<div class="day-contents">1</div>
													</td>
													<td class="day adjacent-month next-month calendar-day-2017-09-02 calendar-dow-6">
														<div class="day-contents">2</div>
													</td>
													<td class="day adjacent-month next-month calendar-day-2017-09-03 calendar-dow-0">
														<div class="day-contents">3</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
                            </div>
                        </div>
                        
						<div class="clearfix"></div>
                        
                                           	                   	                   	                   	                   	                   	                   	                   	
                    	<!-- CORRETOR DA VEZ INICIO -->
						<div class="col-md-6">
							<h5>Lista de Atendimento <small>(Arraste itens para classificar)</small></h5>
							<ul class="list-group list-group-sortable sortable ui-sortable">

								<li class="list-group-item helper-green ui-sortable-handle" style="position: relative; left: 0px; top: 0px;">
									<span class="fa fa-unsorted icon-fade"></span> Stela
									<a href="#" class="pull-right text-magenta icon-action"><span class="icon-share"></span></a>
									<a href="#" class="pull-right text-yellow icon-action"><span class="icon-bubble"></span></a>
									<a href="#" class="pull-right text-green icon-action"><span class="icon-call-out"></span></a>
								</li><li class="list-group-item helper-red ui-sortable-handle">
									<span class="fa fa-unsorted icon-fade"></span> Samantha
									<a href="#" class="pull-right text-magenta icon-action"><span class="icon-share"></span></a>
									<a href="#" class="pull-right text-yellow icon-action"><span class="icon-bubble"></span></a>
									<a href="#" class="pull-right text-green icon-action"><span class="icon-call-out"></span></a>
								</li>
								<li class="list-group-item helper-blue ui-sortable-handle">
									<span class="fa fa-unsorted icon-fade"></span> Nanah
									<a href="#" class="pull-right text-magenta icon-action"><span class="icon-share"></span></a>
									<a href="#" class="pull-right text-yellow icon-action"><span class="icon-bubble"></span></a>
									<a href="#" class="pull-right text-green icon-action"><span class="icon-call-out"></span></a>
								</li>
								<li class="list-group-item helper-yellow ui-sortable-handle">
									<span class="fa fa-unsorted icon-fade"></span> Mirian
									<a href="#" class="pull-right text-magenta icon-action"><span class="icon-share"></span></a>
									<a href="#" class="pull-right text-yellow icon-action"><span class="icon-bubble"></span></a>
									<a href="#" class="pull-right text-green icon-action"><span class="icon-call-out"></span></a>
								</li>
								<li class="list-group-item helper-magenta ui-sortable-handle">
									<span class="fa fa-unsorted icon-fade"></span> Núbia
									<a href="#" class="pull-right text-magenta icon-action"><span class="icon-share"></span></a>
									<a href="#" class="pull-right text-yellow icon-action"><span class="icon-bubble"></span></a>
									<a href="#" class="pull-right text-green icon-action"><span class="icon-call-out"></span></a>
								</li>
							</ul>
						</div>
                    	<!-- CORRETOR DA VEZ FIM -->                    	

                    	<!-- IMÓVEL RAKING TOP 5 INICIO -->
						<div class="col-md-6">
							<div class="table-overflow">
							<h5>Raking TOP 5 <small>(Imóveis das associadas)</small></h5>
								<table class="table">
									<thead>
										<tr>
											<th>PROPRIEDADE</th>
											<th>RANKING</th>
											<th>FAVORITOS</th>
										</tr>
									</thead>
									<tbody class="table">
										<tr>
											<td><span class="propName">Modern Residence in New York</span></td>
											<td>
												<span class="fa fa-star text-yellow"></span>
												<span class="fa fa-star text-yellow"></span>
												<span class="fa fa-star text-yellow"></span>
												<span class="fa fa-star text-yellow"></span>
												<span class="fa fa-star-o text-yellow"></span>
												(146)
											</td>
											<td><span class="icon-heart text-red"></span> 54</td>
										</tr>
										<tr>
											<td><span class="propName">Hauntingly Beautiful Estate</span></td>
											<td>
												<span class="fa fa-star text-yellow"></span>
												<span class="fa fa-star text-yellow"></span>
												<span class="fa fa-star text-yellow"></span>
												<span class="fa fa-star text-yellow"></span>
												<span class="fa fa-star text-yellow"></span>
												(123)
											</td>
											<td><span class="icon-heart text-red"></span> 67</td>
										</tr>
										<tr>
											<td><span class="propName">Sophisticated Residence</span></td>
											<td>
												<span class="fa fa-star text-yellow"></span>
												<span class="fa fa-star text-yellow"></span>
												<span class="fa fa-star text-yellow"></span>
												<span class="fa fa-star text-yellow"></span>
												<span class="fa fa-star text-yellow"></span>
												(120)
											</td>
											<td><span class="icon-heart text-red"></span> 87</td>
										</tr>
										<tr>
											<td><span class="propName">House With a Lovely Glass Roof</span></td>
											<td>
												<div class="stars">
													<span class="fa fa-star text-yellow"></span>
													<span class="fa fa-star text-yellow"></span>
													<span class="fa fa-star text-yellow"></span>
													<span class="fa fa-star text-yellow"></span>
													<span class="fa fa-star-o text-yellow"></span>
													(170)
												</div>
											</td>
											<td><span class="icon-heart text-red"></span> 99</td>
										</tr>
										<tr>
											<td><span class="propName">House With a Lovely Glass Roof</span></td>
											<td>
												<div class="stars">
													<span class="fa fa-star text-yellow"></span>
													<span class="fa fa-star text-yellow"></span>
													<span class="fa fa-star text-yellow"></span>
													<span class="fa fa-star text-yellow"></span>
													<span class="fa fa-star-o text-yellow"></span>
													(170)
												</div>
											</td>
											<td><span class="icon-heart text-red"></span> 99</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
                   		<!-- IMÓVEL RAKING TOP 5 FIM -->
                    
						<div class="clearfix"></div>
                    
                    	<!-- RECENTES INICIO -->
						<div class="col-md-4">
							<a href="anuncio.php" class="propWidget-1">
								<div class="fig">
									<img src="images/prop/1-1.png" alt="image">
									<div class="priceCap"><span>$1,930,000</span></div>
									<div class="figType">VENDA</div>
									<div class="figCap">
										<h3>Modern Residence in New York</h3>
										<div class="address">39 Remsen St, Brooklyn, NY 11201, USA</div>
										<div class="feat feat-1"><span class="fa fa-bed"></span> 3</div>
										<div class="feat feat-2"><span class="fa fa-bath"></span> 2</div>
										<div class="feat feat-3"><span class="fa fa-shower"></span> 2</div>
										<div class="feat feat-4"><span class="fa fa-car"></span> 2</div>
										<div class="feat feat-5"><span class="icon-frame"></span> 120 m²</div>
									</div>
								</div>
							</a>
						</div> 
						<div class="col-md-4">
							<a href="anuncio.php" class="propWidget-1">
								<div class="fig">
									<img src="images/prop/1-1.png" alt="image">
									<div class="priceCap"><span>$1,930,000</span></div>
									<div class="figType">VENDA</div>
									<div class="figCap">
										<h3>Modern Residence in New York</h3>
										<div class="address">39 Remsen St, Brooklyn, NY 11201, USA</div>
										<div class="feat feat-1"><span class="fa fa-bed"></span> 3</div>
										<div class="feat feat-2"><span class="fa fa-bath"></span> 2</div>
										<div class="feat feat-3"><span class="fa fa-shower"></span> 2</div>
										<div class="feat feat-4"><span class="fa fa-car"></span> 2</div>
										<div class="feat feat-5"><span class="icon-frame"></span> 120 m²</div>
									</div>
								</div>
							</a>
						</div> 
						<div class="col-md-4">
							<a href="anuncio.php" class="propWidget-1">
								<div class="fig">
									<img src="images/prop/1-1.png" alt="image">
									<div class="priceCap"><span>$1,930,000</span></div>
									<div class="figType">VENDA</div>
									<div class="figCap">
										<h3>Modern Residence in New York</h3>
										<div class="address">39 Remsen St, Brooklyn, NY 11201, USA</div>
										<div class="feat feat-1"><span class="fa fa-bed"></span> 3</div>
										<div class="feat feat-2"><span class="fa fa-bath"></span> 2</div>
										<div class="feat feat-3"><span class="fa fa-shower"></span> 2</div>
										<div class="feat feat-4"><span class="fa fa-car"></span> 2</div>
										<div class="feat feat-5"><span class="icon-frame"></span> 120 m²</div>
									</div>
								</div>
							</a>
						</div> 
                    	<!-- RECENTES FIM -->                                                           

           
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
        
        <script src="js/sortable.js"></script>
        
    </body>
</html>
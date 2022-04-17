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
				<div class="singleTop whiteBg">
                    <ol class="breadcrumb">
                        <li><a href="#"><span class="icon-home"></span> Início</a></li>
                        <li><a href="#"><span class="icon-user"></span> Rafael Ruscher</a></li>
                        <li><a href="#"><span class="icon-user"></span> Profile</a></li>
                    </ol>
					<div class="row mb20">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pb20">
							<div class="row">
								<div class="col-xs-3">
									<div class="pc-email"><a href="#" class="btn btn-icon btn-round btn-o btn-magenta btn-sm"><span class="fa fa-envelope-o"></span></a></div>
								</div>
								<div class="col-xs-6">
									<div class="profile-card">
										<div class="pc-avatar"><img src="upload/rafael/img/rafael.jpg" alt="avatar"></div>
										<div class="pc-name">Rafael Ruscher</div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="pc-fav"><a href="#" class="btn btn-icon btn-round btn-o btn-red btn-sm"><span class="fa fa-heart-o"></span></a></div>
								</div>
							</div>
							
							<div class="col-md-12 pb20">
								<ul class="pc-stats">
									<li><span>280</span>Postou</li>
									<li><span>345</span>Segue</li>
									<li><span>345</span>Seguidores</li>
								</ul>

								<ul class="pc-stats">
									<li><span>36</span>Curtidas</li>
									<li><span>36</span>Vistas</li>
									<li><span>36</span>Anúncios</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pb20">
							<div class="pc-title osLight">Contatos</div>
										<div class="title">Corretor de Imóveis</div>
										<div class="title">CRECI 8ª REGIÃO/DF 8659</div>
                                        <div class="address">CA Lago Norte, Brasília/DF, Brasil</div>
							<div class="row pb10">
								<div class="col-xs-4"><strong>Telefone</strong></div>
								<div class="col-xs-8 align-right">(61) 99942 3805</div>
							</div>
							<div class="row pb10">
								<div class="col-xs-4"><strong>Celular</strong></div>
								<div class="col-xs-8 align-right">(61) 99942 3805</div>
							</div>
							<div class="row pb10">
								<div class="col-xs-4"><strong>Email</strong></div>
								<div class="col-xs-8 align-right"><a href="mailto:#" class="text-green">rafael@soniaimoveis.com.br</a></div>
							</div>
							<div class="pc-social"><a href="#" class="btn btn-icon btn-facebook"><span class="fa fa-facebook"></span></a> <a href="#" class="btn btn-icon btn-twitter"><span class="fa fa-twitter"></span></a> <a href="#" class="btn btn-icon btn-google"><span class="fa fa-google-plus"></span></a> <a href="#" class="btn btn-icon btn-pinterest"><span class="fa fa-pinterest"></span></a></div>
							
						</div>
						
					</div>
					<div class="row">
						<div class="col-md-6 pb20">
							<div class="pc-about osLight">Sobre mim</div>
							<div class="pb20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat.</div>
							<div class="pc-about osLight">O que outros disseram sobre mim</div>
							<div id="testimonials" class="carousel slide carousel-wb mb20" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#testimonials" data-slide-to="0" class="active"></li>
									<li data-target="#testimonials" data-slide-to="1"></li>
								</ol>
								<div class="carousel-inner">
									<div class="item active">
										<img src="images/avatar-2.png" class="testim-avatar" alt="avatar">
										<div class="testim">
											<div class="testim-text">Fusce risus metus, placerat in consectetur eu, porttitor a est sed sed dolor lorem cras adipiscing</div>
											<div class="testim-name">Jane Smith</div>
										</div>
									</div>
									<div class="item">
										<img src="images/avatar-3.png" class="testim-avatar" alt="avatar">
										<div class="testim">
											<div class="testim-text">Fusce risus metus, placerat in consectetur eu, porttitor a est sed sed dolor lorem cras adipiscing</div>
											<div class="testim-name">Rust Cohle</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="pc-title osLight">Associada</div>
							<div class="userWidget-2">
								<div class="avatar">
									<img src="upload/soniaimoveis/soniaimoveis.jpg" alt="avatar">
								</div>
								<div class="info">
									<div class="name">Sonia Imóveis</div>
									<div class="title">Diretor de TI</div>
									<div class="address">CA Lago Norte, Brasília, DF</div>
								</div>
<!--								<div class="ops">
									<a href="#" class="btn btn-icon btn-round btn-o btn-magenta btn-sm"><span class="fa fa-envelope-o"></span></a>
									<a href="#" class="btn btn-icon btn-round btn-o btn-red btn-sm"><span class="fa fa-heart-o"></span></a>
								</div>-->
								<div class="clearfix"></div>
							</div>							
						</div>
					</div>
				</div>
				<div class="rightContainer">
					<h3>Lista de captações</h3>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<a href="anuncio.php" class="card">
								<div class="figure">
									<img src="images/prop/1-1.png" alt="image">
									<div class="figCaption">
										<div>$1,550,000</div>
										<span class="icon-eye"> 200</span>
										<span class="icon-heart"> 54</span>
										<span class="icon-bubble"> 13</span>
									</div>
									<div class="figView"><span class="icon-eye"></span></div>
									<div class="figType">FOR SALE</div>
								</div>
								<h2>Modern Residence in New York</h2>
								<div class="cardAddress"><span class="icon-pointer"></span> 39 Remsen St, Brooklyn, NY 11201, USA</div>
								<div class="cardRating">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star-o"></span>
									(146)
								</div>
								<ul class="cardFeat">
									<li><span class="fa fa-moon-o"></span> 3</li>
									<li><span class="icon-drop"></span> 2</li>
									<li><span class="icon-frame"></span> 3430 Sq Ft</li>
								</ul>
								<div class="clearfix"></div>
							</a>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<a href="anuncio.php" class="card">
								<div class="figure">
									<img src="images/prop/2-1.png" alt="image">
									<div class="figCaption">
										<div>$1,750,000</div>
										<span class="icon-eye"> 175</span>
										<span class="icon-heart"> 67</span>
										<span class="icon-bubble"> 9</span>
									</div>
									<div class="figView"><span class="icon-eye"></span></div>
									<div class="figType">For Rent</div>
								</div>
								<h2>Hauntingly Beautiful Estate</h2>
								<div class="cardAddress"><span class="icon-pointer"></span> 169 Warren St, Brooklyn, NY 11201, USA</div>
								<div class="cardRating">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									(123)
								</div>
								<ul class="cardFeat">
									<li><span class="fa fa-moon-o"></span> 2</li>
									<li><span class="icon-drop"></span> 2</li>
									<li><span class="icon-frame"></span> 4430 Sq Ft</li>
								</ul>
								<div class="clearfix"></div>
							</a>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<a href="anuncio.php" class="card">
								<div class="figure">
									<img src="images/prop/3-1.png" alt="image">
									<div class="figCaption">
										<div>$1,340,000</div>
										<span class="icon-eye"> 180</span>
										<span class="icon-heart"> 87</span>
										<span class="icon-bubble"> 12</span>
									</div>
									<div class="figView"><span class="icon-eye"></span></div>
									<div class="figType">For Rent</div>
								</div>
								<h2>Sophisticated Residence</h2>
								<div class="cardAddress"><span class="icon-pointer"></span> 38-62 Water St, Brooklyn, NY 11201, USA</div>
								<div class="cardRating">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									(120)
								</div>
								<ul class="cardFeat">
									<li><span class="fa fa-moon-o"></span> 2</li>
									<li><span class="icon-drop"></span> 3</li>
									<li><span class="icon-frame"></span> 2640 Sq Ft</li>
								</ul>
								<div class="clearfix"></div>
							</a>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<a href="anuncio.php" class="card">
								<div class="figure">
									<img src="images/prop/4-1.png" alt="image">
									<div class="figCaption">
										<div>$1,930,000</div>
										<span class="icon-eye"> 145</span>
										<span class="icon-heart"> 99</span>
										<span class="icon-bubble"> 25</span>
									</div>
									<div class="figView"><span class="icon-eye"></span></div>
									<div class="figType">For Sale</div>
								</div>
								<h2>House With a Lovely Glass-Roofed Pergola</h2>
								<div class="cardAddress"><span class="icon-pointer"></span> Wunsch Bldg, Brooklyn, NY 11201, USA</div>
								<div class="cardRating">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star-o"></span>
									(170)
								</div>
								<ul class="cardFeat">
									<li><span class="fa fa-moon-o"></span> 3</li>
									<li><span class="icon-drop"></span> 2</li>
									<li><span class="icon-frame"></span> 2800 Sq Ft</li>
								</ul>
								<div class="clearfix"></div>
							</a>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<a href="anuncio.php" class="card">
								<div class="figure">
									<img src="images/prop/5-1.png" alt="image">
									<div class="figCaption">
										<div>$2,350,000</div>
										<span class="icon-eye"> 184</span>
										<span class="icon-heart"> 120</span>
										<span class="icon-bubble"> 18</span>
									</div>
									<div class="figView"><span class="icon-eye"></span></div>
									<div class="figType">For Rent</div>
								</div>
								<h2>Luxury Mansion</h2>
								<div class="cardAddress"><span class="icon-pointer"></span> 95 Butler St, Brooklyn, NY 11231, USA</div>
								<div class="cardRating">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star-o"></span>
									(257)
								</div>
								<ul class="cardFeat">
									<li><span class="fa fa-moon-o"></span> 2</li>
									<li><span class="icon-drop"></span> 2</li>
									<li><span class="icon-frame"></span> 2750 Sq Ft</li>
								</ul>
								<div class="clearfix"></div>
							</a>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<a href="anuncio.php" class="card">
								<div class="figure">
									<img src="images/prop/1-1.png" alt="image">
									<div class="figCaption">
										<div>$1,550,000</div>
										<span class="icon-eye"> 200</span>
										<span class="icon-heart"> 54</span>
										<span class="icon-bubble"> 13</span>
									</div>
									<div class="figView"><span class="icon-eye"></span></div>
									<div class="figType">FOR SALE</div>
								</div>
								<h2>Modern Residence in New York</h2>
								<div class="cardAddress"><span class="icon-pointer"></span> 39 Remsen St, Brooklyn, NY 11201, USA</div>
								<div class="cardRating">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									(146)
								</div>
								<ul class="cardFeat">
									<li><span class="fa fa-moon-o"></span> 3</li>
									<li><span class="icon-drop"></span> 2</li>
									<li><span class="icon-frame"></span> 3430 Sq Ft</li>
								</ul>
								<div class="clearfix"></div>
							</a>
						</div>
					</div>
					<ul class="pagination">
						<li class="disabled"><a href="#"><span class="fa fa-angle-left"></span></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#"><span class="fa fa-angle-right"></span></a></li>
					</ul>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
        
                
                                
        
        <div id="wrapper" class="full">
            <!-- INICIO DIV CONTENT -->
			<div id="content" class="max">
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
        
        <script>
		// AUTO COMPLETA TEXTO - BUSCA
		$(document).ready(function(){
		
			$('#buscaprincipal').autocomplete({
				source: ["Rafael", "Ruscher", "Lago Norte", "Brasília", "Sabrina", "Mauro", "Ana Paula"],
				focus: function (event, ui) {
					var label = ui.item.label;
					var value = ui.item.value;
					var me = $(this);
					setTimeout(function() {
						me.val(value);
					}, 1);
				}
			});
		
		
		});       
        </script>

		<script src="js/jquery.gritter.min.js"></script>        
        <script>
		//MENSAGENS NOTIFICAÇÃO GRITTER
        $(document).ready(function(){
			// === jQeury Gritter, a growl-like notifications === //
			$.gritter.add({
				title:	'Mensagens',
				text:	'Você tem 9 novas mensagens.',
				image: 	'images/icons/32/envelope.png',
				sticky: false
			});	
			$.gritter.add({
				title:	'Rafael Ruscher',
				text:	'Marcou você num comentário.',
				image: 	'upload/rafael/img/rafael.jpg',
				sticky: false
			});	
        });
        </script>
        <script src="js/calendar.js"></script>
        
    </body>
</html>
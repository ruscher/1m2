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
            <div id="mapView"><div class="mapPlaceholder"><span class="fa fa-spin fa-spinner"></span> Carregando mapa...</div></div>
            <!-- INICIO DIV CONTENT -->
			<div id="content">
            	<!-- INICIO DIV WIDGETS -->
				<div class="widgets">
					<!-- INICIO  -->
                    <ol class="breadcrumb">
                        <li><a href="#"><span class="icon-home"></span> Início</a></li>
                        <li><a href="#"><span class="icon-home"></span> Imóveis</a></li>
                    </ol>
                    <h4>Imóveis</h4>
                    <div class="row">
                    
<!-- INICIO CONTEUDO -->

<div class="filter">
                    <h1 class="osLight">Filtrar resultados</h1>
                    <a href="#" class="handleFilter"><span class="icon-equalizer"></span></a>
                    <div class="clearfix"></div>
                    <form class="filterForm">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 formItem">
                                <div class="formField">
                                    <label>Tipo de Propriedade</label>
                                    <a href="#" data-toggle="dropdown" class="btn btn-gray dropdown-btn dropdown-toggle propTypeSelect">
                                        <span class="dropdown-label">Todos</span>
                                        <span class="fa fa-angle-down dsArrow"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-select full" role="menu">
                                        <li class="active"><input type="radio" name="pType" checked="checked"><a href="#">Todos</a></li>
                                        <li><input type="radio" name="pType"><a href="#">Venda</a></li>
                                        <li><input type="radio" name="pType"><a href="#">Aluguel</a></li>
                                        <li><input type="radio" name="pType"><a href="#">Laçamento</a></li>
                                        <li><input type="radio" name="pType"><a href="#">Temporada</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 formItem">
                                <div class="formField">
                                    <label>Faixa de Preço</label>
                                    <div class="slider priceSlider">
                                        <div class="sliderTooltip">
                                            <div class="stArrow"></div>
                                            <div class="stLabel"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 formItem">
                                <div class="formField">
                                    <label>Área m²</label>
                                    <div class="slider areaSlider">
                                        <div class="sliderTooltip">
                                            <div class="stArrow"></div>
                                            <div class="stLabel"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 formItem">
                                <div class="formField">
                                    <label>Quartos</label>
                                    <div class="volume">
                                        <a href="#" class="btn btn-gray btn-round-left"><span class="fa fa-angle-left"></span></a>
                                        <input type="text" class="form-control" readonly value="1">
                                        <a href="#" class="btn btn-gray btn-round-right"><span class="fa fa-angle-right"></span></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 formItem">
                                <div class="formField">
                                    <label>Suíte</label>
                                    <div class="volume">
                                        <a href="#" class="btn btn-gray btn-round-left"><span class="fa fa-angle-left"></span></a>
                                        <input type="text" class="form-control" readonly value="1">
                                        <a href="#" class="btn btn-gray btn-round-right"><span class="fa fa-angle-right"></span></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 formItem">
                                <div class="formField">
                                    <label>Banheiros</label>
                                    <div class="volume">
                                        <a href="#" class="btn btn-gray btn-round-left"><span class="fa fa-angle-left"></span></a>
                                        <input type="text" class="form-control" readonly value="1">
                                        <a href="#" class="btn btn-gray btn-round-right"><span class="fa fa-angle-right"></span></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 formItem">
                                <div class="formField">
                                    <label>Vaga</label>
                                    <div class="volume">
                                        <a href="#" class="btn btn-gray btn-round-left"><span class="fa fa-angle-left"></span></a>
                                        <input type="text" class="form-control" readonly value="1">
                                        <a href="#" class="btn btn-gray btn-round-right"><span class="fa fa-angle-right"></span></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="resultsList">
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
                                    <div class="figType">VENDA</div>
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
                                    <li><span class="icon-frame"></span> 3430 m²</li>
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
                                    <div class="figType">ALUGUEL</div>
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
                                    <li><span class="icon-frame"></span> 4430 m²</li>
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
                                    <div class="figType">ALUGUEL</div>
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
                                    <li><span class="icon-frame"></span> 2640 m²</li>
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
                                    <div class="figType">VENDA</div>
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
                                    <li><span class="icon-frame"></span> 2800 m²</li>
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
                                    <div class="figType">ALUGUEL</div>
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
                                    <li><span class="icon-frame"></span> 2750 m²</li>
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
                                    <div class="figType">VENDA</div>
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
                                    <li><span class="icon-frame"></span> 3430 m²</li>
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
                                    <div class="figType">ALUGUEL</div>
                                </div>
                                <h2>Hauntingly Beautiful Estate</h2>
                                <div class="cardAddress"><span class="icon-pointer"></span> 169 Warren St, Brooklyn, NY 11201, USA</div>
                                <div class="cardRating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-o"></span>
                                    (123)
                                </div>
                                <ul class="cardFeat">
                                    <li><span class="fa fa-moon-o"></span> 2</li>
                                    <li><span class="icon-drop"></span> 2</li>
                                    <li><span class="icon-frame"></span> 4430 m²</li>
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
                                    <div class="figType">ALUGUEL</div>
                                </div>
                                <h2>Sophisticated Residence</h2>
                                <div class="cardAddress"><span class="icon-pointer"></span> 38-62 Water St, Brooklyn, NY 11201, USA</div>
                                <div class="cardRating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-o"></span>
                                    (120)
                                </div>
                                <ul class="cardFeat">
                                    <li><span class="fa fa-moon-o"></span> 2</li>
                                    <li><span class="icon-drop"></span> 3</li>
                                    <li><span class="icon-frame"></span> 2640 m²</li>
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
                                    <div class="figType">VENDA</div>
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
                                    <li><span class="icon-frame"></span> 2800 m²</li>
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
                                    <div class="figType">ALUGUEL</div>
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
                                    <li><span class="icon-frame"></span> 2750 m²</li>
                                </ul>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                    </div>
					<!-- <span class="fa fa-spin fa-refresh"></span> Carregando... -->		
					
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

<!-- FIM CONTEUDO -->                               




           
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
        
    </body>
</html>
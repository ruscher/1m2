<?php

if(!isset($_SESSION)) { 

	session_start(); 
    ob_start(); 

} 

include "connect.php";

include 'function.php';

$codigo=$_GET["codigo"];
$id_corretor = $_SESSION['id_corretor'];
$usuario = $_SESSION['usuario'];
$usuarioemail = $_SESSION['email'];
$nome = $_SESSION['nome'];
$cargo = $_SESSION['cargo'];
$tipousuario = $_SESSION['tipousuario'];
$banir = $_SESSION['banir'];


if ($id_corretor=="" or $_SESSION['banir']=="s"){

	header ('Location: index.php');

	exit;

}

?>



<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="iso-8859-1">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <title>1m&sup2; | Plataforma Imobili&aacute;ria</title>



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

        

<!--		<style>

		  #floating-panel {

			position: absolute;

			top: 155px;

			left: 50%;

			margin-left: -180px;

			width: 350px;

			z-index: 5;

			background-color: #fff;

			padding: 5px;

			border: 1px solid #999;

			text-align: center;

			font-family: 'Roboto','sans-serif';

			line-height: 30px;

			padding-left: 10px;

		  }

		  #latlng {

			width: 225px;

		  }

		</style> -->       

        

    </head>

    <body class="notransition">

    

		<?php include 'inc_page_top.php'; ?>

        <?php include 'inc_menu_lateral.php'; ?>

        <?php //include 'inc_main.php'; ?>

        <!-- INICIO DIV WRAPPER -->

        <div id="wrapper" class="full">

            <div id="mapView"><div class="mapPlaceholder"><span class="fa fa-spin fa-spinner"></span> Carregando mapa...</div></div>

            <!-- INICIO DIV CONTENT -->

<!--				<div id="floating-panel">

					<input id="latlng" type="text" value="40.714224,-73.961452">

					<input id="submit" type="button" value="Reverse Geocode">

				</div>-->

				

			<div id="content">

            	<!-- INICIO DIV WIDGETS -->

				<div class="widgets">

					<!-- INICIO  -->

                    <ol class="breadcrumb">

                        <li><a href="#"><span class="icon-home"></span> In&iacute;cio</a></li>

                    </ol>

                    <h4>Im&oacute;veis</h4>

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

                                    <label>Tipo de Contrato</label>

                                    <a href="#" data-toggle="dropdown" class="btn btn-gray dropdown-btn dropdown-toggle propTypeSelect">

                                        <span class="dropdown-label">Todos</span>

                                        <span class="fa fa-angle-down dsArrow"></span>

                                    </a>

                                    <ul class="dropdown-menu dropdown-select full" role="menu">

                                        <li class="active"><input type="radio" name="pType" checked="checked"><a href="#">Todos</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Venda</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Aluguel</a></li>

                                        <li><input type="radio" name="pType"><a href="#">La&ccedil;amento</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Temporada</a></li>

                                    </ul>

                                </div>

                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 formItem">

                                <div class="formField">

                                    <label>Tipo de Propriedade</label>

                                    <a href="#" data-toggle="dropdown" class="btn btn-gray dropdown-btn dropdown-toggle propTypeSelect">

                                        <span class="dropdown-label">Todos</span>

                                        <span class="fa fa-angle-down dsArrow"></span>

                                    </a>

                                    <ul class="dropdown-menu dropdown-select full" role="menu">

                                        <li class="active"><input type="radio" name="pType" checked="checked"><a href="#">Todos</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Residencial</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Comercial</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Industrial</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Rural</a></li>

                                        <!--<li><input type="radio" name="pType"><a href="#">Andar-pilotis</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Apartamento</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Apart-hotel</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Área Privativa</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Barracão</a>

                                        <li><input type="radio" name="pType"><a href="#">Casa</a>

                                        <li><input type="radio" name="pType"><a href="#">Casa comercial</a>

                                        <li><input type="radio" name="pType"><a href="#">Casa geminada</a>

                                        <li><input type="radio" name="pType"><a href="#">Casa em condomínio</a>

                                        <li><input type="radio" name="pType"><a href="#">Chácara</a>

                                        <li><input type="radio" name="pType"><a href="#">Clube</a>

                                        <li><input type="radio" name="pType"><a href="#">Cobertura</a>

                                        <li><input type="radio" name="pType"><a href="#">Conjunto de lojas</a>

                                        <li><input type="radio" name="pType"><a href="#">Conjunto de salas</a>

                                        <li><input type="radio" name="pType"><a href="#">Coworking</a>

                                        <li><input type="radio" name="pType"><a href="#">Dúplex</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Estacionamento</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Empreendimento</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Fazenda</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Flat</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Galpão</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Garagem</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Haras</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Hotel</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Hotel fazenda</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Ilha</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Lote-Área-Terreno</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Kitchenette</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Loft</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Loja</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Lote em condomínio</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Motel</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Pousada</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Ponto comercial</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Prédio</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Sala</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Shopping</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Sítio</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Sobrado</a></li>

                                        <li><input type="radio" name="pType"><a href="#">Sobre-loja</a></li>-->

                                    </ul>

                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 formItem">

                                <div class="formField">

                                    <label>Faixa de Pre&ccedil;o</label>

                                    <div class="slider priceSlider">

                                        <div class="sliderTooltip">

                                            <div class="stArrow"></div>

                                            <div class="stLabel"></div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 formItem">

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

                                    <label>Quarto</label>

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

                                    <label>Su&iacute;te</label>

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

                                    <label>Banheiro</label>

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

                                    <li><span class="fa fa-bed"></span> 3</li>

                                    <li><span class="fa fa-bath"></span> 2</li>

                                    <li><span class="fa fa-shower"></span> 2</li>

                                    <li><span class="fa fa-car"></span> 2</li>

                                    <li><span class="icon-frame"></span> 3430 m&sup2;</li>

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

                                    <li><span class="fa fa-bed"></span> 3</li>

                                    <li><span class="fa fa-bath"></span> 2</li>

                                    <li><span class="fa fa-shower"></span> 2</li>

                                    <li><span class="fa fa-car"></span> 2</li>

                                    <li><span class="icon-frame"></span> 4430 m&sup2;</li>

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

                                    <li><span class="fa fa-bed"></span> 3</li>

                                    <li><span class="fa fa-bath"></span> 2</li>

                                    <li><span class="fa fa-shower"></span> 2</li>

                                    <li><span class="fa fa-car"></span> 2</li>

                                    <li><span class="icon-frame"></span> 2640 m&sup2;</li>

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

                                    <li><span class="fa fa-bed"></span> 3</li>

                                    <li><span class="fa fa-bath"></span> 2</li>

                                    <li><span class="fa fa-shower"></span> 2</li>

                                    <li><span class="fa fa-car"></span> 2</li>

                                    <li><span class="icon-frame"></span> 2800 m&sup2;</li>

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

                                    <li><span class="fa fa-bed"></span> 3</li>

                                    <li><span class="fa fa-bath"></span> 2</li>

                                    <li><span class="fa fa-shower"></span> 2</li>

                                    <li><span class="fa fa-car"></span> 2</li>

                                    <li><span class="icon-frame"></span> 2750 m&sup2;</li>

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

                                    <li><span class="fa fa-bed"></span> 3</li>

                                    <li><span class="fa fa-bath"></span> 2</li>

                                    <li><span class="fa fa-shower"></span> 2</li>

                                    <li><span class="fa fa-car"></span> 2</li>

                                    <li><span class="icon-frame"></span> 3430 m&sup2;</li>

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

                                    <li><span class="fa fa-bed"></span> 3</li>

                                    <li><span class="fa fa-bath"></span> 2</li>

                                    <li><span class="fa fa-shower"></span> 2</li>

                                    <li><span class="fa fa-car"></span> 2</li>

                                    <li><span class="icon-frame"></span> 4430 m&sup2;</li>

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

                                    <li><span class="fa fa-bed"></span> 3</li>

                                    <li><span class="fa fa-bath"></span> 2</li>

                                    <li><span class="fa fa-shower"></span> 2</li>

                                    <li><span class="fa fa-car"></span> 2</li>

                                    <li><span class="icon-frame"></span> 2640 m&sup2;</li>

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

                                    <li><span class="fa fa-bed"></span> 3</li>

                                    <li><span class="fa fa-bath"></span> 2</li>

                                    <li><span class="fa fa-shower"></span> 2</li>

                                    <li><span class="fa fa-car"></span> 2</li>

                                    <li><span class="icon-frame"></span> 2800 m&sup2;</li>

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

                                    <li><span class="fa fa-bed"></span> 3</li>

                                    <li><span class="fa fa-bath"></span> 2</li>

                                    <li><span class="fa fa-shower"></span> 2</li>

                                    <li><span class="fa fa-car"></span> 2</li>

                                    <li><span class="icon-frame"></span> 2750 m&sup2;</li>

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

        

    	<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>

               

        <!--<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBdv2XYQKLPOC3j0Nm7z3Fi1jtVipNnd8Q&sensor=true&amp;libraries=geometry&amp;libraries=places" type="text/javascript"></script>-->

		<script src="http://maps.googleapis.com/maps/api/js?sensor=true&amp;libraries=geometry&amp;libraries=places" type="text/javascript"></script>

	

		<script src="js/infobox.js"></script>

        <script src="js/clndr.js"></script>

        <script src="js/jquery.tagsinput.min.js"></script>

        <script src="js/bootstrap-datepicker.js"></script>

        <script src="js/app.js"></script>



<script>

	var props = [

<?php	

// json for properties markers on map

//if($_GET[listar] AND $_GET[listar]<>"Todos"){

//	$sqlimovel_view = "SELECT * FROM imovel WHERE situacao='".$_GET[listar]."'";

//} elseif ($_GET[listar]=="Todos"){

//	$sqlimovel_view = "SELECT * FROM imovel";

//} else {

$sqlimovel_view = "SELECT * FROM imovel WHERE situacao='Ativo'";

//}

$resultadoimovel_view = mysqli_query($conexao, $sqlimovel_view);



while($linhaimovel_view = mysqli_fetch_array($resultadoimovel_view)){

	$sqllista_proprietario = "SELECT * FROM mapa WHERE id_imovel='".$linhaimovel_view['id_imovel']."'";

	$resultadolista_proprietario = mysqli_query($conexao, $sqllista_proprietario);

	//$linhalista_proprietario=mysqli_fetch_array($resultadolista_proprietario);

   
    while ($linhalista_proprietario=mysqli_fetch_array($resultadolista_proprietario)){

        if ($linhalista_proprietario['id_mapa']){

            

            $sql = "SELECT * FROM imovel WHERE id_imovel='".$linhalista_proprietario['id_imovel']."'";

            $resultado = mysqli_query($conexao, $sql);

            
            while ($linha=mysqli_fetch_array($resultado)){

                echo("	{");

                echo("	title : '".$linha['end']."',");

                echo("	image : '1-1-thmb.png',");

                echo("	type : '".$linha['contrato']."',");

                echo("	price : '".$linha['valorfinal']."',");

                echo("	address : '".$linha['country'].",".$linha['cidade'].", ".$linha['bairro']."',");

                echo("	bedrooms : '".$linha['nquarto']."',");

                echo("	bathrooms : '".$linha['nsuite']."',");

                echo("	shower : '".$linha['nbanheiro']."',");

                echo("	car : '".$linha['nvaga']."',");

                echo("	area : '".$linha['areaconstruida']." m²',");

                echo("	url : 'anuncio.php',");

                echo("	position : {");

                echo("		lat : ".$linhalista_proprietario['latidude'].",");

                echo("		lng : ".$linhalista_proprietario['longetude']."");

                echo("	},");

                echo("	markerIcon : \"marker-green.png\"");

                echo("	},");
            }
        }
    }
}

?>

   {

        title : 'Ruscher Luxury Mansion',

        image : '5-1-thmb.png',

        type : 'Locação',

        price : '$2,350,000',

        address : '95 Butler St, Brooklyn, NY 11231, USA',

        bedrooms : '2',

        bathrooms : '2',

        shower : '2',

        car : '2',

        area : '2750 m²',

        url : 'anuncio.php',

        position : {

            lat : -15.721040595676092,

            lng : -47.87933338728027

        },

        markerIcon : "marker-green.png"

    }];

</script>       

                     

        <script src="js/calendar.js"></script>  

        <?php include 'inc_busca_autocomptext.php'; ?>  

		<script src="js/jquery.gritter.min.js"></script>

        <?php include 'inc_notificacao_gritter.php'; ?>

        

    </body>

</html>

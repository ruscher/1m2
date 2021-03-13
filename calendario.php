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
                        <li><a href="#"><span class="icon-calendar"></span> Calendário</a></li>
                    </ol>
                    <h4>Calendário</h4>
                    <div class="row">
                    
                               
                        <div class="col-lg-6">
                            <div class="calendarWidget">
                                <div class="cal"></div>
                            </div>
                        </div>


						<div class="col-lg-6">
                            <div class="notificationsWidget">
                                <h5><span class="badge">5</span> Notifications</h5>
                                <div class="notification">
                                    <div class="time green">
                                        <div class="timeBody hidden-xs">5 minutes ago</div>
                                        <div class="timeArrow hidden-xs"><span class="fa fa-caret-right"></span></div>
                                        <div class="indicator"><span class="fa fa-circle-o"></span></div>
                                        <div class="notifyArrow"><span class="fa fa-caret-left"></span></div>
                                    </div>
                                    <div class="notifyContent">
                                        <div class="notifyBody">
                                            <img class="avatar pull-left" src="images/avatar-3.png" alt="avatar">
                                            <div class="notify pull-left">
                                            <div class="name">Rust Cohle <span class="label label-green visible-xs">5 minutes ago</span></div>
                                                <div class="message">Sed ut perspiciatis unde</div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="notification">
                                    <div class="time red">
                                        <div class="timeBody hidden-xs">20 minutes ago</div>
                                        <div class="timeArrow hidden-xs"><span class="fa fa-caret-right"></span></div>
                                        <div class="indicator"><span class="fa fa-circle-o"></span></div>
                                        <div class="notifyArrow"><span class="fa fa-caret-left"></span></div>
                                    </div>
                                    <div class="notifyContent">
                                        <div class="notifyBody">
                                            <div class="notifyRound notifyRound-red fa fa-envelope-o"></div>
                                            <div class="notify pull-left">
                                                <div class="name">John Smith <span class="label label-red visible-xs">20 minutes ago</span></div>
                                                <div class="message">Lorem Ipsum is simply dummy text</div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="notification">
                                    <div class="time yellow">
                                        <div class="timeBody hidden-xs">2 hours ago</div>
                                        <div class="timeArrow hidden-xs"><span class="fa fa-caret-right"></span></div>
                                        <div class="indicator"><span class="fa fa-circle-o"></span></div>
                                        <div class="notifyArrow"><span class="fa fa-caret-left"></span></div>
                                    </div>
                                    <div class="notifyContent">
                                        <div class="notifyBody">
                                            <div class="notifyRound notifyRound-yellow fa fa-heart-o"></div>
                                            <div class="notify pull-left">
                                                <div class="name">Alex Rogers <span class="label label-yellow visible-xs">2 hours ago</span></div>
                                                <div class="message">It is a long established fact</div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="notification">
                                    <div class="time magenta">
                                        <div class="timeBody hidden-xs">1 day ago</div>
                                        <div class="timeArrow hidden-xs"><span class="fa fa-caret-right"></span></div>
                                        <div class="indicator"><span class="fa fa-circle-o"></span></div>
                                        <div class="notifyArrow"><span class="fa fa-caret-left"></span></div>
                                    </div>
                                    <div class="notifyContent">
                                        <div class="notifyBody">
                                            <div class="notifyRound notifyRound-magenta fa fa-paper-plane-o"></div>
                                            <div class="notify pull-left">
                                                <div class="name">Jane Smith <span class="label label-magenta visible-xs">1 day ago</span></div>
                                                <div class="message">There are many variations</div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="notification">
                                    <div class="time blue">
                                        <div class="timeBody hidden-xs">September 25, 17:30</div>
                                        <div class="timeArrow hidden-xs"><span class="fa fa-caret-right"></span></div>
                                        <div class="indicator"><span class="fa fa-circle-o"></span></div>
                                        <div class="notifyArrow"><span class="fa fa-caret-left"></span></div>
                                    </div>
                                    <div class="notifyContent">
                                        <div class="notifyBody">
                                            <img class="avatar pull-left" src="images/avatar-1.png" alt="avatar">
                                            <div class="notify pull-left">
                                                <div class="name">John Smith <span class="label label-blue visible-xs">September 25, 17:30</span></div>
                                                <div class="message">Lorem Ipsum is simply dummy text</div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
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
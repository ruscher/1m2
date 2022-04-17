        <!-- Left Side Navigation -->

        <div id="leftSide">
            <nav class="leftNav scrollable">
			<!-- INICIO BUSCA -->
            <?php include 'inc_busca_palavra.php'; ?>
			<!-- FIM BUSCA -->
                <ul>
                
                	<li><a href="painel.php"><span class="navIcon icon-speedometer"></span><span class="navLabel">Painel</span></a></li>                   
                   
                    <li class="hasSub">
                        <a href="#"><span class="navIcon icon-plus"></span><span class="navLabel">Novo</span><span class="fa fa-angle-left arrowRight"></span></a>
                        <ul>
                            <li><a href="add_imovel.php">Im&oacute;vel</a></li>
                            <li><a href="#">Cliente</a></li>
                            <li><a href="profile.php">Perfil</a></li>
                            <li><a href="#">Compromisso</a></li>
                            <li><a href="#">Mensagem</a></li>
                            <li><a href="#">Proposta</a></li>
                        </ul>
                    </li>
                    
                    <li class="hasSub">
                        <a href="#"><span class="navIcon icon-pointer"></span><span class="navLabel">1m&sup2;</span><span class="fa fa-angle-left arrowRight"></span></a>
                        <ul>
                            <li><a href="main.php">Recentes</a></li>
                            <li><a href="main.php">Favoritos</a></li>
                            <li><a href="main.php">Meus an&uacute;ncios</a></li>
                            <li><a href="main.php">Perfil</a></li>
                            <li><a href="main.php">Por onde andei</a></li>
                            
                        </ul>
                    </li>                    
                    
                    <li class="hasSub">
                    	<a href="#"><span class="navIcon icon-home"></span><span class="navLabel">Im&oacute;veis</span><span class="fa fa-angle-left arrowRight"></span><span class="badge bg-yellow">16</span></a>
                        <ul class="colors">
                            <li><a href="main.php">Plant&atilde;o <span class="fa fa-circle-o c-red icon-right"></span></a></li>
                            <li><a href="main.php">Resid&ecirc;ncial <span class="fa fa-circle-o c-green icon-right"></span></a></li>
                            <li><a href="main.php">Comercial <span class="fa fa-circle-o c-blue icon-right"></span></a></li>
                            <li><a href="main.php">Industrial <span class="fa fa-circle-o c-yellow icon-right"></span></a></li>
                            <li><a href="main.php">Rural <span class="fa fa-circle-o c-magenta icon-right"></span></a></li>
                        </ul>
                    </li>
                    
                    <li><a href="ofertas.php"><span class="navIcon icon-fire"></span><span class="navLabel">Ofertas</span></a></li>
                    
                    <li class="hasSub">
                    	<a href="#"><span class="navIcon icon-notebook"></span><span class="navLabel">Contatos</span><span class="fa fa-angle-left arrowRight"></span><span class="badge bg-yellow">5</span></a>
                        <ul class="colors">
                            <li><a href="chamadas.php">Liga&ccedil;&otilde;es <span class="badge pull-right bg-yellow">5</span></a></li>
                            <li><a href="clientes.php">Clientes <span class="badge pull-right bg-yellow">5</span></a></li>
                            <li><a href="usuarios.php">Usu&aacute;rios </a></li>
                            <li><a href="outros.php">Outros </a></li>
                        </ul>
                    </li>
                      
                    <li class="hasSub">
                    	<a href="#"><span class="navIcon icon-briefcase"></span><span class="navLabel">Neg&oacute;cios</span><span class="fa fa-angle-left arrowRight"></span><span class="badge bg-yellow">5</span></a>
                        <ul class="colors">
                            <li><a href="negocio.php">Pr&eacute;-atendimento <span class="badge pull-right bg-yellow">5</span></a></li>
                            <li><a href="negocio.php">Sele&ccedil;&atilde;o de Perfil </a></li>
                            <li><a href="negocio.php">Sele&ccedil;&atilde;o de Im&oacute;veis </a></li>
                            <li><a href="negocio.php">Visita </a></li>
                            <li><a href="negocio.php">Proposta </a></li>
                            <li><a href="negocio.php">Negocia&ccedil;&atilde;o </a></li>
                            <li><a href="negocio.php">Neg&oacute;cio Realizado </a></li>
                        </ul>
                    </li>
                    
                    <li><a href="calendario.php"><span class="navIcon icon-calendar"></span><span class="navLabel">Calend&aacute;rio</span></a></li>
                                      
                    <li class="hasSub">
                        <a href="#"><span class="navIcon icon-action-redo"></span><span class="navLabel">Mais</span><span class="fa fa-angle-left arrowRight"></span></a>
                        <ul>
                            <li><a href="historico.php">Hist&oacute;rico</a></li>
                            <li><a href="financeiro.php">Financeiro</a></li>
                            <li><a href="relatorios.php">Relat&oacute;rios</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- INICIO MENU USUÁRIO LATERAL ESQUEDO INFERIROR -->
            <div class="leftUserWraper dropup">
                <a href="#" class="avatarAction dropdown-toggle" data-toggle="dropdown">
                    
                    <img class="avatar" src="upload/soniaimoveis/soniaimoveis.jpg" alt="avatar"><span class="counter">5</span>
                    <div class="userBottom pull-left">
                        <span class="bottomUserName">Sonia Im&oacute;veis</span> <span class="fa fa-angle-up pull-right arrowUp"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            	<!-- INICIO SUB-MENU USUÁRIO -->
                <ul class="dropdown-menu" role="menu">
                	<?php include 'inc_menu_sub_empresa.php'; ?>
                </ul>
            	<!-- FIM SUB-MENU USUÁRIO -->
            </div>
            <!-- FIM MENU USUÁRIO LATERAL ESQUEDO INFERIROR -->
            
        </div>
        <div class="closeLeftSide"></div>
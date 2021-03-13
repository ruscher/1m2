
		<!-- INICIO DIV HEADER  -->
        <div id="header">
            <!-- INICIO LOGO -->
            <div class="logo">
                <a href="main.php">
                    <!--<span class="fa fa-home marker"></span>-->
                    <span class="logoImg"></span>                    
                    <span class="logoText"></span>
                </a>
            </div>
            <!-- FIM LOGO -->
        
            <!-- FUNÇÃO AMPLIA MENU -->
        	<a href="#" class="navHandler"><span class="fa fa-bars"></span></a>
            
            <!-- INICIO BUSCA -->
            <?php include 'inc_busca_palavra.php'; ?>
            <!-- FIM BUSCA -->
            
            <div class="headerUserWraper">
            
            	<!-- INICIO NOTIFICACAO GERAL CELULAR -->
                <a href="#" class="userHandler dropdown-toggle" data-toggle="dropdown">
                    <span class="icon-user"></span>
                    <span class="counter">15</span>
                </a>
            	<!-- FIM NOTIFICACAO GERAL CELULAR -->
                
                <a href="#" class="headerUser dropdown-toggle" data-toggle="dropdown">
                   
                    <img class="avatar headerAvatar pull-left" src="upload/rafael/img/rafael.jpg" alt="avatar">
                    <div class="userTop pull-left">
                    	<span class="headerUserName"><?php echo($nome); ?></span> <span class="fa fa-angle-down"></span>
						<div class="pa-title"><?php echo($cargo); ?></div>
                    </div>
                    <div class="clearfix"></div>
                </a>
                
                <!-- INICIO MENU USUÁRIO LATERAL DIREITO SUPERIOR -->
                <div class="dropdown-menu pull-right userMenu" role="menu">
                
                    <div class="mobAvatar">
                        <img class="avatar mobAvatarImg" src="upload/rafael/img/rafael.jpg" alt="avatar">
                        <div class="mobAvatarName">Rafael Ruscher</div>
						<div class="pa-title">Corretor</div>
                        
                    </div>
                    
                    <!-- INICIO SUB-MENU USUÁRIO -->
                    <ul>
                    <?php include 'inc_menu_sub_usuario.php'; ?>
                    </ul>
                    <!-- FIM SUB-MENU USUÁRIO -->
                    
                </div>
                <!-- FIM MENU USUÁRIO LATERAL DIREITO SUPERIOR -->
            </div>
            <?php include 'inc_notificacao.php'; ?>
            
        </div>
		<!-- FIM DIV HEADER  -->
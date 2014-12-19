<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="author" content="WoMoz" />
		<meta name="description" content=" "/>

		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<?php wp_head(); ?>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
   		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body <?php body_class(); ?> data-spy="scroll">
  	<!-- preloader -->
  	<div id="preloader">
  		<div id="status">
  			<div class="loadicon tada infinite" data-wow-duration="8s">
  				<img src="<?php bloginfo('template_directory'); ?>/assets/img/firefox.png" />
  			</div>
  		</div>
  	</div>
  	<!-- //preloader -->
		<!-- header -->
  	<header>
  		<div id="hero">
  			<div class="container herocontent">
  				<h2 class="fadeInUp"><?php _e( 'WoMoz Brazil', 'womoz' ); ?></h2>
  				<h4 class="fadeInDown"><?php _e( 'O futuro da web está em nossas mãos - venha lutar com a gente :)', 'womoz' ); ?></h4>
  			</div>
  			<!-- BANNER -->
  			<!--img class="heroshot  bounceInUp"  src="img/hero-img.png" alt="Featured Work"-->
  		</div>
  		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  			<div class="container">
  				<div class="navbar-header">
  					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  						<span class="sr-only"><?php _e( 'Navegue por aqui', 'womoz' ); ?></span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  					</button>
  					<a class="navbar-brand" href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
  						<span class="brandname"><?php bloginfo( 'name' ) ?></span>
  					</a>
  				</div>
  				<div class="collapse navbar-collapse">
  					<!--
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#about">Sobre</a></li>
							<li><a href="#project">Projetos</a></li>
							<li><a href="#news">Novidades</a></li>
							<li><a href="#team">Grupo</a></li>
							<li><a href="#join">Faça parte</a></li>
						</ul>
  					-->
  					<?php
  					wp_nav_menu(
  						array(
  							'theme_location' => 'menu1',
  							'depth' => 2,
  							'container' => false,
  							'menu_class' => 'nav navbar-nav navbar-right',
  							'fallback_cb' => 'Odin_Bootstrap_Nav_Walker::fallback',
  							'walker' => new Odin_Bootstrap_Nav_Walker()
  						)
  					);
  					?>
  				</div>
  			</div>
  		</nav>
  	</header>
  	<!-- //header -->
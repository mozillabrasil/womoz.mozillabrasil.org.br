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

		<?php wp_head(); ?>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
   		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body <?php body_class(); ?> data-spy="scroll">
		<!-- header -->
  	<header>
  		<!-- hero -->
  		<div id="hero">
  			<div class="container herocontent">
  				<!--h2 class="fadeInUp"><?php bloginfo('name'); ?></h2>
  				<h4 class="fadeInDown"><?php bloginfo('description'); ?></h4-->
  			</div>
  		</div>
  		<!-- //hero -->
  		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  			<div class="container">
  				<div class="navbar-header">
  					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  						<span class="sr-only"><?php _e( 'Navegue por aqui', 'womoz' ); ?></span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  					</button>
  				</div>
  				<div class="collapse navbar-collapse">
  					<?php
  					if( is_front_page() ):
  					wp_nav_menu(
  						array(
  							'theme_location' => 'main-menu',
  							'depth' => 2,
  							'container' => false,
  							'menu_class' => 'nav navbar-nav navbar-right',
  							'fallback_cb' => 'Odin_Bootstrap_Nav_Walker::fallback',
  							'walker' => new Odin_Bootstrap_Nav_Walker()
  						)
  					);
  					else :
  					wp_nav_menu(
  						array(
  							'theme_location' => 'page-menu',
  							'depth' => 2,
  							'container' => false,
  							'menu_class' => 'nav navbar-nav navbar-right',
  							'fallback_cb' => 'Odin_Bootstrap_Nav_Walker::fallback',
  							'walker' => new Odin_Bootstrap_Nav_Walker()
  						)
  					);
  					endif;
  					?>
  				</div>
  			</div>
  		</nav>
  	</header>
  	<!-- //header -->
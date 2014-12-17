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
        <head profile="http://gmpg.org/xfn/11">
          <title><?php
          if ( is_single() ) { single_post_title(); }
          elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description');  }
          elseif ( is_page() ) { single_post_title(''); }
          elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s);  }
          elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
          else { bloginfo('name'); wp_title('|'); get_page_number(); }
          ?></title>
          <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
          <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
          <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
          <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
          <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
          <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
          <meta charset="utf-8">
          <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
          <meta name="viewport" content="width=device-width, initial-scale=1"  />
          <meta name="description" content=" "/>
          <meta name="author" content="WoMoz" />
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" />
          <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/skin.min.css" />
          <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Antic|Raleway:300" />
          <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
          <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
          <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
        </head>
        <body data-spy="scroll">
          <div id="preloader">
            <div id="status">
              <div class="loadicon tada infinite" data-wow-duration="8s">
                <img src="<?php bloginfo('template_directory'); ?>/img/firefox.png" />
              </div>
            </div>
          </div>
          <header>
            <div id="hero">
              <div class="container herocontent">
                <h2 class=" fadeInUp" >WoMoz Brazil</h2>
                <h4 class=" fadeInDown" >O futuro da web está em nossas mãos - venha lutar com a gente :)</h4>
              </div>
              <!-- BANNER -->
              <!--img class="heroshot  bounceInUp"  src="img/hero-img.png" alt="Featured Work"-->
            </div>
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Navegue por aqui</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/">
                    <span class="brandname"><?php bloginfo( 'name' ) ?></span>
                  </a>
                </div>
                <!--<div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-right">
                    
                    <li><a href="#about">Sobre</a></li>
                    <li><a href="#project">Projetos</a></li>
                    <li><a href="#news">Novidades</a></li>
                    <li><a href="#team">Grupo</a></li>
                    <li><a href="#join">Faça parte</a></li>
                    -->
                    <?php wp_nav_menu( array( 'theme_location' => 'menu1','container' => 'div',// wraps menu in <div> tags
                      'container_class' => 'collapse navbar-collapse', //class name of container div
                      'menu_class' => 'nav navbar-nav navbar-right'//ul class name
                      ) ); ?>
                    </ul>
                  </div>
                </div>
              </nav>
            </header>
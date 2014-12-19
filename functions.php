<?php

/**
* Sets content width.
*/
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}


/**
* Requires
*/
require_once get_template_directory() . '/core/class-bootstrap-nav.php';
require_once get_template_directory() . '/core/cpt.php';

/**
* Load os stylesheets e scripts.
*/
function womoz_enqueue_scripts() {
	$template_url = get_template_directory_uri();

	// WP Default.
	wp_enqueue_style( 'wp-style', get_stylesheet_uri(), array(), null, 'all' );

	// Bootstrap.
	wp_enqueue_style( 'bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css', array(), null, 'all' );

	// Google Fonts
	wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Antic|Raleway:300', array(), null, 'all' );

	// WoMoz.
	wp_enqueue_style( 'womoz-style', $template_url . '/assets/css/skin.min.css', array(), null, 'all' );

	// jQuery.
	wp_enqueue_script( 'jquery' );

	// Bootstrap JS.
	wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.j', array(), null, true );

	// General scripts.
	// NiceScroll.
	wp_enqueue_script( 'nicescroll', $template_url . '/assets/js/jquery.nicescroll.min.js', array(), null, true );

	// Feeds.
	wp_enqueue_script( 'feeds', $template_url . '/assets/js/jquery.feeds.min.js', array(), null, true );

	// Womoz init.
	wp_enqueue_script( 'womoz-init', $template_url . '/assets/js/fn.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'womoz_enqueue_scripts', 1 );

/**
* Features do Tema
*/
if ( ! function_exists( 'womoz_setup_features' ) ) {
	function womoz_setup_features() {
		/**
		* Add suporte à multiplas linguagens.
		*/
		load_theme_textdomain( 'womoz', get_template_directory() . '/languages' );

		/**
		* Register nav menus.
		*/
		register_nav_menus(
			array(
				'menu1' => __( 'Home', 'womoz' )
			)
		);

		/*
		* Add post_thumbnails suport.
		*/
		add_theme_support( 'post-thumbnails' );

		/**
		* Add feed link.
		*/
		add_theme_support( 'automatic-feed-links' );
	}
}
add_action( 'after_setup_theme', 'womoz_setup_features' );

/**
* Generates the title of the site optimized for SEO.
*/
function womoz_wp_title( $title, $sep ) {
	global $page, $paged;

	if ( is_feed() ) {
		return $title;
	}

	// Add the blog name.
	$title .= get_bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= ' ' . $sep . ' ' . $site_description;
	}

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 ) {
		$title .= ' ' . $sep . ' ' . sprintf( __( 'Page %s', 'womoz' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'womoz_wp_title', 10, 2 );


/**
* Pagination.
*
* @since 2.2.0
* @author WPBrasil
*
* @global array $wp_query Current WP Query.
* @global array $wp_rewrite URL rewrite rules.
*
* @param int $mid Total of items that will show along with the current page.
* @param int $end Total of items displayed for the last few pages.
* @param bool $show Show all items.
* @param mixed $query Custom query.
*
* @return string Return the pagination.
*/
function odin_pagination( $mid = 2, $end = 1, $show = false, $query = null ) {

	// Prevent show pagination number if Infinite Scroll of JetPack is active.
	if ( ! isset( $_GET[ 'infinity' ] ) ) {

		global $wp_query, $wp_rewrite;

		$total_pages = $wp_query->max_num_pages;

		if ( is_object( $query ) && null != $query ) {
			$total_pages = $query->max_num_pages;
		}

		if ( $total_pages > 1 ) {
			$current_page = max( 1, get_query_var( 'paged' ) );
			$url_base = $wp_rewrite->pagination_base;
			$big = 999999999; // Need an unlikely integer.

			// Sets the URL format.
			if ( $wp_rewrite->permalink_structure ) {
				$format = '?paged=%#%';
			} else {
				$format = '/' . $url_base . '/%#%';
			}

			// Sets the paginate_links arguments.
			$arguments = apply_filters( 'odin_pagination_args', array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => $format,
				'current' => $current_page,
				'total' => $total_pages,
				'show_all' => $show,
				'end_size' => $end,
				'mid_size' => $mid,
				'type' => 'list',
				'prev_text' => __( '&laquo; Previous', 'odin' ),
				'next_text' => __( 'Next &raquo;', 'odin' ),
				)
			);

			$pagination = '<div class="pagination-wrap">' . paginate_links( $arguments ) . '</div>';

			// Prevents duplicate bars in the middle of the url.
			if ( $url_base ) {
				$pagination = str_replace( '//' . $url_base . '/', '/' . $url_base . '/', $pagination );
			}

			return $pagination;
		}
	}
}


/**
* Cleanup wp_head().
*/
function womoz_head_cleanup() {
	// EditURI link.
	remove_action( 'wp_head', 'rsd_link' );

	// Windows live writer.
	remove_action( 'wp_head', 'wlwmanifest_link' );

	// WP version.
	remove_action( 'wp_head', 'wp_generator' );
}
add_action( 'init', 'womoz_head_cleanup' );

/**
* Remove WP version from RSS.
*/
add_filter( 'the_generator', '__return_false' );

/**
* Add custom post types count action to WP Dashboard
*/
function womoz_posttype_glance_items() {
	$glances = array();

	$args = array(
		'public' => true,
		'_builtin' => false
	);

	// Getting your custom post types
	$post_types = get_post_types($args, 'object', 'and');
	foreach ($post_types as $post_type)	{
		// Counting each post
		$num_posts = wp_count_posts($post_type->name);
		// Number format
		$num = number_format_i18n($num_posts->publish);
		// Text format
		$text = _n($post_type->labels->singular_name, $post_type->labels->name, intval($num_posts->publish));
		// If use capable to edit the post type
		if (current_user_can('edit_posts')) {
			// Show with link
			$glance = '<a class="'.$post_type->name.'-count" href="'.admin_url('edit.php?post_type='.$post_type->name).'">'.$num.' '.$text.'</a>';

		}
		else {
			// Show without link
			$glance = '<span class="'.$post_type->name.'-count">'.$num.' '.$text.'</span>';
		}
		// Save in array
		$glances[] = $glance;
	}
	return $glances;
}
add_action('dashboard_glance_items', 'womoz_posttype_glance_items');
function helf_cpts_css() {
	echo '<style type="text/css">
		#dashboard_right_now a.projetos-count:before { content: "\f499"; }
		#dashboard_right_now a.voluntarias-count:before { content: "\f307"; }
	</style>';
}
add_action('admin_head', 'helf_cpts_css');

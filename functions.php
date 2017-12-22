<?php 
	function tradelink_setup() {
	 	add_theme_support( 'post-thumbnails' );
	 }

	add_action( 'after_setup_theme', 'tradelink_setup' );

	function tradelink_styles(){

	 	// Registro de los CSS 
	 	wp_register_style( 'animate', get_template_directory_uri().'/css/animate.css', array(), '3.4');
	 	wp_register_style( 'fontawesome', get_template_directory_uri().'/css/font-awesome.min.css', array(), '3.2');
	 	wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(),'3.3.5');
	 	wp_register_style( 'icomoon', get_template_directory_uri().'/css/icomoon.css', array(),'1.0');
	 	wp_register_style( 'magnific-popup', get_template_directory_uri().'/css/magnific-popup.css', array(),'1.0' );
	 	wp_register_style( 'owl.carousel', get_template_directory_uri().'/css/owl.carousel.min.css', array(),  '1.0' );
	 	wp_register_style( 'owl.theme', get_template_directory_uri().'/css/owl.theme.default.min.css', array(),  '1.0' );
	 	wp_register_style( 'cards', get_template_directory_uri().'/css/cards.css', array(),'1.0');
	 	wp_register_style( 'styles', get_template_directory_uri().'/style.css', array(),  '1.0' );

	 	// Llamado de las hojas de estilos
	 	wp_enqueue_style( 'animate' );
	 	wp_enqueue_style( 'fontawesome' );
	 	wp_enqueue_style( 'bootstrap' );
	 	wp_enqueue_style( 'cards' );
	 	wp_enqueue_style( 'magnific-popup' );
	 	wp_enqueue_style( 'owl.carousel' );
	 	wp_enqueue_style( 'owl.theme' );
	 	wp_enqueue_style( 'styles' );

	 	// Registro de las librerias de javascript
	 	// wp_register_script( 'jQuery', get_template_directory_uri().'/js/jquery.min.js', array(), '1.0', true );
	 	wp_register_script( 'Easing', get_template_directory_uri().'/js/jquery.easing.1.3.js', array(), '1.3', true );
	 	wp_register_script( 'Bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), '1', true );
	 	wp_register_script( 'Waypoints', get_template_directory_uri().'/js/jquery.waypoints.min.js', array(), '1', true );
	 	wp_register_script( 'Carusel', get_template_directory_uri().'/js/owl.carousel.min.js', array(), '1', true );
	 	wp_register_script( 'Popup', get_template_directory_uri().'/js/jquery.magnific-popup.min.js', array(), '1.3', true );
	 	wp_register_script( 'Stellar', get_template_directory_uri().'/js/jquery.stellar.min.js', array(), '1', true );
	 	wp_register_script( 'countTo', get_template_directory_uri().'/js/jquery.countTo.js', array(), '1', true );
	 	wp_register_script( 'Wow', get_template_directory_uri().'/js/wow.min.js', array(), '1', true );
	 	wp_register_script( 'Tether', get_template_directory_uri().'/js/tether.min.js', array(), '1', true );
	 	wp_register_script( 'Main', get_template_directory_uri().'/js/main.js', array(), '1', true );

	 	wp_enqueue_script( 'jquery' );
	 	wp_enqueue_script( 'Easing' );
	 	wp_enqueue_script( 'Bootstrap' );
	 	wp_enqueue_script( 'Waypoints' );
	 	wp_enqueue_script( 'Carusel' );
	 	wp_enqueue_script( 'Popup' );
	 	wp_enqueue_script( 'Stellar' );
	 	wp_enqueue_script( 'countTo' );
	 	wp_enqueue_script( 'Wow' );
	 	wp_enqueue_script( 'Tether' );
	 	wp_enqueue_script( 'Main' );
	}

	add_action( 'wp_enqueue_scripts', 'tradelink_styles' );

	// Remover el margen de la etiqueta HTML

	add_action('get_header', 'remove_admin_login_header');
	function remove_admin_login_header() {
		remove_action('wp_head', '_admin_bar_bump_cb');
	}


	// Creación de menus 

	function tradelink_menus(){
		register_nav_menus( array(
				'header-menu' => __('Encabezado Menu','tradelink'),
				'social-menu' => __('Social Menu','tradelink')
			));
	}

	add_action( 'init', 'tradelink_menus' );
?>
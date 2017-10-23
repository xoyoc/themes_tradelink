 <?php 

 function tradelink_styles(){

 	// Registro de los CSS 
 	wp_register_style( 'animate', get_template_directory_uri().'/css/animate.css', array(), '3.4');
 	wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(),'3.3.5');
 	wp_register_style( 'icomoon', get_template_directory_uri().'/css/icomoon.css', array(),'1.0');
 	wp_register_style( 'magnific-popup', get_template_directory_uri().'/css/magnific-popup.css', array(),'1.0' );
 	wp_register_style( 'owl.carousel', get_template_directory_uri().'/css/owl.carousel.min.css', array(),  '1.0' );
 	wp_register_style( 'owl.theme', get_template_directory_uri().'/css/owl.theme.default.min.css', array(),  '1.0' );
 	wp_register_style( 'cards', get_template_directory_uri().'/css/cards.css', array(),'1.0');
 	wp_register_style( 'styles', get_template_directory_uri().'/style.css', array(),  '1.0' );

 	// Llamado de las hojas de estilos
 	wp_enqueue_style( 'animate' );
 	wp_enqueue_style( 'bootstrap' );
 	wp_enqueue_style( 'cards' );
 	wp_enqueue_style( 'magnific-popup' );
 	wp_enqueue_style( 'owl.carousel' );
 	wp_enqueue_style( 'owl.theme' );
 	wp_enqueue_style( 'styles' );
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
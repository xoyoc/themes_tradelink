 <?php 

 function tradelink_styles(){

 	wp_register_style( 'animate', get_template_directory_uri().'/css/animate.css', array(), '3.4');
 	wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(),'3.3.5');
 	wp_register_style( 'cards', get_template_directory_uri().'/css/cards.css', array(),'1.0');
 	wp_register_style( 'icomoon', get_template_directory_uri().'/css/icomoon.css', array(),'1.0');
 	wp_register_style( 'magnific-popup', get_template_directory_uri().'/css/magnific-popup.css', array(),'1.0' );
 	wp_register_style( 'owl.carousel', get_template_directory_uri().'/css/owl.carousel.min.css', array(),  '1.0' );
 	wp_register_style( 'owl.theme', get_template_directory_uri().'/css/owl.theme.dafault.min.css', array(),  '1.0' );
 	wp_register_style( 'styles', get_template_directory_uri().'/style.css', array('animate','bootstrap','cards','icomoon','magnific-popup','owl.carusel','owl.theme'),  '1.0' );


 	wp_enqueue_style( 'animate' );
 	wp_enqueue_style( 'bootstrap' );
 	wp_enqueue_style( 'cards' );
 	wp_enqueue_style( 'magnific-popup' );
 	wp_enqueue_style( 'owl.carousel' );
 	wp_enqueue_style( 'owl.theme' );
 	wp_enqueue_style( 'styles' );
 }

add_action( 'wp_enqueue_scripts', 'tradelink_styles' );

?>
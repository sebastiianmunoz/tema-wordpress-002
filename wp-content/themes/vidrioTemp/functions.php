<?php
  // REGISTRO DE ESTILOS

/* 
  
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400|Montserrat:400,700" rel="stylesheet">
	
	<!-- Animate.css -->

	<!-- Icomoon Icon Fonts-->

	<!-- Themify Icons-->
	
	<!-- Bootstrap  -->


	<!-- Owl Carousel  -->


	<!-- Theme style  -->


	<!-- Modernizr JS -->

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>

  <![endif]-->
  
   */
function register_enqueue_style() {

    $theme_data=wp_get_theme();

 /* Registrando estilos   get_theme_file_uri('/assets/stylesheets/styles.css'),*/
 wp_register_style('bootstap', get_theme_file_uri('/assets/css/bootstrap.css'),'null', '1.0', 'screen');
 wp_register_style('animate', get_theme_file_uri('/assets/css/animate.css'),'null', '1.0', 'screen');
 wp_register_style('icomoon', get_theme_file_uri('/assets/css/icomoon.css'),'null', '1.0', 'screen');
 wp_register_style('themify', get_theme_file_uri('/assets/css/themify-icons.css'),'null', '1.0', 'screen');
 wp_register_style('carousel', get_theme_file_uri('/assets/css/owl.carousel.min.css'),'null', '1.0', 'screen');
 wp_register_style('theme', get_theme_file_uri('/assets/css/owl.theme.default.min.css'),'null', '1.0', 'screen');
 wp_register_style('style', get_theme_file_uri('/assets/css/style.css'),'null', '1.0', 'screen');
 wp_register_style('modernizr', get_theme_file_uri('/assets/js/modernizr-2.6.2.min.js'),'null', '1.0', 'screen');
 wp_register_style('respond', get_theme_file_uri('/assets/js/respond.min.js'),'null', '1.0', 'screen');
 

 /* Estilos en cola */
 wp_enqueue_style('bootstap');
 wp_enqueue_style('animate');
 wp_enqueue_style('icomoon');
 wp_enqueue_style('themify');
 wp_enqueue_style('carousel');
 wp_enqueue_style('theme');
 wp_enqueue_style('style');
 wp_enqueue_style('modernizr');
 wp_enqueue_style('respond');
}


add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );


/* <!-- jQuery -->

<!-- jQuery Easing -->

<!-- Bootstrap -->

<!-- Waypoints -->
<script src=""></script>
<!-- Carousel -->
<script src=""></script>

<!-- Main -->
<script src=""></script> */


function register_enqueue_scripts() {

    $theme_data=wp_get_theme();

    wp_deregister_script('jquery');
   /*  wp_deregister_script('jquery-migrate');*/

    /* Registrando Scripts */
    wp_register_script('jQuery3', get_theme_file_uri('/assets/js/jquery.min.js'), null, '3.2.1', true);
    wp_register_script('bootstap', get_theme_file_uri('/assets/js/bootstrap.min.js'),null,'3.2.1', true);
    wp_register_script('easing', get_theme_file_uri('/assets/js/jquery.easing.1.3.js'),null,'3.2.1', true);
    wp_register_script('waypoints', get_theme_file_uri('/assets/js/jquery.waypoints.min.js'),null,'3.2.1', true);
    wp_register_script('carousel', get_theme_file_uri('/assets/js/owl.carousel.min.js'),null,'3.2.1', true);
    wp_register_script('main', get_theme_file_uri('/assets/js/main.js'),null,'3.2.1', true);
    
    
    /* Enqueue Scripts */



    wp_enqueue_script('jQuery3');
    wp_enqueue_script('bootstap');
    wp_enqueue_script('easing');
    wp_enqueue_script('waypoints');
    wp_enqueue_script('carousel');
    wp_enqueue_script('main');
     }
     add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' ); 
   
     
    // FUNCION PARA AGREGAR MENUS
     if (function_exists('register_nav_menus')) {
      register_nav_menus(array('superior' =>'Menu Principal Superior'));
     }


     // CREO UNA CLASE PARA <A> 
     add_filter( 'nav_menu_link_attributes','clase_menu_invento',10,3 );

     function clase_menu_invento($atts,$item,$args){
       $class='nav-link';
       $atts['class']=$class;
       return $atts;
     }

     // agregando imagenes destacadas 

     if ( function_exists( 'add_theme_support' ) ) {
      add_theme_support( 'post-thumbnails' );
      // set_post_thumbnail_size( 150, 150, true );
      // add_image_size( 'category-thumb', 300,9999 );
   }
  
?>
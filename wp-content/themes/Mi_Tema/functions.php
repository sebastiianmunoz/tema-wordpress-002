<?php
  // REGISTRO DE ESTILOS

function register_enqueue_style() {

    $theme_data=wp_get_theme();

 /* Registrando estilos   get_theme_file_uri('/assets/stylesheets/styles.css'),*/
 wp_register_style('bootstap', get_theme_file_uri('/assets/vendor/bootstrap/css/bootstrap.min.css'),'null', '1.0', 'screen');
 wp_register_style('miestilo', get_theme_file_uri('/assets/css/portfolio-item.css'),'null', '1.0', 'screen');

 /* Estilos en cola */
 wp_enqueue_style('bootstap');
 wp_enqueue_style('miestilo');

}


add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );


function register_enqueue_scripts() {

    $theme_data=wp_get_theme();

    wp_deregister_script('jquery');
   /*  wp_deregister_script('jquery-migrate');*/

    /* Registrando Scripts */
    wp_register_script('jQuery3', get_theme_file_uri('/assets/vendor/jquery/jquery.min.js'), null, '3.2.1', true);
    wp_register_script('bootstap', get_theme_file_uri('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'),null,'3.2.1', true);
    /* Enqueue Scripts */
    wp_enqueue_script('jQuery3');
    wp_enqueue_script('bootstap');

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
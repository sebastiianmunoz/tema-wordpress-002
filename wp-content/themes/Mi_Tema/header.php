<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
  </head>
<body>


 <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Mi primer tema</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
         data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


    <?php wp_nav_menu(array(
      'theme_location' => 'superior', 
      'container' => 'div',
      'container_class' => 'collapse navbar-collapse',
      'container_id' => 'navbarResponsive',
      'items_wrap' => '<ul class="navbar-nav ml-auto">%3$s</ul>',
      'menu_class' => 'nav-item'
    ) )	?>



</div>
</nav>




<?php if ( is_front_page() ):
 ?>
    <div class="container my-5" >
   
	<div class="row">

  <?php if ( have_posts() ) : ?> <?php while ( have_posts() ) : the_post(); ?>
  <div class="card " style="width: 17rem;">
 
  <a href="<?php the_permalink(); ?>">
  <?php
  if ( has_post_thumbnail() ) {
    the_post_thumbnail('post-thumbnails', array( 'class' => 'img-fluid card-img-top'));
}
?>
</a>
  <div class="card-body">
    <h5 class="card-title"><?php the_title(); ?></h5>
    <p class="card-text"><?php the_excerpt(); ?></p>

    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Ver Contenido</a>
  </div>
  <div class="card-footer">
<small class="text-muted"> <?php the_time(); ?> / <?php the_category(', '); ?> / <?php the_author(); ?>/ <?php the_tags(); ?> </small>

  </div>
  </div>

<?php endwhile; ?>
<?php endif; ?>
	</div>
</div>

<?php
endif; ?>
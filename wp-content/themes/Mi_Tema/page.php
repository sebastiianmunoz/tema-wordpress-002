<?php get_header() ?>

<?php if ( have_posts() ) : ?> <?php while ( have_posts() ) : the_post(); ?>
<h1>prueba</h1>
  <?php the_title(); ?>
  <?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>


<?php get_footer() ?>




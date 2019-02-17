<?php get_header() ?>

<?php if ( have_posts() ) : ?> <?php while ( have_posts() ) : the_post(); ?>

<div class="container">
<?php the_title(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>
</div>

<?php get_footer() ?>

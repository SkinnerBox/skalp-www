<?php 
/**
 * Template name: Pojedyncza strona
 */
?>

<!-- Templatka wygl�du pojedynczej strony-->

<!--Pobranie nag��wka-->
<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <!--Pobranie tre�ci strony-->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!--Wy�wietlenie tytu�u strony-->
      <?php the_title( $before = '<h3>', $after = '</h3>', $echo = true ) ?>
      <!--Wy�wietlenie tre�ci strony-->
      <?php the_content(); ?>
      <?php endwhile; ?>
      <!-- post navigation -->
      <?php else: ?>
      <!-- no posts found -->
      <?php endif; ?>
    </div>
  </div>
</div>

<!--Pobranie stopki-->
<?php get_footer(); ?>
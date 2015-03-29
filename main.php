<?php
/*
Template Name: Strona główna
*/
?>
<!-- Templatka wyglądu strony głównej-->

<!--Pobranie nagłówka-->
<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <!--Pobranie treści strony-->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!--Wyświetlenie treści strony-->
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
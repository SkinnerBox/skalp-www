<?php 
/**
 * Template name: Wpisy na blogu
 */
?>

<!-- Templatka wyglądu listy wpisów na blogu-->

<!--Pobranie nagłówka-->
<?php get_header(); ?>

<!--Treść listy wpisów z bloga-->
<div class="container">
  <div class="row">
    <div class="col-md-12">

      <!--Generowanie listy wpisów z bloga-->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
          <!--Element Bootstrap Media-->
          <div class="media">
            <!--Pobranie miniaturki wpisu-->
            <a class="pull-left" href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail( $size = 'thumbnail'); ?>
            </a>
            <!--Pobranie tytułu wpisu-->
            <div class="media-body">
              <a href="<?php the_permalink(); ?>"><h4 class="media-heading"><?php the_title(); ?></h4></a>
              <!--Wyświetlenie krótkiego opisu posta-->
              <?php the_excerpt(); ?>
              <!--Przycisk "Czytaj więcej"-->
              <a href="<?php the_permalink(); ?>" class="btn btn-default">Czytaj więcej</a>
            </div>
          </div>
          <hr>

      <?php endwhile; ?>
      <!-- post navigation -->
      <?php else: ?>
      <!-- no posts found -->
      <?php endif; ?>
		<div class="big-gap"></div>
    </div>
  </div>
</div>

<!--Pobranie stopki-->
<?php get_footer(); ?>


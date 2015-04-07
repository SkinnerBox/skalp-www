<?php
/**
 * Template Name: Strona główna
 */
?>
<!-- Templatka wyglądu strony głównej-->

<!--Pobranie nagłówka-->
<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
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
	
	<div class="big-gap"></div>
	
	<div id="partners">
		<hr/>
		<ul>
		  <li><a href="http://nan.org.pl/"><img src="<?php bloginfo('template_url'); ?>/images/NAN_logo.png"></a></li>
		  <li><a href="http://prototypy.com/"><img src="<?php bloginfo('template_url'); ?>/images/satland.png"></a></li>
		  <li><a href="http://lematika.com/"><img src="<?php bloginfo('template_url'); ?>/images/lematika_logo.png"></a></li>
		  <li><a href="http://www.farnell.com/"><img src="<?php bloginfo('template_url'); ?>/images/farnell_logo.png"></a></li>
		  <li><a href="http://www.farnell.com/"><img src="<?php bloginfo('template_url'); ?>/images/element14_logo.png"></a></li>
		  <li><a href="http://techjet.eu/"><img src="<?php bloginfo('template_url'); ?>/images/techjet_logo.png"></a></li>
		  <li><a href="http://www.forbot.pl/"><img src="<?php bloginfo('template_url'); ?>/images/forbot_logo.png"></a></li>
		  <li><a href="http://www.eti.pg.gda.pl/"><img src="<?php bloginfo('template_url'); ?>/images/eti.png"></a></li>
		</ul>
		<hr/>
	</div>
</div>

<!--Bottom-->
<section id="bottom" class="main">
    <!--Container-->
    <div class="container">

        <!--row-fluids-->
        <div class="row">

            <!--Contact Form-->
            <div class="col-md-6">
                <h4>Kontakt</h4>
                <ul class="list-unstyled address">
					<li>
                        <i class="fa fa-user"></i>
                        <strong>Prezes:</strong> Wiktor Szulfer
                    </li>
					<li>
                        <i class="fa fa-envelope"></i>
                        <strong>Email: </strong> prezes.skalp@gmail.com 
                    </li>
                    <li>
                        <i class="fa fa-user"></i>
                        <strong>Opiekun naukowy:</strong> dr Stanisław Raczyński
                    </li>
                    <li>
                        <i class="fa fa-home"></i>
						<strong>Siedziba:</strong> Politechnika Gdańska, Wydział Elektroniki, Telekomunikacji i Informatyki<br />stary budynek ETI, pokój 551
                    </li>
					<!--
                    <li>
                        <i class="fa fa-phone"></i>
                        <strong>Call:</strong> 
                    </li> -->
                </ul>
            </div>
            <!--End Contact Form-->
			
			<div class="col-md-4 col-md-offset-2">
				<h4>Stan ukończenia nowej strony:</h4>
				<div class="progress">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
						60%
					</div>
				</div>
			</div>
    </div>
    <!--/row-fluid-->
</div>
<!--/container-->

</section>
<!--/bottom-->

<!--Pobranie stopki-->
<?php get_footer(); ?>
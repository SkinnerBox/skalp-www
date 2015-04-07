<?php
/**
 * Template Name: Blog (dla zalogowanych)
 */
?>

<!--Pobranie nag��wka-->
<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-8">
			</div>
			<div class="col-md-4">
				<div id="sidebar">
					<?php   /* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
					<div class="widget">
						<h2>Domy�lny widget</h2>
						<p>Ten widget b�dzie si� pokazywa� gdy �aden inny widget nie zostanie dodany do paska.</p>
					</div> <!-- end widget -->
					<?php endif; ?>
				</div> <!-- end sidebar -->
			</div>
		</div>
	</div>
	


<!--Pobranie stopki-->
<?php get_footer(); ?>
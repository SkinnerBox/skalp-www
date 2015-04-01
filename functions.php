<?php 
/**
* Ładowanie CSS i JS
*/
if (!function_exists('bootstrapBasicEnqueueScripts')) {
	function bootstrapBasicEnqueueScripts() 
	{
		wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style('bootstrap-theme-style', get_template_directory_uri() . '/css/bootstrap-theme.min.css');
		wp_enqueue_style('fontawesome-style', get_template_directory_uri() . '/css/font-awesome.min.css');
		wp_enqueue_style('main-style', get_template_directory_uri() . '/css/main.css');

		wp_enqueue_script('jquery');
		wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/vendor/bootstrap.min.js');
		wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js');
		wp_enqueue_style('bootstrap-basic-style', get_stylesheet_uri());
	}// bootstrapBasicEnqueueScripts
}
add_action('wp_enqueue_scripts', 'bootstrapBasicEnqueueScripts');


/*
function load_styles_and_scripts() {
  
  // loading CSS
  wp_enqueue_style(
      'bootstrap-styles',
      get_template_directory_uri().'/css/bootstrap.min.css'
  );
  
  wp_enqueue_style(
      'bootstrap-responsive-styles',
      get_template_directory_uri().'/css/bootstrap-responsive.min.css'
  );

  wp_enqueue_style(
      'font-awesome',
      get_template_directory_uri().'/css/font-awesome.min.css'
    );

  wp_enqueue_style(
      'main-styles',
      get_template_directory_uri().'/style.css'
  );

  wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', false );
  wp_enqueue_script( 'jquery', get_template_directory_uri().'/js/vendor/jquery-1.9.1.min.js', array(), '1.0.0', false );
  wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/vendor/js/bootstrap.min.js', array(), '1.0.0', false );
  

}

add_action('wp_enqueue_scripts', 'load_styles_and_scripts');
*/

/**
* Uruchamianie górnego i dolnego menu na stronie
**/
register_nav_menus(array(
    'main-nav' => 'Górne menu strony'
));

register_nav_menus(array(
    'footer-nav' => 'Menu w stopce'
));

/**
* Dodawanie aktywnego elementu w menu
**/
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) || in_array('current-page-ancestor', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

?>
<?php

/**
* Ładowanie CSS i JS
*/
if (!function_exists('bootstrapBasicEnqueueScripts')) {
	function bootstrapBasicEnqueueScripts() 
	{
		wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style('bootstrap-theme-style', get_template_directory_uri() . '/css/bootstrap-theme.min.css');
		wp_enqueue_style('fontawesome-style', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
		wp_enqueue_style('main-style', get_template_directory_uri() . '/css/main.css');

		wp_enqueue_script('jquery');
		wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/vendor/bootstrap.min.js');
		wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js');
		wp_enqueue_style('bootstrap-basic-style', get_stylesheet_uri());
	}// bootstrapBasicEnqueueScripts
}
add_action('wp_enqueue_scripts', 'bootstrapBasicEnqueueScripts');

/**
* Uruchamianie górnego i dolnego menu na stronie
**/
register_nav_menus(array(
    'main-nav' => 'Górne menu strony'
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

/**
* Przesunięcie nawigacji poniżej menu wordpressa
**/
add_action('wp_head', 'mbe_wp_head');

function mbe_wp_head(){
    echo '<style>'.PHP_EOL;
    echo 'body{ padding-top: 70px !important; }'.PHP_EOL;
    // Using custom CSS class name.
    echo 'body.body-logged-in .navbar-fixed-top{ top: 28px !important; }'.PHP_EOL;
    // Using WordPress default CSS class name.
    echo 'body.logged-in .navbar-fixed-top{ top: 28px !important; }'.PHP_EOL;
    echo '</style>'.PHP_EOL;
}


/**
 * Custom dropdown menu and navbar in walker class
 */
require get_template_directory() . '/inc/BootstrapBasicMyWalkerNavMenu.php';

/**
* Przesunięcie nawigacji poniżej menu wordpressa
**/
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
));

?>
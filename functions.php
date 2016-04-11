<?php require_once 'inc/advanced-custom-fields/init.php' ?>
<?php require_once 'inc/shortcodes/shortcodes.init.php' ?>
<?php require_once 'inc/cpt.php' ?>
<?php require_once 'inc/cpf.php' ?>
<?php
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer Newsletter',
		'id'            => 'footer_newsletter',
		'before_widget' => '<div>',
		'after_widget'  => '</div>'
	));
	
	register_sidebar( array(
		'name' => 'Social Content',
		'id' => 'social_content',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function register_my_menu() {
	register_nav_menu( 'primary', 'Menu do cabeçalho' );

	// Register custom navigation walker - https://github.com/twittem/wp-bootstrap-navwalker
	require_once 'inc/wp-bootstrap-navwalker/wp_bootstrap_navwalker.php';
}
add_action( 'after_setup_theme', 'register_my_menu' );

function ceres_scripts_styles() {
	$templateDirectory = get_template_directory_uri();
	
	//Ceres
	wp_enqueue_style( 'ceres-style', $templateDirectory . '/css/style.css');
	
	//jQuery
	wp_enqueue_script( 'jquery');
	
	//Google Fonts & Font Awesome
	wp_enqueue_style( 'google-oswald', 'https://fonts.googleapis.com/css?family=Oswald:400,300');
	wp_enqueue_style( 'google-opensans', 'https://fonts.googleapis.com/css?family=Open+Sans');
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
	
	/*
	 * Bootstrap
	 * url: http://getbootstrap.com/
	 */
	$bootstrapDistDirectory = $templateDirectory . "/vendor/twitter/bootstrap/dist";
	wp_enqueue_script( 'ceres-bootstrap', $bootstrapDistDirectory . "/js/bootstrap.min.js" , array('jquery'), '3.3.6', false);
	
}
add_action( 'wp_enqueue_scripts', 'ceres_scripts_styles' );

function alter_main_query($query)
{
	if( $query->is_main_query() && !(is_admin()) )
	{
		$query->set('posts_per_page', 2);
	}
}
add_action('pre_get_posts', 'alter_main_query');

function retriveFileNameFromURL($url)
{
	$splitted = explode("/", $url);
	return array_pop($splitted);
}

add_theme_support( 'post-thumbnails' );
add_image_size( 'noticia-thumbnail', 750, 262);
add_image_size( 'pesquisador-thumbnail', 170, 170, true);
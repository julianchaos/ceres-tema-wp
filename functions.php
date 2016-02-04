<?php
function register_my_menu() {
	register_nav_menu( 'primary', 'Menu do cabeçalho' );

	// Register custom navigation walker - https://github.com/twittem/wp-bootstrap-navwalker
	require_once 'inc/wp-bootstrap-navwalker/wp_bootstrap_navwalker.php';
}
add_action( 'after_setup_theme', 'register_my_menu' );


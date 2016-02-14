<?php
$menu = wp_nav_menu(array(
	'menu' => 'primary',
	'depth' => 2,
	'container' => false,
	'menu_class' => 'nav navbar-nav',
	//process nav menu using our custom nav walker
	'walker' => new wp_bootstrap_navwalker(),
	'echo' => false
		));
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
		<meta name="viewport" content="width=device-width" />

		<?php wp_head() ?>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	</head>
	<body <?php body_class(); ?>>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<a href="javascript: void(0)" class="logo-iesp">
							<img src="<?php bloginfo('template_directory') ?>/images/general/IESP-logo.png" alt="IESP" />
						</a>
						<a href="<?php esc_url(home_url()) ?>" class="logo-ceres">
							<img src="<?php bloginfo('template_directory') ?>/images/general/CERES-logo-mobile.png" class="visible-xs" alt="CERES" />
							<img src="<?php bloginfo('template_directory') ?>/images/general/CERES-logo-tablets.png" class="hidden-xs" alt="CERES" />
						</a>
					</div>
				</div>
			</div>
			<div class="navbar-container">
				<div class="container">
					<nav class="navbar" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<button type="button" class="navbar-toggle navbar-toggle-text" data-toggle="collapse" data-target=".navbar-collapse">
								Menu
							</button>
							<?php get_search_form() ?>
						</div>
						
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="navbar-collapse">
							<?php echo $menu; ?>
						</div><!-- #navbar-collapse -->
					</nav>
				</div>
			</div>

		</header>

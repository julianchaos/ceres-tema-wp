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
					</div>
				</div>
			</div>
		</header>

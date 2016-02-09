<?php
function printFooterNewsletterForm()
{
	ob_start();
	dynamic_sidebar('footer_newsletter');
	$sidebar = ob_get_contents();
	ob_end_clean();
	
	return $sidebar;
}
add_shortcode( 'print_footer_newsletter_form', 'printFooterNewsletterForm');
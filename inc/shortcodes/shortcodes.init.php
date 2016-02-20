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

function printSidebarSocialContent()
{
	ob_start();
	dynamic_sidebar('social_content');
	$sidebar = ob_get_contents();
	ob_end_clean();
	
	return $sidebar;
}
add_shortcode('print_sidebar_social_content', 'printSidebarSocialContent');
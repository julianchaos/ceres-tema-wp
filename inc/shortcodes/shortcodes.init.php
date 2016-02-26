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
	$sidebar = "<div>";
	
	ob_start();
	dynamic_sidebar('social_content');
	$sidebar .= ob_get_contents();
	ob_end_clean();
	
	$sidebar .= printSocialContentNews();
	$sidebar .= "</div>";
	
	return $sidebar;
}
add_shortcode('print_sidebar_social_content', 'printSidebarSocialContent');

function printSocialContentNews()
{
	$query = new WP_Query(array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 3 ));

	$output = null;
	if($query->have_posts())
	{
		while($query->have_posts())
		{
			$query->the_post();

			$noticia = array(
				'date' => get_the_date('j \d\e F \d\e Y'),
				'content' => get_the_excerpt(),
				'link' => get_permalink()
			);
			
			$output .= "<div class='separator-bottom'>"
						. "<p>{$noticia['content']}</p>"
						. "<p class='date'><small class='orange'>{$noticia['date']}</small></p>"
					. "</div>";
		}
	}
	
	wp_reset_postdata();
	
	return $output;
}
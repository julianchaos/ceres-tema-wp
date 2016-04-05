<?php
$categories = get_the_category();
$thumbArray = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'noticia-thumbnail' );

$prev_post = get_adjacent_post();
$next_post = get_adjacent_post(false, '', false);
?>
<section id="noticias-content-single">
	<div class="container">
		<div class="row">
			<div id="noticias-content-main" class="col-xs-12 col-sm-8 content-main">
				<div class="noticia separator-bottom">
					<h1 class="text-uppercase"><?php the_title() ?></h1>
					<small class="orange"><?php the_date('j \d\e F \d\e Y') ?> | <a href="<?php echo get_category_link($categories[0]->term_id) ?>" class="orange dark"><?php echo $categories[0]->name ?></a></small>
<?php
	if(is_string($thumbArray[0])):
?>
					<img src="<?php echo $thumbArray[0] ?>" alt="<?php the_title() ?>" class="img-responsive center-block" />
<?php
	endif;
?>
					<?php the_content() ?>
				</div>
			
				<div class="row">
					<div class="col-xs-12 col-sm-6 previous-posts-link">
<?php 
	if(is_object($next_post)) { ?>
						<a href="<?php echo get_permalink($next_post->ID) ?>" title="<?php echo $next_post->post_title ?>" >postagens recentes</a>
<?php	
	} ?>
					</div>
					<div class="col-xs-12 col-sm-6 next-posts-link">
<?php 
	if(is_object($prev_post)) { ?>
						<a href="<?php echo get_permalink($prev_post->ID) ?>" title="<?php echo $prev_post->post_title ?>" >postagens anteriores</a>
<?php	
	} ?>
					</div>
				</div>
			</div>
			<div id="noticias-content-widget" class="social-widget col-xs-12 col-sm-4">
				<?php echo do_shortcode('[print_sidebar_social_content]') ?>
			</div>
		</div>
	</div>
</section>
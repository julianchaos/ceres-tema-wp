<?php
query_posts('posts_per_page=2');
$noticias = array();
while( have_posts() ) : the_post();
	$categories = get_the_category();
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'noticia-thumbnail' )[0];

	$noticias[] = array(
		'title' => get_the_title(),
		'date' => get_the_date('j \d\e F \d\e Y'),
		'category' => $categories[0]->name,
		'thumbnail' => $thumb,
		'content' => get_the_excerpt(),
		'link' => get_permalink()
	);
endwhile;
?>
<section id="noticias-content">
	<div class="container">
		<div class="row">
			<div id="noticias-content-main" class="col-xs-12 col-sm-8 content-main">
<?php
foreach($noticias as $noticia) :
?>
				<div class="noticia separator-bottom">
					<h1 class="text-uppercase"><?php echo $noticia['title'] ?></h1>
					<p><small class="orange"><?php echo $noticia['date'] ?> | <span class="orange dark"><?php echo $noticia['category'] ?></span></small></p>
<?php
	if(is_string($noticia['thumbnail'])):
?>
					<img src="<?php echo $noticia['thumbnail'] ?>" alt="<?php echo $noticia['title'] ?>" class="img-responsive center-block" />
<?php
	endif;
?>
					<p><?php echo $noticia['content'] ?></p>
					<p><a href="<?php echo $noticia['link'] ?>" class="orange dark">Leia mais</a></p>
				</div>
<?php
endforeach;
?>
			</div>
			<div id="noticias-content-widget" class="social-widget col-xs-12 col-sm-4">
				<?php echo do_shortcode('[print_sidebar_social_content]') ?>
			</div>
		</div>
	</div>
</section>
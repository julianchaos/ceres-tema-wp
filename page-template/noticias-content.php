<?php
$noticias = array();
while( have_posts() ) : the_post();
	$categories = get_the_category();
	$thumbArray = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'noticia-thumbnail' );
	$thumb = $thumbArray[0];

	$noticias[] = array(
		'title' => get_the_title(),
		'date' => get_the_date('j \d\e F \d\e Y'),
		'category' => $categories[0]->name,
		'category-link' => get_category_link($categories[0]->term_id),
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
					<h1 class="text-uppercase"><a href="<?php echo $noticia['link'] ?>"><?php echo $noticia['title'] ?></a></h1>
					<small class="orange"><?php echo $noticia['date'] ?> | <a href="<?php echo $noticiaItem['category-link'] ?>" class="orange dark"><?php echo $noticia['category'] ?></a></small>
<?php
	if(is_string($noticia['thumbnail'])):
?>
					<a href="<?php echo $noticia['link'] ?>"><img src="<?php echo $noticia['thumbnail'] ?>" alt="<?php echo $noticia['title'] ?>" class="img-responsive center-block" /></a>
<?php
	endif;
?>
					<p><?php echo $noticia['content'] ?></p>
					<p><a href="<?php echo $noticia['link'] ?>" class="orange dark">Leia mais</a></p>
				</div>
<?php
endforeach;
?>
				<div class="row">
					<div class="col-xs-12 col-sm-6 previous-posts-link">
						<?php echo previous_posts_link('postagens recentes'); ?>
					</div>
					<div class="col-xs-12 col-sm-6 next-posts-link">
						<?php echo next_posts_link('postagens anteriores'); ?>
					</div>
				</div>
			</div>
			<div id="noticias-content-widget" class="social-widget col-xs-12 col-sm-4">
				<?php echo do_shortcode('[print_sidebar_social_content]') ?>
			</div>
		</div>
	</div>
</section>
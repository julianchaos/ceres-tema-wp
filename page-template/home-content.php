<?php
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'posts_per_page' => 2,
	'meta_query' => array(array('key' => '_thumbnail_id')) 
);
$query = new WP_Query($args);

$noticia = null;
if($query->have_posts())
{
	$noticia = array();
	while($query->have_posts())
	{
		$query->the_post();
		$categories = get_the_category();
		$thumbArray = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'noticia-thumbnail' );
		$thumb = $thumbArray[0];

		$noticia[] = array(
			'title' => get_the_title(),
			'date' => get_the_date('j \d\e F \d\e Y'),
			'category' => $categories[0]->name,
			'category-link' => get_category_link($categories[0]->term_id),
			'thumbnail' => $thumb,
			'content' => get_the_excerpt(),
			'link' => get_permalink()
		);
	}
}
wp_reset_postdata();

?>
<section id="home-content">
	<div class="container">
		<div class="row">
			<div id="home-content-main" class="col-xs-12 col-sm-8 content-main">
				<div class="row">
					<div id="home-content-main-description" class="col-xs-12">
						<h1 class="text-uppercase"><?php the_title() ?></h1>
						<div class="text-justify">
							<?php the_content() ?>
						</div>
					</div>
					<div class="col-xs-12">
						<h1 class="separator-top">Conheça também</h1>
					</div>
<?php
foreach($noticia as $noticiaItem):
?>					<div class="col-xs-12 col-sm-6 noticia">
						<a href="<?php echo $noticiaItem['link'] ?>"><img src="<?php echo $noticiaItem['thumbnail'] ?>" alt="<?php echo $noticiaItem['title'] ?>" class="img-responsive center-block" /></a>
						<h4><a href="<?php echo $noticiaItem['link'] ?>"><?php echo $noticiaItem['title'] ?></a></h4>
						<small class="orange"><?php echo $noticiaItem['date'] ?> | <a href="<?php echo $noticiaItem['category-link'] ?>" class="orange dark"><?php echo $noticiaItem['category'] ?></a></small>
						<p><?php echo $noticiaItem['content'] ?></p>
						<p><a href="<?php echo $noticiaItem['link'] ?>" class="orange dark">Leia mais</a></p>
					</div>
<?php
endforeach;
?>
				</div>
			</div>
			<div id="home-content-widget" class="social-widget col-xs-12 col-sm-4">
				<?php echo do_shortcode('[print_sidebar_social_content]') ?>
			</div>
		</div>
	</div>
</section>
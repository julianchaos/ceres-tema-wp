<?php
$args = array(
	'post_type' => 'item-slider',
	'posts_per_page' => -1,
);
$query = new WP_Query($args);

$lista = array();
while($query->have_posts())
{
	$query->the_post();
	
	$tipoLink = get_post_meta($post->ID, 'tipo_de_link', true);
	switch ($tipoLink) {
		case 'interna':
			$link = get_permalink(get_post_meta($post->ID, 'pagina_interna', true));
			break;

		case 'externa' : 
			$link = get_post_meta($post->ID, 'pagina_externa', true);
			break;
	}
	
	$lista[] = array(
		'titulo' => get_the_title(),
		'descricao' => get_the_content(),
		'link' => $link
	);
}
?>
<section id="home-carousel">
	<div id="carousel-main" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
<?php
$index = 0;
foreach($lista as $item)
{ ?>
			<li data-target='#carousel-main' data-slide-to='<?php echo $index ?>' class="<?php echo $index === 0 ? 'active' : null ?>"></li>
	
<?php
	$index++;
}
?>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
<?php
$index = 0;
foreach($lista as $item)
{ ?>
			<div class="item <?php echo $index === 0 ? 'active' : null ?>">
				<div class="carousel-caption">
				
					<a href="<?php echo $item['link'] ?>"><h1><?php echo $item['titulo'] ?></h1> 
						<p><?php echo $item['descricao'] ?></p></a>
					
				</div>
			</div>
<?php
	$index++;
} ?>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-main" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-main" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>	
</section>
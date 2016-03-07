<?php
$args = array(
	'post_type' => 'dado',
	'posts_per_page' => -1
);
$query = new WP_Query($args);

$lista = array();
while($query->have_posts())
{
	$query->the_post();
	
	$arquivoDat = get_post_meta($post->ID, 'arquivo_dat', true);
	
	$lista[] = array(
		'titulo' => get_the_title(),
		'descricao' => get_the_content(),
		'arquivo' => $arquivoDat
	);
}
?>
<section id="dados-content-list" class='interna-content-list'>
	<div class="container">
		<div class="row">
<?php
foreach($lista as $item)
{
?>
			<div class="col-xs-12 dado item">
				<div class="separator-bottom">
					<div class="dado-content item-content">
						<h4><?php echo $item['titulo'] ?></h4>
						<?php echo $item['descricao'] ?>
						<a href="<?php echo $item['arquivo'] ?>" class="download" download><i class="fa fa-download"></i> Baixar arquivo .dat</a>
					</div>
				</div>
			</div>
<?php
}
?>
		</div>
	</div>
</section>
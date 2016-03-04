<?php
$args = array(
	'post_type' => 'publicacao',
	'posts_per_page' => -1,
	'meta_key' => 'categoria',
	'meta_value' => $categoria
);
$query = new WP_Query($args);

$lista = array();
while($query->have_posts())
{
	$query->the_post();
	
	$publicacao = get_post_meta($post->ID, 'arquivo_da_publicacao', true);
	
	$lista[] = array(
		'titulo' => get_the_title(),
		'descricao' => get_the_content(),
		'arquivo' => $publicacao
	);
}
?>
<section id="pesquisadores-content-list" class='interna-content-list'>
	<div class="container">
		<div class="row">
<?php
foreach($lista as $item)
{
?>
			<div class="col-xs-12 publicacao item">
				<div class="separator-bottom">
					<div class="publicacao-content item-content">
						<h4><?php echo $item['titulo'] ?></h4>
						<?php echo $item['descricao'] ?>
						<a href="<?php echo $item['arquivo'] ?>" class="download" download>Baixar arquivo</a>
					</div>
				</div>
			</div>
<?php
}
?>
		</div>
	</div>
</section>
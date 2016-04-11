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
	
	if(get_field('tipo_arquivo') === 'local')
	{
		$objeto = get_field('arquivo_local');
		
		$url = $objeto['url'];
		$name = retriveFileNameFromURL($url);
	}
	else
	{
		$name = get_field('titulo_arquivo_remoto');
		$url = get_field('url_arquivo_remoto');
	}
	
	
	$arquivo = array(
		'tipo' => get_field('tipo_arquivo'),
		'url' => $url,
		'name' => $name
	);
	
	$lista[] = array(
		'titulo' => get_the_title(),
		'descricao' => get_the_content(),
		'arquivo' => $arquivo
	);
}
?>
<section id="publicacoes-content-list" class='interna-content-list'>
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
						<a href="<?php echo $item['arquivo']['url'] ?>" class="download" <?php echo $item['arquivo']['tipo'] === 'local' ? 'download' : "target='_blank'" ?>><i class="fa fa-<?php echo ($item['arquivo']['tipo'] === 'local' ? 'download' : 'external-link') ?>"></i><?php echo $item['arquivo']['tipo'] === 'local' ? 'Baixar' : 'Acessar' ?> <?php echo $item['arquivo']['name'] ?></a>
					</div>
				</div>
			</div>
<?php
}
?>
		</div>
	</div>
</section>
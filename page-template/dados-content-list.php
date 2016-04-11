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
	
	$arquivos = array();
	
	if(have_rows('arquivos_locais'))
	{
		while( have_rows('arquivos_locais'))
		{
			the_row();
			
			$local = get_sub_field('arquivo_local');
			$name = retriveFileNameFromURL($local['url']);
			
			$arquivos[] = array(
				'tipo' => 'local',
				'url' => $local['url'],
				'name' => $name
			);
		}
	}
	
	if(have_rows('arquivos_remotos'))
	{
		while( have_rows('arquivos_remotos') )
		{
			the_row();
			
			$arquivos[] = array(
				'tipo' => 'remoto',
				'url' => get_sub_field('url'),
				'name' => get_sub_field('titulo')
			);
		}
	}
	
	$lista[] = array(
		'titulo' => get_the_title(),
		'descricao' => get_the_content(),
		'arquivos' => $arquivos
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
<?php
	foreach($item['arquivos'] as $arquivo)
	{
?>
						<a href="<?php echo $arquivo['url'] ?>" class="download" <?php echo $arquivo['tipo'] === 'local' ? 'download' : "target='_blank'" ?>><i class="fa fa-<?php echo ($arquivo['tipo'] === 'local' ? 'download' : 'external-link') ?>"></i><?php echo $arquivo['tipo'] === 'local' ? 'Baixar' : 'Acessar' ?> <?php echo $arquivo['name'] ?></a>
<?php
	}
?>
					</div>
				</div>
			</div>
<?php
}
?>
		</div>
	</div>
</section>
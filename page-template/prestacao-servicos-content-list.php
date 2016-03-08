<?php
$args = array(
	'post_type' => 'prestacao-servico',
	'posts_per_page' => -1,
	'meta_key' => 'categoria',
	'meta_value' => $categoria
);
$query = new WP_Query($args);

$lista = array();
while($query->have_posts())
{
	$query->the_post();
	
	$endereco = get_post_meta($post->ID, 'endereco', true);
	$data = get_post_meta($post->ID, 'data', true);
	$valor = get_post_meta($post->ID, 'valor', true);
	$telefone = get_post_meta($post->ID, 'telefone', true);
	$observacao = get_post_meta($post->ID, 'observacao', true);
	
	$lista[] = array(
		'titulo' => get_the_title(),
		'descricao' => get_the_content(),
		
		'endereco' => $endereco,
		'data' => $data,
		'valor' => $valor,
		'telefone' => $telefone,
		'observacao' => $observacao
	);
}
?>
<section id="prestacao-servicos-content-list" class='interna-content-list'>
	<div class="container">
		<div class="row">
<?php
foreach($lista as $item)
{
?>
			<div class="col-xs-12 prestacao-servico item">
				<div class="separator-bottom">
					<div class="prestacao-servico-content item-content">
						<h4><?php echo $item['titulo'] ?></h4>
						<p><?php echo $item['descricao'] ?></p>
						<p><i class="fa fa-map-marker"></i><?php echo $item['endereco'] ?></p>
						<p><i class="fa fa-calendar"></i><?php echo $item['data'] ?></p>
						<p><i class="fa fa-money"></i><?php echo $item['valor'] ?></p>
						<p><i class="fa fa-phone"></i><?php echo $item['telefone'] ?></p>
						<p><?php echo $item['observacao'] ?></p>
					</div>
				</div>
			</div>
<?php
}
?>
		</div>
	</div>
</section>
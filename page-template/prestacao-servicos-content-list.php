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
	
	$lista[] = array(
		'titulo' => get_the_title(),
		'descricao' => get_the_content()
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
						<?php echo $item['descricao'] ?>
					</div>
				</div>
			</div>
<?php
}
?>
		</div>
	</div>
</section>
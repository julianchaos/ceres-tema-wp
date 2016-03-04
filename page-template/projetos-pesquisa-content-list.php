<?php
$args = array(
	'post_type' => 'projeto-pesquisa',
	'posts_per_page' => -1
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
<section id="projetos-pesquisa-content-list">
	<div class="container">
		<div class="row">
<?php
foreach($lista as $item)
{
?>
			<div class="col-xs-12 projeto-pesquisa">
				<div class="separator-bottom">
					<div class="projeto-pesquisa-content">
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
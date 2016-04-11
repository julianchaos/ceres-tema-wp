<?php
$args = array(
	'post_type' => 'pesquisador',
	'posts_per_page' => -1,
	'meta_key' => 'categoria',
	'meta_value' => $tipoPesquisador
);
$query = new WP_Query($args);

$lista = array();
while($query->have_posts())
{
	$query->the_post();
	
	$templateURI = get_template_directory_uri();
	
	$thumbArray = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'pesquisador-thumbnail' );
	$thumb = (is_array($thumbArray) ? $thumbArray[0] : $templateURI . '/images/pesquisadores/blank-picture.png');
	$linkedin = get_post_meta($post->ID, 'linkedin', true);
	$cur_lattes = get_post_meta($post->ID, 'curriculo_lattes', true);
	$email = get_post_meta($post->ID, 'email', true);
	$telefone = get_post_meta($post->ID, 'telefone', true);
	
	$lista[] = array(
		'thumb' => $thumb,
		'titulo' => get_the_title(),
		'descricao' => "<p>" . get_the_content() . "</p>",
		'linkedin' => (strlen($linkedin) > 0 ? "<a href='$linkedin' class='linkedin'><img src='{$templateURI}/images/pesquisadores/linkedin.png' alt='' ></a>" : null),
		'curriculo-lattes' => (strlen($cur_lattes) > 0 ? "<a href='$cur_lattes' class='curriculo-lattes'><img src='{$templateURI}/images/pesquisadores/curriculo-lattes.png' alt='' ></a>" : null),
		'email' => (strlen($email) > 0 ? "<p><i class='fa fa-envelope'></i>{$email}</p>" : null),
		'telefone' => (strlen($telefone) > 0 ? "<p><i class='fa fa-phone'></i>{$telefone}</p>" : null)
				
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
			<div class="col-xs-12 pesquisador item">
				<div class="separator-bottom">
					<div class="pesquisador-foto">
						<img src="<?php echo $item['thumb'] ?>" alt="<?php echo $item['titulo'] ?>" />
					</div>
					<div class="pesquisador-content item-content">
						<h4><?php echo $item['titulo'] ?><?php if(!is_null($item['linkedin']) || !is_null($item['curriculo-lattes'])) {
							echo " | ";
							echo $item['linkedin'];
							echo $item['curriculo-lattes'];
						} ?></h4>
						<?php echo $item['descricao'] ?>
						<?php echo $item['telefone'] ?>
						<?php echo $item['email'] ?>
					</div>
				</div>
			</div>
<?php
}
?>
		</div>
	</div>
</section>
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
					<div class="col-xs-12 col-sm-6 noticia">
						<img src="<?php bloginfo('template_directory') ?>/images/home/foto-noticia.png" alt="Notícia" class="img-responsive center-block" />
						<h4>Nullam non efficitur erat. Cras non nisi vitae ante ornare suscipit.</h4>
						<p><small class="orange">11 de outubro de 2015 | <span class="orange dark">Projetos</span></small></p>
						<p>Fusce venenatis venenatis vestibulum. Donec eu molestie enim. Nullam non efficitur erat. Cras non nisi vitae ante ornare suscipit sed a dolor. Sed dignissim risus leo, id convallis erat blandit vitae.</p>
						<p><a href="javascript: void(0)" class="orange dark">Leia mais</a></p>
					</div>
					<div class="col-xs-12 col-sm-6 noticia">
						<img src="<?php bloginfo('template_directory') ?>/images/home/foto-noticia.png" alt="Notícia" class="img-responsive center-block" />
						<h4>Nullam non efficitur erat. Cras non nisi vitae ante ornare suscipit.</h4>
						<p><small class="orange">11 de outubro de 2015 | <span class="orange dark">Projetos</span></small></p>
						<p>Fusce venenatis venenatis vestibulum. Donec eu molestie enim. Nullam non efficitur erat. Cras non nisi vitae ante ornare suscipit sed a dolor. Sed dignissim risus leo, id convallis erat blandit vitae.</p>
					</div>
				</div>
			</div>
			<div id="home-content-widget" class="social-widget col-xs-12 col-sm-4">
				<?php echo do_shortcode('[print_sidebar_social_content]') ?>
			</div>
		</div>
	</div>
</section>
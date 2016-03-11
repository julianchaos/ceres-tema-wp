<section id="contato-mapa" class="interna-content">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<p>Prefere nos fazer uma visita?</p>
			</div>
			<div class="col-xs-12">
				<a href="">
					<img src="<?php bloginfo('template_directory') ?>/images/contato/mapa.png" class="img-responsive" alt="" />
				</a>
				<div class="mapa-content">
					<p class="endereco">
						<i class="fa fa-map-marker"></i> <?php the_field('endereco') ?>
					</p>
					<p class="telefone">
						<i class="fa fa-phone"></i> Tel.: <?php the_field('telefone') ?>
					</p>
					<p class="fax">
						<i class="fa fa-fax"></i> Fax: <?php the_field('fax') ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
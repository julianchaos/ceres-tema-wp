		<footer>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<h3>Categorias</h3>
						<div id="footer-categorias">
							<p><a href="javascript: void(0)">Notícias</a><a href="javascript: void(0)">20</a></p>
							<p><a href="javascript: void(0)">Projetos</a><a href="javascript: void(0)">20</a></p>
							<p><a href="javascript: void(0)">Publicações</a><a href="javascript: void(0)">20</a></p>
							<p><a href="javascript: void(0)">Dados</a><a href="javascript: void(0)">20</a></p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<h3>Newsletter</h3>
						<div id="footer-newsletter">
							<p>Cadastre seu e-mail para receber informativos do CERES.</p>
							<?php echo do_shortcode('[print_footer_newsletter_form]') ?>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<div id="footer-info">
							<img src="<?php bloginfo('template_directory') ?>/images/general/footer-logo-mobile.png" alt="" class="visible-xs visible-sm" />
							<img src="<?php bloginfo('template_directory') ?>/images/general/footer-logo-md.png" alt="" class="visible-md " />
							<img src="<?php bloginfo('template_directory') ?>/images/general/footer-logo-lg.png" alt="" class="visible-lg" />
							<p>
								CERES/IESP-UERJ<br />
								Centro para o Estudo da Riqueza e da Estratificação Social<br />
							</p>
							<p>
								Contato: <br />
								Tel.: +55 (21) 2537-8020
							</p>
						</div>
					</div>
				</div>
			</div>
			<div id="copyright">
				<p>Copyright © 2015 CERES. Todos os direitos reservados.</p>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>

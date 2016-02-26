<section id="general-header">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="text-uppercase"><?php if ( !isset($title) || ($title === '')){ wp_title(''); } else {echo $title;} ?></h1>
			</div>
		</div>
	</div>
</section>
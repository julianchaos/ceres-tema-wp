<form action="<?php esc_url(home_url()) ?>" method="get" accept-charset="utf-8" id="searchform" class="searchform" role="search">
	<div>
		<input type="submit" id="searchsubmit" class="searchsubmit" value="" />
		<input type="text" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="Busca" />
	</div>
</form>
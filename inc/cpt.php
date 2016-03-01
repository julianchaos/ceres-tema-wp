<?php

add_action('init', 'cptui_register_my_cpts_pesquisador');

function cptui_register_my_cpts_pesquisador()
{
	$labels = array(
		"name" => "Pesquisadores",
		"singular_name" => "Pesquisador",
	);

	$args = array(
		"labels" => $labels,
		"description" => "Listagem de pesquisadores e assistentes",
		"public" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array("slug" => "pesquisador", "with_front" => true),
		"query_var" => true,
		"supports" => array("title", "editor", "thumbnail"),
	);
	register_post_type("pesquisador", $args);

// End of cptui_register_my_cpts_pesquisador()
}

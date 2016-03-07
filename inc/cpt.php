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

add_action( 'init', 'cptui_register_my_cpts_projeto_pesquisa' );
function cptui_register_my_cpts_projeto_pesquisa()
{
	$labels = array(
		"name" => "Projetos de Pesquisa",
		"singular_name" => "Projeto de Pesquisa",
		);

	$args = array(
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "projeto-pesquisa", "with_front" => true ),
		"query_var" => true,
				
		"supports" => array( "title", "editor" ),				
	);
	register_post_type( "projeto-pesquisa", $args );

// End of cptui_register_my_cpts_projeto_pesquisa()
}

add_action( 'init', 'cptui_register_my_cpts_publicacao' );
function cptui_register_my_cpts_publicacao()
{
	$labels = array(
		"name" => "Publicações",
		"singular_name" => "Publicação",
		);

	$args = array(
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "publicacao", "with_front" => true ),
		"query_var" => true,
				
		"supports" => array( "title", "editor" ),				
	);
	register_post_type( "publicacao", $args );

// End of cptui_register_my_cpts_publicacao()
}

add_action( 'init', 'cptui_register_my_cpts_dado' );
function cptui_register_my_cpts_dado()
{
	$labels = array(
		"name" => "Dados",
		"singular_name" => "Dado",
		);

	$args = array(
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "dado", "with_front" => true ),
		"query_var" => true,
				
		"supports" => array( "title", "editor" ),				
	);
	register_post_type( "dado", $args );

// End of cptui_register_my_cpts_publicacao()
}
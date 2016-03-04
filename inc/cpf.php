<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_pesquisadores',
		'title' => 'Pesquisadores',
		'fields' => array (
			array (
				'key' => 'field_56d4ee25b4647',
				'label' => 'Categoria',
				'name' => 'categoria',
				'type' => 'select',
				'choices' => array (
					'pesquisador' => 'Pesquisador',
					'assistente' => 'Pesquisador Assistente',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_56d4ee53b4648',
				'label' => 'LinkedIn',
				'name' => 'linkedin',
				'type' => 'text',
				'instructions' => 'Link para LinkedIn do pesquisador',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_56d4ee74b4649',
				'label' => 'Curriculo Lattes',
				'name' => 'curriculo_lattes',
				'type' => 'text',
				'instructions' => 'Link para Currículo Lattes do pesquisador',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'pesquisador',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_publicacoes',
		'title' => 'Publicações',
		'fields' => array (
			array (
				'key' => 'field_56d8ed96d5dfb',
				'label' => 'Categoria',
				'name' => 'categoria',
				'type' => 'select',
				'required' => 1,
				'choices' => array (
					'livros' => 'Livros',
					'artigos' => 'Artigos',
					'dissertacoes' => 'Dissertações',
					'teses' => 'Teses',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_56d8edd5d5dfc',
				'label' => 'Arquivo da Publicação',
				'name' => 'arquivo_da_publicacao',
				'type' => 'file',
				'required' => 1,
				'save_format' => 'url',
				'library' => 'uploadedTo',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'publicacao',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

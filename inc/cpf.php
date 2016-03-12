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

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_dados',
		'title' => 'Dados',
		'fields' => array (
			array (
				'key' => 'dados_arquivo_dat',
				'label' => 'Arquivo .dat',
				'name' => 'arquivo_dat',
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
					'value' => 'dado',
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
		'id' => 'acf_prestacoes-de-servicos',
		'title' => 'Prestações de Serviços',
		'fields' => array (
			array (
				'key' => 'field_56ddfcb78e57e',
				'label' => 'Categoria',
				'name' => 'categoria',
				'type' => 'select',
				'choices' => array (
					'curso' => 'Curso',
					'consultoria' => 'Consultoria',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_56ddfcdd8e57f',
				'label' => 'Endereço',
				'name' => 'endereco',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_56ddfce58e580',
				'label' => 'Data',
				'name' => 'data',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_56ddfcf38e581',
				'label' => 'Valor',
				'name' => 'valor',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_56ddfcfe8e582',
				'label' => 'Telefone',
				'name' => 'telefone',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_56ddfd108e583',
				'label' => 'Observação',
				'name' => 'observacao',
				'type' => 'text',
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
					'value' => 'prestacao-servico',
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
		'id' => 'acf_formulario-de-contato',
		'title' => 'Formulário de contato',
		'fields' => array (
			array (
				'key' => 'field_56e4215b7cbc2',
				'label' => 'Formulário de contato',
				'name' => 'formulario_de_contato',
				'type' => 'acf_cf7',
				'required' => 1,
				'disable' => array (
					0 => 0,
				),
				'allow_null' => 0,
				'multiple' => 0,
				'hide_disabled' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-template/page_contato.php',
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
		'id' => 'acf_contato',
		'title' => 'Contato',
		'fields' => array (
			array (
				'key' => 'field_56e2dd848ce7d',
				'label' => 'Endereço',
				'name' => 'endereco',
				'type' => 'textarea',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_56e2dd9e8ce7e',
				'label' => 'Telefone',
				'name' => 'telefone',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_56e2dda98ce7f',
				'label' => 'Fax',
				'name' => 'fax',
				'type' => 'text',
				'required' => 1,
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
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-template/page_contato.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
			),
		),
		'menu_order' => 0,
	));
}


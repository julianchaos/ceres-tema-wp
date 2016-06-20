<?php
//Sliders da Home
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_slider-da-home',
		'title' => 'Slider da Home',
		'fields' => array (
			array (
				'key' => 'field_57683ac2af801',
				'label' => 'Tipo de Link',
				'name' => 'tipo_de_link',
				'type' => 'select',
				'choices' => array (
					'interna' => 'Página interna',
					'externa' => 'Página externa',
					'' => '',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_57683af7af802',
				'label' => 'Página Externa',
				'name' => 'pagina_externa',
				'type' => 'text',
				'instructions' => 'URL da página à qual o slide vai ser direcionado',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_57683ac2af801',
							'operator' => '==',
							'value' => 'externa',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57683bdaaf803',
				'label' => 'Página Interna',
				'name' => 'pagina_interna',
				'type' => 'page_link',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_57683ac2af801',
							'operator' => '==',
							'value' => 'interna',
						),
					),
					'allorany' => 'all',
				),
				'post_type' => array (
					0 => 'page',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'item-slider',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'permalink',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'discussion',
				4 => 'comments',
				5 => 'slug',
				6 => 'author',
				7 => 'format',
				8 => 'featured_image',
				9 => 'categories',
				10 => 'tags',
				11 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
}

//Pesquisadores
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
					'associado' => 'Associados'
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
			array (
				'key' => 'field_pesquisador_email',
				'label' => 'Email',
				'name' => 'email',
				'type' => 'text',
				'instructions' => 'Email de contato do pesquisador',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_pesquisador_telefone',
				'label' => 'Telefone',
				'name' => 'telefone',
				'type' => 'text',
				'instructions' => 'Telefone de contato do pesquisador',
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

//Publicações
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
					'dissertacoes' => 'Dissertações e Teses',
//					'teses' => 'Teses',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_570bf27efd847',
				'label' => 'Tipo de arquivo',
				'name' => 'tipo_arquivo',
				'type' => 'select',
				'instructions' => 'Selecione o tipo de arquivo',
				'required' => 1,
				'choices' => array (
					'local' => 'Arquivo local',
					'remoto' => 'Arquivo remoto',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_570bf2b2fd848',
				'label' => 'Arquivo local',
				'name' => 'arquivo_local',
				'type' => 'file',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_570bf27efd847',
							'operator' => '==',
							'value' => 'local',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'object',
				'library' => 'all',
			),
			array (
				'key' => 'field_570bf2defd849',
				'label' => 'Título arquivo remoto',
				'name' => 'titulo_arquivo_remoto',
				'type' => 'text',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_570bf27efd847',
							'operator' => '==',
							'value' => 'remoto',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_570bf2f4fd84a',
				'label' => 'URL arquivo remoto',
				'name' => 'url_arquivo_remoto',
				'type' => 'text',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_570bf27efd847',
							'operator' => '==',
							'value' => 'remoto',
						),
					),
					'allorany' => 'all',
				),
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

//Dados
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_dados',
		'title' => 'Dados',
		'fields' => array (
			array(
				'key' => 'field_dados_arquivos_remoto',
				'label' => 'Arquivos remotos',
				'name' => 'arquivos_remotos',
				'type' => 'repeater',
				'sub_fields' => array (
					array(
						'key' => 'field_arquivo_local_titulo',
						'label' => 'Título',
						'name' => 'titulo',
						'type' => 'text',
						'instructions' => '',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_570bcbbde274c',
						'label' => 'URL',
						'name' => 'url',
						'type' => 'text',
						'instructions' => 'Endereço do arquivo remoto',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => 0,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Adicionar arquivo remoto',
			),
			array (
				'key' => 'field_570bc940e2749',
				'label' => 'Arquivos locais',
				'name' => 'arquivos_locais',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_570bcb83e274b',
						'label' => 'Arquivo local',
						'name' => 'arquivo_local',
						'type' => 'file',
						'instructions' => '',
						'column_width' => '',
						'save_format' => 'object',
						'library' => 'uploadedTo',
					),
				),
				'row_min' => 0,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Adicionar arquivo',
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

//Prestações de Serviços
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

//Formulário de contato
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

//Contato
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


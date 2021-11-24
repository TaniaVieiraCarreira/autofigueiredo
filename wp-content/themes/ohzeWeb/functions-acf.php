<?php
/*

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_619a7b83ad539',
	'title' => 'Contact',
	'fields' => array(
		array(
			'key' => 'field_619a7bed9eeaf',
			'label' => 'Mensagem de BoasVindas',
			'name' => 'mensagem_de_boasvindas',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_619a7c7f9eeb0',
			'label' => 'Nome',
			'name' => 'nome',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_619a7c9c9eeb1',
			'label' => 'Morada',
			'name' => 'morada',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
		array(
			'key' => 'field_619a7cc49eeb2',
			'label' => 'Google Maps Iframe',
			'name' => '_wysiwyg_',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-contact.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
	),
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
));

acf_add_local_field_group(array(
	'key' => 'group_619a7d7430344',
	'title' => 'Header - Equipamento Principal',
	'fields' => array(
		array(
			'key' => 'field_619a7def54ef7',
			'label' => 'Data de lancamento',
			'name' => 'data',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'features',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_619a7f4354ef8',
			'label' => 'Quilómetros',
			'name' => 'quilometros',
			'type' => 'number',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'features',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => 'Km',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_619a7f6e54ef9',
			'label' => 'Potência',
			'name' => 'potencia',
			'type' => 'number',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'features',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => 'CC',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_619a7f9254efa',
			'label' => 'Transmissão',
			'name' => 'transmissao',
			'type' => 'select',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'features',
				'id' => '',
			),
			'choices' => array(
				'manual' => 'manual',
				'automático' => 'automático',
			),
			'default_value' => false,
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 1,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array(
			'key' => 'field_619a7ff454efb',
			'label' => 'Combustível',
			'name' => 'combustivel',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'features',
				'id' => '',
			),
			'choices' => array(
				'Gasóleo' => 'Gasóleo',
				'Gasolina' => 'Gasolina',
				'Eléctrico' => 'Eléctrico',
				'GPL' => 'GPL',
				'Híbrido' => 'Híbrido',
			),
			'default_value' => false,
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 1,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array(
			'key' => 'field_619e331b29c57',
			'label' => 'Imagem do Carro',
			'name' => 'imagem_do_carro',
			'type' => 'image',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'car_picture',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_619a80bf54efc',
			'label' => 'Segmento',
			'name' => 'segmento',
			'type' => 'select',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'features',
				'id' => '',
			),
			'choices' => array(
				'Cabrio' => 'Cabrio',
				'Carrinha' => 'Carrinha',
				'Citadino' => 'Citadino',
				'Coupé' => 'Coupé',
				'Monovolume' => 'Monovolume',
				'Pequeno citadino' => 'Pequeno citadino',
				'Sidan' => 'Sidan',
				'SUV / TT' => 'SUV / TT',
				'Utilitário' => 'Utilitário',
			),
			'default_value' => false,
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 1,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array(
			'key' => 'field_619a9fa654efd',
			'label' => 'Lugares',
			'name' => 'lugares',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'features',
				'id' => '',
			),
			'choices' => array(
				'2 Lugares' => '2 Lugares',
				'3 Lugares' => '3 Lugares',
				'4 Lugares' => '4 Lugares',
				'5 Lugares' => '5 Lugares',
				'6 Lugares' => '6 Lugares',
				'7 Lugares' => '7 Lugares',
				'8 Lugares' => '8 Lugares',
				'9 Lugares' => '9 Lugares',
			),
			'default_value' => false,
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 1,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array(
			'key' => 'field_619aa06654efe',
			'label' => 'Portas',
			'name' => 'portas',
			'type' => 'select',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'features',
				'id' => '',
			),
			'choices' => array(
				'2/3 Portas' => '2/3 Portas',
				'5 Portas' => '5 Portas',
				'7 Portas' => '7 Portas',
			),
			'default_value' => false,
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 1,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array(
			'key' => 'field_619aa09654eff',
			'label' => 'Cor Exterior',
			'name' => 'cor',
			'type' => 'text',
			'instructions' => 'Cor principal:
Cor secundária:',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'features',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_619aa0d054f00',
			'label' => 'Acabamento interior',
			'name' => 'acabamento_interior',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'features',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_619aa0eb54f01',
			'label' => 'Condição',
			'name' => 'condicao',
			'type' => 'select',
			'instructions' => 'Usado
Semi-novo
Novo',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'features',
				'id' => '',
			),
			'choices' => array(
			),
			'default_value' => false,
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 1,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array(
			'key' => 'field_619aa19554f04',
			'label' => 'Cilindrada',
			'name' => 'cilindrada',
			'type' => 'number',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => 'Cv',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_619aa13254f02',
			'label' => 'Origem',
			'name' => 'origem',
			'type' => 'select',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'features',
				'id' => '',
			),
			'choices' => array(
				'Nacional' => 'Nacional',
				'Importado' => 'Importado',
			),
			'default_value' => false,
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 1,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array(
			'key' => 'field_619aa16554f03',
			'label' => 'Garantia',
			'name' => 'garantia',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'features',
				'id' => '',
			),
			'choices' => array(
				'6 Meses' => '6 Meses',
				'12 Meses' => '12 Meses',
				'24 Meses' => '24 Meses',
			),
			'default_value' => false,
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 1,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array(
			'key' => 'field_619aa25ac7149',
			'label' => 'CO2',
			'name' => 'co2',
			'type' => 'number',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => 'g/Km',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_619aa283c714a',
			'label' => 'Matrícula',
			'name' => 'matricula',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'xx-xx-xx',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
));

acf_add_local_field_group(array(
	'key' => 'group_619a771586883',
	'title' => 'Home',
	'fields' => array(
		array(
			'key' => 'field_619a77204ca1a',
			'label' => 'Titulo da Campanha',
			'name' => 'campanha',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_619a7923010a0',
			'label' => 'Descrição da Campanha',
			'name' => 'descricao_da_campanha',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
		array(
			'key' => 'field_619a7a40a1c91',
			'label' => 'Carro em destaque',
			'name' => 'carro_em_destaque',
			'type' => 'post_object',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'post',
			),
			'taxonomy' => '',
			'allow_null' => 1,
			'multiple' => 0,
			'return_format' => 'object',
			'ui' => 1,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '7',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
	),
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
));

endif;

*/
?>
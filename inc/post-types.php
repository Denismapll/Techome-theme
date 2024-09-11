<?php
function create_custom_post_types()
{
  $post_types = [
    'C4' => 'C.4',
    'C5' => 'C.5',
    'C6' => 'C.6',
    'C7' => 'C.7',
    'C8' => 'C.8',
    'C12' => 'C.12',
    'S8' => 'S.8',
    'S9' => 'S.9',
    'S10' => 'S.10',
    'S12' => 'S.12',
    'S15' => 'S.15',
    'S18' => 'S.18',
  ];

  foreach ($post_types as $slug => $name) {
    register_post_type($slug, [
      'labels' => [
        'name' => $name,
        'singular_name' => $name,
      ],
      'public' => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-admin-home',
      'supports' => ['title'],
      'rewrite' => ['slug' => $slug],
    ]);
  }
}
add_action('init', 'create_custom_post_types');

// Adicionando Plantas e Fachadas
function add_custom_meta_boxes()
{
  $post_types = ['C4', 'C5', 'C6', 'C7', 'C8', 'C12', 'S8', 'S9', 'S10', 'S12', 'S15', 'S18'];

  foreach ($post_types as $post_type) {
    $meta_box = new Odin_Metabox(
      'plantas_e_fachadas', // ID único
      'Plantas e Fachadas', // Título da metabox
      $post_type, // Custom post type ao qual a metabox será adicionada
      'normal', // Contexto (normal, side, etc.)
      'high' // Prioridade
    );

    $meta_box->set_fields(
      array(
        array(
          'id'   => 'right-side1', // Required
          'label' => __('Barra Lateral Direita', 'odin'), // Required
          'type' => 'title', // Required
        ),
        array(
          'id'          => 'metros_casa', // Obrigatório
          'label'       => __('Metros da Casa', 'odin'), // Obrigatório
          'type'        => 'text', // Obrigatório
          'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
            'placeholder' => __('Metros da casa aqui..')
          ),
          'description' => __('Exemplo: 153m2 a 158m2', 'odin'), // Opcional
        ),
        array(
          'id'          => 'valor_casa', // Obrigatório
          'label'       => __('Valor casa (a partir de ...)', 'odin'), // Obrigatório
          'type'        => 'text', // Obrigatório
          'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
            'placeholder' => __('Valor da casa')
          ),
          'description' => __('Exemplo: 15500,00', 'odin'), // Opcional
        ),
        array(
          'id'          => 'lote_minimo', // Obrigatório
          'label'       => __('Lote mínimo', 'odin'), // Obrigatório
          'type'        => 'text', // Obrigatório
          'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
            'placeholder' => __('Lote minimo da exigido')
          ),
          'description' => __('Exemplo: 10 x 25M', 'odin'), // Opcional
        ),
        array(
          'id'   => 'separator1', // Obrigatório
          'type' => 'separator' // Obrigatório
        ),
      )
    );
  }

  foreach ($post_types as $post_type) {
    $meta_box = new Odin_Metabox(
      'plantas_e_fachadas_side', // ID único
      'Plantas e Fachadas', // Título da metabox
      $post_type, // Custom post type ao qual a metabox será adicionada
      'side', // Contexto (normal, side, etc.)
      'high' // Prioridade
    );

    $meta_box->set_fields(
      array(
        
        array(
          'id'   => 'right-side2', // Required
          'label' => __('Marque a checkbox do que tiver na casa', 'odin'), // Required
          'type' => 'title', // Required
        ),
        array(
          'id'          => 'checkbox_suite', // Required
          'label'       => __('Suite', 'odin'), // Required
          'type'        => 'checkbox', // Required
          // 'attributes' => array(), // Optional (html input elements)
          // 'default'    => 'no', // Optional ('yes' for checked)
          'description' => __('Checkbox field description', 'odin'), // Optional
        ),
        array(
          'id'          => 'suites_casa', // Obrigatório
          'label'       => __('Suites / Quartos', 'odin'), // Obrigatório
          'type'        => 'textarea', // Obrigatório
          'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
            'placeholder' => __('Quantidade de suites e quartos')
          ),
          'description' => __('Exemplo: 2 suítes + 2 quartos', 'odin'), // Opcional
        ),
      )
    );
  }

  // Adicionando Acabamentos e Detalhes
  foreach ($post_types as $post_type) {
    $meta_box = new Odin_Metabox(
      'acabamentos_e_detalhes', // ID único
      'Acabamentos e Detalhes', // Título da metabox
      $post_type, // Custom post type ao qual a metabox será adicionada
      'normal', // Contexto (normal, side, etc.)
      'high' // Prioridade
    );

    $meta_box->set_fields([
      [
        'id' => 'custom_field_id',
        'label' => 'Campo Customizado',
        'type' => 'text', // Tipo do campo (text, textarea, select, etc.)
      ]
    ]);
  }

  // Adicionando Videos
  foreach ($post_types as $post_type) {
    $meta_box = new Odin_Metabox(
      'videos', // ID único
      'Videos', // Título da metabox
      $post_type, // Custom post type ao qual a metabox será adicionada
      'normal', // Contexto (normal, side, etc.)
      'high' // Prioridade
    );

    $meta_box->set_fields([
      [
        'id' => 'custom_field_id',
        'label' => 'Campo Customizado',
        'type' => 'text', // Tipo do campo (text, textarea, select, etc.)
      ]
    ]);
  }
}
add_action('init', 'add_custom_meta_boxes');

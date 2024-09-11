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
      'has_archive' => true,
      'menu_icon' => 'dashicons-admin-home',
      'supports' => ['title'],
      'rewrite' => ['slug' => $slug],
      'show_in_menu' => 'edit.php?post_type=c_s_group', // Menu pai para agrupar os post types

    ]);
  }
}
add_action('init', 'create_custom_post_types');




// Adicionar o menu pai "C e S"
function add_custom_menu_page()
{
  add_menu_page(
    'Casas', // Título da página
    'Casas', // Título do menu
    'manage_options', // Capability
    'edit.php?post_type=c_s_group', // Slug do menu pai
    '', // Função callback (opcional)
    'dashicons-admin-home', // Ícone do menu
    20 // Posição do menu
  );
}
add_action('admin_menu', 'add_custom_menu_page');


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


        array(
          'id'   => 'right-side3', // Required
          'label' => __('Opcionais', 'odin'), // Required
          'type' => 'title', // Required
        ),
        array(
          'id'          => 'muro_casa', // Obrigatório
          'label'       => __('Muro e portão', 'odin'), // Obrigatório
          'type'        => 'text', // Obrigatório
          'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
            'placeholder' => __('Informações sobre Muro e Portão')
          ),
          // 'description' => __('Exemplo: 153m2 a 158m2', 'odin'), // Opcional
        ),
        array(
          'id'          => 'area_gourmet_casa', // Obrigatório
          'label'       => __('Área Gourmet', 'odin'), // Obrigatório
          'type'        => 'text', // Obrigatório
          'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
            'placeholder' => __('Informações sobre Area Gourmet')
          ),
          // 'description' => __('Exemplo: 153m2 a 158m2', 'odin'), // Opcional
        ),
        array(
          'id'          => 'quartos_casa', // Obrigatório
          'label'       => __('Quartos', 'odin'), // Obrigatório
          'type'        => 'text', // Obrigatório
          'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
            'placeholder' => __('Informações sobre Quartos')
          ),
          // 'description' => __('Exemplo: 153m2 a 158m2', 'odin'), // Opcional
        ),
        array(
          'id'          => 'smart_kit_casa', // Obrigatório
          'label'       => __('Kit Smart Home', 'odin'), // Obrigatório
          'type'        => 'text', // Obrigatório
          'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
            'placeholder' => __('Informações sobre Kit Smart Home')
          ),
          // 'description' => __('Exemplo: 153m2 a 158m2', 'odin'), // Opcional
        ),
        array(
          'id'          => 'cozinha_casa', // Obrigatório
          'label'       => __('Cozinha', 'odin'), // Obrigatório
          'type'        => 'text', // Obrigatório
          'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
            'placeholder' => __('Informações sobre Cozinha')
          ),
          // 'description' => __('Exemplo: 153m2 a 158m2', 'odin'), // Opcional
        ),
        array(
          'id'          => 'grama_casa', // Obrigatório
          'label'       => __('Grama externa / Jardim', 'odin'), // Obrigatório
          'type'        => 'text', // Obrigatório
          'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
            'placeholder' => __('Informações sobre Area Externa')
          ),
          // 'description' => __('Exemplo: 153m2 a 158m2', 'odin'), // Opcional
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
          // 'description' => __('Checkbox field description', 'odin'), // Optional
        ),
        array(
          'id'          => 'suites_casa', // Obrigatório
          'label'       => __('Suites / Quartos', 'odin'), // Obrigatório
          'type'        => 'text', // Obrigatório
          'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
            'placeholder' => __('suites e quartos')
          ),
          'description' => __('Caso checkbox acima estiver marcado, Exemplo: 2 suítes + 2 quartos', 'odin'), // Opcional
        ),
        array(
          'id'          => 'checkbox_banheiro', // Required
          'label'       => __('Banheiro', 'odin'), // Required
          'type'        => 'checkbox', // Required
          // 'attributes' => array(), // Optional (html input elements)
          // 'default'    => 'no', // Optional ('yes' for checked)
          // 'description' => __('Checkbox field description', 'odin'), // Optional
        ),
        array(
          'id'          => 'checkbox_lavabo', // Required
          'label'       => __('Lavabo', 'odin'), // Required
          'type'        => 'checkbox', // Required
          // 'attributes' => array(), // Optional (html input elements)
          // 'default'    => 'no', // Optional ('yes' for checked)
          // 'description' => __('Checkbox field description', 'odin'), // Optional
        ),
        array(
          'id'          => 'checkbox_sala', // Required
          'label'       => __('Sala de estar', 'odin'), // Required
          'type'        => 'checkbox', // Required
          // 'attributes' => array(), // Optional (html input elements)
          // 'default'    => 'no', // Optional ('yes' for checked)
          // 'description' => __('Checkbox field description', 'odin'), // Optional
        ),
        array(
          'id'          => 'checkbox_jantar', // Required
          'label'       => __('Jantar', 'odin'), // Required
          'type'        => 'checkbox', // Required
          // 'attributes' => array(), // Optional (html input elements)
          // 'default'    => 'no', // Optional ('yes' for checked)
          // 'description' => __('Checkbox field description', 'odin'), // Optional
        ),
        array(
          'id'          => 'checkbox_cozinha_integrada', // Required
          'label'       => __('Cozinha Integra', 'odin'), // Required
          'type'        => 'checkbox', // Required
          // 'attributes' => array(), // Optional (html input elements)
          // 'default'    => 'no', // Optional ('yes' for checked)
          // 'description' => __('Checkbox field description', 'odin'), // Optional
        ),
        array(
          'id'          => 'checkbox_lavanderia', // Required
          'label'       => __('Lavanderia', 'odin'), // Required
          'type'        => 'checkbox', // Required
          // 'attributes' => array(), // Optional (html input elements)
          // 'default'    => 'no', // Optional ('yes' for checked)
          // 'description' => __('Checkbox field description', 'odin'), // Optional
        ),
        array(
          'id'          => 'checkbox_vaga', // Required
          'label'       => __('Vaga Coberta', 'odin'), // Required
          'type'        => 'checkbox', // Required
          // 'attributes' => array(), // Optional (html input elements)
          // 'default'    => 'no', // Optional ('yes' for checked)
          // 'description' => __('Checkbox field description', 'odin'), // Optional
        ),
        array(
          'id'   => 'separator1', // Obrigatório
          'type' => 'separator' // Obrigatório
        )
      )
    );
  }

}
add_action('init', 'add_custom_meta_boxes');




// Função para criar a metabox de galeria
function add_gallery_meta_box() {
  $post_types = ['C4', 'C5', 'C6', 'C7', 'C8', 'C12', 'S8', 'S9', 'S10', 'S12', 'S15', 'S18'];
  foreach ($post_types as $post_type) {
      add_meta_box(
          'gallery_meta_box', // ID da metabox
          'Galeria de Imagens', // Título
          'render_gallery_meta_box', // Função de renderização
          $post_type, // Tipos de post
          'normal', // Contexto
          'high' // Prioridade
      );
  }
}
add_action('add_meta_boxes', 'add_gallery_meta_box');

// Função para renderizar o conteúdo da metabox
function render_gallery_meta_box($post) {
  // Campo nonce para segurança
  wp_nonce_field('save_gallery_meta_box', 'gallery_meta_box_nonce');

  // Recupera as imagens salvas
  $gallery_images = get_post_meta($post->ID, '_gallery_images', true);
  ?>

  <div id="gallery_container">
      <button id="add_image_button" class="button">Adicionar Imagem</button>
      <ul id="gallery_images_list">
          <?php
          if (!empty($gallery_images)) {
              foreach ($gallery_images as $image_id) {
                  // Recupera o URL da miniatura usando wp_get_attachment_image_url()
                  $image_url = wp_get_attachment_image_url($image_id, 'thumbnail');
                  echo '<li><input type="hidden" name="gallery_images[]" value="' . esc_attr($image_id) . '" />';
                  echo '<img src="' . esc_url($image_url) . '" style="max-width: 100px; margin: 5px;" />';
                  echo '<button class="remove_image_button button">Remover</button></li>';
              }
          }
          ?>
      </ul>
  </div>

  <?php
}

// Função para salvar as imagens da galeria
function save_gallery_meta_box_data($post_id) {
  // Verifica o nonce
  if (!isset($_POST['gallery_meta_box_nonce']) || !wp_verify_nonce($_POST['gallery_meta_box_nonce'], 'save_gallery_meta_box')) {
      return;
  }

  // Verifica a permissão de edição
  if (!current_user_can('edit_post', $post_id)) {
      return;
  }

  // Salva as imagens da galeria
  if (isset($_POST['gallery_images'])) {
      $image_ids = array_map('sanitize_text_field', $_POST['gallery_images']);
      update_post_meta($post_id, '_gallery_images', $image_ids);
  } else {
      delete_post_meta($post_id, '_gallery_images');
  }
}
add_action('save_post', 'save_gallery_meta_box_data');

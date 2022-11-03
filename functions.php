
<?php

function scriptAndStyle()
{
  // Enqueue scripts
  wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js');
}

add_action('wp_enqueue_scripts', 'scriptAndStyle');

add_theme_support('menus');
add_theme_support('post-thumbnails');

// cmb2 custom fields

function get_field_cmb2($key, $page_id = 0)
{
  $page_id = $page_id !== 0 ? $page_id : get_the_ID();
  return get_post_meta($page_id, $key, true);
}

function the_field_cmb2($key, $page_id)
{
  echo get_field_cmb2($key, $page_id);
}

// function cmb2_fields_documentos()
// {
//   $cmb = new_cmb2_box([
//     'id' => 'documentos',
//     'title' => 'Documentos',
//     'object_types' => ['page'],
//     'show_on' => [
//       'key' => 'page-template',
//       'value' => 'page-documentos.php',
//     ],
//   ]);

//   $topicos = $cmb->add_field([
//     'name' => 'Tópicos',
//     'id' => 'topicos',
//     'type' => 'group',
//     'repeatable' => true,
//     'options' => [
//       'group_title' => 'Tópico {#}',
//       'add_button' => 'Adiconar tópico',
//       'remove_button' => 'Remover tópico',
//       'sortable' => 'true',
//     ],
//   ]);

//   $cmb->add_group_field($topicos, [
//     'name' => 'Título',
//     'id' => 'titulo_topico',
//     'type' => 'text',
//   ]);

//   $cmb->add_group_field($topicos, [
//     'name' => 'Conteúdo',
//     'id' => 'conteudo_topico',
//     'type' => 'wysiwyg',
//   ]);
// }

// add_action('cmb2_admin_init', 'cmb2_fields_documentos');

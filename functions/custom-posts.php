<?php

function custom_post_type_edital()
{
  register_post_type('edital', array(
    'label' => 'Edital',
    'description' => 'Edital',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    // 'capability_type' => 'post',
    'map_meta_cap' => true,
    'hierarchical' => false,
    'rewrite' => array('slug' => 'edital-post', 'with_front' => true),
    'query_var' => true,
    'supports' => array('title', 'editor', 'page-attributes', 'post-formats'),
    'taxonomies'  => array('categoria-edital'),

    'labels' => array(
      'name' => 'Editais',
      'singular_name' => 'Edital',
      'menu_name' => 'Editais',
      'add_new' => 'Adicionar Novo',
      'add_new_item' => 'Adicionar Novo Arquivo',
      'edit' => 'Editar',
      'edit_item' => 'Editar arquivo',
      'new_item' => 'Novo arquivo',
      'view' => 'Ver arquivos',
      'view_item' => 'Ver arquivo',
      'search_items' => 'Procurar Arquivos',
      'not_found' => 'Nenhum Arquivo Encontrado',
      'not_found_in_trash' => 'Nenhum Arquivo Encontrado no Lixo',
    )
  ));
}
add_action('init', 'custom_post_type_edital');

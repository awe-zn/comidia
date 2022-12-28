<?php

function add_editais_custom_taxonomies()
{
  register_taxonomy('categoria-edital', ['editais'], array(

    'hierarchical' => true,
    'show_admin_column' => true,
    'show_in_rest' => true,

    'labels' => array(
      'name' => _x('Categorias', 'taxonomy general name'),
      'singular_name' => _x('Categoria', 'taxonomy singular name'),
      'search_items' =>  __('Procurar categorias'),
      'all_items' => __('Todas categorias'),
      'menu_name' => __('Categorias'),
    ),

    'rewrite' => array(
      'slug' => 'categoria-edital',
      'with_front' => false,
      'hierarchical' => true
    ),
  ));

  register_taxonomy_for_object_type('categoria-edital', 'editais');
}
add_action('init', 'add_editais_custom_taxonomies', 0);

function add_eventos_custom_taxonomies()
{

  register_taxonomy('categoria-evento', ['eventos-post'], array(

    'hierarchical' => true,
    'show_admin_column' => true,
    'show_in_rest' => true,

    'labels' => array(
      'name' => _x('Categorias', 'taxonomy general name'),
      'singular_name' => _x('Categoria', 'taxonomy singular name'),
      'search_items' =>  __('Procurar categorias'),
      'all_items' => __('Todas categorias'),
      'menu_name' => __('Categorias'),
    ),

    'rewrite' => array(
      'slug' => 'categoria-evento',
      'with_front' => false,
      'hierarchical' => true
    ),
  ));

  register_taxonomy_for_object_type('categoria-eventos', 'eventos-post');
}

add_action('init', 'add_eventos_custom_taxonomies', 0);

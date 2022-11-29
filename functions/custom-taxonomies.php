<?php

function add_custom_taxonomies()
{
  register_taxonomy('categoria-edital', 'edital-post', array(

    'hierarchical' => true,

    'labels' => array(
      'name' => _x('Categorias', 'taxonomy general name'),
      'singular_name' => _x('Categoria', 'taxonomy singular name'),
      'search_items' =>  __('Procurar categorias'),
      'all_items' => __('Todas categorias'),
      'menu_name' => __('Categorias'),
    ),

    'rewrite' => array(
      'slug' => 'categorias-edital',
      'with_front' => false,
      'hierarchical' => true
    ),
  ));
}
add_action('init', 'add_custom_taxonomies', 0);

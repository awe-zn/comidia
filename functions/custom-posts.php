<?php

function post_type_perguntas()
{
  $labels = array(
    "name" => "Perguntas",
    "singular_name" => "Pergunta",
    "add_new" => "Adicionar nova pergunta",
    "add_new_item" => "Adicionar nova pergunta",
    "edit_item" => "Editar pergunta",
    "new_item" => "Nova pergunta",
    "view_item" => "Ver pergunta",
    "view_items" => "Ver perguntas",
    "search_items" => "Buscar pergunta",
    "not_found" => "Nenhuma pergunta encontrada",
    "not_found_in_trash" => "Nenhuma pergunta na lixeira",
    "all_items" => "Todas perguntas",
    "uploaded_to_this_item" => "Carregado para esta pergunta",
    "items_list" => "Lista de perguntas",
    "item_updated" => "pergunta atualizada"
  );

  $args = [
    "labels" => $labels,
    "description" => "Post type para gerenciamento de perguntas",
    "public" => true,
    'menu_position'     => 5,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => ["slug" => "perguntas_post", "with_front" => true],
    "query_var" => true,
    "supports" => ["title", "excerpt", "editor", "thumbnail"],
  ];

  register_post_type("perguntas_post", $args);
}

function post_type_editais()
{
  $labels = array(
    "name" => "Editais",
    "singular_name" => "Edital",
    "add_new" => "Adicionar novo edital",
    "add_new_item" => "Adicionar novo edital",
    "edit_item" => "Editar edital",
    "new_item" => "Nova edital",
    "view_item" => "Ver edital",
    "view_items" => "Ver editais",
    "search_items" => "Buscar edital",
    "not_found" => "Nenhum edital encontrado",
    "not_found_in_trash" => "Nenhum edital na lixeira",
    "all_items" => "Todos editais",
    "uploaded_to_this_item" => "Carregado para esta pergunta",
    "items_list" => "Lista de editais",
    "item_updated" => "Edital atualizado"
  );

  $args = [
    "labels" => $labels,
    "description" => "Post type para gerenciamento de editais",
    "public" => true,
    'menu_position'     => 6,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => ["slug" => "editais", "with_front" => true],
    "query_var" => true,
    "supports" => ["title", "editor"],
    "taxonomies" => ['categoria-edital'],
  ];

  register_post_type("editais", $args);
}


function create_posttypes()
{
  post_type_perguntas();
  post_type_editais();
};

function add_features()
{
  create_posttypes();
}

add_action('init', 'add_features');

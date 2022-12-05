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
    "rewrite" => ["slug" => "perguntas", "with_front" => true],
    "query_var" => true,
    "supports" => ["title", "excerpt", "editor", "thumbnail"],
  ];

  register_post_type("perguntas", $args);
}


function create_posttypes()
{
  post_type_perguntas();
};

function add_features()
{
  create_posttypes();
}

add_action('init', 'add_features');

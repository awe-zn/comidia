<?php

include '../constants.php';

function crd_repeater_metaboxes()
{
  function add_arquivos_repeater()
  {
    $cmb = new_cmb2_box(array(
      'id' => 'edital_arquivos',
      'title' => 'Arquivos',
      'object_types' => array('editais',),
      'context' => 'normal',
      'priority' => 'high',
      'show_names' => true,
    ));

    $arquivos = $cmb->add_field(array(
      'id' => 'arquivos',
      'type' => 'group',
      'repeatable' => true,
      'options' => array(
        'group_title' => 'Arquivo {#}',
        'add_button'        => __('Adicionar arquivo', 'cmb2'),
        'remove_button'     => __('Remover arquivo', 'cmb2'),
        'sortable'      => true,
        'closed'         => true,
        'remove_confirm' => esc_html__('Você realmente deseja remover este arquivo?', 'cmb2')
      ),
    ));

    $cmb->add_group_field($arquivos, array(
      'name' => 'O arquivo já foi publicado?',
      'desc' => 'Se o arquivo já foi publicado, marque a caixa.',
      'id'   => 'foi_publicado',
      'type' => 'checkbox',
    ));

    $cmb->add_group_field($arquivos, array(
      'name' => 'Titulo',
      'desc' => 'Insira o título do arquivo ou link que está adicionando ao edital',
      'id'   => 'titulo',
      'type' => 'text',
    ));

    $cmb->add_group_field($arquivos, array(
      'name' => 'url',
      'desc' => 'Insira a url do link ou arquivo que está adicionando ao edital',
      'id'   => 'url',
      'type' => 'text_url',
    ));


    $cmb->add_group_field($arquivos, array(
      'name'             => 'tipo',
      'desc'             => 'Selecione o tipo de item a ser adicionado ao edital',
      'id'               => 'tipo',
      'type'             => 'select',
      'default'          => 'standart',
      'options'          => array(
        'standard' => __('Documento', 'cmb2'),
        'custom'   => __('Site web', 'cmb2'),
      ),
    ));
  }

  add_arquivos_repeater();

  function add_home_links_repeater()
  {
    $cmb = new_cmb2_box(array(
      'id' => 'home_links',
      'title' => 'Links úteis',
      'object_types' => array('page'),
      'show_on'      => array('key' => 'id', 'value' => 130),
      'context' => 'normal',
      'priority' => 'high',
      'show_names' => true,
    ));

    $links = $cmb->add_field(array(
      'id' => 'links_uteis',
      'type' => 'group',
      'repeatable' => true,
      'options' => array(
        'group_title' => 'Link {#}',
        'add_button'        => __('Adicionar link', 'cmb2'),
        'remove_button'     => __('Remover link', 'cmb2'),
        'sortable'      => true,
        'closed'         => true,
        'remove_confirm' => esc_html__('Você realmente deseja remover este link?', 'cmb2')
      ),
    ));

    $cmb->add_group_field($links, array(
      'name' => 'Título',
      'id'   => 'link_titulo',
      'type' => 'text',
    ));

    $cmb->add_group_field($links, array(
      'name' => 'Url',
      'id'   => 'link_url',
      'type' => 'text_url',
    ));
  }

  add_home_links_repeater();

  function add_home_atalhos_repeater()
  {
    $cmb = new_cmb2_box(array(
      'id' => 'home_atalhos',
      'title' => 'Atalhos',
      'object_types' => array('page'),
      'show_on'      => array('key' => 'id', 'value' => 130),
      'context' => 'normal',
      'priority' => 'high',
      'show_names' => true,
    ));

    $atalhos = $cmb->add_field(array(
      'id' => 'atalhos_home',
      'type' => 'group',
      'repeatable' => true,
      'options' => array(
        'group_title' => 'Atalho {#}',
        'add_button'        => __('Adicionar atalho', 'cmb2'),
        'remove_button'     => __('Remover atalho', 'cmb2'),
        'sortable'      => true,
        'closed'         => true,
        'remove_confirm' => esc_html__('Você realmente deseja remover este atalho?', 'cmb2')
      ),
    ));

    $cmb->add_group_field($atalhos, array(
      'name' => 'Título',
      'id'   => 'atalho_titulo',
      'type' => 'text',
    ));

    $cmb->add_group_field($atalhos, array(
      'name' => 'Url',
      'id'   => 'atalho_url',
      'type' => 'text_url',
    ));

    $cmb->add_group_field($atalhos, array(
      'name' => 'Ícone',
      'id'   => 'icon',
      'type' => 'file',
      'desc'    => 'Faça o upload do ícone ou insira a url.',
      'text'    => array(
        'add_upload_file_text' => 'Adicionar ícone',
      ),
    ));
  }

  add_home_atalhos_repeater();
}

add_action('cmb2_admin_init', 'crd_repeater_metaboxes');

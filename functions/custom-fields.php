<?php

function crd_repeater_metaboxes()
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

add_action('cmb2_admin_init', 'crd_repeater_metaboxes');

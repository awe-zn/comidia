<?php

function my_custom_menu()
{
  register_nav_menus(
    array(
      'menu-header' => _('Cabeçalho'),
      'menu-footer' => _('Rodapé')
    )
  );
}
add_action('init', 'my_custom_menu');

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
class new_general_setting
{
  function new_general_setting()
  {
    add_filter('admin_init', array(&$this, 'register_fields'));
  }
  function register_fields()
  {
    register_setting('general', 'link_agent_area', 'esc_attr');
    register_setting('general', 'link_telegram', 'esc_attr');
    register_setting('general', 'link_youtube', 'esc_attr');
    register_setting('general', 'link_facebook', 'esc_attr');
    register_setting('general', 'link_instagram', 'esc_attr');
    register_setting('general', 'link_whatsapp', 'esc_attr');
    register_setting('general', 'number_phone', 'esc_attr');
    register_setting('general', 'email', 'esc_attr');
    register_setting('general', 'addres', 'esc_attr');
    register_setting('general', 'link_partners', 'esc_attr');

    add_settings_field('link_agent_area', '<label for="link_agent_area">' . __('Link para área do agente', 'link_agent_area') . '</label>', array(&$this, 'field_agent'), 'general');
    add_settings_field('link_telegram', '<label for="link_telegram">' . __('Link para o Telegram', 'link_telegram') . '</label>', array(&$this, 'field_telegram'), 'general');
    add_settings_field('link_youtube', '<label for="link_youtube">' . __('Link para o YouTube', 'link_youtube') . '</label>', array(&$this, 'field_youtube'), 'general');
    add_settings_field('link_facebook', '<label for="link_facebook">' . __('Link para o Facebook', 'link_facebook') . '</label>', array(&$this, 'field_facebook'), 'general');
    add_settings_field('link_instagram', '<label for="link_instagram">' . __('Link para o Instagram', 'link_instagram') . '</label>', array(&$this, 'field_instagram'), 'general');
    add_settings_field('link_whatsapp', '<label for="link_whatsapp">' . __('Link para o WhatsApp', 'link_whatsapp') . '</label>', array(&$this, 'field_whatsapp'), 'general');
    add_settings_field('number_phone', '<label for="number_phone">' . __('Número do WhatsApp', 'number_phone') . '</label>', array(&$this, 'field_number_phone'), 'general');
    add_settings_field('email', '<label for="email">' . __('Email para contato', 'email') . '</label>', array(&$this, 'field_email'), 'general');
    add_settings_field('addres', '<label for="addres">' . __('Endereço', 'addres') . '</label>', array(&$this, 'field_addres'), 'general');
    add_settings_field('link_partners', '<label for="link_partners">' . __('Link para página de parceiros', 'link_partners') . '</label>', array(&$this, 'field_partners'), 'general');
  }
  function field_agent()
  {
    $value = get_option('link_agent_area', '');
    echo '<input type="url" id="link_agent_area" name="link_agent_area" value="' . $value . '" />';
  }
  function field_telegram()
  {
    $value = get_option('link_telegram', '');
    echo '<input type="url" id="link_telegram" name="link_telegram" value="' . $value . '" />';
  }
  function field_youtube()
  {
    $value = get_option('link_youtube', '');
    echo '<input type="url" id="link_youtube" name="link_youtube" value="' . $value . '" />';
  }
  function field_facebook()
  {
    $value = get_option('link_facebook', '');
    echo '<input type="url" id="link_facebook" name="link_facebook" value="' . $value . '" />';
  }
  function field_instagram()
  {
    $value = get_option('link_instagram', '');
    echo '<input type="url" id="link_instagram" name="link_instagram" value="' . $value . '" />';
  }
  function field_whatsapp()
  {
    $value = get_option('link_whatsapp', '');
    echo '<input type="url" id="link_whatsapp" name="link_whatsapp" value="' . $value . '" />';
  }
  function field_number_phone()
  {
    $value = get_option('number_phone', '');
    echo '<input type="text" id="number_phone" name="number_phone" value="' . $value . '" />';
  }
  function field_email()
  {
    $value = get_option('email', '');
    echo '<input type="email" id="email" name="email" value="' . $value . '" />';
  }
  function field_addres()
  {
    $value = get_option('addres', '');
    echo '<input type="text" id="addres" name="addres" value="' . $value . '" />';
  }
  function field_partners()
  {
    $value = get_option('link_partners', '');
    echo '<input type="url" id="link_partners" name="link_partners" value="' . $value . '" />';
  }
}

$new_general_setting = new new_general_setting();

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


include(TEMPLATEPATH . '/functions/custom-taxonomies.php');
include(TEMPLATEPATH . '/functions/custom-posts.php');
include(TEMPLATEPATH . '/functions/custom-fields.php');
include(TEMPLATEPATH . '/functions/custom-menu.php');

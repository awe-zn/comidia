<?php
$categorias_edital = get_terms(array(
  'taxonomy' => 'categoria-evento',
  'hide_empty' => false,
));

foreach ($categorias_edital as $value) { ?>
  <?php
  if (single_cat_title(false, false) == $value->name) {
    $active = 'active';
  } else {
    $active = '';
  }

  if ($value->slug == 'destaque' || $value->slug == 'sem-categoria' || $value->slug == 'destaque-principal' || $value->count <= 0) {
    continue;
  }
  ?>

  <style>
    .filter.active {
      background-color: #2471b5;
      color: #fff;
    }
  </style>

  <a href="<?php echo get_term_link($value); ?>" class="filter <?php echo $active; ?>">
    <?php
    echo $value->name;
    ?>
    <span>
      <?php echo $value->count ?>
    </span>
  </a>

<?php
}
?>
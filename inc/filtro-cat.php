<?php
$categories = get_categories('orderby=count&order=DSC');

foreach ($categories as $value) { ?>
  <?php
  if (single_cat_title(false, false) == $value->name) {
    $active = 'active';
  } else {
    $active = '';
  }

  if ($value->slug == 'destaque' || $value->slug == 'sem-categoria' || $value->slug == 'destaque-principal') {
    continue;
  }
  ?>
  <a href="<?php echo home_url('/'); ?>category/<?php echo $value->slug; ?>" class="filter <?php echo $active; ?>">
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
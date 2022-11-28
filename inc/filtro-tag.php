<?php

$tags = get_the_tags();

foreach ($tags as $value) { ?>
  <a href="<?php echo get_tag_link($value); ?>">
    <?php echo $value->name; ?>
  </a>

<?php } ?>
<?php
$theme = get_bloginfo('template_url');
include 'constants.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>
    <?= is_front_page() ? 'Comídia' : 'Comídia - ' . get_the_title(); ?>
  </title>

  <!-- fonte -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;600;700;800;900&display=swap" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" href="<?= $theme ?>/dist/css/style.css" />
  <link rel="stylesheet" href="<?= $theme ?>/dist/css/style-update.css" />

  <!-- favicon -->
  <link rel="icon" type="image/x-icon" href="<?= $theme; ?>/dist/image/favicon.ico">

  <?php wp_head(); ?>
</head>

<body>

  <header class="">
    <div class="container-fluid container-lg navbar__container px-0  px-awe-24 px-lg-0 ">
      <div class="background">
        <img src="<?= $theme ?>/dist/image/svg/mask-group.svg" class="img-fluid h-100" alt="">
      </div>
      <nav class="navbar navbar-expand-lg px-awe-24 p-lg-0 ">
        <div class="container-fluid container-lg px-0">
          <div class="w-100 d-flex justify-content-between">
            <a class="navbar-brand py-awe-16" href="<?php echo home_url(); ?>">
              <img class="img-fluid" src="<?= $theme ?>/dist/image/svg/nav-logo.svg" alt="">
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <img src="<?= $theme ?>/dist/image/svg/menu.svg" alt="">
            </button>
          </div>
          <div class="px-5 mx-xl-5 d-none d-lg-block"></div>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <div class="w-100 d-none d-lg-block">
              <div class="d-flex justify-content-end fz-14">
                <a href="mailto:ppgem@cchla.ufrn.br">
                  <?= get_field('e-mail', $home_page_id); ?>
                </a>
                <span class="px-2">
                  |
                </span>
                <a href="<?= get_field('link_whatsapp', $home_page_id); ?>" target="_blank" class="">
                  <?= get_field('numero_de_telefone', $home_page_id); ?>
                </a>
                <div class="ps-4 d-flex gap-4">
                  <a href="<?= get_field('link_do_youtube', $home_page_id); ?>" target="_blank">
                    <img src="<?= $theme ?>/dist/image/svg/youtube-light.svg" alt="">
                  </a>
                  <a href="<?= get_field('link_do_instagram', $home_page_id); ?>" target="_blank">
                    <img src="<?= $theme ?>/dist/image/svg/instagram-light.svg" alt="">
                  </a>
                </div>
              </div>
              <hr class="divider">
              <div class="d-flex justify-content-end fz-14 gap-2">
                <?php

                $header_links = get_post_meta($home_page_id, 'header_links_repeater', true);

                $header_links_length = sizeof($header_links);

                if ($header_links) {
                  foreach ($header_links as $key => $header_link) {
                ?>
                    <a href="<?= $header_link['header_link_url']; ?>" class="text-nowrap">
                      <?= $header_link['header_link_titulo']; ?>
                    </a>
                    <?php echo $key != $header_links_length - 1 ? '|' : ''; ?>

                <?php
                  }
                }
                ?>
              </div>
            </div>
            <div class="w-100 py-5 d-flex flex-column d-lg-none">
              <div class="d-flex flex-column text-center gap-4">
                <?php

                $header_links = get_post_meta($home_page_id, 'header_links_repeater', true);

                if ($header_links) {
                  foreach ($header_links as $key => $header_link) {
                ?>
                    <a href="<?= $header_link['header_link_url']; ?>" class="text-nowrap">
                      <?= $header_link['header_link_titulo']; ?>
                    </a>
                <?php
                  }
                }
                ?>
              </div>

              <hr>

              <div class="d-flex flex-column gap-4 align-items-center">
                <a href="mailto:ppgem@cchla.ufrn.br" class="text-link">
                  <?= get_field('e-mail', $home_page_id); ?>
                </a>
                <a href="<?= get_field('link_whatsapp', $home_page_id); ?>" class="text-link" target="_blank">
                  <?= get_field('numero_de_telefone', $home_page_id); ?>
                </a>
                <div class="d-flex gap-4">
                  <a href="<?= get_field('link_do_youtube', $home_page_id); ?>" class="text-link" target="_blank">
                    <img width="32" src="<?= $theme ?>/dist/image/svg/youtube.svg" alt="">
                  </a>
                  <a href="<?= get_field('link_do_instagram', $home_page_id); ?>" class="text-link" target="_blank">
                    <img width="32" src="<?= $theme ?>/dist/image/svg/instagram.svg" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
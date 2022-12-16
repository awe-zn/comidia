<?php
get_header();

$theme = get_bloginfo('template_url');

include 'constants.php';
?>

<main class="py-awe-40 py-md-awe-80 bg-light-1">
  <div class="container px-awe-24 px-lg-0">
    <div class="row">
      <?php

      $post_query = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'cat' => get_cat_ID('destaque-principal')
      ));

      if ($post_query->have_posts()) {
        while ($post_query->have_posts()) {
          $post_query->the_post();
      ?>
          <div class="col-12 col-lg-9 col-xl-7">
            <a href="<?php echo get_permalink(); ?>" class="card-noticia__destaque bg-white">
              <?php the_post_thumbnail(); ?>
              <div class="background-filter"></div>
              <div class="card-noticia__content fz-21">
                <p>
                  <?php the_title(); ?>
                </p>
              </div>
            </a>
          </div>
      <?php
        }
      }
      ?>

      <div class="col-12 col-xl-5 mt-awe-32 mt-xl-0 d-flex flex-column justify-content-between gap-4 gap-xl-0">
        <?php

        $post_query = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page' => 4,
          'cat' => get_cat_ID('destaque')
        ));

        if ($post_query->have_posts()) {
          while ($post_query->have_posts()) {
            $post_query->the_post();
        ?>
            <a href="<?php echo get_permalink(); ?>" class="card__info">
              <?php the_title(); ?>
            </a>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </div>
</main>

<section class="pb-awe-40 pb-md-awe-104 bg-white">
  <div class="container px-awe-24 px-lg-0">
    <div class="d-flex justify-content-center">
      <img src="<?= $theme ?>/dist/image/svg/logo-lg.svg" class="img-fluid" alt="">
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8">
        <h3 class="text-primary-light fz-21 fz-md-28 fw-bold mb-awe-24">
          <?= get_field('titulo_sobre', $home_page_id); ?>
        </h3>
        <p class="fz-16 fz-md-21 text-black-2 lh-180 mb-awe-64">
          <?= get_field('resumo_sobre', $home_page_id); ?>
        </p>
        <a href="<?= get_permalink(get_page_by_path('programa')); ?>" class="text-primary-light fz-16 fz-md-21 text-decoration-underline">
          Quer saber mais?
        </a>
      </div>
      <?php

      $links_uteis = get_post_meta($home_page_id, 'links_uteis', true);

      if ($links_uteis) {
      ?>
        <div class="col-12 mt-awe-40 mt-md-awe-80">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 row-cols-xl-5">
            <?php
            foreach ($links_uteis as $key => $link_util) {
            ?>
              <div class="col mb-awe-24">
                <a href="<?= $link_util['link_url']; ?>" class="d-block text-center text-uppercase fz-16 text-primary-dark-1 fw-semi-bold border border-primary-dark-1 py-awe-16 px-awe-18 rounded bg-primary-dark-1-hover text-white-hover text-decoration-none-hover w-100">
                  <?= $link_util['link_titulo']; ?>
                </a>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
      <?php
      }
      ?>

    </div>
  </div>
</section>

<?php
$edital_args = array(
  'post_type' => 'editais',
  'posts_per_page' => '3',
);
$editais_query = new WP_Query($edital_args);

$edital_index = 0;

if ($editais_query->have_posts()) { ?>

  <section class="py-awe-40 py-md-awe-80 bg-light-1">
    <div class="container px-awe-24 px-lg-0 d-flex flex-column gap-awe-24">
      <h2 class="text-uppercase fz-21 fz-md-28 text-primary-light fw-bold">
        EDITAIS
      </h2>

      <?php
      while ($editais_query->have_posts()) {
        $editais_query->the_post(); ?>

        <div class="edital <?php echo $edital_index != 0 ? 'is-close' : ''; ?>" data-edital="edital<?= get_the_id(); ?>">
          <div class="d-flex gap-2 gap-md-4 justify-content-between flex-wrap flex-md-nowrap">
            <a href="<?= get_permalink(); ?>">
              <h4 class="edital__titulo fw-bold fz-18 order-1 order-md-0 text-uppercase">
                <span class="fw-regular">
                  <?= get_the_date('d/m/y'); ?> |
                </span>
                <?php the_title(); ?>
              </h4>
            </a>
            <span class="edital__status text-nowrap order-0 order-md-1 ">
              <?php
              if (get_field('is_finished')) {
                echo '<span style="color: #4F4F4F;">finalizado</span>';
              } else {
                echo '<span style="color: #27AE60;">em andamento</span>';
              }
              ?>
            </span>
          </div>
          <p class="fz-16 text-gray-1 m-0">
            <?php the_excerpt(); ?>
          </p>

          <?php

          $arquivos = get_post_meta(get_the_ID(), 'arquivos', true);

          if ($arquivos) {
          ?>
            <div class="edital__detalhes">
              <div class="ps-md-awe-32 pt-awe-16 pt-md-awe-32">
                <p class="fz-16 text-gray-1 fst-italic">
                  Arquivos publicados
                </p>

                <ul class="edital__arquivos d-flex flex-column gap-awe-8">

                  <?php
                  foreach ($arquivos as $key => $arquivo) {
                  ?>
                    <li class="edital__arquivo is-finished <?php
                                                            if (!$arquivo['foi_publicado']) {
                                                              echo 'fw-regular';
                                                            }
                                                            ?>">
                      <?= $arquivo['titulo']; ?>
                    </li>
                  <?php
                  }
                  ?>

                </ul>

              </div>

              <a href="" class="d-flex gap-3 align-items-center text-primary-light text-decoration-underline">
                acessar edital
                <span>
                  <img src="<?= $theme; ?>/dist/image/svg/external-link-2.svg" alt="">
                </span>
              </a>
            </div>
          <?php
          }
          ?>

          <div class="d-flex justify-content-end">
            <button onclick="handleEdital('edital<?= get_the_id(); ?>')">
              <img src="<?= $theme; ?>/dist/image/svg/edital-btn.svg" alt="">
            </button>
          </div>
        </div>
      <?php
        $edital_index = $edital_index + 1;
      } ?>


      <div class="d-flex justify-content-end">
        <a href="<?= get_permalink(get_page_by_path('selecao')); ?>" class="text-uppercase btn btn-primary-light py-awe-16 px-awe-24 text-decoration-none-hover fw-semi-bold fz-18">
          Acessar editais anteriores
        </a>
      </div>
    </div>
  </section>

<?php } ?>

<div class="container px-awe-24 px-lg-0 pb-awe-48">
  <div class="card-ppgem text-white fz-16 fz-sm-21 fz-md-24 fw-bold mt-awe-40 mt-md-awe-80">
    Fique pode dentro do que acontece no PPgEM
  </div>
</div>

<hr class="divider">

<style>
  .titulo__coluna-novidades {
    background-color: #3ba8dc;
    position: relative;
    background-image: url(<?= $theme; ?>/dist/image/svg/mask-group-novidades.svg);
    background-repeat: no-repeat;
    background-position-x: 100%;
    background-size: contain;
    border-radius: 2.6839px;
  }

  .titulo__coluna-calendario {
    background-color: #91dc3b;
    position: relative;
    background-image: url(<?= $theme; ?>/dist/image/svg/mask-group-calendario.svg);
    background-repeat: no-repeat;
    background-position-x: 100%;
    background-size: contain;
    border-radius: 2.6839px;
  }
</style>

<section class="py-awe-80 bg-white">
  <div class="container px-awe-24 px-lg-0">
    <div class="row gy-5">
      <?php
      $post_query = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'cat' => get_cat_ID('novidades'),
      ));

      if ($post_query->have_posts()) {
      ?>
        <div class="col-12 col-lg-8 d-flex flex-column gap-3">
          <div class="titulo__coluna-novidades ff-poppins fw-semi-bold fz-16 text-white text-uppercase d-flex justify-content-between px-awe-16 py-awe-18">
            Novidades
            <a href="<?= get_term_link(get_cat_ID('novidades')); ?>" class="fw-light text-white">
              Ver todas
              <span class="fz-12">&#5171;&#5171;</span>
            </a>
          </div>
          <div class="row">
            <?php
            while ($post_query->have_posts()) {
              $post_query->the_post();
            ?>
              <div class="col-12 col-md-6 py-awe-8">
                <a href="<?= get_the_permalink(); ?>" class="text-black-3">
                  <p class="fz-16 fw-bold mb-2">
                    <?php the_title(); ?>
                  </p>
                  <p class="text-gray-1 fz-14 mb-0">
                    Publicado em: <?= get_the_date('d.m.y'); ?>
                  </p>
                  <p class="fz-16 fz-md-14 lh-140">
                    <?php the_excerpt(); ?>
                  </p>
                </a>
              </div>
            <?php
            }

            ?>
          </div>
        </div>
      <?php
      }
      ?>
      <?php
      $post_query = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'cat' => get_cat_ID('calendario'),
      ));

      if ($post_query->have_posts()) {
      ?>
        <div class="col-12 col-md-12 col-lg-4 d-flex flex-column gap-3">
          <div class="titulo__coluna-calendario ff-poppins fw-semi-bold fz-16 text-white text-uppercase d-flex justify-content-between px-awe-16 py-awe-18">
            Calendário
            <a href="<?= get_term_link(get_cat_ID('calendario')); ?>" class="fw-light text-white">
              Ver todas
              <span class="fz-12">&#5171;&#5171;</span>
            </a>
          </div>
          <?php
          while ($post_query->have_posts()) {
            $post_query->the_post();
          ?>
            <a href="<?= get_the_permalink(); ?>" class="d-flex border-bottom pb-3 text-decoration-none-hover">
              <div class="px-4 d-inline-block text-center ">
                <p class="text-green-2 fz-32 fw-semi-bold ff-poppins m-0">
                  <?= get_the_date('d'); ?>
                </p>
                <p class="text-black-3 ff-poppins fz-21 fw-light m-0 text-uppercase">
                  DEZ
                </p>
              </div>
              <div>
                <p class="text-black-2 fz-16 fw-bold ff-open-sans m-0 text-decoration-underline-hover">
                  <?php the_title(); ?>
                </p>
              </div>
            </a>
          <?php
          }

          ?>
        </div>
      <?php
      }
      ?>

    </div>
  </div>
</section>

<?php

$atalhos = get_post_meta($home_page_id, 'atalhos_home', true);

if ($atalhos) {
?>
  <section class="bg-light-2 py-awe-80">
    <div class="container px-awe-24 px-lg-0">
      <div class="row row-cols-auto gy-4 justify-content-center">
        <?php
        foreach ($atalhos as $atalho) {
        ?>
          <div class="col">
            <a href="<?php echo $atalho['atalho_url'] ?>" class="d-flex gap-3 text-black-2 fz-18 align-items-center">
              <img src="<?php echo  $atalho['icon'] ?>" alt="">
              <?php echo $atalho['atalho_titulo'] ?>
            </a>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
<?php
}
?>

<?php

$perguntas_query = new WP_Query(array(
  'post_type' => 'perguntas_post',
  'posts_per_page' => 5,
));

if ($perguntas_query->have_posts()) { ?>

  <section class="py-awe-40 py-md-awe-80">
    <div class="container px-awe-24 px-lg-0 d-flex flex-column gap-awe-24">
      <h2 class="text-uppercase fz-21 fz-md-28 text-primary-light fw-bold">
        Perguntas frequentes
      </h2>

      <div class="accordion d-flex flex-column gap-4" id="accordionPerguntasFrequentes">
        <?php
        while ($perguntas_query->have_posts()) {
          $perguntas_query->the_post(); ?>

          <div class="accordion-item">
            <h2 class="accordion-header" id="heading<?= get_the_ID(); ?>">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo get_the_ID(); ?>" aria-expanded="true" aria-controls="collapse<?php echo get_the_ID(); ?>">
                <span class="fz-21">
                  <?php the_title(); ?>
                </span>
              </button>
            </h2>
            <div id="collapse<?php echo get_the_ID(); ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo get_the_ID(); ?>" data-bs-parent="#accordionPerguntasFrequentes">
              <div class="accordion-body">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        <?php
        } ?>
      </div>

      <div class="d-flex justify-content-end">
        <a href="<?= get_permalink(get_page_by_path('perguntas-page')); ?>" class="text-uppercase btn btn-primary-light py-awe-16 px-awe-24 text-decoration-none-hover fw-semi-bold fz-18">
          Ver todas as perguntas
        </a>
      </div>
    </div>
  </section>
<?php } ?>

<?php get_footer(); ?>
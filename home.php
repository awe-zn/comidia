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
              <img src="<?php the_post_thumbnail(); ?>" alt="" class="img-fluid">
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
      <div class="col-12 mt-awe-40 mt-md-awe-80">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 row-cols-xl-5">
          <div class="col mb-awe-24">
            <a href="" class="d-block text-center text-uppercase fz-16 text-primary-dark-1 fw-semi-bold border border-primary-dark-1 py-awe-16 px-awe-18 rounded bg-primary-dark-1-hover text-white-hover text-decoration-none-hover w-100">
              COORDENAÇÃO
            </a>
          </div>
          <div class="col mb-awe-24">
            <a href="" class="d-block text-center text-uppercase fz-16 text-primary-dark-1 fw-semi-bold border border-primary-dark-1 py-awe-16 px-awe-18 rounded bg-primary-dark-1-hover text-white-hover text-decoration-none-hover w-100">
              SECRETARIA
            </a>
          </div>
          <div class="col mb-awe-24">
            <a href="" class="d-block text-center text-uppercase fz-16 text-primary-dark-1 fw-semi-bold border border-primary-dark-1 py-awe-16 px-awe-18 rounded bg-primary-dark-1-hover text-white-hover text-decoration-none-hover w-100">
              DOCENTES
            </a>
          </div>
          <div class="col mb-awe-24">
            <a href="" class="d-block text-center text-uppercase fz-16 text-primary-dark-1 fw-semi-bold border border-primary-dark-1 py-awe-16 px-awe-18 rounded bg-primary-dark-1-hover text-white-hover text-decoration-none-hover w-100">
              ALUNOS
            </a>
          </div>
          <div class="col mb-awe-24">
            <a href="" class="d-block text-center text-uppercase fz-16 text-primary-dark-1 fw-semi-bold border border-primary-dark-1 py-awe-16 px-awe-18 rounded bg-primary-dark-1-hover text-white-hover text-decoration-none-hover w-100">
              LINHAS DE PESQUISA
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-awe-40 py-md-awe-80 bg-light-1">
  <div class="container px-awe-24 px-lg-0 d-flex flex-column gap-awe-24">
    <h2 class="text-uppercase fz-21 fz-md-28 text-primary-light fw-bold">
      EDITAIS
    </h2>

    <?php
    $args = array(
      'post_type' => 'edital',
      'posts_per_page' => '3',
      'paged'    => get_query_var('paged') ? get_query_var('paged') : 1
    );
    $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="edital is-close is-finished" data-edital="edital03">
          <div class="d-flex gap-2 gap-md-4 justify-content-between flex-wrap flex-md-nowrap">
            <h4 class="edital__titulo fw-bold fz-18 order-1 order-md-0">
              <span class="fw-regular">
                <?php the_date('d/m/y'); ?> |
              </span>
              <?php the_title(); ?>
            </h4>
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

          <div class="d-flex justify-content-end mt-awe-8">
            <a href="<?php echo get_permalink(); ?>" class="d-flex gap-3 align-items-center text-primary-light text-decoration-underline">
              acessar página deste edital
              <span>
                <img src="<?php echo $theme; ?>/dist/image/svg/external-link-2.svg" alt="">
              </span>
            </a>
          </div>
        </div>
    <?php endwhile;
    else : endif; ?>


    <div class="d-flex justify-content-end">
      <a href="<?= get_permalink(get_page_by_path('selecao')); ?>" class="text-uppercase btn btn-primary-light py-awe-16 px-awe-24 text-decoration-none-hover fw-semi-bold fz-18">
        Acessar editais anteriores
      </a>
    </div>
    <div class="card-ppgem text-white fz-16 fz-sm-21 fz-md-24 fw-bold mt-awe-40 mt-md-awe-80">
      Fique pode dentro do que acontece no PPgEM
    </div>
  </div>
</section>

<section class="py-awe-40 py-md-awe-80">
  <div class="container px-awe-24 px-lg-0 d-flex flex-column gap-awe-24">
    <h2 class="text-uppercase fz-21 fz-md-28 text-primary-light fw-bold">
      Perguntas frequentes
    </h2>

    <div class="accordion d-flex flex-column gap-4" id="accordionPerguntasFrequentes">

      <?php

      $perguntas_query = new WP_Query(array(
        'post_type' => 'perguntas',
        'posts_per_page' => 5,
      ));

      if ($perguntas_query->have_posts()) {
        while ($perguntas_query->have_posts()) {
          $perguntas_query->the_post();
      ?>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading<?php echo get_the_ID(); ?>">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo get_the_ID(); ?>" aria-expanded="true" aria-controls="collapse<?php echo get_the_ID(); ?>">
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
        }
      }
      ?>
    </div>

    <div class="d-flex justify-content-end">
      <a href="<?php echo get_permalink(get_page_by_path('perguntas')); ?>" class="text-uppercase btn btn-primary-light py-awe-16 px-awe-24 text-decoration-none-hover fw-semi-bold fz-18">
        Ver todas as perguntas
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
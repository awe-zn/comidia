<?php
// Template Name: seleção

get_header();

$theme = get_bloginfo('template_url');
include 'constants.php';
?>

<style>
  body {
    background: #fafafa;
  }
</style>

<!--Navegação breadcrumb-->
<div class="container px-awe-24 px-lg-0 pt-awe-32 pt-md-awe-48 pb-awe-16">
  <div class="row justify-content-center">
    <div class="col-12 col-lg-11">
      <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
        <ol class="breadcrumb m-0">
          <li class="breadcrumb-item">
            <a href="<?= home_url(); ?>" class="text-aco text-decoration-underline fz-16">
              Home
            </a>
          </li>
          <li class="breadcrumb-item text-truncate active fz-16 text-prata-2" aria-current="page">
            Seleção
          </li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!--/Navegação breadcrumb-->

<main>
  <div class="container px-awe-24 px-lg-0 mb-awe-112">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-11">
        <h1 class="border-bottom border-primary-light pb-awe-8 text-primary-light text-uppercase fw-bold fz-21 fz-md-28">
          Seleção
        </h1>
      </div>
      <div class="col-12 col-lg-11 row my-awe-40 p-0 gap-4 gap-md-0">
        <div class="col-12">
          <p>
            filtre ou pesquise
          </p>
        </div>
        <div class="col-12 col-md-8 d-flex align-items-end">
          <div class="d-flex flex-wrap gap-3">
            <?php include(TEMPLATEPATH . "/inc/filtro-cat-edital.php"); ?>
          </div>
        </div>
        <div class="col-12 col-md-4 d-flex justify-content-end">
          <?php echo do_shortcode($selecao_search_form_shortcode); ?>
        </div>

      </div>
      <div class="col-12 col-lg-11 d-flex flex-column gap-awe-24 mt-awe-40">

        <?php

        $edital_args = array(
          'post_type' => 'editais',
          'posts_per_page' => '15',
          'paged'    => get_query_var('paged') ? get_query_var('paged') : 1,
        );

        $editais_query = new WP_Query($edital_args);
        $index = 0;

        if ($editais_query->have_posts()) { ?>

          <?php
          while ($editais_query->have_posts()) {
            $editais_query->the_post();

            if (get_field('is_finished')) { ?>

              <div class="edital is-close is-finished" data-edital="edital<?= get_the_ID(); ?>">
                <div class="d-flex gap-2 gap-md-4 justify-content-between flex-wrap flex-md-nowrap">
                  <a href="<?= get_permalink(); ?>">
                    <h4 class="edital__titulo fw-bold fz-18 order-1 order-md-0 text-black-2">
                      <span class=" fw-regular">
                        <?= get_the_date('d/m/y'); ?> |
                      </span>
                      <?php the_title(); ?>
                    </h4>
                  </a>
                  <span class="edital__status text-nowrap order-0 order-md-1 ">
                    <span style="color: #4F4F4F;">finalizado</span>
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
            <?php
            } else { ?>

              <div class="edital <?php echo $index != 0 ? 'is-close' : ''; ?>" data-edital="edital<?= get_the_id(); ?>">
                <div class="d-flex gap-2 gap-md-4 justify-content-between flex-wrap flex-md-nowrap">
                  <a href="<?= get_permalink(); ?>">
                    <h4 class="edital__titulo fw-bold fz-18 order-1 order-md-0">
                      <span class="fw-regular">
                        <?= get_the_date('d/m/y'); ?> |
                      </span>
                      <?php the_title(); ?>
                    </h4>
                  </a>
                  <span class="edital__status text-nowrap order-0 order-md-1 ">
                    <span style="color: #27AE60;">em andamento</span>
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
                          <li class="edital__arquivo is-finished <?php if (!$arquivo['foi_publicado']) {
                                                                    echo 'fw-regular';
                                                                  } ?>">
                            <?= $arquivo['titulo']; ?>
                          </li>
                        <?php
                        }
                        ?>
                      </ul>
                    </div>
                    <a href="<?= get_the_permalink(); ?>" class="d-flex gap-3 align-items-center text-primary-light text-decoration-underline">
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
            }
            $index = $index + 1;
          } ?>

          <div class="d-flex justify-content-end">
            <a href="<?= get_permalink(get_page_by_path('selecao')); ?>" class="text-uppercase btn btn-primary-light py-awe-16 px-awe-24 text-decoration-none-hover fw-semi-bold fz-18">
              Acessar editais anteriores
            </a>
          </div>

        <?php } else { ?>
          <h1>Ainda não há editais por aqui</h1>
        <?php } ?>

      </div>

      <div class="col-12 col-lg-11 d-flex justify-content-center mt-awe-80 mt-md-awe-104">
        <nav aria-label="...">
          <div class="pagination d-flex gap-awe-8 align-items-end">
            <style>
              .pagination .page-numbers {
                width: 40px;
                height: 40px;
                border-radius: 8px;
                border: 1px solid #2471b5;
                display: flex;
                justify-content: center;
                align-items: center;
                text-decoration: none;
              }

              .pagination .page-numbers.current {
                background-color: #2471b5;
                color: #fff;
              }

              .pagination .page-numbers.dots {
                border: none;
                color: #2471b5;
                padding: 0;
                margin: 0;
                width: auto;
                height: auto;
              }
            </style>
            <?php
            echo paginate_links(array(
              'base' => str_replace(999999999, '%#%', get_pagenum_link(999999999)),
              'format' => '?paged=%#%',
              'current' => max(1, get_query_var('paged')),
              'total' => $editais_query->max_num_pages,
              'prev_next' => false,
              'show_all' => false,
              'mid_size' => 2,
              'end_size' => 1
            )); ?>
          </div>
        </nav>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
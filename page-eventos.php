<?php
// Template Name: eventos

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
    <div class="col-12  ">
      <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
        <ol class="breadcrumb m-0">
          <li class="breadcrumb-item">
            <a href="<?= home_url(); ?>" class="text-aco text-decoration-underline fz-16">
              Home
            </a>
          </li>
          <li class="breadcrumb-item text-truncate active fz-16 text-prata-2" aria-current="page">
            Eventos
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
      <div class="col-12  ">
        <h1 class="border-bottom border-primary-light pb-awe-8 text-primary-light text-uppercase fw-bold fz-21 fz-md-28">
          Eventos
        </h1>
      </div>

      <!-- eventos ativos -->
      <?php
      $edital_args = array(
        'post_type' => 'eventos-post',
        'posts_per_page' => '15',
        'paged'    => get_query_var('paged') ? get_query_var('paged') : 1,
      );

      $eventos_query = new WP_Query($edital_args);
      $index = 0;

      if ($eventos_query->have_posts()) { ?>
        <div class="col-12 row mt-awe-40 mb-awe-64 p-0 gap-4 gap-md-0">
          <div class="col-12">
            <p>
              filtre
            </p>
          </div>
          <div class="col-12 d-flex align-items-end mt-awe-24 mb-awe-32 mb-md-awe-80">
            <div class="d-flex flex-wrap gap-3">
              <?php include(TEMPLATEPATH . "/inc/filtro-cat-evento.php"); ?>
            </div>
          </div>

          <div class="col-12">
            <h2 class="text-prata fz-28 fw-semi-bold ff-poppins text-uppercase">
              Eventos próximos
            </h2>
          </div>
        </div>

        <div class="col-12   d-flex flex-column gap-awe-24">
          <?php
          while ($eventos_query->have_posts()) {
            $eventos_query->the_post();
            if (!get_field('evento_encerrado')) {

              $date_string = get_field('data_do_evento');
              $data_do_evento = DateTime::createFromFormat('Ymd', $date_string);
          ?>

              <div class="card-evento mb-awe-24 pb-awe-16 pt-awe-32 px-awe-32">
                <div class="d-flex gap-awe-24 flex-column flex-sm-row align-items-md-center">
                  <div class="d-flex flex-column justify-content-center align-itms-md-center">
                    <p class="fz-32 ff-poppins text-primary-light fw-semi-bold text-center">
                      <?php echo $data_do_evento->format('j'); ?>
                    </p>
                    <p class="fz-21 fw-light ff-poppins text-black-2 text-center text-uppercase">
                      <?php
                      foreach ($months as $month) {
                        if ($month['index'] == $data_do_evento->format('m')) {
                          echo $month['string'];
                        };
                      };
                      ?>
                    </p>
                  </div>
                  <div class="">
                    <a href="<?= get_the_permalink(); ?>">
                      <h4 class="fz-16 text-primary-light ff-open-sans fw-bold mb-0">
                        <?php the_title(); ?>
                      </h4>
                    </a>
                    <p class="fz-16 text-gray-1">
                      <?php the_excerpt(); ?>
                    </p>
                  </div>
                </div>
                <a href="<?= get_the_permalink(); ?>" class="float-end mt-1 text-primary-light text-decoration-underline d-flex gap-awe-16">
                  acessar informações do evento
                  <img src="<?= $theme; ?>/dist/image/svg/external-link-2.svg" alt="">
                </a>
              </div>
          <?php
            }
          } ?>
        </div>

      <?php } else { ?>
        <h1>Ainda não há eventos por aqui</h1>
      <?php } ?>

      <!-- eventos passados -->
      <?php
      $edital_args = array(
        'post_type' => 'eventos-post',
        'posts_per_page' => '15',
        'paged'    => get_query_var('paged') ? get_query_var('paged') : 1,
      );

      $eventos_query = new WP_Query($edital_args);
      $index = 0;

      if ($eventos_query->have_posts()) { ?>
        <div class="col-12 my-awe-64">
          <h2 class="text-prata fz-28 fw-semi-bold ff-poppins text-uppercase">
            Eventos anteriores
          </h2>
        </div>

        <div class="col-12 d-flex flex-column gap-awe-24">
          <?php
          while ($eventos_query->have_posts()) {
            $eventos_query->the_post();
            if (get_field('evento_encerrado')) {

              $date_string = get_field('data_do_evento');
              $data_do_evento = DateTime::createFromFormat('Ymd', $date_string);
          ?>

              <div class="card-evento mb-awe-24 pb-awe-16 pt-awe-32 px-awe-32">
                <div class="d-flex gap-awe-24 flex-column flex-sm-row align-items-md-center">
                  <div class="d-flex flex-column justify-content-center align-itms-md-center">
                    <p class="fz-32 ff-poppins text-black-2 fw-semi-bold text-center">
                      <?php echo $data_do_evento->format('j'); ?>
                    </p>
                    <p class="fz-21 fw-light ff-poppins text-black-2 text-center text-uppercase">
                      <?php
                      foreach ($months as $month) {
                        if ($month['index'] == $data_do_evento->format('m')) {
                          echo $month['string'];
                        };
                      };
                      ?>
                    </p>
                  </div>
                  <div class="">
                    <a href="<?= get_the_permalink(); ?>">
                      <h4 class="fz-16 <?php echo get_field('evento_encerrado') ? 'text-black-2' : 'text-primary-light'; ?> ff-open-sans fw-bold mb-0">
                        <?php the_title(); ?>

                      </h4>
                    </a>
                    <p class="fz-16 text-gray-1">
                      <?php the_excerpt(); ?>
                    </p>
                  </div>
                </div>
                <a href="<?= get_the_permalink(); ?>" class="float-end mt-1 text-primary-light text-decoration-underline d-flex gap-awe-16">
                  acessar informações do evento
                  <img src="<?= $theme; ?>/dist/image/svg/external-link-2.svg" alt="">
                </a>
              </div>
          <?php
            }
          } ?>
        </div>

      <?php } else { ?>
        <h1>Ainda não há eventos por aqui</h1>
      <?php } ?>

      <div class="col-12   d-flex justify-content-center mt-awe-80 mt-md-awe-104">
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
              'total' => $eventos_query->max_num_pages,
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
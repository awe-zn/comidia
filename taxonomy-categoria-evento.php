<?php
get_header();

$theme = get_bloginfo('template_url');
include 'constants.php';
?>

<!--Navegação breadcrumb-->
<div class="container px-awe-24 px-lg-0 pt-awe-32 pt-md-awe-48 pb-awe-16">
  <div class="row justify-content-center">
    <div class="col-12">
      <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
        <ol class="breadcrumb m-0">
          <li class="breadcrumb-item">
            <a href="<?php echo home_url(); ?>" class="text-aco text-decoration-underline fz-16">
              Home
            </a>
          </li>
          <li class="breadcrumb-item">
            <a href="<?= get_permalink(get_page_by_path('eventos')); ?>" class="text-aco text-decoration-underline fz-16">
              Eventos
            </a>
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
      <div class="col-12">
        <h1 class="border-bottom border-primary-light pb-awe-8 text-primary-light text-uppercase fw-bold fz-21 fz-md-28">
          Eventos
        </h1>
      </div>
      <div class="col-12 row my-awe-40 p-0 gap-4 gap-md-0 justify-content-end">
        <div class="col-12 mb-awe-16">
          <p>
            filtre
          </p>
        </div>
        <div class="col-12 d-flex align-items-end">
          <div class="d-flex flex-wrap gap-3">
            <?php include(TEMPLATEPATH . "/inc/filtro-cat-evento.php"); ?>
          </div>
        </div>
      </div>
      <div class="col-12 d-flex flex-column gap-awe-24 mt-awe-32">
        <h2 class="text-prata fz-28 fw-semi-bold ff-poppins text-uppercase">
          Eventos do ano de <?php single_cat_title(); ?>
        </h2>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php
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
            ?>
        <?php endwhile;
        else : endif; ?>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php
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
                      <h4 class="fz-16 text-black-2 ff-open-sans fw-bold mb-0">
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
            ?>
        <?php endwhile;
        else : endif; ?>

      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
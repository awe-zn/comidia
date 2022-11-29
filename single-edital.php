<?php
get_header();

$theme = get_bloginfo('template_url');
?>

<div class="container px-lg-0 pt-awe-32 pt-md-awe-48 pb-awe-16">
  <div class="row">
    <div class="col-12 col-lg-11">
      <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
        <ol class="breadcrumb m-0">
          <li class="breadcrumb-item">
            <a href="<?php echo home_url(); ?>" class="text-aco text-decoration-underline fz-16">
              Home
            </a>
          </li>
          <li class="breadcrumb-item">
            <a href="<?php echo home_url('/selecao'); ?>" class="text-aco text-decoration-underline fz-16">
              Editais
            </a>
          </li>
          <li class="breadcrumb-item text-truncate active text-uppercase fz-16 text-uppercase text-prata-2" aria-current="page">
            <?php the_title(); ?>
          </li>
        </ol>
      </nav>
    </div>
  </div>
</div>

<main>
  <div class="container px-awe-24 px-lg-0 mb-awe-112">
    <div class="row justify-content-center">
      <div class="col-12">
        <h1 class="border-bottom border-prata pb-awe-8 text-prata text-uppercase fw-bold fz-21 fz-md-28">
          <?php the_title(); ?>
        </h1>
      </div>
      <div class="col-12 col-md-10 col-lg-8 pt-awe-48 pt-md-awe-64">
        <div class="fz-16 fz-md-18 lh-180 text-prata">
          <p>
            <?php the_content(); ?>
          </p>
        </div>
      </div>
      <div class="col-12 col-md-10 col-lg-8 pt-awe-80 pt-md-awe-104">
        <h2 class="text-uppercase fz-18 fz-md-21 fw-bold text-aco">
          Editais recentes
        </h2>

        <div class="pt-awe-8">
          <?php
          $args = array(
            'post_type' => 'edital',
            'posts_per_page' => '5',
          );
          $the_query = new WP_Query($args);
          ?>
          <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <a href="<?php echo get_permalink(); ?>" class="d-block text-decoration-none border-bottom border-fumaca-light pb-awe-24">
                <a href="" class="d-block border-top border-neve-extra-dark py-awe-32 px-md-awe-16">
                  <p class="fst-italic fz-16 text-prata-2 mb-0">
                    publicado em
                    <span class="text-prata">
                      <?php the_date('d.M.y'); ?>,
                    </span>
                    status:
                    <span>
                      <?php
                      if (get_field('is_finished')) {
                        echo 'finalizado';
                      } else {
                        echo 'andamento';
                      }
                      ?>
                    </span>
                  </p>
                  <p class="text-uppercase fw-bold text-black-2 fz-18">
                    <?php the_title(); ?>
                  </p>
                </a>
              </a>
          <?php endwhile;
          else : endif; ?>

        </div>
        <div class="border-top border-neve-extra-dark pt-awe-24">
          <a href="<?= get_permalink(get_page_by_path('selecao')); ?>" class="text-extra-primary text-decoration-none d-inline-flex align-items-center">
            <span class="me-3">
              <img src="<?= $theme; ?>/dist/image/svg/external-link.svg" alt="">
            </span>
            <span class="text-decoration-underline">
              Acessar mais editais
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</main>


<?php get_footer(); ?>
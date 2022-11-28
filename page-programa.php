<?php
// Template Name: programa
?>

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
            <a href="<?= home_url(); ?>" class="text-aco text-decoration-underline fz-16">
              Home
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

<main class="container px-awe-24 px-lg-0 pt-awe-16">
  <h1 class="text-uppercase fz-21 fz-md-28 ff-poppins text-primary-light fw-semi-bold border-bottom border-primary-light pb-awe-11 mb-0">
    <?php the_title(); ?>
  </h1>
  <div class="row pt-awe-40">
    <div class="col-12 col-md-3">
      <div class="position-sticky sticky-top" style="top: 32px;">
        <h2 class="fz-21 fw-bold ff-poppins text-prata">
          Tópicos
        </h2>
        <ul class="list-unstyled pt-awe-40 pe-awe-24">
          <?php
          $args = array(
            'post_type' => 'producao_post',
            'posts_per_page' => '10',
            'paged'    => get_query_var('paged') ? get_query_var('paged') : 1,
          );
          $the_query = new WP_Query($args);
          ?>
          <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <li class="border-bottom border-fumaca pb-awe-24 mb-awe-24">
                <a href="#<?php the_title(); ?>" class="text-prata-2 text-prata-hover ps-2 fz-16 pb-awe-24">
                  <?php the_title(); ?>
                </a>
              </li>
          <?php endwhile;
          else : endif; ?>
        </ul>
      </div>
    </div>
    <div class="col-12 col-md-9">
      <?php
      $args = array(
        'post_type' => 'producao_post',
        'posts_per_page' => '10',
        'paged'    => get_query_var('paged') ? get_query_var('paged') : 1,
      );
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <div id="<?php the_title(); ?>">
            <h2 class="text-uppercase fz-21 text-extra-primary ff-poppins fw-bold mb-awe-24">
              <?php the_title(); ?>
            </h2>

            <div class="fz-18 ff-open-sans text-prata lh-180 d-flex flex-column gap-awe-24">
              <?php the_content(); ?>
            </div>

            <hr class="bg-fumaca-light my-awe-40">
          </div>
      <?php endwhile;
      else : endif; ?>

    </div>
  </div>
</main>


<div class="py-5"></div>

<?php get_footer(); ?>
<?php
// Template Name: documentos
?>

<?php
get_header();

$theme = get_bloginfo('template_url');
?>

<div class="container px-lg-0 pt-awe-32 pt-md-awe-48 pb-awe-16">
  <div class="row">
    <div class="col-12  ">
      <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
        <ol class="breadcrumb m-0">
          <li class="breadcrumb-item">
            <a href="<?= home_url(); ?>" class="text-aco text-decoration-underline fz-16">
              Home
            </a>
          </li>
          <li class="breadcrumb-item text-truncate active fz-16 text-prata-2" aria-current="page">
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
    <?php the_content(); ?>
  </div>
  </div>
</main>

<div class="py-5"></div>

<?php get_footer(); ?>
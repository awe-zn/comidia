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
            <a href="<?php echo home_url(); ?>" class="text-aco text-decoration-underline fz-16">
              Home
            </a>
          </li>
          <li class="breadcrumb-item">
            <a href="<?= get_permalink(get_page_by_path('eventos')); ?>" class="text-aco text-decoration-underline fz-16">
              Eventos
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

<main class="container px-awe-24 px-lg-0 mb-awe-64 mb-lg-awe-104">
  <div class="row justify-content-center">
    <div class="col-12">
      <h1 class="fz-21 fz-md-28 ff-poppins text-prata fw-semi-bold border-bottom border-gray-2 pb-awe-11 mb-0">
        <?php the_title(); ?>
      </h1>
    </div>

    <div class="col-12 col-md-10 col-lg-9 mt-awe-64">
      <div class="mb-awe-32">
        <span class="fst-italic text-gray-2 fw-medium lh-140 fz-16 d-flex flex-wrap">
          por
          <span class="text-prata-2 fw-bold fst-normal mx-2">
            <?php the_author_meta('display_name', 1); ?>
          </span>
          foi publicado em
          <span class="text-prata fw-medium mx-2">
            <?php echo get_the_date(); ?>
          </span>
        </span>
      </div>

      <!-- conteúdo do post -->
      <div class="post-content mb-awe-40 mb-md-awe-80">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
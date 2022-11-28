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
            <a href="<?php echo home_url('/posts'); ?>" class="text-aco text-decoration-underline fz-16">
              Notícias
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

<main class="container px-awe-24 px-lg-0 mb-awe-64 mb-lg-awe-104">
  <div class="row justify-content-center">
    <div class="col-12">
      <h1 class="text-uppercase fz-21 fz-md-28 ff-poppins text-prata fw-semi-bold border-bottom border-gray-2 pb-awe-11 mb-0">
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

      <!-- filtro por tags -->
      <div>
        <?php
        if (has_tag()) {
        ?>
          <p class="mb-awe-24 fz-16 text-aco">
            filtre por tags
          </p>
          <div class="tags mb-awe-24">
            <?php include(TEMPLATEPATH . "/inc/filtro-tag.php"); ?>
          </div>
        <?php
        }
        ?>

      </div>

      <p class="mb-awe-24 fz-16 text-aco">
        posts relacionados
      </p>

      <!-- posts relacionados -->
      <div class="d-flex flex-column gap-awe-18 border-bottom border-fumaca-light">
        <a href="" class="d-block text-decoration-none border-bottom border-fumaca-light pb-awe-24">
          <p class="text-gray-2 fz-16 mb-awe-8">
            por
            <span class="text-prata fw-bold">
              Nome Sobrenome
            </span>,
            publicado em
            <span class="text-prata">
              08.abr.2022
            </span>
          </p>
          <h5 class="fz-18 fz-md-21 text-prata fw-bold text-decoration-underline-hover mb-0">
            Simão celerado: do nascimento à morte da democracia (VI) – o caso Alan Gideon
          </h5>
        </a>
        <a href="" class="d-block text-decoration-none border-bottom border-fumaca-light pb-awe-24">
          <p class="text-gray-2 fz-16 mb-awe-8">
            por
            <span class="text-prata fw-bold">
              Nome Sobrenome
            </span>,
            publicado em
            <span class="text-prata">
              08.abr.2022
            </span>
          </p>
          <h5 class="fz-18 fz-md-21 text-prata fw-bold text-decoration-underline-hover mb-0">
            Simão celerado: do nascimento à morte da democracia (VI) – o caso Alan Gideon
          </h5>
        </a>
        <a href="" class="d-block text-decoration-none border-bottom border-fumaca-light pb-awe-24">
          <p class="text-gray-2 fz-16 mb-awe-8">
            por
            <span class="text-prata fw-bold">
              Nome Sobrenome
            </span>,
            publicado em
            <span class="text-prata">
              08.abr.2022
            </span>
          </p>
          <h5 class="fz-18 fz-md-21 text-prata fw-bold text-decoration-underline-hover mb-0">
            Simão celerado: do nascimento à morte da democracia (VI) – o caso Alan Gideon
          </h5>
        </a>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
<?php
get_header();

$theme = get_bloginfo('template_url');
include 'constants.php';
?>

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
          <li class="breadcrumb-item text-truncate active fz-16 text-uppercase text-prata-2" aria-current="page">
            Notícias
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
          Notícias
        </h1>
      </div>
      <div class="col-12   row my-awe-40 p-0 gap-4 gap-md-0 justify-content-end">
        <div class="col-12 col-md-6 d-flex align-items-start">
          <p>
            filtre ou pesquise
          </p>
        </div>
        <div class="col-12 col-md-6 d-flex justify-content-end">
          <?php echo do_shortcode($noticias_search_form_shortcode); ?>
        </div>
        <div class="col-12 my-awe-14">
          <p class="fz-16 ff-open-sans text-aco">
            Categorias com mais visualizações
          </p>
        </div>
        <div class="col-12 d-flex align-items-end">
          <div class="d-flex flex-wrap gap-3">
            <?php include(TEMPLATEPATH . "/inc/filtro-cat.php"); ?>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-10 col-lg-8 d-flex flex-column gap-awe-24 mt-awe-32">
        <h3 class="fz-18 fz-md-28 fw-light text-primary">
          Ultimas notícias
        </h3>

        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => '15',
          'paged'    => get_query_var('paged') ? get_query_var('paged') : 1
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <a href="<?php echo get_permalink(); ?>" class="d-block text-decoration-none border-bottom border-fumaca-light pb-awe-24">
              <p class="text-gray-2 fz-16 mb-awe-8">
                por
                <span class="text-prata fw-bold">
                  <?php the_author(); ?>
                </span>,
                publicado em
                <span class="text-prata">
                  <?php echo get_the_date('d.M.y'); ?>
                </span>
              </p>
              <h5 class="fz-18 fz-md-21 text-prata fw-bold text-decoration-underline-hover mb-0">
                <?php the_title(); ?>
              </h5>
            </a>
        <?php endwhile;
        else : endif; ?>

      </div>

      <div class="col-12   d-flex justify-content-center mt-awe-80 mt-md-awe-104">
        <nav aria-label="...">
          <div class="pagination d-flex gap-awe-8 align-items-end">
            <?php
            echo paginate_links(array(
              'base' => str_replace(999999999, '%#%', get_pagenum_link(999999999)),
              'format' => '?paged=%#%',
              'current' => max(1, get_query_var('paged')),
              'total' => $the_query->max_num_pages,
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
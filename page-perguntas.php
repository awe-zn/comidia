<?php
// Template Name: perguntas

get_header();

$theme = get_bloginfo('template_url');
?>


<main class="py-awe-40 py-md-awe-80">
  <div class="container px-awe-24 px-lg-0 d-flex flex-column gap-awe-24">
    <h2 class="text-uppercase fz-21 fz-md-28 text-primary-light fw-bold">
      Perguntas frequentes
    </h2>

    <div class="accordion d-flex flex-column gap-4" id="accordionPerguntasFrequentes">

      <?php

      $perguntas_query = new WP_Query(array(
        'post_type' => 'perguntas_post',
        'posts_per_page' => 5,
      ));

      if ($perguntas_query->have_posts()) { ?>

        <?php
        while ($perguntas_query->have_posts()) {
          $perguntas_query->the_post(); ?>

          <div class="accordion-item">
            <h2 class="accordion-header" id="heading<?= get_the_ID(); ?>">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo get_the_ID(); ?>" aria-expanded="true" aria-controls="collapse<?php echo get_the_ID(); ?>">
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
        } ?>

      <?php } ?>
    </div>
  </div>
</main>


<?php get_footer(); ?>
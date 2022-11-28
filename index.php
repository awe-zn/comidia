<?php
get_header();

$theme = get_bloginfo('template_url');
?>

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
          <li class="breadcrumb-item text-truncate active text-uppercase fz-16 text-uppercase text-prata-2" aria-current="page">
            Notícias
          </li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!--/Navegação breadcrumb-->

<?php
$args = array(
  'post_type' => 'post',
  'posts_per_page' => '15',
  'paged'    => get_query_var('paged') ? get_query_var('paged') : 1
);
$the_query = new WP_Query($args);
?>
<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <a href="<?php the_permalink(); ?>" class="d-block text-decoration-none border-top border-light-4 pt-awe-24">
      <div class="text-gray-2 fz-14 mb-awe-12">
        por
        <span class="text-gray-2 fw-bold">
          <?php the_author(); ?>
        </span>,
        publicado em
        <span class="text-gray-3 fw-medium fst-italic">
          <?php echo get_the_date('d.M.y'); ?>
        </span>
      </div>
      <h3 class="text-dark-1 fw-bold lh-160 fz-16 fz-md-21 text-decoration-underline-hover">
        <?php the_title(); ?>
      </h3>
    </a>
<?php endwhile;
else : endif; ?>

<?php get_footer(); ?>
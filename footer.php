<?php
$theme = get_bloginfo('template_url');
?>

<footer>
  <div class="pt-awe-80 pb-awe-48 bg-primary-light">
    <div class="container px-awe-24">
      <div class="row">
        <div class="col-12 col-sm-6 col-lg-3 border-dashed">
          <div class="d-flex flex-column gap-1">
            <h5 class="text-white fz-18 text-uppercase fw-bold">
              INSTITUCIONAL
            </h5>
            <a href="" class="text-white fz-16 fz-md-14">
              Sobre o programa
            </a>
            <a href="" class="text-white fz-16 fz-md-14">
              Linhas de pesquisa
            </a>
            <a href="" class="text-white fz-16 fz-md-14">
              Cursos
            </a>
            <a href="" class="text-white fz-16 fz-md-14">
              Docentes
            </a>
            <a href="" class="text-white fz-16 fz-md-14">
              Coordenação
            </a>
            <a href="" class="text-white fz-16 fz-md-14">
              Secretaria
            </a>
            <a href="" class="text-white fz-16 fz-md-14">
              Estatísticas
            </a>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-3 border-dashed ps-sm-4 mt-awe-32 mt-sm-0">
          <div class="d-flex flex-column gap-1 mb-4">
            <h5 class="text-white fz-18 text-uppercase fw-bold">
              ACADÊMICO
            </h5>
            <a href="" class="text-white fz-16 fz-md-14">
              Estrutura curricular
            </a>
            <a href="" class="text-white fz-16 fz-md-14">
              Disciplinas
            </a>
            <a href="" class="text-white fz-16 fz-md-14">
              Cronograma do Semestre
            </a>
          </div>
          <div class="d-flex flex-column gap-1">
            <h5 class="text-white fz-18 text-uppercase fw-bold">
              PRODUÇÃO
            </h5>
            <?php
            $args = array(
              'post_type' => 'producao_post',
              'posts_per_page' => '10',
              'paged'    => get_query_var('paged') ? get_query_var('paged') : 1,
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php echo home_url('/producao'); ?>/#<?php the_title(); ?>" class="text-white fz-16 fz-md-14">
                  <?php the_title(); ?>
                </a>
            <?php endwhile;
            else : endif; ?>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-3 border-dashed ps-lg-4 mt-awe-32 mt-lg-0">
          <div class="d-flex flex-column gap-1">
            <h5 class="text-white fz-18 text-uppercase fw-bold">
              Documentos
            </h5>
            <?php
            $args = array(
              'post_type' => 'documento_post',
              'posts_per_page' => '10',
              'paged'    => get_query_var('paged') ? get_query_var('paged') : 1,
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php echo home_url('/documentos'); ?>/#<?php the_title(); ?>" class="text-white fz-16 fz-md-14">
                  <?php the_title(); ?>
                </a>
            <?php endwhile;
            else : endif; ?>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-3 border-dashed mt-awe-32 mt-lg-0 ps-sm-4">
          <div class="d-flex flex-column gap-1 mb-awe-32">
            <h5 class="text-white fz-18 text-uppercase fw-bold">
              ACADÊMICO
            </h5>
            <a href="" class="text-white fz-16 fz-md-14">
              Estrutura curricular
            </a>
            <a href="" class="text-white fz-16 fz-md-14">
              Disciplinas
            </a>
            <a href="" class="text-white fz-16 fz-md-14">
              Cronograma do Semestre
            </a>
          </div>
          <div class="d-flex flex-column gap-1">
            <h5 class="text-white fz-18 text-uppercase fw-bold">
              Processo Seletivo
            </h5>
            <a href="" class="text-white fz-16 fz-md-14">
              Editais passados
            </a>
            <a href="" class="text-white fz-16 fz-md-14">
              Outros documentos
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-awe-24 bg-primary-dark-2 d-flex justify-content-center px-awe-24">
    <div class="text-white text-md-center fz-16 fz-md-14">
      <p class="mb-1">UNIVERSIDADE FEDERAL DO RIO GRANDE DO NORTE</p>
      <p class="mb-1">Centro de Ciências Humanas, Letras e Artes</p>
      <p class="mb-1">Programa de Pós-Graduação em Estudos da Mídia</p>
      <p class="mb-1">campus Universitário Lago Nova - CEP 59072-970 - Natal, RN - Brasil</p>
      <p class="mb-1">
        Telefone: 84 3342-2245 ramal 706 · <a href="mailto:ppgem@cchla.ufrn.br" class="text-white">ppgem@cchla.ufrn.br</a>
      </p>
    </div>
  </div>
  <div class="bg-primary-dark-3 py-awe-14 d-flex justify-content-center">
    <a href="https://agenciaweb.ifrn.edu.br/" target="_blank">
      <img src="<?= $theme ?>/dist/image/svg/awe-logo.svg" alt="">
    </a>
  </div>
</footer>

<?php wp_footer(); ?>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="<?= $theme ?>/dist/js/index.js"></script>
</body>

</html>
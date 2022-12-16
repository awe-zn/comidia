<?php
$theme = get_bloginfo('template_url');
include 'constants.php';
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

            <?php

            $institucional_links = get_post_meta($home_page_id, 'institucional_links', true);

            if ($institucional_links) {

              foreach ($institucional_links as $key => $institucional_link) {
            ?>
                <a href="<?= $institucional_link['institucional_link_url']; ?>" class="text-white fz-16 fz-md-14">
                  <?= $institucional_link['institucional_link_titulo']; ?>
                </a>
            <?php
              }
            }
            ?>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-3 border-dashed ps-sm-4 mt-awe-32 mt-sm-0">
          <div class="d-flex flex-column gap-1 mb-4">
            <h5 class="text-white fz-18 text-uppercase fw-bold">
              ACADÊMICO
            </h5>

            <?php

            $academico_links = get_post_meta($home_page_id, 'academico_links', true);

            if ($academico_links) {

              foreach ($academico_links as $key => $academico_link) {
            ?>
                <a href="<?= $academico_link['academico_link_url']; ?>" class="text-white fz-16 fz-md-14">
                  <?= $academico_link['academico_link_titulo']; ?>
                </a>
            <?php
              }
            }
            ?>
          </div>
          <div class="d-flex flex-column gap-1">
            <h5 class="text-white fz-18 text-uppercase fw-bold">
              PRODUÇÃO
            </h5>

            <?php

            $producao_links = get_post_meta($home_page_id, 'producao_links', true);

            if ($producao_links) {

              foreach ($producao_links as $key => $producao_link) {
            ?>
                <a href="<?= $producao_link['producao_link_url']; ?>" class="text-white fz-16 fz-md-14">
                  <?= $producao_link['producao_link_titulo']; ?>
                </a>
            <?php
              }
            }
            ?>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-3 border-dashed ps-lg-4 mt-awe-32 mt-lg-0">
          <div class="d-flex flex-column gap-1">
            <h5 class="text-white fz-18 text-uppercase fw-bold">
              Documentos
            </h5>

            <?php

            $documentos_links = get_post_meta($home_page_id, 'documentos_links', true);

            if ($documentos_links) {

              foreach ($documentos_links as $key => $documento_link) {
            ?>
                <a href="<?= $documento_link['documento_link_url']; ?>" class="text-white fz-16 fz-md-14">
                  <?= $documento_link['documento_link_titulo']; ?>
                </a>
            <?php
              }
            }
            ?>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-3 border-dashed mt-awe-32 mt-lg-0 ps-sm-4">
          <div class="d-flex flex-column gap-1 mb-awe-32">
            <h5 class="text-white fz-18 text-uppercase fw-bold">
              DISCENTES
            </h5>
            <?php

            $discentes_links = get_post_meta($home_page_id, 'discentes_links', true);

            if ($discentes_links) {

              foreach ($discentes_links as $key => $discentes_link) {
            ?>
                <a href="<?= $discentes_link['discentes_link_url']; ?>" class="text-white fz-16 fz-md-14">
                  <?= $discentes_link['discentes_link_titulo']; ?>
                </a>
            <?php
              }
            }
            ?>
          </div>
          <div class="d-flex flex-column gap-1">
            <h5 class="text-white fz-18 text-uppercase fw-bold">
              Processo seletivo
            </h5>

            <?php

            $processo_seletivo_links = get_post_meta($home_page_id, 'processo_seletivo_links', true);

            if ($processo_seletivo_links) {

              foreach ($processo_seletivo_links as $key => $processo_seletivo_link) {
            ?>
                <a href="<?= $processo_seletivo_link['processo_seletivo_link_url']; ?>" class="text-white fz-16 fz-md-14">
                  <?= $processo_seletivo_link['processo_seletivo_link_titulo']; ?>
                </a>
            <?php
              }
            }
            ?>
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
        Telefone: <?= get_field('numero_de_telefone', $home_page_id); ?> ramal 706 · <a href="mailto:<?= get_field('e-mail', $home_page_id); ?>" class="text-white"><?= get_field('e-mail', $home_page_id); ?></a>
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
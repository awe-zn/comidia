<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Comidia</title>

  <!-- fonte -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;600;700;800;900&display=swap" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/style.css" />
</head>

<body>

  <header class="">
    <div class="container-fluid container-lg navbar__container px-0">
      <div class="background">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/image/svg/mask-group.svg" class="img-fluid h-100" alt="">
      </div>
      <nav class="navbar navbar-expand-lg p-0">
        <div class="container-fluid container-lg">
          <div class="w-100 d-flex justify-content-between">
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/dist/image/svg/nav-logo.svg" alt="">
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <img src="<?php echo get_template_directory_uri(); ?>/dist/image/svg/menu.svg" alt="">
            </button>
          </div>
          <div class="px-5 mx-xl-5 d-none d-lg-block"></div>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <div class="w-100 d-none d-lg-block">
              <div class="d-flex justify-content-end fz-14">
                <a href="mailto:ppgem@cchla.ufrn.br">
                  ppgem@cchla.ufrn.br
                </a>
                <span class="px-2">
                  |
                </span>
                <a href="tel:8433422245">
                  +55 84 3342-2245
                </a>
                <div class="ps-4 d-flex gap-4">
                  <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/image/svg/youtube-light.svg" alt="">
                  </a>
                  <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/image/svg/instagram-light.svg" alt="">
                  </a>
                </div>
              </div>
              <hr class="divider">
              <div class="d-flex justify-content-end fz-14 text-uppercase  gap-2">
                <a href="programa.html" class="text-nowrap">
                  O PROGRAMA
                </a>
                |
                <a href="academico.html">
                  ACADÊMICO
                </a>
                |
                <a href="selecao.html">
                  SELEÇÃO
                </a>
                |
                <a href="producao.html">
                  PRODUÇÃO
                </a>
                |
                <a href="<?php echo home_url('/documentos'); ?>">
                  DOCUMENTOS
                </a>
              </div>
            </div>
            <div class="w-100 py-5 d-flex flex-column d-lg-none">
              <div class="d-flex flex-column text-center gap-4">
                <a href="programa.html" class="text-link">
                  O PROGRAMA
                </a>
                <a href="academico.html" class="text-link">
                  ACADÊMICO
                </a>
                <a href="selecao.html" class="text-link">
                  SELEÇÃO
                </a>
                <a href="producao.html" class="text-link">
                  PRODUÇÃO
                </a>
                <a href="<?php echo home_url('/documentos'); ?>" class="text-link">
                  DOCUMENTOS
                </a>
              </div>

              <hr>

              <div class="d-flex flex-column gap-4 align-items-center">
                <a href="mailto:ppgem@cchla.ufrn.br" class="text-link">
                  ppgem@cchla.ufrn.br
                </a>
                <a href="tel:8433422245" class="text-link">
                  +55 84 3342-2245
                </a>
                <div class="d-flex gap-4">
                  <a href="" class="text-link">
                    <img width="32" src="<?php echo get_template_directory_uri(); ?>/dist/image/svg/youtube.svg" alt="">
                  </a>
                  <a href="" class="text-link">
                    <img width="32" src="<?php echo get_template_directory_uri(); ?>/dist/image/svg/instagram.svg" alt="">
                  </a>
                </div>
              </div>
              </a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
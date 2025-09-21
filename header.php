
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package neurobeep
 */

?>

<!doctype html>

<html lang="en" data-bs-theme="light" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

	  <?php wp_head(); ?>

    <!-- SEO Meta Tags-->
    <meta name="description" content="Neurobeep">
    <meta name="keywords" content="bootstrap, business, creative agency, construction, services, e-commerce, shopping cart, mobile app showcase, multipurpose, shop, ui kit, marketing, seo, landing, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="SirCruX Studios">

    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Theme switcher (color modes) -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/theme-switcher.js"></script>

    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/safari-pinned-tab.svg" color="#6366f1">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" media="screen" href="../<?php echo get_template_directory_uri(); ?>/assets/vendor/lightgallery/css/lightgallery-bundle.min.css">
    <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.css">

    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/assets/css/theme.min.css">

    <!-- Page loading styles -->
    <style>

      

      .card-min {
        min-height:312px;
      }
      .contact-cta,
      .contact-cta h3,
      .contact-cta a,
      .contact-cta p {
        color: #fff !important;
      }
      .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      [data-bs-theme="dark"] .page-loading {
        background-color: #0b0f19;
      }
      .page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-size: 1rem;
        font-weight: normal;
        color: #9397ad;
      }
      [data-bs-theme="dark"] .page-loading-inner > span {
        color: #fff;
        opacity: .6;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        border: .15em solid #b4b7c9;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      [data-bs-theme="dark"] .page-spinner {
        border-color: rgba(255,255,255,.4);
        border-right-color: transparent;
      }
      @-webkit-keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
    </style>

    <!-- Page loading scripts -->
    <script>
      (function () {
        window.onload = function () {
          const preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 1000);
        };
      })();
    </script>
  </head>


  <!-- Body -->
  <body>

<header class="header1 header navbar navbar-expand-lg bg-light shadow-sm fixed-top">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <div class="container px-3">
      <a href="/" class="navbar-brand pe-3">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" width="220" alt="neurobeep">
      </a>
      <div id="navbarNav" class="offcanvas offcanvas-end">
        <div class="offcanvas-header border-bottom">
          <h5 class="offcanvas-title">Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" aria-current="page">O Projeto</a>
              <div class="dropdown-menu p-0">
                <div class="d-lg-flex">
                  <!-- <div class="mega-dropdown-column d-flex justify-content-center align-items-center rounded-3 rounded-end-0 px-0" style="margin: -1px; background-color: #f3f6ff;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landings.png" alt="Landings">
                  </div> -->
                  <div class="mega-dropdown-column pt-lg-3 pb-lg-4" style="--si-mega-dropdown-column-width: 15rem;">
                    <ul class="list-unstyled mb-0">
                      <li><a href="page-quem-somos.html" class="dropdown-item">Quem somos?</a></li>
                      <li><a href="page-equipes.html" class="dropdown-item">Equipes</a></li>
                      <li><a href="page-parceiros.html" class="dropdown-item">Parceiros</a></li>
                      <li><a href="page-eixos-estruturantes.html" class="dropdown-item">Eixos Estruturantes</a></li>
                      <li><a href="page-laboratorios.html" class="dropdown-item">Laboratórios</a></li>
                      <li><a href="page-linhas-tematicas.html" class="dropdown-item">Linhas Temáticas</a></li>
                   </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a href="page-painel.html" class="nav-link">Painel</a>
            </li>
            <li class="nav-item">
              <a href="page-galeria.html" class="nav-link">Galeria</a>
            </li>
            <li class="nav-item">
              <a href="/noticias" class="nav-link">Notícias</a>
            </li>
            <li class="nav-item">
              <a href="page-contato.html" class="nav-link">Contato</a>
            </li>
          </ul>
        </div>
             
      </div>

      <div class="form-check form-switch mode-switch pe-lg-1 ms-auto me-4" data-bs-toggle="mode">
        <input type="checkbox" class="form-check-input" id="theme-mode">
        <label class="form-check-label d-none d-sm-block" for="theme-mode">
          <i class="fa-solid fa-sun"></i></i> <!-- Ícone para "Padrão" -->
        </label>
        <label class="form-check-label d-none d-sm-block" for="theme-mode">
          <i class="fas fa-moon"></i> <!-- Ícone para "Acessível" -->
        </label>
      </div>
      <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="d-none d-xl-block">
        <select class="form-select form-select-sm" style="max-width: 130px;">
          <option value="English">Português</option>
          <option value="Français">English</option>
        </select>
      </div>
      
     
    </div>
  </header>
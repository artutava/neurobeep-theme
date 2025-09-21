<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package neurobeep
 */

get_header();
?>
    
    <!-- Page loading spinner -->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Carregando...</span>
      </div>
    </div>
    

    <!-- Page wrapper for sticky footer -->
    <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
    <main class="page-wrapper">

      
      

      <!-- CONTEUDO START -->
            <!-- Hero -->
      <section class="jarallax position-relative d-flex align-items-center min-vh-100 bg-light mb-5 py-lg-5 pt-5" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/landing/digital-agency/hero-bg.svg);" data-jarallax data-img-position="0% 100%" data-speed="0.5">
        <div class="container position-relative zindex-5 py-5">
          <div class="row justify-content-md-start justify-content-center">
            <div class="col-md-6 col-sm-8 order-md-1 order-2 d-flex flex-column justify-content-between mt-4 pt-2 text-md-start text-center">
              <div class="mb-md-8 pb-xl-6 mb-4">

                <h3 class="display-5 mb-4"><span class="text-gradient-primary">Inclusão Educacional através da Neurociência, Tecnologia Assistiva e Robótica</span></h3>

                
                <div class="d-md-flex align-items-md-start">
                  
                  <p class="fs-xl pb-4 mb-1 mb-md-2 mb-lg-3">Uma proposta de inclusão para crianças com deficiências motoras por meio da robótica educacional</p>
                  <!--<a href="page-quem-somos.html" class="btn btn-lg btn-primary flex-shrink-0 me-md-4 mb-md-0 mb-sm-4 mb-3">Ler mais</a>-->
                </div>
                <!-- Video popup btn -->
                <div class="d-inline-flex align-items-center position-relative mb-5">
                  <a href="https://www.youtube.com/watch?v=XUnS1QCASIc" class="btn btn-video btn-icon btn-lg flex-shrink-0 me-3 stretched-link" data-bs-toggle="video" aria-label="Play video">
                    <i class="bx bx-play"></i>
                  </a>
                  <h4 class=" mb-0">Conheça o Projeto</h4>
                </div>
                
              </div>

              <!-- Scroll down btn -->
              <!-- <div class="d-inline-flex align-items-center justify-content-center justify-content-md-start position-relative">
                <a href="#benefits" data-scroll data-scroll-offset="100" class="btn btn-video btn-icon rounded-circle shadow-sm flex-shrink-0 stretched-link me-3" aria-label="Scroll for more">
                  <i class="bx bx-chevron-down"></i>
                </a>
                <span class="fs-sm">Descubra mais</span>
              </div> -->
            </div>
            

            <!-- Animated gfx -->
            <div class="col-sm-6 col-9 order-md-2 order-1">
              <lottie-player class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/assets/json/animation-neurobeep.json" background="transparent" speed="1" loop autoplay></lottie-player>
            </div>
          </div>
        </div>
      </section>

      

       <!-- How it works (Slider) -->
       <section class="container">
        <div class="row align-items-center">
          <!-- Sturtups category -->
      <div class="row align-items-center justify-content-center py-4 py-md-5 my-1 my-sm-3 my-md-0 my-xl-3">
        <div class="col-10 col-sm-9 col-md-6 pb-3 mb-3">
          <!-- Parallax (3D Tilt) gfx -->
        <div class="tilt-3d" data-tilt data-tilt-full-page-listening data-tilt-max="12" data-tilt-perspective="1200">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/app-showcase-2/screens/neurobeep_logo_veert_v2.png" width="500" alt="Dashboard">
        </div>
        </div>
        <div class="col-md-6 col-xl-5 text-center text-md-start">
          <h3 class="display-7 mb-4"><span class="text-gradient-primary">Habilitar crianças em processos de ensino-aprendizagem</span></h3>
          <p class="fs-lg pb-4 mb-0">O NeuroBeep é um projeto transformador que integra avanços em neurociência e tecnologia assistiva para criar soluções inovadoras que permitam a crianças com paralisia cerebral severa participar ativamente de processos educacionais mediados por robótica.</p>
          <a href="page-quem-somos.html" class="btn btn-outline-primary mt-1">
            Leia mais
            <i class="bx bx-chevron-right fs-lg ms-2 me-n2"></i>
          </a>
        </div>
      </div>
          </div>
        </div>
      </section>



      <!-- Solutions -->
      <section class="container mb-5 ">
        <div>
          <h3 class="display-7 mb-4"><span class="text-gradient-primary">Linhas temáticas do NeuroBeep</span></h3>
          <p class="fs-xl pb-4 mb-1 mb-md-2 mb-2">Com foco na inovação tecnológica e na acessibilidade, o projeto desenvolve interfaces cérebro-máquina e plataformas de robótica para superar barreiras físicas e cognitivas. 
        Ao oferecer soluções replicáveis, busca ampliar a autonomia das pessoas e contribuir para uma sociedade mais inclusiva.</p>
        </div>
        <!-- Swiper slider -->
        <div class="swiper mb-xl-3" data-swiper-options='{
          "spaceBetween": 24,
          "loop": true,
          "speed": 2000,
          "autoplay": {
            "delay": 0,
            "disableOnInteraction": false
          },
          "breakpoints": {
            "0": {
              "slidesPerView": 1
            },
            "500": {
              "slidesPerView": 2
            },
            "768": {
              "slidesPerView": 3
            },
            "1200": {
              "slidesPerView": 4
            }
          },
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          }
        }' autoplay>

          <div class="swiper-wrapper mt-2">

            <!-- Swiper item -->
            <div class="swiper-slide card-hover">
              <div class="card-min card card flex-column flex-sm-row flex-md-column flex-xxl-row align-items-center card-hover border-primary">
                <div class="card-body my-md-5 my-4 py-xl-2 py-md-0 py-sm-2 text-center">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/habilitacao.svg" width="90" alt="Icon" class="d-block mb-4 mx-auto">
                  <h4><span class="text-gradient-primary">Habilitação</span></h4>
                </div>
              </div>
            </div>

            <!-- Swiper item -->
            <div class="swiper-slide card-hover">
              <div class="card-min card card flex-column flex-sm-row flex-md-column flex-xxl-row align-items-center card-hover border-primary">
                <div class="card-body my-md-5 my-4 py-xl-2 py-md-0 py-sm-2 text-center">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/reabilitacao.svg"width="90" alt="Icon" class="d-block mb-4 mx-auto">
                  <h4><span class="text-gradient-primary">Reabilitação</span></h4>
                </div>
              </div>
            </div>

            <!-- Swiper item -->
            <div class="swiper-slide card-hover">
              <div class="card-min card card flex-column flex-sm-row flex-md-column flex-xxl-row align-items-center card-hover border-primary">
                <div class="card-body my-md-5 my-4 py-xl-2 py-md-0 py-sm-2 text-center">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/convivencia.svg"width="90" alt="Icon" class="d-block mb-4 mx-auto">
                  <h4><span class="text-gradient-primary">Convivência</span></h4>
                </div>
              </div>
            </div>

            <!-- Swiper item -->
            <div class="swiper-slide card-hover">
              <div class="card-min card card flex-column flex-sm-row flex-md-column flex-xxl-row align-items-center card-hover border-primary">
                <div class="card-body my-md-5 my-4 py-xl-2 py-md-0 py-sm-2 text-center">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/cuidado.svg"width="90" alt="Icon" class="d-block mb-4 mx-auto">
                  <h4><span class="text-gradient-primary">Cuidado</span></h4>
                </div>
              </div>
            </div>

            <!-- Swiper item -->
            <div class="swiper-slide card-hover">
              <div class="card-min card card flex-column flex-sm-row flex-md-column flex-xxl-row align-items-center card-hover border-primary">
                <div class="card-body my-md-5 my-4 py-xl-2 py-md-0 py-sm-2 text-center">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/transporte.svg"width="90" alt="Icon" class="d-block mb-4 mx-auto">
                  <h4><span class="text-gradient-primary">Transporte</span></h4>
                </div>
              </div>
            </div>

            <!-- Swiper item -->
            <div class="swiper-slide card-hover">
              <div class="card-min card card flex-column flex-sm-row flex-md-column flex-xxl-row align-items-center card-hover border-primary">
                <div class="card-body my-md-5 my-4 py-xl-2 py-md-0 py-sm-2 text-center">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/tech.svg"width="90" alt="Icon" class="d-block mb-4 mx-auto">
                  <h4><span class="text-gradient-primary">Tecnologias para Inclusão Digital</span></h4>
                </div>
              </div>
            </div>
          </div>

          <!-- Swiper pagination -->
          <div class="swiper-pagination position-static mt-4 pt-lg-3 pt-2"></div>
        </div>
      </section>


      <!-- Featured Projects -->
      <section class="container mb-5 pt-lg-2 pt-xl-4 pb-2 pb-md-3 pb-lg-5">
        <div>
          <h3 class="display-7 mb-4"><span class="text-gradient-primary">Confira o que está sendo desenvolvido pelo NeuroBeep</span></h3>
        </div>
        <!-- Portfolio grid -->
        <div class="masonry-grid row g-md-4 g-3 mb-4">

          <!-- Item -->
          <div class="masonry-grid-item col-md-4 col-sm-6 col-12">
            
              
              <div class="card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/grid/07.jpg" class="rounded-3" alt="Image">
              </div>
            </a>
          </div>

          <!-- Item -->
          <div class="masonry-grid-item col-md-4 col-sm-6 col-12">
            <a href="page-nossas-acoes.html" class="card card-portfolio card-hover bg-transparent border-0">
              <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-80 rounded-3"></span>
                <div class="position-relative zindex-2">
                  <h3 class="h5 text-light mb-2">Nossas Ações</h3>
                </div>
              </div>
              <div class="card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/grid/acoes_2.png" class="rounded-3" alt="Image">
              </div>
            </a>
          </div>

          <!-- Item -->
          <div class="masonry-grid-item col-md-4 col-sm-6 col-12">
            <a href="#" class="card card-portfolio card-hover bg-transparent border-0">
              <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-80 rounded-3"></span>
                <div class="position-relative zindex-2">
                  <h3 class="h5 text-light mb-2">Acesso ao Sistema NeuroBeep</h3>
                </div>
              </div>
              <div class="card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/grid/banco_de_dados.png" class="rounded-3" alt="Image">
              </div>
            </a>
          </div>

          <!-- Item -->
          <div class="masonry-grid-item col-md-8 col-12">
            <a href="page-neurobeep-2C.html" class="card card-portfolio card-hover bg-transparent border-0">
              <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-80 rounded-3"></span>
                <div class="position-relative zindex-2">
                  <h3 class="h5 text-light mb-2">Neurobeep 2C</h3>
                </div>
              </div>
              <div class="card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/grid/neurobeep_2c_2.png" class="rounded-3" alt="Image">
              </div>
            </a>
          </div>
        </div>

        <div class="pt-md-3 pt-2 text-center">
          <a href="page-painel.html" class="btn btn-lg btn-primary w-sm-auto w-100">Explorar tudo</a>
        </div>
      </section>

      <section class="container">
        <div class="row align-items-center justify-content-center py-4 py-md-5 my-1 my-md-0 my-xl-3 gx-0">
          <!-- Logo (SVG) Section -->
          <div class="col-10 col-sm-9 col-md-6 pb-3 mb-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/app-showcase-2/screens/ods_logo.png" width="450" alt="Startupper" class="pe-md-4">
          </div>
          <!-- Text Section -->
          <div class="col-md-6 col-xl-5 text-center text-md-start">
            <h3 class="display-7 mb-2">
              <span class="text-gradient-primary">Sustentabilidade no NeuroBeep</span>
            </h3>
            <p class="fs-lg mb-0">
              O NeuroBeep promove os Objetivos de Desenvolvimento Sustentável (ODS) ao transformar a vida de crianças com paralisia cerebral por meio da educação inclusiva e tecnologia assistiva. 
              O projeto combina saúde, educação e inovação para garantir bem-estar, ampliar o acesso à educação, reduzir desigualdades e fortalecer parcerias, posicionando o Brasil como referência em inclusão e inovação.
            </p>
          </div>
        </div>
      </section>

      

      <!-- Brands (Carousel) -->
      <section class="container pb-4 pb-lg-5 mb-3">
        <div class="d-flex align-items-center justify-content-md-between justify-content-center mb-md-4 mb-3">
          <h2 class="mb-0">Parceiros e Colaboradores</h2>

          <!-- Slider prev/next buttons + Quotation mark -->
          <div class="d-md-flex d-none ms-4">
            <button type="button" id="prev-brand" class="btn btn-prev btn-icon btn-sm me-2" aria-label="Previous">
              <i class="bx bx-chevron-left"></i>
            </button>
            <button type="button" id="next-brand" class="btn btn-next btn-icon btn-sm ms-2" aria-label="Next">
              <i class="bx bx-chevron-right"></i>
            </button>
          </div>
        </div>
        <div class="swiper mx-n2" data-swiper-options='{
          "slidesPerView": 2,
          "navigation": {
            "prevEl": "#prev-brand",
            "nextEl": "#next-brand"
          },
          "loop": true,
          "speed": 2000,
          "autoplay": {
            "delay": 0,
            "disableOnInteraction": false
          },
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "500": {
              "slidesPerView": 3,
              "spaceBetween": 8
            },
            "650": {
              "slidesPerView": 4,
              "spaceBetween": 8
            },
            "900": {
              "slidesPerView": 5,
              "spaceBetween": 8
            },
            "1100": {
              "slidesPerView": 6,
              "spaceBetween": 8
            }
          }
        }'>
          <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2 brand-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/1-ufpe_logo.png" 
                    data-light-src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/1-ufpe_logo.png" 
                    data-dark-src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/1-ufpe_logo_mono.png"
                    class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>

            <!-- Item 2 -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2 brand-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/2-debm_logo.png" 
                    data-light-src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/2-debm_logo.png" 
                    data-dark-src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/2-debm_logo_mono.png"
                    class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>

            <!-- Item 3 -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2 brand-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/3-finep_logo.png" 
                    data-light-src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/3-finep_logo.png" 
                    data-dark-src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/3-finep_logo_mono.png"
                    class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>

            <!-- Item 4 -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2 brand-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/4-ufrn_logo.png" 
                    data-light-src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/4-ufrn_logo.png" 
                    data-dark-src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/4-ufrn_logo_mono.png"
                    class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>

            <!-- Item 5 -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2 brand-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/5-puc_logo.png" 
                    data-light-src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/5-puc_logo.png" 
                    data-dark-src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/5-puc_logo_mono.png"
                    class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>


            <!-- Item 6 -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2 brand-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/6-ufrb_logo.png" 
                    data-light-src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/6-ufrb_logo.png" 
                    data-dark-src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/6-ufrb_logo_mono.png"
                    class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>

            <!-- Item 7 -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2 brand-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/7-itcbio_logo.png" 
                    data-light-src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/7-itcbio_logo.png" 
                    data-dark-src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/7-itcbio_logo_mono.png"
                    class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>

            <!-- Item 8 -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2 brand-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/8-roboeduc_logo.png" 
                    data-light-src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/8-roboeduc_logo.png" 
                    data-dark-src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/8-roboeduc_logo_mono.png"
                    class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>

            <!-- Item 9 -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2 brand-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/9-neurobots_logo.png" 
                    data-light-src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/9-neurobots_logo.png" 
                    data-dark-src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/9-neurobots_logo_mono.png"
                    class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>

            <!-- Item 10 -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2 brand-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/10-realportugues_logo.png" 
                    data-light-src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/10-realportugues_logo.png" 
                    data-dark-src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/10-realportugues_logo_mono.png"
                    class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>
          <!-- Pagination (bullets) -->
          <div class="swiper-pagination position-relative pt-3 mt-4 d-md-none d-flex"></div>
        </div>
      </section>



      <!-- Blog + Contact cta -->
      <div class="bg-secondary mb-5 pt-5">

      <?php
// Query: pega exatamente 3 posts mais recentes
$q = new WP_Query([
  'post_type'           => 'post',
  'posts_per_page'      => 3,
  'ignore_sticky_posts' => 1,
]);

// Caminhos de imagens padrão (usando as que você já tinha)
$BIG_FALLBACK  = get_template_directory_uri() . '/assets/img/blog/01.jpg'; // destaque
$SMALL_FALLBACK = get_template_directory_uri() . '/assets/img/blog/06.jpg'; // laterais

// Helper: "x horas atrás" até 7 dias; depois data
function nb_time_or_date( $post_id ) {
  $post_time = get_the_time( 'U', $post_id );
  $diff      = current_time( 'timestamp' ) - $post_time;
  if ( $diff < WEEK_IN_SECONDS ) {
    return human_time_diff( $post_time, current_time( 'timestamp' ) ) . ' atrás';
  }
  return get_the_date( 'j \d\e F \d\e Y', $post_id );
}
?>

<!-- Blog -->
<section class="container mb-5 py-lg-5">
  <h2 class="h1 mb-4 pb-3">Últimas Notícias</h2>

  <?php if ( $q->have_posts() ) : ?>
    <div class="row">
      <?php $i = 0; while ( $q->have_posts() ) : $q->the_post(); ?>
        <?php
          $post_id   = get_the_ID();
          $permalink = get_permalink();
          $title     = get_the_title();
          $cat       = get_the_category();
          $cat_name  = !empty($cat) ? $cat[0]->name : 'Notícias';
          $cat_link  = !empty($cat) ? get_category_link( $cat[0]->term_id ) : '#';
          $time_txt  = nb_time_or_date( $post_id );

          // Featured image ou fallback
          $thumb_big = get_the_post_thumbnail_url( $post_id, 'large' );
          $thumb_sm  = get_the_post_thumbnail_url( $post_id, 'medium_large' );
          if ( ! $thumb_big ) $thumb_big = $BIG_FALLBACK;
          if ( ! $thumb_sm )  $thumb_sm  = $SMALL_FALLBACK;
        ?>

        <?php if ( $i === 0 ) : ?>
          <!-- Post mais recente: destaque esquerdo -->
          <div class="col-lg-5 col-12 mb-lg-0 mb-4">
            <article class="card h-100 border-0 shadow-sm">
              <div class="position-relative">
                <a href="<?php echo esc_url($permalink); ?>" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Ler mais"></a>
                <img src="<?php echo esc_url($thumb_big); ?>" class="card-img-top" alt="<?php echo esc_attr($title); ?>" loading="lazy">
              </div>
              <div class="card-body pb-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <a href="<?php echo esc_url($cat_link); ?>" class="badge fs-sm text-nav bg-secondary text-decoration-none">
                    <?php echo esc_html($cat_name); ?>
                  </a>
                  <span class="fs-sm text-muted"><?php echo esc_html($time_txt); ?></span>
                </div>
                <h3 class="h5 mb-0">
                  <a href="<?php echo esc_url($permalink); ?>"><?php echo esc_html($title); ?></a>
                </h3>
              </div>
              <div class="card-footer py-4">
                <div class="d-inline-flex align-items-center position-relative me-3">
                  <?php echo get_avatar( get_the_author_meta('ID'), 48, '', get_the_author(), ['class' => 'rounded-circle me-3'] ); ?>
                  <div>
                    <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="nav-link p-0 fw-bold text-decoration-none stretched-link">
                      <?php the_author(); ?>
                    </a>
                    <span class="fs-sm text-muted"><?php echo esc_html( get_the_author_meta('description') ? '' : 'Autor' ); ?></span>
                  </div>
                </div>
              </div>
            </article>
          </div>

          <!-- Abre coluna direita -->
          <div class="col">
        <?php else : ?>
            <!-- Posts 2 e 3: cards à direita -->
            <article class="card border-0 shadow-sm overflow-hidden mb-4">
              <div class="row g-0">
                <div class="col-sm-5 position-relative bg-position-center bg-repeat-0 bg-size-cover"
                     style="background-image: url('<?php echo esc_url($thumb_sm); ?>'); min-height: 15rem;">
                  <a href="<?php echo esc_url($permalink); ?>" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Ler mais"></a>
                </div>
                <div class="col-sm-7">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                      <a href="<?php echo esc_url($cat_link); ?>" class="badge fs-sm text-nav bg-secondary text-decoration-none">
                        <?php echo esc_html($cat_name); ?>
                      </a>
                      <span class="fs-sm text-muted border-start ps-3 ms-3"><?php echo esc_html($time_txt); ?></span>
                    </div>
                    <h3 class="h5">
                      <a href="<?php echo esc_url($permalink); ?>"><?php echo esc_html($title); ?></a>
                    </h3>
                    <hr class="my-4">
                    <div class="d-flex flex-sm-nowrap flex-wrap align-items-center justify-content-between">
                      <div class="d-flex align-items-center position-relative me-3">
                        <?php echo get_avatar( get_the_author_meta('ID'), 48, '', get_the_author(), ['class' => 'rounded-circle me-3'] ); ?>
                        <div>
                          <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="nav-link p-0 fw-bold text-decoration-none stretched-link">
                            <?php the_author(); ?>
                          </a>
                          <span class="fs-sm text-muted"><?php echo esc_html( get_the_author_meta('description') ? '' : 'Autor' ); ?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </article>
        <?php endif; $i++; endwhile; wp_reset_postdata(); ?>

        <?php if ( $i > 0 ) : ?>
          </div><!-- /.col direita -->
        <?php endif; ?>

        <div class="col-12 mt-4 pt-lg-4 pt-3 text-center">
          <?php
            $blog_link = get_option('page_for_posts') ? get_permalink( get_option('page_for_posts') ) : get_post_type_archive_link('post');
          ?>
          <a href="/noticias" class="btn btn-lg btn-outline-primary w-sm-auto w-100">Mais Notícias</a>
        </div>
      </div>
  <?php else : ?>
      <p>Nenhuma notícia encontrada.</p>
  <?php endif; ?>
</section>


        <!-- Contact CTA -->
        <section class="container pt-3 pb-4 pb-md-5 contact-cta" style="margin-top: -156px; margin-bottom: 120px; transform: translateY(156px);">
          <div class="card border-0 bg-gradient-primary">
            <div class="card-body p-md-5 p-4 bg-size-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/landing/digital-agency/contact-bg.png);">
              <div class="py-md-5 py-4 text-center">
                <h3 class="h4 fw-normal opacity-75">Quer contribuir para o projeto?</h3>
                <a href="mailto:email@example.com" class="display-6">neurobeep.debm@ufpe.br</a>
                <div class="pt-md-5 pt-4 pb-md-2">
                  <a href="page-contato.html" class="btn btn-lg btn-outline-secondary w-sm-auto w-100">Nosso Contato</a>
                </div>
              </div>
            </div>
          </div>
        </section>
    

      <!-- CONTEUDO END -->




  <?php
get_footer();

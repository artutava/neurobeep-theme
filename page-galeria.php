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

// 1) Configs
$FALLBACK = get_template_directory_uri() . '/assets/img/blog/01.jpg';

// helper p/ data
function nb_time_or_date($post_id) {
  $t = get_the_time('U', $post_id);
  $d = current_time('timestamp') - $t;
  if ($d < WEEK_IN_SECONDS) return human_time_diff($t, current_time('timestamp')) . ' atrás';
  return get_the_date('j \d\e F \d\e Y', $post_id);
}

// 2) Paginação + filtros vindos da URL
$paged = max(1, get_query_var('paged') ?: get_query_var('page'));
$args  = [
  'post_type'      => 'post',              // <- força posts
  'posts_per_page' => 10,
  'paged'          => $paged,
];

// Filtro de categoria via ?cat=ID
$cat_qs = isset($_GET['cat']) ? (int) $_GET['cat'] : 0;
if ($cat_qs) $args['cat'] = $cat_qs;

// Busca via ?s=term (mantém compatível com search do WP)
$s_qs = get_query_var('s');
if (!empty($s_qs)) $args['s'] = $s_qs;

$q = new WP_Query($args);

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

  <!-- Breadcrumb -->
  <nav class="container mt-lg-4 pt-5" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0 pt-5">
      <li class="breadcrumb-item">
        <a href="<?php echo esc_url(home_url('/')); ?>"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Galeria</li>
    </ol>
  </nav>

  <!-- Page content -->
        <!-- Page title + Filters -->
        <section class="container d-md-flex align-items-center justify-content-between pb-3">
          <h1 class="border-bottom pb-4">Galeria</h1>
          <nav class="overflow-auto">
            <ul class="nav nav-tabs-alt flex-nowrap border-0">
              <li class="nav-item">
                <a href="#" class="nav-link text-nowrap active">Na Mídia</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link text-nowrap">Eventos</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link text-nowrap">Congressos</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link text-nowrap">Cursos</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link text-nowrap">Ações</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link text-nowrap">Encontros</a>
              </li>
            </ul>
          </nav>
          
        </section>
        
        <section class="container pb-5 mb-md-2 mb-lg-4">          
          <div class="row pt-2 pt-md-3">
            <div class="col">
              <p class="fs-lg pe-lg-4 mb-1 mb-lg-4">Os parceiros do projeto NeuroAssist desempenham um papel essencial na realização de suas ações e objetivos. Por meio de uma rede colaborativa que integra ciência, educação e tecnologia, os envolvidos contribuem com expertise, infraestrutura e recursos estratégicos.
                As atividades do projeto se concentram em quatro cidades do Nordeste brasileiro: Recife (PE), Natal (RN), Cruz das Almas (BA) e Feira de Santana (BA). Nessas localidades, os parceiros apoiam iniciativas como capacitação de professores, validação da plataforma NeuroAssist em escolas públicas e desenvolvimento de tecnologias assistivas. Abaixo estão as organizações que fazem parte da rede de colaboração do projeto Neuroassist.</p>
            </div>
            
          </div>
        </section>

          <!-- Gallery -->
      <section class="container pb-5 mb-2 mb-md-4 mb-lg-5 mt-n2">
        <div class="d-flex align-items-center justify-content-between pb-4 mb-2">
          <h2 class="h1 mb-0">Últimos Registros</h2>
          <a href="#" class="btn btn-outline-primary btn-lg">
            <i class="bx bx-images fs-4 lh-1 me-2"></i>
            Todas as fotos
          </a>  
        </div>
        <div class="gallery row g-4" data-video="true" data-thumbnails="true">
          <div class="col-md-5">
            <a href="https://www.youtube.com/embed/zPo5ZaH6sW8" 
              class="gallery-item video-item rounded-3" 
              data-lg-size="1280-720" 
              data-sub-html='<h6 class="fs-sm text-light">Workshop UFPE</h6>'>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/gallery/01.jpg" alt="Gallery thumbnail">
              <div class="gallery-item-caption p-4">
                <h4 class="text-light mb-1">Workshop</h4>
                <p class="mb-0">UFPE</p>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-5">
            <a href="assets/img/about/gallery/02.jpg" class="gallery-item rounded-3 mb-4" data-sub-html='<h6 class="fs-sm text-light">Program for apprentices</h6>'>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/gallery/02.png" alt="Gallery thumbnail">
              <div class="gallery-item-caption fs-sm fw-medium">Program for apprentices</div>
            </a>
            <a href="assets/img/about/gallery/03.png" class="gallery-item rounded-3" data-sub-html='<h6 class="fs-sm text-light">Modern bright offices</h6>'>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/gallery/03.png" alt="Gallery thumbnail">
              <div class="gallery-item-caption fs-sm fw-medium">Modern bright offices</div>
            </a>
          </div>
          <div class="col-md-4 col-sm-7">
            <a href="assets/img/about/gallery/04.jpg" class="gallery-item rounded-3 mb-4" data-sub-html='<h6 class="fs-sm text-light">Friendly professional team</h6>'>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/gallery/04.png" alt="Gallery thumbnail">
              <div class="gallery-item-caption fs-sm fw-medium">Friendly professional team</div>
            </a>
            <a href="assets/img/about/gallery/05.jpg" class="gallery-item rounded-3" data-sub-html='<h6 class="fs-sm text-light">Efficient project management</h6>'>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/gallery/05.png" alt="Gallery thumbnail">
              <div class="gallery-item-caption fs-sm fw-medium">Efficient project management</div>
            </a>
          </div>
        </div>
      </section>
  
    </main>

      <?php
get_footer();



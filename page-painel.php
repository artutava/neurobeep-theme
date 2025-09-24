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
      <li class="breadcrumb-item active" aria-current="page">Painel</li>
    </ol>
  </nav>

        <!-- Page title + Filters -->

        <section class="container pb-5 mb-md-2 mb-lg-2">
          <h1 class="border-bottom pb-4">Painel</h1>
          <div class="row pt-2 pt-md-3">
            <div class="col">
              <p class="fs-lg pe-lg-4 mb-1 mb-lg-4">Os parceiros do projeto NeuroAssist desempenham um papel essencial na realização de suas ações e objetivos. Por meio de uma rede colaborativa que integra ciência, educação e tecnologia, os envolvidos contribuem com expertise, infraestrutura e recursos estratégicos.
                As atividades do projeto se concentram em quatro cidades do Nordeste brasileiro: Recife (PE), Natal (RN), Cruz das Almas (BA) e Feira de Santana (BA). Nessas localidades, os parceiros apoiam iniciativas como capacitação de professores, validação da plataforma NeuroAssist em escolas públicas e desenvolvimento de tecnologias assistivas. Abaixo estão as organizações que fazem parte da rede de colaboração do projeto Neuroassist.</p>
            </div>
            
          </div>
        </section>
  
  
        <!-- Portfolio grid -->
        <section class="container pb-5 mb-2 mb-md-4 mb-lg-5">
          <div class="row pb-lg-3">
  
            <!-- Item -->
            <div class="col-md-5 mb-4">
              <div class="card card-portfolio">
                <a href="page-nossas-acoes.html" class="card card-portfolio card-hover bg-transparent border-0">
                  <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-80 rounded-3"></span>
                    <div class="position-relative zindex-2">
                      <h3 class="h3 text-light mb-2">Nossas Ações</h3>
                      
                    </div>
                  </div>
                  <div class="card-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/grid/acoes.png" class="rounded-3" alt="Image">
                  </div>
                </a>
              </div>
            </div>
            <!-- Item -->
            <div class="col-md-7 mb-4">
              <div class="card card-portfolio">
                <a href="#" class="card card-portfolio card-hover bg-transparent border-0">
                  <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-80 rounded-3"></span>
                    <div class="position-relative zindex-2">
                      <h3 class="h3 text-light mb-2">Acesso ao Sistema NeuroBeep</h3>
                      
                    </div>
                  </div>
                  <div class="card-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/grid/banco_de_dados_2.png" class="rounded-3" alt="Image">
                  </div>
                </a>
              </div>
            </div>
            
            <!-- Item -->
            <div class="col-md-7 mb-4">
              <div class="card card-portfolio">
                <a href="#" class="card card-portfolio card-hover bg-transparent border-0">
                  <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-80 rounded-3"></span>
                    <div class="position-relative zindex-2">
                      <h3 class="h3 text-light mb-2">Ambiente Virtual de Aprendizagem</h3>
                      
                    </div>
                  </div>
                  <div class="card-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/grid/ambiente_2.png" class="rounded-3" alt="Image">
                  </div>
                </a>
              </div>
            </div>

            <!-- Item -->
            <div class="col-md-5 mb-4">
              <div class="card card-portfolio">
                <a href="page-extensao-universitaria.html" class="card card-portfolio card-hover bg-transparent border-0">
                  <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-80 rounded-3"></span>
                    <div class="position-relative zindex-2">
                      <h3 class="h3 text-light mb-2">Extensão Universitária</h3>
                      
                    </div>
                  </div>
                  <div class="card-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/grid/extensao_universitaria.png" class="rounded-3" alt="Image">
                  </div>
                </a>
              </div>
            </div>

            <!-- Item -->
            <div class="col-md-5 mb-4">
              <div class="card card-portfolio">
                <a href="page-neurobeep-2C.html" class="card card-portfolio card-hover bg-transparent border-0">
                  <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-80 rounded-3"></span>
                    <div class="position-relative zindex-2">
                      <h3 class="h3 text-light mb-2">NeuroBeep 2C</h3>
                      
                    </div>
                  </div>
                  <div class="card-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/grid/neurobeep_2c.png" class="rounded-3" alt="Image">
                  </div>
                </a>
              </div>
            </div>
            
            <!-- Item -->
            <div class="col-md-7 mb-4">
              <div class="card card-portfolio">
                <a href="#" class="card card-portfolio card-hover bg-transparent border-0">
                  <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-80 rounded-3"></span>
                    <div class="position-relative zindex-2">
                      <h3 class="h3 text-light mb-2">Próximos Passos</h3>
                      
                    </div>
                  </div>
                  <div class="card-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/grid/proximos_passos2.png" class="rounded-3" alt="Image">
                  </div>
                </a>
              </div>
            </div>

          </div>
  
        </section>
  
  
        <!-- Contact CTA -->
        <section class="container mb-1 mb-md-3 mb-lg-4">
          <div class="bg-secondary rounded-3 overflow-hidden">
            <div class="row align-items-center">
              <div class="col-xl-4 col-md-5 offset-lg-1">
                <div class="pt-1 pb-3 pb-md-5 px-4 px-lg-0 text-center text-md-start">
                  <h2 class="h1 pb-3 pb-sm-4">Contribua com o <span class="text-primary">Projeto</span> !</h2>
                  <p class="lead mb-3">Buscamos promover inclusão educacional e inovação tecnológica, mas para ampliar nosso impacto, precisamos da sua colaboração.</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-7 offset-xl-1">
                <div class="position-relative d-flex flex-column align-items-center justify-content-center h-100">
                  <svg class="d-none d-md-block position-absolute top-50 start-0 translate-middle-y" width="868" height="868" style="min-width: 868px;" viewBox="0 0 868 868" fill="none" xmlns="http://www.w3.org/2000/svg"><circle opacity="0.15" cx="434" cy="434" r="434" fill="#6366F1"/></svg>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/cta.png" class="position-relative zindex-3 mb-2 my-lg-4" width="382" alt="Illustration">
                </div>
              </div>
            </div>
          </div>
        </section>
      

      
      <!-- CONTEUDO END -->
  
    </main>

      <?php
get_footer();



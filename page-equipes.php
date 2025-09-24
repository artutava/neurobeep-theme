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

      <!-- CONTEUDO START -->
      <main class="page-wrapper">


        
                
  
        <!-- Breadcrumb -->
        <nav class="container py-4 mb-2 my-lg-3" aria-label="breadcrumb">
          <ol class="breadcrumb mt-5">
            <li class="breadcrumb-item">
              <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Equipes</li>
          </ol>
        </nav>
  
  
      <!-- Início do Conteúdo -->
        <!-- About company (agora como introdução do conteúdo) -->
        <section class="container pb-5 mb-md-2 mb-lg-4">
          <h1 class="border-bottom pb-4">Equipes</h1>
          <div class="row pt-2 pt-md-3">
            <div class="col">
              <p class="fs-lg pe-lg-4 mb-1 mb-lg-4">
                Conheça nossos colaboradores:
              </p>
            </div>
          </div>
        </section>

        <!-- Team -->
      <section class="container mb-5 py-lg-3 py-xl-4 py-xxl-5">

        <!-- Team grid -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 pb-lg-2 pb-xl-3">

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_3_.png" class="rounded-3" alt="nivaldo">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/4110109220389767" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Lattes">
                      <i class="" img="assets\ing\neuro\lattes.svg"></i>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Dr. Nivaldo Vasconcelo</h3>
                <p class="fs-sm mb-0">Coordenador Geral do NeuroBeep</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_17_.png" class="rounded-3" alt="Albert Flores">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/2371995765980164" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Lattes">
                      <i class="" img="assets\ing\neuro\lattes.svg"></i>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2"> Dra. Cláudia Lima</h3>
                <p class="fs-sm mb-0">Coordenadora de Comunicação</p>
              </div>
            </div>
          </div>


          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_4_.png" class="rounded-3" alt="Albert Flores">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/6626922380758460" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Lattes">
                      <i class="" img="assets\ing\neuro\lattes.svg"></i>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Dr. Justo Alvarez</h3>
                <p class="fs-sm mb-0">Coordenador Robótica e Automação</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_19_.png" class="rounded-3" alt="Albert Flores">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/0851707453185143" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Lattes">
                      <i class="" img="assets\ing\neuro\lattes.svg"></i>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Dr. Ricardo Yara </h3>
                <p class="fs-sm mb-0">Coordenador de Metagenômica</p>
              </div>
            </div>
          </div>

           <!-- Item -->
           <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_32_.png" class="rounded-3" alt="Albert Flores">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/8670475877813913" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Lattes">
                      <i class="" img="assets\ing\neuro\lattes.svg"></i>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Dr. Aquiles Burlamaqui</h3>
                <p class="fs-sm mb-0">Coordenador de Tecnologias Assistivas</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_34_.png" class="rounded-3" alt="Albert Flores">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/6075905438020841 " class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Lattes">
                      <i class="" img="assets\ing\neuro\lattes.svg"></i>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Dr. Edward Hermann</h3>
                <p class="fs-sm mb-0">Coordenador de Ciência de Dados</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_33_.png" class="rounded-3" alt="Albert Flores">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/0869469262114149" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Lattes">
                      <i class="" img="assets\ing\neuro\lattes.svg"></i>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Dr. Pedro Carelli</h3>
                <p class="fs-sm mb-0">Coordenador de Física e Neurociência</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_1_.png" class="rounded-3" alt="Jenny Wilson">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/7225582303035911" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Lattes">
                      <i class="" img="assets\ing\neuro\lattes.svg"></i>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Anne Vieira</h3>
                <p class="fs-sm mb-0">Pesquisadora - Engenharia Biomédica</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_24_.png" class="rounded-3" alt="Jerome Bell">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/5779803077354032" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Dra. Ana Cristina</h3>
                <p class="fs-sm mb-0">Pesquisadora - Nutrição</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_25_.png" class="rounded-3" alt="Jerome Bell">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/1011113211035112" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Otávio Soares </h3>
                <p class="fs-sm mb-0">Pesquisador - Engenharia Biomédica</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_31_.png" class="rounded-3" alt="Jerome Bell">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/2126678540427789 " class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">José Vinícius Gomes</h3>
                <p class="fs-sm mb-0">Pesquisador - Fisioterapia</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_27_.png" class="rounded-3" alt="Jerome Bell">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/9175300531726803" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Luiz Batista </h3>
                <p class="fs-sm mb-0">Pesquisador - Educação Matemática e Tecnologias</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_26_.png" class="rounded-3" alt="Jerome Bell">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/2782941864660584" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Sônia Carolina</h3>
                <p class="fs-sm mb-0">Pesquisadora - Neurofisiologia</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_2_.png" class="rounded-3" alt="Jenny Wilson">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/0703576769957751" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Lattes">
                      <i class="" img="assets\ing\neuro\lattes.svg"></i>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">André Ferrão</h3>
                <p class="fs-sm mb-0">Bolsista - Engenharia Biomédica</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_13_.png" class="rounded-3" alt="ronaldo">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Lattes">
                      <i class="" img="assets\ing\neuro\lattes.svg"></i>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Ronaldo César Silva</h3>
                <p class="fs-sm mb-0">Bolsista - Engenharia Mecânica</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_18_.png" class="rounded-3" alt="Esther Howard">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/1002593395444054" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Lattes">
                      <i class="" img="assets\ing\neuro\lattes.svg"></i>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Esp. Paola Nagata</h3>
                <p class="fs-sm mb-0">Técnica de Comunicação</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_16_.png" class="rounded-3" alt="Esther Howard">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/1414429613661129" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Lattes">
                      <i class="" img="assets\ing\neuro\lattes.svg"></i>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Alexandre Lima</h3>
                <p class="fs-sm mb-0">Bolsista - Comunicação</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_9_.png" class="rounded-3" alt="João Gabriel">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/5024028364431051" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Lattes">
                      <i class="" img="assets\ing\neuro\lattes.svg"></i>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">João Gabriel Veras</h3>
                <p class="fs-sm mb-0">Bolsista - Engenharia Biomédica</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_7_.png" class="rounded-3" alt="Jerome Bell">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/5466824809045867" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Lattes">
                      <i class="" img="assets\ing\neuro\lattes.svg"></i>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Juliana de Albuquerque</h3>
                <p class="fs-sm mb-0">Bolsista - Engenharia Biomédica</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_8_.png" class="rounded-3" alt="Darrell Steward">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/0072208094682486" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Lattes">
                      <i class="" img="assets\ing\neuro\lattes.svg"></i>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2"> Isabele Cornélio</h3>
                <p class="fs-sm mb-0">Bolsista - Engenharia Biomédica</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_6_.png" class="rounded-3" alt="Nivaldo">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Matéus Silva Sales</h3>
                <p class="fs-sm mb-0">Bolsista - Psicologia e Neurociência</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_5_.png" class="rounded-3" alt="Albert Flores">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/0683144033879190" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Luiz Felipe</h3>
                <p class="fs-sm mb-0">Bolsista - Engenharia Mecânica</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_12_.png" class="rounded-3" alt="Marvin McKinney">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/7552722362204144 " class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">César Augusto</h3>
                <p class="fs-sm mb-0">Bolsista - Engenharia Mecânica</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_14_.png" class="rounded-3" alt="Esther Howard">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/2556639161161831" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Thayná Oliveira</h3>
                <p class="fs-sm mb-0">Bolsista - Engenharia Mecânica</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_11_.png" class="rounded-3" alt="Cameron Williamson">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/6755674402300775" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Hierlan Álamo</h3>
                <p class="fs-sm mb-0">Bolsista - Engenharia Mecânica</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_10_.png" class="rounded-3" alt="Jerome Bell">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/2126678540427789 " class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Vicente Carneiro</h3>
                <p class="fs-sm mb-0">Bolsista - Engenharia Biomédica</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_20_.png" class="rounded-3" alt="Jerome Bell">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/0219850118047390" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Rinaldo Tavares</h3>
                <p class="fs-sm mb-0">Bolsista - Engenharia Mecatrônica</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_21_.png" class="rounded-3" alt="Jerome Bell">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/4742602055435881" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Alan Dionisio</h3>
                <p class="fs-sm mb-0">Bolsista - Ciência e Tecnologia</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_22_.png" class="rounded-3" alt="Jerome Bell">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/6387294810123549" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Maria Fernanda</h3>
                <p class="fs-sm mb-0">Bolsista - Engenharia Biomédica</p>
              </div>
            </div>
          </div>
          
          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_23_.png" class="rounded-3" alt="Jerome Bell">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="http://lattes.cnpq.br/3809897849194366" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Wesley</h3>
                <p class="fs-sm mb-0">Bolsista - Engenharia Mecânica</p>
              </div>
            </div>
      </section>
          </div>

          <!-- Item -->
          <!-- <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="assets/img/team/team_10_.png" class="rounded-3" alt="Jerome Bell">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                      <img src="assets\img\neuro\lattes.svg" class="" alt="Lattes">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Lucas Alves Barbosa</h3>
                <p class="fs-sm mb-0">Bolsista - Engenharia Biomédica</p>
              </div>
            </div>
          </div> -->


        </div>
      </section>
  
      <!-- Stats + Partners -->
      <!-- <section class="bg-secondary mb-5 py-lg-4 py-xl-5">
        <div class="container pt-5">
          <div class="row align-items-center gy-5 pt-2 pt-sm-3 pt-md-4">
            <div class="col-lg-5 text-lg-start text-center">
              <h2 class="h1 mb-4 pb-lg-2">Alcance do NeuroBeep</h2>
              <p class="mb-4 pb-1 pb-sm-2 pb-lg-3">Através da inclusão educacional por meio da neurociência e da robótica assistiva, o NeuroBeep impacta diretamente nas crianças, seus familiares, professores, estudantes e profissionais envolvidos. O projeto gera um alcance social ampliado, por meio de ações de formação, comunicação científica e popularização da ciência, promovendo inovação e inclusão por meio de tecnologias assistivas.</p>
              <a href="contacts-v2.html" class="btn btn-primary">Saiba mais</a>
            </div>
            <div class="col-lg-6 offset-lg-1">
              <div class="row row-cols-sm-2 row-cols-1 g-4 align-items-center">
                <div class="col">
                  <div class="card border-0">
                    <div class="card-body m-xl-3 m-1 text-center">
                      
                      <h5 class="mb-3 fs-lg fw-normal lh-1">
                        <span class="h1 d-block w-100 mb-0">100</span>
                        Crianças
                      </h5>
                      
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card border-0">
                    <div class="card-body m-xl-3 m-1 text-center">
                      <img src="assets/img/about/chat-light.svg" width="56" alt="Icon" class="d-dark-mode-none d-block mx-auto mb-4">
                      <img src="assets/img/about/chat-dark.svg" width="56" alt="Icon" class="d-dark-mode-block d-none mx-auto mb-4">
                      <h5 class="mb-3 fs-lg fw-normal lh-1">
                        <span class="h1 d-block w-100 mb-0">24/7</span>
                        Customer support
                      </h5>
                    </div>
                  </div>
                  <div class="card border-0 mt-4">
                    <div class="card-body m-xl-3 m-1 bg-repeat-0 bg-position-top-end" style="background-image: url(assets/img/about/graph.svg);">
                      <h5 class="mb-3 fs-lg fw-normal lh-1 mt-5">
                        <span class="h1 d-block w-100 mb-0">+12k</span>
                        new leads for clients
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          
        </div>
      </section> -->

  
  
        <!-- Contact form -->
        <section class="container pb-5 mb-2 mb-md-4 mb-lg-5">
          <div class="position-relative bg-secondary rounded-3 py-5 mb-2">
            <div class="row pb-2 py-md-3 py-lg-5 px-4 px-lg-0 position-relative zindex-3">
              <div class="col-xl-3 col-lg-4 col-md-5 offset-lg-1">
                <p class="lead mb-2 mb-md-3">Entre em contato conosco</p>
                <h2 class="h1 pb-3">Mande-nos uma sugestão</h2>
              </div>
              <form class="col-lg-6 col-md-7 offset-xl-1 needs-validation" novalidate>
                <div class="row">
                  <div class="col-sm-6 mb-4">
                    <label for="name" class="form-label fs-base">Nome Completo</label>
                    <input type="text" id="name" class="form-control form-control-lg" required>
                    <div class="invalid-feedback">Please enter your name!</div>
                  </div>
                  <div class="col-sm-6 mb-4">
                    <label for="email" class="form-label fs-base">E-mail</label>
                    <input type="email" id="email" class="form-control form-control-lg" required>
                    <div class="invalid-feedback">Please provide a valid email address!</div>
                  </div>
                  <div class="col-12 pb-2 mb-4">
                    <label for="message" class="form-label fs-base">Mensagem</label>
                    <textarea id="message" class="form-control form-control-lg" rows="4" required></textarea>
                    <div class="invalid-feedback">Please enter your message!</div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary shadow-primary btn-lg">Enviar</button>
              </form>
            </div>
            <!-- Pattern -->
            <div class="position-absolute end-0 bottom-0 text-primary">
              <svg width="416" height="444" viewBox="0 0 416 444" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M240.875 615.746C389.471 695.311 562.783 640.474 631.69 504.818C700.597 369.163 645.201 191.864 496.604 112.299C348.007 32.7335 174.696 87.5709 105.789 223.227C36.8815 358.882 92.278 536.18 240.875 615.746ZM208.043 680.381C388.035 776.757 605.894 713.247 694.644 538.527C783.394 363.807 709.428 144.04 529.436 47.6636C349.443 -48.7125 131.584 14.7978 42.8343 189.518C-45.916 364.238 28.0504 584.005 208.043 680.381Z" fill="currentColor"/>
                <path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M262.68 572.818C382.909 637.194 526.686 594.13 584.805 479.713C642.924 365.295 595.028 219.601 474.799 155.224C354.57 90.8479 210.793 133.912 152.674 248.33C94.5545 362.747 142.45 508.442 262.68 572.818ZM253.924 590.054C382.526 658.913 538.182 613.536 601.593 488.702C665.004 363.867 612.156 206.847 483.554 137.988C354.953 69.129 199.296 114.506 135.886 239.341C72.4752 364.175 125.323 521.195 253.924 590.054Z" fill="currentColor"/>
              </svg>
            </div>
          </div>
        </section>  

      
      <!-- CONTEUDO END -->

      
    </main>

      <?php
get_footer();



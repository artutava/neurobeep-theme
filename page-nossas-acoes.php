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

      
    
      <!-- Breadcrumb -->
      <nav class="container py-4 mb-lg-2 mt-lg-3" aria-label="breadcrumb">
        <ol class="breadcrumb mt-5">
          <li class="breadcrumb-item">
            <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
          </li>
          <li class="breadcrumb-item">
            <a href="painel">Painel</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Nossas Ações</li>
        </ol>
      </nav>


      <!-- Page title -->
      <section class="container pb-4 mb-2 mb-lg-3">
        <h1>Nossas Ações</h1>
      </section>


     


      <!-- About project -->
      <section class="container">
        <div class="row">
          <div class="col-lg-7 mb-4 mb-lg-0">
            <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
              <p class="fs-lg mb-0">Para garantir o impacto das ações do NeuroBeep, diversas atividades são desenvolvidas, envolvendo a criação de tecnologias assistivas, capacitação de profissionais, testes em campo e disseminação científica. Destacamos as principais iniciativas do projeto:</p>
            </div>
          </div>
          <div class="col-lg-5 col-xl-4 offset-xl-1 border-start-lg">
            <div class="ps-lg-4 ms-lg-3">
              <h3 class="h5 d-flex align-items-center">
                <i class="bx bx-help-circle text-primary fs-4 me-2"></i>
                Challenge
              </h3>
              <p class="pb-4 mb-0 mb-lg-3">Ultricies massa iaculis vestibulum egestas vestibulum, cursus. Leo non arcu ultricies senectus a purus sed.</p>
              <h3 class="h5 d-flex align-items-center">
                <i class="bx bx-bulb text-primary fs-4 me-2"></i>
                Solution
              </h3>
              <p class="mb-0">Sit tellus id proin viverra iaculis pellentesque ornare. Diam augue sit feugiat porttitor leo, fusce vel ac. Placerat vulputate quisque.</p>
            </div>
          </div>
        </div>

      <!-- Image grid (Parallax) -->
      <section class="container position-relative pt-1 pt-md-3">
        <div class="row align-items-start">
          <div class="rellax col-lg-5 col-sm-6 mb-4 mb-sm-0" data-rellax-percentage="0.5" data-rellax-speed="-0.5" data-disable-parallax-down="sm">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/app-showcase-3/categories/neuro_image_2.png" class="rounded-3" width="526" alt="Image">
          </div>
          <div class="rellax col-lg-7 col-sm-6 d-sm-flex justify-content-end pt-sm-4 pt-lg-5 mt-md-3 mb-4 mb-sm-0" data-rellax-percentage="0.5" data-rellax-speed="-1.25" data-disable-parallax-down="sm">
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/app-showcase-3/categories/neuro_image.png" class="rounded-3" width="416" alt="Image"></div>
          </div>
          <div class="rellax col-lg-5 col-sm-6 d-sm-flex justify-content-lg-end pt-sm-5 mt-lg-5 mb-4 mb-sm-0" data-rellax-percentage="0.5" data-rellax-speed="-1.25" data-disable-parallax-down="sm">
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/app-showcase-3/categories/neuro_image_3.png" class="rounded-3" width="416" alt="Image"></div>
          </div>
          <div class="rellax col-lg-7 col-sm-6 d-sm-flex justify-content-center mt-sm-n5 mb-4 mb-sm-0" data-rellax-percentage="0.5" data-rellax-speed="-0.25" data-disable-parallax-down="sm">
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/app-showcase-3/categories/neuro_image_V2.png" class="d-block rounded-3 mt-xl-n5" width="526" alt="Image"></div>
          </div>
        </div>
        <div class="row position-sm-absolute top-50 start-0 translate-middle-sm-y w-100 d-flex mt-md-n5">
          <div class="rellax col-lg-5 col-sm-6 offset-sm-3 offset-lg-4 mt-sm-n5" data-rellax-percentage="0.5" data-rellax-speed="1.4" data-disable-parallax-down="sm">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/single/02.jpg" class="d-block rounded-3 mt-xl-n5" width="526" alt="Image">
          </div>
        </div>
      </section>


      <!-- Benefits -->
      <section class="bg-secondary pt-5">
        <div class="container pt-2 pt-sm-3 pt-md-4 pt-lg-5">
      
          <!-- Business category -->
          <div class="row align-items-center justify-content-center py-4 py-md-5 my-1 my-sm-3 my-md-0 my-xl-3">
            <div class="col-10 col-sm-9 col-md-6 col-xl-7 d-flex justify-content-md-end order-md-2 pb-2 pb-md-0 mb-4 mb-md-0">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/app-showcase-3/categories/neuro_image_2.png" width="642" alt="Businessman">
            </div>
            <div class="col-md-6 col-xl-5 order-md-1 text-center text-md-start">
              <h2 class="mb-lg-4">Desenvolvimento da Plataforma NeuroBeep</h2>
              <p class="fs-lg pb-4 mb-0">O projeto está criando uma plataforma assistiva em desenho universal, baseada em interfaces cérebro-máquina, que permitirá a inclusão digital de crianças com deficiência motora em ambientes educacionais mediados por robótica.</p>
            </div>
          </div>


          <!-- Sturtups category -->
          <div class="row align-items-center justify-content-center py-4 py-md-5 my-1 my-sm-3 my-md-0 my-xl-3">
            <div class="col-10 col-sm-9 col-md-6 col-xl-7 pb-2 pb-md-0 mb-4 mb-md-0">
              <div class="pe-md-4 pe-xl-0">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/app-showcase-3/categories/neuro_image.png" width="636" alt="Startupper">
              </div>
            </div>
            <div class="col-md-6 col-xl-5 text-center text-md-start">
              <h2 class="mb-lg-4">Capacitação de Professores</h2>
              <p class="fs-lg pb-4 mb-0">Com o objetivo de tornar a tecnologia acessível dentro da sala de aula, o NeuroAssist está promovendo formação para professores da rede pública, preparando-os para aplicar as ferramentas do projeto no ensino de crianças com necessidades especiais. A capacitação ocorrerá em escolas dos estados de Pernambuco (PE), Rio Grande do Norte (RN) e Bahia (BA).</p>
            </div>
          </div>


          <!-- Students category -->
          <div class="row align-items-center justify-content-center py-4 py-md-5 my-1 my-sm-3 my-md-0 my-xl-3">
            <div class="col-10 col-sm-9 col-md-6 col-xl-7 d-flex justify-content-md-end order-md-2 pb-2 pb-md-0 mb-4 mb-md-0">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/app-showcase-3/categories/neuro_image_3.png" width="640" alt="Student">
            </div>
            <div class="col-md-6 col-xl-5 order-md-1 text-center text-md-start">
              <h2 class="mb-lg-4">Testes e Validação da Plataforma</h2>
              <p class="fs-lg pb-4 mb-0">A tecnologia desenvolvida será testada e validada em escola, garantindo que seu uso seja adaptado à realidade educacional e promova benefícios reais para os estudantes.</p>
            </div>
          </div>

          <!-- Sturtups category -->
          <div class="row align-items-center justify-content-center py-4 py-md-5 my-1 my-sm-3 my-md-0 my-xl-3">
            <div class="col-10 col-sm-9 col-md-6 col-xl-7 pb-2 pb-md-0 mb-4 mb-md-0">
              <div class="pe-md-4 pe-xl-0">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/app-showcase-3/categories/neuro_image_V2.png" width="636" alt="Startupper">
              </div>
            </div>
            <div class="col-md-6 col-xl-5 text-center text-md-start">
              <h2 class="mb-lg-4">Extensão Universitária</h2>
              <p class="fs-lg pb-4 mb-0">Para ampliar o impacto do projeto, serão oferecidos cursos online de extensão para professores, estudantes e profissionais interessados em neurorrobótica e ensino inclusivo.</p>
            </div>
          </div>

          <!-- Business category -->
          <div class="row align-items-center justify-content-center py-4 py-md-5 my-1 my-sm-3 my-md-0 my-xl-3">
            <div class="col-10 col-sm-9 col-md-6 col-xl-7 d-flex justify-content-md-end order-md-2 pb-2 pb-md-0 mb-4 mb-md-0">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/app-showcase-3/categories/neuro_image_2.png" width="642" alt="Businessman">
            </div>
            <div class="col-md-6 col-xl-5 order-md-1 text-center text-md-start">
              <h2 class="mb-lg-4">Divulgação e Popularização da Ciência</h2>
              <p class="fs-lg pb-4 mb-0">O NeuroBeep também atua na produção de materiais educativos e divulgação científica, promovendo eventos, palestras e campanhas de conscientização sobre neurociência, robótica educacional e tecnologia assistiva.</p>
            </div>
          </div>

          <!-- Sturtups category -->
          <div class="row align-items-center justify-content-center py-4 py-md-5 my-1 my-sm-3 my-md-0 my-xl-3">
            <div class="col-10 col-sm-9 col-md-6 col-xl-7 pb-2 pb-md-0 mb-4 mb-md-0">
              <div class="pe-md-4 pe-xl-0">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/app-showcase-3/categories/neuro_image.png" width="636" alt="Startupper">
              </div>
            </div>
            <div class="col-md-6 col-xl-5 text-center text-md-start">
              <h2 class="mb-lg-4">Estruturação de uma Rede de Laboratórios</h2>
              <p class="fs-lg pb-4 mb-0">A rede de laboratórios do projeto conta com laboratórios de referência, onde são desenvolvidas novas tecnologias, e laboratórios de aplicação, onde as soluções são testadas e validadas.</p>
            </div>
          </div>

           <!-- Business category -->
           <div class="row align-items-center justify-content-center py-4 py-md-5 my-1 my-sm-3 my-md-0 my-xl-3">
            <div class="col-10 col-sm-9 col-md-6 col-xl-7 d-flex justify-content-md-end order-md-2 pb-2 pb-md-0 mb-4 mb-md-0">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/app-showcase-3/categories/neuro_image_2.png" width="642" alt="Businessman">
            </div>
            <div class="col-md-6 col-xl-5 order-md-1 text-center text-md-start">
              <h2 class="mb-lg-4">Formação de Estudantes e Profissionais</h2>
              <p class="fs-lg pb-4 mb-0">O projeto busca capacitar alunos de graduação, mestrado e doutorado em áreas de alta tecnologia, incentivando a pesquisa e o desenvolvimento de novas soluções assistivas.</p>
            </div>
          </div>

      </section>


      <!-- CONTEUDO END -->

</main>

      <?php
get_footer();



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
              <a href="index.html"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Eixos Estruturantes</li>
          </ol>
        </nav>
  
  
      <!-- Início do Conteúdo -->
        <!-- About company (agora como introdução do conteúdo) -->
        <section class="container pb-5 mb-md-2 mb-lg-4">
          <h1 class="border-bottom pb-4">Eixos Estruturantes</h1>
          <div class="row pt-2 pt-md-3">
            <div class="col">
              <p class="fs-lg pe-lg-4 mb-1 mb-lg-4">
                Os eixos estruturantes do projeto NeuroBeep são os pilares que guiam suas ações e definem as principais frentes de atuação. Eles organizam e direcionam o desenvolvimento das tecnologias, pesquisas e iniciativas de inclusão educacional, garantindo que o impacto seja amplo, interdisciplinar e sustentável.<br>

                <br>Com base nesses eixos, o NeuroBeep estrutura suas atividades para alcançar resultados práticos, como a inclusão de crianças com severas deficiências motoras em processos educacionais, o fortalecimento de redes de pesquisa e inovação, e a promoção de uma sociedade mais acessível e igualitária.
              </p>
            </div>
          </div>
        </section>
  
        <!-- Image + Text sections -->
        <section class="container pb-sm-1 pb-md-3">

          <!-- Row 1 -->
          <div class="row align-items-lg-center pb-5 mb-2 mb-lg-4 mb-xl-5">
            <div class="col-md-6 mb-4 mb-md-0">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/estrutura_lab.png" class="rounded-3" alt="Image">
            </div>
            <div class="col-md-6">
              <div class="ps-xl-5 ms-md-2 ms-lg-4">
                <h2 class="h1 mb-3 mb-sm-4">Estrutura com 
                  laboratórios multidisciplinares</h2>
                <p class="mb-4 mb-lg-5">Implantar laboratórios especializados que promovam a integração de diferentes áreas do conhecimento, possibilitando o desenvolvimento de soluções inovadoras em neurorobótica e neurociência, além de manter as conexões entre laboratórios, promovendo uma constante troca de conhecimentos.</p>
                <ul class="list-unstyled mb-0">
                  <li class="d-flex mb-2">
                    <i class="bx bx-check text-primary lead me-2"></i>
                    Interconexão de laboratórios em várias localidades com foco em tecnologias assistivas; 
                  </li>
                  <li class="d-flex mb-2">
                    <i class="bx bx-check text-primary lead me-2"></i>
                    Multidisciplinaridade para desenvolvimento de soluções para sociedade;
                  </li>
                  <li class="d-flex">
                    <i class="bx bx-check text-primary lead me-2"></i>
                    Inovação na criação e prototipação de ferramentas e tecnologias assistivas.
                  </li>
                </ul>              
              </div>
            </div>
          </div>

          <!-- Row 2 -->
          <div class="row align-items-lg-center pt-md-3 pb-5 mb-2 mb-lg-4 mb-xl-5">
            <div class="col-md-6 order-md-2 mb-4 mb-md-0">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/neurobeep_system.png" class="rounded-3" alt="Image">
            </div>
            <div class="col-md-6 order-md-1">
              <div class="pe-xl-5 me-md-2 me-lg-4">
                <h2 class="h1 mb-3 mb-sm-4">Desenvolvimento do Sistema NeuroBeep 2C</h2>
                <p class="mb-3 mb-sm-4">Desenvolver uma plataforma acessível que combine tecnologias assistivas e interfaces cérebro-máquina, voltada para ampliar a inclusão educacional e social de crianças com deficiências severas.</p>
                <ul class="list-unstyled mb-0">
                  <li class="d-flex mb-2">
                    <i class="bx bx-check text-primary lead me-2"></i>
                    Elaborar um robô educacional de uso universal;
                  </li>
                  <li class="d-flex mb-2">
                    <i class="bx bx-check text-primary lead me-2"></i>
                    Criação de um Sistema Integrando ferramentas educacionais e um robô para aprendizagem; 
                  </li>
                  <li class="d-flex">
                    <i class="bx bx-check text-primary lead me-2"></i>
                    Elaboração de materiais didáticos para uso em processos educacionais.
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Row 3 -->
          <div class="row align-items-lg-center pb-5 mb-2 mb-lg-4 mb-xl-5">
            <div class="col-md-6 mb-4 mb-md-0">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/lab_neuro_ufpe.png" class="rounded-3" alt="Image">
            </div>
            <div class="col-md-6">
              <div class="ps-xl-5 ms-md-2 ms-lg-4">
                <h2 class="h1 mb-3 mb-sm-4">Desenvolvimento 
                  <br>de Pesquisa Básica</h2>
                <p class="mb-4 mb-lg-5">Produzir conhecimento científico essencial que sirva como base para os avanços da pesquisa, além de promover a formação de jovens pesquisadores em diversas áreas da pesquisa básica. </p>
                <ul class="list-unstyled mb-0">
                  <li class="d-flex mb-2">
                    <i class="bx bx-check text-primary lead me-2"></i>
                    Pesquisas Básicas e Aplicadas em Neurociências, Robótica e Metagenômica;
                  </li>
                  <li class="d-flex mb-2">
                    <i class="bx bx-check text-primary lead me-2"></i>
                    Formação especializada de pesquisadores nas áreas do projeto;
                  </li>
                  <li class="d-flex mb-2">
                    <i class="bx bx-check text-primary lead me-2"></i>
                    Integração de profissionais de várias áreas para realizar descobertas científicas.
                  </li>
                </ul>              
              </div>
            </div>
          </div>
          <!-- Row 4 -->
          <div class="row align-items-lg-center pt-md-3 pb-5 mb-2 mb-lg-4 mb-xl-5">
            <div class="col-md-6 order-md-2 mb-4 mb-md-0">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/neuro_sensor.png" class="rounded-3" alt="Image">
            </div>
            <div class="col-md-6 order-md-1">
              <div class="pe-xl-5 me-md-2 me-lg-4">
                <h2 class="h1 mb-3 mb-sm-4">Inovação em 
                  Tecnologias Assistivas</h2>
                <p class="mb-3 mb-sm-4">Criar soluções tecnológicas que eliminem barreiras físicas e cognitivas, promovendo autonomia, acessibilidade e qualidade de vida para os beneficiários do projeto.</p>
                <ul class="list-unstyled mb-0">
                  <li class="d-flex mb-2">
                    <i class="bx bx-check text-primary lead me-2"></i>
                    Realizar a ampliação e transferência de tecnologias desenvolvidas no projeto;
                  </li>
                  <li class="d-flex mb-2">
                    <i class="bx bx-check text-primary lead me-2"></i>
                    Permitir a criação de uma rede de laboratórios focados em Tecnologias Assistivas;
                  </li>
                  <li class="d-flex">
                    <i class="bx bx-check text-primary lead me-2"></i>
                    Promover o desenvolvimento de startups nas áreas de robótica educacional, neurociências e tecnologias assistivas.
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Row 5 -->
          <div class="row align-items-lg-center pb-5 mb-2 mb-lg-4 mb-xl-5">
            <div class="col-md-6 mb-4 mb-md-0">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/neuro_reuniao.png" class="rounded-3" alt="Image">
            </div>
            <div class="col-md-6">
              <div class="ps-xl-5 ms-md-2 ms-lg-4">
                <h2 class="h1 mb-3 mb-sm-4">Extensão Universitária como ferramenta de integração social</h2>
                <p class="mb-4 mb-lg-5">Permitir que o conhecimento produzido nas universidades ultrapasse os muros acadêmicos e chegue até a comunidade. Pois, a extensão promove a troca de saberes entre estudantes, professores e a sociedade, contribuindo para a transformação social e o desenvolvimento local.</p>
                <ul class="list-unstyled mb-0">
                  <li class="d-flex mb-2">
                    <i class="bx bx-check text-primary lead me-2"></i>
                    Inclusão e responsabilidade social para inclusão de crianças com deficiência;
                  </li>
                  <li class="d-flex mb-2">
                    <i class="bx bx-check text-primary lead me-2"></i>
                    Democratização do conhecimento e acesso aos conhecimentos em áreas temáticas do projeto;
                  </li>
                  <li class="d-flex">
                    <i class="bx bx-check text-primary lead me-2"></i>
                    Troca de experiências e saberes com comunidades interessadas no uso do Sistema NeuroBeep 2C.
                  </li>
                </ul>              
              </div>
            </div>
          </div>
          <!-- Row 6 -->
          <div class="row align-items-lg-center pt-md-3 pb-5 mb-2 mb-lg-4 mb-xl-5">
            <div class="col-md-6 order-md-2 mb-4 mb-md-0">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/sbpc_neuro.png" class="rounded-3" alt="Image">
            </div>
            <div class="col-md-6 order-md-1">
              <div class="pe-xl-5 me-md-2 me-lg-4">
                <h2 class="h1 mb-3 mb-sm-4">Comunicação e Popularização da Neurorrobótica e Neurociência</h2>
                <p class="mb-3 mb-sm-4">Tornar o conhecimento técnico e científico acessível ao público, utilizando estratégias de divulgação que aproximem a sociedade das inovações e benefícios dessas áreas.</p>
                <ul class="list-unstyled mb-0">
                  <li class="d-flex mb-2">
                    <i class="bx bx-check text-primary lead me-2"></i>
                    Quebrando Barreiras e Gerando Impacto Social;
                  </li>
                  <li class="d-flex mb-2">
                    <i class="bx bx-check text-primary lead me-2"></i>
                    Estimulando a Curiosidade e a Próxima Geração de Pesquisadores;
                  </li>
                  <li class="d-flex">
                    <i class="bx bx-check text-primary lead me-2"></i>
                    Fomentando a Inovação e o Desenvolvimento Econômico;
                  </li>
                  <li class="d-flex">
                    <i class="bx bx-check text-primary lead me-2"></i>
                    Promovendo o Debate Informado e a Ética na Tecnologia.
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
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



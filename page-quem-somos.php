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
      
       <!-- Hero -->
       <section class="position-relative pt-5">

        <!-- Background -->
        <div class="position-absolute top-0 start-0 w-100 bg-position-bottom-center bg-size-cover bg-repeat-0" style="background-image: url(assets/img/landing/digital-agency/hero-bg.svg);">
          <div class="d-lg-none" style="height: 88vh;"></div>
          <div class="d-none d-lg-block" style="height: 111vh;"></div>
        </div>

        <!-- Content -->
        <div class="container position-relative zindex-5 pt-5">
          <div class="row">
            <div class="col-lg-6">
              
              <!-- Breadcrumb -->
              <nav class="pt-md-2 pt-lg-3 pb-4 pb-md-5 mb-xl-4" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item">
                    <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Quem somos</li>
                </ol>
              </nav>

              <section class="container mb-lg-2">
                <h1 class="border-bottom pb-4">Quem somos</h1>
                <div class="row pt-2 pt-md-3">                  
                </div>
              </section>              

              <!-- Text -->
              <h2 class="pb-2 pb-md-3">
              <span class="text-gradient-primary">Inclusão Educacional através da NeurociênciaTecnologia Assistiva e Robótica</span>
              </h2>
              <p class="fs-lg pe-lg-4 mb-1 mb-lg-4" style="max-width: 526px;">O NeuroBeep é um projeto visionário que une ciência, tecnologia e educação para transformar a realidade de crianças com severas deficiências motoras.
                Realizado através do Departamento de Engenharia Biomédica da Universidade Federal de Pernambuco (UFPE) e financiado pela FINEP no âmbito do programa 
                SISASSISTIVA-MCTI, o projeto se destaca como uma iniciativa pioneira no desenvolvimento de soluções inclusivas que conectam neurociência, tecnologia assistiva e robótica educacional.
              </p>
              
            </div>

            <!-- Images -->
            <div class="col-lg-6 mt-xl-3 pt-5 pt-lg-4">
              <div class="row row-cols-2 gx-3 gx-lg-4">
                <div class="col pt-lg-5 mt-lg-1">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landings.png" class="d-block rounded-3 mb-3 mb-lg-4" alt="Image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/quem_somos/neuro_quem_somos_3.png" class="d-block rounded-3" alt="Image">
                </div>
                <div class="col">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/quem_somos/neuro_quem_somos_1.png" class="d-block rounded-3 mb-3 mb-lg-4" alt="Image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/quem_somos/neuro_quem_somos_2.png" class="d-block rounded-3" alt="Image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="container pb-5 mb-md-2 mb-lg-4 mt-5">
        <div class="row pt-2 pt-md-3">
          <div class="col">
            <p class="fs-lg pe-lg-4 mb-1 mb-lg-4">Com duração prevista de 2 anos, fortalecendo sua missão de superar barreiras físicas, cognitivas e sociais que limitam o acesso à educação e à inclusão. O projeto se propõe a 
              criar um impacto significativo na vida de crianças, professores e comunidades.</p>
            <p class="fs-lg pe-lg-4 mb-1 mb-lg-4">O NeuroAssist foi criado com o propósito de oferecer mais do que tecnologia: ele é uma resposta às necessidades de inclusão educacional para crianças com paralisia cerebral 
                severa. Por meio de interfaces cérebro-máquina e plataformas de robótica, o projeto busca promover o aprendizado, a autonomia e a interação social dessas crianças. Com um foco especial na capacitação de professores 
                e no fortalecimento de redes educacionais, o NeuroAssist constrói uma ponte entre ciência, educação e sociedade.</p>
                <p class="fs-lg pe-lg-4 mb-1 mb-lg-4">As soluções desenvolvidas têm como base o conceito de desenho universal, garantindo que sejam acessíveis a todos, independentemente de suas condições físicas ou cognitivas.
                   Isso reflete o compromisso do projeto com a democratização do conhecimento e a criação de oportunidades igualitárias.</p>
            
          </div>
          
        </div>
      </section>

      <!-- Story -->
      <section class="container mb-5 pt-md-1 pt-lg-4 pt-xl-5">
        <div class="mt-4 py-2 pb-sm-3 pb-md-4 pb-lg-5 mx-auto text-center" style="max-width: 46.625rem;">
          <h2 class="h1 mb-4">Linha do tempo do NeuroBeep</h2>
          <p class="mb-4">Acompanhe os principais avanços do NeuroBeep, da formação da equipe à aplicação da tecnologia nas escolas. Descubra como estamos transformando a inclusão educacional com inovação e impacto real.</p>
        </div>

        <!-- Steps -->
        <div class="steps steps-center steps-sm steps-horizontal-lg" style="--si-steps-number-size-sm: 1.5rem; --si-steps-number-inner-size-sm: 1rem; --si-steps-number-bg: rgba(99,102,241,.2); --si-steps-number-inner-bg: #6366f1;">

          <!-- Step -->
          <div class="step w-100 mx-auto" style="max-width: 26rem;">
            <div class="step-number"><div class="step-number-inner"></div></div>
            <div class="step-body">
              <h3 class="mb-1"><span class="text-gradient-primary">2024</span></h3>
              <h6 class="mb-3">(1º Semestre)</h6>
              <h5 class="mb-2">Estruturação</h5>
              <p class="mb-0">Formação da equipe e das parcerias estratégicas institucionais              
                </p>
            </div>
          </div>

          <!-- Step -->
          <div class="step w-100 mx-auto" style="max-width: 26rem;">
            <div class="step-number"><div class="step-number-inner"></div></div>
            <div class="step-body">
              <h3 class="mb-1"><span class="text-gradient-primary">2024</span></h3>
              <h6 class="mb-3">(2º Semestre)</h6>
              <h5 class="mb-2">Desenvolvimento</h5>
              <p class="mb-0">Criação da plataforma NeuroBeep 2C com foco em autonomia infantil              
                </p>
            </div>
          </div>

          <!-- Step -->
          <div class="step w-100 mx-auto" style="max-width: 26rem;">
            
            <div class="step-number"><div class="step-number-inner"></div></div>
            <div class="step-body">
              <h3 class="mb-1"><span class="text-gradient-primary">2025</span></h3>
              <h6 class="mb-3">(1º Semestre)</h6>
              <h5 class="mb-2">Formação</h5>
              <p class="mb-0">Capacitação de professores e estudantes para uso da neurorrobótica              
                </p>
            </div>
          </div>

          <!-- Step -->
          <div class="step w-100 mx-auto" style="max-width: 26rem;">
            <div class="step-number"><div class="step-number-inner"></div></div>
            <div class="step-body">
              <h3 class="mb-1"><span class="text-gradient-primary">2025</span></h3>
              <h6 class="mb-3">(2º Semestre)</h6>
              <h5 class="mb-2">Implementação</h5>
              <p class="mb-0">Aplicação prática nas escolas públicas com crianças participantes              
                </p>
            </div>
          </div>

          <!-- Step -->
          <div class="step w-100 mx-auto" style="max-width: 26rem;">
            <div class="step-number"><div class="step-number-inner"></div></div>
            <div class="step-body">
              <h3 class="mb-1"><span class="text-gradient-primary">2026</span></h3>
              <h6 class="mb-3">(1º Semestre)</h6>
              <h5 class="mb-2">Expansão</h5>
              <p class="mb-0">Monitoramento dos impactos educacionais e sociais do projeto              
                </p>
            </div>
          </div>

          <!-- Step -->
          <div class="step w-100 mx-auto" style="max-width: 26rem;">
            <div class="step-number"><div class="step-number-inner"></div></div>
            <div class="step-body">
              <h3 class="mb-1"><span class="text-gradient-primary">2026</span></h3>
              <h6 class="mb-3">(2º Semestre)</h6>
              <h5 class="mb-2">Legado</h5>
              <p class="mb-0">Expansão da tecnologia e entrega dos kits com transferência aberta              
                </p>
            </div>
          </div>

        </div>

        
      </section>

      <!-- Video showreel -->
      <section class="container text-center pb-5 mt-n2 mt-md-0 mb-md-2 mb-lg-4">
        <div class="gallery" data-video="true">
          <a href="https://youtu.be/XUnS1QCASIc"
            class="gallery-item video-item rounded-3 is-hovered"
            data-sub-html='<h6 class="fs-sm text-light">Assista ao vídeo</h6>'
            data-lg-size="1280-720">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/digital-agency/back_neuroibeep_video.jpg" alt="Thumbnail do vídeo">
            <div class="gallery-item-caption p-4">
              <h4 class="text-light mb-1">Assista ao vídeo</h4>
              <p class="mb-0">NeuroBeep</p>
            </div>
          </a>
        </div>
      </section>

      <section class="container pb-2 pb-lg-3">
        <h2 class="pb-2 pb-md-3">
          <span class="text-gradient-primary">As propostas</span>
          </h2>

        <div class="row row-cols-1 row-cols-md-4 mb-5 g-4">
          <div class="col">
            <div class="card h-100">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/quem_somos/neuro_quem_somos_proposta_1.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Desenvolvimento da Plataforma NeuroBeep</h5>
                <p class="card-text">Criação de uma plataforma assistiva em desenho universal, integrando crianças com paralisia cerebral a ambientes de robótica educacional.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/quem_somos/neuro_quem_somos_proposta_3.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Criação de uma Rede de Laboratórios Interdisciplinares</h5>
                <p class="card-text">Estruturação de laboratórios de referência (desenvolvimento) e aplicação (validação e implementação) dedicados à neurorobótica educacional.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/quem_somos/neuro_quem_somos_proposta_4.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Formação de Profissionais</h5>
                <p class="card-text">Capacitação de estudantes de graduação e pós-graduação em tecnologia de alto valor.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/quem_somos/neuro_quem_somos_proposta_5.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Capacitação de Professores</h5>
                <p class="card-text">Formação de educadores para atender crianças com paralisia cerebral e aplicar as tecnologias do NeuroBeep em escolas públicas em Recife, Natal, Cruz das Almas e Feira de Santana.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row row-cols-1 row-cols-md-4 mb-5 g-4">
          <div class="col">
            <div class="card h-100">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/quem_somos/neuro_quem_somos_proposta_2.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Prospecção de Negócios</h5>
                <p class="card-text">Geração de oportunidades para empresas no desenvolvimento e aplicação das tecnologias do projeto.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/quem_somos/neuro_quem_somos_proposta_7.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Comunicação Científica</h5>
                <p class="card-text">Popularização da ciência e das tecnologias desenvolvidas no projeto por meio de materiais digitais, palestras e eventos.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/quem_somos/neuro_quem_somos_proposta_6.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Extensão Universitária</h5>
                <p class="card-text">Cursos de extensão sobre neurorrobótica e tecnologia assistiva, promovendo o acesso ao conhecimento.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/quem_somos/neuro_quem_somos_proposta_8.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Impacto Social e Comunitário</h5>
                <p class="card-text">Ações que envolvam comunidades locais, promovendo inclusão além do ambiente escolar.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="container">
        <div class="row align-items-center justify-content-center py-4 py-md-5 my-1 my-md-0 my-xl-3 gx-0">
          <!-- Logo (SVG) Section -->
          <div class="col-10 col-sm-9 col-md-6 pb-3 mb-3">
            <!-- Parallax (3D Tilt) gfx -->
          <div class="tilt-3d" data-tilt data-tilt-full-page-listening data-tilt-max="12" data-tilt-perspective="1200">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/app-showcase-2/screens/ods_detail.png" width="500" alt="Dashboard">
          </div>
          </div>
          <!-- Text Section -->
          <div class="col-md-6 col-xl-5 text-center text-md-start">
            <h3 class="display-7 mb-2">
              <span class="text-gradient-primary">Sustentabilidade no NeuroBeep</span>
            </h3>
            <p class="fs-lg mb-0">
              O NeuroBeep contribui ativamente para os Objetivos de Desenvolvimento Sustentável (ODS), transformando a vida de crianças 
              com paralisia cerebral por meio da educação inclusiva e da tecnologia assistiva. O projeto integra saúde, educação e inovação para garantir bem-estar, ampliar o acesso à educação de qualidade, fomentar tecnologias inclusivas e acessíveis, reduzir desigualdades e fortalecer parcerias entre universidades, empresas e instituições públicas. Com impacto social, econômico e ambiental, o NeuroBeep posiciona o Brasil como referência em inclusão e inovação.
            </p>
          </div>
        </div>
      </section>

      <!-- Team (Slider) -->
      <section class="container pt-lg-2 pb-5 mb-2 mb-md-4 mb-lg-5">
        <h2 class="pb-2 pb-md-3">
          <span class="text-gradient-primary">Coordenadores do Projeto</span>
          </h2>
        <div class="swiper mx-0 mb-md-n2 mb-xxl-n3" data-swiper-options='{
          "slidesPerView": 1,
          "spaceBetween": 8,
          "loop": true,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "480": {
              "slidesPerView": 2
            },
            "700": {
              "slidesPerView": 3
            },
            "900": {
              "slidesPerView": 4
            },
            "1160": {
              "slidesPerView": 5
            },
            "1500": {
              "slidesPerView": 6
            }
          }
        }'>
          <div class="swiper-wrapper">

            <!-- Item -->
            <div class="swiper-slide py-3">
              <div class="card card-body card-hover bg-light border-0 text-center mx-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_3_.png" class="d-block rounded-circle mx-auto mb-3" width="162" alt="Ralph Edwards">
                <h5 class="fw-medium fs-lg mb-1">Dr. Nivaldo Vasconcelos</h5>
                <p class="fs-sm mb-3">Coordenador Geral do NeuroBeep</p>
                <div class="d-flex justify-content-center">
                  <a href="http://lattes.cnpq.br/4110109220389767" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                    <img src="assets\img\neuro\lattes.svg" class="" alt="Lattes">
                  </a>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
              <div class="card card-body card-hover bg-light border-0 text-center mx-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_17_.png" class="d-block rounded-circle mx-auto mb-3" width="162" alt="Darrell Steward">
                <h5 class="fw-medium fs-lg mb-1">Dra. Cláudia Lima</h5>
                <p class="fs-sm mb-3">Coordenadora de Comunicação</p>
                <div class="d-flex justify-content-center">
                  <a href="http://lattes.cnpq.br/2371995765980164" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                    <img src="assets\img\neuro\lattes.svg" class="" alt="Lattes">
                  </a>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
              <div class="card card-body card-hover bg-light border-0 text-center mx-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_4_.png" class="d-block rounded-circle mx-auto mb-3" width="162" alt="Darrell Steward">
                <h5 class="fw-medium fs-lg mb-1">Dr. Justo Alvarez </h5>
                <p class="fs-sm mb-3">Coordenador de Robótica e Automação </p>
                <div class="d-flex justify-content-center">
                  <a href="http://lattes.cnpq.br/6626922380758460" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                    <img src="assets\img\neuro\lattes.svg" class="" alt="Lattes">
                  </a>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
              <div class="card card-body card-hover bg-light border-0 text-center mx-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_19_.png" class="d-block rounded-circle mx-auto mb-3" width="162" alt="Darrell Steward">
                <h5 class="fw-medium fs-lg mb-1">Dr. Ricardo Yara </h5>
                <p class="fs-sm mb-3">Coordenador de Metagenômica </p>
                <div class="d-flex justify-content-center">
                  <a href="http://lattes.cnpq.br/0851707453185143 " class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                    <img src="assets\img\neuro\lattes.svg" class="" alt="Lattes">
                  </a>
                </div>
              </div>
            </div>
            
            <!-- Item -->
            <div class="swiper-slide py-3">
              <div class="card card-body card-hover bg-light border-0 text-center mx-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_32_.png" class="d-block rounded-circle mx-auto mb-3" width="162" alt="Darrell Steward">
                <h5 class="fw-medium fs-lg mb-1">Dr. Aquiles Burlamaqui</h5>
                <p class="fs-sm mb-3">Coordenador de Tecnologias Assistivas</p>
                <div class="d-flex justify-content-center">
                  <a href="http://lattes.cnpq.br/8670475877813913" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                    <img src="assets\img\neuro\lattes.svg" class="" alt="Lattes">
                  </a>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
              <div class="card card-body card-hover bg-light border-0 text-center mx-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_34_.png" class="d-block rounded-circle mx-auto mb-3" width="162" alt="Darrell Steward">
                <h5 class="fw-medium fs-lg mb-1">Dr. Edward Hermann</h5>
                <p class="fs-sm mb-3">Coordenador de Ciência de Dados</p>
                <div class="d-flex justify-content-center">
                  <a href="http://lattes.cnpq.br/6075905438020841 " class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                    <img src="assets\img\neuro\lattes.svg" class="" alt="Lattes">
                  </a>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
              <div class="card card-body card-hover bg-light border-0 text-center mx-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_33_.png" class="d-block rounded-circle mx-auto mb-3" width="162" alt="Darrell Steward">
                <h5 class="fw-medium fs-lg mb-1">Dr. Pedro Carelli</h5>
                <p class="fs-sm mb-3">Coordenador de Física e Neurociência</p>
                <div class="d-flex justify-content-center">
                  <a href="http://lattes.cnpq.br/0869469262114149" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                    <img src="assets\img\neuro\lattes.svg" class="" alt="Lattes">
                  </a>
                </div>
              </div>
            </div>

            </div>
           
            

          <!-- Pagination (bullets) -->
          <div class="swiper-pagination position-relative pt-3 mt-3"></div>
        </div>
      </section>

      <!-- Services -->
      <section class="container mb-5 pb-2 pb-md-4 pb-lg-5">
        <div class="card border-0 bg-secondary p-md-5 px-sm-2 pt-4 pb-3">
          <div class="card-body mx-auto" style="max-width: 860px;">
            <h2 class="h1 mb-4 text-center">Perguntas Frequentes</h2>
            <p class="mb-4 pb-3 fs-lg text-center text-muted">Ainda com dúvidas? Preparamos algumas respostas de perguntas frequentes para você</p>

            <!-- Accordion: Alternative style -->
            <div class="accordion" id="accordion-services">

              <!-- Item -->
              <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                <h3 class="accordion-header" id="heading-1">
                  <button class="accordion-button fs-xl shadow-none rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">O que  é o NeuroBeep?</button>
                </h3>
                <div class="accordion-collapse collapse show" id="collapse-1" aria-labelledby="heading-1" data-bs-parent="#accordion-services">
                  <div class="accordion-body pt-0">
                    <div class="d-flex flex-md-row flex-column align-items-md-center">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/cta.png" width="200" alt="Digital Marketing" class="me-md-4 mb-md-0 mb-3">
                      <div class="ps-md-3">
                        <p class="mb-0">O NeuroBeep é um projeto inovador que combina neurociência, robótica educacional e tecnologia assistiva para promover a inclusão digital de crianças com paralisia cerebral severa em ambientes educacionais. Ele permite que essas crianças participem ativamente do aprendizado por meio de interfaces cérebro-máquina, ampliando sua autonomia e interação no ambiente escolar.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                <h3 class="accordion-header" id="heading-2">
                  <button class="accordion-button fs-xl shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">Qual o objetivo do projeto?</button>
                </h3>
                <div class="accordion-collapse collapse" id="collapse-2" aria-labelledby="heading-2" data-bs-parent="#accordion-services">
                  <div class="accordion-body pt-0">
                    <div class="d-flex flex-md-row flex-column align-items-md-center">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/digital-agency/services/02.png" width="200" alt="Web Development" class="me-md-4 mb-md-0 mb-3">
                      <div class="ps-md-3">
                        <p class="mb-0">O NeuroBeep busca desenvolver tecnologias acessíveis, formação de professores, promover a educação inclusiva e ampliar o impacto da inovação científica. Além disso, o projeto incentiva a formação de pesquisadores e o desenvolvimento de startups voltadas para tecnologia assistiva.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                <h3 class="accordion-header" id="heading-3">
                  <button class="accordion-button fs-xl shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="true" aria-controls="collapse-3">Quem desenvolve o NeuroBeep?</button>
                </h3>
                <div class="accordion-collapse collapse" id="collapse-3" aria-labelledby="heading-3" data-bs-parent="#accordion-services">
                  <div class="accordion-body pt-0">
                    <div class="d-flex flex-md-row flex-column align-items-md-center">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/digital-agency/services/03.png" width="200" alt="Application Development" class="me-md-4 mb-md-0 mb-3">
                      <div class="ps-md-3">
                        <p class="mb-0">O projeto é desenvolvido pelo Departamento de Engenharia Biomédica da Universidade Federal de Pernambuco (UFPE), com financiamento da FINEP – SISASSISTIVA-MCTI e conta com a parceria de outras universidades, startups de tecnologia assistiva e instituições de saúde.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                <h3 class="accordion-header" id="heading-4">
                  <button class="accordion-button fs-xl shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="true" aria-controls="collapse-4">O que é uma interface cérebro-máquina e como funciona no NeuroBeep?</button>
                </h3>
                <div class="accordion-collapse collapse" id="collapse-4" aria-labelledby="heading-4" data-bs-parent="#accordion-services">
                  <div class="accordion-body pt-0">
                    <div class="d-flex flex-md-row flex-column align-items-md-center">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/digital-agency/services/04.png" width="200" alt="Strategy" class="me-md-4 mb-md-0 mb-3">
                      <div class="ps-md-3">
                        <p class="mb-0">A interface cérebro-máquina (ICM) é uma tecnologia que capta sinais cerebrais e os converte em comandos digitais, permitindo que crianças com limitações motoras interajam com o ambiente educacional. No NeuroBeep, essa tecnologia possibilita que os alunos controlem dispositivos robóticos e participem de atividades escolares.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                <h3 class="accordion-header" id="heading-5">
                  <button class="accordion-button fs-xl shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="true" aria-controls="collapse-5">O que é o NeuroBeep 2C?</button>
                </h3>
                <div class="accordion-collapse collapse" id="collapse-5" aria-labelledby="heading-5" data-bs-parent="#accordion-services">
                  <div class="accordion-body pt-0">
                    <div class="d-flex flex-md-row flex-column align-items-md-center">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/digital-agency/services/05.png" width="200" alt="Digital Advertising" class="me-md-4 mb-md-0 mb-3">
                      <div class="ps-md-3">
                        <p class="mb-0">O NeuroBeep 2C é uma plataforma assistiva que permite a comunicação e interação por meio de dois comandos básicos, controlados por sinais cerebrais de uma única área encefálica. Ele possibilita que crianças com paralisia cerebral severa participem de atividades educacionais e interajam com o ambiente escolar de forma acessível e adaptada às suas necessidades.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                <h3 class="accordion-header" id="heading-6">
                  <button class="accordion-button fs-xl shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="true" aria-controls="collapse-6">Como o NeuroBeep será aplicado nas escolas?</button>
                </h3>
                <div class="accordion-collapse collapse" id="collapse-6" aria-labelledby="heading-6" data-bs-parent="#accordion-services">
                  <div class="accordion-body pt-0">
                    <div class="d-flex flex-md-row flex-column align-items-md-center">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/digital-agency/services/05.png" width="200" alt="Digital Advertising" class="me-md-4 mb-md-0 mb-3">
                      <div class="ps-md-3">
                        <p class="mb-0">O NeuroBeep será inserido e testado em escolas públicas distribuídas em Recife (PE), Natal (RN), Feira de Santana (BA) e Cruz das Almas (BA). Professores receberão formação para utilizar a tecnologia assistiva e integrá-la ao ensino.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                <h3 class="accordion-header" id="heading-7">
                  <button class="accordion-button fs-xl shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="true" aria-controls="collapse-7">O NeuroBeep 2C pode ser usado fora do ambiente escolar?</button>
                </h3>
                <div class="accordion-collapse collapse" id="collapse-7" aria-labelledby="heading-7" data-bs-parent="#accordion-services">
                  <div class="accordion-body pt-0">
                    <div class="d-flex flex-md-row flex-column align-items-md-center">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/digital-agency/services/05.png" width="200" alt="Digital Advertising" class="me-md-4 mb-md-0 mb-3">
                      <div class="ps-md-3">
                        <p class="mb-0">Sim! O objetivo final do projeto é que a tecnologia possa ser utilizada em diferentes contextos, como reabilitação, comunicação alternativa e interação social, possibilitando que crianças com deficiência utilizem o NeuroBeep 2C tanto na escola quanto em casa.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                <h3 class="accordion-header" id="heading-8">
                  <button class="accordion-button fs-xl shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="true" aria-controls="collapse-8">Como professores podem participar de formações para usar o NeuroBeep?</button>
                </h3>
                <div class="accordion-collapse collapse" id="collapse-8" aria-labelledby="heading-8" data-bs-parent="#accordion-services">
                  <div class="accordion-body pt-0">
                    <div class="d-flex flex-md-row flex-column align-items-md-center">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/digital-agency/services/05.png" width="200" alt="Digital Advertising" class="me-md-4 mb-md-0 mb-3">
                      <div class="ps-md-3">
                        <p class="mb-0">O projeto oferecerá cursos de extensão universitária para professores da rede pública. Durante a formação, os educadores aprenderão a utilizar a tecnologia assistiva e a integrá-la ao ensino mediado por robótica.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                <h3 class="accordion-header" id="heading-9">
                  <button class="accordion-button fs-xl shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9" aria-expanded="true" aria-controls="collapse-9">Como pesquisadores e estudantes podem se envolver?</button>
                </h3>
                <div class="accordion-collapse collapse" id="collapse-9" aria-labelledby="heading-9" data-bs-parent="#accordion-services">
                  <div class="accordion-body pt-0">
                    <div class="d-flex flex-md-row flex-column align-items-md-center">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/digital-agency/services/05.png" width="200" alt="Digital Advertising" class="me-md-4 mb-md-0 mb-3">
                      <div class="ps-md-3">
                        <p class="mb-0">O NeuroBeep conta com bolsas para estudantes de graduação e pós-graduação interessados em neurociência, tecnologia assistiva e educação inclusiva.
                          </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                <h3 class="accordion-header" id="heading-10">
                  <button class="accordion-button fs-xl shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10" aria-expanded="true" aria-controls="collapse-10">Qual o impacto esperado do NeuroBeep?</button>
                </h3>
                <div class="accordion-collapse collapse" id="collapse-10" aria-labelledby="heading-10" data-bs-parent="#accordion-services">
                  <div class="accordion-body pt-0">
                    <div class="d-flex flex-md-row flex-column align-items-md-center">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/digital-agency/services/05.png" width="200" alt="Digital Advertising" class="me-md-4 mb-md-0 mb-3">
                      <div class="ps-md-3">
                        <p class="mb-0">✔ Inclusão digital de crianças com deficiência.<br>
                          ✔ Formação de professores para o ensino inclusivo.<br>
                          ✔ Expansão da tecnologia assistiva para mais escolas e instituições.<br>
                          ✔ Popularização da ciência e da inovação educacional.<br>
                          </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
      

      
      <!-- Social networks (Carousel on narrow screens) -->
      <section class="container text-center py-5 my-2 my-md-4 my-lg-5">
        <h2 class="h1 mb-4">Nós temos Redes Sociais!</h2>
        <p class="fs-lg text-muted pb-2 mb-5">Siga-nos e fique por dentro das últimas novidades!</p>
        <div class="row">
          <div class="col">
            <div class="position-relative text-center border-end border-start mx-n1">
              <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-lg stretched-link" aria-label="Facebook">
                <i class="bx bxl-facebook"></i>
              </a>
              <div class="pt-4">
                <h6 class="mb-1">Facebook</h6>
                <p class="fs-sm text-muted mb-0">NeuroBeep</p>
              </div>
            </div>

          </div>
          <div class="col">
            <div class="position-relative text-center border-end mx-n1">
              <a href="https://www.instagram.com/neurobeep/?utm_source=ig_web_button_share_sheet" class="btn btn-icon btn-secondary btn-instagram btn-lg stretched-link" aria-label="Instagram">
                <i class="bx bxl-instagram"></i>
              </a>
              <div class="pt-4">
                <h6 class="mb-1">Instagram</h6>
                <p class="fs-sm text-muted mb-0">@neurobeep</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="position-relative text-center border-end mx-n1">
              <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-lg stretched-link" aria-label="LinkedIn">
                <i class="bx bxl-linkedin"></i>
              </a>
              <div class="pt-4">
                <h6 class="mb-1">LinkedIn</h6>
                <p class="fs-sm text-muted mb-0">NeuroBeep Inc.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="position-relative text-center border-end mx-n1">
              <a href="#" class="btn btn-icon btn-secondary btn-youtube btn-lg stretched-link" aria-label="Twitter">
                <i class="bx bxl-youtube"></i>
              </a>
              <div class="pt-4">
                <h6 class="mb-1">YouTube</h6>
                <p class="fs-sm text-muted mb-0">NeuroBeep</p>
              </div>
            </div>
          </div>
        </div>

      </section>
    </main>

      <!-- CONTEUDO END -->

      
    </main>

      <?php
get_footer();



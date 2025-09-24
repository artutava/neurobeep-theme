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
        <nav class="container py-4 mb-2 my-lg-3" aria-label="breadcrumb">
          <ol class="breadcrumb mt-5">
            <li class="breadcrumb-item">
              <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Linhas Temáticas</li>
          </ol>
        </nav>
  
  
      <!-- Início do Conteúdo -->
        <!-- About company (agora como introdução do conteúdo) -->
        <section class="container pb-5 mb-md-2 mb-lg-4">
          <h1 class="border-bottom pb-4">Linhas temáticas</h1>
          <div class="row pt-2 pt-md-3">
            <div class="col">
              <p class="fs-lg pe-lg-4 mb-1 mb-lg-4">
                Com foco na inovação tecnológica e na acessibilidade, o projeto desenvolve interfaces cérebro-máquina e plataformas de robótica para superar barreiras físicas e cognitivas. Ao oferecer soluções replicáveis, busca ampliar a autonomia das pessoas e contribuir para uma sociedade mais inclusiva.
              </p>
            </div>
          </div>
        </section>


      <!-- Grid de Eixos (Cards sem links, sem hover e sem setas) -->
      <section class="container pb-5 mb-2 mb-md-4 mb-lg-5">
        <div class="row row-cols-1 row-cols-md-3">
          <!-- Eixo 1: Habilitação -->
          <div class="col py-4 my-2 my-sm-3">
            <div class="card h-100 border-0 shadow-sm pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3">
              <div class="card-body pt-3">
                <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                  <img class="svg-changes-color" src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/habilitacao-white.png" class="d-block m-1" width="40" alt="Habilitação Icon">
                </div>
                <h2 class="h4 d-inline-flex align-items-center">
                  Habilitação
                </h2>
                <p class="fs-sm text-body mb-0">
                  Desenvolvimento de habilidades fundamentais para crianças com deficiências, promovendo autonomia e inclusão.
                </p>
              </div>
            </div>
          </div>
          <!-- Eixo 2: Reabilitação -->
          <div class="col py-4 my-2 my-sm-3">
            <div class="card h-100 border-0 shadow-sm pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3">
              <div class="card-body pt-3">
                <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/reabilitacao-white.png" class="d-block m-1" width="40" alt="Reabilitação Icon">
                </div>
                <h2 class="h4 d-inline-flex align-items-center">
                  Reabilitação
                </h2>
                <p class="fs-sm text-body mb-0">
                  Aplicação de tecnologias para melhorar funções motoras e cognitivas, promovendo recuperação e qualidade de vida.
                </p>
              </div>
            </div>
          </div>
          <!-- Eixo 3: Convivência -->
          <div class="col py-4 my-2 my-sm-3">
            <div class="card h-100 border-0 shadow-sm pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3">
              <div class="card-body pt-3">
                <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/convivencia-white.png" class="d-block m-1" width="40" alt="Convivência Icon">
                </div>
                <h2 class="h4 d-inline-flex align-items-center">
                  Convivência
                </h2>
                <p class="fs-sm text-body mb-0">
                  Criação de ambientes inclusivos que incentivem a interação e a integração social.
                </p>
              </div>
            </div>
          </div>
          <!-- Eixo 4: Cuidado -->
          <div class="col py-4 my-2 my-sm-3">
            <div class="card h-100 border-0 shadow-sm pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3">
              <div class="card-body pt-3">
                <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/cuidado-white.png" class="d-block m-1" width="40" alt="Cuidado Icon">
                </div>
                <h2 class="h4 d-inline-flex align-items-center">
                  Cuidado
                </h2>
                <p class="fs-sm text-body mb-0">
                  Práticas e tecnologias que garantem o bem-estar de crianças e cuidadores.
                </p>
              </div>
            </div>
          </div>
          <!-- Eixo 6: Transporte -->
          <div class="col py-4 my-2 my-sm-3">
            <div class="card h-100 border-0 shadow-sm pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3">
              <div class="card-body pt-3">
                <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/transporte-white.png" class="d-block m-1" width="40" alt="Transporte Icon">
                </div>
                <h2 class="h4 d-inline-flex align-items-center">
                  Transporte
                </h2>
                <p class="fs-sm text-body mb-0">
                  Soluções que facilitam a mobilidade e o acesso às atividades educacionais.
                </p>
              </div>
            </div>
          </div>
          <!-- Eixo 8: Tecnologias para Inclusão Digital -->
          <div class="col py-4 my-2 my-sm-3">
            <div class="card h-100 border-0 shadow-sm pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3">
              <div class="card-body pt-3">
                <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/tech-white.png" class="d-block m-1" width="40" alt="Inclusão Digital Icon">
                </div>
                <h2 class="h4 d-inline-flex align-items-center">
                  Tecnologias para Inclusão Digital
                </h2>
                <p class="fs-sm text-body mb-0">
                  Ferramentas digitais que ampliam o acesso à educação e promovem a inclusão.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- How it works (Steps) -->
      <section class="container pt-4 pt-lg-0 pb-4 pb-lg-5">
        <h2 class="h1 text-center pb-3 pb-md-0 mb-md-5">Etapas do Projeto</h2>
        <div class="steps">
          <div class="step pt-0 pt-md-3 pb-5">
            <div class="step-number">
              <div class="step-number-inner">1</div>
            </div>
            <div class="step-body d-flex align-items-center ps-xl-5">
              <div class="rellax d-none d-lg-block flex-shrink-0 mx-4 mx-xl-5" data-rellax-percentage="0.5" data-rellax-speed="-0.3" data-disable-parallax-down="lg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/online-courses/steps/01-dark.svg" class="d-dark-mode-none" width="306" alt="Illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/online-courses/steps/01-light.svg" class="d-none d-dark-mode-block" width="306" alt="Illustration">
              </div>
              <div class="rellax ps-md-4 ps-xl-5" data-rellax-percentage="0.5" data-rellax-speed="0.4" data-disable-parallax-down="lg">
                <h3 class="display-7 mb-4"><span class="text-gradient-primary">Estruturação do Projeto</span></h3>
                <p class="mb-0">Formação da equipe, definição de parcerias e planejamento inicial.
                  Nesta fase, foram definidos os objetivos estratégicos e formada uma equipe multidisciplinar, envolvendo instituições de ensino, pesquisa e empresas parceiras. Também foi planejada toda a estrutura do projeto, garantindo a base necessária para seu sucesso.
                  </p>
              </div>
            </div>
          </div>
          <div class="step pt-0 pt-md-4 pb-5">
            <div class="step-number">
              <div class="step-number-inner">2</div>
            </div>
            <div class="step-body d-flex align-items-center ps-xl-5">
              <div class="rellax d-none d-lg-block flex-shrink-0 mx-4 mx-xl-5" data-rellax-percentage="0.5" data-rellax-speed="-0.5" data-disable-parallax-down="lg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/online-courses/steps/02-dark.svg" class="d-dark-mode-none" width="306" alt="Illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/online-courses/steps/02-light.svg" class="d-none d-dark-mode-block" width="306" alt="Illustration">
              </div>
              <div class="rellax ps-md-4 ps-xl-5" data-rellax-percentage="0.5" data-rellax-speed="0.5" data-disable-parallax-down="lg">
                <h3 class="display-7 mb-4"><span class="text-gradient-primary">Desenvolvimento da Plataforma NeuroBeep</span></h3>
                <p class="mb-0">Criação e testes do NeuroBeep 2C com interfaces cérebro-máquina.
                  A plataforma NeuroBeep 2C é desenvolvida para permitir a comunicação de crianças com deficiências motoras severas por meio de comandos cerebrais. Essa etapa inclui prototipagem, testes de usabilidade e validação tecnológica.
                  </p>
              </div>
            </div>
          </div>
          <div class="step pt-0 pt-md-4 pb-5">
            <div class="step-number">
              <div class="step-number-inner">3</div>
            </div>
            <div class="step-body d-flex align-items-center ps-xl-5">
              <div class="rellax d-none d-lg-block flex-shrink-0 mx-4 mx-xl-5" data-rellax-percentage="0.5" data-rellax-speed="-0.3" data-disable-parallax-down="lg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/online-courses/steps/03-dark.svg" class="d-dark-mode-none" width="306" alt="Illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/online-courses/steps/03-light.svg" class="d-none d-dark-mode-block" width="306" alt="Illustration">
              </div>
              <div class="rellax ps-md-4 ps-xl-5" data-rellax-percentage="0.5" data-rellax-speed="0.4" data-disable-parallax-down="lg">
                <h3 class="display-7 mb-4"><span class="text-gradient-primary">Pesquisa Científica e Inovação</span></h3>
                <p class="mb-0">Estudos em neurofeedback, eletrofisiologia e metagenômica para validação das tecnologias.
                  Pesquisas avançadas garantem o respaldo científico do projeto, integrando estudos de neurociência, microbiota e comportamento cognitivo para otimizar os resultados das tecnologias desenvolvidas.
                  </p>
              </div>
            </div>
          </div>
          <div class="step pt-0 pt-md-4 pb-5">
            <div class="step-number">
              <div class="step-number-inner">4</div>
            </div>
            <div class="step-body d-flex align-items-center ps-xl-5">
              <div class="rellax d-none d-lg-block flex-shrink-0 mx-4 mx-xl-5" data-rellax-percentage="0.5" data-rellax-speed="-0.3" data-disable-parallax-down="lg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/online-courses/steps/03-dark.svg" class="d-dark-mode-none" width="306" alt="Illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/online-courses/steps/03-light.svg" class="d-none d-dark-mode-block" width="306" alt="Illustration">
              </div>
              <div class="rellax ps-md-4 ps-xl-5" data-rellax-percentage="0.5" data-rellax-speed="0.4" data-disable-parallax-down="lg">
                <h3 class="display-7 mb-4"><span class="text-gradient-primary">Formação de Professores e Estudantes</span></h3>
                <p class="mb-0">Formação de educadores e pesquisadores em tecnologia assistiva e robótica educacional.
                  Educadores da rede pública e estudantes universitários são capacitados para integrar as tecnologias do NeuroBeep no ambiente educacional, ampliando a aplicação prática do projeto.
                  </p>
              </div>
            </div>
          </div>
          <div class="step pt-0 pt-md-4 pb-5">
            <div class="step-number">
              <div class="step-number-inner">5</div>
            </div>
            <div class="step-body d-flex align-items-center ps-xl-5">
              <div class="rellax d-none d-lg-block flex-shrink-0 mx-4 mx-xl-5" data-rellax-percentage="0.5" data-rellax-speed="-0.5" data-disable-parallax-down="lg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/online-courses/steps/04-dark.svg" class="d-dark-mode-none" width="306" alt="Illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/online-courses/steps/04-light.svg" class="d-none d-dark-mode-block" width="306" alt="Illustration">
              </div>
              <div class="rellax ps-md-4 ps-xl-5" data-rellax-percentage="0.5" data-rellax-speed="0.6" data-disable-parallax-down="lg">
                <h3 class="display-7 mb-4"><span class="text-gradient-primary">Seleção e Implementação nas Escolas</span></h3>
                <p class="mb-0">Escolha das 8 escolas públicas, adaptação do ambiente e seleção das crianças participantes.
                  As escolas parceiras são preparadas para receber as tecnologias do projeto, com seleção cuidadosa de professores e crianças para a implementação inicial da plataforma.
                  </p>
              </div>
            </div>
          </div>
          <div class="step pt-0 pt-md-4 pb-5">
            <div class="step-number">
              <div class="step-number-inner">6</div>
            </div>
            <div class="step-body d-flex align-items-center ps-xl-5">
              <div class="rellax d-none d-lg-block flex-shrink-0 mx-4 mx-xl-5" data-rellax-percentage="0.5" data-rellax-speed="-0.5" data-disable-parallax-down="lg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/online-courses/steps/04-dark.svg" class="d-dark-mode-none" width="306" alt="Illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/online-courses/steps/04-light.svg" class="d-none d-dark-mode-block" width="306" alt="Illustration">
              </div>
              <div class="rellax ps-md-4 ps-xl-5" data-rellax-percentage="0.5" data-rellax-speed="0.6" data-disable-parallax-down="lg">
                <h3 class="display-7 mb-4"><span class="text-gradient-primary">Testes e Validação da Plataforma</span></h3>
                <p class="mb-0">Aplicação do NeuroBeep em ambientes escolares e clínicos, ajustes técnicos e feedbacks.
                  Esta etapa foca na aplicação prática das soluções desenvolvidas, com testes em campo que permitem identificar melhorias e garantir a eficácia das tecnologias assistivas.
                  </p>
              </div>
            </div>
          </div>
          <div class="step pt-0 pt-md-4 pb-5">
            <div class="step-number">
              <div class="step-number-inner">7</div>
            </div>
            <div class="step-body d-flex align-items-center ps-xl-5">
              <div class="rellax d-none d-lg-block flex-shrink-0 mx-4 mx-xl-5" data-rellax-percentage="0.5" data-rellax-speed="-0.5" data-disable-parallax-down="lg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/online-courses/steps/04-dark.svg" class="d-dark-mode-none" width="306" alt="Illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/online-courses/steps/04-light.svg" class="d-none d-dark-mode-block" width="306" alt="Illustration">
              </div>
              <div class="rellax ps-md-4 ps-xl-5" data-rellax-percentage="0.5" data-rellax-speed="0.6" data-disable-parallax-down="lg">
                <h3 class="display-7 mb-4"><span class="text-gradient-primary">Divulgação Científica e Popularização do Conhecimento</span></h3>
                <p class="mb-0">Publicação de pesquisas, eventos acadêmicos e produção de materiais educativos.
                  Os resultados do projeto são disseminados por meio de publicações científicas, eventos e conteúdos acessíveis para ampliar o alcance e impacto social das descobertas.
                  </p>
              </div>
            </div>
          </div>
          <div class="step pt-0 pt-md-4 pb-5">
            <div class="step-number">
              <div class="step-number-inner">8</div>
            </div>
            <div class="step-body d-flex align-items-center ps-xl-5">
              <div class="rellax d-none d-lg-block flex-shrink-0 mx-4 mx-xl-5" data-rellax-percentage="0.5" data-rellax-speed="-0.5" data-disable-parallax-down="lg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/online-courses/steps/04-dark.svg" class="d-dark-mode-none" width="306" alt="Illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/online-courses/steps/04-light.svg" class="d-none d-dark-mode-block" width="306" alt="Illustration">
              </div>
              <div class="rellax ps-md-4 ps-xl-5" data-rellax-percentage="0.5" data-rellax-speed="0.6" data-disable-parallax-down="lg">
                <h3 class="display-7 mb-4"><span class="text-gradient-primary">Entrega de Resultados e Transferência de Tecnologia</span></h3>
                <p class="mb-0">Apresentação de relatórios finais, continuidade da pesquisa e implementação em larga escala.
                  Finalização com entrega dos relatórios de impacto e resultados para os parceiros, instituições e sociedade. A tecnologia desenvolvida será disponibilizada para ampliar seu alcance, beneficiando ainda mais crianças no futuro.
                  </p>
              </div>
            </div>
          </div>
        </div>
      </section>

  <!-- CTA -->
  <section class="container mb-1 mb-md-3 mb-lg-4">
    <div class="bg-secondary rounded-3 overflow-hidden">
      <div class="row align-items-center">
        <div class="col-xl-4 col-md-5 offset-lg-1">
          <div class="pt-1 pb-3 pb-md-5 px-4 px-lg-0 text-center text-md-start">
            <h2 class="h1 pb-3 pb-sm-4">Contribua com o <span class="text-primary">Projeto</span>!</h2>
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


      
    </main>


  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Para todos os sliders em abas, pare o autoplay
      document.querySelectorAll('.tab-pane .swiper').forEach(function(swiperEl) {
        if (swiperEl.swiper && swiperEl.swiper.autoplay) {
          swiperEl.swiper.autoplay.stop();
        }
      });
      // Inicie o autoplay somente no slider da aba ativa
      var activeSlider = document.querySelector('.tab-pane.show.active .swiper');
      if (activeSlider && activeSlider.swiper && activeSlider.swiper.autoplay) {
        activeSlider.swiper.autoplay.start();
      }
    
      // Ao mudar de aba, reinicie o autoplay apenas para o slider da aba ativa
      var tabLinks = document.querySelectorAll('[data-bs-toggle="tab"]');
      tabLinks.forEach(function(tab) {
        tab.addEventListener('shown.bs.tab', function(e) {
          // Pare o autoplay em todos os sliders
          document.querySelectorAll('.tab-pane .swiper').forEach(function(swiperEl) {
            if (swiperEl.swiper && swiperEl.swiper.autoplay) {
              swiperEl.swiper.autoplay.stop();
            }
          });
          // Inicie o autoplay no slider da aba ativa
          var target = e.target.getAttribute('href');
          var slider = document.querySelector(target + ' .swiper');
          if (slider && slider.swiper && slider.swiper.autoplay) {
            slider.swiper.autoplay.start();
          }
        });
      });
    });
    </script>
  



      
    </main>

      <?php
get_footer();



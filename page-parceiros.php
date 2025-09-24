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
            <li class="breadcrumb-item active" aria-current="page">Parceiros</li>
          </ol>
        </nav>
  
        <!-- About company -->
        <section class="container pb-5 mb-md-2 mb-lg-4">
          <h1 class="border-bottom pb-4">Rede Colaborativa em Tecnologia Assistiva do NeuroBeep
          </h1>
          <div class="row pt-2 pt-md-3">
            <div class="col">
              <p class="fs-lg pe-lg-4 mb-1 mb-lg-4">
                Os parceiros do projeto NeuroBeep desempenham um papel essencial na realização de suas ações e objetivos. Por meio de uma rede colaborativa que integra ciência, educação e tecnologia, os envolvidos contribuem com expertise, infraestrutura e recursos estratégicos.<br>

As atividades do projeto se concentram em quatro cidades do Nordeste brasileiro: Recife (PE), Natal (RN), Cruz das Almas (BA) e Feira de Santana (BA). Nessas localidades, os parceiros apoiam iniciativas como capacitação de professores, validação da plataforma NeuroBeep em escolas públicas e desenvolvimento de tecnologias assistivas. Abaixo estão as organizações que fazem parte da rede de colaboração do projeto NeuroBeep.
              </p>
            </div>
          </div>
        </section>
  
        <!-- Stats - Realização -->
        <section class="container pb-5 mb-2 mb-md-4 mb-lg-5">
          <div class="bg-secondary fixed-bg rounded-3 py-5 px-3 px-md-0">
            <div class="row justify-content-center mb-1 py-md-2 py-lg-4">
              <div class="col-lg-10 col-md-11">
                <h2 class="pb-5">Realização</h2>
                <div class="row g-5">
                  <section class="container mt-3 mb-3 pt-2 pb-lg-5">
                    <div class="row gy-4">
                      <div class="col-lg-4 col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/0-ufpe_DEBM_logo.png" alt="Cover" class="rounded-3">
                      </div>
                      <div class="col-lg-8 col-md-6">
                        <div class="ms-xl-5 ms-lg-4 ps-xxl-34">
                          <p class="mb-0 fs-lg">
                            A UFPE, por meio do Departamento de Engenharia Biomédica, será responsável pela coordenação geral do projeto NeuroBeep e pelo desenvolvimento das tecnologias centrais, como interfaces cérebro-máquina e a plataforma assistiva. Também atuará no desenvolvimento e validação dos protocolos de neurofeedback com EEG, no estudo da microbiota via metagenômica durante o processo de aprendizagem dos pacientes, e na avaliação clínica e adaptação postural para o uso da robótica educacional.
                          </p>
                        </div>
                        <div class="col-lg-8 col-md-6">
                          <div class="ms-xl-5 ms-lg-4 ps-xxl-34">
                            
                            <a href="https://www.ufpe.br" class="btn btn-outline-primary mt-4">
                              Acessar Site
                              <i class="bx bx-chevron-right fs-lg ms-2 me-n2"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  
                  <!-- Outras seções semelhantes para Realização -->
                </div>
              </div>
            </div>
          </div>
        </section>
  
        <!-- Stats - Apoio Financeiro -->
        <section class="container pb-5 mb-2 mb-md-4 mb-lg-5">
          <div class="bg-secondary fixed-bg rounded-3 py-5 px-3 px-md-0">
            <div class="row justify-content-center mb-1 py-md-2 py-lg-4">
              <div class="col-lg-10 col-md-11">
                <h2 class="pb-5">Apoio Financeiro</h2>
                <div class="row g-5">
                  <section class="container mt-3 mb-3 pt-2 pb-lg-5">
                    <div class="row gy-4">
                      <div class="col-lg-4 col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/3-finep_logo.png" alt="Cover" class="rounded-3">
                      </div>
                      <div class="col-lg-8 col-md-6">
                        <div class="ms-xl-5 ms-lg-4 ps-xxl-34">
                          <p class="mb-0 fs-lg">
                            O projeto NeuroBep é financiado pela Finep, órgão que apoia a ciência e tecnologia brasileira. A Finep oferece recursos reembolsáveis e não-reembolsáveis para instituições de pesquisa e empresas.
Seu apoio cobre todas as etapas desde a pesquisa até o desenvolvimento tecnológico.  A parceria fortalece a estruturação tecnológica e impulsiona soluções inovadoras no país.
                          </p>
                          <a href="#" class="btn btn-outline-primary mt-4">
                            Acessar Site
                            <i class="bx bx-chevron-right fs-lg ms-2 me-n2"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </section>      
                </div>
              </div>
            </div>
          </div>
        </section>
  
        <!-- Stats - Instituições Parceiras -->
        <section class="container pb-5 mb-2 mb-md-4 mb-lg-5">
          <div class="bg-secondary fixed-bg rounded-3 py-5 px-3 px-md-0">
            <div class="row justify-content-center mb-1 py-md-2 py-lg-4">
              <div class="col-lg-10 col-md-11">
                <h2 class="pb-5">Instituições Parceiras</h2>
                <div class="row g-5">
                  <section class="container mt-3 mb-3 pt-2 pb-lg-5">
                    <div class="row gy-4">
                      <div class="col-lg-4 col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/4-ufrn_logo.png" alt="Cover" class="rounded-3">
                      </div>
                      <div class="col-lg-8 col-md-6">
                        <div class="ms-xl-5 ms-lg-4 ps-xxl-34">
                          <p class="mb-0 fs-lg">
                            Atua na validação e aplicação das tecnologias em campo, especialmente nas escolas públicas de Natal (RN), integrando pesquisa e extensão.
                          </p>
                          <a href="https://www.ufrn.br" class="btn btn-outline-primary mt-4">
                            Acessar Site
                            <i class="bx bx-chevron-right fs-lg ms-2 me-n2"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section class="container mt-3 mb-3 pt-2 pb-lg-5">
                    <div class="row gy-4">
                      <div class="col-lg-4 col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/5-puc_logo.png" alt="Cover" class="rounded-3">
                      </div>
                      <div class="col-lg-8 col-md-6">
                        <div class="ms-xl-5 ms-lg-4 ps-xxl-34">
                          <p class="mb-0 fs-lg">
                            Gerencia a plataforma de dados do projeto, integrando e organizando as informações para análises e aprimoramento contínuo das tecnologias desenvolvidas.
                          </p>
                          <a href="#" class="btn btn-outline-primary mt-4">
                            Acessar Site
                            <i class="bx bx-chevron-right fs-lg ms-2 me-n2"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section class="container mt-3 mb-3 pt-2 pb-lg-5">
                    <div class="row gy-4">
                      <div class="col-lg-4 col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/6-ufrb_logo.png" alt="Cover" class="rounded-3">
                      </div>
                      <div class="col-lg-8 col-md-6">
                        <div class="ms-xl-5 ms-lg-4 ps-xxl-34">
                          <p class="mb-0 fs-lg">
                            Foca na implementação do projeto na Bahia, contribuindo com a formação de professores, validação das plataformas e participação nas ações de extensão universitária.
                          </p>
                          <a href="https://www.ufrb.edu.br" class="btn btn-outline-primary mt-4">
                            Acessar Site
                            <i class="bx bx-chevron-right fs-lg ms-2 me-n2"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section class="container mt-3 mb-3 pt-2 pb-lg-5">
                    <div class="row gy-4">
                      <div class="col-lg-4 col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/7-itcbio_logo.png" alt="Cover" class="rounded-3">
                      </div>
                      <div class="col-lg-8 col-md-6">
                        <div class="ms-xl-5 ms-lg-4 ps-xxl-34">
                          <p class="mb-0 fs-lg">
                            É um parceiro importante de apoio as atividades científicas do projeto e que também dará suporte comunicação e divulgação da neurociência e tecnologias assistivas do NeuroBeep.
                          </p>
                          <a href="https://itcbio.org/" class="btn btn-outline-primary mt-4">
                            Acessar Site
                            <i class="bx bx-chevron-right fs-lg ms-2 me-n2"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Stats - Instituições Parceiras -->
        <section class="container pb-5 mb-2 mb-md-4 mb-lg-5">
          <div class="bg-secondary fixed-bg rounded-3 py-5 px-3 px-md-0">
            <div class="row justify-content-center mb-1 py-md-2 py-lg-4">
              <div class="col-lg-10 col-md-11">
                <h2 class="pb-5">Empresas Parceiras</h2>
                <div class="row g-5">
                  <section class="container mt-3 mb-3 pt-2 pb-lg-5">
                    <div class="row gy-4">
                      <div class="col-lg-4 col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/9-neurobots_logo.png" alt="Cover" class="rounded-3">
                      </div>
                      <div class="col-lg-8 col-md-6">
                        <div class="ms-xl-5 ms-lg-4 ps-xxl-34">
                          <p class="mb-0 fs-lg">
                            Desenvolve e fornece tecnologia de ponta em neuroengenharia aplicada, como os sensores de neurofeedback, e contribui para a inovação em reabilitação motora e cognitiva.
                          </p>
                          <a href="https://neurobots.com.br" class="btn btn-outline-primary mt-4">
                            Acessar Site
                            <i class="bx bx-chevron-right fs-lg ms-2 me-n2"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section class="container mt-3 mb-3 pt-2 pb-lg-5">
                    <div class="row gy-4">
                      <div class="col-lg-4 col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/8-roboeduc_logo.png" alt="Cover" class="rounded-3">
                      </div>
                      <div class="col-lg-8 col-md-6">
                        <div class="ms-xl-5 ms-lg-4 ps-xxl-34">
                          <p class="mb-0 fs-lg">
                            Especialista em robótica educacional, colabora na criação de conteúdos pedagógicos e na formação de professores para utilização prática da robótica nas escolas.
                          </p>
                          <a href="https://www.roboeduc.com.br" class="btn btn-outline-primary mt-4">
                            Acessar Site
                            <i class="bx bx-chevron-right fs-lg ms-2 me-n2"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section class="container mt-3 mb-3 pt-2 pb-lg-5">
                    <div class="row gy-4">
                      <div class="col-lg-4 col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands/10-realportugues_logo.png" alt="Cover" class="rounded-3">
                      </div>
                      <div class="col-lg-8 col-md-6">
                        <div class="ms-xl-5 ms-lg-4 ps-xxl-34">
                          <p class="mb-0 fs-lg">
                            Participa da validação clínica do NeuroBeep, garantindo a segurança e eficácia das tecnologias aplicadas aos usuários com paralisia cerebral.
                          </p>
                          <a href="https://rhp.com.br/" class="btn btn-outline-primary mt-4">
                            Acessar Site
                            <i class="bx bx-chevron-right fs-lg ms-2 me-n2"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </div>
        </section>
  
        <section class="container pb-5 mb-md-2 mb-lg-4">
          <div class="row pt-2 pt-md-3">
            <div class="col">
              <p class="fs-lg pe-lg-4 mb-1 mb-lg-4">
                Com essa rede de colaboração, o projeto NeuroBeep fortalece a integração entre instituições acadêmicas, empresas e comunidades locais, criando soluções que transcendem barreiras e transformam realidades.
              </p>
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



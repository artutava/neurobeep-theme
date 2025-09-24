<?php
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

      <!-- Breadcrumb -->
      <nav class="container py-4 mb-lg-2 mt-lg-3" aria-label="breadcrumb">
        <ol class="breadcrumb mt-5">
          <li class="breadcrumb-item">
            <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
          </li>
          <li class="breadcrumb-item">
            <a href="painel">Painel</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">NeuroBeep 2C</li>
        </ol>
      </nav>

      <section class="container pb-5 mb-md-2 mb-lg-4">
        <h1 class="border-bottom pb-4">Plataforma NeuroBeep 2C</h1>
        <h5 class="text-gradient-primary">Inclusão Educacional através da NeurociênciaTecnologia Assistiva e Robótica</h5>
        <div class="row pt-2 pt-md-3">
          <div class="col-md-6">
            <p class="fs-lg pe-lg-4 mb-1 mb-lg-4">A NeuroBeep 2C é uma plataforma de tecnologia assistiva inovadora desenvolvida no âmbito do projeto NeuroBeep, com o objetivo de promover a inclusão digital e educacional de crianças com paralisia cerebral severa. Trata-se de um sistema baseado em interface cérebro-máquina (ICM), que permite à criança interagir com ambientes de robótica educacional apenas por meio da atividade cerebral.</p>
          </div>
          <div class="col-md-6">
            <p class="fs-lg ps-lg-4 mb-1 mb-lg-4">A sigla 2C refere-se aos dois comandos básicos que a plataforma é capaz de interpretar, a partir do controle de uma única área encefálica. Esses comandos, traduzidos em movimentos e ações na plataforma, possibilitam que a criança participe de atividades de aprendizagem, mesmo diante de severas limitações motoras.</p>
          </div>
        </div>
      </section>

      <!-- Video showreel -->
      <section class="container text-center pb-5 mt-n2 mt-md-0 mb-md-2 mb-lg-4">
        <div class="position-relative rounded-3 overflow-hidden">
          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center zindex-5">
            <a href="https://www.youtube.com/watch?v=zPo5ZaH6sW8" class="btn btn-video btn-icon btn-xl stretched-link bg-white" data-bs-toggle="video" aria-label="Play video">
              <i class="bx bx-play"></i>
            </a>
          </div>
          <span class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-35"></span>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing/digital-agency/back_neuroibeep_video.jpg" class="d-block w-100" alt="Cover image">
        </div>
      </section>

      <section class="container pb-5 mb-md-2 mb-lg-4">
        <div class="row pt-2 pt-md-3">
          <div class="col">
            <p class="fs-lg pe-lg-4 mb-1 mb-lg-4">
              A NeuroBeep 2C foi pensada com base no conceito de desenho universal, o que significa que ela é acessível, adaptável e pode ser utilizada por diferentes perfis de usuários, respeitando suas individualidades cognitivas e sensoriais. A plataforma também está integrada a um ambiente educacional gamificado, tornando o processo de ensino-aprendizagem mais atrativo, interativo e significativo.<br>
            </p>
          </div>
        </div>

        <!-- Tab panes -->
        <div class="tab-content bg-secondary rounded-3">

          <!-- Project Management -->
          <div class="tab-pane fade show active" id="project-management" role="tabpanel" aria-labelledby="project-management-tab">
            <div class="row align-items-center px-3 px-sm-4 px-lg-0">
              <p class="fs-lg pe-lg-4 mb-1 mb-lg-4">
                <p>O Kit NeuroBeep 2C é um conjunto de recursos tecnológicos e educacionais que acompanha a plataforma, desenvolvido para ser utilizado diretamente por crianças em ambiente escolar ou domiciliar. Ele é composto por um capacete EEG de baixo custo, sensores adaptáveis, um robô educacional controlado por interface cérebro-máquina e materiais pedagógicos gamificados.</p>
              </p>
              </div>
              <div class="col">
                <div id="three-container"></div>
              </div>
            </div>
          </div>
        </div>

          <div class="row pt-2 pt-md-3">
            <div class="col">
              <p class="fs-lg pe-lg-4 mb-1 mb-lg-4">
                O kit permite que crianças com paralisia cerebral utilizem apenas a atividade cerebral para acionar comandos e interagir com atividades de aprendizagem, promovendo autonomia e inclusão. Seu design acessível e modular garante que o kit possa ser replicado em larga escala, ampliando o alcance da tecnologia e fortalecendo a aprendizagem inclusiva.<br><br>A proposta é que estes produtos derivados do projeto sejam ampliados e disponibilizados de forma gratuita para que outros possam reproduzir e fazer uso das tecnologias com outras crianças. Professores, pesquisadores, cuidadores e monitores envolvidos nas ações de validação da tecnologia poderão acompanhar o desempenho das crianças, acessar os jogos educativos, gerar relatórios e registrar observações pedagógicas.
              </p>
            </div>
          </div>
      </section>

      <section class="container pb-5 mb-md-2 mb-lg-4">
        <h1 class="border-bottom pb-4">Institucional</h1>
        <h5 class="text-gradient-primary">Documentação Institucional da Neurobeep</h5>
        <div class="row pt-2 pt-md-3">
          <div class="col">
            <p class="fs-lg pe-lg-4 mb-1 mb-lg-4">
              Aqui você pode acessar e baixar toda documentação institucional da Neurobeep
            </p>
          </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4 mt-4">
          <!-- Item 1 -->
          <div class="col">
            <div class="card border-0 shadow-sm p-3 d-flex flex-row align-items-center justify-content-between">
              <div class="d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/neuro_icon_download-100.jpg"
                    class="rounded-3 me-3"
                    width="84"
                    alt="Estatuto">
                <div>
                  <h6 class="mb-1">Estatuto</h6>
                  <small class="fs-sm text-muted">Texto descritivo do Estatuto</small>
                </div>
              </div>
              <a href="<?php echo get_template_directory_uri(); ?>/assets/docs/estatuto.pdf" download class="btn btn-icon btn-secondary ms-3 flex-shrink-0" aria-label="Download Estatuto">
                <i class="bx bx-download"></i>
              </a>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="col">
            <div class="card border-0 shadow-sm p-3 d-flex flex-row align-items-center justify-content-between">
              <div class="d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/neuro_icon_download-100.jpg"
                    class="rounded-3 me-3"
                    width="84"
                    alt="Regimento">
                <div>
                  <h6 class="mb-1">Regimento</h6>
                  <small class="fs-sm text-muted">Texto descritivo do Regimento</small>
                </div>
              </div>
              <a href="<?php echo get_template_directory_uri(); ?>/assets/docs/regimento.pdf" download class="btn btn-icon btn-secondary ms-3 flex-shrink-0" aria-label="Download Regimento">
                <i class="bx bx-download"></i>
              </a>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="col">
            <div class="card border-0 shadow-sm p-3 d-flex flex-row align-items-center justify-content-between">
              <div class="d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/neuro_icon_download-100.jpg"
                    class="rounded-3 me-3"
                    width="84"
                    alt="Manual">
                <div>
                  <h6 class="mb-1">Manual de Procedimentos</h6>
                  <small class="fs-sm text-muted">Descrição do Manual</small>
                </div>
              </div>
              <a href="<?php echo get_template_directory_uri(); ?>/assets/docs/manual.pdf" download class="btn btn-icon btn-secondary ms-3 flex-shrink-0" aria-label="Download Manual">
                <i class="bx bx-download"></i>
              </a>
            </div>
          </div>

          <!-- Item 4 -->
          <div class="col">
            <div class="card border-0 shadow-sm p-3 d-flex flex-row align-items-center justify-content-between">
              <div class="d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/neuro_icon_download-100.jpg"
                    class="rounded-3 me-3"
                    width="84"
                    alt="Relatório Anual">
                <div>
                  <h6 class="mb-1">Relatório Anual</h6>
                  <small class="fs-sm text-muted">Descrição do Relatório</small>
                </div>
              </div>
              <a href="<?php echo get_template_directory_uri(); ?>/assets/docs/relatorio-anual.pdf" download class="btn btn-icon btn-secondary ms-3 flex-shrink-0" aria-label="Download Relatório Anual">
                <i class="bx bx-download"></i>
              </a>
            </div>
          </div>

          <!-- Item 5 -->
          <div class="col">
            <div class="card border-0 shadow-sm p-3 d-flex flex-row align-items-center justify-content-between">
              <div class="d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/neuro_icon_download-100.jpg"
                    class="rounded-3 me-3"
                    width="84"
                    alt="Planejamento Estratégico">
                <div>
                  <h6 class="mb-1">Planejamento Estratégico</h6>
                  <small class="fs-sm text-muted">Descrição do Planejamento</small>
                </div>
              </div>
              <a href="<?php echo get_template_directory_uri(); ?>/assets/docs/planejamento-estrategico.pdf" download class="btn btn-icon btn-secondary ms-3 flex-shrink-0" aria-label="Download Planejamento Estratégico">
                <i class="bx bx-download"></i>
              </a>
            </div>
          </div>

          <!-- Item 6 -->
          <div class="col">
            <div class="card border-0 shadow-sm p-3 d-flex flex-row align-items-center justify-content-between">
              <div class="d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/neuro_icon_download-100.jpg"
                    class="rounded-3 me-3"
                    width="84"
                    alt="Ata de Reunião">
                <div>
                  <h6 class="mb-1">Ata de Reunião</h6>
                  <small class="fs-sm text-muted">Descrição da Ata</small>
                </div>
              </div>
              <a href="<?php echo get_template_directory_uri(); ?>/assets/docs/ata-reuniao.pdf" download class="btn btn-icon btn-secondary ms-3 flex-shrink-0" aria-label="Download Ata de Reunião">
                <i class="bx bx-download"></i>
              </a>
            </div>
          </div>

          <!-- Item 7 -->
          <div class="col">
            <div class="card border-0 shadow-sm p-3 d-flex flex-row align-items-center justify-content-between">
              <div class="d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/neuro_icon_download-100.jpg"
                    class="rounded-3 me-3"
                    width="84"
                    alt="Termo de Acordo">
                <div>
                  <h6 class="mb-1">Termo de Acordo</h6>
                  <small class="fs-sm text-muted">Descrição do Termo</small>
                </div>
              </div>
              <a href="<?php echo get_template_directory_uri(); ?>/assets/docs/termo-acordo.pdf" download class="btn btn-icon btn-secondary ms-3 flex-shrink-0" aria-label="Download Termo de Acordo">
                <i class="bx bx-download"></i>
              </a>
            </div>
          </div>

          <!-- Item 8 -->
          <div class="col">
            <div class="card border-0 shadow-sm p-3 d-flex flex-row align-items-center justify-content-between">
              <div class="d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/neuro_icon_download-100.jpg"
                    class="rounded-3 me-3"
                    width="84"
                    alt="Política Interna">
                <div>
                  <h6 class="mb-1">Política Interna</h6>
                  <small class="fs-sm text-muted">Descrição da Política Interna</small>
                </div>
              </div>
              <a href="<?php echo get_template_directory_uri(); ?>/assets/docs/politica-interna.pdf" download class="btn btn-icon btn-secondary ms-3 flex-shrink-0" aria-label="Download Política Interna">
                <i class="bx bx-download"></i>
              </a>
            </div>
          </div>
        </div>
      </section>





      <!-- Contact form -->
      <section class="container pb-5 mb-2 mb-md-4 mb-lg-5">
        <div class="position-relative bg-secondary rounded-3 py-5 mb-2">
          <div class="row pb-2 py-md-3 py-lg-5 px-4 px-lg-0 position-relative zindex-3">
            <div class="col-xl-3 col-lg-4 col-md-5 offset-lg-1">
              <p class="lead mb-2 mb-md-3">Alguma Dúvida?</p>
              <h2 class="h1 pb-3">Entre em contato</h2>
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
            <svg width="416" height="444" viewBox="0 0 416 444" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M240.875 615.746C389.471 695.311 562.783 640.474 631.69 504.818C700.597 369.163 645.201 191.864 496.604 112.299C348.007 32.7335 174.696 87.5709 105.789 223.227C36.8815 358.882 92.278 536.18 240.875 615.746ZM208.043 680.381C388.035 776.757 605.894 713.247 694.644 538.527C783.394 363.807 709.428 144.04 529.436 47.6636C349.443 -48.7125 131.584 14.7978 42.8343 189.518C-45.916 364.238 28.0504 584.005 208.043 680.381Z" fill="currentColor"/><path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M262.68 572.818C382.909 637.194 526.686 594.13 584.805 479.713C642.924 365.295 595.028 219.601 474.799 155.224C354.57 90.8479 210.793 133.912 152.674 248.33C94.5545 362.747 142.45 508.442 262.68 572.818ZM253.924 590.054C382.526 658.913 538.182 613.536 601.593 488.702C665.004 363.867 612.156 206.847 483.554 137.988C354.953 69.129 199.296 114.506 135.886 239.341C72.4752 364.175 125.323 521.195 253.924 590.054Z" fill="currentColor"/></svg>
          </div>
        </div>
      </section>
        

      <!-- CONTEUDO END -->

      
    </main>

      <?php
get_footer();



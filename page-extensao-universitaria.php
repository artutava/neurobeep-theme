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
          <li class="breadcrumb-item active" aria-current="page">Extensão Universitária</li>
        </ol>
      </nav>

      <!-- About project -->
      <section class="container">
        <h1>Extensão Universitária como Ferramenta de Integração Social</h1>
        <div class="row">
          <div class="mb-4 mb-lg-0">
            <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
              <p class="fs-lg mb-0">A extensão universitária é um dos pilares do NeuroBeep, funcionando como um elo essencial entre a academia e a sociedade. Através de iniciativas práticas e educativas, o projeto busca democratizar o acesso ao conhecimento em neurociência, tecnologia assistiva e neurorobótica educacional, promovendo impacto direto na formação de professores, estudantes e na inclusão de crianças com deficiências motoras severas.</p>
            </div>
          </div>
        </div>
      </section>

       <!-- Industries -->
       <section class="container pt-2 pt-lg-5 pb-5 mb-md-4 mb-lg-5">
        
        <!-- Nav tabs -->
        <ul class="nav nav-tabs flex-nowrap justify-content-lg-center overflow-auto pb-2 mb-3 mb-lg-4" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link text-nowrap active" id="education-tab" data-bs-toggle="tab" data-bs-target="#education" type="button" role="tab" aria-controls="education" aria-selected="true">
              Projeto de Extensão
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-nowrap" id="ecommerce-tab" data-bs-toggle="tab" data-bs-target="#ecommerce" type="button" role="tab" aria-controls="ecommerce" aria-selected="false">
              Cursos de Extensão
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-nowrap" id="sports-tab" data-bs-toggle="tab" data-bs-target="#sports" type="button" role="tab" aria-controls="sports" aria-selected="false">
              Criação de Material Didático
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-nowrap" id="construction-tab" data-bs-toggle="tab" data-bs-target="#construction" type="button" role="tab" aria-controls="construction" aria-selected="false">
              Ações de Extensão e Impacto na Comunidade
            </button>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content bg-secondary rounded-3 py-4">

          <!-- Education -->
          <div class="tab-pane fade show active" id="education" role="tabpanel" aria-labelledby="education-tab">
            <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
              <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                <h3 class="mb-lg-4">Projeto de Extensão</h3>
                <p>O projeto de extensão "Neurociência e Neurorobótica" é uma das principais ferramentas de comunicação científica do NeuroBeep. Seu objetivo é aproximar a sociedade dos conceitos desenvolvidos no projeto, promovendo a integração entre ciência, tecnologia e educação. Essas ações serão conduzidas por estudantes, professores e pesquisadores envolvidos no projeto, ampliando o entendimento sobre neurotecnologia e sua aplicação na inclusão educacional.</p>
              </div>
              <div class="col-lg-6 col-md-7 mt-2 mb-3 mt-md-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/services/industries/education.jpg" class="d-block rounded-3 my-lg-2 mx-auto me-md-0" width="564" alt="Image">
              </div>
            </div>
          </div>

          <!-- E-Commerce -->
          <div class="tab-pane fade" id="ecommerce" role="tabpanel" aria-labelledby="ecommerce-tab">
            <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
              <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                <h3 class="mb-lg-4">Cursos de Extensão</h3>
                <p>Ao longo da execução do NeuroBeep, serão oferecidos cursos de extensão universitária com duração de 20 horas, abordando as áreas temáticas do projeto. Esses cursos atenderão diferentes públicos, incluindo professores da rede pública, estudantes de graduação e profissionais interessados, permitindo que mais pessoas compreendam e utilizem a tecnologia desenvolvida para inclusão digital e educacional.</p>
              </div>
              <div class="col-lg-6 col-md-7 mt-2 mb-3 mt-md-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/services/industries/ecommerce.jpg" class="d-block rounded-3 my-lg-2 mx-auto me-md-0" width="564" alt="Image">
              </div>
            </div>
          </div>

          <!-- Sports -->
          <div class="tab-pane fade" id="sports" role="tabpanel" aria-labelledby="sports-tab">
            <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
              <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                <h3 class="mb-lg-4">Criação de Material Didático</h3>
                <p>A fim de ampliar o acesso ao conhecimento, o projeto NeuroBeep promoverá a criação de materiais didáticos em formatos diversos. Serão elaborados conteúdos digitais, incluindo e-books, cartilhas interativas e materiais acessíveis, para garantir que o conhecimento produzido pelo projeto alcance diferentes públicos. Esses recursos serão essenciais tanto para a capacitação de professores quanto para a disseminação da ciência e das tecnologias assistivas de forma clara, acessível e inclusiva.</p>
              </div>
              <div class="col-lg-6 col-md-7 mt-2 mb-3 mt-md-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/services/industries/sports.jpg" class="d-block rounded-3 my-lg-2 mx-auto me-md-0" width="564" alt="Image">
              </div>
            </div>
          </div>

          <!-- Construction -->
          <div class="tab-pane fade" id="construction" role="tabpanel" aria-labelledby="construction-tab">
            <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
              <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                <h3 class="mb-lg-4">Ações de Extensão e Impacto na Comunidade</h3>
                <p>Além dos cursos e materiais educativos, o NeuroBeep ampliará seu impacto por meio de ações comunitárias e eventos científicos, como:

                  Atividades em escolas e bairros, conectando crianças, estudantes e professores ao projeto.
                  
                  Participação em eventos acadêmicos e tecnológicos, promovendo a neurociência e a neurorobótica educacional.
                  
                  Intercâmbio de saberes, incentivando a disseminação do conhecimento científico e o diálogo entre pesquisadores e a sociedade.</p>
              </div>
              <div class="col-lg-6 col-md-7 mt-2 mb-3 mt-md-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/services/industries/construction.jpg" class="d-block rounded-3 my-lg-2 mx-auto me-md-0" width="564" alt="Image">
              </div>
            </div>
          </div>
        </div>
       </section>

       <!-- About project -->
       <section class="container">
        <div class="row">
          <div class="mb-4 mb-lg-0">
            <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
              <p class="fs-lg mb-0">Por meio dessas iniciativas, o NeuroBeep reforça seu compromisso com a inclusão, a acessibilidade e o desenvolvimento social, tornando a extensão universitária uma ponte entre a inovação acadêmica e as transformações educacionais e sociais.</p>
            </div>
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
              <a href="https://www.facebook.com/NeuroBeep/" class="btn btn-icon btn-secondary btn-facebook btn-lg stretched-link" aria-label="Facebook">
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



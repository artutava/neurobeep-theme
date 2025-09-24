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

  <!-- Breadcrumb -->
  <nav class="container mt-lg-4 pt-5" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0 pt-5">
      <li class="breadcrumb-item">
        <a href="<?php echo esc_url(home_url('/')); ?>"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Contato</li>
    </ol>
  </nav>

  <!-- Page content -->
  <section class="position-relative bg-secondary pt-5">
    <div class="container position-relative zindex-2 pt-5">

      <div class="row align-items-center pt-1 pb-2 py-lg-4">
        <!-- Coluna esquerda -->
        <div class="col-xl-4 col-lg-5 col-md-6 offset-lg-1 mb-4 pb-3">
          <h3 class="mb-lg-4">Alguma sugestão?</h3>
          <ul class="list-unstyled pb-3 pb-md-4 pb-lg-5 mb-2">
            <li class="mb-2">
              <a href="tel:+558197326375" class="nav-link d-flex align-items-center p-0">
                <i class="bx bx-phone-call fs-xl text-primary me-2"></i>
                +55 81 9732-6375
              </a>
            </li>
            <li class="mb-2">
              <a href="mailto:neurobeep.debm@ufpe.br" class="nav-link d-flex align-items-center p-0">
                <i class="bx bx-envelope fs-xl text-primary me-2"></i>
                neurobeep.debm@ufpe.br
              </a>
            </li>
            <li class="mb-2">
              <a href="#" class="nav-link d-flex align-items-md-start p-0">
                <i class="bx bx-map fs-xl text-primary me-2"></i>
                Departamento de Engenharia Biomédica - DEBM/UFPE  
                Av. da Arquitetura, S/N. Centro de Tecnologia e Geociências (CTG) - 3° andar do Prédio Administrativo.  
                Cidade Universitária. Recife, PE - Brazil. 50740-550
              </a>
            </li>
          </ul>
          <div class="d-flex">
            <a href="https://www.facebook.com/NeuroBeep/" class="btn btn-icon btn-outline-secondary btn-facebook me-3" aria-label="Facebook">
              <i class="bx bxl-facebook"></i>
            </a>
            <a href="#" class="btn btn-icon btn-outline-secondary btn-twitter me-3" aria-label="Twitter">
              <i class="bx bxl-twitter"></i>
            </a>
            <a href="#" class="btn btn-icon btn-outline-secondary btn-linkedin me-3" aria-label="LinkedIn">
              <i class="bx bxl-linkedin"></i>
            </a>
            <a href="https://www.instagram.com/neurobeep/?utm_source=ig_web_button_share_sheet" class="btn btn-icon btn-outline-secondary btn-instagram" aria-label="Instagram">
              <i class="bx bxl-instagram"></i>
            </a>
          </div>
        </div>

        <!-- Coluna direita (formulário Contact Form 7) -->
        <div class="col-lg-5 col-md-6 offset-xl-1">
          <div class="card border-0 shadow-sm p-sm-2">
            <div class="card-body">
              <?php echo do_shortcode('[contact-form-7 id="123" title="Formulário de Contato"]'); ?>
            </div>
          </div>
        </div>
      </div>

      <!-- Mapa -->
      <section class="container mb-2 mb-md-2">
        <div class="row py-3">
          <div class="mb-5 mb-lg-0">
            <div class="d-flex flex-column h-100 shadow-sm rounded-3 overflow-hidden">
              <iframe class="d-block h-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.474335419717!2d-34.9547226!3d-8.0530014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1be3b793c69b%3A0xff1875a97b372008!2sDepartamento%20de%20Engenharia%20Biom%C3%A9dica%20-%20UFPE!5e0!3m2!1spt-BR!2sbr!4v1742052352875!5m2!1spt-BR!2sbr"
                style="border:0; min-height:300px;" allowfullscreen loading="lazy" title="Map">
              </iframe>
            </div>
          </div>
        </div>
      </section>

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

</main>

      <?php
get_footer();



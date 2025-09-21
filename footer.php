

      <script>
        document.addEventListener('DOMContentLoaded', function() {
          function updateBrandLogos() {
            const theme = document.documentElement.getAttribute('data-bs-theme') || 'light';
            document.querySelectorAll('.brand-logo img').forEach(function(img) {
              if (theme === 'dark') {
                img.setAttribute('src', img.getAttribute('data-dark-src'));
              } else {
                img.setAttribute('src', img.getAttribute('data-light-src'));
              }
            });
          }
        
          // Atualiza no carregamento
          updateBrandLogos();
        
          // Observa alterações no atributo data-bs-theme do elemento <html>
          const observer = new MutationObserver(updateBrandLogos);
          observer.observe(document.documentElement, { attributes: true, attributeFilter: ['data-bs-theme'] });
        });
        </script>


      
    </main>
<script>
  document.addEventListener("DOMContentLoaded", async () => {
    try {
      // 1) carrega o HTML e injeta o widget
      const response = await fetch('whatsapp-widget.html');
      if (!response.ok) throw new Error("Falha ao carregar whatsappWidget.html");
      const html = await response.text();
      const temp = document.createElement('div');
      temp.innerHTML = html;
      document.body.appendChild(temp);

      // 2) agora que o widget está no DOM, define a função de reposicionamento
      const widget = document.getElementById('whatsapp-widget');
      function updatePosition() {
        const banner = document.getElementById('cookieConsentBanner');
        if (banner && window.getComputedStyle(banner).display !== 'none') {
          const h = banner.getBoundingClientRect().height;
          widget.style.bottom = (h + 16) + 'px';
        } else {
          widget.style.bottom = '16px';
        }
      }

      // 3) roda imediatamente
      updatePosition();

      // 4) re‐roda quando a janela redimensionar
      window.addEventListener('resize', updatePosition);

      // 5) observa mudanças de visibilidade/estilo no banner
      const banner = document.getElementById('cookieConsentBanner');
      if (banner) {
        new MutationObserver(updatePosition)
          .observe(banner, { attributes: true, attributeFilter: ['style', 'class'] });
      }
    } catch (error) {
      console.error(error);
    }
  });
</script>

<!-- Cookie Banner -->
<style>
  #cookieConsentBanner a {
    color: var(--bs-link-color) !important;
    text-decoration: underline;
  }
</style>

<div id="cookieConsentBanner" class="fixed-bottom bg-body-tertiary text-body border-top shadow-sm">
  <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between py-4">
    <small class="mb-3 mb-md-0">
      Utilizamos cookies e coletamos dados pessoais para oferecer uma melhor experiência em nosso site,
      personalizar conteúdo, entender como você interage conosco e garantir a segurança da sua navegação.<br>
      Ao continuar, você concorda com nossa
      <a href="page-privacidade.html" target="_blank">Política de Privacidade</a> e
      <a href="page-cookies.html" target="_blank">Política de Cookies</a>.
      Para mais, veja nossos <a href="page-terms.html">Termos de Uso</a>.
    </small>
    <div class="btn-group" role="group">
      <button id="acceptCookiesBtn" class="btn btn-primary">Aceitar todos os cookies</button>
      <button id="manageCookiesBtn" class="btn btn-secondary">Gerenciar preferências</button>
      <button id="declineCookiesBtn" class="btn btn-outline-secondary">Recusar cookies opcionais</button>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const banner = document.getElementById('cookieConsentBanner');

    // 1) Verifica se já existe uma decisão salva
    if (localStorage.getItem('cookieConsent')) {
      banner.style.display = 'none';
    }

    // 2) Lida com os botões
    ['acceptCookiesBtn', 'manageCookiesBtn', 'declineCookiesBtn'].forEach(id => {
      document.getElementById(id).onclick = () => {
        banner.style.display = 'none';
        const widget = document.getElementById('whatsapp-widget');
        if (widget) widget.style.bottom = '16px';

        // Salva a decisão (aceito, recusei ou gerenciei)
        localStorage.setItem('cookieConsent', id);

        if (id === 'manageCookiesBtn') {
          alert('Gerenciar preferências.');
        }
      };
    });
  });
</script>





    <!-- FOOTER START -->

    <div class="footer1">
  <footer class="footer pt-5 pb-4 pb-lg-5 mt-2 mt-md-0">
    <div class="container pt-lg-4">
      <div class="row pb-5">
        <div class="col-lg-4 col-md-6">
          <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" width="400" alt="Silicon">
          </div>
          <p class="fs-sm pb-lg-3 mb-4">Inclusão Educacional através de Neurociência, Tecnologia Assistiva e Robótica.</p>
          <form class="needs-validation" novalidate>
            <label for="subscr-email" class="form-label">Inscreva-se para nosso newsletter</label>
            <div class="input-group">
              <input type="email" id="subscr-email" class="form-control rounded-start ps-5" placeholder="Digite seu e-mail" required>
              <i class="bx bx-envelope fs-lg text-muted position-absolute top-50 start-0 translate-middle-y ms-3 zindex-5"></i>
              <div class="invalid-tooltip position-absolute top-100 start-0">Por favor forneça um e-mail válido</div>
              <button type="submit" class="btn btn-primary">Inscrever-se</button>
            </div>
          </form>
        </div>
        <div class="col-xl-6 col-lg-7 col-md-5 offset-xl-2 offset-md-1 pt-4 pt-md-1 pt-lg-0">
          <div id="footer-links" class="row">
            <div class="col-lg-4">
              <h6 class="mb-2">
                <a href="#useful-links" class="d-block text-dark dropdown-toggle d-lg-none py-2" data-bs-toggle="collapse">Acesso rápido</a>
              </h6>
              <div id="useful-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                <ul class="nav flex-column pb-lg-1 mb-lg-3">
                  <li class="nav-item"><a href="#index" class="nav-link d-inline-block px-0 pt-1 pb-2">Início</a></li>
                  <li class="nav-item"><a href="page-quem-somos.html" class="nav-link d-inline-block px-0 pt-1 pb-2">Quem somos</a></li>
                  <li class="nav-item"><a href="page-equipes.html" class="nav-link d-inline-block px-0 pt-1 pb-2">Equipes</a></li>
                  <li class="nav-item"><a href="page-eixos-estruturantes.html" class="nav-link d-inline-block px-0 pt-1 pb-2">Eixos Estruturantes</a></li>
                  <li class="nav-item"><a href="page-laboratorios.html" class="nav-link d-inline-block px-0 pt-1 pb-2">Laboratórios</a></li>
                </ul>
                <ul class="nav flex-column mb-2 mb-lg-0">
                  <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Termos &amp; Condições</a></li>
                  <li class="nav-item"><a href="page-privacidade.html" class="nav-link d-inline-block px-0 pt-1 pb-2">Política de Privacidade</a></li>
                  <li class="nav-item"><a href="page-cookies.html" class="nav-link d-inline-block px-0 pt-1 pb-2">Política de Cookies</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-4 col-lg-3">
              <h6 class="mb-2">Redes</h6>
                <a href="#social-links" class="d-block text-dark dropdown-toggle d-lg-none py-2" data-bs-toggle="collapse">Redes Socials</a>
              </h6>
              <div id="social-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                <ul class="nav flex-column mb-2 mb-lg-0">
                  <li class="nav-item"><a href="https://www.facebook.com/NeuroBeep/" class="nav-link d-inline-block px-0 pt-1 pb-2">Facebook</a></li>
                  <li class="nav-item"><a href="https://www.instagram.com/neurobeep/?utm_source=ig_web_button_share_sheet" class="nav-link d-inline-block px-0 pt-1 pb-2">Instagram</a></li>
                  <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">LinkedIn</a></li>
                  <li class="nav-item"><a href="https://tr.ee/RhILQ0_Agf" class="nav-link d-inline-block px-0 pt-1 pb-2">YouTube</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 pt-2 pt-lg-0">
              <h6 class="mb-2">Contato</h6>
              <ul class="list-unstyled pb-3 pb-md-4 pb-lg-5 mb-2">
                <li class="mb-2">
                  <a href="tel:4065550120" class="nav-link d-flex align-items-center p-0">
                    <i class="bx bx-phone-call fs-xl text-primary me-2"></i>
                    +55 81 9732-6375
                  </a>
                </li>
                <li class="mb-2">
                  <a href="mailto:example@email.com" class="nav-link d-flex align-items-center p-0">
                    <i class="bx bx-envelope fs-xl text-primary me-2"></i>
                    neurobeep.debm@ufpe.br
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <p class="nav d-block fs-xs text-center text-md-start pb-2 pb-lg-0 mb-0">
        &copy; All rights reserved. Made by 
        <a class="nav-link d-inline-block p-0" href="https://sircrux.com/" target="_blank" rel="noopener">SirCruX Studios</a>
      </p>
    </div>
  </footer>
  
  
  <!-- Back to top button -->
  <a href="#top" class="btn-scroll-top" data-scroll>
    <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
    <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
  </a>

</div>
      
    <!-- FOOTER END -->

    
  
    <!-- Vendor Scripts -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/vanilla-tilt/dist/vanilla-tilt.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/img-comparison-slider/dist/index.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/rellax/rellax.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/@lottiefiles/lottie-player/dist/lottie-player.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/jarallax/dist/jarallax.min.js"></script>
  
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/lightgallery/lightgallery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/lightgallery/plugins/video/lg-video.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/shufflejs/dist/shuffle.min.js"></script>
  
    <!-- Main Theme Script -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/theme.min.js"></script>

  
  </body>
  </html>
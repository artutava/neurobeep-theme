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

      <!-- CONTEÚDO START -->

      <!-- Breadcrumb -->
      <nav class="container py-4 mb-lg-2 mt-lg-3" aria-label="breadcrumb">
        <ol class="breadcrumb mt-5">
          <li class="breadcrumb-item">
            <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Política de Privacidade</li>
        </ol>
      </nav>

      <section class="container pb-5 mb-md-2 mb-lg-4">
        <h1 class="border-bottom pb-4">Política de Privacidade – NeuroBeep</h1>
        <div class="row">
          <div class="col">
            <p class="mb-4 mb-lg-5">
              Esta Política de Privacidade descreve como o projeto <strong>NeuroBeep: Inclusão Educacional através da Neurociência, Tecnologia Assistiva e Robótica</strong>,
              executado pela Universidade Federal de Pernambuco (UFPE) e instituições parceiras, coleta, utiliza, armazena e protege as informações pessoais dos usuários.
              Última atualização: 15 de abril de 2025.
            </p>
            <h2 class="h1 mb-3 mb-sm-4">1. Coleta de dados</h2>
            <ul>
              <li><strong>Nome, e-mail e telefone</strong> — quando fornecidos voluntariamente;</li>
              <li><strong>Informações de navegação</strong> (cookies, IP, geolocalização, tempo de visita etc.);</li>
              <li><strong>Dados de formulários</strong> para eventos, cursos e ações do projeto.</li>
            </ul>

            <h2 class="h1 mb-3 mb-sm-4">2. Finalidade da coleta</h2>
            <ul>
              <li>Comunicação institucional sobre as atividades do NeuroBeep;</li>
              <li>Envio de newsletters, convites e atualizações;</li>
              <li>Melhoria da experiência do usuário;</li>
              <li>Relatórios estatísticos de alcance e engajamento;</li>
              <li>Cumprimento de obrigações legais.</li>
            </ul>

            <h2 class="h1 mb-3 mb-sm-4">3. Compartilhamento de dados</h2>
            <p class="mb-4 mb-lg-5">Não vendemos ou compartilhamos seus dados, exceto para:</p>
            <ul>
              <li>Parceiros acadêmicos e de pesquisa;</li>
              <li>Cumprir exigências legais;</li>
              <li>Serviços contratados com cláusulas de confidencialidade.</li>
            </ul>

            <h2 class="h1 mb-3 mb-sm-4">4. Segurança dos dados</h2>
            <p class="mb-4 mb-lg-5">Adotamos medidas técnicas e administrativas para proteger suas informações contra acessos não autorizados, perda ou divulgação indevida.</p>

            <h2 class="h1 mb-3 mb-sm-4">5. Cookies e rastreamento</h2>
            <p class="mb-4 mb-lg-5">Utilizamos cookies para fins de análise, funcionalidade e customização. Você pode gerenciá-los via configurações do navegador.</p>

            <h2 class="h1 mb-3 mb-sm-4">6. Direitos dos titulares</h2>
            <p class="mb-4 mb-lg-5">Em conformidade com a Lei Geral de Proteção de Dados (Lei nº 13.709/2018), você pode:</p>
            <ul>
              <li>Solicitar acesso, correção ou exclusão de dados;</li>
              <li>Revogar consentimento;</li>
              <li>Solicitar portabilidade ou anonimização.</li>
            </ul>
            <p class="mb-4 mb-lg-5">Para exercer esses direitos, escreva para
              <a href="mailto:neurobeep.debm@ufpe.br">neurobeep.debm@ufpe.br</a>.
            </p>

            <h2 class="h1 mb-3 mb-sm-4">7. Retenção dos dados</h2>
            <p class="mb-4 mb-lg-5">Manteremos suas informações apenas pelo tempo necessário às finalidades acima ou conforme exigido por lei.</p>

            <h2 class="h1 mb-3 mb-sm-4">8. Alterações nesta política</h2>
            <p class="mb-4 mb-lg-5">Podemos atualizar esta política a qualquer momento. Recomendamos a leitura periódica.</p>
          </div>
        </div>
      </section>

      <!-- CONTEÚDO END -->
  
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



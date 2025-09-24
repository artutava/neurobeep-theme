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
          <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Laboratórios</li>
      </ol>
    </nav>


  <!-- Início do Conteúdo -->
    <!-- About company (agora como introdução do conteúdo) -->
    <section class="container pb-5 mb-md-2 mb-lg-4">
      <h1 class="border-bottom pb-4">Rede de Laboratórios do NeuroBeep:<br> Inovação que conecta ciência e inclusão</h1>
      <div class="row pt-2 pt-md-3">
        <div class="col">
          <p class="fs-lg pe-lg-4 mb-1 mb-lg-4">
            Os laboratórios do projeto NeuroBeep são o centro para o desenvolvimento das tecnologias assistivas que vão transformar a inclusão educacional de crianças com paralisia cerebral. Espalhados por instituições de referência no Brasil, esses espaços são dedicados à pesquisa, desenvolvimento e validação das soluções criadas pelo projeto. <br><br>
            No total, o NeuroBeep conta com <strong>sete laboratórios integrados</strong>, cada um com papéis específicos que se complementam. Eles funcionam como pontos estratégicos para a criação, teste e aprimoramento das interfaces cérebro-máquina e plataformas de robótica educacional que permitirão às crianças interagir de forma autônoma em ambientes de aprendizagem. <br><br>
            Divididos em <strong>Laboratórios de Referência</strong> e <strong>Laboratórios de Aplicação</strong>, eles garantem que as tecnologias sejam não apenas desenvolvidas, mas testadas e validadas em contextos reais. <br></p>
            
            <ul>
              <li class="fs-lg"><strong>Laboratório de Referência</strong>, sediado na UFPE, é o coração do projeto, onde as tecnologias são inicialmente concebidas e refinadas.</li>
              <li class="fs-lg"><strong>Laboratórios de Aplicação</strong>, localizados na UFRN e UFRB, testam as soluções desenvolvidas em escolas e ambientes clínicos.<br></li>
            </ul>
            
            <p class="fs-lg pe-lg-4 mb-1 mb-lg-4">  
            A atuação integrada desses laboratórios também fortalece a formação de profissionais altamente capacitados, incluindo estudantes de graduação, pós-graduação e professores da rede pública. Além disso, eles contribuem diretamente para a expansão das oportunidades de pesquisa e inovação no Brasil, criando um ecossistema dinâmico que envolve universidades, startups e centros de saúde.            
          </p>

          <!-- Tabs de Laboratórios -->
          <section class="container pt-4 mb-2 mb-md-4 mb-lg-5">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs-alt flex-nowrap border-0" role="tablist">
              <li class="nav-item">
                <a class="nav-link text-nowrap active" data-bs-toggle="tab" href="#lab1" role="tab">UFPE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-nowrap" data-bs-toggle="tab" href="#lab2" role="tab">UFRN</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link text-nowrap" data-bs-toggle="tab" href="#lab4" role="tab">UFRB</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-nowrap" data-bs-toggle="tab" href="#lab3" role="tab">PUC-Rio</a>
              </li>
            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content mt-4">
              <!-- Tab 1 -->
              <div class="tab-pane fade show active" id="lab1" role="tabpanel">
                <div class="row align-items-center">
                  <div class="col-12 col-lg-8 mb-4 mb-lg-0">
                    <!-- Slider substituindo a imagem -->
                    <div class="swiper swiper-nav-onhover" data-swiper-options='{
                      "spaceBetween": 20,
                      "loop": true,
                      "autoplay": { "delay": 3000, "disableOnInteraction": false },
                      "pagination": {
                        "el": ".swiper-pagination",
                        "clickable": true
                      },
                      "navigation": {
                        "prevEl": ".btn-prev",
                        "nextEl": ".btn-next"
                      }
                    }'>
                      <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide ">
                          <div class="ratio ratio-16x9 bg-secondary">
                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/neuro_ufpe_1.png" class="rounded-3" alt="Image">
                            </div>
                          </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                          <div class="ratio ratio-16x9 bg-secondary">
                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/neuro_ufpe_2.png" class="rounded-3" alt="Image">
                            </div>
                          </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                          <div class="ratio ratio-16x9 bg-secondary">
                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/neuro_ufpe_3.png" class="rounded-3" alt="Image">
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Prev button -->
                      <button type="button" class="btn btn-prev btn-icon btn-sm me-2" aria-label="Previous">
                        <i class="bx bx-chevron-left"></i>
                      </button>
                      <!-- Next button -->
                      <button type="button" class="btn btn-next btn-icon btn-sm ms-2" aria-label="Next">
                        <i class="bx bx-chevron-right"></i>
                      </button>
                      <!-- Pagination -->
                      <div class="swiper-pagination"></div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-4">
                    <h3>UFPE (Universidade Federal de Pernambuco)</h3>
                    <p>
                      Será o Laboratório de Referência, onde é realizado o desenvolvimento central da plataforma NeuroBeep 2C, especialmente das interfaces cérebro-máquina. Faz parte do núcleo de inovação do projeto, responsável pela prototipagem, testes iniciais e integração entre os diferentes módulos tecnológicos da plataforma de aprendizagem mediada por neurorrobótica.
                    </p>
                  </div>
                </div>
              </div>
              
              <!-- Tab 2 -->
              <div class="tab-pane fade" id="lab2" role="tabpanel">
                <div class="row align-items-center">
                  <div class="col-12 col-lg-8 mb-4 mb-lg-0">
                    <!-- Slider para Laboratório UFRN -->
                    <div class="swiper swiper-nav-onhover" data-swiper-options='{
                      "spaceBetween": 20,
                      "loop": true,
                      "autoplay": { "delay": 3000, "disableOnInteraction": false },
                      "pagination": {
                        "el": ".swiper-pagination",
                        "clickable": true
                      },
                      "navigation": {
                        "prevEl": ".btn-prev",
                        "nextEl": ".btn-next"
                      }
                    }'>
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="ratio ratio-16x9 bg-secondary">
                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/neuro_ufrn_2.png" class="rounded-3" alt="Image">
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="ratio ratio-16x9 bg-secondary">
                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/neuro_ufrn_1.png" class="rounded-3" alt="Image">
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="ratio ratio-16x9 bg-secondary">
                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/neuro_Office_Wall.png" class="rounded-3" alt="Image">
                            </div>
                          </div>
                        </div>
                      </div>
                      <button type="button" class="btn btn-prev btn-icon btn-sm me-2" aria-label="Previous">
                        <i class="bx bx-chevron-left"></i>
                      </button>
                      <button type="button" class="btn btn-next btn-icon btn-sm ms-2" aria-label="Next">
                        <i class="bx bx-chevron-right"></i>
                      </button>
                      <div class="swiper-pagination"></div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-4">
                    <h3>UFRN (Universidade Federal do Rio Grande do Norte)</h3>
                    <p>
                      Abriga um dos Laboratórios de Aplicação, com foco na validação da plataforma em contextos educacionais e clínicos. Realiza aplicações e avaliações com crianças em fase de letramento e com professores qualificados, analisando o desempenho das tecnologias em ambiente real. Também atua no apoio à formação de profissionais e no desenvolvimento de soluções pedagógicas integradas à robótica e neurociência.
                    </p>
                  </div>
                </div>
              </div>
        
              <!-- Tab 3 -->
              <div class="tab-pane fade" id="lab4" role="tabpanel">
                <div class="row align-items-center">
                  <div class="col-12 col-lg-8 mb-4 mb-lg-0">
                    <!-- Slider para Laboratório UFRB -->
                    <div class="swiper swiper-nav-onhover" data-swiper-options='{
                      "spaceBetween": 20,
                      "loop": true,
                      "autoplay": { "delay": 3000, "disableOnInteraction": false },
                      "pagination": {
                        "el": ".swiper-pagination",
                        "clickable": true
                      },
                      "navigation": {
                        "prevEl": ".btn-prev",
                        "nextEl": ".btn-next"
                      }
                    }'>
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="ratio ratio-16x9 bg-secondary">
                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                              1
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="ratio ratio-16x9 bg-secondary">
                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                              2
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="ratio ratio-16x9 bg-secondary">
                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                              3
                            </div>
                          </div>
                        </div>
                      </div>
                      <button type="button" class="btn btn-prev btn-icon btn-sm me-2" aria-label="Previous">
                        <i class="bx bx-chevron-left"></i>
                      </button>
                      <button type="button" class="btn btn-next btn-icon btn-sm ms-2" aria-label="Next">
                        <i class="bx bx-chevron-right"></i>
                      </button>
                      <div class="swiper-pagination"></div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-4">
                    <h3>UFRB (Universidade Federal do Recôncavo da Bahia)</h3>
                    <p>
                      Também integra os Laboratórios de Aplicação, atuando na adaptação da plataforma para diferentes perfis de escolas e realidades regionais. Conduz atividades com as escolas e instituições de ensino local, acompanhando de perto os impactos pedagógicos e sociais do projeto. Contribuirá também para validação e aplicação com crianças em fase de letramento.

                    </p>
                        </div>
                      </div>
                    </div>
                  
              
              <!-- Tab 4 -->
              <div class="tab-pane fade" id="lab3" role="tabpanel">
                <div class="row align-items-center">
                  <div class="col-12 col-lg-8 mb-4 mb-lg-0">
                    <!-- Slider para Laboratório UFBA -->
                    <div class="swiper swiper-nav-onhover" data-swiper-options='{
                      "spaceBetween": 20,
                      "loop": true,
                      "autoplay": { "delay": 3000, "disableOnInteraction": false },
                      "pagination": {
                        "el": ".swiper-pagination",
                        "clickable": true
                      },
                      "navigation": {
                        "prevEl": ".btn-prev",
                        "nextEl": ".btn-next"
                      }
                    }'>
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="ratio ratio-16x9 bg-secondary">
                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/neuro_Office_Wall.png" class="rounded-3" alt="Image">
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="ratio ratio-16x9 bg-secondary">
                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/neuro_Office_Wall.png" class="rounded-3" alt="Image">
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="ratio ratio-16x9 bg-secondary">
                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neuro/neuro_Office_Wall.png" class="rounded-3" alt="Image">
                            </div>
                          </div>
                        </div>
                      </div>
                      <button type="button" class="btn btn-prev btn-icon btn-sm me-2" aria-label="Previous">
                        <i class="bx bx-chevron-left"></i>
                      </button>
                      <button type="button" class="btn btn-next btn-icon btn-sm ms-2" aria-label="Next">
                        <i class="bx bx-chevron-right"></i>
                      </button>
                      <div class="swiper-pagination"></div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-4">
                    <h3>PUC-Rio (Pontifícia Universidade Católica do Rio de Janeiro)</h3>
                    <p>
                      Laboratório responsável pela gestão da plataforma de dados do projeto, estruturando um banco central de informações coletadas durante as fases de teste, neurofeedback, validação e formação. Apoia a análise de dados e o desenvolvimento de ferramentas de monitoramento, assegurando a integridade científica dos resultados, facilitando futuras expansões e replicações da tecnologia.
                    </p>
                  </div>
                </div>
              </div>

            </div>
          </section>

          <p class="fs-lg pe-lg-4 mb-1 mb-lg-4">  
            Mais do que espaços físicos, os laboratórios do NeuroBeep são ambientes de transformação, onde ciência e tecnologia se encontram para criar um futuro mais inclusivo. Eles garantem que as soluções do projeto estejam sempre alinhadas às necessidades das crianças e da sociedade, promovendo impacto positivo e sustentável.
            
          </p>
        </div>
      </div>
    </section>

    
    <!-- Locations -->
    <section class="container mb-5 pt-md-3 pt-lg-4 pt-xl-5">
      <h1 class="border-bottom pb-4">Alcance do projeto</h1>
      <p class="fs-lg pe-lg-4 mb-1 mb-lg-4">O NeuroBeep impacta diretamente nas crianças, seus familiares, professores, estudantes e profissionais envolvidos. O projeto gera um alcance social ampliado, por meio de ações de formação, comunicação científica e popularização da ciência, promovendo inovação e inclusão por meio de tecnologias assistivas.</p>
      
      
      <!-- Mapa -->
      <div id="chartdiv" style="width: 100%; height: 500px; position: relative;">
        <div id="cityInfoCard">
          <button class="close-btn" onclick="document.getElementById('cityInfoCard').style.display='none'">&times;</button>
          <div id="cityInfoContent"></div>
        </div>
      </div>
      
      <style>
        #chartdiv {
          width: 100%;
          height: 500px;
          position: relative;
        }
        #cityInfoCard {
          position: absolute;
          right: 24px;    
          bottom: 18px;   
          top: auto;
          left: auto;
          background: #fff;
          box-shadow: 0 8px 32px rgba(0,0,0,0.14);
          border-radius: 14px;
          padding: 18px 24px 14px 18px;
          min-width: 230px;
          min-height: 52px;
          z-index: 11;  
          display: none;
          font-family: inherit;
          transition: box-shadow .18s;
          border: 1.5px solid #e7eaf1;
        }
        #cityInfoCard strong {
          font-size: 1.18rem;
          color: #285d9d;
          display: block;
          margin-bottom: 3px;
        }
        #cityInfoCard .estado {
          color: #437ab4;
          font-size: .97rem;
          font-weight: 500;
        }
        #cityInfoCard .lab {
          color: #163962;
          font-size: .92rem;
          margin-top: 5px;
          display: block;
          opacity: 0.97;
        }
        #cityInfoCard .close-btn {
          position: absolute;
          top: 7px;
          right: 12px;
          font-size: 17px;
          color: #8393a7;
          cursor: pointer;
          font-weight: bold;
          opacity: .46;
          background: none;
          border: none;
        }
        @media (max-width: 800px) {
          #cityInfoCard { right: 8px; top: 11px; min-width: 160px; padding: 10px 10px 9px 10px; }
        }
        .lab-icon {
          width: 70px;
          height: 70px;
          object-fit: contain;
          border-radius: 7px;
          background: #f5f8fc;
          box-shadow: 0 1px 4px rgba(0,0,0,0.07);
        }
        @media (max-width: 800px) {
          .lab-icon { width: 50px; height: 50px; }
        }
      </style>

      <!-- Scripts amCharts 5 -->
      <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
      <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
      <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
      <script src="https://cdn.amcharts.com/lib/5/geodata/brazilLow.js"></script>
      <script src="https://cdn.amcharts.com/lib/5/geodata/portugalLow.js"></script>
      <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
      <script>
        am5.ready(function(){
          const highlight = 0x4e9adf; // azul
          const zoomHome  = 2.0;
          const zoomIn    = 5;
          const radarDur  = 1200;

          const points = [
            {
              geometry: { type:"Point", coordinates: [-34.88, -8.05] },
              tip: "Recife",
              estado: "Pernambuco",
              laboratorio: "UFPE - Laboratório <br> de Neuroengenharia",
              icon: "<?php echo get_template_directory_uri(); ?>/assets/img/brands/1-ufpe_logo.png"
            },
            {
              geometry: { type:"Point", coordinates: [-35.20, -5.79] },
              tip: "Natal",
              estado: "Rio Grande do Norte",
              laboratorio: "UFRN - Instituto <br>do Cérebro",
              icon: "<?php echo get_template_directory_uri(); ?>/assets/img/brands/4-ufrn_logo.png"
            },
            {
              geometry: { type:"Point", coordinates: [-38.32, -12.68] },
              tip: "Cruz das Almas",
              estado: "Bahia",
              laboratorio: "UFRB - Laboratório <br> Multidisciplinar",
              icon: "<?php echo get_template_directory_uri(); ?>/assets/img/brands/6-ufrb_logo.png"
            },
            /* {
              geometry: { type:"Point", coordinates: [-38.51, -12.98] },
              tip: "Salvador",
              estado: "Bahia",
              laboratorio: "UFBA - Laboratório de Neurociências"
            }, */
            {
              geometry: { type:"Point", coordinates: [-43.36, -22.97] },
              tip: "Rio de Janeiro",
              estado: "Rio de Janeiro",
              laboratorio: "PUC-Rio - Pontifícia Universidade <br> Católica do Rio de Janeiro ",
              icon: "<?php echo get_template_directory_uri(); ?>/assets/img/brands/5-puc_logo.png"
            },
            {
              geometry: { type:"Point", coordinates: [ -8.4265, 41.545] },
              tip: "Braga",
              estado: "Braga",
              laboratorio: "Universidade do Minho - Life and Health Sciences Research Institute"
            }
          ];

          const meanLon = points.reduce((s,p)=>s+p.geometry.coordinates[0],0)/points.length;
          const meanLat = points.reduce((s,p)=>s+p.geometry.coordinates[1],0)/points.length;
          const homePt  = { longitude: meanLon, latitude: meanLat };

          const root = am5.Root.new("chartdiv");
          root.setThemes([ am5themes_Animated.new(root) ]);

          const chart = root.container.children.push(
            am5map.MapChart.new(root,{
              projection: am5map.geoMercator(),
              wheelY:"zoom",
              pinchZoom:true,
              homeGeoPoint: homePt,
              homeZoomLevel: zoomHome
            })
          );

          const worldSeries = chart.series.push(
            am5map.MapPolygonSeries.new(root,{ geoJSON: am5geodata_worldLow, exclude:["AQ"] })
          );
          worldSeries.mapPolygons.template.setAll({ fill: am5.color(0xcccccc), interactive:false, strokeWidth:.55, stroke: am5.color(0xf2f2f2) });

          // Brasil em azul e contorno
          const brStates = chart.series.push(am5map.MapPolygonSeries.new(root,{ geoJSON: am5geodata_brazilLow }));
          brStates.mapPolygons.template.setAll({ 
            fill: am5.color(highlight),
            stroke: am5.color(0xffffff), 
            strokeOpacity:.7, 
            strokeWidth: 2.3,
            interactive:false 
          });

          // Portugal em azul e contorno
          const ptStates = chart.series.push(am5map.MapPolygonSeries.new(root,{ geoJSON: am5geodata_portugalLow }));
          ptStates.mapPolygons.template.setAll({ 
            fill: am5.color(highlight),
            stroke: am5.color(0xffffff), 
            strokeOpacity:.7, 
            strokeWidth: 2.3,
            interactive:false 
          });

          const labelSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));
          labelSeries.bullets.push((root, _s, item) => {
            return am5.Bullet.new(root, {
              sprite: am5.Label.new(root, {
                text: item.dataContext.label,
                fontSize: 13,
                fontWeight: "bold",
                fill: am5.color(0xffffff),
                background: am5.RoundedRectangle.new(root, {
                  fill: am5.color(highlight),
                  fillOpacity: 0.93,
                  cornerRadiusTL: 9, cornerRadiusTR: 9, cornerRadiusBL: 9, cornerRadiusBR: 9
                }),
                paddingTop: 2,
                paddingBottom: 2,
                paddingLeft: 16,
                paddingRight: 16,
                centerX: am5.p50,
                centerY: am5.p50
              })
            });
          });
          labelSeries.data.setAll([
            { geometry: { type: "Point", coordinates: [-53, -13] }, label: "BRASIL" },
            { geometry: { type: "Point", coordinates: [-8, 39.6] }, label: "PORTUGAL" }
          ]);

          // Pontos com radar e card
          const pointSeries = chart.series.push(am5map.MapPointSeries.new(root,{ visible:true }));

          pointSeries.bullets.push((root,_s,item)=>{
            const container = am5.Container.new(root,{});

            const core = am5.Circle.new(root,{
              radius:7, fill: am5.color(0x2b455f),
              stroke: am5.color(0x85bbea), strokeWidth:2.1,
              tooltipText:item.dataContext.tip, cursorOverStyle:"pointer"
            });

            const ring = am5.Circle.new(root,{
              radius:7, stroke: am5.color(0x85bbea), strokeWidth:2, fillOpacity:0, cursorOverStyle:"pointer"
            });
            ring.animate({ key:"scale", from:1, to:2.7, duration:radarDur, loops:Infinity,
                          easing: am5.ease.out(am5.ease.quad) });
            ring.animate({ key:"strokeOpacity", from:1, to:0, duration:radarDur, loops:Infinity,
                          easing: am5.ease.out(am5.ease.quad) });

            // Card fixo ao clicar
            function showCityInfo(item) {
              const d = item.dataContext;
              const iconHTML = d.icon ? `<img src="${d.icon}" alt="logo ${d.tip}" class="lab-icon">` : "";
              const card = document.getElementById("cityInfoCard");
              const html = `
                <div style="display: flex; align-items: center; gap: 12px;">
                  ${iconHTML}
                  <div>
                    <strong>${d.tip}</strong>
                    <span class="estado">${d.estado}</span><br>
                    <span class="lab">${d.laboratorio}</span>
                  </div>
                </div>
              `;
              document.getElementById("cityInfoContent").innerHTML = html;
              card.style.display = "block";
            }
            function toPoint() {
              const [lon,lat] = item.dataContext.geometry.coordinates;
              chart.zoomToGeoPoint({ latitude:lat, longitude:lon }, zoomIn, true, 500);
            }

            core.events.on("click", function() {
              showCityInfo(item);
              toPoint();
            });
            ring.events.on("click", function() {
              showCityInfo(item);
              toPoint();
            });

            container.children.push(ring);
            container.children.push(core);
            return am5.Bullet.new(root,{ sprite: container });
          });
          pointSeries.data.setAll(points);

          // Esconde card ao clicar no fundo
          chart.chartContainer.get("background").events.on("click", function() {
            chart.goHome(true);
            document.getElementById("cityInfoCard").style.display = "none";
          });

          worldSeries.events.once("datavalidated", ()=> chart.goHome(false));
        });
      </script>


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



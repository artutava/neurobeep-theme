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

  <!-- Breadcrumb -->
  <nav class="container mt-lg-4 pt-5" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0 pt-5">
      <li class="breadcrumb-item">
        <a href="<?php echo esc_url(home_url('/')); ?>"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Notícias</li>
    </ol>
  </nav>

  <!-- Page content -->
  <section class="container mt-4 mb-lg-5 pt-lg-2 pb-5">
    <div class="row align-items-end gy-3 mb-4 pb-lg-3 pb-1">
      <div class="col-lg-5 col-md-4">
        <h1 class="mb-2 mb-md-0">Notícias</h1>
      </div>
      <div class="col-lg-7 col-md-8">
        <form class="row gy-2" method="get" action="<?php echo esc_url(home_url('/')); ?>">
          <div class="col-lg-5 col-sm-6">
            <div class="d-flex align-items-center">
              <div class="nav flex-nowrap me-sm-4 me-3"></div>
              <select class="form-select" name="cat" onchange="this.form.submit()">
                <option value=""><?php esc_html_e('Todas as categorias','neurobeep'); ?></option>
                <?php
                  $cats = get_categories(['hide_empty'=>1]);
                  foreach ($cats as $c) {
                    printf(
                      '<option value="%d"%s>%s</option>',
                      $c->term_id,
                      selected($cat_qs, $c->term_id, false),
                      esc_html($c->name)
                    );
                  }
                ?>
              </select>
            </div>
          </div>
          <div class="col-lg-7 col-sm-6">
            <div class="input-group">
              <input type="text" class="form-control pe-5 rounded" name="s" value="<?php echo esc_attr(get_search_query()); ?>" placeholder="Pesquisar em notícias...">
              <i class="bx bx-search position-absolute top-50 end-0 translate-middle-y me-3 zindex-5 fs-lg"></i>
            </div>
          </div>
          <input type="hidden" name="post_type" value="post">
        </form>
      </div>
    </div>

    <?php if ( $q->have_posts() ) : ?>
      <?php while ( $q->have_posts() ) : $q->the_post(); ?>
        <?php
          $post_id   = get_the_ID();
          $permalink = get_permalink();
          $title     = get_the_title();
          $excerpt   = has_excerpt() ? get_the_excerpt() : wp_trim_words( wp_strip_all_tags( get_the_content() ), 26, '…' );
          $cat       = get_the_category();
          $cat_name  = !empty($cat) ? $cat[0]->name : 'Notícias';
          $cat_link  = !empty($cat) ? get_category_link($cat[0]->term_id) : '#';
          $date_txt  = nb_time_or_date($post_id);

          $thumb = get_the_post_thumbnail_url($post_id, 'large');
          if (!$thumb) $thumb = $FALLBACK;  // imagem padrão única
        ?>
        <!-- Item -->
        <article class="card border-0 shadow-sm overflow-hidden mb-4">
          <div class="row g-0">
            <div class="col-sm-4 position-relative bg-position-center bg-repeat-0 bg-size-cover"
                 style="background-image: url('<?php echo esc_url($thumb); ?>'); min-height: 15rem;">
              <a href="<?php echo esc_url($permalink); ?>" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Ler mais"></a>
            </div>
            <div class="col-sm-8">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <a href="<?php echo esc_url($cat_link); ?>" class="badge fs-sm text-nav bg-secondary text-decoration-none">
                    <?php echo esc_html($cat_name); ?>
                  </a>
                  <span class="fs-sm text-muted border-start ps-3 ms-3"><?php echo esc_html($date_txt); ?></span>
                </div>
                <h3 class="h4">
                  <a href="<?php echo esc_url($permalink); ?>"><?php echo esc_html($title); ?></a>
                </h3>
                <p><?php echo esc_html($excerpt); ?></p>
                <hr class="my-4">
                <div class="d-flex align-items-center justify-content-between">
                  <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta('ID') ) ); ?>" class="d-flex align-items-center fw-bold text-dark text-decoration-none me-3">
                    <?php echo get_avatar( get_the_author_meta('ID'), 48, '', get_the_author(), ['class' => 'rounded-circle me-3'] ); ?>
                    <?php the_author(); ?>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </article>
      <?php endwhile; ?>

      <!-- Paginação -->
      <?php
        $links = paginate_links([
          'base'      => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
          'format'    => '?paged=%#%',
          'current'   => max(1, $paged),
          'total'     => $q->max_num_pages,
          'type'      => 'array',
          'prev_text' => '<i class="bx bx-chevron-left mx-n1"></i>',
          'next_text' => '<i class="bx bx-chevron-right mx-n1"></i>',
        ]);
        if (!empty($links)) :
      ?>
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center pt-lg-3 pt-1">
            <?php foreach ($links as $l): ?>
              <li class="page-item<?php echo strpos($l,'current')!==false ? ' active' : '' ?>">
                <?php echo str_replace('page-numbers', 'page-link', $l); ?>
              </li>
            <?php endforeach; ?>
          </ul>
        </nav>
      <?php endif; ?>

      <?php wp_reset_postdata(); ?>

    <?php else : ?>
      <p>Nenhuma notícia encontrada.</p>
    <?php endif; ?>

  </section>
</main>

      <?php
get_footer();



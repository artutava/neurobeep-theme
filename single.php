<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package neurobeep
 */

get_header();
?>




<main class="page-wrapper">

  <!-- Breadcrumb -->
  <nav class="container pt-4 mt-lg-3" aria-label="breadcrumb">
    <ol class="breadcrumb mt-5">
      <li class="breadcrumb-item">
        <a href="<?php echo esc_url(home_url('/')); ?>"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
      </li>
      <li class="breadcrumb-item">
        <a href="<?php echo get_permalink( get_option('page_for_posts') ); ?>">Blog</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
    </ol>
  </nav>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- Post title + Meta -->
    <section class="container mt-4 pt-lg-2 pb-3">
      <h1 class="pb-3" style="max-width: 970px;"><?php the_title(); ?></h1>
      <div class="d-flex flex-md-row flex-column align-items-md-center justify-content-md-between mb-3">
        <div class="d-flex align-items-center flex-wrap text-muted mb-md-0 mb-4">
          <div class="fs-xs border-end pe-3 me-3 mb-2">
            <?php the_category(' '); ?>
          </div>
          <div class="fs-sm border-end pe-3 me-3 mb-2">
            <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ); ?> atrás
          </div>
        </div>
        <div class="d-flex align-items-center position-relative ps-md-3 pe-lg-5 mb-2">
          <?php echo get_avatar( get_the_author_meta('ID'), 60, '', get_the_author(), ['class'=>'rounded-circle'] ); ?>
          <div class="ps-3">
            <h6 class="mb-1">Autor</h6>
            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta('ID') ) ); ?>" class="fw-semibold stretched-link"><?php the_author(); ?></a>
          </div>
        </div>
      </div>
    </section>

    <!-- Post image (parallax com fallback) -->
    <?php
      $cover_img = has_post_thumbnail()
        ? get_the_post_thumbnail_url(get_the_ID(), 'large')
        : get_template_directory_uri() . '/assets/img/blog/single/cover-image.jpg';
    ?>
    <div class="jarallax mb-lg-5 mb-4" data-jarallax data-speed="0.35" style="height: 36.45vw; min-height: 300px;">
      <div class="jarallax-img" style="background-image: url(<?php echo esc_url($cover_img); ?>);"></div>
    </div>

    <!-- Post content -->
    <section class="container mb-5 pt-4 pb-2 py-mg-4">
      <div class="row gy-4">
        <div class="col-lg-9">
          <div class="entry-content">
            <?php the_content(); ?>
          </div>

          <!-- Tags -->
          <hr class="mb-4">
          <?php the_tags('<div class="d-flex flex-sm-row flex-column pt-2"><h6 class="mt-sm-1 mb-sm-2 mb-3 me-2 text-nowrap">Related Tags:</h6><div>',' ','</div></div>'); ?>
        </div>

        <!-- Sharing -->
        <div class="col-lg-3 position-relative">
          <div class="sticky-top ms-xl-5 ms-lg-4 ps-xxl-4" style="top: 105px !important;">
            <span class="d-block mb-3"><?php echo get_the_date(); ?></span>
            <h6>Compartilhe o post:</h6>
            <div class="mb-4 pb-lg-3">
              <a href="https://www.linkedin.com/shareArticle?url=<?php the_permalink(); ?>" class="btn btn-icon btn-secondary btn-linkedin me-2 mb-2"><i class="bx bxl-linkedin"></i></a>
              <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="btn btn-icon btn-secondary btn-facebook me-2 mb-2"><i class="bx bxl-facebook"></i></a>
              <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>" class="btn btn-icon btn-secondary btn-twitter me-2 mb-2"><i class="bx bxl-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Related articles -->
    <section class="container mb-5 pt-md-4">
      <div class="d-flex flex-sm-row flex-column align-items-center justify-content-between mb-4 pb-1 pb-md-3">
        <h2 class="h1 mb-sm-0">Related Articles</h2>
        <a href="<?php echo get_permalink( get_option('page_for_posts') ); ?>" class="btn btn-lg btn-outline-primary ms-4">
          All posts <i class="bx bx-right-arrow-alt ms-1 me-n1 lh-1 lead"></i>
        </a>
      </div>

      <?php
      $cats = wp_get_post_categories(get_the_ID());
      $related = new WP_Query([
        'category__in'   => $cats,
        'post__not_in'   => [get_the_ID()],
        'posts_per_page' => 3
      ]);
      if ( $related->have_posts() ) : ?>
        <div class="swiper mx-n2" data-swiper-options='{"slidesPerView":1,"spaceBetween":8,"pagination":{"el":".swiper-pagination","clickable":true},"breakpoints":{"500":{"slidesPerView":2},"1000":{"slidesPerView":3}}}'>
          <div class="swiper-wrapper">
            <?php while( $related->have_posts() ) : $related->the_post(); ?>
              <div class="swiper-slide h-auto pb-3">
                <article class="card border-0 shadow-sm h-100 mx-2">
                  <div class="position-relative">
                    <a href="<?php the_permalink(); ?>" class="position-absolute top-0 start-0 w-100 h-100"></a>
                    <?php
                      if ( has_post_thumbnail() ) {
                        the_post_thumbnail('medium', ['class'=>'card-img-top']);
                      } else {
                        echo '<img src="'.get_template_directory_uri().'/assets/img/blog/01.jpg" class="card-img-top" alt="Placeholder">';
                      }
                    ?>
                  </div>
                  <div class="card-body pb-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <?php the_category(' '); ?>
                      <span class="fs-sm text-muted"><?php echo get_the_date(); ?></span>
                    </div>
                    <h3 class="h5 mb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  </div>
                  <div class="card-footer py-4">
                    <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>" class="d-flex align-items-center fw-bold text-dark text-decoration-none">
                      <?php echo get_avatar( get_the_author_meta('ID'), 48, '', get_the_author(), ['class'=>'rounded-circle me-3'] ); ?>
                      <?php the_author(); ?>
                    </a>
                  </div>
                </article>
              </div>
            <?php endwhile; wp_reset_postdata(); ?>
          </div>
          <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
        </div>
      <?php endif; ?>
    </section>

  <?php endwhile; endif; ?>

</main>




<?php
get_footer();

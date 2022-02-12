<?php
/**
 * Template Name: Blog Page
 * The template for displaying Blog page.
 */
?> 

<?php get_header(); ?>

<?php
  $blog_title = get_field( 'blog_title' );
  $def_ctg = get_field( 'default_category' );
?>

<div class="page-holder">
  <main class="main">
    <div class="blog-blocks">
      <!-- speakers section -->
      <section class="blog-section">
        <div class="container">
          <div class="section-heading text-center">
            <h1 class="text-uppercase"><?php echo $blog_title; ?>
          </h1>
            <!-- filter navbar -->
            <nav class="navbar navbar-expand-xl navbar-light navbar-filter">
              <button
              class="filter-toggler d-xl-none"
              type="button"
              data-toggle="collapse"
              data-target="#filterNav"
              aria-controls="filterNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
              >
              <span class="icon-filter"></span>
              <span class="toggler-text">Filter</span>
            </button>
            <div class="collapse navbar-collapse" id="filterNav">
              <div class="collapse-inner justify-content-xl-center">
                <button
                class="navbar-toggler filter-toggler d-xl-none"
                type="button"
                data-toggle="collapse"
                data-target="#filterNav"
                aria-controls="filterNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
                >
                <span class="navbar-toggler-icon"></span>
              </button>
              <ul class="navbar-nav">

                <li class="nav-item active">
                  <a class="nav-link" href="<?php echo site_url(); ?>/blog">All</a>
                </li>

                <?php
                $categories = get_categories();
                foreach($categories as $category): ?>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo esc_url( get_category_link($category->term_id) ); ?>"><?php echo $category->name; ?></a>
                </li>
                <?php endforeach; ?>
                
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <!-- articles -->
      <div class="articles-wrapper filter-section">
        <div class="row">
        
        <?php
          $args = array(
              'post_type' => 'post',
              'post_status' => 'publish',
              // 'category_name'  => $def_ctg->name,
              'orderby' => 'date',
              'order' => 'DESC',
              'ignore_sticky_posts' => 1,
              'suppress_filters' => true,
              'posts_per_page' => 9,
              'paged' => $paged
          
          );
          $authblog_query = new WP_Query($args);
        ?>

        <?php if ( $authblog_query->have_posts() ) : ?>
            <?php while( $authblog_query->have_posts() ): $authblog_query->the_post(); ?>

          <!-- single article -->
          <?php get_template_part( 'template-parts/blog-card' ); ?>
          <!-- single article -->

          <?php endwhile; wp_reset_postdata();?>
        <?php else : ?>
            <h3>No Post Found</h3>
        <?php endif; ?>

        </div>
      </div>

      <!--  pagination Strat-->
      <!-- <?php get_template_part( 'template-parts/pagination' ); ?> -->
      <div class="pagination">
          <div class="container">
              <div class="row">
                  <div class="col-12 col-lg-12 col-xl-12">
                  <nav class="pagination-nav d-flex justify-content-center justify-content-md-end">
                  <!-- Pagination Support -->
                  <?php authblog_pagination(); ?>
                  <!-- Pagination Support -->
                  </div>
                  </nav>
              </div>
          </div>
      </div>
      
      <!--  pagination End-->

    </div>
  </section>
</div>
</main>
</div>

<?php get_footer(); ?>
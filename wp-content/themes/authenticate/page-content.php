<?php
/**
 * Template Name: Content  Page
 * The template for displaying  Content page.
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
            <h1 class="text-uppercase"><?php echo $blog_title; ?></h1>
            <div class="search_filter">
              <?php echo do_shortcode('[searchandfilter id="10558"]'); ?>
            </div>
            <!-- filter navbar -->
            
      </div>
      <!-- articles -->
      <div class="articles-wrapper filter-section">
        <div class="row" id="main_contents">

      
        <?php
          $args = array(
            'post_type' => 'content',
            'search_filter_id' => 10558,
            'paged' => $paged
          );
          
          $authblog_query = new WP_Query($args);
        ?>

        <?php if ( $authblog_query->have_posts() ) : ?>
            <?php while( $authblog_query->have_posts() ): $authblog_query->the_post(); ?>
          
          <!-- single article -->
          <?php get_template_part( 'template-parts/content-card' ); ?>
          <!-- single article -->

          <?php endwhile; wp_reset_postdata();?>
        <?php else : ?>
            <h3>No Content Found</h3>
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
                  <!-- <?php authblog_pagination(); ?> -->
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
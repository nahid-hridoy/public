<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package authenticate
 */

get_header();
?>

<div class="page-holder">
  <main class="main">
    <div class="blog-blocks">
      <!-- speakers section -->
      <section class="blog-section">
        <div class="container">
          <div class="section-heading text-center">
            <h1 class="text-uppercase page-title">
			<?php
			/* translators: %s: search query. */
			printf( esc_html__( 'Search Results for: %s', 'authenticate' ), '<span>' . get_search_query() . '</span>' );
			?>
          </h1>
      	</div>
      <!-- articles -->
      <div class="articles-wrapper filter-section">
        <div class="row">
        
       

        <?php if ( have_posts() ) : ?>
		    <?php while( have_posts() ): the_post(); ?>

          <!-- single article -->
          <?php get_template_part( 'template-parts/search-card' ); ?>
          <!-- single article -->

        <?php endwhile; wp_reset_postdata();?>
        <?php else : ?>
            <h3>No Result Found</h3>
        <?php endif; ?>

        </div>
      </div>

      

    </div>
  </section>
</div>
</main>
</div>


<?php
// get_sidebar();
get_footer();

<?php
/**
 * Template Name: Sponsors Page
 * The template for displaying Sponsors page.
 */
?> 
 
 <?php get_header(); ?>

 <div class="page-holder">
  <main class="main">
    <div class="sponsors-blocks">

      <!-- sponsors hero start -->
      <?php get_template_part( 'template-parts/sponsors/sponsors-hero' ); ?>
      <!-- sponsors hero end -->

      <!-- sponsors loop start -->
      <?php get_template_part( 'template-parts/sponsors/sponsors-loop' ); ?>
      <!-- sponsors loop end -->

      <!-- cta section -->
      <!-- cta section ADDITIONAL CLASS with-top-border -->

      <!-- sponsors loop start -->
      <?php get_template_part( 'template-parts/sponsors/sponsors-bottom' ); ?>
      <!-- sponsors loop end -->


    </div>
  </main>
</div>

<?php get_footer(); ?>
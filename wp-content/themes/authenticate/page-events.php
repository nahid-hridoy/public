<?php
/**
 * Template Name: Events Page
 * The template for displaying Events page.
 */
?> 

<?php get_header(); ?>

<div class="page-holder">
  <main class="main">
    <div class="events-blocks">

    
      <!-- event section start-->
      <?php get_template_part( 'template-parts/events/upcoming-events' ); ?>
      <!-- event section end-->
      
      <!-- testimonial-section start-->
      <?php //get_template_part( 'template-parts/events/testimonials' ); ?>
      <!-- testimonial-section end-->
      
      <!-- section past events satrt -->
      <?php //get_template_part( 'template-parts/events/past-events' ); ?>
      <!-- section past events end -->

      <!-- form section start-->
      <?php get_template_part( 'template-parts/events/form-section' ); ?>
      <!-- form section end-->




    </div>
  </main>
</div>

<?php get_footer(); ?>
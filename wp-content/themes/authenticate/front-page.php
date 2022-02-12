<?php
/**
 * Template Name: Front Page
 * The template for displaying Home page.
 */
?>      
      
      
      <?php get_header(); ?>

      <div class="page-holder">
        <main class="main">
          <div class="homepage-blocks">
            <?php 
              $slider_enable = get_field( 'enable_hero_slider' ); 
              if( 1 == $slider_enable ):
            ?>
            <!-- Hero Area Start -->
            <?php get_template_part( 'template-parts/hero-area-carousel' ); ?>
            <!-- Hero Area End -->
            <?php else: ?>
            <!-- Hero Area Slider Start -->
            <?php get_template_part( 'template-parts/hero-area' ); ?>
            <!-- Hero Area Slider End -->
            <?php endif; ?>
            
            <!-- section about start-->
            <?php get_template_part( 'template-parts/about-area' ); ?>
            <!-- section about end-->
            <?php $ev_type = get_field( 'choose_event_layout' ); ?>
            <?php if( 'list' == $ev_type ): ?>
            <!-- event section start -->
            <?php get_template_part( 'template-parts/events-area' ); ?>
            <!-- events section end -->
            <?php else: ?>
            <!-- event carousel section start -->
            <?php get_template_part( 'template-parts/events-carousel-area' ); ?>
            <!-- events carousel section end -->
            <?php endif; ?>

            <!-- feature section start -->
            <?php get_template_part( 'template-parts/features-area' ); ?>
            <!-- feature section end -->
            
            <!-- additional CLASS pb-xxl-24 for custom padding bottom on HOMEPAGE -->

            <!-- testimonial-section start -->
            <?php //get_template_part( 'template-parts/testimonial-area' ); ?>
            <!-- testimonial-section end -->
            
            <!-- sponsors section start-->
            <!-- additional CLASS heading-custom-position for custom heading position and overlay on HOMEPAGE -->
            <?php get_template_part( 'template-parts/sponsors-area' ); ?>
            <!-- sponsors section end-->
            
            <!-- metric section strat -->
            <?php get_template_part( 'template-parts/metric-area' ); ?>
            <!-- metric section end -->

            <!-- form section start-->
            <?php get_template_part( 'template-parts/signup-form-area' ); ?>
            <!-- form section end-->

          </div>
        </main>
      </div>

      <?php get_footer(); ?>
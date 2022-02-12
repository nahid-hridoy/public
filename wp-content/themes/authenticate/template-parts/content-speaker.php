<?php 
  $speakerID = get_the_ID();
  $speakerName = get_the_title();
?>

<div class="page-holder">
  <main class="main">
    <div class="member-page-blocks">
      <section class="member-section bg-secondary text-white">
        <div class="container">
          <div class="row">
            <div class="col-md-7 d-md-flex flex-md-column">
              <div class="member-head m-0">
                <span class="member-categories">
                </span>
                <h1 class="text-uppercase"><?php the_title(); ?></h1>
                <span class="member-jobs">
                  <?php if( have_rows('add_jobs') ):
                    while( have_rows('add_jobs') ) : the_row();?>
                      <?php $job_title = get_sub_field('job_Name'); ?>
                      <?php $sp_pos = get_sub_field('job_comp'); ?>
                      <span><?php echo $job_title; ?><?php if( $sp_pos ): ?>
                      <?php if( $job_title && $sp_pos ): ?>,
                      <?php endif; ?>
                      <b><?php echo $sp_pos; ?></b><?php endif; ?></span>
                    <?php endwhile; endif; ?>

                  </span>
                </div>
              </div>
              <div class="col-md-4 d-md-flex flex-md-column">
                <div class="member-image-wrapper">
                  <div class="member-image">
                    <img src="<?php the_post_thumbnail_url(  ); ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" />
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="member-description">

                  <?php if( '' !== get_post()->post_content ) { ?>
                   <h3 class="text-primary"><?php echo esc_html_e( 'Bio','authenticate' ); ?></h3>
                   <?php
                 } ?>

                 <?php echo wpautop( the_content() ); ?>
               </div>
             </div>
           </div>
         </div>
       </section>


       
        <!-- session section Start -->
        <section class="session-section bg-secondary text-white">
          <div class="container">
            <div class="section-heading">
              <h3 class="text-primary"><?php echo esc_html_e( 'Sessions','authenticate' ); ?></h3>
            </div>
            <div class="sessions-wrapper">
              <div class="row">

              <?php
                $args = array(
                    'post_type' => 'session',
                    'post_status' => 'publish',
                    // 'category_name'  => $def_ctg->name,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'ignore_sticky_posts' => 1,
                    'suppress_filters' => true,
                    'posts_per_page' => -1,
                    'paged' => $paged
                );
                $authblog_query = new WP_Query($args);
              ?>

              <?php if ( $authblog_query->have_posts() ) : ?>
                  <?php while( $authblog_query->have_posts() ): $authblog_query->the_post(); ?>

                  <?php
                  if( have_rows('add_session_speaker') ):
                      $count = 0;
                      while( have_rows('add_session_speaker') ) : the_row();
                      $count++;
                          //$spm_title = get_sub_field('sponsor_title');
                          $speakers = get_field('add_session_speaker');
                  ?>
                  

                  <?php if( $speakers ): ?>
                
                      <?php foreach( $speakers as $speaker ): 
                          $speakerList[ ] = $speaker->ID; 
                      ?>
                      
                      <?php endforeach; ?>
                  <?php endif; ?>
              <?php endwhile; endif; ?>
                  
                <?php if( in_array( $speakerID, $speakerList ) ): ?>
                  <!-- session single card start -->
                  <?php get_template_part( 'template-parts/session-card-normal' ); ?>
                  <?php unset( $speakerList ); ?>
                  <!-- session single card end-->
                  <?php endif; ?>

                  <?php endwhile; wp_reset_postdata();?>
                <?php else : ?>
                    <h3>No Sessions Found</h3>
                <?php endif; ?>
   
              </div>
            </div>
          </div>
        </section>
        <!-- session section End -->
        



      </div>
    </main>
  </div>
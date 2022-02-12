<style>
.single-sponsor .member-section.sponsor-section-single {
        padding-top: 0;
    }

    .single-sponsor .sponsor img {
        border-right: 5px solid #26cc7e;
        padding-right: 2%;
    }

    .single-sponsor h1.entry-title {
        font-size: 41px;
        font-family: "Ubuntu";
        font-weight: 700;
        line-height: 1.1;
        color: #000;
        text-transform: uppercase;
    }

    .single-sponsor .entry-category ul {
        margin: 0;
        display: inline-block;
        margin: 0;
        padding: 0;
        font-size: 14px;
    }

    .single-sponsor .entry-category ul li {
        margin: 0;
        padding: 0;
        display: inline-block;
        list-style: none;
    }

    .single-sponsor .entry-category a {
        text-transform: capitalize;
        margin-left: 5px;
    }

    .single-sponsor header.entry-header {
        margin-top: -10px;
    }

    .single-sponsor header.main-header {
        border-bottom: 1px solid #eaeaea;
    }

</style>

<?php 
  $sponsorID = get_the_ID();
  $sponsorName = get_the_title();
?>
<div class="page-holder">
  <main class="main">
    <div class="member-page-blocks">
      <section class="member-section sponsor-section-single">
        <div class="container">


        <div class="row sponsor-row" style="margin-top: 150px;">
          <div class="col-md-4 col-12 sponsor" style="margin-bottom: 20px;">
              <div class="post-thumbnail"> <img width="228" height="69" src="<?php the_post_thumbnail_url(  ); ?>" class="attachment-eventiz-full-width size-eventiz-full-width wp-post-image" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>"></div>
          </div>
          <div class="col-md-8 col-12">
              <div class="entry-content">
                <header class="entry-header">
                    <h1 class="entry-title" style="margin-bottom: 0; margin-top: 0;"><?php the_title(); ?></h1>
                    <div class="entry-meta clearfix">
                      <div class="entry-category pull-left" style="margin-bottom: 20px;">
                      <?php
                          $postid = get_the_ID();
                          $sp_terms = get_the_terms( $postid, 'Sponsor-Category' );
                      ?>
                          <ul class="post-categories">
                          <?php foreach( $sp_terms as $sp_term ): ?>
                            <li><a href="" rel="category tag"><?php echo $sp_term->name; ?></a></li>
                            <?php endforeach; ?>
                          </ul>
                        
                      </div>
                    </div>
                </header>
                <div class="sposnor-content">
                  <?php echo wpautop( the_content() ); ?>
                </div>

                <?php
                  $spnsor_url = get_field( 'sponsor_url' );
                  if( $spnsor_url ):
                ?>
                <a class="btn btn-primary " href="<?php echo esc_url( $spnsor_url ); ?>" target="_blank"><?php echo esc_html_e( 'View Sponsor Website','authenticate' ); ?></a>
                <?php endif; ?>


              </div>
          </div>
        </div>

        </div>
      </section>

    </div>
    <?php wp_reset_postdata();?>
    <div class="events">
        <section class="event-section">

        <div class="container">
          <div class="row">
            <div class="section-title sponsored-event">
              <h2>Sponsored Events</h2>
            </div>
          </div>
         
          <div class="row">
                  <?php
                  $args = array(
                      'post_type' => 'event',
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
                    if( have_rows('add_all_sponsors') ):
                        $count = 0;
                        while( have_rows('add_all_sponsors') ) : the_row();
                        $count++;
                            $spm_title = get_sub_field('sponsor_title');
                            $sponsors = get_sub_field('assign_sponsor');
                    ?>
                   

                    <?php if( $sponsors ): ?>
                  
                        <?php foreach( $sponsors as $sponsor ): 
                            $sponsorList[ ] = $sponsor->ID; 
                        ?>
                        
 
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <?php endwhile; endif; ?>
                  <?php if( in_array( $sponsorID, $sponsorList ) ): ?>
                  <!-- single article -->
                  <?php get_template_part( 'template-parts/event-card' ); ?>
                  <?php unset( $sponsorList ); ?>
                  <!-- single article -->
                  <?php endif; ?>

                  <?php endwhile; wp_reset_postdata();?>
                <?php else : ?>
                    <h3>No Sponsored Events Found</h3>
                <?php endif; ?>
            </div>
          </div>
        </section>
    </div>


  </main>
</div>
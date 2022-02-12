<?php
$sess_day = get_field( 'w_day' );
$sess_start = get_field( 'start_time' );
$sess_end = get_field( 'end_time' );
$sess_speakers = get_field( 'add_session_speaker' );
?>

<?php 
$events = get_posts(array(
  'post_type' => 'event',
  'meta_query' => array(
    array(
      'key' => 'add_sessions',
      'value' => '"' . get_the_ID() . '"',
      'compare' => 'LIKE'
    )
  )
));
?>

<div class="page-holder">
  <main class="main">
    <div class="member-page-blocks">
      <section class="member-section text-white">
        <div class="bg-primary py-10">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <nav class="back-to-event d-block mb-2">
                  <?php if( $events ): ?>
                    <?php foreach( $events as $event ): ?>
                      <a href="<?php echo get_permalink( $event->ID ); ?>#agenda">
                      <?php endforeach; ?>
                    <?php endif; ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                    </svg> Back to Agenda</a>
                  </nav>
                </div>
                <div class="col-md-10">
                  <h1 class="text-uppercase text-secondary"><?php the_title(); ?></h1>

                  <div class="d-md-flex flex-column" style="justify-content: space-between;">
                    <div class="event-info-wrap">
                      <div class="event-info">
                        <h2 class="d-block mb-0"><?php echo $sess_day; ?> </h2>
                        <time class="meta-info"><?php echo $sess_start; ?> - <?php echo $sess_end; ?></time>
                        <div class="event-reference mt-md-3">
                          <?php if( $events ): ?>
                            <?php foreach( $events as $event ): ?>
                              Event: <a href="<?php echo get_permalink( $event->ID ); ?>"><?php echo get_the_title( $event->ID ); ?></a>
                            <?php endforeach; ?>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                    <div class="event-speakers-wrap mt-md-7 mt-5">
                      <div class="event-speakers-title">
                        <?php if( $sess_speakers ): ?>
                          <h4>Speakers:</h4>
                        </div>

                        <div class="event-speakers">
                          <?php foreach( $sess_speakers as $sess_speaker ): 
                            $sc_speaker_name = get_the_title( $sess_speaker->ID );
                            $sc_speaker_slug    = $sess_speaker->post_name;
                            $sc_speaker_img_url = get_the_post_thumbnail_url( $sess_speaker->ID, 'full' );
                            ?>
                            <a href="/speaker/<?php echo $sc_speaker_slug; ?>">
                              <div class="member">
                                <?php if ($sc_speaker_img_url) { ?>
                                  <div class="member-image-wrapper-single">
                                    <div class="member-image-single">
                                      <img src="<?php echo $sc_speaker_img_url; ?>" alt="">
                                    </div>
                                  </div>
                                <?php } else { ?>
                                  <div class="member-image-wrapper-single">
                                   <div class="member-image-single">
                                    <img src="/wp-content/themes/authenticate/images/blue-no-photo.png" alt="<?php echo $sc_speaker_name; ?>">
                                  </div>
                                </div>
                                <?php
                              } ?>
                              <div class="member-name">
                                <strong><?php echo $sc_speaker_name; ?></strong>
                              </div>
                            </div>
                          </a>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-secondary">
          <div class="container">
            <div class="row">
              <div class="col-10 py-10">
                <div class="member-description">
                  <h3 class="text-primary"><?php echo esc_html_e( 'Session Details','authenticate' ); ?></h3>
                  <?php echo wpautop( the_content() ); ?>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>


      <?php  
      $sessions = get_field('add_sessions');
      if( $sessions ): ?>
        <!-- session section Start -->
        <section class="session-section bg-secondary text-white">
          <div class="container">
            <div class="section-heading">
              <h3 class="text-primary"><?php echo esc_html_e( 'Sessions','authenticate' ); ?></h3>
            </div>
            <div class="sessions-wrapper">
              <div class="row">

                <?php 
                foreach( $sessions as $post ): 
                  setup_postdata($post); 
                  ?>
                  <!-- session single card start -->
                  <?php get_template_part( 'template-parts/session-card-normal' ); ?>
                  <!-- session single card end-->
                <?php endforeach; ?>





              </div>
            </div>
          </div>
        </section>
        <!-- session section End -->
        <?php  wp_reset_postdata(); endif; ?>



      </div>
    </main>
  </div>
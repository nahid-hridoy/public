<?php
$sess_day = get_field( 'w_day' );
$sess_start = get_field( 'start_time' );
$sess_end = get_field( 'end_time' );
$sess_speakers = get_field( 'add_session_speaker' );
?>

<div class="col-md-6 col-lg-4 col-xl-3 d-flex flex-direction-column">
    <div class="session">
        <div class="session-body">
            <div class="session-body-top">
                <div class="session-meta">
                    <span class="day"><?php echo $sess_day; ?></span>
                    <span class="time"><?php echo $sess_start; ?> - <?php echo $sess_end; ?></span>
                </div>
                <?php $the_link = get_the_permalink(); ?>
                <h6 class="session-title check-link"><a <?php if( get_the_content() ): ?>href="<?php echo esc_url( $the_link ); ?>"<?php endif; ?>> <?php the_title();?></a></h6>
            <!-- <div class="session-member">
            <span class="session-member-label"><?php echo esc_html_e( 'Speaker','authenticate' ); ?></span>
            <?php if( $sess_speakers ): ?>
            <?php foreach( $sess_speakers as $sess_speaker ): 
                $sc_speaker_name = get_the_title( $sess_speaker->ID );
            ?>
            <span class="session-member-name"><?php echo $sc_speaker_name; ?></span>
            <?php endforeach; ?>
            <?php endif; ?>
        </div> -->

        <?php
        $speakers = get_field( 'add_session_speaker' );
        if ( $speakers ): 
            ?>
            <div class="session-member">
                
                <?php $speaker_label = "Speaker"; ?>

                <?php if (count(array($speakers > 1))): ?>
                    <?php $speaker_label = "Speakers"; ?>
                <?php endif; ?>
                
                <span class="session-member-label"><?php echo $speaker_label; ?></span>
                
                <?php
                foreach ( $speakers as $post ):
                    setup_postdata( $post );
                    ?>
                    
                    <span class="session-member-name"><?php the_title(); ?></span>

                    <?php $sp_jobs = get_field( 'add_jobs', $post->ID )?>
                    <?php if ( $sp_jobs ): ?>
                        <?php
                        foreach ( $sp_jobs as $sp_job ):
                            ?>
                            <?php $sp_pos = $sp_job['job_comp']; ?>
                            <em><?php echo  $sp_job['job_Name'] ; ?><?php if( $sp_pos ): ?> <?php echo $sp_pos; ?><?php endif; ?></em>
                            <br>
                            <?php
                        endforeach;?>
                        <?php
                    endif;?>
                <?php endforeach; ?>
            </div>
        <?php endif; wp_reset_postdata(); ?>



    </div>
        <!-- <div class="session-body-bottom">
            <a href="<?php the_permalink(); ?>" class="learn-more"><?php echo esc_html_e( 'Learn More','authenticate' ); ?></a>
        </div> -->
    </div>
</div>
</div>
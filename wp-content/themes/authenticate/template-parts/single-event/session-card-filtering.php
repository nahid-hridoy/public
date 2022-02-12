<?php
    $day_val = get_field( 'w_day_val' );
    $day_val = preg_replace('/\s*/', '', $day_val);
    // convert the string to all lowercase
    $day_val = strtolower($day_val);

    $s_type = get_field('session_type');
    $s_type = $s_type['value'];
?>

<div class="col-12 col-sm-6 col-lg-4 col-xl-3 flex-direction-column filter session_card mix <?php echo $day_val;?> <?php if( 'on_demand' == $s_type ): ?>on_demand<?php endif; ?>">
    <div class="session ses-card">
    <div class="session-body">
        <div class="session-body-top">
        <div class="session-meta">
            <span class="day"><?php the_field( 'w_day_val' );?></span>
            <?php $agenda_end_time = get_field( 'end_time' );?>
            <span class="time"><?php the_field( 'start_time' );?><?php if ( $agenda_end_time ): ?> - <?php the_field( 'end_time' );?><?php endif;?></span>
        </div>
        <?php $the_link = get_the_permalink(); ?>
        <h6 class="session-title check-link"><a <?php if( get_the_content() ): ?>href="<?php echo esc_url( $the_link ); ?>"<?php endif; ?>> <?php the_title();?></a></h6>
        
        <?php
            $speakers = get_field( 'add_session_speaker' );
            if ( $speakers ): 
        ?>
        <div class="session-member">
            
            <?php $speaker_label = "Speaker"; ?>
            <?php if (count($speakers) > 1): ?>
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
            <em><?php echo  $sp_job['job_Name'] ; ?><?php if( $sp_pos ): ?>, <?php echo $sp_pos; ?><?php endif; ?></em>
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
        <a href="<?php echo esc_url( $the_link ); ?>" class="learn-more">Learn More</a>
        </div> -->
    </div>
    </div>
</div>
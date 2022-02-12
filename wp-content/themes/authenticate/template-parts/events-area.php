<?php
    $ev_section_title = get_field('event_title');
    $event_button = get_field( 'event_area_button' );
    $event_number = get_field( 'how_many_events_to_show' );
?>
<style>
.event-reg-btn {
    margin-top: 3% !important;
}

span.external-link img {
    width: 1.2rem;
    margin-left: 1rem;
}

.view_agenda_btn {
    margin-right: .5rem;
}
a.btn.btn-primary {
    margin-bottom: .5rem;
}
</style>
<!-- to make events section fullpage view ADD class "event-section-fullpage" -->
<section class="event-section event-section-fullpage bg-secondary text-white">
    <div class="container">
    <div class="section-heading">
        <h2 class="text-uppercase"><?php echo $ev_section_title;?></h2>
    </div>
    <div class="events-list">

        <?php
        $args = array(
            'post_type' => 'event',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'ignore_sticky_posts' => 1,
            'suppress_filters' => true,
            'posts_per_page' => $event_number
        
        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()):
            $loop->the_post();
        
            $blg_featured_img = get_the_post_thumbnail_url();
            if (empty($blg_featured_img))
            {
                $blg_featured_img = "/wp-content/uploads/inf-2.jpg";
            }
        ?>
        <?php
            $event_reg_btn = get_field( 'event_reg_btn' );
            $ev_date_time = get_field('start_ev_date_time');
            $ev_end_date_time = get_field('end_ev_date_time');
            $ev_location = get_field('ev_location');
            $ev_timezone = get_field('ev_timezone');
            $eventDate = strtotime(get_field('start_ev_date_time'));
            $ev_start_month = date('M', $eventDate);
            $ev_start_day = date('d', $eventDate);
            
            $past_event = get_field('ev_past_event');


            //unique date checker 
            $unique_date_checker = 0;
            $unique_end_date = get_field('end_ev_date_time');
            $unq_end_eventDate = strtotime(get_field('end_ev_date_time'));

            $ev_end_month = date('M', $unq_end_eventDate);
            $ev_end_day = date('d', $unq_end_eventDate);

            if( ( $ev_start_month == $ev_end_month ) && ( $ev_start_day == $ev_end_day ) ){
                $unique_date_checker = 0;
            }else{
                $unique_date_checker = 1;
            }
        ?>       
        <?php if( 1 != $past_event ): ?>
        <!-- single event -->
        <div class="event text-light">
            <div class="event-date">
                <span class="meta-label text-muted"><?php echo date('M', $eventDate); ?></span>
                <span class="date"><?php echo date('d', $eventDate); ?><?php if( 1 == $unique_date_checker ): ?>-<?php echo date('d', $unq_end_eventDate); ?><?php endif; ?></span>
            </div>
            <div class="event-content">
                <div class="event-image-wrapper">
                <div class="event-image">
                    <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo $blg_featured_img; ?>" />
                    </a>
                </div>
                </div>
                <div class="event-description">
                <div class="event-head">
                    <time class="meta-info text-muted" datetime="<?php echo $ev_date_time; ?>"><?php echo $ev_date_time; ?> <?php echo $ev_timezone; ?></time>
                    <h3 class="display-4 text-uppercase text-primary font-weight-bold">
                    <a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
                    </h3>
                    <span class="meta-info text-muted"><?php echo $ev_location; ?></span>
                </div>
                <div class="event-text">
                    <?php echo wpautop( the_excerpt() ); ?>
                </div>
                <div class="event-reg-btn">

                    <?php 
                        $more_info_btn = get_field('enable_vw_agenda');
                        $more_info_btn_txt = get_field('vw_agenda_txt');
                        if( empty( $more_info_btn_txt ) ){
                            $more_info_btn_txt = 'View more information';
                        }
                        if( 1 == $more_info_btn ): 
                    ?>
                        <a href="<?php the_permalink(); ?>" target="_self" class="btn btn-primary view_agenda_btn"><?php echo esc_html( $more_info_btn_txt ); ?></a>
                    <?php endif; ?>

                    <!-- <?php 
                        $reg_btn_vis = get_field('enable_reg_btn');
                        if( $reg_btn_vis ): 
                        if( $event_reg_btn ): 
                        $btn_title = $event_reg_btn['title'];    
                        $btn_url = $event_reg_btn['url'];
                        $link_target = $event_reg_btn['target'] ? $event_reg_btn['target'] : '_self';  
                    ?>
                        <a href="<?php echo esc_url( $btn_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn btn-primary"><?php echo esc_html( $btn_title ); ?><span class="external-link"><img src="<?php echo get_template_directory_uri(  ) ?>/images/external-link.svg" alt=""></span></a>

                    <?php endif; endif; ?> -->
                </div>
                </div>
            </div>
        </div>
        <!-- single event -->
        <?php endif; ?>
        <?php endwhile; wp_reset_postdata(); ?>
        
    </div>

    <div class="section-btn text-center">
        <?php if( $event_button ): 
            $btn_title = $event_button['title'];    
            $btn_url = $event_button['url'];
            $link_target = $event_button['target'] ? $event_button['target'] : '_self';  
        ?>
            <a href="<?php echo esc_url( $btn_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn btn-primary"><?php echo esc_html( $btn_title ); ?></a>

        <?php endif; ?>
    </div>

    </div>
</section>
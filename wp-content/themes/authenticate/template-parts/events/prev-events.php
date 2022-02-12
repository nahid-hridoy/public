<?php 
    $event_bg_img = get_field( 'upe_background_image' ); 
    $event_number = get_field( 'upe_ev_num' ); 
?>
<style>
.event-reg-btn {
    margin-top: 3% !important;
}
</style>

<section class="event-section decorated-section image-bottom">
<span class="decor" style="background-image: url(<?php echo esc_url( $event_bg_img['url'] ); ?>)"></span>
<div class="container">
    <div class="section-heading">
    <?php $event_title = get_field( 'upe_title' ); ?>
    <h2 class="text-uppercase"><?php echo $event_title; ?></h2>
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
        $ev_location = get_field('ev_location');
        $ev_timezone = get_field('ev_timezone');
        
        $eventDate = strtotime(get_field('start_ev_date_time'));
        $ev_start_month = date('M', $eventDate);
        $ev_start_day = date('d', $eventDate);

        $past_event = get_field('ev_past_event');

        //unique date checker final
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

    <?php if( 1 == $past_event ): ?>
    <!-- single event -->
    <div class="event PAST<?php echo $past_event; ?>">
        <div class="event-date">
        <span class="meta-label"><?php echo date('M', $eventDate); ?></span>
        <span class="date"><?php echo date('d', $eventDate); ?><?php if( 1 == $unique_date_checker ): ?>-<?php echo date('d', $unq_end_eventDate); ?><?php endif; ?></span>
        </div>
        <div class="event-content">
        <div class="event-image-wrapper">
            <div class="event-image">
            <a href="<?php the_permalink(); ?>" >
                <img src="<?php echo $blg_featured_img; ?>" />
            </a>
            </div>
        </div>
        <div class="event-description">
            <div class="event-head">
            <time class="meta-info" datetime="<?php echo $ev_date_time; ?>"><?php echo $ev_date_time; ?> <?php echo $ev_timezone; ?></time>
            <h3 class="display-4 text-uppercase text-primary font-weight-bold">
                <a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
            </h3>
            <span class="meta-info"><?php echo $ev_location; ?></span>
            </div>
            <div class="event-text">
            <?php echo wpautop( the_excerpt() ); ?>
            </div>
            <div class="event-reg-btn">
                <?php if( $event_reg_btn ): 
                    $btn_title = $event_reg_btn['title'];    
                    $btn_url = $event_reg_btn['url'];
                    $link_target = $event_reg_btn['target'] ? $event_reg_btn['target'] : '_self';  
                ?>
                    <a href="<?php echo esc_url( $btn_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn btn-primary"><?php echo esc_html( $btn_title ); ?></a>

                <?php endif; ?>
            </div>

        </div>
        
        </div>
    </div>
    <!-- single event -->
    <?php endif; ?>



    <?php endwhile; wp_reset_postdata(); ?>



    
    </div>
</div>
</section>
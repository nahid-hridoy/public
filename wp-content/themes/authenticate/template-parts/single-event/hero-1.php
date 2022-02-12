<?php
//

$event_reg_btn = get_field( 'event_reg_btn' );
$hb_reg_btn = get_field( 'hb_btn' );
$add_reg_btn = get_field( 'additional_btn_link' );
    //event-type-status
$event_status = get_field( 'select_event_status' );
$event_type = get_field( 'event_type' );

    //date
$event_start_date = get_field( 'start_ev_date_time' );
$event_end_date = get_field( 'end_ev_date_time' );

$eventDateStart = strtotime(get_field('start_ev_date_time'));
$eventDateEnd = strtotime(get_field('end_ev_date_time'));

$ev_start_day = date('d', $eventDateStart);
$ev_end_day = date('d', $eventDateEnd);



    //location
$event_location = get_field( 'ev_location' );

    //time
$event_start_time = get_field( 'acfname' );
$event_end_time = get_field( 'acfname' );

    //Hero Area
$event_hero_bg = get_field( 'ev_hero_background_image' );

    //Speakers
$event_speakers = get_field( 'acfname' );

    //sessions
$event_sessions_hours = get_field( 'acfname' );
$event_sessions = get_field( 'acfname' );
    //
$event_start_date = get_field( 'acfname' );
$event_start_date = get_field( 'acfname' );

    //countdown timer
$event_timer_info = get_field( 'acfname' );

    //form
$event_form_av = get_field( 'signup_vis' );

 //time
$event_time_av = get_field( 'time_visibility' );

//hero
$event_hero_av = get_field( 'hero_vis' );

//callout
$event_callout_av = get_field( 'callout_ves' );





    //month number start
$check_s_month = date('M', $eventDateStart);
if( $check_s_month == "Jan" ) {
  $check_s_month = "01";
}elseif( $check_s_month == "Feb" ){
  $check_s_month = "02";
}elseif( $check_s_month == "Mar" ){
  $check_s_month = "03";
}elseif( $check_s_month == "Apr" ){
  $check_s_month = "04";
}elseif( $check_s_month == "May" ){
  $check_s_month = "05";
}elseif( $check_s_month == "Jun" ){
  $check_s_month = "06";
}elseif( $check_s_month == "Jul" ){
  $check_s_month = "07";
}elseif( $check_s_month == "Aug" ){
  $check_s_month = "08";
}elseif( $check_s_month == "Sep" ){
  $check_s_month = "09";
}elseif( $check_s_month == "Oct" ){
  $check_s_month = "10";
}elseif( $check_s_month == "Nov" ){
  $check_s_month = "11";
}else {
  $check_s_month = "12";
}

    //month number end
$check_e_month = date('M', $eventDateEnd);
if( $check_e_month == "Jan" ) {
  $check_e_month = "01";
}elseif( $check_e_month == "Feb" ){
  $check_e_month = "02";
}elseif( $check_e_month == "Mar" ){
  $check_e_month = "03";
}elseif( $check_e_month == "Apr" ){
  $check_e_month = "04";
}elseif( $check_e_month == "May" ){
  $check_e_month = "05";
}elseif( $check_e_month == "Jun" ){
  $check_e_month = "06";
}elseif( $check_e_month == "Jul" ){
  $check_e_month = "07";
}elseif( $check_e_month == "Aug" ){
  $check_e_month = "08";
}elseif( $check_e_month == "Sep" ){
  $check_e_month = "09";
}elseif( $check_e_month == "Oct" ){
  $check_e_month = "10";
}elseif( $check_e_month == "Nov" ){
  $check_e_month = "11";
}else {
  $check_e_month = "12";
}

//unique date checker 
$unique_date_checker = 0;
if( ( $check_s_month == $check_e_month ) && ( $ev_start_day == $ev_end_day ) ){
  $unique_date_checker = 0;
}else{
  $unique_date_checker = 1;
}

?>

<section class="intro-section event-intro event-info-on-top intro-overlay-bottom <?php echo $event_status; ?>-template">
    <div class="intro-content">
        <div class="container">
        <div class="intro-content-wrapper">
            <div class="row">
            <div class="col-lg-7 col-xxl-8">
                <div class="event-meta event-meta-lg">

                <?php if( 1 == $event_time_av ): ?>
                    <time datetime="<?php echo $event_start_date; ?>">
                    <?php echo $check_s_month; ?>.<?php echo date('d', $eventDateStart); ?><?php if( 1 == $unique_date_checker ): ?>-<?php echo $check_e_month; ?>.<?php echo date('d', $eventDateEnd); ?><?php endif; ?>
                    </time>
                    <!-- <span class="meta-title"><?php echo $event_type; ?></span> -->
                <?php endif; ?>
                </div>
                <div class="event-intro-content">
                <h1 class="text-uppercase text-primary"><?php the_title(); ?> </h1>
                </div>

                <div class="event-reg-btn single-evnt-reg-btn">
                <?php if( $event_reg_btn ): 
                    $btn_title = $event_reg_btn['title'];    
                    $btn_url = $event_reg_btn['url'];
                    $link_target = $event_reg_btn['target'] ? $event_reg_btn['target'] : '_self';  
                    ?>
                    <a href="<?php echo esc_url( $btn_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn btn-primary"><?php echo esc_html( $btn_title ); ?><span class="external-link"><img src="<?php echo get_template_directory_uri(  ) ?>/images/external-link.svg" alt=""></span></a>

                <?php endif; ?>
                </div>

                <div class="event-reg-btn single-evnt-reg-btn">
                <?php if( $hb_reg_btn ): 
                    $hb_btn_title = $hb_reg_btn['title'];    
                    $hb_btn_url = $hb_reg_btn['url'];
                    $hb_link_target = $hb_reg_btn['target'] ? $hb_reg_btn['target'] : '_self';  
                    ?>
                    <a href="<?php echo esc_url( $hb_btn_url ); ?>" target="<?php echo esc_attr( $hb_link_target ); ?>" class="btn btn-primary"><?php echo esc_html( $hb_btn_title ); ?></a>

                <?php endif; ?>

                </div>

                <div class="event-reg-btn single-evnt-reg-btn">
                <?php if( $add_reg_btn ): 
                    $hb_btn_title = $add_reg_btn['title'];    
                    $hb_btn_url = $add_reg_btn['url'];
                    $hb_link_target = $add_reg_btn['target'] ? $add_reg_btn['target'] : '_self';  
                    ?>
                    <a href="<?php echo esc_url( $hb_btn_url ); ?>" target="<?php echo esc_attr( $hb_link_target ); ?>" class="btn btn-primary"><?php echo esc_html( $hb_btn_title ); ?></a>

                <?php endif; ?>

                </div>

            </div>
            </div>
        </div>
        </div>
        <!-- addition CLASS custom-overlay  -->
        <?php
        $hero_bg = get_field( 'hero_bg' );
        ?>
        <span class="intro-overlay custom-overlay">
        <?php if( !empty( $hero_bg ) ): ?>
        <img src="<?php echo esc_url( $hero_bg['url'] ); ?>" alt="<?php echo esc_attr( $hero_bg['alt'] ); ?>"" />
        <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/intro-bg-1.png" alt="image description" />
        <?php endif; ?>
        </span>
    </div>
</section>
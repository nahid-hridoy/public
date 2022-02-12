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

<style>
  span.external-link img {
    width: 1.2rem;
    margin-left: 1rem;
  }
</style>

<div class="page-holder">
  <main class="main">
    <div class="single-event-blocks">
      <!-- intro section -->
      <!-- additional CLASS event-intro -->
      <!-- additional CLASS "event-info-on-top" to move event info to top-->
      <!-- additional CLASS "intro-overlay-bottom"  to move overlay to bottom on mobile-->
      
      <?php $hero_temp = get_field( 'ev_hero_temp' ); ?>

      <?php if( 'hero_1' == $hero_temp ): ?>
        <?php get_template_part( 'template-parts/single-event/hero-1' ); ?>
      <?php else: ?>
        <?php get_template_part( 'template-parts/single-event/hero-2' ); ?>
      <?php endif; ?>

      <?php
      $ct_vis = get_field( 'count_time_visibility' );
      ?>
      <?php if( 1 == $ct_vis ): ?>
        <!-- countdown section  -->
        <section id="countdown" class="event-countdown-section bg-primary text-white skew-lr decorated-section mt-xl-n5">
          <span class="decor"></span>
          <div class="container">
            <!-- event form  -->
            <div class="event-form-wrapper">
              <div class="row justify-content-end">
                <div class="col-lg-5 col-xxxl-6">
                  <div class="event-form-overlay">

                    <?php if( 1 == $event_form_av ): ?>
                      <?php get_template_part( 'template-parts/single-event/signup-form' ); ?>
                    <?php endif; ?>


                  </div>
                </div>
              </div>
            </div>
            <!-- Countdown Timer Start -->
            <?php get_template_part( 'template-parts/single-event/countdown-timer' ); ?>
            <!-- Countdown Timer eND -->
          </div>
        </section>
      <?php endif; ?>
      <!-- content section Start-->
      <?php get_template_part( 'template-parts/single-event/content-section' ); ?>
      <!-- content section End-->

      <!-- featured experience section Start-->
      <?php get_template_part( 'template-parts/single-event/experience-section' ); ?>
      <!-- featured experience section End-->

      <!-- featured keynote section Start-->
      <?php get_template_part( 'template-parts/single-event/featured-keynote-section' ); ?>
      <!-- featured keynote section End-->

      <!-- Featured Speakers section Start-->
      <?php get_template_part( 'template-parts/single-event/speaker-section' ); ?>
      <!-- Featured Speakers section End-->

      <!-- session section  Start-->
      <?php  $agenda_status_now = get_field( 'select_agenda_status' ); ?>
      <?php if( 'accordion' == $agenda_status_now ): ?>
       <?php get_template_part( 'template-parts/single-event/agenda-section-accordion' ); ?>
       <?php elseif( 'grid' == $agenda_status_now ): ?>
       <?php get_template_part( 'template-parts/single-event/agenda-section-day-filter' ); ?>
      <?php else: ?>
       <?php get_template_part( 'template-parts/single-event/agenda-section-type-filter' ); ?>
     <?php endif; ?>
      <!-- session section End -->

      <?php
     $sponsor_vis = get_field( 'sponsor_visibility' );
     ?>
     <?php if( 1 == $sponsor_vis ): ?>
      <!-- spnsor area start  -->
      <?php get_template_part( 'template-parts/single-event/sponsor-section-mixed-new' ); ?>
      <!-- spnsor area end  -->
    <?php endif; ?>

      

      <!-- callout section/Become a Sponsor  Section Start-->
      <?php if( 1 == $event_callout_av ): ?>
        <?php get_template_part( 'template-parts/single-event/callout-section' ); ?>
      <?php endif; ?>
      <!-- callout section/Become a Sponsor section  End-->


      <!-- Pricing Section Start-->
      <!-- <?php get_template_part( 'template-parts/single-event/pricing-section' ); ?> -->
      <!-- Pricing Section End-->


      <!-- featured resgister section Start-->
      <?php get_template_part( 'template-parts/single-event/register-pricing-section' ); ?>
      <!-- featured resgister section End-->


      <!-- HOTEL & MAP Section Start-->
      <?php get_template_part( 'template-parts/single-event/hotel-map-section' ); ?>
      <!-- HOTEL & MAP Section End-->
      
      


     

    <?php
    $faqs_visibility = get_field( 'faqs_visibility' );
    ?>
    <?php if( 1 == $faqs_visibility ): ?>
      <!-- faqs area start  -->
      <?php get_template_part( 'template-parts/single-event/faqs' ); ?>
      <!-- faqs area end  -->
    <?php endif; ?>

    <!-- global form section start -->
    <?php get_template_part( 'template-parts/single-event/global-signup-form' ); ?>
    <!-- global form section end -->


  </div>
</main>
</div>

<style type="text/css">
.map-section{
  margin-top: 4rem;
}
.acf-map {
  width: 100%;
  height: 400px;
  border: #ccc solid 1px;
  margin: 20px 0;
}
.acf-map img {
 max-width: inherit !important;
}
</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7IuOflifct9IyL7WB-BcWFczbYE8cVWA"></script>
<script type="text/javascript">
  (function( $ ) {

    function initMap( $el ) {

    // Find marker elements within map.
    var $markers = $el.find('.marker');

    // Create gerenic map.
    var mapArgs = {
      zoom        : $el.data('zoom') || 16,
      mapTypeId   : google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map( $el[0], mapArgs );

    // Add markers.
    map.markers = [];
    $markers.each(function(){
      initMarker( $(this), map );
    });

    // Center map based on markers.
    centerMap( map );

    // Return map instance.
    return map;
  }

  function initMarker( $marker, map ) {

    // Get position from marker.
    var lat = $marker.data('lat');
    var lng = $marker.data('lng');
    var latLng = {
      lat: parseFloat( lat ),
      lng: parseFloat( lng )
    };

    // Create marker instance.
    var marker = new google.maps.Marker({
      position : latLng,
      map: map
    });

    // Append to reference for later use.
    map.markers.push( marker );

    // If marker contains HTML, add it to an infoWindow.
    if( $marker.html() ){

        // Create info window.
        var infowindow = new google.maps.InfoWindow({
          content: $marker.html()
        });

        // Show info window when marker is clicked.
        google.maps.event.addListener(marker, 'click', function() {
          infowindow.open( map, marker );
        });
      }
    }

    function centerMap( map ) {

    // Create map boundaries from all map markers.
    var bounds = new google.maps.LatLngBounds();
    map.markers.forEach(function( marker ){
      bounds.extend({
        lat: marker.position.lat(),
        lng: marker.position.lng()
      });
    });

    // Case: Single marker.
    if( map.markers.length == 1 ){
      map.setCenter( bounds.getCenter() );

    // Case: Multiple markers.
  } else{
    map.fitBounds( bounds );
  }
}

// Render maps on page load.
$(document).ready(function(){
  $('.acf-map').each(function(){
    var map = initMap( $(this) );
  });
});

})(jQuery);
</script>
<?php
$sg_title = get_field( 'global_signup_form_title', 'option' );
$sg_desc = get_field( 'global_signup_form_desc', 'option' );
$sg_form = get_field( 'global_signup_form_id', 'option' );

$alternate_title = get_field( 'alternate_title_for_event_forms', 'option' );
if( 1 == $alternate_title ){
  $sg_title = get_field( 'event_global_form_title', 'option' );
}
$alternate_desc = get_field( 'alternate_desc_for_event_forms', 'option' );
if( 1 == $alternate_desc ){
  $sg_desc = get_field( 'event_global_form_desc', 'option' );
}

?>

<style>
  .sg-form iframe {
    padding: 0 !important;
    border: none;
    margin: 0px !important;
    margin-top: -4% !important;
    width: 100% !important;
    min-width: 100% !important;
    min-height: 500px !important;
    overflow: hidden !important;
    overflow-x: hidden !important;
    overflow-y: hidden !important;
  }
</style>

<section id="sign-up" class="form-section bg-primary text-white">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="section-heading">
          <h2 class="text-uppercase h1"><?php echo $sg_title; ?></h2>
          <div class="section-heading-text text-secondary lead width-md">
            <?php echo wpautop( $sg_desc ); ?>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 mx-auto">
        <!-- <?php //echo do_shortcode('[fluentform id='.$sg_form.']'); ?> -->
        <div class="sg-form" id="sg-form-div">
          <!--Sendgrid form -->
          <iframe src="https://cdn.forms-content.sg-form.com/7acb85ff-aea3-11eb-aa93-92aca22e4719"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
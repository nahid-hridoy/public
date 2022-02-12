<?php
    $ev_form_title = get_field( 'signup_title' );
    $ev_form_desc = get_field( 'signup_desc' );
    $ev_form_id = get_field( 'signup_form_id' );

?>

<div class="event-form">
    <h2 class="form-title text-primary"><?php echo $ev_form_title; ?></h2>
    <p class="form-sub"><?php echo $ev_form_desc; ?></p>
    <div class="single-ev-form" id="single-ev-form">
        <?php echo do_shortcode('[fluentform id='.$ev_form_id.']'); ?>
    </div>
</div>
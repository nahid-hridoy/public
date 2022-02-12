<?php
$sg_title = get_field( 'global_signup_form_title', 'option' );
$sg_desc = get_field( 'global_signup_form_desc', 'option' );
$sg_form = get_field( 'global_signup_form_id', 'option' );
$sg_form_code = get_field( 'global_signup_form_code', 'option' );
?>

<style>
    div#root form.form_15iP5 header {
        display: none;
    }

    .form_15iP5 h1, .form_15iP5 p{
        display: none !important;
    }

    form.form_15iP5 h1,
    form.form_15iP5 p {
        display: none !important;
    }

    .fields-wrapper_316Zq {
        display: none !important;
    }

    .form_15iP5 .fields-wrapper_316Zq header {
        display: none !important;
    }

    .form_15iP5 {
        min-width: 500px !important;
        width: 500px !important;
        background-color: rgb(51 56 64) !important;
        color: rgb(255 255 255) !important;
        border-color: rgb(0, 0, 0) !important;
        border-width: 0px !important;
        border-radius: 4px !important;
        padding: 0px !important;
        margin: 0px auto 0 !important;
    }

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

    form.form_15iP5 label {
        font-weight: 200 !important;
        margin-bottom: 1rem !important;
    }
</style>

<section class="form-section bg-secondary text-white py-xxl-13">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="section-heading">
                    <h2 class="text-uppercase display-1"><?php echo $sg_title; ?></h2>
                    <div class="section-heading-text">
                        <?php echo wpautop( $sg_desc ); ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 mx-auto">
                <!-- <?php //echo do_shortcode('[fluentform id='.$sg_form.']'); ?> -->
                <div class="sg-form" id="sg-form-div">
                    <!--Sendgrid form -->
                    <?php echo $sg_form_code; ?>
                </div>
            </div>
        </div>
    </div>
</section>
 <?php get_header(); ?>

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

<div class="page-holder">
  <main class="main">
    <div class="signup-blocks">
      <section class="intro-section bg-secondary text-white">
        <div class="intro-content">
          <div class="container">
            <div class="intro-content-wrapper">
              <div class="row">
                <div class="col-lg-6">
                  <h1 class="text-uppercase text-primary">Sign up for updates</h1>
                  <div class="section-heading-text">
                    <p>
                      Get the latest news about<br />
                      Authenticate 2021!
                    </p>
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
          </div>
          <span class="intro-overlay d-none d-md-block" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/intro-bg-dark.jpg)"></span>
        </div>
      </section>
    </div>
  </main>
</div>

<?php get_footer(); ?>
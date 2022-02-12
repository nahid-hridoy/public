<?php
    $intro_logo = get_field('intro_logo');
    $hero_title = get_field('hero_title');
    $hero_text = get_field('hero_text');
    $hero_bg = get_field('hero_bg');

?>

<section class="intro-section fullscreen-intro bg-secondary text-white">
<div class="intro-content">
  <div class="container">
    <div class="intro-content-wrapper">
      <div class="row">
        <div class="col-md-8 col-xl-7">
          <div class="intro-logo">
            <!-- intro logo -->
            <img src="<?php echo esc_url( $intro_logo['url'] ) ?>" alt="<?php echo esc_attr( $intro_logo['alt'] ) ?>">
          </div>
          <h2 class="display-3"><?php echo $hero_title; ?></h2>
          <?php echo wpautop($hero_text); ?>
        </div>
      </div>
    </div>
  </div>
  <span class="intro-overlay" style="background-image: url(<?php echo esc_url( $hero_bg['url'] ) ?>)"></span>
</div>
</section>
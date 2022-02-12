<style>

    .intro-content.single-slide {
        min-height: 90vh;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }

    .hero-carousel .owl-nav button {
        position: absolute;
        left: 0;
        top: 50%;
        color: #25cc7e !important;
        background: #fff !important;
        z-index: 3;
        font-size: 20px !important;
        transition: .5s;
        width: 30px;
        opacity: 0.6;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=60)";
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }


    .hero-carousel .owl-nav button:hover {
        background: #333 !important;
    }

    .intro-content-wrapper{
        padding-top: 16rem;
    }

    .hero-carousel .owl-nav button.owl-next {
        left: auto;
        right: 0rem;
        width: 50px;
    }

    .hero-carousel .owl-nav button.owl-prev{
        left: 0rem;
        width: 50px;
    }

    .hero-carousel .owl-nav button.owl-prev, 
    .hero-carousel .owl-nav button.owl-next {
        color: #25cc7e !important;
        background: #fff !important;
        transition: .5s;
        z-index: 999999999999999999999999;
        padding: 20px !important;
        transition: .5s;
    }

    .hero-carousel .owl-nav button.owl-prev:hover, 
    .hero-carousel .owl-nav button.owl-next:hover {
        background: #333 !important;
    }

    @media only screen and (max-width: 767px) {

        .hero-carousel .owl-nav {
            display: none;
        }

        .intro-content-wrapper{
            padding-top: 10rem;
        }

    }


</style>

<section class="intro-section fullscreen-intro bg-secondary text-white hero-carousel owl-carousel">
<?php
    if( have_rows('add_hero_slide') ):
    while( have_rows('add_hero_slide') ) : the_row();

    $slide_logo = get_sub_field('h_intro_logo');
    $slide_title = get_sub_field('hero_slide_title');
    $slide_desc = get_sub_field('hero_slide_desc');
    $slide_btn = get_sub_field('hero_button');
    $slide_btn_color = get_sub_field('hero_button_color');

    $slide_btn2 = get_sub_field('hero_button_2');
    $slide_btn_color2 = get_sub_field('hero_button_color_2');

    $slide_bg_img = get_sub_field('hero_bg_image');
?>

<div class="intro-content single-slide" style="background-image: url(<?php echo esc_url( $slide_bg_img['url'] ) ?>)">
  <div class="container">
    <div class="intro-content-wrapper">
      <div class="row">
        <div class="col-md-8 col-xl-7 slider-content">
          <div class="intro-logo">
            <!-- intro logo -->
            <img src="<?php echo esc_url( $slide_logo['url'] ) ?>" alt="<?php echo esc_attr( $slide_logo['alt'] ) ?>">
          </div>
          <h2 class="display-3"><?php echo $slide_title; ?></h2>
          <?php echo wpautop($slide_desc); ?>

            <?php if( $slide_btn2 ): 
                $btn_title = $slide_btn2['title'];    
                $btn_url = $slide_btn2['url'];
                $link_target = $slide_btn2['target'] ? $slide_btn2['target'] : '_self';  
            ?>
                <a href="<?php echo esc_url( $btn_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn btn-primary additional-btn" style="background-color:<?php echo $slide_btn_color2; ?>; border-color: <?php echo $slide_btn_color;?> "><?php echo esc_html( $btn_title ); ?></a>
                </br>
            <?php endif; ?>

            <?php if( $slide_btn ): 
                $btn_title = $slide_btn['title'];    
                $btn_url = $slide_btn['url'];
                $link_target = $slide_btn['target'] ? $slide_btn['target'] : '_self';  
            ?>
                <a href="<?php echo esc_url( $btn_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn btn-primary slider-btn" style="background-color:<?php echo $slide_btn_color; ?>; border-color: <?php echo $slide_btn_color;?> "><?php echo esc_html( $btn_title ); ?></a>
                </br>
            <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
  <!-- <span class="intro-overlay" style="background-image: url(<?php echo esc_url( $slide_bg_img['url'] ) ?>)"></span> -->
</div>
<?php endwhile; endif; ?>

</section>
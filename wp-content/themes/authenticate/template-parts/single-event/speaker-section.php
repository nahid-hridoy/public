<?php
    $speakers_vis = get_field( 'speakers_vis' );
?>
<?php if( 1 == $speakers_vis ): ?>
<style>
.single-event .member-card{
    max-width: 92%;
}

.other-members {
    margin-bottom: 5rem;
}

span.normal-acc, span.expand-acc {
    width: 2rem;
}

/* # The Rotating Marker # */
details summary::-webkit-details-marker { display: none; }
summary::before {
  font-family: "Ubuntu", "Helvetica Neue", Arial, "Noto Sans", sans-serif;
  content: "▶";
  position: absolute;
  top: 1rem;
  left: 0.8rem;
  transform: rotate(0);
  transform-origin: center;
  transition: 0.2s transform ease;
}
details[open] > summary:before {
  transform: rotate(90deg);
  transition: 0.45s transform ease;
}

/* # The Sliding Summary # */
details { overflow: hidden; }
details summary {
  position: relative;
  z-index: 10;
}
@keyframes details-show {
  from {
    margin-bottom: -80%;
    opacity: 0;
    transform: translateY(-100%);
  }
}

details.speaker-acc {
    min-width: 100%;
    display: block;
    overflow: visible;
    margin-bottom: 1rem;
    /* margin-top: 1rem; */
}

@supports (-webkit-touch-callout: none) {
  details.style3 summary::before { top: 1.6rem; }
  details[open].style3 > summary:before { top: 1.3rem; transition: all 0.8s; }
}

/* # Style 4 # */
details.style4 summary {
  padding-right: 2.2rem;
  padding-left: 1rem;
}
details.style4 summary::before {
  content: ">";
  color: #FFF;
  font-size: 3rem;
  line-height: 2rem;
  transform: rotate(-45deg);
  top: 1.2rem;
  left: unset;
  right: 0.6rem;
  display: none;
}
/* details[open].style4 > summary:before {
  transform: rotate(90deg);
  color: #27cc7e !important;
  transition: color ease 2s, transform ease 1s;
  display: block;
} */


/* # Just Some Pretty Styles # */

img { max-width: 100%; }
p { margin: 0; padding-bottom: 10px; }
p:last-child { padding: 0; }
details {
  max-width: 100%;
  box-sizing: border-box;
  margin-top: 5px;
  background: transparent;
}
summary {
  border: 4px solid transparent;
  outline: none;
  padding: 1rem;
  display: block;
  background: #27cc7e;
  color: #fff;
  padding-left: 2.2rem;
  position: relative;
  cursor: pointer;
}
details[open] summary,
summary:hover {
    color: #27cc7e;
    background: #333840;
    transition: .5s;
}
summary:hover strong,
details[open] summary strong,
summary:hover::before,
details[open] summary::before {
  color: #FFA128;
}
.content {
  padding: 10px;
  border: none;
  border-top: none;
}

summary.speaker-header-acc {
    font-size: 2.125rem;
    text-align: center;
    text-transform: uppercase;
    font-weight: 700;
    font-family: "Ubuntu", "Helvetica Neue", Arial, "Noto Sans", sans-serif;
    transform: skew(-40deg);
}

summary.speaker-header-acc span{
    transform: skew(40deg);
    display: inline-block;
}

span.normal-acc {
    line-height: 1;
    float: right;
    margin-top: .5rem;
    transition: .4s;
}

span.normal-acc.hide {
    display: none !important;
    
}

span.expand-acc {
    line-height: 1;
    float: right;
    margin-top: .5rem;
    display: none !important;
    transition: .4s;
}

span.expand-acc.show {
    display: block !important;
}

@media only screen and (max-width: 767px) {
    .single-event .member-card{
        max-width: 97%;
    }

    span.normal-acc, span.expand-acc {
        width: 1.5rem;
        line-height: 1;
        margin: 0;
    }

    summary.speaker-header-acc {
        transform: skew(-30deg);
        font-size: 1.1rem;
        padding: 1rem !important;
    }

    summary.speaker-header-acc span {
        font-size: 1rem;
        transform: skew(30deg);
    }

    details.style4 summary::before {
        font-size: 2rem;
        line-height: 1rem;
    }

    .other-members {
        margin-bottom: 5rem;
        margin-left: 2rem;
        margin-right: 2rem;
    }
}

</style>
<section id="speakers" class="featured-members">
<div class="container">
    <div class="section-heading text-center">
    <h2 class="text-uppercase text-primary">Featured Speakers</h2>
    </div>
    <div class="speakers-wrapper">
    <?php  
      $speakers= get_field('add_speakers');
      if( $speakers ): ?>
    <div class="row">

    <?php 
        foreach( $speakers as $post ): 
        setup_postdata($post); 
    ?>

        <?php
            //setup_postdata( $post ); 
            $blg_featured_img = get_the_post_thumbnail_url();
            if (empty($blg_featured_img))
            {
                $blg_featured_img = "/wp-content/uploads/inf-2.jpg";
            }
            $postid = get_the_ID();
        ?>
        <!-- single member -->
        <div class="col-sm-6 col-lg-3 col-xxl-3 d-flex flex-direction-column">
        <div class="member-card">
            <div class="member-card-image">
            <a href="<?php the_permalink(); ?>">
                <img src="<?php echo esc_url( $blg_featured_img ); ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" />
            </a>
            </div>
            <div class="member-card-body">
            <h4 class="text-primary member-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php $sp_jobs = get_field( 'add_jobs', $post->ID ) ?>
            <?php if( $sp_jobs ): ?>
                <?php 
                foreach ($sp_jobs as $sp_job ): 
                    $fet_job = $sp_job['main_job'];
                ?>
                <?php $sp_jobs = get_field( 'add_jobs', $post->ID )?>
                <?php if( 1 == $fet_job ): ?>
                    <?php $sp_pos = $sp_job['job_comp']; ?>
                    <p><?php echo  $sp_job['job_Name'] ; ?><?php if( $sp_pos ): ?>, <b><?php echo $sp_pos; ?></b><?php endif; ?></p>
                <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
            <ul class="social">
                <?php $sp_socials = get_field( 'social_links', $post->ID ) ?>
                <?php if( $sp_socials ): ?>
                <?php 
                    foreach ($sp_socials as $sp_social ): 
                    $sp_social_link = $sp_social['link'];
                    $socialMedia = $sp_social['social_media'];
                ?>
                <li>
                    <a href="<?php echo esc_url( $sp_social_link ); ?>">
                        <span class="<?php if( $socialMedia == 'facebook' ){
                                        echo 'icon-facebook';
                                    }elseif( $socialMedia == 'twitter' ){
                                        echo 'icon-twitter';
                                    }elseif( $socialMedia == 'linkedin' ){
                                        echo 'icon-linkedin';
                                    }else{
                                        echo 'icon-instagram';
                                    } ?>"></span>
                    </a>
                </li>
                <?php endforeach; ?>
                <?php endif; ?>
            </ul>
            </div>
        </div>
        </div>
        <!-- single member -->
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    </div>
    <!-- <div class="section-btn text-center">
    <a href="#" class="btn btn-primary btn-lg">View All Event Speakers</a>
    </div> -->
</div>
</section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<?php
    $speakers_vis = get_field( 'speakers_vis' );
    $speakers_vis_od = get_field( 'speakers_vis_od' );
    $speakers_vis_reg = get_field( 'speakers_vis_reg' );
?>
<?php if( 1 == $speakers_vis_od || 1 == $speakers_vis_reg ): ?>
<section id="speakers" class="other-members">
    <div class="container">
        <div class="row">


        <?php if( 1 == $speakers_vis_od ): ?>
        <details class="style4 speaker-acc">
            <summary class="speaker-header-acc">
                <span>On-Demand Speakers</span>
                <span class="normal-acc"><img src="<?php echo get_template_directory_uri(  ) ?>/images/plus-v1.svg" alt=""></span>
                <span class="expand-acc"><img src="<?php echo get_template_directory_uri(  ) ?>/images/arrow-down.svg" alt=""></span>
            </summary>
            <div class="content">
                <?php get_template_part( 'template-parts/single-event/on-demand-speakers' ); ?>
            </div>
        </details>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

        <?php if( 1 == $speakers_vis_reg ): ?>
        <details class="style4 speaker-acc">
            <summary class="speaker-header-acc">
                <span>Speakers</span>
                <span class="normal-acc"><img src="<?php echo get_template_directory_uri(  ) ?>/images/plus-v1.svg" alt=""></span>
                <span class="expand-acc"><img src="<?php echo get_template_directory_uri(  ) ?>/images/arrow-down.svg" alt=""></span>
            </summary>
            <div class="content">
                <?php get_template_part( 'template-parts/single-event/regular-speakers' ); ?>
            </div>
        </details>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

        
        </div>
    </div>
</section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<style>
@media (min-width:1024px){
    .speakers-wrapper .col-sm-6{
    margin: 0 auto;
}
}
</style>

<script type="text/javascript" >
    // Fetch all the details element.
const details = document.querySelectorAll("details");

// Add the onclick listeners.
details.forEach((targetDetail) => {
  targetDetail.addEventListener("click", () => {
    // Close all the details that are not targetDetail.
    details.forEach((detail) => {
      if (detail !== targetDetail) {
        detail.removeAttribute("open");
      }
    });
  });
});


</script>
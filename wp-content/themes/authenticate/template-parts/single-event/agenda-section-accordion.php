<?php
    wp_reset_query();
    $agenda_visibility = get_field( 'agenda_visibility', $current_post_id );
    if ( $agenda_visibility ) {
    ?>
    <section id="agenda" class="accordion-section ss decorated-section persective-lr bg-secondary text-white">
        <span class="decor"></span>
        <div class="container">
            <div class="section-heading">
                <h2 class="text-uppercase text-primary accordion-title"><?php the_field( 'agenda_heading' );?></h2>
                <div class="section-heading-text width-sm">
                    <p><?php the_field( 'agenda_sub_heading' );?></p>
                </div>
            </div>
            <!-- base accordion -->
<?php $session_vis = get_field( 'session_visibility' );?>
<?php if ( 1 == $session_vis ): ?>
<?php
    $featured_posts = get_field( 'add_sessions' );
        if ( $featured_posts ):
    ?>
                <div class="accordion base-accordion" id="base-accordion" style="margin-top:0px !important">
                    <ul style="padding-left:0 !important;">
                        <?php $i = 0;
                                foreach ( $featured_posts as $post ):
                                    setup_postdata( $post );
                                ?>
	                            <li class="card">
	                                <div class="card-header" id="base-accordion-opener-<?php echo $i; ?>">
	                                    <button
	                                        data-text-close="See more +"
	                                        data-text-open="See less -"
	                                        class="btn btn-link"
	                                        type="button"
	                                        data-toggle="collapse"
	                                        data-target="#base-accordion-slide-<?php echo $i; ?>"
	                                        aria-expanded="false"
	                                        aria-controls="base-accordion-slide-<?php echo $i; ?>"
	                                        >
	            <?php the_title();?>
	                                    </button>
	                                </div>


	                                <div id="base-accordion-slide-<?php echo $i; ?>" class="collapse" aria-labelledby="base-accordion-opener-<?php echo $i; ?>" data-parent="#base-accordion">
	                                    <div class="card-body" style="padding-left:0px !important;; padding-right:0px !important;">
	                                        <!-- callout block -->
	                                        <div class="callout-block">
	                                            <div class=" align-item-center">
												<?php $agenda_end_time = get_field( 'end_time' );?>
												<div class="row">
												  <div class="col-lg-12" ><div class="session-details"><strong class="day-number"><?php the_field( 'w_day' );?> </strong>  <span class="day-time"><strong>Start Time</strong><?php the_field( 'start_time' );?><?php if ( $agenda_end_time ): ?> - <strong>End Time</strong><?php endif;?><?php the_field( 'end_time' );?></span></div></div>
											  <hr>
											</div>
                                              <div class="box-callout" >
                                            
                                            <?php $session_content = get_the_content(); ?>
                                            <?php
                                                //setup_postdata( $post ); 
                                                $blg_featured_img = get_the_post_thumbnail_url();
                                                if (empty($blg_featured_img))
                                                {
                                                    $blg_featured_img = "/wp-content/uploads/inf-2.jpg";
                                                }
                                                $postid = get_the_ID();
                                            ?>
                                            <?php if( $session_content ): ?>
                                              <div class="card-body">
                                                <!-- callout block -->
                                                    <div class="callout-block">
                                                        <div class="row align-item-center">
                                                            <div class="col-lg-5">
                                                            <div class="callout-image">
                                                                <img src="<?php echo esc_url( $blg_featured_img ); ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?> image description" />
                                                            </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                            <div class="callout-content">
                                                                <?php echo wpautop( $session_content ); ?>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>


                                              </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php $i++;
                            endforeach;?>
                    </ul>
        <?php
            // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata();
            ?>
                </div>
    <?php
    endif;endif;?>
        </div>
    </section>


<?php
} else {?>

<?php
}?>


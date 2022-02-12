<?php
$experience_vis = get_field( 'experience_vis' );
?>
<?php if( 1 == $experience_vis ): ?>

<section id="experience" class="pb-md-10 pt-md-0 py-5">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="text-uppercase text-primary">Experience</h2>
            </div>
            <div class="experience-wrapper">
                <div class="row d-flex">

                <?php //vars
                $ex_content_left  = get_field( 'experience_content_left' );
                $ex_content_right = get_field( 'experience_content_right' ); ?>

                <?php if( !empty( $ex_content_left ) ): ?>
                    <div class="col-md-6">
                        <?php echo $ex_content_left; ?>
                    </div>
                <?php endif; ?>

                <?php if( !empty( $ex_content_right ) ): ?>
                    <div class="col-md-6">
                        <?php echo $ex_content_right; ?>
                    </div>
                <?php endif; ?>
                </div>

            </div>
        </div>
</section>
<?php endif; ?>
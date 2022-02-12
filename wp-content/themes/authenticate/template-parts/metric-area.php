<?php
    $metrics_title = get_field('metrics_title');
?>


<section class="metric-section decorated-section skew-lr bg-primary text-white mt-0">
    <span class="decor"></span>
    <div class="container">
    <div class="section-heading text-center">
        <h2 class="text-uppercase"><?php echo $metrics_title; ?></h2>
    </div>
    <div class="metrics-wrapper">
        <div class="row justify-content-center">

        <?php
            if( have_rows('add_metrics') ):
                while( have_rows('add_metrics') ) : the_row();

                $met_val = get_sub_field('met_value');
                $met_point_desc = get_sub_field('met_value_desc');
        ?>
        <!-- metrics item -->
        <div class="col-md-6 col-lg-6">
            <div class="metrics-item">
            <span class="metrics-value"><?php echo $met_val; ?></span>
            <div class="metrics-text text-secondary">
                <?php echo wpautop( $met_point_desc ); ?>
            </div>
            </div>
        </div>
        <!-- metrics item -->
        <?php endwhile; endif; ?>
        

        </div>
    </div>
    </div>
</section>
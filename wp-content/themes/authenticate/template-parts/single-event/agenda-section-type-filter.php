<?php
wp_reset_query();
$agenda_visibility = get_field( 'agenda_visibility', $current_post_id );
if ( $agenda_visibility ):
    ?>

    <style>
    ul#filter-list li {
        display: inline-block;
        margin-right: 2rem;
    }

    .filter-head {
        margin-bottom: 1rem;
    }

    ul#filter-list {
        padding: 0;
        display: inline-block;
    }
    ul li.filter-value a {
        color: #fff;
        transition: .4s;
    }

    button.filter-value.control.active,
    button.filter-value.control.mixitup-control-active {
        color: #25cc7e !important;
        text-decoration: underline;
    }

    button.filter-value.control:hover {
        cursor: pointer;
        color: #25cc7e !important;
        text-decoration: underline;
    }

    button.filter-value.control {
        background: transparent;
        border: none;
        color: #fff;
        display: inline-block;
        margin-right: 1rem;
        transition: .4s;
    }

    .session.ses-card {
        min-height: 240px;
    }

</style>
<!-- session section  -->
<section id="agenda" class="session-section decorated-section skew-lr bg-secondary text-white">
    <span class="decor"></span>
    <div class="container">
        <!-- session filter holder -->
        <div class="session-filter-holder">
            <div class="session-filter-content">
                <div class="section-heading">
                    <h2 class="text-uppercase"><?php the_field( 'agenda_heading' );?></h2>
                    <div class="section-heading-text width-sm">
                        <p><?php the_field( 'agenda_sub_heading' );?></p>
                    </div>
                </div>

                <div class="sessions-wrapper filter-section">

                    <!-- <span class="filter-value text-primary">Day 1, Nov 25</span> -->
                    
                    <div class="filter-head">
                        <div id="filter-list" class="filter-values controls">
                            <?php
                            $featured_posts = get_field( 'add_sessions' );
                            if ( $featured_posts ):
                                ?>
                                <?php $i = 0;
                                foreach ( $featured_posts as $post ):
                                    setup_postdata( $post );
                                    ?>
                                    <?php
                                    $session_type = get_field( 'session_type' );
                                    $wp_day[] = $session_type['label'];
                                    $unique_dates = array_unique($wp_day);
                                    //var_dump($unique_dates);
                                    ?>
                                <?php endforeach; endif; ?>
                                <?php
                                $date_c = 0;
                                $date_cx = 0;
                                foreach ( $unique_dates as $unique_date ):
                                    $date_c++;
                                    $date_cx++;
                                    ?>
                                    <?php
                                        $day_val = $unique_date;
                                        $day_val = preg_replace('/\s*/', '', $day_val);
                                        // convert the string to all lowercase
                                        $day_val = strtolower($day_val);
                                    ?>
                                    <button type="button" id="DayBtn<?php echo $date_cx; ?>" class="filter-value control <?php if( 1 == $date_cx ):?>mixitup-control-active<?php endif; ?> text-white" data-filter=".<?php echo $day_val; ?>"><?php echo $unique_date; ?></button>
                                <?php endforeach;  wp_reset_postdata(); ?>
                            </div>
                        </div>
                        

                        <div class="session-grid session-grid-2 row scroll" data-target=".session">
                            <?php $session_vis = get_field( 'session_visibility' );?>
                            <?php if ( 1 == $session_vis ): ?>
                                <?php
                                $featured_posts = get_field( 'add_sessions' );
                                if ( $featured_posts ):
                                    ?>
                                    <?php $i = 0;
                                    foreach ( $featured_posts as $post ):
                                        setup_postdata( $post );
                                        ?>
                                        <?php get_template_part( 'template-parts/single-event/session-type-filtering' ); ?>
                                        <!-- session -->
                                    <?php endforeach; endif; endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif; wp_reset_postdata();  ?>
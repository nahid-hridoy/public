<?php
/**
 * Template Name: Speakers Page
 * The template for displaying Blog page.
 */
?> 

<?php get_header(); ?>

<?php
  $page_title = get_field( 'sp_page_title' );
  $pageBtm_title = get_field( 'sp_btm_page_title' );
  $speaker_page_button = get_field( 'sp_p_button_link' ); 
?>
<style>
.sponsors-list.signature-sponsors li {
    width: 24.33% !important;
}
</style>

<div class="page-holder">
  <main class="main">
    <div class="speakers-blocks">
      <!-- speakers section -->
      <section class="speaker-section custom-filtration">
        <div class="container">
          <div class="section-heading text-center">
            <h1 class="text-uppercase text-primary">
            <?php echo $page_title; ?>
            </h1>
            <!-- filter navbar -->
            <nav class="navbar navbar-expand-xl navbar-light navbar-filter">
              <button
              class="filter-toggler d-xl-none"
              type="button"
              data-toggle="collapse"
              data-target="#filterNav"
              aria-controls="filterNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
              >
              <span class="icon-filter"></span>
              <span class="toggler-text">Filter</span>
            </button>
            <div class="collapse navbar-collapse" id="filterNav">
              <div class="collapse-inner justify-content-xl-center">
                <button
                class="navbar-toggler filter-toggler d-xl-none"
                type="button"
                data-toggle="collapse"
                data-target="#filterNav"
                aria-controls="filterNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
                >
                <span class="navbar-toggler-icon"></span>
              </button>
              <ul class="navbar-nav filter-buttons">

                <li class="nav-item active">
                  <a class="nav-link" href="#" data-filter="*">ALl</a>
                </li>
                <?php
                $speaker_terms = get_terms([
                    'taxonomy' => 'Speaker-Category',
                    'hide_empty' => false,
                ]);
                foreach($speaker_terms as $speaker_term):
                ?>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-filter=".<?php echo $speaker_term->slug; ?>"><?php echo $speaker_term->name; ?></a>
                </li>
                <?php endforeach; ?>
                
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <!-- speakers -->
      <div class="speakers-wrapper filter-section">
        <div class="row isotope-f">

        <?php
          $args = array(
              'post_type' => 'speaker',
              'post_status' => 'publish',
              'orderby' => 'menu_order',
              'order' => 'ASC',
              'ignore_sticky_posts' => 1,
              'suppress_filters' => true,
              'posts_per_page' => -1
          
          );
          $loop = new WP_Query($args);
        ?>

        <?php if ( $loop->have_posts() ) : ?>
          <?php while( $loop->have_posts() ): $loop->the_post(); ?>
          <!-- single member -->
          <?php get_template_part( 'template-parts/member-card' ); ?>
          <!-- single member -->
          <?php endwhile; wp_reset_postdata(); ?>
        <?php else : ?>
            <h3>No Post Found</h3>
        <?php endif; ?>



        </div>
      </div>
    </div>
  </section>
  <!-- cta section -->
  
  <section class="cta-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="section-heading text-center">
            <h1 class="text-uppercase">
            <?php echo $pageBtm_title; ?>
            </h1>
          </div>
          <div class="section-btn text-center">

          <?php if( $speaker_page_button ): 
              $btn_title = $speaker_page_button['title'];    
              $btn_url = $speaker_page_button['url'];
              $link_target = $speaker_page_button['target'] ? $speaker_page_button['target'] : '_self';  
          ?>
            <a href="<?php echo esc_url( $btn_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn btn-primary btn-lg"><?php echo esc_html( $btn_title ); ?></a>
          <?php endif; ?>

          </div>
        </div>
      </div>
    </div>
  </section>
</div>
</main>
</div>

<?php get_footer(); ?>
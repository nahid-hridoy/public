<?php
/**
 * Template Name: Blog Page Old
 * The template for displaying Blog page.
 */
?> 

<?php get_header(); ?>

<?php
  $blog_title = get_field( 'blog_title' );
  $def_ctg = get_field( 'default_category' );
?>

<div class="page-holder">
  <main class="main">
    <div class="blog-blocks">
      <!-- speakers section -->
      <section class="blog-section">
        <div class="container">
          <div class="section-heading text-center">
            <h1 class="text-uppercase"><?php echo $blog_title; ?>
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
              <ul class="navbar-nav">

                <li class="nav-item active">
                  <a class="nav-link" href="<?php echo esc_url( get_term_link( $def_ctg ) ); ?>"><?php echo $def_ctg->name; ?></a>
                </li>

                <?php
                $categories = get_categories();
                foreach($categories as $category): ?>
                <?php if( ( $category->name ) != (  $def_ctg->name  )  ): ?>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo esc_url( get_category_link($category->term_id) ); ?>"><?php echo $category->name; ?></a>
                </li>
                <?php endif; ?>
                <?php endforeach; ?>
                
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <!-- articles -->
      <div class="articles-wrapper filter-section">
        <div class="row">
        
        <?php
          $args = array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'category_name'  => $def_ctg->name,
              'orderby' => 'date',
              'order' => 'DESC',
              'ignore_sticky_posts' => 1,
              'suppress_filters' => true
          
          );
          $loop = new WP_Query($args);
        ?>

        <?php if ( $loop->have_posts() ) : ?>
            <?php while( $loop->have_posts() ): $loop->the_post(); ?>

          <!-- single article -->
          <?php get_template_part( 'template-parts/blog-card' ); ?>
          <!-- single article -->

          <?php endwhile; wp_reset_postdata(); ?>
        <?php else : ?>
            <h3>No Post Found</h3>
        <?php endif; ?>

        </div>
      </div>

      <!--  pagination Strat-->
      <?php get_template_part( 'template-parts/pagination' ); ?>
      <!--  pagination End-->

    </div>
  </section>
</div>
</main>
</div>

<?php get_footer(); ?>
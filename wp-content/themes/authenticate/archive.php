<?php get_header(); ?>

<?php
  $blog_title = get_field( 'blog_title' ); 
  $current_CTG = get_queried_object();
  //$current_CTG_NAME = get_queried_object()->name;
  //var_dump( get_queried_object() );
?>

<div class="page-holder">
  <main class="main">
    <div class="blog-blocks">
      <!-- speakers section -->
      <section class="blog-section">
        <div class="container">
          <div class="section-heading text-center">
            <h1 class="text-uppercase"><?php echo $current_CTG->name; ?></h1>
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
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url(); ?>/blog">All</a>
                </li>
                <?php
                $categories = get_categories();
                foreach($categories as $category): ?>
                <li class="nav-item <?php if( ($current_CTG->name) == ($category->name) ): ?>active<?php endif; ?>">
                    <a class="nav-link" href="<?php echo esc_url( get_category_link($category->term_id) ); ?>"><?php echo $category->name; ?></a>
                </li>
                <?php endforeach; ?>
                

              </ul>
            </div>
          </div>
        </nav>
      </div>
      <!-- articles -->
      <div class="articles-wrapper filter-section">
        <div class="row">

        <?php if ( have_posts() ) : ?>
            <?php while( have_posts() ): the_post(); ?>
          <!-- single article -->
          <?php get_template_part( 'template-parts/blog-card' ); ?>
          <!-- single article -->
          <?php endwhile; ?>
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
<?php get_header(); ?>

<div class="page-holder">
  <main class="main">
    <div class="single-event-blocks">
      <!-- intro section -->
      <!-- additional CLASS event-intro -->
      <!-- additional CLASS "event-info-on-top" to move event info to top-->
      <!-- additional CLASS "intro-overlay-bottom"  to move overlay to bottom on mobile-->
      <section class="intro-section event-intro event-info-on-top intro-overlay-bottom">
        <div class="intro-content">
          <div class="container">
            <div class="intro-content-wrapper">
              <div class="row">
                <div class="col-lg-7 col-xxl-8">
                  <div class="event-meta event-meta-lg">
                    <time datetime="2021-09-09">09.09-20.20</time>
                    <span class="meta-title">VIRTUAL</span>
                  </div>
                  <div class="event-intro-content">
                    <h1 class="text-uppercase text-primary">Authenticate Conference</h1>
                  </div>
                  <ul class="event-info-list">
                    <li>
                      <div class="event-info-item">
                        <div class="event-info-icon">
                          <span class="icon-star"></span>
                        </div>
                        <div class="event-info-content">
                          <span class="event-info-title text-primary">Event Info #1</span>
                          <span class="event-info-text">Date & Time</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="event-info-item">
                        <div class="event-info-icon">
                          <span class="icon-star"></span>
                        </div>
                        <div class="event-info-content">
                          <span class="event-info-title text-primary">Event Info #2</span>
                          <span class="event-info-text">Address/Locaftion</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="event-info-item">
                        <div class="event-info-icon">
                          <span class="icon-star"></span>
                        </div>
                        <div class="event-info-content"> nfo #3</span>
                          <span class="event-info-text">Speakers</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="event-info-item">
                        <div class="event-info-icon">
                          <span class="icon-star"></span>
                        </div>
                        <div class="event-info-content">
                          <span class="event-info-title text-primary">Event Info #4</span>
                          <span class="event-info-text">Of content</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- addition CLASS custom-overlay  -->
          <span class="intro-overlay custom-overlay">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/intro-bg-1.png" alt="image description" />
          </span>
        </div>
      </section>
      <!-- countdown section  -->
      <section id="countdown" class="event-countdown-section bg-primary text-white skew-lr decorated-section mt-xl-n5">
        <span class="decor"></span>
        <div class="container">
          <!-- event form  -->
          <div class="event-form-wrapper">
            <div class="row justify-content-end">
              <div class="col-lg-5 col-xxxl-6">
                <div class="event-form-overlay">
                  <div class="event-form">
                    <h2 class="form-title text-primary">Sign Up</h2>
                    <form action="#">
                      <div class="form-group">
                        <label for="name-3" class="text-primary">First Name</label>
                        <input type="text" class="form-control" id="name-3" placeholder="Please enter your first name" />
                      </div>
                      <div class="form-group">
                        <label for="last-name-3" class="text-primary">Last Name</label>
                        <input type="text" class="form-control" id="last-name-3" placeholder="Please enter your first name" />
                      </div>
                      <div class="form-group">
                        <label for="email-3" class="text-primary">Email address</label>
                        <input type="email" class="form-control" id="email-3" placeholder="Please enter your email address" />
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="section-heading text-center">
                <h2 class="text-uppercase">COUNTDOWN</h2>
              </div>
            </div>
          </div>
          <!-- counter list  -->
          <ul class="counter-list" data-target="2021-11-29T13:56:00">
            <li>
              <div class="counter-item">
                <span class="counter-value text-secondary months">00</span>
                <span class="counter-text">Months</span>
              </div>
            </li>
            <li>
              <div class="counter-item">
                <span class="counter-value text-secondary days">00</span>
                <span class="counter-text">Days</span>
              </div>
            </li>
            <li>
              <div class="counter-item">
                <span class="counter-value text-secondary hours">00</span>
                <span class="counter-text">Hours</span>
              </div>
            </li>
            <li>
              <div class="counter-item">
                <span class="counter-value text-secondary minutes">00</span>
                <span class="counter-text">Minutes</span>
              </div>
            </li>
            <li>
              <div class="counter-item">
                <span class="counter-value text-secondary seconds">00</span>
                <span class="counter-text">Seconds</span>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- featured members section -->
      <section id="speakers" class="featured-members">
        <div class="container">
          <div class="section-heading text-center">
            <h2 class="text-uppercase text-primary">Featured Speakers</h2>
          </div>
          <div class="speakers-wrapper">
            <div class="row">
              <!-- single member -->
              <div class="col-sm-6 col-lg-4 col-xxl-2 d-flex flex-direction-column">
                <div class="member-card">
                  <div class="member-card-image">
                    <a href="#">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/speaker-1.jpg" alt="Andrew Shikiar" />
                    </a>
                  </div>
                  <div class="member-card-body">
                    <h4 class="text-primary member-title"><a href="#">Andrew Shikiar</a></h4>
                    <p>Executive Director and Chief Marketing Officer at FIDO Alliance</p>
                    <ul class="social">
                      <li>
                        <a href="#">
                          <span class="icon-instagram"></span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="icon-linkedin"></span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- single member -->
              <div class="col-sm-6 col-lg-4 col-xxl-2 d-flex flex-direction-column">
                <div class="member-card">
                  <div class="member-card-image">
                    <a href="#">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/speaker-2.jpg" alt="David Henstock" />
                    </a>
                  </div>
                  <div class="member-card-body">
                    <h4 class="text-primary member-title"><a href="#">David Henstock</a></h4>
                    <p>Head of Identity &amp; Authentication Products, Visa</p>
                    <ul class="social">
                      <li>
                        <a href="#">
                          <span class="icon-instagram"></span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="icon-linkedin"></span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- single member -->
              <div class="col-sm-6 col-lg-4 col-xxl-2 d-flex flex-direction-column">
                <div class="member-card">
                  <div class="member-card-image">
                    <a href="#">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/speaker-3.jpg" alt="John Buzzard" />
                    </a>
                  </div>
                  <div class="member-card-body">
                    <h4 class="text-primary member-title"><a href="#">John Buzzard</a></h4>
                    <p>Lead Analyst, Fraud &amp; Security, Javelin Strategy &amp; Research</p>
                    <ul class="social">
                      <li>
                        <a href="#">
                          <span class="icon-instagram"></span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="icon-linkedin"></span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- single member -->
              <div class="col-sm-6 col-lg-4 col-xxl-2 d-flex flex-direction-column">
                <div class="member-card">
                  <div class="member-card-image">
                    <a href="#">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/speaker-4.jpg" alt="Rachel Huber" />
                    </a>
                  </div>
                  <div class="member-card-body">
                    <h4 class="text-primary member-title"><a href="#">Rachel Huber</a></h4>
                    <p>Senior Analyst, Payments, Javelin Strategy &amp; Research</p>
                    <ul class="social">
                      <li>
                        <a href="#">
                          <span class="icon-instagram"></span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="icon-linkedin"></span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- single member -->
              <div class="col-sm-6 col-lg-4 col-xxl-2 d-flex flex-direction-column">
                <div class="member-card">
                  <div class="member-card-image">
                    <a href="#">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/speaker-5.jpg" alt="Ashish Jain" />
                    </a>
                  </div>
                  <div class="member-card-body">
                    <h4 class="text-primary member-title"><a href="#">Ashish Jain</a></h4>
                    <p>Product Management Executive, Identity, Mobility &amp; Analytics, eBay</p>
                    <ul class="social">
                      <li>
                        <a href="#">
                          <span class="icon-instagram"></span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="icon-linkedin"></span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- single member -->
              <div class="col-sm-6 col-lg-4 col-xxl-2 d-flex flex-direction-column">
                <div class="member-card">
                  <div class="member-card-image">
                    <a href="#">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/speaker-6.jpg" alt="Christina Hulka" />
                    </a>
                  </div>
                  <div class="member-card-body">
                    <h4 class="text-primary member-title"><a href="#">Christina Hulka</a></h4>
                    <p>Executive Director and COO, FIDO Alliance</p>
                    <ul class="social">
                      <li>
                        <a href="#">
                          <span class="icon-instagram"></span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="icon-linkedin"></span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="section-btn text-center">
            <a href="#" class="btn btn-primary btn-lg">View All Event Speakers</a>
          </div>
        </div>
      </section>
      <!-- callout section  -->
      <div class="callout-section">
        <div class="container">
          <div class="callout-blocks">
            <!-- callout block -->
            <div class="callout-block">
              <div class="row">
                <div class="col-lg-6">
                  <h3 class="d-lg-none">Event Callout #1</h3>
                  <div class="callout-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/callout-img-1.jpg" alt="image description" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="callout-content">
                    <h3 class="d-none d-lg-block">Event Callout #1</h3>
                    <p>
                      Primum igitur, quid aut officiis debitis aut ad eam non quo quaerimus, non recusandae itaque negat opus esse expetendam et quale sit voluptatem et
                      dolore suo sanciret militaris imperii disciplinam exercitumque in voluptate ponit, quod omnium philosophorum sententia tale debet esse, ut summo bono,
                      dolorem.
                    </p>
                    <a href="#" class="btn btn-primary btn-lg">Signup for This Event</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- callout block -->
            <!-- callout block odd DIV.row HAS CLASS "flex-lg-row-reverse" -->
            <div class="callout-block">
              <div class="row flex-lg-row-reverse">
                <div class="col-lg-6">
                  <h3 class="d-lg-none">Event Callout #2</h3>
                  <div class="callout-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/callout-img-2.png" alt="image description" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="callout-content">
                    <h3 class="d-none d-lg-block">Event Callout #1</h3>
                    <p>
                      Primum igitur, quid aut officiis debitis aut ad eam non quo quaerimus, non recusandae itaque negat opus esse expetendam et quale sit voluptatem et
                      dolore suo sanciret militaris imperii disciplinam exercitumque in voluptate ponit, quod omnium philosophorum sententia tale debet esse, ut summo bono,
                      dolorem.
                    </p>
                    <a href="#" class="btn btn-primary btn-lg">Signup for This Event</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- session section  -->
      <section id="agenda" class="accordion-section decorated-section persective-lr bg-secondary text-white">
        <span class="decor"></span>
        <div class="container">
          <div class="section-heading">
            <h2 class="text-uppercase text-primary accordion-title">Agenda / 100+ Sessions</h2>
            <div class="section-heading-text width-sm">
              <p>Browse all sessions in the Session Catalog to see everything you can view on-demand.</p>
            </div>
          </div>
          <!-- base accordion -->
          <div class="accordion base-accordion" id="base-accordion">
            <!-- accordion item -->
            <div class="card">
              <div class="card-header" id="base-accordion-opener-1">
                <button
                data-text-close="See more +"
                data-text-open="See less -"
                class="btn btn-link"
                type="button"
                data-toggle="collapse"
                data-target="#base-accordion-slide-1"
                aria-expanded="false"
                aria-controls="base-accordion-slide-1"
                >
                Category #1
              </button>
            </div>

            <div id="base-accordion-slide-1" class="collapse" aria-labelledby="base-accordion-opener-1" data-parent="#base-accordion">
              <div class="card-body">
                <!-- callout block -->
                <div class="callout-block">
                  <div class="row align-item-center">
                    <div class="col-lg-5">
                      <div class="callout-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/callout-img-1.jpg" alt="image description" />
                      </div>
                    </div>
                    <div class="col-lg-7">
                      <div class="callout-content">
                        <p>
                          Primum igitur, quid aut officiis debitis aut ad eam non quo quaerimus, non recusandae itaque negat opus esse expetendam et quale sit voluptatem et
                          dolore suo sanciret militaris imperii disciplinam exercitumque in voluptate ponit, quod omnium philosophorum sententia tale debet esse, ut summo
                          bono, dolorem. Primum igitur, quid aut officiis debitis aut ad eam non quo quaerimus, non recusandae itaque negat opus esse expetendam et quale
                          sit voluptatem et dolore suo sanciret militaris imperii disciplinam exercitumque in voluptate ponit.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- accordion item -->
          <div class="card">
            <div class="card-header" id="base-accordion-opener-2">
              <button
              data-text-close="See more +"
              data-text-open="See less -"
              class="btn btn-link"
              type="button"
              data-toggle="collapse"
              data-target="#base-accordion-slide-2"
              aria-expanded="false"
              aria-controls="base-accordion-slide-2"
              >
              Category #2
            </button>
          </div>

          <div id="base-accordion-slide-2" class="collapse" aria-labelledby="base-accordion-opener-2" data-parent="#base-accordion">
            <div class="card-body">
              <!-- callout block -->
              <div class="callout-block">
                <div class="row align-item-center">
                  <div class="col-lg-5">
                    <div class="callout-image">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/callout-img-1.jpg" alt="image description" />
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="callout-content">
                      <p>
                        Primum igitur, quid aut officiis debitis aut ad eam non quo quaerimus, non recusandae itaque negat opus esse expetendam et quale sit voluptatem et
                        dolore suo sanciret militaris imperii disciplinam exercitumque in voluptate ponit, quod omnium philosophorum sententia tale debet esse, ut summo
                        bono, dolorem. Primum igitur, quid aut officiis debitis aut ad eam non quo quaerimus, non recusandae itaque negat opus esse expetendam et quale
                        sit voluptatem et dolore suo sanciret militaris imperii disciplinam exercitumque in voluptate ponit.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- accordion item -->
        <div class="card">
          <div class="card-header" id="base-accordion-opener-3">
            <button
            data-text-close="See more +"
            data-text-open="See less -"
            class="btn btn-link"
            type="button"
            data-toggle="collapse"
            data-target="#base-accordion-slide-3"
            aria-expanded="true"
            aria-controls="base-accordion-slide-3"
            >
            Category #3
          </button>
        </div>

        <div id="base-accordion-slide-3" class="collapse show" aria-labelledby="base-accordion-opener-3" data-parent="#base-accordion">
          <div class="card-body">
            <!-- callout block -->
            <div class="callout-block">
              <div class="row align-item-center">
                <div class="col-lg-5">
                  <div class="callout-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/callout-img-1.jpg" alt="image description" />
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="callout-content">
                    <p>
                      Primum igitur, quid aut officiis debitis aut ad eam non quo quaerimus, non recusandae itaque negat opus esse expetendam et quale sit voluptatem et
                      dolore suo sanciret militaris imperii disciplinam exercitumque in voluptate ponit, quod omnium philosophorum sententia tale debet esse, ut summo
                      bono, dolorem. Primum igitur, quid aut officiis debitis aut ad eam non quo quaerimus, non recusandae itaque negat opus esse expetendam et quale
                      sit voluptatem et dolore suo sanciret militaris imperii disciplinam exercitumque in voluptate ponit.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- accordion item -->
      <div class="card">
        <div class="card-header" id="base-accordion-opener-4">
          <button
          data-text-close="See more +"
          data-text-open="See less -"
          class="btn btn-link"
          type="button"
          data-toggle="collapse"
          data-target="#base-accordion-slide-4"
          aria-expanded="false"
          aria-controls="base-accordion-slide-4"
          >
          Category #4
        </button>
      </div>

      <div id="base-accordion-slide-4" class="collapse" aria-labelledby="base-accordion-opener-4" data-parent="#base-accordion">
        <div class="card-body">
          <!-- callout block -->
          <div class="callout-block">
            <div class="row align-item-center">
              <div class="col-lg-5">
                <div class="callout-image">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/callout-img-1.jpg" alt="image description" />
                </div>
              </div>
              <div class="col-lg-7">
                <div class="callout-content">
                  <p>
                    Primum igitur, quid aut officiis debitis aut ad eam non quo quaerimus, non recusandae itaque negat opus esse expetendam et quale sit voluptatem et
                    dolore suo sanciret militaris imperii disciplinam exercitumque in voluptate ponit, quod omnium philosophorum sententia tale debet esse, ut summo
                    bono, dolorem. Primum igitur, quid aut officiis debitis aut ad eam non quo quaerimus, non recusandae itaque negat opus esse expetendam et quale
                    sit voluptatem et dolore suo sanciret militaris imperii disciplinam exercitumque in voluptate ponit.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- accordion item -->
    <div class="card">
      <div class="card-header" id="base-accordion-opener-8">
        <button
        data-text-close="See more +"
        data-text-open="See less -"
        class="btn btn-link"
        type="button"
        data-toggle="collapse"
        data-target="#base-accordion-slide-8"
        aria-expanded="false"
        aria-controls="base-accordion-slide-8"
        >
        Category #5
      </button>
    </div>

    <div id="base-accordion-slide-8" class="collapse" aria-labelledby="base-accordion-opener-8" data-parent="#base-accordion">
      <div class="card-body">
        <!-- callout block -->
        <div class="callout-block">
          <div class="row align-item-center">
            <div class="col-lg-5">
              <div class="callout-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/callout-img-1.jpg" alt="image description" />
              </div>
            </div>
            <div class="col-lg-7">
              <div class="callout-content">
                <p>
                  Primum igitur, quid aut officiis debitis aut ad eam non quo quaerimus, non recusandae itaque negat opus esse expetendam et quale sit voluptatem et
                  dolore suo sanciret militaris imperii disciplinam exercitumque in voluptate ponit, quod omnium philosophorum sententia tale debet esse, ut summo
                  bono, dolorem. Primum igitur, quid aut officiis debitis aut ad eam non quo quaerimus, non recusandae itaque negat opus esse expetendam et quale
                  sit voluptatem et dolore suo sanciret militaris imperii disciplinam exercitumque in voluptate ponit.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- accordion item -->
  <div class="card">
    <div class="card-header" id="base-accordion-5">
      <button
      data-text-close="See more +"
      data-text-open="See less -"
      class="btn btn-link"
      type="button"
      data-toggle="collapse"
      data-target="#base-accordion-slide-5"
      aria-expanded="false"
      aria-controls="base-accordion-slide-5"
      >
      Category #5
    </button>
  </div>

  <div id="base-accordion-slide-5" class="collapse" aria-labelledby="base-accordion-5" data-parent="#base-accordion">
    <div class="card-body">
      <!-- callout block -->
      <div class="callout-block">
        <div class="row align-item-center">
          <div class="col-lg-5">
            <div class="callout-image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/callout-img-1.jpg" alt="image description" />
            </div>
          </div>
          <div class="col-lg-7">
            <div class="callout-content">
              <p>
                Primum igitur, quid aut officiis debitis aut ad eam non quo quaerimus, non recusandae itaque negat opus esse expetendam et quale sit voluptatem et
                dolore suo sanciret militaris imperii disciplinam exercitumque in voluptate ponit, quod omnium philosophorum sententia tale debet esse, ut summo
                bono, dolorem. Primum igitur, quid aut officiis debitis aut ad eam non quo quaerimus, non recusandae itaque negat opus esse expetendam et quale
                sit voluptatem et dolore suo sanciret militaris imperii disciplinam exercitumque in voluptate ponit.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- accordion item -->
<div class="card">
  <div class="card-header" id="base-accordion-opener-6">
    <button
    data-text-close="See more +"
    data-text-open="See less -"
    class="btn btn-link"
    type="button"
    data-toggle="collapse"
    data-target="#base-accordion-slide-6"
    aria-expanded="false"
    aria-controls="base-accordion-slide-6"
    >
    Category #6
  </button>
</div>

<div id="base-accordion-slide-6" class="collapse" aria-labelledby="base-accordion-opener-6" data-parent="#base-accordion">
  <div class="card-body">
    <!-- callout block -->
    <div class="callout-block">
      <div class="row align-item-center">
        <div class="col-lg-5">
          <div class="callout-image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/callout-img-1.jpg" alt="image description" />
          </div>
        </div>
        <div class="col-lg-7">
          <div class="callout-content">
            <p>
              Primum igitur, quid aut officiis debitis aut ad eam non quo quaerimus, non recusandae itaque negat opus esse expetendam et quale sit voluptatem et
              dolore suo sanciret militaris imperii disciplinam exercitumque in voluptate ponit, quod omnium philosophorum sententia tale debet esse, ut summo
              bono, dolorem. Primum igitur, quid aut officiis debitis aut ad eam non quo quaerimus, non recusandae itaque negat opus esse expetendam et quale
              sit voluptatem et dolore suo sanciret militaris imperii disciplinam exercitumque in voluptate ponit.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- accordion item -->
<div class="card">
  <div class="card-header" id="base-accordion-opener-7">
    <button
    data-text-close="See more +"
    data-text-open="See less -"
    class="btn btn-link"
    type="button"
    data-toggle="collapse"
    data-target="#base-accordion-slide-7"
    aria-expanded="false"
    aria-controls="base-accordion-slide-7"
    >
    Category #7
  </button>
</div>

<div id="base-accordion-slide-7" class="collapse" aria-labelledby="base-accordion-opener-7" data-parent="#base-accordion">
  <div class="card-body">
    <!-- callout block -->
    <div class="callout-block">
      <div class="row align-item-center">
        <div class="col-lg-5">
          <div class="callout-image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/callout-img-1.jpg" alt="image description" />
          </div>
        </div>
        <div class="col-lg-7">
          <div class="callout-content">
            <p>
              Primum igitur, quid aut officiis debitis aut ad eam non quo quaerimus, non recusandae itaque negat opus esse expetendam et quale sit voluptatem et
              dolore suo sanciret militaris imperii disciplinam exercitumque in voluptate ponit, quod omnium philosophorum sententia tale debet esse, ut summo
              bono, dolorem. Primum igitur, quid aut officiis debitis aut ad eam non quo quaerimus, non recusandae itaque negat opus esse expetendam et quale
              sit voluptatem et dolore suo sanciret militaris imperii disciplinam exercitumque in voluptate ponit.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</section>
<!-- form section -->
<section id="sign-up" class="form-section bg-primary text-white">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="section-heading">
          <h2 class="text-uppercase h1">Stay Connected</h2>
          <div class="section-heading-text text-secondary lead width-md">
            <p>Sign up for the mailing list for the latest updates.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-5 ml-lg-auto">
        <form action="#">
          <div class="form-group">
            <input type="text" class="form-control" id="name-5" placeholder="First Name" />
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="last-name-5" placeholder="Last Name" />
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="password-5" placeholder="Password" />
          </div>
          <button type="submit" class="btn btn-secondary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>
</div>
</main>
</div>

<?php get_footer(); ?>
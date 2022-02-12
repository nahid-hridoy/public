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
                        <div class="event-info-content">
                          <span class="event-info-title text-primary">Event Info #3</span>
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
      <!-- feature section -->
      <section class="feature-section">
        <div class="container">
          <div class="section-heading text-center">
            <h2 class="text-uppercase">The Experience</h2>
          </div>
        </div>

        <!-- max list length 9 items -->
        <div class="feature-list">
          <div class="row no-gutters">
            <!-- feature item -->
            <div class="col-md-6 col-lg-4">
              <div class="feature-item">
                <div class="inner-content">
                  <div class="feature-item-head">
                    <div class="feature-item-img">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/feature-img-1.svg" alt="image description" />
                    </div>
                    <h4 class="feature-title">DIVE IN</h4>
                  </div>
                  <div class="feature-item-text">
                    <p>
                      Go in-depth on the state of authentication today, including: passwords, OTPs and push-based authentication; FIDO and W3C standards; single sign on
                      solutions; decentralized authentication; biometrics and FIDO security keys; and risk-based authentication mechanisms.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- feature item -->
            <div class="col-md-6 col-lg-4">
              <div class="feature-item">
                <div class="inner-content">
                  <div class="feature-item-head">
                    <div class="feature-item-img">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/feature-img-2.svg" alt="image description" />
                    </div>
                    <h4 class="feature-title">STRATEGIZE</h4>
                  </div>
                  <div class="feature-item-text">
                    <p>
                      Build your authentication strategy with content on IAM integration, the value of certification and metadata service for assessing risk, and FIDO’s
                      relationship to broader identity topics including identity verification, account recovery and blockchain.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- feature item -->
            <div class="col-md-6 col-lg-4">
              <div class="feature-item">
                <div class="inner-content">
                  <div class="feature-item-head">
                    <div class="feature-item-img">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/feature-img-3.svg" alt="image description" />
                    </div>
                    <h4 class="feature-title">TAKE AWAY</h4>
                  </div>
                  <div class="feature-item-text">
                    <p>
                      Meet the practitioners that have implemented modern authentication platforms with FIDO in enterprise, commercial and government settings. Get
                      step-by-step information on how they did it, the challenges they faced & the results they achieved.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- feature item -->
            <div class="col-md-6 col-lg-4">
              <div class="feature-item">
                <div class="inner-content">
                  <div class="feature-item-head">
                    <div class="feature-item-img">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/feature-img-4.svg" alt="image description" />
                    </div>
                    <h4 class="feature-title">GET AN INDUSTRY&nbsp;VIEW</h4>
                  </div>
                  <div class="feature-item-text">
                    <p>
                      Discover the unique authentication requirements in IoT, payments, healthcare and government; and how FIDO fits with initiatives like W3C Web Payments,
                      EMVCo 3DS and SRC, and Project Verify
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- feature item -->
            <div class="col-md-6 col-lg-4">
              <div class="feature-item">
                <div class="inner-content">
                  <div class="feature-item-head">
                    <div class="feature-item-img">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/feature-img-5.svg" alt="image description" />
                    </div>
                    <h4 class="feature-title">COMPLY</h4>
                  </div>
                  <div class="feature-item-text">
                    <p>Get a broad view on how moving to modern authentication can help your company meet global regulatory requirements.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- feature item -->
            <div class="col-md-6 col-lg-4">
              <div class="feature-item">
                <div class="inner-content">
                  <div class="feature-item-head">
                    <div class="feature-item-img">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/feature-img-6.svg" alt="image description" />
                    </div>
                    <h4 class="feature-title">CONNECT</h4>
                  </div>
                  <div class="feature-item-text">
                    <p>See FIDO in action and make 1-1 connections with technology providers helping organizations move to modern authentication now</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- callout section  -->
      <div class="callout-section bg-secondary text-white">
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
      <!-- sponsors section -->
      <section id="sponsors" class="sponsors-section">
        <div class="container">
          <div class="section-heading text-center mb-0">
            <h2 class="text-uppercase">Event SPONSORS</h2>
          </div>
          <!-- sponsors list -->
          <!-- additional CLASS signature-sponsors -->
          <ul class="sponsors-list signature-sponsors">
            <li>
              <div class="logo-img">
                <a href="#">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/google.png" alt="Google" />
                </a>
              </div>
            </li>
            <li>
              <div class="logo-img">
                <a href="#">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/microsoft.png" alt="Microsoft" />
                </a>
              </div>
            </li>
            <li>
              <div class="logo-img">
                <a href="#">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/yubico.png" alt="Yubico" />
                </a>
              </div>
            </li>
          </ul>
          <div class="section-btn text-center">
            <a href="#" class="btn btn-primary btn-lg">Signup for This Event</a>
            <a href="#" class="btn btn-secondary btn-lg">See all sponsors</a>
          </div>
        </div>
      </section>
      <!-- session section  -->
      <section id="agenda" class="session-section bg-secondary text-white skew-lr-lg decorated-section">
        <span class="decor"></span>
        <div class="container">
          <!-- if filtration allowed ADD CLASS "with-filter custom-filtration" on ELEMENT div.session-filter-holder -->
          <div class="session-filter-holder with-filter custom-filtration">
            <div class="session-filter-content">
              <div class="section-heading">
                <h2 class="text-uppercase">Agenda / Browse Sessions</h2>
                <div class="section-heading-text width-sm">
                  <p>Browse all sessions in the Session Catalog to select the track and session specific to you.</p>
                </div>
              </div>

              <!-- filter navbar toggler / only if filtration allowed  -->
              <button
              class="filter-toggler d-xl-none"
              type="button"
              data-toggle="collapse"
              data-target="#filterNavSession"
              aria-controls="filterNavSession"
              aria-expanded="false"
              aria-label="Toggle navigation"
              >
              <span class="icon-filter"></span>
              <span class="toggler-text">Filter</span>
            </button>

            <div class="sessions-wrapper filter-section">
              <span class="filter-value text-primary d-none d-xl-block">Day 1, Nov 25</span>
              <div class="row isotope-f">
                <!-- session -->
                        <!-- session CLASSES default
                "col-sm-6 col-lg-4 col-xl-3"
                session CLASSES only if filtration allowed
                "col-sm-6 col-lg-4 col-xxl-3"
                the difference is only on one CLASS col-xxl-3 if filtration allowed and col-xl-3 if not
              -->
              <div class="col-sm-6 col-lg-4 col-xxl-3 filter-item session filter-1">
                <div class="session">
                  <div class="session-body">
                    <div class="session-body-top">
                      <div class="session-meta">
                        <span class="day">day 1</span>
                        <span class="time">8:30 AM - 9:00 AM</span>
                      </div>
                      <h6 class="session-title"><a href="#">Welcome – The Imperative for Simpler, Stronger Financial Services</a></h6>
                      <div class="session-member">
                        <span class="session-member-label">Speaker</span>
                        <span class="session-member-name">Andrew Shikiar</span>
                      </div>
                    </div>
                    <div class="session-body-bottom">
                      <a href="#" class="learn-more">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- session -->
              <div class="col-sm-6 col-lg-4 col-xxl-3 filter-item session filter-1">
                <div class="session">
                  <div class="session-body">
                    <div class="session-body-top">
                      <div class="session-meta">
                        <span class="day">day 1</span>
                        <span class="time">8:30 AM - 9:00 AM</span>
                      </div>
                      <h6 class="session-title"><a href="#">Welcome – The Imperative for Simpler, Stronger Financial Services</a></h6>
                      <div class="session-member">
                        <span class="session-member-label">Speaker</span>
                        <span class="session-member-name">Andrew Shikiar</span>
                      </div>
                    </div>
                    <div class="session-body-bottom">
                      <a href="#" class="learn-more">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- session -->
              <div class="col-sm-6 col-lg-4 col-xxl-3 filter-item session filter-1">
                <div class="session">
                  <div class="session-body">
                    <div class="session-body-top">
                      <div class="session-meta">
                        <span class="day">day 1</span>
                        <span class="time">8:30 AM - 9:00 AM</span>
                      </div>
                      <h6 class="session-title"><a href="#">Welcome – The Imperative for Simpler, Stronger Financial Services</a></h6>
                      <div class="session-member">
                        <span class="session-member-label">Speaker</span>
                        <span class="session-member-name">Andrew Shikiar</span>
                      </div>
                    </div>
                    <div class="session-body-bottom">
                      <a href="#" class="learn-more">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- session -->
              <div class="col-sm-6 col-lg-4 col-xxl-3 filter-item session filter-1">
                <div class="session">
                  <div class="session-body">
                    <div class="session-body-top">
                      <div class="session-meta">
                        <span class="day">day 1</span>
                        <span class="time">8:30 AM - 9:00 AM</span>
                      </div>
                      <h6 class="session-title"><a href="#">Welcome – The Imperative for Simpler, Stronger Financial Services</a></h6>
                      <div class="session-member">
                        <span class="session-member-label">Speaker</span>
                        <span class="session-member-name">Andrew Shikiar</span>
                      </div>
                    </div>
                    <div class="session-body-bottom">
                      <a href="#" class="learn-more">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- session -->
              <div class="col-sm-6 col-lg-4 col-xxl-3 filter-item session filter-1">
                <div class="session">
                  <div class="session-body">
                    <div class="session-body-top">
                      <div class="session-meta">
                        <span class="day">day 1</span>
                        <span class="time">8:30 AM - 9:00 AM</span>
                      </div>
                      <h6 class="session-title"><a href="#">Welcome – The Imperative for Simpler, Stronger Financial Services</a></h6>
                      <div class="session-member">
                        <span class="session-member-label">Speaker</span>
                        <span class="session-member-name">Andrew Shikiar</span>
                      </div>
                    </div>
                    <div class="session-body-bottom">
                      <a href="#" class="learn-more">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- session -->
              <div class="col-sm-6 col-lg-4 col-xxl-3 filter-item session filter-1">
                <div class="session">
                  <div class="session-body">
                    <div class="session-body-top">
                      <div class="session-meta">
                        <span class="day">day 1</span>
                        <span class="time">8:30 AM - 9:00 AM</span>
                      </div>
                      <h6 class="session-title"><a href="#">Welcome – The Imperative for Simpler, Stronger Financial Services</a></h6>
                      <div class="session-member">
                        <span class="session-member-label">Speaker</span>
                        <span class="session-member-name">Andrew Shikiar</span>
                      </div>
                    </div>
                    <div class="session-body-bottom">
                      <a href="#" class="learn-more">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- session -->
              <div class="col-sm-6 col-lg-4 col-xxl-3 filter-item session filter-1">
                <div class="session">
                  <div class="session-body">
                    <div class="session-body-top">
                      <div class="session-meta">
                        <span class="day">day 1</span>
                        <span class="time">8:30 AM - 9:00 AM</span>
                      </div>
                      <h6 class="session-title"><a href="#">Welcome – The Imperative for Simpler, Stronger Financial Services</a></h6>
                      <div class="session-member">
                        <span class="session-member-label">Speaker</span>
                        <span class="session-member-name">Andrew Shikiar</span>
                      </div>
                    </div>
                    <div class="session-body-bottom">
                      <a href="#" class="learn-more">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- session -->
              <div class="col-sm-6 col-lg-4 col-xxl-3 filter-item speaker filter-1">
                <div class="session">
                  <div class="session-body">
                    <div class="session-body-top">
                      <div class="session-meta">
                        <span class="day">day 1</span>
                        <span class="time">8:30 AM - 9:00 AM</span>
                      </div>
                      <h6 class="session-title"><a href="#">Welcome – The Imperative for Simpler, Stronger Financial Services</a></h6>
                      <div class="session-member">
                        <span class="session-member-label">Speaker</span>
                        <span class="session-member-name">Andrew Shikiar</span>
                      </div>
                    </div>
                    <div class="session-body-bottom">
                      <a href="#" class="learn-more">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- session -->
              <div class="col-sm-6 col-lg-4 col-xxl-3 filter-item speaker filter-1">
                <div class="session">
                  <div class="session-body">
                    <div class="session-body-top">
                      <div class="session-meta">
                        <span class="day">day 1</span>
                        <span class="time">8:30 AM - 9:00 AM</span>
                      </div>
                      <h6 class="session-title"><a href="#">Welcome – The Imperative for Simpler, Stronger Financial Services</a></h6>
                      <div class="session-member">
                        <span class="session-member-label">Speaker</span>
                        <span class="session-member-name">Andrew Shikiar</span>
                      </div>
                    </div>
                    <div class="session-body-bottom">
                      <a href="#" class="learn-more">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- session -->
              <div class="col-sm-6 col-lg-4 col-xxl-3 filter-item speaker filter-01">
                <div class="session">
                  <div class="session-body">
                    <div class="session-body-top">
                      <div class="session-meta">
                        <span class="day">day 1</span>
                        <span class="time">8:30 AM - 9:00 AM</span>
                      </div>
                      <h6 class="session-title"><a href="#">Welcome – The Imperative for Simpler, Stronger Financial Services</a></h6>
                      <div class="session-member">
                        <span class="session-member-label">Speaker</span>
                        <span class="session-member-name">Andrew Shikiar</span>
                      </div>
                    </div>
                    <div class="session-body-bottom">
                      <a href="#" class="learn-more">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- session -->
              <div class="col-sm-6 col-lg-4 col-xxl-3 filter-item speaker filter-01">
                <div class="session">
                  <div class="session-body">
                    <div class="session-body-top">
                      <div class="session-meta">
                        <span class="day">day 1</span>
                        <span class="time">8:30 AM - 9:00 AM</span>
                      </div>
                      <h6 class="session-title"><a href="#">Welcome – The Imperative for Simpler, Stronger Financial Services</a></h6>
                      <div class="session-member">
                        <span class="session-member-label">Speaker</span>
                        <span class="session-member-name">Andrew Shikiar</span>
                      </div>
                    </div>
                    <div class="session-body-bottom">
                      <a href="#" class="learn-more">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- session -->
              <div class="col-sm-6 col-lg-4 col-xxl-3 filter-item speaker filter-01">
                <div class="session">
                  <div class="session-body">
                    <div class="session-body-top">
                      <div class="session-meta">
                        <span class="day">day 1</span>
                        <span class="time">8:30 AM - 9:00 AM</span>
                      </div>
                      <h6 class="session-title"><a href="#">Welcome – The Imperative for Simpler, Stronger Financial Services</a></h6>
                      <div class="session-member">
                        <span class="session-member-label">Speaker</span>
                        <span class="session-member-name">Andrew Shikiar</span>
                      </div>
                    </div>
                    <div class="session-body-bottom">
                      <a href="#" class="learn-more">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- session -->
              <div class="col-sm-6 col-lg-4 col-xxl-3 filter-item speaker filter-01">
                <div class="session">
                  <div class="session-body">
                    <div class="session-body-top">
                      <div class="session-meta">
                        <span class="day">day 1</span>
                        <span class="time">8:30 AM - 9:00 AM</span>
                      </div>
                      <h6 class="session-title"><a href="#">Welcome – The Imperative for Simpler, Stronger Financial Services</a></h6>
                      <div class="session-member">
                        <span class="session-member-label">Speaker</span>
                        <span class="session-member-name">Andrew Shikiar</span>
                      </div>
                    </div>
                    <div class="session-body-bottom">
                      <a href="#" class="learn-more">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- session -->
              <div class="col-sm-6 col-lg-4 col-xxl-3 filter-item speaker filter-02">
                <div class="session">
                  <div class="session-body">
                    <div class="session-body-top">
                      <div class="session-meta">
                        <span class="day">day 1</span>
                        <span class="time">8:30 AM - 9:00 AM</span>
                      </div>
                      <h6 class="session-title"><a href="#">Welcome – The Imperative for Simpler, Stronger Financial Services</a></h6>
                      <div class="session-member">
                        <span class="session-member-label">Speaker</span>
                        <span class="session-member-name">Andrew Shikiar</span>
                      </div>
                    </div>
                    <div class="session-body-bottom">
                      <a href="#" class="learn-more">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- filter sidebar / only if filtration allowed  -->
        <div class="session-filter-sidebar">
          <nav class="navbar navbar-expand-xl navbar-light navbar-filter">
            <div class="collapse navbar-collapse justify-content-start bg-secondary" id="filterNavSession">
              <div class="collapse-inner">
                <button
                class="navbar-toggler filter-toggler d-xl-none"
                type="button"
                data-toggle="collapse"
                data-target="#filterNavSession"
                aria-controls="filterNavSession"
                aria-expanded="false"
                aria-label="Toggle navigation"
                >
                <span class="navbar-toggler-icon"></span>
              </button>
              <ul class="nav nav-tabs" id="session-tabs" role="tablist">
                <li class="nav-item">
                  <a
                  class="nav-link"
                  id="speaker-tab"
                  data-filter=".speaker"
                  data-toggle="tab"
                  href="#speaker-tab-pane"
                  role="tab"
                  aria-controls="speaker-tab-pane"
                  aria-selected="false"
                  >Speaker</a
                  >
                </li>
                <li class="nav-item">
                  <a
                  class="nav-link active"
                  id="session-tab"
                  data-filter=".session"
                  data-toggle="tab"
                  href="#session-tab-pane"
                  role="tab"
                  aria-controls="session-tab-pane"
                  aria-selected="true"
                  >Session</a
                  >
                </li>
              </ul>
              <div class="tab-content filter-buttons">
                <div class="tab-pane fade" id="speaker-tab-pane" role="tabpanel" aria-labelledby="speaker-tab">
                  <div class="accordion filter-accordion" id="filter-accordion">
                    <div class="card">
                      <div class="card-header" id="accordion-opener-1">
                        <button
                        class="btn btn-link"
                        type="button"
                        data-toggle="collapse"
                        data-target="#accordion-slide-1"
                        aria-expanded="true"
                        aria-controls="accordion-slide-1"
                        >
                        Track
                      </button>
                    </div>
                    <div id="accordion-slide-1" class="collapse show" aria-labelledby="accordion-opener-1" data-parent="#filter-accordion">
                      <div class="card-body">
                        <ul class="filter-list">
                          <li><a href="#" data-filter=".filter-00">Keynote Presentations</a></li>
                          <li><a href="#" data-filter=".filter-01">Enterprise Case Study Presentations</a></li>
                          <li><a href="#" data-filter=".filter-02">Technical Track Presentations</a></li>
                          <li><a href="#" data-filter=".filter-03">Consumer Case Study Presentations</a></li>
                          <li><a href="#" data-filter=".filter-04">Standards Track Presentations</a></li>
                          <li><a href="#" data-filter=".filter-05">Policy Track Presentations</a></li>
                          <li><a href="#" data-filter=".filter-06">Case Study Presentations</a></li>
                          <li><a href="#" data-filter=".filter-07"> Best Practice Presentations</a></li>
                          <li><a href="#" data-filter=".filter-08">Closing Keynotes</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="accorder-opener-2">
                      <button
                      class="btn btn-link collapsed"
                      type="button"
                      data-toggle="collapse"
                      data-target="#accordion-slide-2"
                      aria-expanded="false"
                      aria-controls="accordion-slide-2"
                      >
                      Product
                    </button>
                  </div>
                  <div id="accordion-slide-2" class="collapse" aria-labelledby="accorder-opener-2" data-parent="#filter-accordion">
                    <div class="card-body">
                      <ul class="filter-list">
                        <li><a href="#">List item</a></li>
                        <li><a href="#">List item</a></li>
                        <li><a href="#">List item</a></li>
                        <li><a href="#">List item</a></li>
                        <li><a href="#">List item</a></li>
                        <li><a href="#">List item</a></li>
                        <li><a href="#">List item</a></li>
                        <li><a href="#">List item</a></li>
                        <li><a href="#">List item</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="accorder-opener-3">
                    <button
                    class="btn btn-link collapsed"
                    type="button"
                    data-toggle="collapse"
                    data-target="#accordion-slide-3"
                    aria-expanded="false"
                    aria-controls="accordion-slide-3"
                    >
                    Technical level
                  </button>
                </div>
                <div id="accordion-slide-3" class="collapse" aria-labelledby="accorder-opener-3" data-parent="#filter-accordion">
                  <div class="card-body">
                    <ul class="filter-list">
                      <li><a href="#">List item</a></li>
                      <li><a href="#">List item</a></li>
                      <li><a href="#">List item</a></li>
                      <li><a href="#">List item</a></li>
                      <li><a href="#">List item</a></li>
                      <li><a href="#">List item</a></li>
                      <li><a href="#">List item</a></li>
                      <li><a href="#">List item</a></li>
                      <li><a href="#">List item</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="accorder-opener-4">
                  <button
                  class="btn btn-link collapsed"
                  type="button"
                  data-toggle="collapse"
                  data-target="#accordion-slide-4"
                  aria-expanded="false"
                  aria-controls="accordion-slide-4"
                  >
                  Audience
                </button>
              </div>
              <div id="accordion-slide-4" class="collapse" aria-labelledby="accorder-opener-4" data-parent="#filter-accordion">
                <div class="card-body">
                  <ul class="filter-list">
                    <li><a href="#">List item</a></li>
                    <li><a href="#">List item</a></li>
                    <li><a href="#">List item</a></li>
                    <li><a href="#">List item</a></li>
                    <li><a href="#">List item</a></li>
                    <li><a href="#">List item</a></li>
                    <li><a href="#">List item</a></li>
                    <li><a href="#">List item</a></li>
                    <li><a href="#">List item</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="accorder-opener-5">
                <button
                class="btn btn-link collapsed"
                type="button"
                data-toggle="collapse"
                data-target="#accordion-slide-5"
                aria-expanded="false"
                aria-controls="accordion-slide-5"
                >
                Category
              </button>
            </div>
            <div id="accordion-slide-5" class="collapse" aria-labelledby="accorder-opener-5" data-parent="#filter-accordion">
              <div class="card-body">
                <ul class="filter-list">
                  <li><a href="#">List item</a></li>
                  <li><a href="#">List item</a></li>
                  <li><a href="#">List item</a></li>
                  <li><a href="#">List item</a></li>
                  <li><a href="#">List item</a></li>
                  <li><a href="#">List item</a></li>
                  <li><a href="#">List item</a></li>
                  <li><a href="#">List item</a></li>
                  <li><a href="#">List item</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade show active" id="session-tab-pane" role="tabpanel" aria-labelledby="session-tab">
        <div class="accordion filter-accordion" id="filter-accordion-2">
          <div class="card">
            <div class="card-header" id="accordion-opener-6">
              <button
              class="btn btn-link"
              type="button"
              data-toggle="collapse"
              data-target="#accordion-slide-6"
              aria-expanded="true"
              aria-controls="accordion-slide-6"
              >
              Track
            </button>
          </div>
          <div id="accordion-slide-6" class="collapse show" aria-labelledby="accordion-opener-6" data-parent="#filter-accordion-2">
            <div class="card-body">
              <ul class="filter-list">
                <li><a href="#" data-filter=".filter-0">Keynote Presentations</a></li>
                <li class="active"><a href="#" data-filter=".filter-1">Enterprise Case Study Presentations</a></li>
                <li><a href="#" data-filter=".filter-2">Technical Track Presentations</a></li>
                <li><a href="#" data-filter=".filter-3">Consumer Case Study Presentations</a></li>
                <li><a href="#" data-filter=".filter-4">Standards Track Presentations</a></li>
                <li><a href="#" data-filter=".filter-5">Policy Track Presentations</a></li>
                <li><a href="#" data-filter=".filter-6">Case Study Presentations</a></li>
                <li><a href="#" data-filter=".filter-7"> Best Practice Presentations</a></li>
                <li><a href="#" data-filter=".filter-8">Closing Keynotes</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="accorder-opener-7">
            <button
            class="btn btn-link collapsed"
            type="button"
            data-toggle="collapse"
            data-target="#accordion-slide-7"
            aria-expanded="false"
            aria-controls="accordion-slide-7"
            >
            Product
          </button>
        </div>
        <div id="accordion-slide-7" class="collapse" aria-labelledby="accorder-opener-7" data-parent="#filter-accordion-2">
          <div class="card-body">
            <ul class="filter-list">
              <li><a href="#">List item</a></li>
              <li><a href="#">List item</a></li>
              <li><a href="#">List item</a></li>
              <li><a href="#">List item</a></li>
              <li><a href="#">List item</a></li>
              <li><a href="#">List item</a></li>
              <li><a href="#">List item</a></li>
              <li><a href="#">List item</a></li>
              <li><a href="#">List item</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="accorder-opener-8">
          <button
          class="btn btn-link collapsed"
          type="button"
          data-toggle="collapse"
          data-target="#accordion-slide-8"
          aria-expanded="false"
          aria-controls="accordion-slide-8"
          >
          Technical level
        </button>
      </div>
      <div id="accordion-slide-8" class="collapse" aria-labelledby="accorder-opener-8" data-parent="#filter-accordion-2">
        <div class="card-body">
          <ul class="filter-list">
            <li><a href="#">List item</a></li>
            <li><a href="#">List item</a></li>
            <li><a href="#">List item</a></li>
            <li><a href="#">List item</a></li>
            <li><a href="#">List item</a></li>
            <li><a href="#">List item</a></li>
            <li><a href="#">List item</a></li>
            <li><a href="#">List item</a></li>
            <li><a href="#">List item</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="accorder-opener-9">
        <button
        class="btn btn-link collapsed"
        type="button"
        data-toggle="collapse"
        data-target="#accordion-slide-9"
        aria-expanded="false"
        aria-controls="accordion-slide-9"
        >
        Audience
      </button>
    </div>
    <div id="accordion-slide-9" class="collapse" aria-labelledby="accorder-opener-9" data-parent="#filter-accordion-2">
      <div class="card-body">
        <ul class="filter-list">
          <li><a href="#">List item</a></li>
          <li><a href="#">List item</a></li>
          <li><a href="#">List item</a></li>
          <li><a href="#">List item</a></li>
          <li><a href="#">List item</a></li>
          <li><a href="#">List item</a></li>
          <li><a href="#">List item</a></li>
          <li><a href="#">List item</a></li>
          <li><a href="#">List item</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="accorder-opener-10">
      <button
      class="btn btn-link collapsed"
      type="button"
      data-toggle="collapse"
      data-target="#accordion-slide-10"
      aria-expanded="false"
      aria-controls="accordion-slide-10"
      >
      Category
    </button>
  </div>
  <div id="accordion-slide-10" class="collapse" aria-labelledby="accorder-opener-10" data-parent="#filter-accordion-2">
    <div class="card-body">
      <ul class="filter-list">
        <li><a href="#">List item</a></li>
        <li><a href="#">List item</a></li>
        <li><a href="#">List item</a></li>
        <li><a href="#">List item</a></li>
        <li><a href="#">List item</a></li>
        <li><a href="#">List item</a></li>
        <li><a href="#">List item</a></li>
        <li><a href="#">List item</a></li>
        <li><a href="#">List item</a></li>
      </ul>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</nav>
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
            <input type="Password" class="form-control" id="password-5" placeholder="Password" />
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
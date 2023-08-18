<!doctype html>
<html <?php language_attributes(); ?>>

<head>

  <!-- Meta Elements -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- Always force latest IE rendering engine -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- shrink-to-fit addresses problem with iOS Safari-->
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="This describes the project Photoshop to WordPress Demo">
  <!-- 115 characters long -->
  <meta name="keywords" content="Photoshop to WordPress Demo,PSD2WP Demo,WordPress portfolio,Clark Alford,ClarkA,Clark A,remote developer,web developer,freelance developer,wordpress developer,wordpress expert,wordpress god,remote freelance wordpress developer">
  <!-- your,keywords,here,comma,separated,no,spaces.  Good for search other than google -->
  <meta name="robots" content="index, follow">
  <meta name="copyright" content="Clark Alford">
  <!-- name of owner -->
  <meta name="no-email-collection" content="https://www.projecthoneypot.org/law_of_harvesting.php">
  <!-- legal warning not to harvest emails from site -->
  <meta name="rating" content="general">
  <!-- general, mature, restricted, 14 years, safe for kids -->

  <!-- Bing Geo Meta Tags -->
  <meta name="geo.placename" content="Kansas City, KS, USA" />
  <meta name="geo.position" content="39.114053;-94.627464" />
  <meta name="geo.region" content="US-KS" />
  <meta name="ICBM" content="39.114053, -94.627464" />

  <!-- humans.txt we are people, not machines -->
  <link type="text/plain" rel="author" href="<?php echo get_theme_file_uri(); ?>/humans.txt" />

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_theme_file_uri(); ?>/assets/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_theme_file_uri(); ?>/assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_theme_file_uri(); ?>/assets/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_theme_file_uri(); ?>/assets/images/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_theme_file_uri(); ?>/assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="<?php echo get_theme_file_uri(); ?>/assets/images/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="<?php echo get_theme_file_uri(); ?>/assets/images/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <!-- CSS -->
  <!-- JS -->

  <!-- IE 9 or less -->
  <!--[if IE]>
              <script type="text/javascript">
                window.location = "http://browsehappy.com/";
              </script>
              <![endif]-->

<?php wp_head(); ?>
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <div class="preloader-icon">
      <span class="loading-dot loading-dot-1"></span>
      <span class="loading-dot loading-dot-2"></span>
      <span class="loading-dot loading-dot-3"></span>
    </div>
  </div>
  <!-- Navbar Area -->
  <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" data-scroll href="<?php echo site_url(); ?>">Clark Alford</a>
      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="nav-btn">Menu</span>
      </button>
      <div class="d-flex flex-row  order-0 order-lg-1">
        <div class="navbar-nav flex-row">
          <button id="navBtn" class="hamburger hamburger--slider" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>
      </div>
      <div id="navbarSupportedContent" class="collapse navbar-collapse order-1 order-lg-0">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(); ?>#header-area">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(); ?>#about-area">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(); ?>#services-area">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(); ?>#portfolio-area">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(); ?>#testimonials-area">Clients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(); ?>#blog-area">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(); ?>#contact-area">Contact</a>
          </li>
        </ul>
      </div>
      <div class="sidebar" id="sidebar">
        <button id="sidebarBtn" class="hamburger hamburger--slider is-active" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
        <div class="about-me">
          <img class="img-fluid img-thumbnail d-block mx-auto avatar" src="<?php echo get_theme_file_uri(); ?>/assets/images/sidebar-avatar.jpg" alt="About me">
          <address>
            <ul class="list-unstyled">
              <li>
                <span>Name</span>
                <p>Clark Alford</p>
              </li>
              <li>
                <span>Skills</span>
                <p>WordPress Hosting, VSC, Photoshop, JavaScript, PHP, HTML/CSS, Bootstrap, MySQL, Github, BitBucket</p>
              </li>
              <li>
                <span>Email</span>
                <p>
                  <a href="#" class="cryptedmail" data-name="clark" data-domain="clarka" data-tld="me"
                    onclick="window.location.href = 'mailto:' + this.dataset.name + '@' + this.dataset.domain + '.' + this.dataset.tld; return false;"></a>
                </p>
              </li>
              <li>
                <span>Address</span>
                <p>Kansas City, Kansas, USA.</p>
              </li>
              <li>
                <span>Age</span>
                <p><script>document.write(new Date().getFullYear()-1969)</script></p>
              </li>
              <li>
                <span>Date of Birth</span>
                <p>Aquarius</p>
              </li>
              <li>
                <span>Phone</span>
                <p>
                  <!-- Calendly link widget begin -->
                  <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
                  <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
                  <a href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/clark-2'});return false;">Schedule time with me</a>
                  <!-- Calendly link widget end -->
                </p>
              </li>
              <li>
                <span>Residence</span>
                <p>currently USA</p>
              </li>
              <li>
                <span>Freelance Status</span>
                <p>Available</p>
              </li>
            </ul>
          </address>
          <div class="social-medias">
            <a target="_blank" title="twitter" href="https://twitter.com/clarka77">
              <i class="icon ion-logo-twitter"></i>
            </a>
            <a target="_blank" title="linkedin" href="https://www.linkedin.com/in/clarka2">
              <i class="icon ion-logo-linkedin"></i>
            </a>
            <a target="_blank" title="github" href="https://github.com/clarka77">
              <i class="icon ion-logo-github"></i>
            </a>
            <a target="_blank" title="codepen" href="https://codepen.io/clarka77">
              <i class="icon ion-logo-codepen"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>

    <!-- Portfolio Detail Area -->
    <section class="single-section portfolio-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-heading">
              <h2 class="section-title">Portfolio Six</h2>
              <p class="section-description">A Glimpse into the Mind of a WordPress Webmaster</p>
            </div>
          </div>
        </div>
        <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-6.jpg" alt="Photoshop to WordPress Demo screenshot">
        <br>
        <br>
        <div style="background-color:#f7f7f7;">
            <h3>Project Role: WordPress Developer</h3>
            <p>&nbsp;</p>
            <h4><strong>Photoshop to WordPress Demo</strong></h4>
            <h4>Who They Are?</h4>
            <p><i>Photoshop to WordPress Demo</i> is a fully operational demonstration website of a fictional landing page.  I started with a Photoshop (PSD) file and then from that PSD file I made a responsive HTML website using Bulma as a CSS Framework.  A PSD file shows the idea of a design for one particular viewport.  By taking the PSD design and coverting it to a responsive HTML website; the design will now be viewable on all viewports no matter what the size of the device.</p>
            <p>I then proceeded to convert this customized HTML template into a functioning WordPress site.  I named my theme PSD2WP Demo and gave it a screenshot of the app.  I used as few plugins as possible to keep the site lean.  All the while coding this site I made to sure validate my code using WordPress Coding Standards.</p>
            <p>This is a mobile friendly website (according to the Bing Mobile Friendliness Test Tool), the HTTP Response Headers received a letter grade of A (according to the Security Headers test tool), and it is HTTP/2 verified (according to the KeyCDN Tools website). I'm using a LEMP stack no Apache; 100% Nginx.  No control panel is being used.  Everything is being handled thru the terminal.</p>
            <h5>Advanced Custom Fields Plugin</h5>
            <p>Using this plugin and adding WordPress shortcodes into my custom theme allows the user to easily change images in the Portfolio section as often as they would like.  The same can be said for the user easily changing the text to whatever they like whenever they like.  In addition I made the contact form functionable as well.</p>
            <h5>Custom 404, 403, and 401 Pages</h5>
            <p>I added a custom 404 page.  I also added custom 403 (server understand the request but refuses to authorize it) and custom 401 (the client request has not been completed because it lacks valid authentication credentials for the requested resource) pages.  This was accomplished by modifying the functions.php file.</p>
            <h5>The Admin Page is Client Friendly</h5>
            <p>The standard WordPress admin page has been customized to be client friendly. The dashboard has been customized with a Customer Service information box containing information on how to contact the Web Developer. The WordPress footer link has been modified as well giving customer service information.  All of the unecessary nag screens have been removed from the admin page for customer convenience.  I did all this without plugins instead coding into the functions.php file.</p>
            <h5>Summary</h5>
            <p>This project shows my ability to take a Photoshop (PSD) file and convert it into a responsive HTML website viewable on all different size devices and then convert said HTML website into a fully functioning WordPress site.</p>
            <h4>Screenshots</h4>
            <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-6a.jpg" alt="myhealthfitness screenshots">
            <br>
            <br>
            <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-6b.jpg" alt="myhealthfitness screenshots">
            <br>
            <br>
            <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-6c.jpg" alt="myhealthfitness screenshots">
            <br>
            <br>
            <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-6d.jpg" alt="myhealthfitness screenshots">
            <br>
            <br>
            <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-6e.jpg" alt="myhealthfitness screenshots">
            <br>
            <br>
            <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-6f.jpg" alt="myhealthfitness screenshots">
            <br>
            <br>
            <p>
                <a type="button" href="https://stage4.develop-ment.space" target="_blank" class="portfoliobutton">Link to Project</a>
            </p>
            <a href="<?php echo site_url(); ?>#portfolio-area">Back to Portfolio</a>
        </div>
      </div>
    </section>

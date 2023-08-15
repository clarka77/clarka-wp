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
  <meta name="description" content="This describes the project Real Estate Demo">
  <!-- 115 characters long -->
  <meta name="keywords" content="Real Estate Demo,WordPress portfolio,Clark Alford,ClarkA,Clark A,remote developer,web developer,freelance developer,wordpress developer,wordpress expert,wordpress god,remote freelance wordpress developer">
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
                <span>Curriculum Vitae</span>
                <p>
                  <a target="_blank" href="<?php echo site_url(); ?>/clarka.pdf">Download CV</a>
                </p>
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
              <h2 class="section-title">Portfolio Five</h2>
              <p class="section-description">A Glimpse into the Mind of a WordPress Webmaster</p>
            </div>
          </div>
        </div>
        <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-5.jpg" alt="Real Estate Demo screenshot">
        <br>
        <br>
        <div style="background-color:#f7f7f7;">
            <h3>Project Role: WordPress Developer</h3>
            <p>&nbsp;</p>
            <h4><strong>Real Estate Demo</strong></h4>
            <h4>Who They Are?</h4>
            <p><i>Real Estate Demo</i> is a fully operational demonstration website of a fictional real estate agency.  I started with a HTML template from code-theme which I received from envato market and customized it.  I kept most of the text as lorem ipsum.  Customized the images, colors, and background images as needed.  I made the logo using Canva and I made the favicons using the real favicon generator.</p>
            <p>I then proceeded to convert this customized HTML template into a functioning WordPress site.  I named my theme Real Estate Demo and gave it a screenshot of the app.  I used as few plugins as possible to keep the site lean.  I made proper use of the WordPress loop to display posts and custom post types in their proper location.  I also coded a custom search page and I coded a custom comments page.</p>
            <p>This is a mobile friendly website (according to the Bing Mobile Friendliness Test Tool), the HTTP Response Headers received a letter grade of A (according to the Security Headers test tool), and it is HTTP/2 verified (according to the KeyCDN Tools website). I'm using a LEMP stack no Apache; 100% Nginx.  No control panel is being used.  Everything is being handled thru the terminal.</p>
            <h5>Custom Login and Register Page</h5>
            <p>I redirected the normal login methods to my own custom login page.  I also redirected the normal register methods to my own custom register page.  I eneded up making a plugin for the custom register page.  Everything else required coding the functions.php file.  This is a much more customer friendly way to login or logout of the website.</p>
            <h5>Custom 404, 403, and 401 Pages</h5>
            <p>I added a custom 404 page.  I also added custom 403 (server understand the request but refuses to authorize it) and custom 401 (the client request has not been completed because it lacks valid authentication credentials for the requested resource) pages.  This was accomplished by modifying the functions.php file.</p>
            <h5>Custom Post Types</h5>
            <p>I used two custom post types for this site.  The post type 'Showings' for the Real Estate Listings.  Also the post type 'SalesAgents' for the Real Estate Agents.  I coded a plugin for this and made it a M-U (must used) plugin.  I was sure to add all the proper labels to the admin panel for ease of client's use (this also includes the proper menu WordPress icons).</p>
            <h5>Administrator Back Door</h5>
            <p>This one is a little controversial and I would never do this without the client's permission.  Many of my clients expect the web developer to fix their site no matter what (whether reasonable or unreasonable).  I use to just add a web developer user name to the site, however many clients would prefer not to see that.  So I added an 	Administrator Role to this site and hid the total number of users by one so that no one else can see that the Administrator Role even exists.  I accomplished this by modifying the functions.php file.</p>
            <h5>The Admin Page is Client Friendly</h5>
            <p>The standard WordPress admin page has been customized to be client friendly. The dashboard has been customized with a Customer Service information box containing information on how to contact the Web Developer. The WordPress footer link has been modified as well giving customer service information.  All of the unecessary nag screens have been removed from the admin page for customer convenience.  I did all this without plugins instead coding into the functions.php file.</p>
            <h4>Screenshots</h4>
            <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-5a.jpg" alt="myhealthfitness screenshots">
            <br>
            <br>
            <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-5b.jpg" alt="myhealthfitness screenshots">
            <br>
            <br>
            <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-5c.jpg" alt="myhealthfitness screenshots">
            <br>
            <br>
            <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-5d.jpg" alt="myhealthfitness screenshots">
            <br>
            <br>
            <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-5e.jpg" alt="myhealthfitness screenshots">
            <br>
            <br>
            <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-5f.jpg" alt="myhealthfitness screenshots">
            <br>
            <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-5g.jpg" alt="myhealthfitness screenshots">
            <br>
            <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-5h.jpg" alt="myhealthfitness screenshots">
            <br>
            <br>
            <p>
                <a type="button" href="https://stage3.develop-ment.space" target="_blank" class="portfoliobutton">Link to Project</a>
            </p>
            <a href="<?php echo site_url(); ?>#portfolio-area">Back to Portfolio</a>
        </div>
      </div>
    </section>

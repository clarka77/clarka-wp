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
  <meta name="description" content="This describes the project My Health Fitness">
  <!-- 115 characters long -->
  <meta name="keywords" content="My Health Fitness,WordPress portfolio,Clark Alford,ClarkA,Clark A,remote developer,web developer,freelance developer,wordpress developer,wordpress expert,wordpress god,remote freelance wordpress developer">
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
              <h2 class="section-title">Portfolio Four</h2>
              <p class="section-description">A Glimpse into the Mind of a WordPress Webmaster</p>
            </div>
          </div>
        </div>
        <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-4.jpg" alt="My Health Fitness screenshot">
        <br>
        <br>
        <div style="background-color:#f7f7f7;">
                    <h3>Project Role: WordPress Developer</h3>
                    <p>&nbsp;</p>
          <h4><strong>My Health Fitness</strong></h4>
          <h4>Who They Are?</h4>
          <p><i>My Health Fitness</i> is a fully operational ecommerce website made using WordPress and WooCommerce. I used the Easy Store Theme and developed all the pages, menus, widgets, and posts to fit with the website.  I made the logo using Logo Instant as a starting point and then modified it to fit the website using Adobe Photoshop.</p>
                    <p>I set up Ubuntu 20.04 on a RamNode VPS and then proceeded to update the php version and php modules, install nginx, and install MariaDB.  Instead of using a control panel I made my own LEMP server from the command line.  I verified that this website supports HTTP/2.  My web page performance test results shows an 'A' rating and has an effective use of Cloudflare as a CDN.  My security headers that I set up are rated an 'A', according to the Security Report Summary.  This website also passes all test of the Mobile Friendliness Test Tool according to Microsoft Bing.</p>
                    <h5>WooCommerce</h5>
                    <p>This is clean website with a lot of white space for easy viewing.  There is an all products page as well as products broken down by individual category.  Each product has a quick view, add to cart, and an add to wishlist button.  Each product has a quick description above the fold using bullet points along with descriptive icons.  All images enlarge when hovered over.  Below each image is a tab with a more detailed description.  Also separate tabs which reveal links to downloadable pdf files.  This website is configured to accept payments thru Stripe.</p>
          <h5>The Admin Page is Client Friendly</h5>
          <p>The standard WordPress admin page has been customized to be client friendly. The dashboard has been customized with an information box containing information and a link to an Instruction Manual.  There is also an information box displaying analytics for the web site and another information box with my (the WordPress Webmaster) contact credentials.   The login page (<a href="https://www.myhealthfitness.review/wp-login.php" target="_blank">click here</a>) has also been customized displaying a large logo and styled using the website's color palette. </p>
          <p>Overall this is a customer friendly website for anyone looking to purchase a health or fitness product.</p>
          <h4>Screenshots</h4>
          <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-4a.jpg" alt="myhealthfitness screenshots">
          <br>
          <br>
          <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-4b.jpg" alt="myhealthfitness screenshots">
          <br>
          <br>
          <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-4c.jpg" alt="myhealthfitness screenshots">
          <br>
          <br>
                    <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-4d.jpg" alt="myhealthfitness screenshots">
          <br>
          <br>
          <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-4e.jpg" alt="myhealthfitness screenshots">
          <br>
          <br>
          <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-4f.jpg" alt="myhealthfitness screenshots">
          <br>
                    <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-4g.jpg" alt="myhealthfitness screenshots">
          <br>
                    <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-4h.jpg" alt="myhealthfitness screenshots">
          <br>
                    <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-4i.jpg" alt="myhealthfitness screenshots">
          <br>
          <br>
          <p>
            <a type="button" href="https://stage5.develop-ment.space" target="_blank" class="portfoliobutton">Link to Project</a>
          </p>
          <a href="<?php echo site_url(); ?>#portfolio-area">Back to Portfolio</a>
        </div>
      </div>
    </section>

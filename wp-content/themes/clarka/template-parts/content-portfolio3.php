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
  <meta name="description" content="This describes the project AppCelebrity">
  <!-- 115 characters long -->
  <meta name="keywords" content="AppCelebrity,WordPress portfolio,Clark Alford,ClarkA,Clark A,remote developer,web developer,freelance developer,wordpress developer,wordpress expert,wordpress god,remote freelance wordpress developer">
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
              <h2 class="section-title">Portfolio Three</h2>
              <p class="section-description">A Glimpse into the Mind of a WordPress Webmaster</p>
            </div>
          </div>
        </div>
        <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-3.jpg" alt="AppCelebrity screenshot">
        <br>
        <br>
        <div style="background-color:#f7f7f7;">
                    <h3>Project Role: WordPress Developer</h3>
                    <p>&nbsp;</p>
          <h4><strong>AppCelebrity</strong></h4>
          <h4>Who They Are?</h4>
          <p><i>AppCelebrity</i> is a fully operational demonstration website of a fictional smart phone app. I used the HTML template called Appsperia which I  received from envato market and customized it.  I changed most of the text (leaving some lorem ipsum) and all of the images.  I also changed the color palette, background image, and  I made the logo using the SquareSpace logo maker. I made multiple favicons using the real favicon generator.</p>
                    <p>This is fast loading website (according to GT Metrix); which is important for SEO as well as (UX) user experience. The database is cleaned regularly and there is a firewall to protect the website. Also this is a mobile friendly website (according to the Bing Mobile Friendliness Test Tool). I am using unmanaged hosting thru RamNode. I’m using an Nginx in front of Apache App Stack thru Moss.sh. In addition I am using CloudFlare as a CDN (content delivery network) and a DNS (domain name system) for faster performance globally.</p>
                    <h5>HTML to WordPress</h5>
                    <p>I then proceeded to convert this HTML template into a functioning WordPress site.  I named my theme AppCelebrity and gave it a screenshot of the app.  I made sure to enqueue properly all of my javascript and css files.  I even added a custom 404 page to this WordPress site.  Each and every image can be changed thru the post's featured image section.  No matter what size image is uploaded, the image will be resized to keep the website layout correct.  I also have a default image on this WordPress site in case no image is selected.</p>
          <h5>The Admin Page is Client Friendly</h5>
          <p>The standard WordPress admin page has been customized to be client friendly.  The login page (<a href="http://stage2.develop-ment.space/wp-login.php" target="_blank">click here</a>) has been customized to include the client's logo.  The admin page has been customized as well to include the client's logo.  The admin page also has information specific for the client in the 'Welcome' panel.</p>
          <h5>WordPress Plugin</h5>
          <p>I also made a simple WordPress Contact Form for this website which I labeled <strong>Clark Contact Form Plugin.</strong>  The Contact Form is a one page php file which sends the form to the WordPress Admin's email address.  Each input field requires the proper alpha numeric sequence and the input is sanitized before going into the database.</p>
          <p>Overall this is a great website for anyone marketing a smart phone app.</p>
          <h4>Screenshots</h4>
          <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-3a.jpg" alt="appcelebrity screenshots">
          <br>
          <br>
          <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-3b.jpg" alt="appcelebrity screenshots">
          <br>
          <br>
          <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-3c.jpg" alt="appcelebrity screenshots">
          <br>
          <br>
                    <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-3d.jpg" alt="appcelebrity screenshots">
          <br>
          <br>
          <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-3e.jpg" alt="appcelebrity screenshots">
          <br>
          <br>
          <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-3f.jpg" alt="appcelebrity screenshots">
          <br>
                    <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-3g.jpg" alt="appcelebrity screenshots">
          <br>
                    <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-3h.jpg" alt="appcelebrity screenshots">
          <br>
          <br>
          <p>
            <a type="button" href="http://stage2.develop-ment.space" target="_blank" class="portfoliobutton">Link to Project</a>
          </p>
          <a href="<?php echo site_url(); ?>#portfolio-area">Back to Portfolio</a>
        </div>
      </div>
    </section>

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
  <meta name="description" content="This describes the project Is It Just Us">
  <!-- 115 characters long -->
  <meta name="keywords" content="Is It Just Us,WordPress portfolio,Clark Alford,ClarkA,Clark A,remote developer,web developer,freelance developer,wordpress developer,wordpress expert,wordpress god,remote freelance wordpress developer">
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
              <h2 class="section-title">Portfolio One</h2>
              <p class="section-description">A Glimpse into the Mind of a WordPress Webmaster</p>
            </div>
          </div>
        </div>
        <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-1.jpg" alt="is it just us screenshot">
        <br>
        <br>
        <div style="background-color:#f7f7f7;">
                    <h3>Project Role: WordPress Webmaster</h3>
                    <p>&nbsp;</p>
          <h4><strong>Is It Just Us</strong></h4>
          <h4>Who They Are?</h4>
          <p><i>Is It Just Us</i> is a News Aggregator Website targeting the Black Experience.  The site is designed to bring in various news articles from across the internet, relating to the Black community, into one central location.</p>
                    <p>This is a website using the Wordpress content management system (CMS). I used the Mesocolumn Theme by Dezzain. I used different shades of green as my color palette for this website. To pull in the various news feeds from across the internet and to make sure the link goes back to the original article, rather than a page on my website, I used the plugin AutoBlog by WPMU DEV. To get the links to open in a new window on the browser I used the plugin WP External Links. My method was different; however I would like to give credit to Andrea Whitmer over at http://nutsandboltsmedia.com for the inspiration for this website.</p>
                    <p>I also made an effort to keep the number of plugins low to keep the website performance up. I am using unmanaged hosting thru RamNode. I’m using an Nginx in front of Apache App Stack thru ServerPilot; and I monitor the server’s performance thru NodeQuery. In addition I am using CloudFlare as a CDN (content delivery network) and a DNS (domain name system) for faster performance globally.</p>
          <h5>Get the Daily Digest</h5>
          <p>In a text widget I made a ‘Get the Daily Digest’ button using a CSS button generator which when clicked links to a form made using the plugins; Ninja Kick: Contact Form and MailChimp for Wordpress. The cool thing about this is it pushes content away while revealing the contact form. This particular form has all subscribers go through a double opt-in process, which conforms to anti-spam laws. Once subscribed individuals receive one daily email listing the latest news for the day. I also included icon links to twitter and a website RSS feed.</p>
          <h5>Get the Latest News on Twitter</h5>
          <p>For all those that love social media; I made a twitter account where you can get the latest news tweeted on your timeline. I used a free service called Deliver It http://dlvr.it, which takes the RSS feed from this website and tweets the title along with a shorten link to the original article. I was also able to include a hashtag at the beginning of every tweet to make it easier for those interested in the tweets to find them.</p>
          <p>The twitter header image consists of two separate images combined. The image on the left consists of; the title of the website in large font using a bevel and emboss effect, along with a drop shadow. The website URL is a smaller font size positioned above the logo. The image on the right is a modified Photoshop template which gives the appearance of two images, one resting on the other resting on a computer monitor, which is showing a third image. Then I combined the two images side by side into one larger image and together it became the twitter header image.</p>
          <h4>Screenshots</h4>
          <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-1a.jpg" alt="is it just us screenshots">
          <br>
          <br>
          <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-1b.jpg" alt="is it just us screenshots">
          <br>
          <br>
          <img class="responsive" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/portfolio-1c.jpg" alt="is it just us screenshots">
          <br>
          <br>
          <!-- Website is no longer active
          <p>
            <a type="button" href="http://www.isitjust.us" target="_blank" class="portfoliobutton">Link to Project</a>
          </p>
          -->
          <a href="<?php echo site_url(); ?>#portfolio-area">Back to Portfolio</a>
        </div>
      </div>
    </section>

<?php
/**
 * Header
 *
 * Main header file for the theme.
 * php version 8.1.12
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Clark_A
 * @author     Clark Alford <clark@clarka.me>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @since      1.0.0
 */
?>
<!doctype html>
<!--

        "Let no one excel you in anything;
          love for your brother what you love
            for yourself."

                                  Master Fard Muhammad
                                  The Mahdi

        -->
<html <?php language_attributes(); ?>>

<head>
  <!-- Meta Elements -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- Always force latest IE rendering engine -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- shrink-to-fit addresses problem with iOS Safari-->
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <?php if (is_page() ) { ?>
  <meta name="description" content="I'm a remote freelance Wordpress expert Developer God. Have a project in mind; contact me and let's discuss it.">
  <!-- 115 characters long -->
  <meta name="keywords" content="Clark Alford,ClarkA,Clark A,remote developer,web developer,freelance developer,wordpress developer,wordpress expert,wordpress god,remote freelance wordpress developer">
  <!-- kwds,comma,separated,no,spaces. Good for search other than google. Use on pages only -->
  <?php } ?>
  <meta name="robots" content="index, follow">
  <?php if (is_front_page() ) { ?>
  <meta name="abstract" content="I help designers, individuals, and small businesses bring their designs or ideas to digital life on the world wide web so they can increase customer engagement, generate repeat website traffic, and improve brand presence.">
  <!-- a very short description of your website; just need on index page -->
  <?php } ?>
  <?php if (is_single() ) { ?>
  <?php $current_url = get_permalink(get_the_ID()); ?>
  <meta name='syndication-source' content='<?php echo $current_url; ?>'>
  <meta name='original-source' content='<?php echo $current_url; ?>'>
  <!-- claim the posts as the original source -->
  <?php
    // Making an excerpt of the blog post content
    $excerpt = strip_tags($post->post_content);
    if (strlen($excerpt) > 100) {
        $excerpt = substr($excerpt, 0, 100);
        $excerpt = substr($excerpt, 0, strrpos($excerpt, ' '));
    }
    ?>
  <meta name="description" content="<?php echo $excerpt; ?>">
  <!-- excerpt from post max 100 characters long -->
  <?php } ?>
  <meta name="copyright" content="Clark Alford">
  <!-- name of owner -->
  <meta name="no-email-collection" content="https://www.projecthoneypot.org/law_of_harvesting.php">
  <!-- legal warning not to harvest emails from site -->
  <meta name="rating" content="general">
  <!-- general, mature, restricted, 14 years, safe for kids -->
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <!-- link to the RSS Feed of my website -->
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <!-- link for the Pingback URL of my site -->

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

<header>
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
          <li class="nav-item active">
            <a class="nav-link" href="index.php#header-area">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#about-area">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#services-area">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#portfolio-area">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#testimonials-area">Clients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#blog-area">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#contact-area">Contact</a>
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
                <p>WordPress Hosting, WooCommerce, VSC, Photoshop, JavaScript, PHP, HTML/CSS, Bootstrap, MySQL, Github, BitBucket</p>
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
                <p id="age2"></p>
                <script>
                    document.getElementById("age2").innerHTML = howoldami();

                    function howoldami () {
                      var birthdate = new Date("1969/2/16");
                      var cur = new Date();
                      var diff = cur-birthdate;
                      var age = Math.floor(diff/31536000000);

                      return age;
                    }
                  </script>
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
            <a target="_blank" title="twitter" href="https://www.twitter.com/clarka77">
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
  <!-- Header Area (Home) -->
  <section class="header-area section-fixed-bg section-overlay-bg" id="header-area">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center">
        <div class="col-12 col-lg-8 home-content text-center">
          <h5 class="greet">Hello, my name is
            <b>Clark</b>
          </h5>
          <h1 class="skills cd-headline clip">I'm a
            <span class="cd-words-wrapper single-skill">
              <b class="is-visible">WordPress Dev</b>
              <b>PHP Dev</b>
              <b>Web Developer</b>
              <b>Webmaster</b>
            </span>
          </h1>
          <p class="description">I help designers, individuals, and small businesses bring their designs or ideas to digital life on the world wide web so they can develop customer engagement, generate repeat website traffic, improve brand presence, and increase sales.</p>
          <a class="btn work" data-scroll href="#portfolio-area" role="button">My Work</a>
          <a class="btn hire button-scheme" data-scroll href="http://www.calendly.com/clark-2" role="button">Hire me</a>
        </div>
        <div class="scroll-icon">
          <a data-scroll href="#about-area">
            <div class="mouse">
              <div class="wheel"></div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
</header>

<?php
/**
 * The template for displaying all single posts
 * php version 8.1.11
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Clark_A
 * @author     Clark Alford <clark@clarka.me>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @since      1.0.0
 */
?>

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
  <meta name="robots" content="index, follow">
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

<?php while( have_posts() ): ?>
    <?php the_post(); ?>
<!-- Portfolio Detail Area -->
<section class="single-section portfolio-area">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-heading">
          <img class="responsive" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id((int)$atts['id']), 'full', false)[0]?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true); ?>"><br><br>
          <h2 class="section-title"><?php echo get_the_title(); ?></h2><br><br>
          <img class="float-left" src="<?php echo home_url(); ?>/wp-content/uploads/2022/12/about1-150x150.jpeg" width="75" height="75" style="padding-right:15px">
          <p class="float-left"><strong><?php
            $fname = get_the_author_meta('first_name');
            $lname = get_the_author_meta('last_name');
            $full_name = '';
            if(empty($fname)) {
                $full_name = $lname;
            } elseif(empty($lname)) {
                $full_name = $fname;
            } else {
                //both first name and last name are present
                $full_name = "{$fname} {$lname}";
            }
            echo $full_name; ?></strong><br>
          <?php echo bloginfo('description'); ?><br>
          Published on <?php echo get_the_date('M-d-Y'); ?></p>
          <div class="clearfix"></div><br><br>
          <?php
            $phrase = get_the_content();
            // This is where wordpress filters the content text and adds paragraphs
            $phrase = apply_filters('the_content', $phrase);
            $replace = '<p style="text-align: left; font-size: 2em; line-height: 1.5; color: #444444; font-weight: 400;">';
            echo str_replace('<p>', $replace, $phrase);
            ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>

<?php get_footer(); ?>

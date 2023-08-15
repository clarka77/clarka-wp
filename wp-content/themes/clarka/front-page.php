<?php
/**
 * Front Page
 *
 * Front Page file for the theme.
 * php version 8.1.12
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Clark_A
 * @author     Clark Alford <clark@clarka.me>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://developer.wordpress.org/themes/basics/template-files/
 * @since      1.0.0
 */
?>

<?php
/*
 * Add the two functions to create or resume a PHP session; if you haven't done so, ignore otherwise.
 *
 */

ob_start();
session_start();

// Include the SASLA class
require get_theme_file_path('sasla.php');

if (!empty($_POST)) {
    /*
    * Spam checking...
    */

    if (Sasla::isASpam()) {
        echo '<strong>GO AWAY SPAMmer.  SASLA in Action</strong>';
    }
}
?>

<?php
$response = "";

//function to generate response
function my_contact_form_generate_response($type, $message)
{
    global $response;
    if($type == "success") { $response = "<div class='alert alert-success'>{$message}</div>";
    } else { $response = "<div class='alert alert-danger'>{$message}</div>";
    }
}

//response messages
$not_human       = "Work out the math";
$missing_content = "Supply all required fields.";
$email_invalid   = "Email Address is invalid.";
$message_unsent  = "Message was not sent. Try Again.";
$message_sent    = "Thank you! Your message has been sent.";

//user posted variables
$name = sanitize_text_field($_POST['clarka_name']);
$email = sanitize_email($_POST['clarka_email']);
$msgsubject = sanitize_text_field($_POST['clarka_msg_subject']);
$human = sanitize_text_field($_POST['clarka_testquestion']);
$message = sanitize_textarea_field($_POST['clarka_message']);
// Keeps line breaks in paragraphs
$bodymessage = nl2br($message);

//php mailer variables
$to = get_option('admin_email');
$subject = "Message from ClarkA.me";
// To send HTML mail, the 'Content-type' header must be set
// Content-type: text/html => <br> Content-type: text/plain => \r\n
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '. $to . "\r\n";
$headers .= 'Reply-To: ' . $email . "\r\n";
$body = '<h5>Name:</h5> ' . $name;
$body .= '<h5>Email:</h5> ' . $email;
$body .= '<h5>Subject:</h5> ' . $msgsubject;
$body .= '<h5>Message:</h5> ' . $bodymessage;
$body .= '<br><br><br><br>';

//validate if human or bot
if(!$human == 0) {
    if($human != 5) { my_contact_form_generate_response("error", $not_human); //not human!
    } else {
        //validate email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            my_contact_form_generate_response("error", $email_invalid);
        } else //email is valid
        {
            //validate presence of name, subject, and message
            if(empty($name) || empty($msgsubject) || empty($message)) {
                my_contact_form_generate_response("error", $missing_content);
            }
            else //ready to go!
            {
                $sent = wp_mail($to, $subject, $body, $headers);
                if($sent) { header('Location: thankyou'); //message sent!
                }
                //if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
                else { my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
                }
            }
        }
    }
}
else if ($_POST['submitted']) { my_contact_form_generate_response("error", $missing_content);
}

get_header(); ?>

<!-- About Area -->
<section class="single-section about-area" id="about-area">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="row align-items-center">
          <div class="col-12 col-lg-5">
            <img class="img-fluid img-thumbnail about-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/about-img.jpg" alt="About Picture">
          </div>
          <div class="col-12 col-lg-7">
            <div class="content-block">
              <h2 class="about-title">About Me</h2>
              <h6 class="about-role">I am a Remote WordPress Webmaster</h6>
              <p class="about-description">My name is
                <b>Clark Alford</b>.  As a Remote WordPress Webmaster in Kansas City, I can work with clients whom are located anywhere in the world. Using my LAMP or LEMP stack skills, Linux/Apache or NGINX/MySQL[MariaDB]/PHP, I create the website or web application so that the client can see and interact with it directly. With a focus on cross-browser testing, HTML Semantics, and Accessibility testing, I ensure each website gives the end user the intended experience no matter what viewport device is being used. I stay updated on the latest trends in web development to not only keep my clients' websites safe, but also to be at the forefront of my industry.</p>
              <p class="about-description">Some of my duties as a WordPress Webmaster is getting the website designed (front-end)(what you see).  Getting the website developed (back-end)(make it function properly).  Basic on page SEO (search engine optimization) and analytics set up. Ongoing maintenance for your website.  Managing the server(s) for your website.  In addition I can arrange for your website content marketing, off page SEO, as well as SMM (social media marketing).</p>
              <p class="about-description last">I stay active in various freelance associations, I network with other developers, and I regularly attend local meetup meetings. A Webmaster’s education is never done which is perfect for me because I enjoy finding new ways of doing things. I'm able to work solo or in a team environment. Have a project in mind; contact me and let's discuss it.</p>
              <address>
                <ul class="list-inline about-info">
                  <li class="list-inline-item">
                    <span>Name:</span>
                    <p>Clark Alford</p>
                  </li>
                  <li class="list-inline-item">
                    <span>Email:</span>
                    <p>
                      <a href="#" class="cryptedmail" data-name="clark" data-domain="clarka" data-tld="me"
                    onclick="window.location.href = 'mailto:' + this.dataset.name + '@' + this.dataset.domain + '.' + this.dataset.tld; return false;"></a>
                    </p>
                  </li>
                  <li class="list-inline-item mb-0">
                    <span>Age:</span>
                    <p id="age"></p>
                    <script>
                    document.getElementById("age").innerHTML = howoldami();

                    function howoldami () {
                      var birthdate = new Date("1969/2/16");
                      var cur = new Date();
                      var diff = cur-birthdate;
                      var age = Math.floor(diff/31536000000);

                      return age;
                    }
                    </script>
                  </li>
                  <li class="list-inline-item mb-0">
                    <span>From:</span>
                    <p>Kansas City, Kansas, USA</p>
                  </li>
                </ul>
              </address>
              <button type="button" class="btn button-outline details">More Details</button><br><br>
              <div>
                <a target ="_blank" title="Freelancers Union" href="https://www.freelancersunion.org/resources/black-freelancers-web-directory/directory-responses/"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/freelancersunion-memberbadge.png" style="width: 175px; height: auto;"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a target ="_blank" title="Featured Expert Clark Alford" href="https://whatsaytheexperts.com/how-to-secure-wordpress-site"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/featured-expert-badge.png" style="width: 175px; height: auto;"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a id='COCBadgeURL' href='https://www.chamberofcommerce.com/united-states/kansas/kansas-city/website-management/2012572921-clark-alford-lc?source=memberwebsite' target='_tab'><img style='width:auto;height:150px;' id='COCBadgeIMG' src="<?php echo get_theme_file_uri(); ?>/assets/images/commerce_member.png"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services Area -->
<section class="single-section silver-bg services-area" id="services-area">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-heading">
          <h2 class="section-title">Services</h2>
          <p class="section-description">What Can I Do For You?</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="single-service">
          <a href="<?php echo site_url(); ?>/services">
            <i class="icon ion-md-tv"></i>
            <div class="service-body">
              <h6 class="service-title">Website Audit</h6>
              <p class="service-description">Mobile Testing<br>Accessibility Testing<br>W3C Compliant<br>Structured Data Testing<br>Load Testing<br>Site Speed Measurement</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="single-service">
          <a href="<?php echo site_url(); ?>/services">
            <i class="icon ion-md-image"></i>
            <div class="service-body">
              <h6 class="service-title">Custom WP Design</h6>
              <p class="service-description">Design Theme from Scratch<br>No other website will use your theme<br>Customized Administration Dashboard<br>You can adjust site colors<br>Won't look like a WordPress site<br>Tailored Made for your Business Needs</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="single-service">
          <a href="<?php echo site_url(); ?>/services">
            <i class="icon ion-md-images"></i>
            <div class="service-body">
              <h6 class="service-title">PSD to WordPress</h6>
              <p class="service-description">Bring life to your Photoshop designs<br>Pixel perfect development<br>Code is clean, semantic and valid<br>Responsive Design<br>Customize dynamic content<br>Can be other formats e.g. sketch, pdf, etc.</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="single-service mb-lg-0">
          <a href="<?php echo site_url(); ?>/services">
            <i class="icon ion-md-cash"></i>
            <div class="service-body">
                <h6 class="service-title">Ecommerce</h6>
                <p class="service-description">Specializing in Ecommerce Sites<br>WooCommerce Development<br>Whether you have 1 or 1000 products<br>Work with any merchant account<br>Work with any size businesses<br>Thorough testing before delivery</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="single-service mb-md-0">
          <a href="<?php echo site_url(); ?>/services">
            <i class="icon ion-md-tablet-portrait"></i>
            <div class="service-body">
              <h6 class="service-title">Hosting</h6>
              <p class="service-description">Web Hosting<br>Specialized for WordPress<br>Different Packages for Different Needs<br>Email Hosting<br>Specialized to Get Into the Inbox<br>Hosting for Email Newsletters</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="single-service mb-0">
          <a href="<?php echo site_url(); ?>/services">
            <i class="icon ion-md-tablet-landscape"></i>
            <div class="service-body">
              <h6 class="service-title">Website Maintenance</h6>
              <p class="service-description">Daily Backup<br>Malware Monitoring & Remediation<br>WordPress Plugin Updates<br>Unauthorized Change Notification<br>Web Host to Web Host Transfer<br>Uptime Monitoring</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Hire Area -->
<section class="single-section section-fixed-bg section-overlay-bg hire-area" id="hire-area">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <h1 class="hire-title">Let's Work Together!</h1>
        <p class="hire-description">I am available for freelance projects. Hire me and get your project done.</p>
        <a class="btn hire" data-scroll href="http://www.calendly.com/clark-2" role="button">Hire Me</a>
      </div>
    </div>
  </div>
</section>

<!-- Portfolio Area -->
<section class="single-section portfolio-area" id="portfolio-area">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-heading">
          <h2 class="section-title">Portfolio</h2>
          <p class="section-description">Browse a small sample of what I can do!</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 p-0">
        <ul class="list-inline filter-control d-flex justify-content-center" role="group" aria-label="Filter Control">
          <li class="list-inline-item tab-active" data-group="all">All</li>
          <li class="list-inline-item" data-group="psd2wp">PSD to WP</li>
          <li class="list-inline-item" data-group="woocommerce">WooCommerce</li>
          <li class="list-inline-item" data-group="wordpress">WordPress</li>
        </ul>
        <div class="shufflejs" id="shufflejs">
          <div class="js-item col-6 col-lg-4" data-groups='["psd2wp"]'>
            <div class="item-overlay">
              <img class="img-fluid" alt="Item" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/item-6.jpg">
              <div class="overlay-content">
                <h6 class="overlay-title">Landing Page</h6>
                <!--Software box</h6>-->
                <div class="overlay-icons">
                  <a class="popup-item" href="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/item-6.jpg" data-lity>
                    <i class="icon ion-md-eye"></i>
                  </a>
                  <a href="<?php echo site_url(); ?>/portfolio-six">
                    <i class="icon ion-md-link"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="js-item col-6 col-lg-4" data-groups='["wordpress"]'>
            <div class="item-overlay">
              <img class="img-fluid" alt="Item" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/item-5.jpg">
              <div class="overlay-content">
                <h6 class="overlay-title">Clark's Real Estate</h6>
                <div class="overlay-icons">
                  <a class="popup-item" href="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/item-5.jpg" data-lity>
                    <i class="icon ion-md-eye"></i>
                  </a>
                  <a href="<?php echo site_url(); ?>/portfolio-five">
                    <i class="icon ion-md-link"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="js-item col-6 col-lg-4" data-groups='["woocommerce"]'>
            <div class="item-overlay">
              <img class="img-fluid" alt="Item" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/item-4.jpg">
              <div class="overlay-content">
                <h6 class="overlay-title">My Health Fitness</h6>
                <div class="overlay-icons">
                  <a class="popup-item" href="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/item-4.jpg" data-lity>
                    <i class="icon ion-md-eye"></i>
                  </a>
                  <a href="<?php echo site_url(); ?>/portfolio-four">
                    <i class="icon ion-md-link"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="js-item col-6 col-lg-4 mb-lg-0" data-groups='["wordpress"]'>
            <div class="item-overlay">
              <img class="img-fluid" alt="Item" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/item-3.jpg">
              <div class="overlay-content">
                <h6 class="overlay-title">AppCelebrity</h6>
                <div class="overlay-icons">
                  <a class="popup-item" href="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/item-3.jpg" data-lity>
                    <i class="icon ion-md-eye"></i>
                  </a>
                  <a href="<?php echo site_url(); ?>/portfolio-three">
                    <i class="icon ion-md-link"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="js-item col-6 mb-0 col-lg-4 mb-lg-0" data-groups='["wordpress"]'>
            <div class="item-overlay">
              <img class="img-fluid" alt="Item" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/item-2.jpg">
              <div class="overlay-content">
                <h6 class="overlay-title">Clark's Steakhouse</h6>
                <div class="overlay-icons">
                  <a class="popup-item" href="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/item-2.jpg" data-lity>
                    <i class="icon ion-md-eye"></i>
                  </a>
                  <a href="<?php echo site_url(); ?>/portfolio-two">
                    <i class="icon ion-md-link"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="js-item col-6 mb-0 col-lg-4 mb-lg-0" data-groups='["wordpress"]'>
            <div class="item-overlay">
              <img class="img-fluid" alt="Item" src="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/item-1.jpg">
              <div class="overlay-content">
                <h6 class="overlay-title">Is It Just Us</h6>
                <div class="overlay-icons">
                  <a class="popup-item" href="<?php echo get_theme_file_uri(); ?>/assets/images/portfolio/item-1.jpg" data-lity>
                    <i class="icon ion-md-eye"></i>
                  </a>
                  <a href="<?php echo site_url(); ?>/portfolio-one">
                    <i class="icon ion-md-link"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-4 sizer-element"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials Area -->
<section class="single-section section-fixed-bg section-overlay-bg testimonials-area" id="testimonials-area">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-heading only-title">
          <h2 class="section-title">Testimonials</h2>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="owl-carousel owl-theme">
        <div class="col-12 col-md-8 offset-md-2">
          <div class="single-review text-center">
            <i class="icon ion-md-quote quote-icon"></i>
            <p class="client-review">Clark did an excellent job, creating my wordpress site.  He professionally addressed all my requests and also provided his own artistic insights. Quick and conflict free. I would definitely recommend and would gladly use again!</p>
            <div class="flex-row client-details">
              <div class="media justify-content-center">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/client-1.jpg" alt="Client" class="img-fluid rounded-circle client-avatar">
                <div class="align-self-center">
                  <h6 class="client-name">Andre Thompson</h6>
                  <span class="client-role">Photographer</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-8 offset-md-2">
          <div class="single-review text-center">
            <i class="icon ion-md-quote quote-icon"></i>
            <p class="client-review">I just want to say a HUGE thank you to Clark for helping me level up my business and my online presence.</p>
            <div class="flex-row client-details">
              <div class="media justify-content-center">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/client-2.jpg" alt="Client" class="img-fluid rounded-circle client-avatar">
                <div class="align-self-center">
                  <h6 class="client-name">Robert Jones</h6>
                  <span class="client-role">Computer Repairman</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-8 offset-md-2">
          <div class="single-review text-center">
            <i class="icon ion-md-quote quote-icon"></i>
            <p class="client-review">After spending several hours trying to put together a profile for myself I decided my time was better spent working on the parts of my business I enjoy and am good at and I should outsource the work I don’t enjoy and am not good at.  I would definitely recommend Clark to anyone looking to create or improve their website.</p>
            <div class="flex-row client-details">
              <div class="media justify-content-center">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/client-3.jpg" alt="Client" class="img-fluid rounded-circle client-avatar">
                <div class="align-self-center">
                  <h6 class="client-name">Eliot Birdsong</h6>
                  <span class="client-role">Musician</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-8 offset-md-2">
          <div class="single-review text-center">
            <i class="icon ion-md-quote quote-icon"></i>
            <p class="client-review">Clark was able to put together a profile for me that far exceeded my expectations. He was able to accurately capture my voice and my brand and put together a profile I felt comfortable presenting as myself.</p>
            <div class="flex-row client-details">
              <div class="media justify-content-center">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/client-4.jpg" alt="Client" class="img-fluid rounded-circle client-avatar">
                <div class="align-self-center">
                  <h6 class="client-name">Frank King</h6>
                  <span class="client-role">Lawn Care Provider</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Blog Area -->
<section class="single-section blog-area" id="blog-area">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-heading">
          <h2 class="section-title">My Blog</h2>
          <p class="section-description">The most popular articles that I’ve published recently</p>
        </div>
      </div>
    </div>
    <div class="row">
        <?php
            $the_query = new WP_Query('posts_per_page=6');
            while ($the_query -> have_posts()) : $the_query -> the_post();
        ?>
      <div class="col-12 col-lg-4">
        <div class="card">
          <a href="<?php the_permalink() ?>">
            <img class="card-img-top" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id((int)$atts['id']), 'clarka-posts-image', false)[0]?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true); ?>">
          </a>
          <div class="card-body">
            <a href="<?php the_permalink() ?>">
              <h5 class="card-title"><?php the_title(); ?></h5>
            </a>
            <p class="card-text"><?php the_excerpt(); ?></p>
            <div class="media post-summary">
              <a class="align-self-center" href="#0">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/sidebar-avatar.jpg" alt="Author" class="img-fluid rounded-circle author-avatar">
              </a>
              <div class="media-body align-self-center">
                <a href="#0">
                  <h6 class="author-name"><?php
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
                    echo $full_name; ?></h6>
                </a>
                <span class="post-date"><?php echo get_the_date('M-d-Y'); ?></span>
              </div>
            </div>
          </div>
        </div><br><br>
      </div>
        <?php // Repeat the process and reset once it hits the limit
            endwhile;
            wp_reset_postdata();
            // Ajax Load More Plugin
            echo do_shortcode("[ajax_load_more loading_style='blue' post_type='post' posts_per_page='3' offset = '6' pause='true' scroll='false' button_done_label='No More Posts' layouts_cols='3']");
        ?>
    </div>
  </div>
</section>

<!-- Contact Area -->
<section class="single-section contact-area silver-bg" id="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2 class="section-title">Get in Touch</h2>
                    <p class="section-description">How can I be of assistance?</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-7">
                <?php echo $response; ?>
                <form action="<?php the_permalink(); ?>" method="post">
                    <?php
                        /* Initial Protection code
                         * You can put it anywhere inside the <form> tag
                         */
                         Sasla::protectMe();
                    ?>
                    <h4 class="form-title">Message Me</h4>
                    <div class="row">
                        <div class="col-12 col-md-6 form-group">
                            <input type="text" name="clarka_name" class="fixheight fixfields" placeholder="Name" pattern="[a-zA-Z][a-zA-Z ]+" minlength="2" maxlength="50" value="<?php echo $_POST['clarka_name'] ?? ''; ?>" required>
                            <br /><br />
                        </div>
                        <div class="col-12 col-md-6 form-group">
                            <input type="email" name="clarka_email" class="fixheight fixfields" placeholder="Email" value="<?php echo $_POST['clarka_email'] ?? ''; ?>" required>
                            <br /><br />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 form-group">
                            <input type="text" name="clarka_msg_subject" class="fixheight fixfields" placeholder="Subject" pattern="[a-zA-Z0-9 ]+" minlength="2" maxlength="50" value="<?php echo $_POST['clarka_msg_subject'] ?? ''; ?>" required>
                            <br /><br />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 form-group">
                            <input type="number" name="clarka_testquestion" class="fixheight fixfields" placeholder="What is 2 + 3?" pattern="[0-9]" required>
                            <br /><br />
                        </div>
                    </div>
                    <textarea name="clarka_message" class="fixfields" placeholder="Message" rows="5" minlength="5" required></textarea>
                    <br />
                    <br />
                    <input type="submit" class="butn" value="Send">
                </form>
                <br /><br />
            </div>
            <div class="col-12 col-lg-5">
                <div class="contact-info">
                    <h4 class="info-title">Contact Info</h4>
                    <p class="info-description">Always available for freelance work if the right project comes along, Feel free to contact me!</p>
                    <ul class="list-unstyled">
                        <li>
                            <div class="media align-items-center">
                                <span class="info-icon">
                                    <i class="icon ion-md-map"></i>
                                </span>
                                <div class="media-body">
                                    <h6 class="info-type">Location</h6>
                                    <span class="info-details">Kansas City, Kansas, USA</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media align-items-center">
                                <span class="info-icon">
                                    <i class="icon ion-md-call"></i>
                                </span>
                                <div class="media-body">
                                    <h6 class="info-type">Call Me</h6>
                                    <span class="info-details">
                                        <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
                                        <script src="https://assets.calendly.com/assets/external/widget.js" type="c82a4933b6a6e3c87d8531d6-text/javascript"></script>
                                        <a href="" onclick="if (!window.__cfRLUnblockHandlers) return false; Calendly.initPopupWidget({url: 'https://calendly.com/clark-2'});return false;" data-cf-modified-c82a4933b6a6e3c87d8531d6-="">Schedule time with me</a>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media align-items-center">
                                <span class="info-icon">
                                    <i class="icon ion-md-mail-unread"></i>
                                </span>
                                <div class="media-body">
                                    <h6 class="info-type">Email Me</h6>
                                    <span class="info-details">
                                        <a href="#" class="cryptedmail" data-name="clark" data-domain="clarka" data-tld="me" onclick="if (!window.__cfRLUnblockHandlers) return false; window.location.href = 'mailto:' + this.dataset.name + '@' + this.dataset.domain + '.' + this.dataset.tld; return false;" data-cf-modified-c82a4933b6a6e3c87d8531d6-=""></a>
                                    </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

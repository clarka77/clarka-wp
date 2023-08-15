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
  <meta name="description" content="This describes the frequently asked questions on the Clark Alford Remote Freelance WordPress Developer website">
  <!-- 115 characters long -->
  <meta name="keywords" content="Clark Alford,ClarkA,Clark A,remote developer,web developer,freelance developer,wordpress developer,wordpress expert,wordpress god,remote freelance wordpress developer">
  <!-- your,keywords,here,comma,separated,no,spaces.  Good for search other than google -->
  <meta name="robots" content="noindex, nofollow">
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

    <!-- FAQ Area -->
    <section class="single-section portfolio-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-heading">
              <h2 class="section-title">Frequently Asked Questions</h2>
              <p class="section-description">Have more questions <a href="<?php echo site_url(); ?>#contact-area">Contact Me</a></p>
            </div>
          </div>
        </div>
        <div style="background-color:#f7f7f7;">

          <div class="bs-example">
            <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h4 class="mb-0">
                    <a href="" style="max-width:90vw; class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">I’ve never had a website before. How does it work?</a>
                  </h4>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    <p>It can seem daunting to get your first website up and running, but it doesn’t have to be. I will consult with you and create a brief based on your needs. Once you are happy with this, we will build your website.</p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h4 class="mb-0">
                    <a href="" style="max-width:90vw; class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo">How long will it take to design and build my website?</a>
                  </h4>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                    <p>As with cost, it’s difficult to predict the time it will take to complete your website before putting together a brief of the work involved. Typically, a basic website takes around 2 - 4 weeks to complete.</p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h4 class="mb-0">
                    <a href="" style="max-width:90vw; class="btn btn-link" data-toggle="collapse" data-target="#collapseThree">Do I need a domain name & web hosting?</a>
                  </h4>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    <p>Yes, you will need a website address and a host to manage and run your website once it’s ready. If you don’t already have these things, don’t panic, I will get you set up.</p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingFour">
                  <h4 class="mb-0">
                    <a href="" style="max-width:90vw; class="btn btn-link" data-toggle="collapse" data-target="#collapseFour">What is a domain name?</a>
                  </h4>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                  <div class="card-body">
                    <p>Your domain name is your website address and is typically something like ‘http://www.yourcompany.com’.</p>
                 </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingFive">
                  <h4 class="mb-0">
                    <a href="" style="max-width:90vw; class="btn btn-link" data-toggle="collapse" data-target="#collapseFive">What is web hosting?</a>
                  </h4>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                  <div class="card-body">
                    <p>Web hosting is essentially the place online where your website ‘lives’ and is what allows people to view your website on the internet.</p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingSix">
                  <h4 class="mb-0">
                    <a href="" style="max-width:90vw; class="btn btn-link" data-toggle="collapse" data-target="#collapseSix">Can you build an e-commerce websites?</a>
                  </h4>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                  <div class="card-body">
                    <p>Yes, I custom build all e-commerce sites using Woocommerce. I can build an online store to fit around your needs and your business’s brand. WordPress Ecommerce Development is what I specialize in.</p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingSeven">
                  <h4 class="mb-0">
                    <a href="" style="max-width:90vw; class="btn btn-link" data-toggle="collapse" data-target="#collapseSeven">Will you show me how to use my website once it’s done? </a>
                  </h4>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                  <div class="card-body">
                    <p>Yes, I love to show clients the full features of their new site! I can give you initial training to show you the ropes, and offer Service Level Agreements if you need ongoing maintenance and support.</p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingEight">
                  <h4 class="mb-0">
                    <a href=""  style="max-width:90vw;class="btn btn-link" data-toggle="collapse" data-target="#collapseEight">Do you require a deposit?</a>
                  </h4>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                  <div class="card-body">
                    <p>Yes. A deposit equal to 50% of the project fee is due before any work begins with the remainder being payable upon completion. For large projects, sometimes the payment structure is broken up into different payment phases like 25/25/50 or similar, but, in general, a deposit is always required.</p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingNine">
                  <h4 class="mb-0">
                    <a href="" style="max-width:90vw; class="btn btn-link" data-toggle="collapse" data-target="#collapseNine">Do you bill by the hour or do offer flat fees?</a>
                  </h4>
                </div>
                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                  <div class="card-body">
                    <p>For a majority of projects, I do flat fees for the project.</p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTen">
                  <h4 class="mb-0">
                    <a href="" style="max-width:90vw; class="btn btn-link" data-toggle="collapse" data-target="#collapseTen">What payment methods do you accept?</a>
                  </h4>
                </div>
                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                  <div class="card-body">
                    <p>I accept PayPal, Google Pay, Apple Pay, ACH, and credit cards (Visa, Mastercard, American Express, Discover, Diners Club, JCB).</p>
                  </div>
                </div>
              </div>
              <div class="card">
              <div class="card-header" id="headingEleven">
                <h4 class="mb-0">
                    <a href="" style="max-width:90vw; class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven">Will my website work on mobile devices?</a>
                </h4>
              </div>
              <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
                <div class="card-body">
                    <p>Yes. All of my designs are responsive and are compatible with all devices as standard.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwelve">
                <h4 class="mb-0">
                    <a href="" style="max-width:90vw; class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwelve">What information do you need from me to quote a PSD to WordPress project?</a>
                </h4>
              </div>
              <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionExample">
                <div class="card-body">
                    <p>For PSD to WordPress projects, the most accurate quotes come if I’m able to see the actual design I’d be building. If that is not possible, wireframes and/or an overview of the functionality included in the site and different page templates that would be involved will allow me to at least roughly ballpark costs for you. I won’t commit to a final number without seeing the final design files, however.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThirteen">
                <h4 class="mb-0">
                    <a href="" style="max-width:90vw; class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThirteen">I found a theme online that I want to use, will you help me set it up and customize it?</a>
                </h4>
              </div>
              <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordionExample">
                <div class="card-body">
                    <p>Yes!</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingFourteen">
                <h4 class="mb-0">
                    <a href="" style="max-width:90vw; class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFourteen">Is WordPress right for my project?</a>
                </h4>
              </div>
              <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordionExample">
                <div class="card-body">
                    <p>WordPress is an incredibly versatile content management system. If your developer can theme from scratch, like I can, then there are no limitations on what can be done aesthetically with WordPress. You have just as much flexibility using WordPress as you do a static site. The biggest advantage to using WordPress is it puts your website under your control. While static sites require you contact a web developer if you want to make any changes to your website, no development skills are needed when updating a WordPress site. It’s incredibly easy to make changes to your website whether you’re adding a video, editing copy, adjusting slideshow content or adding a new event to the calendar. On all of my projects, I also provide documentation specific to your project that outlines how various changes can be made using WordPress to make sure you’re absolutely clear on how you can manage your website moving forward.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingFifteen">
                <h4 class="mb-0">
                    <a href="" style="max-width:90vw; class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFifteen">If I use WordPress, is my site going to look like a blog?</a>
                </h4>
              </div>
              <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#accordionExample">
                <div class="card-body">
                    <p>The idea that a website using WordPress has to look like a blog is definitely a myth. While WordPress was initially created as a blogging platform, it has since developed into a very versatile content management system. If you <a href="<?php echo site_url(); ?>#portfolio-area">check out my portfolio</a>, you’ll see plenty of examples of WordPress projects that don’t have a blog look-and-feel. You’re definitely not locked into any type of layout when using WordPress.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingSixteen">
                <h4 class="mb-0">
                    <a href="" style="max-width:90vw; class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSixteen">I'm not good with computers so will I be able to update my WordPress site?</a>
                </h4>
              </div>
              <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#accordionExample">
                <div class="card-body">
                    <p>Yes. WordPress is extremely user friendly and the admin interface can be made super clear to where even someone who is admittedly not very good with computers would be able to update their website. I also supply detailed documentation for every one of my builds that outlines how various updates can be made.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingSeventeen">
                <h4 class="mb-0">
                    <a href="" style="max-width:90vw; class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeventeen">What is your role in search engine optimization?</a>
                </h4>
              </div>
              <div id="collapseSeventeen" class="collapse" aria-labelledby="headingSeventeen" data-parent="#accordionExample">
                <div class="card-body">
                    <p>I do work to optimize every project of mine for search engines in terms of using header tags, meta tags, alt tags and valid, standards-compliant code. With WordPress projects, I always install Yoast SEO, as well as use an effective permalink structure. However, by default, I don’t offer content strategy guidance on specific keywords to target or anything of that nature. I just make sure nothing is standing in the way on the code side when it comes to SEO. If interested in more extensive SEO services and reporting, please let me know & I can advise appropriately.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingEighteen">
                <h4 class="mb-0">
                    <a href="" style="max-width:90vw; class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEighteen">Do you offer any maintenance after a project has launched?</a>
                </h4>
              </div>
              <div id="collapseEighteen" class="collapse" aria-labelledby="headingEighteen" data-parent="#accordionExample">
                <div class="card-body">
                    <p>If your site is built on WordPress, there will be ongoing updates for both the WordPress core & any utilized WordPress plug-ins. While these updates can be pushed through in the admin without requiring a developer, if preferable, a monthly maintenance package that takes care of these type of updates, as well as makes complete site backups, is available. Maintenance packages can be customized based on needs. At this time, I only offer maintenance packages on projects I developed vs. any outside projects.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingNineteen">
                <h4 class="mb-0">
                    <a href="" style="max-width:90vw; class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNineteen">How much does a website cost?</a>
                </h4>
              </div>
              <div id="collapseNineteen" class="collapse" aria-labelledby="headingNineteen" data-parent="#accordionExample">
                <div class="card-body">
                    <p>Because projects vary so much in scope from one to the next, it’s difficult to provide a standard pricing list for my services. The most notable items that affect the price of any given project include the size of the site, advanced functionality requirements (e-commerce, member profiles, etc.) and design complexity. If you are interested in getting a quote, please <a href="<?php echo site_url(); ?>#contact-area">contact me</a>. If you can provide as much information as possible about your project when reaching out, the process will be expedited.</p>
                </div>
              </div>
            </div>
          </div>
          </div>

          <p>&nbsp;</p>
          <a href="<?php echo site_url(); ?>#contact-area">Go Back</a>
        </div>
      </div>
    </section>

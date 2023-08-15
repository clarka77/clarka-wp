
<?php
/**
 * Footer
 *
 * Main footer file for the theme.
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
<!-- Footer Area -->
<footer class="footer-area single-section">
    <div class="container">
        <div class="row main-footer">
            <div class="col-12 col-md-3">
                <h5 class="column-title">About</h5>
                <ul class="list-unstyled column-content">
                    <li>
                        <a data-scroll href="<?php echo site_url(); ?>#header-area">Home</a>
                    </li>
                    <li>
                        <a data-scroll href="<?php echo site_url(); ?>#services-area">My Services</a>
                    </li>
                    <li>
                        <a data-scroll href="<?php echo site_url(); ?>#portfolio-area">Portfolio</a>
                    </li>
                    <li>
                        <a data-scroll href="<?php echo site_url(); ?>#blog-area">My Blog</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-3">
                <h5 class="column-title">Information</h5>
                <ul class="list-unstyled column-content">
                    <li>
                        <a href="<?php echo site_url(); ?>/terms">Terms & Conditions</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url(); ?>/privacy">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url(); ?>/disclaimers">Disclaimers</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-3">
                <h5 class="column-title">Support</h5>
                <ul class="list-unstyled column-content">
                    <li>
                        <a href="<?php echo site_url(); ?>#contact-area">Contact Me</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url(); ?>/faq">FAQs</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-3">
                <h2 class="brand-logo">Clark Alford</h2>
                <p class="brand-description">Remote WordPress Webmaster</p>
                <a target="_blank" href="//www.dmca.com/Protection/Status.aspx?ID=986a9968-041e-4d72-851b-cb2410b9df52" title="DMCA.com Protection Status" class="dmca-badge">
                    <img src ="https://images.dmca.com/Badges/dmca_protected_sml_120d.png?ID=986a9968-041e-4d72-851b-cb2410b9df52"  alt="DMCA.com Protection Status" />
                </a>
                <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>
            </div>
        </div>
        <div class="row mini-footer">
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
            <p class="copyright-notice">Copyright © 2019 - <script>document.write(new Date().getFullYear())</script> Clark Alford All Rights Reserved</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>

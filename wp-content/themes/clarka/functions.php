<?php
/**
 * Functions
 *
 * Main functions file for the theme.
 * php version 8.1.12
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Clark_A
 * @author     Clark Alford <clark@clarka.me>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://developer.wordpress.org/themes/basics/theme-functions/
 * @since      1.0.0
 */

 /**
  * Allow svg files to be uploaded to media library
  */
 add_filter('upload_mimes', 'add_file_types_to_uploads');
 function add_file_types_to_uploads($file_types){
     $new_filetypes = array();
     $new_filetypes['svg'] = 'image/svg+xml';
     $file_types = array_merge($file_types, $new_filetypes );
     return $file_types;
 }

 /**
  * Humans.txt will display in the root of your site
  */
 add_action( 'init', 'add_humans_txt_rewrite', 10 );
 function add_humans_txt_rewrite() {
     add_rewrite_rule( '^humans\.txt$', 'index.php?humans_txt=true', 'top' );
 }

 /**
  * Filter the list of public query vars in order to allow the WP::parse_request
  * to register the query variable.
  *
  * @param array $public_query_vars The array of whitelisted query variables.
  *
  * @return array
  */
 add_filter( 'query_vars', 'add_humans_txt_query_var', 10, 1 );
 function add_humans_txt_query_var( $public_query_vars ) {
     $public_query_vars[] = 'humans_txt';
     return $public_query_vars;
 }

 /**
  * Hook the parse_request action and serve the humans.txt when custom query variable is set to 'true'.
  *
  * @param WP $wp Current WordPress environment instance
  */
 add_action( 'parse_request', 'get_humans_txt_request', 10, 1 );
 function get_humans_txt_request( $wp ) {
     if ( isset( $wp->query_vars['humans_txt'] ) && 'true' === $wp->query_vars['humans_txt'] ) {
         header( 'Content-Type: text/plain' );
         echo file_get_contents( get_stylesheet_directory() . '/humans.txt' );
         exit;
     }
 }

 //Add a LINK tag in the HEAD of your main page
 add_action('wp_head', 'add_humans_txt_link');
 function add_humans_txt_link() {
     if (is_front_page()) {
         echo '<!-- humans.txt we are people, not machines -->';
         echo '<link type="text/plain" rel="author" href="humans.txt" />';
     }
 };
 /**
  * End of Humans.txt
  */

/**
 * Custom Error pages 403, 401.
 */
add_action('wp', 'custom_error_pages');
function custom_error_pages()
{
    global $wp_query;

    if(isset($_REQUEST['status']) && $_REQUEST['status'] == 403) {
        $wp_query->is_404 = false;
        $wp_query->is_page = true;
        $wp_query->is_singular = true;
        $wp_query->is_single = false;
        $wp_query->is_home = false;
        $wp_query->is_archive = false;
        $wp_query->is_category = false;
        add_filter('wp_title', 'custom_error_title', 65000, 2);
        add_filter('body_class', 'custom_error_class');
        status_header(403);
        get_template_part('403');
        exit;
    }

    if(isset($_REQUEST['status']) && $_REQUEST['status'] == 401) {
        $wp_query->is_404 = false;
        $wp_query->is_page = true;
        $wp_query->is_singular = true;
        $wp_query->is_single = false;
        $wp_query->is_home = false;
        $wp_query->is_archive = false;
        $wp_query->is_category = false;
        add_filter('wp_title', 'custom_error_title', 65000, 2);
        add_filter('body_class', 'custom_error_class');
        status_header(401);
        get_template_part('401');
        exit;
    }
}
function custom_error_title($title='',$sep='')
{
    if(isset($_REQUEST['status']) && $_REQUEST['status'] == 403) {
        return "Forbidden ".$sep." ".get_bloginfo('name');
    }

    if(isset($_REQUEST['status']) && $_REQUEST['status'] == 401) {
        return "Unauthorized ".$sep." ".get_bloginfo('name');
    }
}
function custom_error_class($classes)
{
    if(isset($_REQUEST['status']) && $_REQUEST['status'] == 403) {
        $classes[]="error403";
        return $classes;
    }

    if(isset($_REQUEST['status']) && $_REQUEST['status'] == 401) {
        $classes[]="error401";
        return $classes;
    }
}

/**
 * Register and Enqueueing CSS Files.
 */
add_action('init', 'clarka_register_styles');
function clarka_register_styles()
{
    //Register styles for later use
    wp_register_style('clarka_theme_style1', get_stylesheet_directory_uri() . '/assets/css/bootstrap-custom.min.css');
    wp_register_style('clarka_theme_style2', 'https://fonts.googleapis.com/css?family=Exo+2:400%7CPoppins:300,400,500,600,700%7CRaleway:300,400,500,600,700,800');
    wp_register_style('clarka_theme_style3', get_stylesheet_directory_uri() . '/assets/css/ionicons.min.css');
    wp_register_style('clarka_theme_style4', get_stylesheet_directory_uri() . '/assets/css/hamburgers-custom.min.css');
    wp_register_style('clarka_theme_style5', get_stylesheet_directory_uri() . '/assets/css/lity.min.css');
    wp_register_style('clarka_theme_style6', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_register_style('clarka_theme_style7', get_stylesheet_directory_uri() . '/assets/css/owl.theme.default.min.css');
    wp_register_style('clarka_theme_style8', get_stylesheet_directory_uri() . '/assets/css/main.css');
    wp_register_style('clarka_theme_style9', get_stylesheet_directory_uri() . '/assets/css/colors/main-blue.css');
}
add_action('wp_enqueue_scripts', 'clarka_enqueue_styles');
function clarka_enqueue_styles()
{
    //Enqueue styles
    wp_enqueue_style('clarka_theme_style1');
    wp_enqueue_style('clarka_theme_style2');
    wp_enqueue_style('clarka_theme_style3');
    wp_enqueue_style('clarka_theme_style4');
    wp_enqueue_style('clarka_theme_style5');
    wp_enqueue_style('clarka_theme_style6');
    wp_enqueue_style('clarka_theme_style7');
    wp_enqueue_style('clarka_theme_style8');
    wp_enqueue_style('clarka_theme_style9');
}

/**
 * Register and Enqueueing JS Files.
 */
// De-register WP jquery and re-register it to load in the footer.
add_action('init', 'jquery_in_footer');
function jquery_in_footer()
{
    if (!is_admin()) {
        wp_deregister_script('jquery');
        // register the local copy of jQuery in the footer
        wp_register_script('jquery', home_url(trailingslashit(WPINC) . 'js/jquery/jquery.js'), false, null, true);
        // load the local copy of jQuery in the footer
        wp_enqueue_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'clarka_enqueue_scripts');
function clarka_enqueue_scripts()
{
    //Enqeue scripts
    wp_enqueue_script('clarka_theme_script1', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array (), 1.0, true);
    wp_enqueue_script('clarka_theme_script2', get_stylesheet_directory_uri() . '/assets/js/jquery.nav.js', array (), 1.0, true);
    wp_enqueue_script('clarka_theme_script3', 'https://cdn.polyfill.io/v2/polyfill.mindee7.js?features=Set,Array.from,Object.assign,Array.prototype.find,Array.prototype.includes', array (), 1.0, true);
    wp_enqueue_script('clarka_theme_script4', get_stylesheet_directory_uri() . '/assets/js/shuffle.min.js', array (), 1.0, true);
    wp_enqueue_script('clarka_theme_script5', get_stylesheet_directory_uri() . '/assets/js/lity.min.js', array (), 1.0, true);
    wp_enqueue_script('clarka_theme_script6', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array (), 1.0, true);
    wp_enqueue_script('clarka_theme_script7', get_stylesheet_directory_uri() . '/assets/js/main.js', array (), 1.0, true);
}

/**
 * Removes WordPress version information.
 * <meta name="generator" content="WordPress x.x.x /> becomes blank instead
 */
add_filter('the_generator', 'clarka_remove_version');
function clarka_remove_version()
{
    return '';
}

/**
 * Add theme support to the Title Tag.
 * Add bio-image size 1295x1290
 */
add_action('after_setup_theme', 'clarka_theme_setup');
function clarka_theme_setup()
{
    // Adds <title> tag support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('clarka-posts-image', 540, 360, true); // (cropped)
}

/**
 * Custom Admin Login Logo
 */
add_action('login_head',  'clarka_login_logo');
function clarka_login_logo()
{
    echo '<style  type="text/css"> h1 a {  background-image:url(' . get_stylesheet_directory_uri() . '/assets/images/favicon/apple-touch-icon.png)  !important; } </style>';
}
// Custom Admin Login Logo Link
add_filter('login_headerurl', 'clarka_login_logo_url');
function clarka_login_logo_url()
{
    return esc_url(home_url('/'));
}
// Custom Admin Login Logo Alt Text
add_filter('login_headertitle', 'clarka_login_logo_url_alt');
function clarka_login_logo_url_alt()
{
    return 'Clark A Wordpress Webmaster';
}

/**
 * Remove dashboard widgets
 */
add_action('admin_init', 'remove_dashboard_meta');
function remove_dashboard_meta()
{
    // Remove wordpress welcome panel
    remove_action('welcome_panel', 'wp_welcome_panel');
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
    remove_meta_box('dashboard_plugins', 'dashboard', 'normal');
    remove_meta_box('dashboard_primary', 'dashboard', 'normal');
    remove_meta_box('dashboard_secondary', 'dashboard', 'normal');
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
    remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
    remove_meta_box('dashboard_activity', 'dashboard', 'normal');
    remove_meta_box('dashboard_php_nag', 'dashboard', 'normal');
    remove_meta_box('dashboard_browser_nag', 'dashboard', 'normal');
    remove_meta_box('health_check_status', 'dashboard', 'normal');
    remove_meta_box('network_dashboard_right_now', 'dashboard', 'normal');
    //Remove the "WP Mail SMTP" widget.
    remove_meta_box('wp_mail_smtp_reports_widget_lite', 'dashboard', 'normal');
    remove_meta_box('rank_math_pro_notice', 'dashboard', 'normal');
}

// Remove Rank Math dashboard widget
add_action('wp_dashboard_setup', 'remove_rankmath_dashboard_widget', 11);
function remove_rankmath_dashboard_widget()
{
    global $wp_meta_boxes;
    unset($wp_meta_boxes['dashboard']['normal']['high']['rank_math_dashboard_widget']);
}
/// Remove Rank Math action scheduler widget
add_filter('action_scheduler_pastdue_actions_check_pre', '__return_false');

// Low-tech of hiding nag-mesages
add_action('admin_head', 'remove_nag_clarka');
function remove_nag_clarka()
{
    echo '<style type="text/css">
           .rank-math-notice {display: none;}
         </style>';
}

/**
 * Add a custom widget to the dashboard.
 */
add_action('wp_dashboard_setup', 'clarka_add_dashboard_widgets');
function clarka_add_dashboard_widgets()
{
    wp_add_dashboard_widget(
        'clarka_dashboard_widget', // Widget slug.
        'Clark Alford Wordpress Webmaster', // Title.
        'clarka_dashboard_widget_function' // Display function.
    );
}
// Create the function to output the contents of your Dashboard Widget.
function clarka_dashboard_widget_function()
{
    ?>
  <span style="padding:10px"><img src="<?php echo home_url(); ?>/wp-content/uploads/2022/12/about1-150x150.jpeg" width="150" height="150"></span>
  <br><br>
  <h2>Customer Service</h2>
  <h3>Hours</h3>
  <p>Monday - Friday (excluding USA holidays)</p>
  <p>8:00AM - 3:00PM CDST (central daylight savings time)</p>
  <p><a href="https://www.clarka.me/#contact-area" target="_blank">Contact Me</a></p>
  <p><a href="https://www.clarka.me/links" target="_blank">other ways to find me</a></p>
  <br><br>
<?php }

/**
 * Custom Admin Footer
 */
add_filter('admin_footer_text', 'wpexplorer_remove_footer_admin');
function wpexplorer_remove_footer_admin()
{
    echo '<p><span id="footer-thankyou">For all your webmaster needs contact me <a href="https://www.clarka.me/" target="_blank">Clark Alford</a></span></p>';
}

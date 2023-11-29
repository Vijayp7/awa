<?php
/*
  Plugin Name: Image Hover Effects - SB Caption Hover Effects Collection
  Plugin URI: https://www.oxilab.org/downloads/sb-image-hover-pro/
  Description: Image Hover Effects - SB Caption Hover Effects Collection is Simple and Flexible Image hover effects.Its impressive, lightweight, responsive and fully CSS3. Apply SB Image hover effects on your website without any CSS coding knowledge.
  Author: Biplob Adhikari
  Author URI: https://www.oxilab.org/downloads/sb-image-hover-pro/
  Version: 7.3
 */
if (!defined('ABSPATH'))
    exit;

$sb_image_hover_version = '7.3';
define('sb_image_hover_plugin_url', plugin_dir_path(__FILE__));
// this is the URL our updater / license checker pings. This should be the URL of the site with EDD installed
define('SB_IMAGE_HOVER_EFFECTS_HOME', 'https://www.oxilab.org'); // you should use your own CONSTANT name, and be sure to replace it throughout this file
// the name of your product. This should match the download name in EDD exactly
define('SB_IMAGE_HOVER_EFFECTS', 'SB Image Hover'); // you should use your own CONSTANT name, and be sure to replace it throughout this file
// the name of the settings page for the license input to be displayed
define('SB_IMAGE_HOVER_EFFECTS_LICENSE_PAGE', 'sb-image-hover-effects-license');

add_shortcode('sb_image_oxi', 'sb_image_oxi_shortcode');
include sb_image_hover_plugin_url . 'public-data.php';

function sb_image_oxi_shortcode($atts) {
    extract(shortcode_atts(array('id' => ' ',), $atts));
    $styleid = $atts['id'];
    ob_start();
    sb_image_oxi_shortcode_function($styleid, 'user');
    return ob_get_clean();
}

add_filter('widget_text', 'do_shortcode');
include sb_image_hover_plugin_url . 'widget.php';
add_action('admin_menu', 'sb_image_hover_menu');

function sb_image_hover_menu() {
    $user_role = get_option('sb_image_hover_effects_user_role_key');
    $role_object = get_role($user_role);
    $first_key = '';
    if (isset($role_object->capabilities) && is_array($role_object->capabilities)) {
        reset($role_object->capabilities);
        $first_key = key($role_object->capabilities);
    } else {
        $first_key = 'manage_options';
    }
    add_menu_page('Image Hover', 'Image Hover', $first_key, 'sb-image-hover-effects', 'sb_image_hover_effects_home');
    add_submenu_page('sb-image-hover-effects', 'SB Image Hover', 'Image Hover', $first_key, 'sb-image-hover-effects', 'sb_image_hover_effects_home');
    add_submenu_page('sb-image-hover-effects', 'General Effects', 'General Effects', $first_key, 'sb-image-hover-effects-general', 'sb_image_hover_effects_general');
    add_submenu_page('sb-image-hover-effects', 'Square Effects', 'Square Effects', $first_key, 'sb-image-hover-effects-square', 'sb_image_hover_effects_square');
    add_submenu_page('sb-image-hover-effects', 'Settings', 'Settings', 'manage_options', SB_IMAGE_HOVER_EFFECTS_LICENSE_PAGE, 'sb_image_hover_effects_license_page');
}

function sb_image_hover_effects_home() {
    include sb_image_hover_plugin_url . 'home.php';
    wp_enqueue_style('sb-image-bootstrap-style', plugins_url('css/bootstrap.min.css', __FILE__));
    wp_enqueue_style('sb-image-font-awesome-style', plugins_url('css/font-awesome.min.css', __FILE__));
    wp_enqueue_style('sb-image-vendor-style', plugins_url('css/style.css', __FILE__));
    wp_enqueue_script('sb-image-bootstrap-js', plugins_url('js/bootstrap.min.js', __FILE__));
}

function sb_image_hover_effects_general() {
    wp_enqueue_script('jQuery');
    wp_enqueue_script('oxilab-animation-js', plugins_url('public/animation.js', __FILE__));
    wp_enqueue_style('oxilab-animation', plugins_url('public/animation.css', __FILE__));
    wp_enqueue_style('sb-image-style', plugins_url('public/style.css', __FILE__));
    wp_enqueue_style('Open+Sans', 'https://fonts.googleapis.com/css?family=Open+Sans');
    if (empty($_GET['styleid'])) {
        include sb_image_hover_plugin_url . 'public/general-new.php';
        wp_enqueue_style('sb-image-bootstrap-style', plugins_url('css/bootstrap.min.css', __FILE__));
        wp_enqueue_style('sb-image-font-awesome-style', plugins_url('css/font-awesome.min.css', __FILE__));
        wp_enqueue_style('sb-image-vendor-style', plugins_url('css/style.css', __FILE__));
        wp_enqueue_script('sb-image-bootstrap-js', plugins_url('js/bootstrap.min.js', __FILE__));
    }
    if (!empty($_GET['styleid'])) {
        sb_image_media_scripts();
        include sb_image_hover_plugin_url . 'public/general-settings.php';
        wp_enqueue_style('sb-image-bootstrap-style', plugins_url('css/bootstrap.min.css', __FILE__));
        wp_enqueue_style('sb-image-font-awesome-style', plugins_url('css/font-awesome.min.css', __FILE__));
        wp_enqueue_style('sb-image-vendor-style', plugins_url('css/style.css', __FILE__));
        wp_enqueue_style('sb-image-minicolors-style', plugins_url('css/jquery.minicolors.css', __FILE__));
        wp_enqueue_script('jQuery');
        wp_enqueue_script('sb-image-bootstrap-js', plugins_url('js/bootstrap.min.js', __FILE__));
        wp_enqueue_script('jquery.bootstrap-growl', plugins_url('js/jquery.bootstrap-growl.js', __FILE__));
        wp_enqueue_script('sb-image-font-select-js', plugins_url('js/font-select.js', __FILE__));
        wp_enqueue_script('sb-image-minicolors-js', plugins_url('js/jquery.minicolors.min.js', __FILE__));
        wp_enqueue_script('sb-image-vendor-js', plugins_url('js/vendor.js', __FILE__));
        sb_image_hover_admin_drag_drop();
        add_action('wp_print_scripts', 'sb_image_hover_admin_drag_drop');
    }
}

function sb_image_hover_admin_drag_drop() {
    wp_enqueue_script('sb-hover-drap-drop', plugins_url('js/sb-drag.js', __FILE__));
    wp_localize_script('sb-hover-drap-drop', 'sb_image_hover_drag_drop_ajax', array('ajaxurl' => admin_url('admin-ajax.php')));
}

function sb_image_hover_admin_ajax_data() {
    check_ajax_referer('sb_image_ajax_data', 'security');
    $list_order = sanitize_text_field($_POST['list_order']);
    $list = explode(',', $list_order);
    global $wpdb;
    $table_list = $wpdb->prefix . 'sb_image_hover_effects_list';
    foreach ($list as $value) {
        $data = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_list WHERE id = %d ", $value), ARRAY_A);
        $wpdb->query($wpdb->prepare("INSERT INTO {$table_list} (styleid, stylename, title, files, buttom_text, link, image, hoverimage, css) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s)", array($data['styleid'], $data['stylename'], $data['title'], $data['files'], $data['buttom_text'], $data['link'], $data['image'], $data['hoverimage'], $data['css'])));
        $redirect_id = $wpdb->insert_id;
        if ($redirect_id == 0) {
            die();
        }
        if ($redirect_id != 0) {
            $wpdb->query($wpdb->prepare("DELETE FROM $table_list WHERE id = %d", $value));
        }
    }
    die();
}

add_action('wp_ajax_sb_image_hover_admin_ajax_data', 'sb_image_hover_admin_ajax_data');

function sb_image_hover_effects_square() {
    wp_enqueue_script('jQuery');
    wp_enqueue_script('oxilab-animation-js', plugins_url('public/animation.js', __FILE__));
    wp_enqueue_style('oxilab-animation', plugins_url('public/animation.css', __FILE__));
    wp_enqueue_style('sb-image-style', plugins_url('public/style.css', __FILE__));
    wp_enqueue_style('Open+Sans', 'https://fonts.googleapis.com/css?family=Open+Sans');
    if (empty($_GET['styleid'])) {
        include sb_image_hover_plugin_url . 'public/square-new.php';
        wp_enqueue_style('sb-image-bootstrap-style', plugins_url('css/bootstrap.min.css', __FILE__));
        wp_enqueue_style('sb-image-font-awesome-style', plugins_url('css/font-awesome.min.css', __FILE__));
        wp_enqueue_style('sb-image-vendor-style', plugins_url('css/style.css', __FILE__));
        wp_enqueue_script('sb-image-bootstrap-js', plugins_url('js/bootstrap.min.js', __FILE__));
    }
    if (!empty($_GET['styleid'])) {
        sb_image_media_scripts();
        include sb_image_hover_plugin_url . 'public/square-settings.php';
        wp_enqueue_style('sb-image-bootstrap-style', plugins_url('css/bootstrap.min.css', __FILE__));
        wp_enqueue_style('sb-image-font-awesome-style', plugins_url('css/font-awesome.min.css', __FILE__));
        wp_enqueue_style('sb-image-vendor-style', plugins_url('css/style.css', __FILE__));
        wp_enqueue_style('sb-image-minicolors-style', plugins_url('css/jquery.minicolors.css', __FILE__));
        wp_enqueue_script('jQuery');
        wp_enqueue_script('jquery.bootstrap-growl', plugins_url('js/jquery.bootstrap-growl.js', __FILE__));
        wp_enqueue_script('sb-image-bootstrap-js', plugins_url('js/bootstrap.min.js', __FILE__));
        wp_enqueue_script('sb-image-font-select-js', plugins_url('js/font-select.js', __FILE__));
        wp_enqueue_script('sb-image-minicolors-js', plugins_url('js/jquery.minicolors.min.js', __FILE__));
        wp_enqueue_script('sb-image-vendor-js', plugins_url('js/vendor.js', __FILE__));
        sb_image_hover_admin_drag_drop();
        add_action('wp_print_scripts', 'sb_image_hover_admin_drag_drop');
    }
}

function sb_image_hover_effects_user_capabilities() {
    $user_role = get_option('sb_image_hover_effects_user_role_key');
    $role_object = get_role($user_role);
    $first_key = '';
    if (isset($role_object->capabilities) && is_array($role_object->capabilities)) {
        reset($role_object->capabilities);
        $first_key = key($role_object->capabilities);
    } else {
        $first_key = 'manage_options';
    }
    if (!current_user_can($first_key)) {
        wp_die(__('You do not have sufficient permissions to access this page.'));
    }
}

function sb_image_media_scripts() {
    wp_enqueue_media();
    wp_register_script('sb_image_media_scripts', plugins_url('js/media-uploader.js', __FILE__));
    wp_enqueue_script('sb_image_media_scripts');
}

add_action('admin_head', 'add_sb_image_hover_icons_styles');

function add_sb_image_hover_icons_styles() {
    ?>
    <style>
        #adminmenu #toplevel_page_sb-image-hover-effects div.wp-menu-image:before {
            content: "\f115";
        }
    </style>

    <?php
}

register_activation_hook(__FILE__, 'sb_image_hover_effects_install');

function sb_image_hover_effects_install() {
    global $wpdb;
    global $sb_image_hover_version;

    $table_name = $wpdb->prefix . 'sb_image_hover_effects_style';
    $table_list = $wpdb->prefix . 'sb_image_hover_effects_list';

    $charset_collate = $wpdb->get_charset_collate();

    $sql1 = "CREATE TABLE $table_name (
		id mediumint(5) NOT NULL AUTO_INCREMENT,
                name varchar(100) NOT NULL,
		style_name varchar(100) NOT NULL,
                css text NOT NULL,
		PRIMARY KEY  (id)
	) $charset_collate;";

    $sql2 = "CREATE TABLE $table_list (
		id mediumint(5) NOT NULL AUTO_INCREMENT,
                styleid mediumint(6) NOT NULL,
                stylename varchar(100),
		title varchar(100),
                files varchar(800),
                buttom_text varchar(100),
                link varchar(800),
                image varchar(800),
                hoverimage varchar(800),
                css text NOT NULL,
		PRIMARY KEY  (id)
	) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta($sql1);
    dbDelta($sql2);

    add_option('sb_image_hover_version', $sb_image_hover_version);
    $now = strtotime("now");
    add_option('sb_image_hover_activation_date', $now);
    set_transient('_sb_image_hover_welcome_activation_redirect', true, 30);
}

add_action('admin_init', 'sb_image_hover_welcome_do_activation_redirect');

function sb_image_hover_welcome_do_activation_redirect() {
    if (!get_transient('_sb_image_hover_welcome_activation_redirect')) {
        return;
    }
    delete_transient('_sb_image_hover_welcome_activation_redirect');
    if (is_network_admin() || isset($_GET['activate-multi'])) {
        return;
    }
    wp_safe_redirect(add_query_arg(array('page' => 'sb-image-hover-effects-welcome'), admin_url('index.php')));
}

add_action('admin_menu', 'sb_image_hover_welcome_pages');

function sb_image_hover_welcome_pages() {
    add_dashboard_page(
            'Welcome To Image Hover Effects - SB Caption Hover Effects Collection', 'Welcome To Image Hover Effects - SB Caption Hover Effects Collection', 'read', 'sb-image-hover-effects-welcome', 'sb_image_hover_effects_welcome'
    );
}

function sb_image_hover_effects_welcome() {
    wp_enqueue_style('sb-image-welcome-style', plugins_url('css/admin-welcome.css', __FILE__));
    ?>
    <div class="wrap about-wrap">

        <h1>Welcome to Image Hover Effects - SB Caption Hover Effects Collection</h1>
        <div class="about-text">
            Thank you for choosing Image Hover Effects - SB Caption Hover Effects Collection - the most beginner friendly WordPress Image Hover plugin. Here's how to get started.
        </div>
        <h2 class="nav-tab-wrapper">
            <a class="nav-tab nav-tab-active">
                Getting Started		
            </a>
        </h2>
        <p class="about-description">
            Use the tips below to get started using Image Hover Effects - SB Caption Hover Effects Collection. You will be up and running in no time.	
        </p>
        <div class="feature-section">
            <h3>Creating Your First Hover Effects</h3>
            <p>Image Hover Effects - SB Caption Hover Effects Collection makes it easy to create Hover Effects in WordPress. You can follow the video tutorial on the right or read our how to 
                <a href="https://www.oxilab.org/docs/sb-image-hover-effects/getting-started/installing-for-the-first-time/" target="_blank" rel="noopener">create your first Hover effects guide</a>.					</p>
            <p>But in reality, the process is so intuitive that you can just start by going to <a href="<?php echo admin_url(); ?>admin.php?page=sb-image-hover-effects-general">Image Hover - &gt; General Effects</a>.				</p>
            </br>
            </br>
            <iframe width="500" height="315" src="https://www.youtube.com/embed/8LTmvNrcxYg" frameborder="0" allowfullscreen></iframe>

        </div>
        <div class="feature-section">
            <h3>See all Image Hover Effects - SB Caption Hover Effects Collection Features</h3>
            <p>Image Hover Effects - SB Caption Hover Effects Collection is both easy to use and extremely powerful. We have tons of helpful features that allows us to give you everything you need on Image Hover Effects.</p>
            <p>1. Awesome Live Preview Panel</p>
            <p>1. Can Customize with Our Settings</p>
            <p>1. Easy to USE & Builtin Integration for popular Page Builder</p>
            <p><a href="https://www.oxilab.org/downloads/sb-image-hover-pro/" target="_blank" rel="noopener" class="sb-image-features-button button button-primary">See all Features</a></p>

        </div>
        <div class="feature-section">
            <h3>Have any Bugs or Suggestion</h3>
            <p>Your suggestions will make this plugin even better, Even if you get any bugs on Image Hover Effects - SB Caption Hover Effects Collection so let us to know, We will try to solved within few hours</p>
            <p><a href="https://www.oxilab.org/contact-us" target="_blank" rel="noopener" class="sb-image-features-button button button-primary">Contact Us</a>
                <a href="https://wordpress.org/support/plugin/sb-image-hover-effects" target="_blank" rel="noopener" class="sb-image-features-button button button-primary">Support Forum</a></p>

        </div>

    </div>
    <?php
}

add_action('admin_head', 'sb_image_hover_welcome_screen_remove_menus');

function sb_image_hover_welcome_screen_remove_menus() {
    remove_submenu_page('index.php', 'sb-image-hover-effects-welcome');
}

function sb_image_html_special_charecter($data) {
	$data = html_entity_decode($data);
    $data = str_replace("\'", "'", $data);
    $data = str_replace('\"', '"', $data);
    return $data;
}

function sb_image_font_familly_special_charecter($data) {
    $data = str_replace('+', ' ', $data);
    $data = explode(':', $data);
    $data = $data[0];
    $data = '"' . $data . '"';
    return $data;
}

    add_action('vc_before_init', 'SB_oxi_VC_extension');
    add_shortcode('sb_oxi_VC', 'SB_oxi_VC_shortcode');

    function SB_oxi_VC_shortcode($atts) {
        extract(shortcode_atts(array(
            'id' => ''
                        ), $atts));
        $styleid = $atts['id'];
        ob_start();
        sb_image_oxi_shortcode_function($styleid, 'user');
        return ob_get_clean();
    }

    function SB_oxi_VC_extension() {
        global $wpdb;
        $data = $wpdb->get_results('SELECT * FROM ' . $wpdb->prefix . 'sb_image_hover_effects_style ORDER BY id DESC', ARRAY_A);
        $vcdata = array();
        foreach ($data as $value) {
            $vcdata[] = $value['id'];
        }
        vc_map(array(
            "name" => __("SB Image Hover Effects"),
            "base" => "sb_oxi_VC",
            "category" => __("Content"),
            "params" => array(
                array(
                    "type" => "dropdown",
                    "heading" => "Image Hover Select",
                    "param_name" => "id",
                    "value" => $vcdata,
                    'save_always' => true,
                    "description" => "Select your Image Hover ID",
                    "group" => 'Settings',
                ),
            )
        ));
    }


// load our custom updater
include( dirname(__FILE__) . '/Plugin_Updater.php' );

function sb_image_hover_effects_plugin_updater() {
    $license_key = trim(get_option('sb_image_hover_effects_license_key'));
    // retrieve our license key from the DB
    // setup the updater
    $sb_image_hover_effects_updater = new SB_IMAGE_HOVER_EFFECTS_Plugin_Updater(SB_IMAGE_HOVER_EFFECTS_HOME, __FILE__, array(
        'version' => '7.3.1', // current version number
        'license' => $license_key, // license key (used get_option above to retrieve from DB)
        'item_name' => SB_IMAGE_HOVER_EFFECTS, // name of this plugin
        'author' => 'Biplob Adhikari', // author of this plugin
        'beta' => false
            )
    );
}

$status = get_option('sb_image_hover_effects_license_status');
if ($status == 'valid') {
    add_action('admin_init', 'sb_image_hover_effects_plugin_updater', 0);
}


/* * **********************************
 * the code below is just a standard
 * options page. Substitute with
 * your own.
 * *********************************** */

function sb_image_hover_effects_license_page() {
    $license = get_option('sb_image_hover_effects_license_key');
    $status = get_option('sb_image_hover_effects_license_status');
    global $wp_roles;
    $roles = $wp_roles->get_names();
    $saved_role = get_option('sb_image_hover_effects_user_role_key');
    $saved_roe = get_option('sb_image_hover_effects_mobile_key');
    ?>
    <div class="wrap">
        <?php if ($status !== false && $status == 'valid') { ?>
            <div class="updated">
                <p>Thank you to Active our Plugins. Kindly wait 2-3 minute to get update notification if you using free or older version. Once you get notification please update.</p>
            </div>
        <?php }
        ?>
        <h2><?php _e('User Role'); ?></h2>
        <p>Select User Role Who Can Save Edit and Delete Image Hover Effects - SB Caption Hover Effects Collection.</p>
        <form method="post" action="options.php">
            <table class="form-table">
                <?php settings_fields('sb_image_hover_effects_user_role'); ?>
                <tbody>
                    <tr valign="top">
                        <th scope="row" valign="top">
                            <?php _e('Who Can Edit?'); ?>
                        </th>
                        <td>
                            <select class="widefat" name="sb_image_hover_effects_user_role_key">
                                <?php foreach ($roles as $key => $role) { ?>
                                    <option value="<?php echo $key; ?>" <?php selected($saved_role, $key); ?>><?php echo $role; ?></option>
                                <?php } ?>
                            </select>
                        </td>
                        <td>                           
                            <label class="description" for="sb_image_hover_effects_user_role"><?php _e('Select the Role who can manage Image Hover Effects - SB Caption Hover Effects Collection.'); ?>
                                <a target="_blank" href="https://codex.wordpress.org/Roles_and_Capabilities#Capability_vs._Role_Table">Help</a></label>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php submit_button(); ?>
        </form>
        <br>
        <br>
        <br>
        <h2><?php _e('Mobile or Touch Device Behaviour'); ?></h2>
        <p>Select Mobile or Touch Device Behaviour for Image Hover Effects - SB Caption Hover Effects Collection.</p>
        <form method="post" action="options.php">
            <table class="form-table">
                <?php settings_fields('sb_image_hover_effects_mobile'); ?>
                <tbody>
                    <tr valign="top">
                        <th scope="row" valign="top">
                            <?php _e('Select One'); ?>
                        </th>
                        <td>
                            <select class="widefat" name="sb_image_hover_effects_mobile_key">
                                <option value="touch" <?php
                                if ($saved_roe == 'touch') {
                                    echo 'selected';
                                }
                                ?>>Effects frist and 2nd tap to Open Link</option>
                                <option value="normal"  <?php
                                if ($saved_roe == 'normal') {
                                    echo 'selected';
                                }
                                ?>>Click and Open Link</option>
                            </select>
                        </td>
                        <td>                           
                            <label class="description" for="sb_image_hover_effects_mobile"><?php _e('Select the Role About Mobile or Touch Device Behabiour.'); ?></label>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php submit_button(); ?>
        </form>
        <br>
        <br>
        <br>
        <h2><?php _e('Product License Activation'); ?></h2>
        <p>Activate your copy to get direct plugin updates and official support.</p>
        <form method="post" action="options.php">

            <?php settings_fields('sb_image_hover_effects_license'); ?>

            <table class="form-table">
                <tbody>
                    <tr valign="top">
                        <th scope="row" valign="top">
                            <?php _e('License Key'); ?>
                        </th>
                        <td>
                            <input id="sb_image_hover_effects_license_key" name="sb_image_hover_effects_license_key" type="text" class="regular-text" value="<?php esc_attr_e($license); ?>" />
                            <label class="description" for="sb_image_hover_effects_license_key"><?php _e('Enter your license key'); ?></label>
                        </td>
                    </tr>
                    <?php if (!empty($license)) { ?>
                        <tr valign="top">
                            <th scope="row" valign="top">
                                <?php _e('Activate License'); ?>
                            </th>
                            <td>
                                <?php if ($status !== false && $status == 'valid') { ?>
                                    <span style="color:green;"><?php _e('active'); ?></span>
                                    <?php wp_nonce_field('sb_image_hover_effects_nonce', 'sb_image_hover_effects_nonce'); ?>
                                    <input type="submit" class="button-secondary" name="sb_image_hover_effects_license_deactivate" value="<?php _e('Deactivate License'); ?>"/>
                                    <?php
                                } else {
                                    wp_nonce_field('sb_image_hover_effects_nonce', 'sb_image_hover_effects_nonce');
                                    ?>
                                    <input type="submit" class="button-secondary" name="sb_image_hover_effects_license_activate" value="<?php _e('Activate License'); ?>"/>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php submit_button(); ?>

        </form>
        <?php
    }

    function sb_image_hover_effects_mobile_option() {
        // creates our settings in the options table
        register_setting('sb_image_hover_effects_mobile', 'sb_image_hover_effects_mobile_key');
    }

    add_action('admin_init', 'sb_image_hover_effects_mobile_option');

    function sb_image_hover_effects_user_role_option() {
        // creates our settings in the options table
        register_setting('sb_image_hover_effects_user_role', 'sb_image_hover_effects_user_role_key');
    }

    add_action('admin_init', 'sb_image_hover_effects_user_role_option');

    function sb_image_hover_effects_register_option() {
        // creates our settings in the options table
        register_setting('sb_image_hover_effects_license', 'sb_image_hover_effects_license_key', 'sb_image_hover_effects_sanitize_license');
    }

    add_action('admin_init', 'sb_image_hover_effects_register_option');

    function sb_image_hover_effects_sanitize_license($new) {
        $old = get_option('sb_image_hover_effects_license_key');
        if ($old && $old != $new) {
            delete_option('sb_image_hover_effects_license_status'); // new license has been entered, so must reactivate
        }
        return $new;
    }

    /*     * **********************************
     * this illustrates how to activate
     * a license key
     * *********************************** */

    function sb_image_hover_effects_activate_license() {

        // listen for our activate button to be clicked
        if (isset($_POST['sb_image_hover_effects_license_activate'])) {

            // run a quick security check
            if (!check_admin_referer('sb_image_hover_effects_nonce', 'sb_image_hover_effects_nonce'))
                return; // get out if we didn't click the Activate button
// retrieve the license from the database
            $license = trim(get_option('sb_image_hover_effects_license_key'));


            // data to send in our API request
            $api_params = array(
                'edd_action' => 'activate_license',
                'license' => $license,
                'item_name' => urlencode(SB_IMAGE_HOVER_EFFECTS), // the name of our product in EDD
                'url' => home_url()
            );

            // Call the custom API.
            $response = wp_remote_post(SB_IMAGE_HOVER_EFFECTS_HOME, array('timeout' => 15, 'sslverify' => false, 'body' => $api_params));

            // make sure the response came back okay
            if (is_wp_error($response) || 200 !== wp_remote_retrieve_response_code($response)) {

                if (is_wp_error($response)) {
                    $message = $response->get_error_message();
                } else {
                    $message = __('An error occurred, please try again.');
                }
            } else {

                $license_data = json_decode(wp_remote_retrieve_body($response));

                if (false === $license_data->success) {

                    switch ($license_data->error) {

                        case 'expired' :

                            $message = sprintf(
                                    __('Your license key expired on %s.'), date_i18n(get_option('date_format'), strtotime($license_data->expires, current_time('timestamp')))
                            );
                            break;

                        case 'revoked' :

                            $message = __('Your license key has been disabled.');
                            break;

                        case 'missing' :

                            $message = __('Invalid license.');
                            break;

                        case 'invalid' :
                        case 'site_inactive' :

                            $message = __('Your license is not active for this URL.');
                            break;

                        case 'item_name_mismatch' :

                            $message = sprintf(__('This appears to be an invalid license key for %s.'), SB_IMAGE_HOVER_EFFECTS);
                            break;

                        case 'no_activations_left':

                            $message = __('Your license key has reached its activation limit.');
                            break;

                        default :

                            $message = __('An error occurred, please try again.');
                            break;
                    }
                }
            }

            // Check if anything passed on a message constituting a failure
            if (!empty($message)) {
                $base_url = admin_url('admin.php?page=' . SB_IMAGE_HOVER_EFFECTS_LICENSE_PAGE);
                $redirect = add_query_arg(array('sl_activation' => 'false', 'message' => urlencode($message)), $base_url);

                wp_redirect($redirect);
                exit();
            }

            // $license_data->license will be either "valid" or "invalid"

            update_option('sb_image_hover_effects_license_status', $license_data->license);
            wp_redirect(admin_url('admin.php?page=' . SB_IMAGE_HOVER_EFFECTS_LICENSE_PAGE));
            exit();
        }
    }

    add_action('admin_init', 'sb_image_hover_effects_activate_license');


    /*     * *********************************************
     * Illustrates how to deactivate a license key.
     * This will decrease the site count
     * ********************************************* */

    function sb_image_hover_effects_deactivate_license() {

        // listen for our activate button to be clicked
        if (isset($_POST['sb_image_hover_effects_license_deactivate'])) {

            // run a quick security check
            if (!check_admin_referer('sb_image_hover_effects_nonce', 'sb_image_hover_effects_nonce'))
                return; // get out if we didn't click the Activate button
// retrieve the license from the database
            $license = trim(get_option('sb_image_hover_effects_license_key'));


            // data to send in our API request
            $api_params = array(
                'edd_action' => 'deactivate_license',
                'license' => $license,
                'item_name' => urlencode(SB_IMAGE_HOVER_EFFECTS), // the name of our product in EDD
                'url' => home_url()
            );

            // Call the custom API.
            $response = wp_remote_post(SB_IMAGE_HOVER_EFFECTS_HOME, array('timeout' => 15, 'sslverify' => false, 'body' => $api_params));

            // make sure the response came back okay
            if (is_wp_error($response) || 200 !== wp_remote_retrieve_response_code($response)) {

                if (is_wp_error($response)) {
                    $message = $response->get_error_message();
                } else {
                    $message = __('An error occurred, please try again.');
                }

                $base_url = admin_url('admin.php?page=' . SB_IMAGE_HOVER_EFFECTS_LICENSE_PAGE);
                $redirect = add_query_arg(array('sl_activation' => 'false', 'message' => urlencode($message)), $base_url);

                wp_redirect($redirect);
                exit();
            }

            // decode the license data
            $license_data = json_decode(wp_remote_retrieve_body($response));

            // $license_data->license will be either "deactivated" or "failed"
            if ($license_data->license == 'deactivated') {
                delete_option('sb_image_hover_effects_license_status');
            }

            wp_redirect(admin_url('admin.php?page=' . SB_IMAGE_HOVER_EFFECTS_LICENSE_PAGE));
            exit();
        }
    }

    add_action('admin_init', 'sb_image_hover_effects_deactivate_license');


    /*     * **********************************
     * this illustrates how to check if
     * a license key is still valid
     * the updater does this for you,
     * so this is only needed if you
     * want to do something custom
     * *********************************** */

    function sb_image_hover_effects_check_license() {

        global $wp_version;

        $license = trim(get_option('sb_image_hover_effects_license_key'));

        $api_params = array(
            'edd_action' => 'check_license',
            'license' => $license,
            'item_name' => urlencode(SB_IMAGE_HOVER_EFFECTS),
            'url' => home_url()
        );

        // Call the custom API.
        $response = wp_remote_post(SB_IMAGE_HOVER_EFFECTS_HOME, array('timeout' => 15, 'sslverify' => false, 'body' => $api_params));

        if (is_wp_error($response))
            return false;

        $license_data = json_decode(wp_remote_retrieve_body($response));

        if ($license_data->license == 'valid') {
            echo 'valid';
            exit;
            // this license is still valid
        } else {
            echo 'invalid';
            exit;
            // this license is no longer valid
        }
    }

    /**
     * This is a means of catching errors from the activation method above and displaying it to the customer
     */
    function sb_image_hover_effects_admin_notices() {
        if (isset($_GET['sl_activation']) && !empty($_GET['message'])) {

            switch ($_GET['sl_activation']) {

                case 'false':
                    $message = urldecode($_GET['message']);
                    ?>
                    <div class="error">
                        <p><?php echo $message; ?></p>
                    </div>
                    <?php
                    break;

                case 'true':
                default:
                    // Developers can put a custom success message here for when activation is successful if they way.
                    break;
            }
        }
    }

    add_action('admin_notices', 'sb_image_hover_effects_admin_notices');

    function sb_image_video_toturial() {
        ?>
        <div class="ihewc-admin-style-settings-div-css">
            <div class="col-xs-12">                                           
                <a href="https://www.oxilab.org/docs/sb-image-hover-effects/getting-started/installing-for-the-first-time/" target="_blank">
                    <div class="col-xs-support-ihewc">
                        <div class="ihewc-admin-support-icon">
                            <i class="fa fa-file" aria-hidden="true"></i>
                        </div>  
                        <div class="ihewc-admin-support-heading">
                            Read Our Docs
                        </div> 
                        <div class="ihewc-admin-support-info">
                            Learn how to set up and using Image Hover Effects with Carousel
                        </div> 
                    </div>
                </a>
                <a href="https://wordpress.org/support/plugin/sb-image-hover-effects" target="_blank">
                    <div class="col-xs-support-ihewc">
                        <div class="ihewc-admin-support-icon">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div>  
                        <div class="ihewc-admin-support-heading">
                            Support
                        </div> 
                        <div class="ihewc-admin-support-info">
                            Powered by WordPress.org, Issues resolved by Plugins Author.
                        </div> 
                    </div>
                </a>
                <a href="https://www.youtube.com/watch?v=8LTmvNrcxYg" target="_blank">
                    <div class="col-xs-support-ihewc">
                        <div class="ihewc-admin-support-icon">
                            <i class="fa fa-ticket" aria-hidden="true"></i>
                        </div>  
                        <div class="ihewc-admin-support-heading">
                            Video Tutorial 
                        </div> 
                        <div class="ihewc-admin-support-info">
                            Watch our Using Video Tutorial in Youtube.
                        </div> 
                    </div>
                </a>
            </div>
        </div> 
        <?php
    }
    function sb_image_promote_free() {
        $status = get_option('sb_image_hover_effects_license_status');
        ?>
        <div class="oxilab-admin-notifications">
            <h3>
                <span class="dashicons dashicons-flag"></span> 
                Notifications
            </h3>
            <p></p>
            <div class="oxilab-admin-notifications-holder">
                <div class="oxilab-admin-notifications-alert">
                    <p>Thank you for using our Image Hover Effects - SB Caption Hover Effects Collection. I Just wanted to see if you have any questions or concerns about my plugins. If you do, Please do not hesitate to <a href="https://wordpress.org/support/plugin/sb-image-hover-effects#new-post">file a bug report</a></p>
                    <?php
                    if ($status != 'valid') {
                        echo '<p>By the way, did you know we also have a <a href="https://www.oxilab.org/downloads/sb-image-hover-pro/">Premium Version</a>? It offers lots of options with automatic update. It also comes with 16/5 personal support.</p>';
                    }
                    ?>
                    <p>Thanks Again!</p>
                    <p></p>
                </div>                     
            </div>
            <p></p>
        </div> 
        <p></p>
        <?php
    }

    function sb_image_hover_set_no_bug() {
        $nobug = "";
        if (isset($_GET['sb_image_hover_no_bug'])) {
            $nobug = esc_attr($_GET['sb_image_hover_no_bug']);
        }
        if ('already' == $nobug) {
            add_option('sb_image_hover_no_bug', $nobug);
        } elseif ('later' == $nobug) {
            $now = strtotime("now");
            update_option('sb_image_hover_activation_date', $now);
        }
    }

    add_action('admin_init', 'sb_image_hover_set_no_bug');

    function sb_image_hover_check_installation_date() {
        $nobug = "";
        $nobug = get_option('sb_image_hover_no_bug');
        if ($nobug != 'already') {
            $install_date = get_option('sb_image_hover_activation_date');
            if (empty($install_date)) {
                $now = strtotime("now");
                add_option('sb_image_hover_activation_date', $now);
            }
            $past_date = strtotime('-5 days');
            if ($past_date >= $install_date) {
                add_action('admin_notices', 'sb_image_hover_display_admin_notice');
            }
        }
    }

    add_action('admin_init', 'sb_image_hover_check_installation_date');

    function sb_image_hover_display_admin_notice() {

        // Review URL - Change to the URL of your plugin on WordPress.org
        $reviewurl = 'https://wordpress.org/plugins/sb-image-hover-effects/';

        $nobugurl = get_admin_url() . '?sb_image_hover_no_bug=later';
        $nobugurl2 = get_admin_url() . '?sb_image_hover_no_bug=already';

        echo '<div class="updated">';
        echo '<p></p>';

        printf(__('<p>Hey, You’ve using <strong>Image Hover Effects - SB Caption Hover Effects Collection</strong> for more than 1 week – that’s awesome! Could you please do me a BIG favor and give it a 5-star rating on WordPress? Just to help us spread the word and boost our motivation.!
                     </p>
                    <p><a href=%s target="_blank"><strong>Ok, you deserve it</strong></a></p>
                    <p><a href=%s><strong>Nope, maybe later</strong></a> </p>
                    <p><a href=%s><strong>I already did</strong></a> </p>'), $reviewurl, $nobugurl, $nobugurl2);
        echo '<p></p>';
        echo "</div>";
    }
    
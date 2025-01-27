<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://solacewp.com
 * @since             1.1.6
 * @package           Solace_Extra
 *
 * Plugin Name:       Solace Extra
 * Plugin URI:        https://solacewp.com/
 * Description:       Additional features for Solace Theme
 * Version:           1.2.2
 * Requires PHP:      7.4
 * Author:            Solace
 * Author URI:        https://solacewp.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       solace-extra
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

defined( 'ABSPATH' ) || exit;

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'SOLACE_EXTRA_VERSION', '1.1.6' );
define( 'SOLACE_EXTRA_DIR', plugin_dir_url( __FILE__ ) . '/' );
define( 'SOLACE_EXTRA_ASSETS_URL', plugin_dir_url( __FILE__ ) . 'assets/' );

global $solace_is_run_in_shortcode;

// set_time_limit(0);

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-solace-extra-activator.php
 */
function solace_extra_activate() {
    add_option( 'solace_extra_redirect_after_activation_option', true );
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-solace-extra-activator.php';
	Solace_Extra_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-solace-extra-deactivator.php
 */
function solace_extra_deactivate() {

    // Delete the 'solace_disable_admin_notices' cookie directly
    if ( isset( $_COOKIE['solace_disable_admin_notices'] ) ) {
        // Set the cookie with an expiration time in the past to delete it
        setcookie( 'solace_disable_admin_notices', '', time() - 3600 );
    }

	require_once plugin_dir_path( __FILE__ ) . 'includes/class-solace-extra-deactivator.php';
	Solace_Extra_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'solace_extra_activate' );
register_deactivation_hook( __FILE__, 'solace_extra_deactivate' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-solace-extra.php';

if (class_exists('Elementor\Plugin')) {
    require plugin_dir_path( __FILE__ ) . 'elementor/widgets/elementor.php';

    /**
     * Registers Elementor widgets for the Solace Extra plugin.
     *
     * This function registers the Elementor List Widget and oEmbed Widget for use within the Solace Extra plugin.
     *
     * @param Elementor\Elements_Manager $widgets_manager The Elementor widgets manager.
     */
    function solace_extra_register_widget_elementor( $widgets_manager ) {

        require_once( __DIR__ . '/elementor/widgets/widget/nav-menu/nav-menu.php' );
        // require_once( __DIR__ . '/elementor/widgets/widget/navigation-menu/navigation-menu.php' );
        require_once( __DIR__ . '/elementor/widgets/widget/site-logo/site-logo.php' );

        $widgets_manager->register( new \Solace_Extra_Nav_Menu() );
        // $widgets_manager->register( new \Solace_Extra_Navigation_Menu() );
        $widgets_manager->register( new \Solace_Extra_Site_Logo() );
    }
    add_action( 'elementor/widgets/register', 'solace_extra_register_widget_elementor' );

    /**
     * Adds a new category to the Elementor widgets manager for the Solace Extra plugin.
     *
     * This function adds a new category named 'Solace Extra' with an icon of 'eicon-star' to the Elementor widgets manager.
     *
     * @param Elementor\Elements_Manager $elements_manager The Elementor widgets manager.
     */
    function solace_extra_add_elementor_widget_categories( $elements_manager ) {

        $elements_manager->add_category(
            'solace-extra',
            [
                'title' => esc_html__( 'Solace Extra', 'solace-extra' ),
                'icon' => 'eicon-star',
            ]
        );
    }
    add_action( 'elementor/elements/categories_registered', 'solace_extra_add_elementor_widget_categories' );

}

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function solace_extra_run() {
    $plugin = new Solace_Extra();
	$plugin->run();

}
solace_extra_run();

add_action('init', 'solace_extra_handle_logo_upload');

function solace_extra_handle_logo_upload() {
    if (isset($_POST['action']) && $_POST['action'] === 'upload_logo_image') {

        // Verify the nonce to ensure the request is legitimate
        if (!isset($_POST['solace_conditions_nonce']) || !wp_verify_nonce(sanitize_key(wp_unslash($_POST['solace_conditions_nonce'])), 'solace_conditions_nonce_action')) {
            wp_send_json_error('Invalid nonce.');
            return;
        }
        $method = !empty($_SERVER['REQUEST_METHOD']) ? sanitize_text_field(wp_unslash($_SERVER['REQUEST_METHOD'])) : '';
        
        if ($method === 'POST') {
            $image_url = ! empty( $_POST['logo_image_url'] ) ? esc_url_raw( wp_unslash( $_POST['logo_image_url'] ) ) : '';

            // Use wp_remote_get() instead of file_get_contents()
            $response = wp_remote_get($image_url);

            if (is_wp_error($response)) {
                // Handle request error
                wp_die(esc_html('Logo download failed. Error: ' . $response->get_error_message()));
            }

            $body = wp_remote_retrieve_body($response);

            // Upload the image to media library
            $upload = wp_upload_bits(basename($image_url), null, $body);

            if (!$upload['error']) {
                // Attach the image to the media library
                $attachment = array(
                    'post_mime_type' => wp_remote_retrieve_header($response, 'content-type'), // Use content-type from response
                    'post_title' => sanitize_file_name(basename($image_url)),
                    'post_content' => '',
                    'post_status' => 'inherit'
                );

                $attach_id = wp_insert_attachment($attachment, $upload['file']);

                require_once ABSPATH . 'wp-admin/includes/image.php';
                $attach_data = wp_generate_attachment_metadata($attach_id, $upload['file']);
                wp_update_attachment_metadata($attach_id, $attach_data);

                // Set the logo setting in Customizer
                set_theme_mod('custom_logo', $attach_id);

                // Redirect back to the page where the form was submitted
                $referer = ! empty( $_SERVER['HTTP_REFERER'] ) ? esc_url_raw( wp_unslash( $_SERVER['HTTP_REFERER'] ) ) : '';
                wp_redirect( $referer );
                exit();
            } else {
                // Handle upload error
                wp_die(esc_html('Logo upload failed. Error: ' . $upload['error']));
            }
        }
    }
}
add_action('wp_ajax_solace_extra_upload_logo', 'solace_extra_upload_logo'); 
add_action('wp_ajax_nopriv_solace_extra_upload_logo', 'solace_extra_upload_logo');  

if ( ! function_exists( 'solace_is_run_in_shortcode' ) ) {

	/**
	 * solace_is_run_in_shortcode - Returns true when posts run in from shortcode.
	 *
	 * @return bool
	 */
	function solace_is_run_in_shortcode() {
        global $solace_is_run_in_shortcode;
        
		return $solace_is_run_in_shortcode;
	}
}



// CODE FOR SITE-BUILDER IS BEGIN HERE

function solace_register_sitebuilder_post_type() {
    $labels = array(
        'name'                  => _x( 'Site Builder Parts', 'Post type general name', 'solace-extra' ),
        'singular_name'         => _x( 'Site Builder Part', 'Post type singular name', 'solace-extra' ),
        'menu_name'             => _x( 'Website Parts', 'Admin Menu text', 'solace-extra' ),
        'name_admin_bar'        => _x( 'Site Builder Part', 'Add New on Toolbar', 'solace-extra' ),
        'add_new'               => __( 'Create New', 'solace-extra' ),
        'add_new_item'          => __( 'Create New Site Builder Part', 'solace-extra' ),
        'new_item'              => __( 'New Site Builder Part', 'solace-extra' ),
        'edit_item'             => __( 'Edit Site Builder Part', 'solace-extra' ),
        'view_item'             => __( 'View Site Builder Part', 'solace-extra' ),
        'all_items'             => __( 'All Site Builder Parts', 'solace-extra' ),
        'search_items'          => __( 'Search Site Builder Parts', 'solace-extra' ),
        'not_found'             => __( 'No site builder parts found.', 'solace-extra' ),
        'not_found_in_trash'    => __( 'No site builder parts found in Trash.', 'solace-extra' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        // 'show_in_menu'       => true,
        'show_in_menu'       => 'dashboard', // Set as submenu of Solace menu
        'menu_position'      => 25,
        // 'rewrite'            => array('slug' => 'solace-sitebuilder'),
        'capability_type'    => 'post',
        'menu_icon'          => 'dashicons-editor-code',
        'supports' => array('title', 'editor', 'thumbnail'),

        'has_archive'        => false,
        'exclude_from_search'=> true,
        'publicly_queryable' => true,
    );
    solace_add_elementor_cpt_support();

    register_post_type( 'solace-sitebuilder', $args );
    flush_rewrite_rules();

}
add_action( 'init', 'solace_register_sitebuilder_post_type' );

function solace_add_admin_menus() {

    add_submenu_page(
        'solace',                   
        __('Site Builder Parts', 'solace-extra'), 
        __('Site Builder Parts', 'solace-extra'), 
        'manage_options',                      // Capability
        'edit.php?post_type=solace-sitebuilder' // URL submenu
    );
}
// add_action('admin_menu', 'solace_add_admin_menus');

 function solace_add_elementor_cpt_support() {

    if ( ! is_admin() ) {
        return;
    }

    $cpt_support = get_option( 'elementor_cpt_support' );

    if ( ! $cpt_support ) {
        update_option( 'elementor_cpt_support', array( 'post', 'page', 'solace-sitebuilder' ) );
    } elseif ( ! in_array( 'solace-sitebuilder', $cpt_support, true ) ) {
        $cpt_support[] = 'solace-sitebuilder';
        update_option( 'elementor_cpt_support', $cpt_support );
    }

}
// Add Elementor support for the custom post type
function solace_add_elementor_support_for_sitebuilder() {
    \Elementor\Plugin::instance()->elements_manager->add_category(
        'solace-sitebuilder',
        array(
            'title' => __( 'Site Builder Parts', 'solace-extra' ),
            'icon' => 'fa fa-plug',
        ),
        1
    );
}
add_action( 'elementor/elements/categories_registered', 'solace_add_elementor_support_for_sitebuilder' );

require plugin_dir_path( __FILE__ ) . 'sitebuilder/sitebuilder.php';

// add_action('wp_head', 'solace_display_custom_header');

function solace_check_import_status() {
    $status = get_option('solace_extra_import_zip_complete', false); 
    wp_send_json([
        'completed' => (bool) $status 
    ]);
    exit; 
}
add_action('wp_ajax_check_import_status', 'solace_check_import_status');
add_action('wp_ajax_nopriv_check_import_status', 'solace_check_import_status');

solace_disable_image_processing();
function solace_disable_image_processing() {
    add_filter('intermediate_image_sizes_advanced', 'solace_disable_sizes');
}

function solace_disable_sizes($sizes) {
    return [];
}
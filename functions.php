

<?php

function nader_theme_support()
{

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Custom background color.
    add_theme_support(
        'custom-background',
        array(
            'default-color' => 'f5efe0',
        )
    );

    // Set content-width.
    global $content_width;
    if (!isset($content_width)) {
        $content_width = 580;
    }

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    // Set post thumbnail size.
    set_post_thumbnail_size(1200, 9999);

    // Add custom image size used in Cover Template.
    add_image_size('nader-fullscreen', 1980, 9999);

    // Custom logo.
    $logo_width = 120;
    $logo_height = 90;

    // If the retina setting is active, double the recommended width and height.
    if (get_theme_mod('retina_logo', false)) {
        $logo_width = floor($logo_width * 2);
        $logo_height = floor($logo_height * 2);
    }

    add_theme_support(
        'custom-logo',
        array(
            'height' => $logo_height,
            'width' => $logo_width,
            'flex-height' => true,
            'flex-width' => true,
        )
    );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
            'navigation-widgets',
        )
    );

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Twenty Twenty, use a find and replace
     * to change 'nader' to the name of your theme in all the template files.
     */
    // load_theme_textdomain( 'nader' );

    // Add support for full and wide align images.
    add_theme_support('align-wide');

    // Add support for responsive embeds.
    add_theme_support('responsive-embeds');

    /*
     * Adds starter content to highlight the theme on fresh sites.
     * This is done conditionally to avoid loading the starter content on every
     * page load, as it is a one-off operation only needed once in the customizer.
     */
    // if ( is_customize_preview() ) {
    //     require get_template_directory() . '/inc/starter-content.php';
    //     add_theme_support( 'starter-content', nader_get_starter_content() );
    // }

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /*
     * Adds `async` and `defer` support for scripts registered or enqueued
     * by the theme.
    //  */
    // $loader = new nader_Script_Loader();
    // add_filter( 'script_loader_tag', array( $loader, 'filter_script_loader_tag' ), 10, 2 );

}

add_action('after_setup_theme', 'nader_theme_support');

require get_stylesheet_directory() . '/inc/custmizorContent.php';
new CustmizorContent();

/**
 * Loading All CSS Stylesheets and Javascript Files.
 *
 * @since v1.0
 */
function nader()
{
    $theme_version = wp_get_theme()->get('Version');

    // 1. Styles.
    wp_enqueue_style('style', get_theme_file_uri('style.css'), array(), $theme_version, 'all');

    // if (is_rtl()) {
    //     wp_enqueue_style('rtl', get_theme_file_uri('assets/css/rtl.css'), array(), $theme_version, 'all');
    // }

    // 2. Scripts.
    wp_enqueue_script('mainjs', get_template_directory_uri() . '/assets/js/scripts.js', array(), $theme_version, true);

}
add_action('wp_enqueue_scripts', 'nader');


// function wpb_adding_scripts() {
 
//     wp_register_script('my_amazing_script', plugins_url('amazing_script.js', __FILE__), array('jquery'),'1.1', true);
     
//     wp_enqueue_script('my_amazing_script');
//     }
      
//     add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' ); 


// function theme_prefix_register_elementor_locations( $elementor_theme_manager ) {

// 	$elementor_theme_manager->register_all_core_location();

// }
// add_action( 'elementor/theme/register_locations', 'theme_prefix_register_elementor_locations' );


?>

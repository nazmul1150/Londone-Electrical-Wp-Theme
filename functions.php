<?php
/**
 * Londone Electrical functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Londone_Electrical
 * @since Londone Electrical 1.0
 */

if (!defined('LONDONE_ELECTRICAL_PATH')) {
    define('LONDONE_ELECTRICAL_PATH', get_template_directory());
}

if (!defined('LONDONE_ELECTRICAL_URI')) {
    define('LONDONE_ELECTRICAL_URI', get_template_directory_uri());
}

//enque css and js file
if (!function_exists('londone_electrical_enqueue_styles_scripts')) :
    function londone_electrical_enqueue_styles_scripts() {
        // Google Fonts
        wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,100..1000;1,100..1000&family=Onest:wght@100..900&display=swap', array(), null);
        // Bootstrap
        wp_enqueue_style('bootstrap', LONDONE_ELECTRICAL_URI . '/asset/css/bootstrap.min.css', array(), '5.3.0');
        // SlickNav
        wp_enqueue_style('slicknav', LONDONE_ELECTRICAL_URI . '/asset/css/slicknav.min.css', array(), '1.0.0');
        // Swiper Bundle
        wp_enqueue_style('swiper', LONDONE_ELECTRICAL_URI . '/asset/css/swiper-bundle.min.css', array(), '10.0.0');
        // Font Awesome Icon Css
        // wp_enqueue_style('font-awesome', LONDONE_ELECTRICAL_URI . '/asset/css/all.min.css', array(), '10.0.0');
        wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css', array(), null);
        // Animate CSS
        wp_enqueue_style('animate', LONDONE_ELECTRICAL_URI . '/asset/css/animate.css', array(), '4.1.1');
        // Magnific Popup
        wp_enqueue_style('magnific-popup', LONDONE_ELECTRICAL_URI . '/asset/css/magnific-popup.css', array(), '1.1.0');
        // Mouse Cursor
        wp_enqueue_style('mousecursor', LONDONE_ELECTRICAL_URI . '/asset/css/mousecursor.css', array(), '1.0.0');
        // Main Custom Css
        wp_enqueue_style('custom-css', LONDONE_ELECTRICAL_URI . '/asset/css/custom.css', array(), '1.0.0');
        // Main Stylesheet
        wp_enqueue_style('lineman-style', get_stylesheet_uri(), array(), '1.0.0');

        // jQuery (WordPress includes it by default, so we can load it)
        wp_enqueue_script('jquery'); 
        // Bootstrap JS
        wp_enqueue_script('bootstrap', LONDONE_ELECTRICAL_URI . '/asset/js/bootstrap.min.js', array('jquery'), null, true);
        // Validator JS
        wp_enqueue_script('validator', LONDONE_ELECTRICAL_URI . '/asset/js/validator.min.js', array('jquery'), null, true);
        // Slicknav JS
        wp_enqueue_script('slicknav', LONDONE_ELECTRICAL_URI . '/asset/js/jquery.slicknav.js', array('jquery'), null, true);
        // Swiper JS
        wp_enqueue_script('swiper', LONDONE_ELECTRICAL_URI . '/asset/js/swiper-bundle.min.js', array('jquery'), null, true);
        // Font Awesome (optional if it's used in 'all.min.js')
        wp_enqueue_script('font-awesome', LONDONE_ELECTRICAL_URI . '/asset/js/all.min.js', array(), null, true);
        // Waypoints JS
        wp_enqueue_script('waypoints', LONDONE_ELECTRICAL_URI . '/asset/js/jquery.waypoints.min.js', array('jquery'), null, true);
        // CounterUp JS
        wp_enqueue_script('counterup', LONDONE_ELECTRICAL_URI . '/asset/js/jquery.counterup.min.js', array('jquery'), null, true);
        // Magnific Popup JS
        wp_enqueue_script('magnific-popup', LONDONE_ELECTRICAL_URI . '/asset/js/jquery.magnific-popup.min.js', array('jquery'), null, true);
        // Smooth Scroll JS
        wp_enqueue_script('smooth-scroll', LONDONE_ELECTRICAL_URI . '/asset/js/SmoothScroll.js', array(), null, true);
        // Parallaxie JS
        wp_enqueue_script('parallaxie', LONDONE_ELECTRICAL_URI . '/asset/js/parallaxie.js', array(), null, true);
        // GSAP JS
        wp_enqueue_script('gsap', LONDONE_ELECTRICAL_URI . '/asset/js/gsap.min.js', array(), null, true);
        // MagicCursor JS
        wp_enqueue_script('magiccursor', LONDONE_ELECTRICAL_URI . '/asset/js/magiccursor.js', array(), null, true);
        // SplitText JS
        wp_enqueue_script('splittext', LONDONE_ELECTRICAL_URI . '/asset/js/SplitText.js', array(), null, true);
        // ScrollTrigger JS
        wp_enqueue_script('scrolltrigger', LONDONE_ELECTRICAL_URI . '/asset/js/ScrollTrigger.min.js', array(), null, true);
        // YouTube Player JS
        wp_enqueue_script('ytplayer', LONDONE_ELECTRICAL_URI . '/asset/js/jquery.mb.YTPlayer.min.js', array('jquery'), null, true);
        // WOW JS
        wp_enqueue_script('wow', LONDONE_ELECTRICAL_URI . '/asset/js/wow.min.js', array(), null, true);
        // Custom Function JS (Ensure this is loaded last if it depends on other scripts)
        wp_enqueue_script('custom-function', LONDONE_ELECTRICAL_URI . '/asset/js/function.js', array('jquery', 'bootstrap', 'swiper', 'wow'), null, true);
    }
endif;
add_action('wp_enqueue_scripts', 'londone_electrical_enqueue_styles_scripts');
add_action('enqueue_block_editor_assets', 'londone_electrical_enqueue_styles_scripts');

// Adds theme support for post formats.
if ( ! function_exists( 'londone_electrical_post_format_setup' ) ) :

	function londone_electrical_post_format_setup() {
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'londone_electrical_post_format_setup' );

// Enqueues editor-style.css in the editors.
if ( ! function_exists( 'londone_electrical_editor_style' ) ) :

	function londone_electrical_editor_style() {
		add_editor_style( get_parent_theme_file_uri( 'assets/css/editor-style.css' ) );
	}
endif;
add_action( 'after_setup_theme', 'londone_electrical_editor_style' );

// Registers pattern categories.
if ( ! function_exists( 'londone_electrical_pattern_categories' ) ) :
	function londone_electrical_pattern_categories() {

		register_block_pattern_category(
			'londone_electrical_page',
			array(
				'label'       => __( 'Pages', 'londone-electrical' ),
				'description' => __( 'A collection of full page layouts.', 'londone-electrical' ),
			)
		);

		register_block_pattern_category(
			'londone_electrical_post-format',
			array(
				'label'       => __( 'Post formats', 'londone-electrical' ),
				'description' => __( 'A collection of post format patterns.', 'londone-electrical' ),
			)
		);
	}
endif;
add_action( 'init', 'londone_electrical_pattern_categories' );

//register menu
if (!function_exists('londone_electrical_register_menus')) :
    function londone_electrical_register_menus() {
        register_nav_menus(array(
            'primary_menu' => __('Primary Menu', 'londone-electrical'),
            'footer_menu' => __('Footer Menu', 'londone-electrical')
        ));
    }
endif;
add_action('after_setup_theme', 'londone_electrical_register_menus');

//bootstrap menu nav walker
class Bootstrap_Navwalker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= '<ul class="">';
    }
    
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $class_names = join(' ', $item->classes ?? []);
        $has_children = in_array('menu-item-has-children', $item->classes ?? []);

        $output .= '<li class="nav-item ' . ($has_children ? 'submenu' : '') . '">';
        $output .= '<a class="nav-link ' . ($has_children ? '' : '') . '" href="' . esc_url($item->url) . '"' . ($has_children ? ' data-bs-toggle="dropdown"' : '') . '>';
        $output .= esc_html($item->title);
        $output .= '</a>';
    }
}

//ReduxFramework 
if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/inc/redux-framework/redux-core/framework.php' ) ) {
    require_once( LONDONE_ELECTRICAL_PATH . '/inc/redux-framework/redux-core/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/inc/redux-config.php' ) ) {
    require_once( LONDONE_ELECTRICAL_PATH . '/inc/redux-config.php' );
}


//guten block
//require_once( LONDONE_ELECTRICAL_PATH . '/inc/block-support.php' );

function mytheme_register_blocks() {
	$blocks = ['accordion'];
	foreach ($blocks as $block) {
		register_block_type( get_template_directory() . "/inc/theme-blocks/{$block}/block.json" );
	}
}
add_action('init', 'mytheme_register_blocks');


function londone_electrical_register_blocks() {
    $blocks = ['accordion']; // চাইলে এখানে আরো ব্লক যোগ করো

    foreach ($blocks as $block) {
        $block_dir = get_template_directory() . "/inc/theme-blocks/{$block}";
        $php_file  = "{$block_dir}/{$block}.php";

        if ( file_exists( $php_file ) ) {
            register_block_type( $block_dir ); // PHP render support
        } else {
            register_block_type_from_metadata( $block_dir ); // JS fallback
        }
    }
}
add_action('init', 'londone_electrical_register_blocks');

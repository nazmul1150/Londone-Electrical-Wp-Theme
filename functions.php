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
        wp_enqueue_script('jquery-js', LONDONE_ELECTRICAL_URI . '/asset/js/jquery-3.7.1.min.js', array(), null, true);
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
        if ( ! is_admin() ) {
           wp_enqueue_script('smooth-scroll', LONDONE_ELECTRICAL_URI . '/asset/js/SmoothScroll.js', array(), null, true);
        }
           // Parallaxie JS
        wp_enqueue_script('parallaxie', LONDONE_ELECTRICAL_URI . '/asset/js/parallaxie.js', array(), null, true);
        // GSAP JS
        wp_enqueue_script('gsap', LONDONE_ELECTRICAL_URI . '/asset/js/gsap.min.js', array(), null, true);
        // MagicCursor JS
        if ( ! is_admin() ) {
          wp_enqueue_script('magiccursor', LONDONE_ELECTRICAL_URI . '/asset/js/magiccursor.js', array('jquery'), null, true);
        }
          // SplitText JS
        wp_enqueue_script('splittext', LONDONE_ELECTRICAL_URI . '/asset/js/SplitText.js', array(), null, true);
        // ScrollTrigger JS
        wp_enqueue_script('scrolltrigger', LONDONE_ELECTRICAL_URI . '/asset/js/ScrollTrigger.min.js', array(), null, true);
        // YouTube Player JS
        wp_enqueue_script('ytplayer', LONDONE_ELECTRICAL_URI . '/asset/js/jquery.mb.YTPlayer.min.js', array('jquery'), null, true);
        // WOW JS
        wp_enqueue_script('wow', LONDONE_ELECTRICAL_URI . '/asset/js/wow.min.js', array(), null, true);
        // Custom Function JS (Ensure this is loaded last if it depends on other scripts)
        wp_enqueue_script('custom-function', LONDONE_ELECTRICAL_URI . '/asset/js/function.js', array('jquery', 'bootstrap', 'swiper', 'wow', 'magiccursor'), null, true);
        //wp_enqueue_script('custom-function', LONDONE_ELECTRICAL_URI . '/asset/js/function.js', array('jquery'), null, true);
    }
endif;
add_action( 'wp_enqueue_scripts', 'londone_electrical_enqueue_styles_scripts' );
add_action( 'enqueue_block_editor_assets', 'londone_electrical_enqueue_styles_scripts' );
add_action( 'enqueue_block_assets', 'londone_electrical_enqueue_styles_scripts' );


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

//guten block category register
add_filter( 'block_categories_all', 'londone_electrical_new_block_category', 5 );

function londone_electrical_new_block_category( $categories ) {
    // Check if the active theme is "Londone Electrical"
    if ( 'Londone Electrical' === wp_get_theme()->get( 'Name' ) ) {
        $position = 0; // Theme-er jonno first position
    } else {
        $position = 2; // Plugin ba onno context-er jonno
    }

    // Define new category
    $new_category = array(
        array(
            'slug'  => 'londoneelectrical',
            'title' => __( 'Londone Electrical', 'londone-electrical' ),
            'icon'  => 'lightbulb',
        )
    );

    // Insert at desired position
    array_splice( $categories, $position, 0, $new_category );

    return $categories;
}


//guten block
//require_once( LONDONE_ELECTRICAL_PATH . '/inc/block-support.php' );

function londone_electrical_register_blocks() {
    $blocks = ['accordion', 'hero-slider', 'hero-cta-box', 'about-us', 'our-services', 'our-awards',
    'our-features', 'our-goals', 'our-facts', 'cta-box', 'our-testimonial', 'our-faqs', 'our-blog', 
    'our-pricing', 'breadcrumb', 'our-approach', 'trusted-expert', 'why-choose-us', 'our-team',
    'company-values', 'contact-us', 'services', 'image-gallery', 'our-gallery', 'blog']; // চাইলে আরো ব্লক অ্যাড করো

    foreach ($blocks as $block) {
        $block_dir = get_template_directory() . "/inc/theme-blocks/{$block}";
        $php_file  = "{$block_dir}/{$block}.php";

        if ( file_exists( $php_file ) ) {
            // PHP-render block (requires "render" key in block.json)
            register_block_type( $block_dir );
        } else {
            // JS-render block (uses edit.js & save.js)
            register_block_type_from_metadata( $block_dir );
        }
    }
}
add_action('init', 'londone_electrical_register_blocks');

//custom post
require_once( LONDONE_ELECTRICAL_PATH . '/inc/custom-post.php' );


// Breadcrumb function
function londone_custom_breadcrumbs() {
    echo '<ol class="breadcrumb">';
    
    if (!is_front_page()) {
        echo '<li class="breadcrumb-item"><a href="' . home_url() . '">home</a></li>';

        if (is_page()) {
            echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';

        } elseif ( is_home() && ! is_front_page() ) {
            // Blog posts page
            echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_title(get_option('page_for_posts')) . '</li>';

        } elseif (is_singular()) {
            $post_type = get_post_type();

            if ($post_type === 'post') {
                // Normal blog post - show category
                $category = get_the_category();
                if (!empty($category)) {
                    echo '<li class="breadcrumb-item"><a href="' . esc_url(get_category_link($category[0]->term_id)) . '">' . esc_html($category[0]->name) . '</a></li>';
                }
                echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';

            } else {
                // Custom post type single - show archive link if exists
                $post_type_obj = get_post_type_object($post_type);
                if ($post_type_obj && $post_type_obj->has_archive) {
                    $archive_link = get_post_type_archive_link($post_type);
                    echo '<li class="breadcrumb-item"><a href="' . esc_url($archive_link) . '">' . esc_html($post_type_obj->labels->name) . '</a></li>';
                }
                echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
            }

        } elseif (is_category()) {
            echo '<li class="breadcrumb-item active" aria-current="page">' . single_cat_title('', false) . '</li>';

        } elseif (is_tag()) {
            echo '<li class="breadcrumb-item active" aria-current="page">' . single_tag_title('', false) . '</li>';

        } elseif (is_search()) {
            echo '<li class="breadcrumb-item active" aria-current="page">Search: ' . get_search_query() . '</li>';

        } elseif (is_404()) {
            echo '<li class="breadcrumb-item active" aria-current="page">404 Not Found</li>';

        } elseif (is_post_type_archive()) {
            echo '<li class="breadcrumb-item active" aria-current="page">' . post_type_archive_title('', false) . '</li>';

        } elseif (is_archive()) {
            echo '<li class="breadcrumb-item active" aria-current="page">' . post_type_archive_title('', false) . '</li>';
        }

    } else {
        // Front page only
        echo '<li class="breadcrumb-item active">home</li>';
    }

    echo '</ol>';
}


// ALLOW SVG
function nextland_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}
add_action('upload_mimes', 'nextland_file_types_to_uploads');

function nextland_common_svg_media_thumbnails($response, $attachment, $meta){
    if($response['type'] === 'image' && $response['subtype'] === 'svg+xml' && class_exists('SimpleXMLElement'))
    {
        try {
            $path = get_attached_file($attachment->ID);
            if(@file_exists($path))
            {
                $svg = new SimpleXMLElement(@file_get_contents($path));
                $src = $response['url'];
                $width = (int) $svg['width'];
                $height = (int) $svg['height'];

                //media gallery
                $response['image'] = compact( 'src', 'width', 'height' );
                $response['thumb'] = compact( 'src', 'width', 'height' );

                //media single
                $response['sizes']['full'] = array(
                    'height'        => $height,
                    'width'         => $width,
                    'url'           => $src,
                    'orientation'   => $height > $width ? 'portrait' : 'landscape'
                );
            }
        }
        catch(Exception $e){}
    }

    return $response;
}
add_filter('wp_prepare_attachment_for_js', 'nextland_common_svg_media_thumbnails', 10, 3);
// END ALLOW SVG


//meta title and meta descripation setup

  // 1. Add Meta Box for Meta Title and Description to all public post types
function add_meta_tags() {
    $post_types = get_post_types(['public' => true], 'names');

    foreach ($post_types as $post_type) {
        add_meta_box('meta_tags', 'SEO Meta Tags', 'meta_tags_callback', $post_type, 'normal', 'high');
    }
}
add_action('add_meta_boxes', 'add_meta_tags');

  // 2. Callback function for the meta box HTML
function meta_tags_callback($post) {
    $meta_title = get_post_meta($post->ID, '_meta_title', true);
    $meta_description = get_post_meta($post->ID, '_meta_description', true);
    ?>
    <p>
        <label for="meta_title"><strong>Meta Title:</strong></label><br>
        <input type="text" id="meta_title" name="meta_title" value="<?php echo esc_attr($meta_title); ?>" size="80" />
    </p>
    <p>
        <label for="meta_description"><strong>Meta Description:</strong></label><br>
        <textarea id="meta_description" name="meta_description" rows="4" cols="80"><?php echo esc_textarea($meta_description); ?></textarea>
    </p>
    <?php
}

  // 3. Save Meta Title and Description when post is saved
function save_meta_tags($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if (isset($_POST['meta_title'])) {
        update_post_meta($post_id, '_meta_title', sanitize_text_field($_POST['meta_title']));
    }

    if (isset($_POST['meta_description'])) {
        update_post_meta($post_id, '_meta_description', sanitize_textarea_field($_POST['meta_description']));
    }
}
add_action('save_post', 'save_meta_tags');

  // 4. Output Meta Tags in the <head> section
function add_dynamic_meta_tags() {
    if (did_action('wp_head') > 1) return;

    if (is_singular()) {
        global $post;

        $meta_title = get_post_meta($post->ID, '_meta_title', true);
        $meta_description = get_post_meta($post->ID, '_meta_description', true);

        if ($meta_title) {
            echo '<title>' . esc_html($meta_title) . '</title>' . "\n";
        }

        if ($meta_description) {
            echo '<meta name="description" content="' . esc_attr($meta_description) . '">' . "\n";
        }
    }
}
add_action('wp_head', 'add_dynamic_meta_tags', 1);

//End meta title and meta descripation setup





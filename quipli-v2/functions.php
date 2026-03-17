<?php

/**
 * Quipli Template functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package quipli
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.2.994');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function quipli_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Quipli Template, use a find and replace
		* to change 'quipli' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('quipli', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'quipli'),
			'footer-menu' => esc_html__('Footer Menu', 'quipli'),
		)
	);

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
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'quipli_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
	add_post_type_support('page', 'excerpt');
}
add_action('after_setup_theme', 'quipli_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function quipli_content_width()
{
	$GLOBALS['content_width'] = apply_filters('quipli_content_width', 640);
}
add_action('after_setup_theme', 'quipli_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function quipli_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'quipli'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'quipli'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'quipli_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function quipli_scripts()
{
	wp_enqueue_style('quipli-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('quipli-style', 'rtl', 'replace');

	wp_enqueue_style('quipli-css', get_template_directory_uri() . '/assets/css/main.min.css', array(), _S_VERSION);
	wp_enqueue_script('quipli-js', get_template_directory_uri() . '/assets/js/main.min.js', array(), _S_VERSION, true);
	
	// latest styles for updates
	wp_enqueue_style('quipli-css-new', get_template_directory_uri() . '/assets/css/latest-style.css', array(), _S_VERSION);

	//localization sample with nonce call
	wp_enqueue_script('quipli-custom-js', get_template_directory_uri() . '/js/wpcustom.js', array(), _S_VERSION, true);
	wp_localize_script('quipli-custom-js', 'plugin_ajax_object', array('ajax_url' => admin_url('admin-ajax.php'), 'nonce' => wp_create_nonce('ajax-nonce')));

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
	
	wp_enqueue_script('lity-script', 'https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.js', array('jquery'), '1.0.1', true);
	wp_enqueue_style('lity-css', 'https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.css', array(), '1.0.1');
	
}
add_action('wp_enqueue_scripts', 'quipli_scripts');

function add_defer_js($tag, $handle, $src)
{
	$scriptArr = array('quipli-js', 'quipli-custom-js');
	if (in_array($handle, $scriptArr)) {
		$tag = str_replace('src=', 'defer src=', $tag);
	}
	return $tag;
}
add_filter('script_loader_tag', 'add_defer_js', 10, 3);

//Disable gutenberg style in Front
function wps_deregister_styles()
{
	wp_dequeue_style('wp-block-library');
}
add_action('wp_print_styles', 'wps_deregister_styles', 100);

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/theme-functions/jetpack.php';
}

/**
 * function includes
 */
$function_includes = array(
	'theme-functions/custom-header.php', // custom header
	'theme-functions/template-tags.php', // template tags
	'theme-functions/template-functions.php', //template functions
	'theme-functions/customizer.php', //customizer additions.
);
$function_includes = array(
	'theme-functions/custom-header.php', // custom header
	'theme-functions/template-tags.php', // template tags
	'theme-functions/template-functions.php', //template functions
	'theme-functions/customizer.php', //customizer additions.
	'custom-functions/general.php', //general functions.
	'custom-functions/format.php', //format functions.
	'custom-functions/image.php', //image functions.
	'custom-functions/menu.php', //menu functions.
	'shortcodes/shortcode.php', //Custom Logo
	'custom-functions/admin/dashboard/acf-theme-options.php', //admin theme option layout
	'custom-functions/admin/login/login.php', //admin theme option layout
	'custom-functions/admin/dashboard/custom-logo.php', //Custom Logo
	//'theme-functions/taxonomy-functions.php',//Taxanomy Practice Area
	//'custom-post-type/press.php',//menu functions.	
);

foreach ($function_includes as $file) {
	$filepath = locate_template('/inc/' . $file);
	if (!$filepath) {
		trigger_error(sprintf('Error locating /inc%s for inclusion', $file), E_USER_ERROR);
	}
	require_once $filepath;
}

function load_more_blogposts($type = null, $category = "")
{
	$flag = 0;
	$category_slug = $category;
	if ($type == 'call') {
		$flag = 0;
		$offset = 0;
	} else {
		if (!wp_verify_nonce($_POST['nonce'], 'ajax-nonce')) {
			$flag = 1;
			$offset = 0;
		} else {
			$flag = 0;
			$get_page = $_POST['paged'];
			$category_slug = $_POST['category'];
			$offset = 10 + ($get_page - 1) * 9;
		}
	}

	if ($flag == 1) {
		// die ( 'Busted!');
	} else {
		$blog_posts_html = '';
		$args_query = array(
			'post_type' => 'post',
			'posts_per_page' => 9,
			'orderby' => array('date' => 'DESC'),
			'offset' => $offset,
		);
		if ($category_slug) {
			$args_query['category_name'] = $category_slug;
		}
		$recent_posts = new WP_Query($args_query);

		$blog_random_classes = array(
			array('bloglist__blog', ''), array('bloglist__blog bloglist__blog--vectortopright', 'vector1'), array('bloglist__blog bloglist__blog--vectorbottomright', 'vector2'),
			array('bloglist__blog bloglist__blog--vectortopright', 'vector1'), array('bloglist__blog bloglist__blog--vectorbottomleft', 'vector2'), array('bloglist__blog', ''),
			array('bloglist__blog bloglist__blog--vectorbottomleft', 'vector2'), array('bloglist__blog', ''), array('bloglist__blog bloglist__blog--vectorbottomright bloglist__blog--vectorreverse', 'vector2')
		);

		if ($recent_posts->have_posts()) :
			$temp = 0;
			while ($recent_posts->have_posts()) :
				$recent_posts->the_post();
				$blog_image_id = get_post_thumbnail_id($post->ID);
				if (empty($blog_image_id)) {
					$blog_image_id = 11870;
				}

				if (!empty($blog_random_classes[$temp][1])) {
					if ($blog_random_classes[$temp][1] == 'vector1') {
						$span_tag = '<span class="layer">' . get_image(array('imgid' => 11004)) . '</span>';
					} elseif ($blog_random_classes[$temp][1] == 'vector2') {
						$span_tag = '<span class="layer">' . get_image(array('imgid' => 11005)) . '</span>';
					}
				} else {
					$span_tag = '';
				}

				$blog_posts_html .= '<div class="' . $blog_random_classes[$temp][0] . '">
                    <div class="qp blog blog--list">
                        <div class="blog__image">'
					. $span_tag .
					'<figure>' . get_image(array('imgid' => $blog_image_id)) . '</figure>
                        </div>
                        <article> <span class="l-tag">Blog</span>
                            <h6>' . get_the_title() . '</h6>
                        </article>
                        <div class="blog__topics show"> 
                            <ul>';
				$blog_categories = get_post_category($post->ID, 'multi');
				foreach ($blog_categories as $blog_cat) {
					$blog_posts_html .= '<li>' . $blog_cat . '</li>';
				}
				$blog_posts_html .= '</ul>
                        </div><a class="blog__link" href="' . get_permalink() . '" title="' . get_the_title() . '"></a>
                    </div>
                </div>';
				$temp++;
			endwhile;
			wp_reset_postdata();
		endif;

		echo  $blog_posts_html;

		if ($type != 'call') {
			wp_die();
		}
	}
}

add_action('wp_ajax_load_more_blogposts', 'load_more_blogposts'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_load_more_blogposts', 'load_more_blogposts'); // wp_ajax_nopriv_{action}

function get_post_category($post_id, $return_type)
{
	$get_category = get_the_category($post_id);

	if ($return_type == 'single') {
		if (class_exists('WPSEO_Primary_Term')) {
			// Show the post's 'Primary' category, if this Yoast feature is available, & one is set
			$wpseo_primary_term = new WPSEO_Primary_Term('category', $post_id);
			$wpseo_primary_term = $wpseo_primary_term->get_primary_term();
			$term = get_term($wpseo_primary_term);
			if (is_wp_error($term)) {
				// Default to first category (not Yoast) if an error is returned
				return $get_category[0]->cat_name;
			} else {
				// Yoast Primary category
				return $term->name;
			}
		} else {
			return $get_category[0]->cat_name;
		}
	} else {
		$category_array = [];
		foreach ($get_category as $category_child) {
			$category_array[] = $category_child->cat_name;
		}
		return $category_array;
	}
}

function load_more_display()
{
	global $wpdb;
	$category = $_POST['category'];
	$category_slug = isset($category) ? sanitize_text_field($category) : ''; // Sanitize and assign category slug if available
	$query = "SELECT * FROM {$wpdb->prefix}posts WHERE post_type = 'post' AND post_status = 'publish'";

	if (!empty($category_slug)) {
		$query .= " AND ID IN (
        SELECT object_id
        FROM {$wpdb->prefix}term_relationships
        WHERE term_taxonomy_id IN (
            SELECT term_id
            FROM {$wpdb->prefix}terms
            WHERE slug = %s
        )
    )";
		$get_posts = $wpdb->get_results($wpdb->prepare($query, $category_slug), ARRAY_A);
	} else {
		$get_posts = $wpdb->get_results($query, ARRAY_A);
	}

	$get_posts_count = count($get_posts);

	$load_quotient = $get_posts_count / 9;
	$load_remainder = $get_posts_count % 9;

	if ($load_remainder == 0) {
		$load_limit = floor($load_quotient) - 1;
	} else {
		$load_limit = floor($load_quotient);
	}
	$get_page = $_POST['pagecount'];

	if ($get_page == $load_limit) {
		echo 'hide';
	}
	wp_die();
}

add_action('wp_ajax_load_more_display', 'load_more_display'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_load_more_display', 'load_more_display'); // wp_ajax_nopriv_{action}

function custom_excerpt_length($length)
{
	return 15;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);


// enable html for json schema
add_filter( 'acf/the_field/allow_unsafe_html', function( $allowed, $selector ) {
    if ( $selector === "json_schema_structure" ) {
        return true;
    }
    return $allowed;
}, 10, 2);


function redirect_old_post_slugs_to_resources() {
    // Only run on the front‐end 404
    if (is_admin() || !is_404()) {
        return;
    }

    // Grab the requested path (strip leading/trailing slashes)
    $requested = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH ),'/');

    // If it’s empty or has multiple segments, bail
    if (empty( $requested ) || strpos($requested, '/') !== false ) {
        return;
    }

    // Look for a published post with that slug
    $post = get_page_by_path($requested, OBJECT, 'post' );
    if ($post && 'publish' === get_post_status($post)){
        // Build the new URL and redirect
        $new_url = home_url("/resources/{$requested}/");
        wp_safe_redirect($new_url,301);
        exit;
    }
}
add_action( 'template_redirect', 'redirect_old_post_slugs_to_resources' );

// 1. Fix WebPage schema
add_filter( 'wpseo_schema_webpage', function( $data ) {
    $domain = 'https://quipli.com';
    $data['@id']      = $domain . '/';
    $data['url']      = $domain . '/';
    $data['isPartOf'] = [ '@id' => $domain . '/#website' ];
    $data['about']    = [ '@id' => $domain . '/#organization' ];
    return $data;
}, 20 );

// 2. Fix WebSite schema
add_filter( 'wpseo_schema_website', function( $data ) {
    $domain = 'https://quipli.com';
    $data['@id']                 = $domain . '/#website';
    $data['url']                 = $domain;
    // update search action URL template
    if ( isset( $data['potentialAction']['target'] ) ) {
        $template = $data['potentialAction']['target'];
        $data['potentialAction']['target'] = preg_replace(
            '#https?://[^/]+#',
            $domain,
            $template
        );
    }
    // point publisher to correct Organization
    if ( isset( $data['publisher']['@id'] ) ) {
        $data['publisher']['@id'] = $domain . '/#organization';
    }
    // Adjust the internal SearchAction URL template
    if ( isset( $data['potentialAction']['target']['urlTemplate'] ) ) {
        $data['potentialAction']['target']['urlTemplate'] = $domain . '/?s={search_term_string}';
    }
    return $data;
}, 20 );

// 3. Fix Organization schema
add_filter( 'wpseo_schema_organization', function( $data ) {
    $domain = 'https://quipli.com';
    $data['@id'] = $domain . '/#organization';
    $data['url'] = $domain . '/';
    
    if ( isset( $data['logo']['@id'] ) ) {
        $data['logo']['@id'] = $domain . '/#logo';
    }
    return $data;
}, 20 );

add_filter( 'wpseo_schema_imageobject', function ( $data ) {
    $staging = 'http://10.100.1.94:8080';
    $domain  = 'https://quipli.com';

    // Replace staging host with production domain in @id, url, and contentUrl
    foreach ( [ '@id', 'url', 'contentUrl' ] as $prop ) {
        if ( isset( $data[ $prop ] ) ) {
            $data[ $prop ] = preg_replace(
                '#^' . preg_quote( $staging, '#' ) . '#',
                $domain,
                $data[ $prop ]
            );
        }
    }

    return $data;
}, 20 );

add_filter( 'wpseo_json_ld_search_url', function() {
    // Return a URL with {search_term_string} placeholder exactly formatted
    return 'https://quipli.com/?s={search_term_string}';
}, 20 );


function add_ids_to_headings($content)
{
	// Only run on single posts/pages
	if (!is_singular()) {
		return $content;
	}

	// Regex: find h1/h2/h3 tags
	return preg_replace_callback(
		'/<h([1-3])(?![^>]*id=)([^>]*)>(.*?)<\/h\1>/i',
		function ($matches) {
			$tag = $matches[1];          // heading level
			$attrs = $matches[2];        // other attributes
			$inner = $matches[3];        // text inside heading

			// Generate slug from heading text
			$slug = sanitize_title_with_dashes(strip_tags($inner));

			return '<h' . $tag . $attrs . ' id="' . $slug . '">' . $inner . '</h' . $tag . '>';
		},
		$content
	);
}
add_filter('the_content', 'add_ids_to_headings');

function fix_page_based_pagination($query) {
    // Only modify frontend main queries
    if (is_admin() || !$query->is_main_query()) return;

    // List your page slugs that use this custom query setup
    $paginated_pages = ['podcast']; // 👈 add more if needed

    foreach ($paginated_pages as $slug) {
        if (is_page($slug)) {
            $paged = get_query_var('paged') ?: get_query_var('page') ?: 1;

            // Set up query vars for pagination + your CPT
            $query->set('post_type', $slug);
            $query->set('paged', $paged);
            $query->set('posts_per_page', 10); // change if needed
        }
    }
}
add_action('pre_get_posts', 'fix_page_based_pagination');


// function custom_rental_resources_permalinks( $post_link, $post ) {
//     $post_types = array( 'event', 'podcast', 'success-stories', 'calculator', 'tool', 'template' );

//     if ( is_object( $post ) && in_array( $post->post_type, $post_types ) ) {
//         return home_url( 'resources/' . $post->post_type . '/' . $post->post_name . '/' );
//     }

//     return $post_link;
// }
// add_filter( 'post_type_link', 'custom_rental_resources_permalinks', 10, 2 );

// // Add rewrite rules for those post types
// function custom_rental_resources_rewrite_rules() {
//     $post_types = array( 'event', 'podcast', 'success-stories','tool','calculator' );

//     foreach ( $post_types as $pt ) {
//         add_rewrite_rule(
//             '^resources/' . $pt . '/([^/]+)/?$',
//             'index.php?post_type=' . $pt . '&name=$matches[1]',
//             'top'
//         );
//     }
// }
// add_action( 'init', 'custom_rental_resources_rewrite_rules' );

// function custom_search_filter( $query ) {
//     if ( ! is_admin() && $query->is_main_query() && $query->is_search() ) {

//         // Only run if post_type is passed in the form
//         if ( isset($_GET['post_type']) && !empty($_GET['post_type']) ) {
//             $query->set( 'post_type', sanitize_text_field($_GET['post_type']) );
//         }
//     }
// }
// add_action( 'pre_get_posts', 'custom_search_filter' );

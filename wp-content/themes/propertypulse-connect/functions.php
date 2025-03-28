<?php
// Theme Setup
function propertypulse_register_menus() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'propertypulse'),
    ));
}
add_action('after_setup_theme', 'propertypulse_register_menus');
add_theme_support('menus');
 add_theme_support('post-thumbnails');


function enqueue_theme_styles() {
    // Get the theme directory URI
    $theme_uri = get_template_directory_uri();

    // Stylesheet array
    $styles = [
        'bootstrap'        => 'bootstrap.min.css',
        'font-awesome'     => 'font-awesome.min.css',
        'jquery-ui'        => 'jquery-ui.min.css',
        'animate'          => 'animate.css',
        'magnific-popup'   => 'magnific-popup.css',
        'nice-select'      => 'nice-select.css',
        'owl-carousel'     => 'owl.carousel.min.css',
        'classy-nav'       => 'default-assets/classy-nav.css',
        'main'             => 'main.css',
        'style'            => 'style.css'
    ];

    // Enqueue each stylesheet dynamically
    foreach ($styles as $handle => $file) {
        wp_enqueue_style($handle, $theme_uri . '/assets/css/' . $file, [], null);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');


function enqueue_theme_scripts() {
    // Get the theme directory URI
    $theme_uri = get_template_directory_uri();

    // jQuery (ensure it's loaded first)
    wp_enqueue_script('jquery', $theme_uri . '/assets/js/jquery.min.js', [], null, true);

    // JavaScript files in /assets/js/
    $js_files = [
        'bootstrap'         => 'bootstrap.min.js',
        'popper'            => 'popper.min.js',
        'jquery-ui'         => 'jquery-ui.min.js',
        'jquery-easing'     => 'jquery.easing.min.js',
        'imagesloaded'      => 'imagesloaded.pkgd.min.js',
        'isotope'           => 'isotope.pkgd.min.js',
        'jarallax'          => 'jarallax.min.js',
        'jarallax-video'    => 'jarallax-video.min.js',
        'jquery-magnific'   => 'jquery.magnific-popup.min.js',
        'jquery-nice'       => 'jquery.nice-select.min.js',
        'jquery-counterup'  => 'jquery.counterup.min.js',
        'jquery-countdown'  => 'jquery.countdown.min.js',
        'jquery-waypoints'  => 'waypoints.min.js',
        'owl-carousel'      => 'owl.carousel.min.js',
        'wow'               => 'wow.min.js',
        'rehomes-bundle'    => 'rehomes.bundle.js',
        'main'              => 'main.js',
    ];

    // Enqueue scripts from /assets/js/
    foreach ($js_files as $handle => $file) {
        wp_enqueue_script($handle, $theme_uri . '/assets/js/' . $file, ['jquery'], null, true);
    }

    // JavaScript files in /assets/js/default-assets/
    $default_assets_files = [
        'active'                => 'active.js',
        'avoid-console-error'   => 'avoid.console.error.js',
        'classy-nav'            => 'classy-nav.js',
        'jquery-scrollup'       => 'jquery.scrollup.min.js',
    ];

    // Enqueue scripts from /assets/js/default-assets/
    foreach ($default_assets_files as $handle => $file) {
        wp_enqueue_script($handle, $theme_uri . '/assets/js/default-assets/' . $file, ['jquery'], null, true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_theme_scripts'); 

// Include the Custom Post Type file
require_once get_template_directory() . '/inc/custom-post-type/property/pp-property-pt.php';

require_once get_template_directory() . '/inc/custom-widget/Recent_Properties_Widget.php';



function understrap_bootstrap_pagination($query = null) {
    if (!$query) {
        global $wp_query;
        $query = $wp_query;
    }

    $big = 999999999;
    $pages = paginate_links(array(
        'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'    => '?paged=%#%',
        'current'   => max(1, get_query_var('paged')),
        'total'     => $query->max_num_pages,
        'prev_text' => '<i class="fa fa-angle-double-left"></i> Previous',
        'next_text' => 'Next <i class="fa fa-angle-double-right"></i>',
        'type'      => 'array',
    ));

    if (is_array($pages)) {
        echo '<ul class="pagination justify-content-center">';
        foreach ($pages as $page) {
            if (strpos($page, 'current') !== false) {
                echo '<li class="page-item active">' . str_replace('page-numbers', 'page-link', $page) . '</li>';
            } else {
                echo '<li class="page-item">' . str_replace('page-numbers', 'page-link', $page) . '</li>';
            }
        }
        echo '</ul>';
    }
}

function filter_property_archive_by_type($query) {
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('property')) {
        if (isset($_GET['property_type']) && !empty($_GET['property_type'])) {
            $query->set('tax_query', [
                [
                    'taxonomy' => 'property_type',
                    'field'    => 'slug',
                    'terms'    => sanitize_text_field($_GET['property_type']),
                ],
            ]);
        }
    }
}
add_action('pre_get_posts', 'filter_property_archive_by_type');

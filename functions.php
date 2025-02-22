<?php

// Require Bootstrap navbar walker
require_once('class-wp-bootstrap-navwalker.php');

// Require ACF functions
require_once('functions-acf.php');

// Include js and css
function enqueue_scripts()
{
    if (!is_admin()) {
        wp_enqueue_style('style', get_stylesheet_directory_uri() . '/css/styles.min.css', array(), '1.0');

        wp_enqueue_script('script', get_stylesheet_directory_uri() . '/js/script.min.js', array('jquery'), '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');
add_action('login_enqueue_scripts', 'enqueue_scripts');


// Register navbar
function register_menu()
{
    register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'register_menu');



// Return images directory
function get_images_url($filename = '')
{
    if (strlen($filename) > 0 && $filename[0] != '/')
        $filename = '/' . $filename;
    return get_stylesheet_directory_uri() . '/images' . $filename;
}

// Remove admin menu items
function remove_menus()
{
    remove_menu_page('link-manager.php');
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'remove_menus');
//add_filter('acf/settings/show_admin', '__return_false');

// Add thumbnail support
function thumbnails()
{
    add_theme_support('post-thumbnails', array('post', 'page', 'customer_stories', 'events'));
}
add_action('init', 'thumbnails');

// Rename thumbnails
function change_featured_image_labels($labels)
{
    $labels->featured_image = 'Header afbeelding';
    $labels->set_featured_image = 'Header afbeelding instellen';
    $labels->remove_featured_image = 'Verwijder header afbeelding';
    $labels->use_featured_image = 'Gebruik als header afbeelding';

    return $labels;
}
add_filter('post_type_labels_page', 'change_featured_image_labels', 10, 1);

function new_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


// Our custom post type function
function create_posttype()
{

    register_post_type(
        'resources',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Resources'),
                'singular_name' => __('Resource')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'resources'),
            'show_in_rest' => true,

        )
    );
}
;
// Hooking up our function to theme setup
add_action('init', 'create_posttype');


// Our custom Video post type function
function create_post_type()
{

    register_post_type(
        'videos',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Videos'),
                'singular_name' => __('Videos')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'videos'),
            'show_in_rest' => true,

        )
    );
}

// Hooking up our function to theme setup
add_action('init', 'create_post_type');

// Our custom Events post type function
function create_eventpost_type()
{

    register_post_type(
        'events',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Events'),
                'singular_name' => __('Events')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'events'),
            'show_in_rest' => true,
            'supports' => ['title', 'editor', 'thumbnail']

        )
    );
    register_taxonomy('expertise_cat', ['events', 'videos'], array(
        "has_archive" => false,
        'label' => 'expertise',
        'hierarchical' => true
    ));
    register_taxonomy('industry_cat', ['events', 'videos'], array(
        "has_archive" => false,
        'label' => 'industry',
        'hierarchical' => true
    ));
}

// Hooking up our function to theme setup
add_action('init', 'create_eventpost_type');

// Our custom Events post type function
function create_customer_story_post_type()
{

    register_post_type(
        'customer_stories',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Customer Stories'),
                'singular_name' => __('Customer Stories')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'customer-stories'),
            'show_in_rest' => true,

            'supports' => ['title', 'editor', 'thumbnail']
        )
    );
}

// Hooking up our function to theme setup
add_action('init', 'create_customer_story_post_type');



// Our custom Events post type function
function create_outcome_post_type()
{

    register_post_type(
        'outcome_stories',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Outcome_Stories'),
                'singular_name' => __('Outcome_Stories')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'outcome_stories'),
            'show_in_rest' => true,

            'supports' => ['title', 'editor', 'thumbnail']
        )
    );


}

// Hooking up our function to theme setup
add_action('init', 'create_outcome_post_type');




// Filter Events
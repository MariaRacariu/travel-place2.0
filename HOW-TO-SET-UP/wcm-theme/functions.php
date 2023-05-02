<?php
 //////////////////////////////////////////////////     Add theme support   //////////////////////////////////////////////////
function setup_wcm_theme(){
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('custom-logo');
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support('title-tag');
}
// Hooking up the function to theme setup
add_action('after_setup_theme', 'setup_wcm_theme');

//////////////////////////////////////////////////    Create Custom Post Types   //////////////////////////////////////////////////

function create_custom_posttypes(){
    // Custom Post Types Options for wcm_travel
    register_post_type('wcm_travel',
        array(
            'labels' => array(
                'name' => __( 'Travels' ),
                'singular_name' => __( 'Travel' )
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'hierarchical' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'custom-fields'
            ))
    );

    // Custom Post Types Options for wcm_cruise
    register_post_type( 'wcm_cruise',
        array(
            'labels' => array(
                'name' => __( 'Travel Cruises' ),
                'singular_name' => __( 'Cruise' )
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'custom-fields'
            ))
    );

    // Custom Post Types Options for wcm_events
    register_post_type( 'wcm_events',
        array(
            'labels' => array(
                'name' => __( 'Travel Events' ),
                'singular_name' => __( 'Event' )
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'custom-fields'
            ))
    );

    // Custom Post Types Options for wcm_hike
    register_post_type( 'wcm_hike',
        array(
            'labels' => array(
                'name' => __( 'Travel Hikes' ),
                'singular_name' => __( 'Hike' )
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'custom-fields'
            ))
    );

    // Custom Post Types Options for wcm_tours
    register_post_type( 'wcm_tours',
        array(
            'labels' => array(
                'name' => __( 'Travel Tours' ),
                'singular_name' => __( 'Tour' )
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'custom-fields'
            ))
    );

    // Custom Post Types Options for wcm_special_posts
    register_post_type( 'wcm_special_posts',
        array(
            'labels' => array(
                'name' => __( 'Special Posts' ),
                'singular_name' => __( 'Special Post' )
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'custom-fields'
            )
        )
    );
}

// Hooking up the function to init
add_action( 'init', 'create_custom_posttypes');

//////////////////////////////////////////////////    Create Custom Taxonomies   //////////////////////////////////////////////////

function register_custom_taxonomy(){
    //Taxonomi information for North America
    $labels = array(
        'name'              => _x('North America','North America'),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
    );
    register_taxonomy('travel_north_america', ['wcm_travel', 'wcm_cruise', 'wcm_events', 'wcm_hike', 'page'], $args);

    //Taxonomi information for South America
    $labels = array(
    'name'              => _x('South America','South America'),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
    );
    register_taxonomy('travel_south_america', ['wcm_travel', 'wcm_tours', 'wcm_hike', 'page'], $args);

    //Taxonomi information for Europe
    $labels = array(
        'name'              => _x('Europe','Europe'),
        );
        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'show_in_rest'      => true,
        );
        register_taxonomy('travel_europe', ['wcm_travel', 'wcm_tours', 'wcm_cruise', 'wcm_events', 'page'], $args);

    //Taxonomi information for Asia
    $labels = array(
        'name'              => _x('Asia','Asia'),
        );
        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'show_in_rest'      => true,
        );
        register_taxonomy('travel_asia', ['wcm_travel', 'wcm_tours', 'wcm_hike', 'page'], $args);

    //Taxonomi information for Africa
    $labels = array(
        'name'              => _x('Africa','Africa'),
        );
        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'show_in_rest'      => true,
        );
        register_taxonomy('travel_africa', ['wcm_travel', 'wcm_tours', 'page'], $args);

    //Taxonomi information for Autralia & Oceania
    $labels = array(
        'name'              => _x('Autralia & Oceania','Autralia & Oceania'),
        );
        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'show_in_rest'      => true,
        );
        register_taxonomy('travel_autralia_and_oceania', ['wcm_travel', 'wcm_cruise', 'wcm_hike', 'page'], $args);

    //Taxonomi information for Special Posts
    //This will allow admins to add posts that already exist or create new for displaying in the hero sections or certain areas like recommended trips 
    $labels = array(
        'name'              => _x('Special Posts', 'Special Posts'),
        );
        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
        );
        register_taxonomy('special_posts', ['wcm_travel', 'wcm_cruise', 'wcm_events', 'wcm_hike', 'wcm_tours', 'wcm_special_posts', 'page'], $args);

    $labels = array(
        'name'              => _x('News Posts', 'News Posts'),
        );
        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
        );
        register_taxonomy('news_posts', ['wcm_travel', 'wcm_cruise', 'wcm_events', 'wcm_hike', 'wcm_tours', 'page'], $args);
}

// Hooking up the function to init
add_action( 'init', 'register_custom_taxonomy');

//////////////////////////////////////////////////    Menus   //////////////////////////////////////////////////

//Navigation Menu
function register_my_menus() {
    register_nav_menus(
      array(
        'main-menu' => __('Main Menu'),
        'places-menu' => __('Places Menu'),
        'small-menu' => __('Small Front Page Menu'),

       )
     );
   }
add_action( 'init', 'register_my_menus' );

//////////////////////////////////////////////////    All Styles   //////////////////////////////////////////////////

// Styles
function register_styles(){
    wp_enqueue_style('navbar_style', get_theme_file_uri('assets/css/nav-style.css'), array('bootstrap_style'), '1.0', 'all');
    wp_enqueue_style('hero_style', get_theme_file_uri('assets/css/hero-style.css'), array('bootstrap_style'), '1.0', 'all');
    wp_enqueue_style('small_nav_style', get_theme_file_uri('assets/css/small-nav-style.css'), array('bootstrap_style'), '1.0', 'all');
    wp_enqueue_style('search_style', get_theme_file_uri('assets/css/search-style.css'), array('bootstrap_style'), '1.0', 'all');
    wp_enqueue_style('cards_style', get_theme_file_uri('assets/css/cards-style.css'), array('bootstrap_style'), '1.0', 'all');
    wp_enqueue_style('news_letter_style', get_theme_file_uri('assets/css/news-letter-style.css'), array('bootstrap_style'), '1.0', 'all');
    wp_enqueue_style('bootstrap_style', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css", array(),);
}

add_action('wp_enqueue_scripts', 'register_styles');
?>
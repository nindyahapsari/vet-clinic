<?php 

//adding the CSS and JS files

function theme_setup(){
    //only works for the style.css in root folder
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, '1.0.0', 'all');
    wp_enqueue_style('mobile', get_stylesheet_uri('/style/mobile.css'), NULL, '1.0.0', NULL);
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
    wp_enqueue_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css' );
    wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() . '/mdb/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap_min', get_stylesheet_directory_uri().'/mdb/css/bootstrap.min.css' );
    wp_enqueue_style('google_font', "https://fonts.googleapis.com/css?family=Merriweather|Muli:300", true);
    // wp_enqueue_script('jquery');
    wp_enqueue_style( 'MDB', get_template_directory_uri() . '/mdb/css/mdb.min.css' );
    wp_enqueue_style( 'Style', get_template_directory_uri() . '/mdb/css/style.css' );
    wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/mdb/js/jquery-3.4.1.min.js', array(), '3.4.1', true );
    wp_enqueue_script( 'Tether', get_template_directory_uri() . '/mdb/js/popper.min.js', array(), true );
    wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/mdb/js/bootstrap.min.js', array(), '', true );
    wp_enqueue_script( 'MDB', get_template_directory_uri() . '/mdb/js/mdb.min.js', array(), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'theme_setup');



//adding theme support

function init(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', 
                array('comment-list', 'comment-form', 'search-form')
                     );
}

add_action('after_setup_theme', 'init');


//Project Post Type

function custom_post_type(){
    register_post_type('project', 
                array('rewrite' => array('slug' => 'projects'),
                       'labels' => array('name' => 'Projects', 'singular_name' => 'Projects', 'add_new_item' => 'Add New Project', 'edit_item' => 'Edit Project' ),
                      'menu-icon' => 'dashicons-clipboard',
                      'public' => true,
                      'has_archive' => true,
                      'supports' => array('title', 'thumbnail', 'editor', 'excerpt', 'comments' )
                    )
                );
}

add_action('init', 'custom_post_type');



// Widget

function mytheme_register_nav_menus() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'your-text-domain' ),
        'footer' => __( 'Footer Menu', 'your-text-domain' )
    )); 
}
add_action( 'after_setup_theme', 'mytheme_register_nav_menus' );

function mytheme_widgets_init() {
    register_sidebar( array (
        'name' => __( 'Main Sidebar', 'your-text-domain' ),
        'id' => 'sidebar-1',
        'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'your-text-domain' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action( 'widgets_init', 'mytheme_widgets_init' );
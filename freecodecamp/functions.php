<?php

function style_sheets(){
    wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.1.0/css/all.css');
    wp_enqueue_style('googlefonts', '//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab');
    wp_enqueue_style('stylecss', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_script('mainjs', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}
add_action('wp_enqueue_scripts', 'style_sheets');


// Theme Supports

function support_init(){
    add_theme_support( 'custom-logo' );
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
    array('comment-list', 'comment-form', 'search-form')
    );
    add_theme_support('menus');
    
}
add_action('after_setup_theme', 'support_init');

// function themename_custom_logo_setup() {
//     $defaults = array(
//     'height'      => 100,
//     'width'       => 400,
//     'flex-height' => true,
//     'flex-width'  => true,
//     'header-text' => array( 'site-title', 'site-description' ),
//     );
//     add_theme_support( 'custom-logo', $defaults );
//    }
//    add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

function register_my_menus() {
    register_nav_menus(
    
        array(
            'main-menu' => __('Primary Menu', 'theme'),
            
        )
    );
    }
    add_action( 'init', 'register_my_menus' );


// Custom Post Type

function custom_post_type(){
    register_post_type('project',
    array(
        'rewrite' => array('slug' => 'projects'),
        'labels' => array(
            'name' => 'Projects',
            'singular_name' => 'Project',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project'
        ),
        'taxonomies' => array('category'),
        'menu-icon' => 'dashicons-clipboard',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title', 'thumbnail', 'editor', 'excerpt', 'comments'
        )

        ));
}

add_action('init', 'custom_post_type');

// Sidebar

function custom_widgets(){
    register_sidebar(
        array(
            'name' => 'Main Sidebar',
            'id' => 'main_sidebar',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
        );
}
add_action('widgets_init', 'custom_widgets');




























?>
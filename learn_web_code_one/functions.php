<?php

function enqueue_stylesheets(){
    wp_enqueue_style('style', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts','enqueue_stylesheets');




    function  get_top_ancestor_id(){
        global $post;
        if($post->post_parent){
            $ancestors = array_reverse(get_post_ancestors($post->ID));
            return $ancestors[0];
        } else{
            return $post->ID;
        }
    }


    function has_children(){
        global $post;
       $pages = get_pages('child_of=' . $post->ID);
        return count($pages);
    }

    // function custom_excerpt_length(){
    //     return 10;
    // }
    // add_filter('excerpt_length','custom_excerpt_length');

    function theme_support_setup(){
        add_theme_support('post-thumbnails');

        // Post Formats
        add_theme_support('post-formats', array(
            'aside', 'gallery', 'link'
        ));

        // Register Menus
        add_theme_support('menus');

        register_nav_menus(
            array(
                'primary' => __('Primary Menu'),
                'footer_menu' => __('Footer Menu')
            )
            );

            add_image_size('small','200', '200', false);
            add_image_size('medium','400', '300', array('center', 'top'));
    }
    add_action('after_setup_theme', 'theme_support_setup');
?>
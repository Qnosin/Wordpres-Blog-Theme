<?php

function addStyleSheets(){
    wp_register_style('css', get_template_directory_uri() . '/assets/css/styles.css');
    wp_enqueue_style('css');
}

function addScript(){
    wp_register_script('js',get_template_directory_uri() . '/assets/js/main.js',array(),false,true);
    wp_enqueue_script('js');
}


function wpb_custom_nav_menu(){
    register_nav_menus( array(
        'nav menu'=>'Navigation Bar',
        'footer menu'=> 'Footer Bar',
    ));
}

add_action('init','wpb_custom_nav_menu');

add_action('wp_enqueue_scripts','addStyleSheets');
add_action('wp_enqueue_scripts','addScript');



add_theme_support('post-thumbnails');
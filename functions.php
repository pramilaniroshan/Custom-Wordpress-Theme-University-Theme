<?php

function university_files(){
    wp_enqueue_script('main_js',get_theme_file_uri('/js/scripts-bundled.js'),NULL,'1.0',true);
    wp_enqueue_style('forn_awesom','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('google_fonts','https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('university_css',get_stylesheet_uri());
}

function university_features(){
    register_nav_menu('header','Header Menu Location');
    register_nav_menu('Footer1','Footer 1');
    register_nav_menu('Footer2','Footer 2');
    add_theme_support('title-tag');
}

add_action('wp_enqueue_scripts','university_files');
add_action('after_setup_theme','university_features');

?>
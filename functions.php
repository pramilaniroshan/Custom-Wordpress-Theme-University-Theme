<?php

function university_files(){
    wp_enqueue_script('main_js',get_theme_file_uri('/js/scripts-bundled.js'),NULL,'1.0',true);
   // wp_enqueue_script('aos_scrolling_js','https://unpkg.com/aos@2.3.1/dist/aos.js',NULL,'1.0',true);
    wp_enqueue_style('forn_awesom','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('google_fonts','https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('university_css',get_stylesheet_uri());
   // wp_enqueue_style('aos_scrolling_css','https://unpkg.com/aos@2.3.1/dist/aos.css');
}

function university_features(){
    register_nav_menu('header','Header Menu Location');
    register_nav_menu('Footer1','Footer 1');
    register_nav_menu('Footer2','Footer 2');
    add_theme_support('title-tag');
}


function university_adjusts_queries($query){
    $today = date('Ymd');
    if(!is_admin(  ) && is_post_type_archive( 'event' ) && $query->is_main_query(  )){
        $query->set('posts_per_page','-1');
        $query->set('meta_key','event_date');
        $query->set('orderby','meta_value_num');    
        $query->set('order','ASC');
        $query->set('meta_query',array(
            array(
              'key' => 'event_date',
              'compare' => '>=',
              'value' => $today,
              'type' => 'numeric'
            )
            ));
    }

}


add_action('wp_enqueue_scripts','university_files');
add_action('after_setup_theme','university_features');
add_action( 'pre_get_posts','university_adjusts_queries' );

?>
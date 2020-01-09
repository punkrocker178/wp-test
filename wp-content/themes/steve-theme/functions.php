<?php

function get_steve_files () {
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_script('bootstrap4','//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js');
    wp_enqueue_script('bootstrap-popper','//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
    wp_enqueue_script('bootstrap-jquery','//code.jquery.com/jquery-3.4.1.slim.min.js');
    wp_enqueue_script('main-js', get_theme_file_uri('js/scripts-bundled.js'), NULL, '1.0', TRUE);
    wp_enqueue_style('custom-google-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('main_styles', get_stylesheet_uri());
}

function university_features() {
    register_nav_menu('headerMenu', 'Header Menu Location');
    add_theme_support('title-tag');
}

add_action('wp_enqueue_scripts', 'get_steve_files');
add_action('after_setup_theme', 'university_features');
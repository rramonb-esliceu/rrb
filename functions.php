<?php


function rrb_add_theme_scripts(){
    wp_enqueue_style ( 'style', get_stylesheet_uri() );
    // wp_enqueue_style ( 'bootstrap_css', get_template_directory_uri() . '/helpers/bootstrap/css/bootstrap.min.css' );
    // wp_enqueue_style ( 'bootstrap_icons', get_template_directory_uri() . '/helpers/bootstrap-icons/font/bootstrap-icons.css' );
    // wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/helpers/bootstrap/js/bootstrap.min.js' );
    wp_enqueue_style ( 'bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' );
    wp_enqueue_style ( 'bootstrap_icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css' );
    wp_enqueue_script( 'bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' );
    
}

add_action( 'wp_enqueue_scripts', 'rrb_add_theme_scripts' );

?>

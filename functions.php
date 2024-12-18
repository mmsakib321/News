<?php
function simple_news_theme_scripts() {
    // Enqueue styles
    wp_enqueue_style( 'simple-news-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'simple_news_theme_scripts' );

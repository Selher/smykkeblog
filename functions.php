<?php
function smykke_theme_enqueue_styles() {
   
    wp_enqueue_style( 'smykke-theme', get_stylesheet_uri() . '/style.css' );
}
    add_action( 'wp_enqueue_scripts', 'smykke-theme_enqueue_styles' );
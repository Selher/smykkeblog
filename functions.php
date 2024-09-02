<?php
function smykke_theme_load_styles() {
   
    wp_enqueue_style( 'smykke-theme', get_template_directory_uri() . '/style.css' );
}
    add_action( 'wp_enqueue_scripts', 'smykke-theme_load_styles' );



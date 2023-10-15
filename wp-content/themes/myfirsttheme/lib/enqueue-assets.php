<?php

function myfirsttheme_assets() {
    wp_enqueue_style( 'myfirsttheme-stylesheet', get_template_directory_uri( ) . './dist/assets/css/bundle.css', array(), '1.0.0', 'all' );
}

add_action( 'wp_enqueue_style', 'myfirsttheme_assets' );
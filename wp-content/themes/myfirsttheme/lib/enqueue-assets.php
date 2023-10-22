<?php

function myfirsttheme_assets() {
    wp_enqueue_style( 'myfirsttheme-stylesheet', get_template_directory_uri( ) . '/dist/assets/css/bundle.css', array(), '1.0.0', 'all' );

    wp_enqueue_script( 'myfirsttheme-script', get_template_directory_uri( ) . '/dist/assets/js/bundle.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'myfirsttheme_assets' );

function myfirsttheme_admin_assets() {
    wp_enqueue_style( 'myfirsttheme-admin-stylesheet', get_template_directory_uri( ) . '/dist/assets/css/admin.css', array(), '1.0.0', 'all' );

    wp_enqueue_script( 'myfirsttheme-admin-script', get_template_directory_uri( ) . '/dist/assets/js/admin.js', array(), '1.0.0', true );
}

add_action( 'admin_enqueue_scripts', 'myfirsttheme_admin_assets' );
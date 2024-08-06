<?php
/**
 * Register Scripts and Styles
 * 
 * @package Go Marketing
 */

namespace GoMarketing;

/**
 * Enqueue scripts and styles.
 */
function gomarketing_register_scripts() {
    wp_enqueue_style( '
        go-marketing-style', 
        get_stylesheet_directory_uri() . '/build/index.css', 
        [], 
        filemtime( get_stylesheet_directory() . '/build/index.css' ) );
}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\gomarketing_register_scripts' );
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\gomarketing_register_scripts' );
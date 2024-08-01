<?php
/**
 * Register block patterns.
 * 
 * @package Go Marketing
 */

namespace GoMarketing;

/**
 * Registers a block pattern for the Go Marketing theme.
 *
 * @since 1.0.0
 */
function gomarketing_register_patterns() {
    // Register the block pattern
    register_block_pattern( 
        'gomarketing/header-default', 
        [
            'title'       => __( 'Header Default', 'gomarketing' ),
            'categories'  => ['header', 'hero'],
            'source'      => 'theme',
            'description' => __( 'A hero section with navigation, a paragraph, a CTA button, and a background video.', 'gomarketing' ),
            'content'     => include get_stylesheet_directory() . '/patterns/header-default.php',
            'blockTypes'  => ['core/template-part/header']
        ]
    );

    register_block_pattern( 
        'gomarketing/footer-default', 
        [
            'title'       => __( 'Footer Default', 'gomarketing' ),
            'categories'  => ['footer', 'hero'],
            'source'      => 'theme',
            'description' => __( 'The Go Footer.', 'gomarketing' ),
            'content'     => include get_stylesheet_directory() . '/patterns/footer-default.php',
            'blockTypes'  => ['core/template-part/header']
        ]
    );
}

// Register the block pattern on init
add_action( 'init', __NAMESPACE__ . '\gomarketing_register_patterns' );
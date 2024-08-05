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
            'categories'  => ['header', 'gomarketing/go-patterns'],
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
            'categories'  => ['footer', 'gomarketing/go-patterns'],
            'source'      => 'theme',
            'description' => __( 'The Go Footer.', 'gomarketing' ),
            'content'     => include get_stylesheet_directory() . '/patterns/footer-default.php',
            'blockTypes'  => ['core/template-part/header']
        ]
    );

    register_block_pattern( 
        'gomarketing/headline', 
        [
            'title'       => __( 'Headline', 'gomarketing' ),
            'categories'  => ['banner', 'featured', 'gomarketing/go-patterns'],
            'source'      => 'theme',
            'description' => __( 'The Go Headline.', 'gomarketing' ),
            'content'     => include get_stylesheet_directory() . '/patterns/headline.php',
            'blockTypes'  => ['core/group', 'core/post-content']
        ]
    );

    register_block_pattern( 
        'gomarketing/fifty-fifty', 
        [
            'title'       => __( 'Fifty-Fifty', 'gomarketing' ),
            'categories'  => ['banner', 'featured', 'gomarketing/go-patterns'],
            'source'      => 'theme',
            'description' => __( 'The Go Fifty Fifty banner.', 'gomarketing' ),
            'content'     => include get_stylesheet_directory() . '/patterns/fifty-fifty.php',
            'blockTypes'  => ['core/column', 'core/post-content']
        ]
    );
}

// Register the block pattern on init
add_action( 'init', __NAMESPACE__ . '\gomarketing_register_patterns' );

function register_pattern_categories() {
	register_block_pattern_category( 
        'gomarketing/go-patterns', 
        [
            'label'       => __( 'Go Patterns', 'gomarketing' ),
            'description' => __( 'A Collection of Go Patterns.', 'gomarketing' )
	] );
}

add_action( 'init', __NAMESPACE__ . '\register_pattern_categories' );
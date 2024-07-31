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
    ob_start();
    get_template_part('patterns/header-default');
    $block_pattern_content = ob_get_contents();
    ob_end_clean();

    // Register the block pattern
    register_block_pattern( 
        'gomarketing/header-default', 
        [
            'title'       => __( 'Header Default', 'gomarketing' ),
            'categories'  => ['header', 'hero'],
            'source'      => 'theme',
            'description' => __( 'A hero section with navigation, a paragraph, a CTA button, and a background video.', 'gomarketing' ),
            'content'     => $block_pattern_content,
            'blockTypes'  => ['core/template-part/header']
        ]
    );
}

// Register the block pattern on init
add_action( 'init', __NAMESPACE__ . '\gomarketing_register_patterns' );
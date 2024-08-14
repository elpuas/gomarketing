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

    register_block_pattern( 
        'gomarketing/count-up', 
        [
            'title'       => __( 'Count Up', 'gomarketing' ),
            'categories'  => ['banner', 'featured', 'gomarketing/go-patterns'],
            'source'      => 'theme',
            'description' => __( 'The Go Count Up pattern.', 'gomarketing' ),
            'content'     => include get_stylesheet_directory() . '/patterns/count-up.php',
            'blockTypes'  => ['core/group', 'core/post-content']
        ]
    );

    register_block_pattern( 
        'gomarketing/headline-with-video', 
        [
            'title'       => __( 'Headline with Video', 'gomarketing' ),
            'categories'  => ['banner', 'featured', 'gomarketing/go-patterns'],
            'source'      => 'theme',
            'description' => __( 'The Go Headline with Video pattern.', 'gomarketing' ),
            'content'     => include get_stylesheet_directory() . '/patterns/headline-with-video.php',
            'blockTypes'  => ['core/group', 'core/post-content']
        ]
    );

    register_block_pattern( 
        'gomarketing/brands-carousel', 
        [
            'title'       => __( 'Brands Carousel', 'gomarketing' ),
            'categories'  => ['core/group', 'featured', 'gomarketing/go-patterns'],
            'source'      => 'theme',
            'description' => __( 'The brands carousel pattern', 'gomarketing' ),
            'content'     => include get_stylesheet_directory() . '/patterns/brands-carousel.php',
            'blockTypes'  => ['core/post-content']
        ]
    );

    register_block_pattern( 
        'gomarketing/home-pattern', 
        [
            'title'       => __( 'Home Pattern', 'gomarketing' ),
            'categories'  => ['page', 'featured', 'gomarketing/go-patterns'],
            'source'      => 'theme',
            'description' => __( 'The pattern for the Homepage.', 'gomarketing' ),
            'content'     => '<!-- wp:pattern {"slug":"gomarketing/headline"}	/--><!-- wp:pattern {"slug":"gomarketing/fifty-fifty"}	/--><!-- wp:pattern {"slug":"gomarketing/headline-with-video"}	/--><!-- wp:pattern {"slug":"gomarketing/count-up"}	/--><!-- wp:pattern {"slug":"gomarketing/brands-carousel"}	/-->',
            'blockTypes'  => ['core/post-content']
        ]
    );

    register_block_pattern( 
        'gomarketing/team-card', 
        [
            'title'       => __( 'Team Card', 'gomarketing' ),
            'categories'  => ['card', 'featured', 'gomarketing/go-patterns'],
            'source'      => 'theme',
            'description' => __( 'The Team Card Pattern.', 'gomarketing' ),
            'content'     => include get_stylesheet_directory() . '/patterns/team-card.php',
            'blockTypes'  => ['core/group', 'core/post-content']
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
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

    register_block_pattern( 
        'gomarketing/go-team-pattern', 
        [
            'title'       => __( 'Team Pattern', 'gomarketing' ),
            'categories'  => ['banner', 'featured', 'gomarketing/go-patterns'],
            'source'      => 'theme',
            'description' => __( 'The pattern for the Go Team.', 'gomarketing' ),
            'content'     => include get_stylesheet_directory() . '/patterns/about-page-pattern.php',
            'blockTypes'  => ['core/group', 'core/post-content']
        ]
    );

    register_block_pattern( 
        'gomarketing/go-banner-pattern', 
        [
            'title'       => __( 'Go Banner Pattern', 'gomarketing' ),
            'categories'  => ['banner', 'featured', 'gomarketing/go-patterns'],
            'source'      => 'theme',
            'description' => __( 'Go Banner with a Call to Action.', 'gomarketing' ),
            'content'     => include get_stylesheet_directory() . '/patterns/go-banner.php',
            'blockTypes'  => ['core/group', 'core/post-content']
        ]
    );

    register_block_pattern( 
        'gomarketing/go-video-headline-pattern', 
        [
            'title'       => __( 'Video & Headline Pattern', 'gomarketing' ),
            'categories'  => ['banner', 'featured', 'gomarketing/go-patterns'],
            'source'      => 'theme',
            'description' => __( 'Video and Headline.', 'gomarketing' ),
            'content'     => include get_stylesheet_directory() . '/patterns/video-headline.php',
            'blockTypes'  => ['core/group', 'core/post-content']
        ]
    );

    register_block_pattern( 
        'gomarketing/service-cards-pattern', 
        [
            'title'       => __( 'Service Cards Pattern', 'gomarketing' ),
            'categories'  => ['banner', 'featured', 'gomarketing/go-patterns'],
            'source'      => 'theme',
            'description' => __( 'Service Cards with Icon, Headline and Link.', 'gomarketing' ),
            'content'     => include get_stylesheet_directory() . '/patterns/service-cards.php',
            'blockTypes'  => ['core/group', 'core/post-content']
        ]
    );

    register_block_pattern( 
        'gomarketing/services-pattern', 
        [
            'title'       => __( 'Single Services Pattern', 'gomarketing' ),
            'categories'  => ['posts', 'featured', 'gomarketing/go-patterns'],
            'source'      => 'theme',
            'description' => __( 'The Single Services Pattern.', 'gomarketing' ),
            'content'     => include get_stylesheet_directory() . '/patterns/services-single-pattern.php',
            'blockTypes'  => ['core/post-content'],
            'templateTypes' => ['single-post']
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

/**
 * Remove core block patterns
 */
function remove_core_patterns() {
	remove_theme_support( 'core-block-patterns' );
}

add_action( 'after_setup_theme', __NAMESPACE__ . '\remove_core_patterns' );

function unregister_all_twentytwentyfour_patterns() {
    unregister_block_pattern( 'twentytwentyfour/banner-hero' );
    unregister_block_pattern( 'twentytwentyfour/banner-project-description' );
    unregister_block_pattern( 'twentytwentyfour/cta-content-image-on-right' );
    unregister_block_pattern( 'twentytwentyfour/cta-pricing' );
    unregister_block_pattern( 'twentytwentyfour/cta-rsvp' );
    unregister_block_pattern( 'twentytwentyfour/cta-services-image-left' );
    unregister_block_pattern( 'twentytwentyfour/cta-subscribe-centered' );
    unregister_block_pattern( 'twentytwentyfour/footer-centered-logo-nav' );
    unregister_block_pattern( 'twentytwentyfour/footer-colophon-3-col' );
    unregister_block_pattern( 'twentytwentyfour/footer' );
    unregister_block_pattern( 'twentytwentyfour/hidden-404' );
    unregister_block_pattern( 'twentytwentyfour/hidden-comments' );
    
}

add_action( 'wp_loaded', __NAMESPACE__ . '\unregister_all_twentytwentyfour_patterns', 999 );
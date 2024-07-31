<?php
/**
 * Allow SVGS to be uploaded to the media library.
 * 
 * @package Go Marketing
 */

namespace GoMarketing;

/**
 * Function to modify the allowed file types for uploads.
*
* @param array $allowed The array of allowed file types.
* @return array The modified array of allowed file types.
*/
function upload_svg_files( $allowed ) {
    if ( ! current_user_can( 'manage_options' ) )
        return $allowed;
    $allowed['svg'] = 'image/svg+xml';
    return $allowed;
}
add_filter( 'upload_mimes', __NAMESPACE__ . '\upload_svg_files' );

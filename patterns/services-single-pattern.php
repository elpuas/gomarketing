<?php
/**
 * Single Services Pattern
 * 
 * @package Go Marketing
 */

$go_placeholder = get_stylesheet_directory_uri() . '/src/img/servicios-placeholder.jpg';

return <<<EOD
<!-- wp:group {"metadata":{"name":"Services Headline"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="$go_placeholder" alt="" /></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"style":{"spacing":{"blockGap":"0"},"border":{"color":"#d9d9d9","width":"1px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color" style="border-color:#d9d9d9;border-width:1px"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"fontSize":"medium","fontFamily":"montserrat"} -->
<h2 class="wp-block-heading has-montserrat-font-family has-medium-font-size" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10);font-style:normal;font-weight:700;text-transform:uppercase">Servicios</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"color":{"background":"#f5f5f5"},"spacing":{"padding":{"right":"var:preset|spacing|10","left":"var:preset|spacing|10","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#f5f5f5;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:query {"queryId":19,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[6]}},"namespace":"core/posts-list"} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"fontSize":"small","fontFamily":"montserrat"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
EOD;
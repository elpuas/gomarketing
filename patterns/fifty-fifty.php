<?php
/**
 * Fifty Fifty Pattern
 * 
 * @package Go Marketing
 */

$go_image_placeholder = get_stylesheet_directory_uri() . '/src/img/fifty-fifty-default.png';

return <<<EOD
<!-- wp:group {"tagName":"section","metadata":{"name":"Fifty Fifty"},"align":"full","className":"go-fifty-fifty","style":{"color":{"background":"#f3f2f2"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull go-fifty-fifty has-background" style="background-color:#f3f2f2;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","metadata":{"name":"Wrapper"}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"40%","className":"go-fifty-fifty-left"} -->
<div class="wp-block-column is-vertically-aligned-center go-fifty-fifty-left" style="flex-basis:40%"><!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"x-large","fontFamily":"lemon-milk"} -->
<p class="has-lemon-milk-font-family has-x-large-font-size" style="margin-bottom:0;font-style:normal;font-weight:300">En <strong>Go! Marketing</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","fontSize":"1.5rem"},"spacing":{"margin":{"top":"0"}}},"fontFamily":"montserrat"} -->
<h2 class="wp-block-heading has-montserrat-font-family" style="margin-top:0;font-size:1.5rem;font-style:normal;font-weight:700;text-transform:uppercase">Creamos momentos que resuenan.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.1","fontSize":"1.25rem"}}} -->
<p style="font-size:1.25rem;line-height:1.1">Desde lanzamientos de productos hasta activaciones de marca. Descubrí lo que podemos hacer por vos y tu marca.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill","style":{"border":{"radius":"0px","right":{"color":"#D02028","width":"2px"}},"typography":{"textTransform":"uppercase"},"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size is-style-fill has-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;border-right-color:#D02028;border-right-width:2px;padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">conocer más</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"go-fifty-fifty-right"} -->
<div class="wp-block-column is-vertically-aligned-center go-fifty-fifty-right"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="$go_image_placeholder" alt="" class=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
EOD;
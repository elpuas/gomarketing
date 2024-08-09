<?php
/**
 * Headline with Video Pattern
 * 
 * @package Go Marketing
 */

return <<<EOD
<!-- wp:group {"tagName":"section","metadata":{"name":"Headline with Video"},"align":"full","className":"gradient-bg-gw go-video","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<section class="wp-block-group alignfull gradient-bg-gw go-video" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"metadata":{"name":"Video Wrapper"},"className":"go-video-wrapper","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group go-video-wrapper"><!-- wp:group {"metadata":{"name":"Headline"},"align":"wide","className":"go-video-headline","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide go-video-headline"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">El equipo de Go!</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"45px","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontFamily":"montserrat"} -->
<h2 class="wp-block-heading has-text-align-center has-montserrat-font-family" style="font-size:45px;font-style:normal;font-weight:700;text-transform:uppercase">Lleva tu marca a lo <br>más alto.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30);line-height:1">Nos especializamos en crear experiencias que destacan y conectan. <br>Transformamos tus ideas en eventos únicos y memorables que capturan la esencia de tu marca.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Video"},"align":"wide","className":"go-video-container","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide go-video-container"><!-- wp:embed {"url":"https://www.youtube.com/watch?v=u31qwQUeGuM","type":"video","providerNameSlug":"youtube","responsive":true,"align":"wide","className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
<figure class="wp-block-embed alignwide is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
https://www.youtube.com/watch?v=u31qwQUeGuM
</div></figure>
<!-- /wp:embed --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
EOD;
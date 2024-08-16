<?php
/**
 * Go Banner
 * 
 * @package GoMarketing
 */

return <<<EOD
<!-- wp:group {"metadata":{"name":"Go Banner"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Headline"},"style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"25px"}}} -->
<p style="font-size:25px">Tenés un proyecto en mente</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontFamily":"montserrat"} -->
<h2 class="wp-block-heading has-montserrat-font-family" style="font-style:normal;font-weight:700;text-transform:uppercase">¡Hagámoslo realidad!</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill","style":{"border":{"radius":"0px","right":{"color":"var:preset|color|base","width":"2px"}},"typography":{"textTransform":"uppercase"}}} -->
<div class="wp-block-button is-style-fill" style="text-transform:uppercase"><a class="wp-block-button__link wp-element-button" href="https://gomarketing.local/contacto/" style="border-radius:0px;border-right-color:var(--wp--preset--color--base);border-right-width:2px">hablemos</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
EOD;
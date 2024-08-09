<?php
/**
 * Headline with Video Pattern
 * 
 * @package Go Marketing
 */

return <<<EOD
<!-- wp:group {"tagName":"section","metadata":{"name":"Partners Carousel"},"align":"full","className":"go-brands-carousel","style":{"color":{"background":"#f7f7f7"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull go-brands-carousel has-background" style="background-color:#f7f7f7;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="padding-top:0;padding-bottom:0"><!-- wp:group {"metadata":{"name":"Headline"},"align":"wide","className":"go-video-headline","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide go-video-headline"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">Nuestros clientes</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"45px","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontFamily":"montserrat"} -->
<h2 class="wp-block-heading has-text-align-center has-montserrat-font-family" style="font-size:45px;font-style:normal;font-weight:700;text-transform:uppercase">los que confían en nuestro equipo</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30);line-height:1">En Go! Marketing nos sentimos orgullosos de trabajar con marcas y personas que valoran la excelencia y la creatividad.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:cb/carousel {"slidesToScroll":3,"arrows":false,"autoplay":true,"autoplaySpeed":2000,"infinite":true,"responsiveWidth":840,"responsiveSlides":2,"responsiveSlidesToScroll":2,"align":"wide","className":"go-carousel"} -->
<div class="wp-block-cb-carousel alignwide go-carousel" data-slick="{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3,&quot;speed&quot;:300,&quot;arrows&quot;:false,&quot;dots&quot;:true,&quot;autoplay&quot;:true,&quot;autoplaySpeed&quot;:2000,&quot;infinite&quot;:true,&quot;responsive&quot;:[{&quot;breakpoint&quot;:841,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}}]}"><!-- wp:cb/slide {"className":"go-carousel-slide"} -->
<div class="wp-block-cb-slide go-carousel-slide"><!-- wp:image {"id":138,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="https://gomarketing.local/wp-content/uploads/2024/08/Group-23-jpg.avif" alt="" class="wp-image-138"/></figure>
<!-- /wp:image --></div>
<!-- /wp:cb/slide -->

<!-- wp:cb/slide {"className":"go-carousel-slide"} -->
<div class="wp-block-cb-slide go-carousel-slide"><!-- wp:image {"id":139,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="https://gomarketing.local/wp-content/uploads/2024/08/Group-22-jpg.avif" alt="" class="wp-image-139" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:cb/slide -->

<!-- wp:cb/slide {"className":"go-carousel-slide"} -->
<div class="wp-block-cb-slide go-carousel-slide"><!-- wp:image {"id":136,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="https://gomarketing.local/wp-content/uploads/2024/08/Group-20-jpg.avif" alt="" class="wp-image-136"/></figure>
<!-- /wp:image --></div>
<!-- /wp:cb/slide -->

<!-- wp:cb/slide {"className":"go-carousel-slide"} -->
<div class="wp-block-cb-slide go-carousel-slide"><!-- wp:image {"id":135,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="https://gomarketing.local/wp-content/uploads/2024/08/Group-21-jpg.avif" alt="" class="wp-image-135"/></figure>
<!-- /wp:image --></div>
<!-- /wp:cb/slide --></div>
<!-- /wp:cb/carousel --></section>
<!-- /wp:group -->
EOD;
<?php
/**
 * About Page Pattern
 * 
 * @package GoMarketing
 */

$go_pablo       = get_stylesheet_directory_uri() . '/src/img/Pablo-Guerrero.jpg';
$go_dahianna    = get_stylesheet_directory_uri() . '/src/img/Dahianna-Jimenez.jpg';
$go_natalia     = get_stylesheet_directory_uri() . '/src/img/Natalia-Perez.jpg';
$go_stacy       = get_stylesheet_directory_uri() . '/src/img/Stacy-Moya.jpg';
$go_pamela      = get_stylesheet_directory_uri() . '/src/img/Pamela-Jimenez.jpg';
$go_alexander   = get_stylesheet_directory_uri() . '/src/img/Alexander-Chavez.jpg';
$go_nelson      = get_stylesheet_directory_uri() . '/src/img/Nelson-Piedra.jpg';
$go_leonardo    = get_stylesheet_directory_uri() . '/src/img/Leonardo-herrera.jpg';
$go_alexander_b = get_stylesheet_directory_uri() . '/src/img/Alexander-Barrantes.jpg';
$go_jennifer    = get_stylesheet_directory_uri() . '/src/img/Jennifer-Vasquez.jpg';
$go_emilia      = get_stylesheet_directory_uri() . '/src/img/Emilia-Torres.jpg';
$go_daniel      = get_stylesheet_directory_uri() . '/src/img/Daniel-Morales.jpg';
$go_manuel      = get_stylesheet_directory_uri() . '/src/img/Manuel-Aburto.jpg';
$go_enrique     = get_stylesheet_directory_uri() . '/src/img/Enrique-Guerrero.jpg';


return <<<EOD
<!-- wp:group {"metadata":{"name":"Go Team"},"align":"full","className":"gradient-bg-bw go-team-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull gradient-bg-bw go-team-wrapper"><!-- wp:columns {"metadata":{"name":"CEO"},"className":"go-team-main","style":{"spacing":{"padding":{"top":"var:preset|spacing|50"},"margin":{"bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns go-team-main" style="margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--50)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"animated slideInUp"} -->
<figure class="wp-block-image size-full animated slideInUp"><img src="$go_pablo" alt="" class=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph -->
<p>La cabeza del equipo es</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-large","fontFamily":"montserrat"} -->
<h2 class="wp-block-heading has-montserrat-font-family has-x-large-font-size" style="font-style:normal;font-weight:600">Pablo Guerrero</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Gracias a él trabajamos en un lugar donde tenemos libertad de dar y desarrollar ideas.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><br>Podríamos darle un premio nobel a su paciencia, los que lo conocen lo entenderán, y también nuestros clientes pueden dar fe de eso.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"metadata":{"name":"Team Grid"},"className":"go-team-grid-wrapper","layout":{"type":"grid","minimumColumnWidth":"290px","columnCount":null}} -->
<div class="wp-block-group go-team-grid-wrapper"><!-- wp:group {"metadata":{"name":"Team Card"},"className":"go-team-card","style":{"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group go-team-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"animated slideInUp delay-100ms"} -->
<figure class="wp-block-image size-full animated slideInUp delay-100ms"><img src="$go_dahianna" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"contrast"} -->
<div class="wp-block-column is-vertically-aligned-center has-contrast-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px;flex-basis:55%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"12px"}}},"textColor":"base-2","fontFamily":"montserrat"} -->
<p class="has-base-2-color has-text-color has-link-color has-montserrat-font-family" style="padding-left:12px;font-size:12px;font-style:normal;font-weight:700">Dahianna Jiménez</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"base"} -->
<div class="wp-block-column is-vertically-aligned-center has-base-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"10px"}},"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color has-link-color" style="font-size:10px">Asistente<br>Administrativa</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Team Card"},"className":"go-team-card","style":{"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group go-team-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"animated slideInUp o-anim-custom-delay o-anim-value-delay-150ms"} -->
<figure class="wp-block-image size-full animated slideInUp o-anim-custom-delay o-anim-value-delay-150ms"><img src="$go_natalia" alt="" /></figure>
<!-- /wp:image -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"contrast"} -->
<div class="wp-block-column is-vertically-aligned-center has-contrast-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px;flex-basis:55%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"12px"}}},"textColor":"base-2","fontFamily":"montserrat"} -->
<p class="has-base-2-color has-text-color has-link-color has-montserrat-font-family" style="padding-left:12px;font-size:12px;font-style:normal;font-weight:700">Natalia Pérez</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"base"} -->
<div class="wp-block-column is-vertically-aligned-center has-base-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"10px"}},"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color has-link-color" style="font-size:10px">Directora de<br>cuentas</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Team Card"},"className":"go-team-card","style":{"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group go-team-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"animated slideInUp o-anim-custom-delay o-anim-value-delay-200ms"} -->
<figure class="wp-block-image size-full animated slideInUp o-anim-custom-delay o-anim-value-delay-200ms"><img src="$go_stacy" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"contrast"} -->
<div class="wp-block-column is-vertically-aligned-center has-contrast-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px;flex-basis:55%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"12px"}}},"textColor":"base-2","fontFamily":"montserrat"} -->
<p class="has-base-2-color has-text-color has-link-color has-montserrat-font-family" style="padding-left:12px;font-size:12px;font-style:normal;font-weight:700">Stacy Moya</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"base"} -->
<div class="wp-block-column is-vertically-aligned-center has-base-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"10px"}},"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color has-link-color" style="font-size:10px">Coordinadorara de operaciones</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Team Card"},"className":"go-team-card","style":{"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group go-team-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"animated slideInUp o-anim-custom-delay o-anim-value-delay-250ms"} -->
<figure class="wp-block-image size-full animated slideInUp o-anim-custom-delay o-anim-value-delay-250ms"><img src="$go_pamela" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"contrast"} -->
<div class="wp-block-column is-vertically-aligned-center has-contrast-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px;flex-basis:55%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"12px"}}},"textColor":"base-2","fontFamily":"montserrat"} -->
<p class="has-base-2-color has-text-color has-link-color has-montserrat-font-family" style="padding-left:12px;font-size:12px;font-style:normal;font-weight:700">Pamela Jiménez</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"base"} -->
<div class="wp-block-column is-vertically-aligned-center has-base-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"10px"}},"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color has-link-color" style="font-size:10px">Ejecutiva de<br>Cuentas</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Team Card"},"className":"go-team-card","style":{"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group go-team-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"animated slideInUp o-anim-custom-delay o-anim-value-delay-100ms"} -->
<figure class="wp-block-image size-full animated slideInUp o-anim-custom-delay o-anim-value-delay-100ms"><img src="$go_alexander" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"contrast"} -->
<div class="wp-block-column is-vertically-aligned-center has-contrast-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px;flex-basis:55%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"12px"}}},"textColor":"base-2","fontFamily":"montserrat"} -->
<p class="has-base-2-color has-text-color has-link-color has-montserrat-font-family" style="padding-left:12px;font-size:12px;font-style:normal;font-weight:700">Alexander Chávez</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"base"} -->
<div class="wp-block-column is-vertically-aligned-center has-base-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"10px"}},"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color has-link-color" style="font-size:10px">Chofer Vehículo<br>Pesado</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Team Card"},"className":"go-team-card","style":{"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group go-team-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"animated slideInUp o-anim-custom-delay o-anim-value-delay-150ms"} -->
<figure class="wp-block-image size-full animated slideInUp o-anim-custom-delay o-anim-value-delay-150ms"><img src="$go_nelson" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"contrast"} -->
<div class="wp-block-column is-vertically-aligned-center has-contrast-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px;flex-basis:55%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"12px"}}},"textColor":"base-2","fontFamily":"montserrat"} -->
<p class="has-base-2-color has-text-color has-link-color has-montserrat-font-family" style="padding-left:12px;font-size:12px;font-style:normal;font-weight:700">Nelson Piedra</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"base"} -->
<div class="wp-block-column is-vertically-aligned-center has-base-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"10px"}},"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color has-link-color" style="font-size:10px">Chofer Vehículo<br>Pesado</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Team Card"},"className":"go-team-card","style":{"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group go-team-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"animated slideInUp o-anim-custom-delay undefined o-anim-value-delay-200ms"} -->
<figure class="wp-block-image size-full animated slideInUp o-anim-custom-delay undefined o-anim-value-delay-200ms"><img src="$go_leonardo" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"contrast"} -->
<div class="wp-block-column is-vertically-aligned-center has-contrast-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px;flex-basis:55%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"12px"}}},"textColor":"base-2","fontFamily":"montserrat"} -->
<p class="has-base-2-color has-text-color has-link-color has-montserrat-font-family" style="padding-left:12px;font-size:12px;font-style:normal;font-weight:700">Leonardo Herrera</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"base"} -->
<div class="wp-block-column is-vertically-aligned-center has-base-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"10px"}},"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color has-link-color" style="font-size:10px">Chofer</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Team Card"},"className":"go-team-card","style":{"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group go-team-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"animated slideInUp o-anim-custom-delay o-anim-value-delay-250ms"} -->
<figure class="wp-block-image size-full animated slideInUp o-anim-custom-delay o-anim-value-delay-250ms"><img src="$go_alexander_b" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"contrast"} -->
<div class="wp-block-column is-vertically-aligned-center has-contrast-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px;flex-basis:55%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"12px"}}},"textColor":"base-2","fontFamily":"montserrat"} -->
<p class="has-base-2-color has-text-color has-link-color has-montserrat-font-family" style="padding-left:12px;font-size:12px;font-style:normal;font-weight:700">Alexander Barrantes</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"base"} -->
<div class="wp-block-column is-vertically-aligned-center has-base-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"10px"}},"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color has-link-color" style="font-size:10px">Chofer</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Team Card"},"className":"go-team-card","style":{"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group go-team-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"animated slideInUp o-anim-custom-delay undefined o-anim-value-delay-100ms"} -->
<figure class="wp-block-image size-full animated slideInUp o-anim-custom-delay undefined o-anim-value-delay-100ms"><img src="$go_jennifer" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"contrast"} -->
<div class="wp-block-column is-vertically-aligned-center has-contrast-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px;flex-basis:55%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"12px"}}},"textColor":"base-2","fontFamily":"montserrat"} -->
<p class="has-base-2-color has-text-color has-link-color has-montserrat-font-family" style="padding-left:12px;font-size:12px;font-style:normal;font-weight:700">Jennifer Vásquez</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"base"} -->
<div class="wp-block-column is-vertically-aligned-center has-base-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"10px"}},"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color has-link-color" style="font-size:10px">Ejecutiva de cuentas</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Team Card"},"className":"go-team-card","style":{"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group go-team-card"><!-- wp:image {"id":171,"sizeSlug":"full","linkDestination":"none","className":"animated slideInUp o-anim-custom-delay o-anim-value-delay-150ms"} -->
<figure class="wp-block-image size-full animated slideInUp o-anim-custom-delay o-anim-value-delay-150ms"><img src="$go_emilia" alt="" class="wp-image-171"/></figure>
<!-- /wp:image -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"contrast"} -->
<div class="wp-block-column is-vertically-aligned-center has-contrast-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px;flex-basis:55%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"12px"}}},"textColor":"base-2","fontFamily":"montserrat"} -->
<p class="has-base-2-color has-text-color has-link-color has-montserrat-font-family" style="padding-left:12px;font-size:12px;font-style:normal;font-weight:700">Emilia Torres</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"base"} -->
<div class="wp-block-column is-vertically-aligned-center has-base-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"10px"}},"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color has-link-color" style="font-size:10px">Logística</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Team Card"},"className":"go-team-card","style":{"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group go-team-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"animated slideInUp o-anim-custom-delay o-anim-value-delay-200ms"} -->
<figure class="wp-block-image size-full animated slideInUp o-anim-custom-delay o-anim-value-delay-200ms"><img src="$go_daniel" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"contrast"} -->
<div class="wp-block-column is-vertically-aligned-center has-contrast-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px;flex-basis:55%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"12px"}}},"textColor":"base-2","fontFamily":"montserrat"} -->
<p class="has-base-2-color has-text-color has-link-color has-montserrat-font-family" style="padding-left:12px;font-size:12px;font-style:normal;font-weight:700">Daniel Morales</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"base"} -->
<div class="wp-block-column is-vertically-aligned-center has-base-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"10px"}},"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color has-link-color" style="font-size:10px">Director Técnico</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Team Card"},"className":"go-team-card","style":{"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group go-team-card"><!-- wp:image {"id":173,"sizeSlug":"full","linkDestination":"none","className":"animated slideInUp o-anim-custom-delay o-anim-value-delay-250ms"} -->
<figure class="wp-block-image size-full animated slideInUp o-anim-custom-delay o-anim-value-delay-250ms"><img src="$go_manuel" alt="" class="wp-image-173"/></figure>
<!-- /wp:image -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"contrast"} -->
<div class="wp-block-column is-vertically-aligned-center has-contrast-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px;flex-basis:55%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"12px"}}},"textColor":"base-2","fontFamily":"montserrat"} -->
<p class="has-base-2-color has-text-color has-link-color has-montserrat-font-family" style="padding-left:12px;font-size:12px;font-style:normal;font-weight:700">Manuel Aburto</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"base"} -->
<div class="wp-block-column is-vertically-aligned-center has-base-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"10px"}},"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color has-link-color" style="font-size:10px">Técnico de Video</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Team Card"},"className":"go-team-card","style":{"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group go-team-card"><!-- wp:image {"id":174,"sizeSlug":"full","linkDestination":"none","className":"animated slideInUp o-anim-custom-delay o-anim-value-delay-100ms"} -->
<figure class="wp-block-image size-full animated slideInUp o-anim-custom-delay o-anim-value-delay-100ms"><img src="$go_enrique" alt="" class="wp-image-174"/></figure>
<!-- /wp:image -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"contrast"} -->
<div class="wp-block-column is-vertically-aligned-center has-contrast-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px;flex-basis:55%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"12px"}}},"textColor":"base-2","fontFamily":"montserrat"} -->
<p class="has-base-2-color has-text-color has-link-color has-montserrat-font-family" style="padding-left:12px;font-size:12px;font-style:normal;font-weight:700">Enrique Guerrero</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"4px","right":"4px"}}},"backgroundColor":"base"} -->
<div class="wp-block-column is-vertically-aligned-center has-base-background-color has-background" style="padding-top:4px;padding-right:4px;padding-bottom:4px;padding-left:4px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"10px"}},"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color has-link-color" style="font-size:10px">Supervisor de Bodega</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
EOD;
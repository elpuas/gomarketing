<?php
/**
 * Header Default Pattern
 * 
 * @package Go Marketing
 */

return <<<EOD
<!-- wp:group {"tagName":"header","metadata":{"categories":["header"],"patternName":"gomarketing/header-default","name":"Header Default"},"align":"wide","className":"go-header","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<header class="wp-block-group alignwide go-header" style="padding-top:0px;padding-bottom:0px">
    <!-- wp:nk/awb {"type":"yt_vm_video","align":"full","video":"https://www.youtube.com/watch?v=0tWsz4b0HXg","videoPosterPreview":"https://img.youtube.com/vi/0tWsz4b0HXg/maxresdefault.jpg","videoMobile":true,"style":{"spacing":{"blockGap":"0"},"dimensions":{"minHeight":"500px"}}} -->
    <div class="wp-block-nk-awb nk-awb alignfull" style="min-height:500px">
        <div class="nk-awb-wrap" data-awb-type="yt_vm_video"
            data-awb-video="https://www.youtube.com/watch?v=0tWsz4b0HXg" data-awb-video-mobile="true">
            <div class="nk-awb-inner"></div>
        </div>
        <div class="nk-awb-wrap-content">
            <!-- wp:group {"align":"wide","className":"go-header-nav","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
            <div class="wp-block-group alignwide go-header-nav">
                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex"}} -->
                <div class="wp-block-group"><!-- wp:site-logo {"width":60,"shouldSyncIcon":true} /--></div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
                <div class="wp-block-group">
                    <!-- wp:navigation {"ref":4,"textColor":"base","style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"}} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"go-hero-cta","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"space-between"}} -->
            <div class="wp-block-group go-hero-cta">
                <!-- wp:image {"id":24,"width":"350px","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img
                        src="https://gomarketing.local/wp-content/uploads/2024/07/Titular.svg" alt=""
                        class="wp-image-24" style="width:350px" /></figure>
                <!-- /wp:image -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"backgroundColor":"contrast","textColor":"base-2","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"border":{"radius":"0px","right":{"color":"var:preset|color|base","width":"2px"},"top":[],"bottom":[],"left":[]}}} -->
                    <div class="wp-block-button"><a
                            class="wp-block-button__link has-base-2-color has-contrast-background-color has-text-color has-background has-link-color wp-element-button"
                            href="https://gomarketing.local/proyectos/"
                            style="border-radius:0px;border-right-color:var(--wp--preset--color--base);border-right-width:2px">VER
                            PROJECTOS</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:nk/awb -->
</header>
<!-- /wp:group -->
EOD;
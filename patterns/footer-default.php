<?php
/**
 * Footer Default Pattern
 * 
 * @package Go Marketing
 */

return <<<EOD
<!-- wp:group {"tagName":"footer","align":"full","className":"go-footer","style":{"spacing":{"padding":{"bottom":"50px"}}},"backgroundColor":"contrast","layout":{"type":"constrained","contentSize":"1240px"}} -->
<footer class="wp-block-group alignfull go-footer has-contrast-background-color has-background"
    style="padding-bottom:50px">
    <!-- wp:cover {"overlayColor":"base","isUserOverlayColor":true,"minHeight":288,"minHeightUnit":"px","align":"full","className":"go-footer-cta","layout":{"type":"default"}} -->
    <div class="wp-block-cover alignfull go-footer-cta" style="min-height:288px"><span aria-hidden="true"
            class="wp-block-cover__background has-base-background-color has-background-dim-100 has-background-dim"></span>
        <div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
            <div class="wp-block-group alignfull"><!-- wp:columns {"verticalAlignment":"center"} -->
                <div class="wp-block-columns are-vertically-aligned-center">
                    <!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"blockGap":"0"}}} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
                        <!-- wp:paragraph -->
                        <p>Tenés un proyecto en mente</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","fontSize":"50px"}},"textColor":"base-2","fontFamily":"montserrat"} -->
                        <h2 class="wp-block-heading has-base-2-color has-text-color has-link-color has-montserrat-font-family"
                            style="font-size:50px;font-style:normal;font-weight:600;text-transform:uppercase">¡Hagámoslo
                            Realidad!</h2>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"className":"is-style-fill","style":{"border":{"radius":"0px","right":{"color":"var:preset|color|base-2","width":"2px"}},"typography":{"textTransform":"uppercase"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
                            <div class="wp-block-button is-style-fill" style="text-transform:uppercase"><a
                                    class="wp-block-button__link wp-element-button"
                                    href="https://gomarketing.local/contacto/"
                                    style="border-radius:0px;border-right-color:var(--wp--preset--color--base-2);border-right-width:2px;padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">Hablemos</a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->

    <!-- wp:group {"align":"wide","className":"go-footer-social","style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide go-footer-social" style="padding-top:50px;padding-bottom:50px">
        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group">
            <!-- wp:outermost/icon-block {"iconName":"","iconColor":"base-2","iconColorValue":"#ffffff","width":"150px"} -->
            <div class="wp-block-outermost-icon-block">
                <div class="icon-container has-icon-color has-base-2-color" style="color:#ffffff;width:150px"><svg
                        width="94" height="55" viewBox="0 0 94 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_37_324)">
                            <path
                                d="M45.0303 53.0054V47.5659L42.0606 53.0054H41.2728L38.3031 47.5659V53.0054H37.2122V45.3296H38.3031L41.6364 51.4944L45.0303 45.3296H46.1212V53.0054H45.0303Z"
                                fill="currentColor"></path>
                            <path
                                d="M52.4848 53.0054V52.4615C51.9393 52.8845 51.2726 53.1263 50.4242 53.1263C49.4545 53.1263 48.7272 52.8241 48.1211 52.2801C47.5757 51.7362 47.3333 51.0713 47.3333 50.2252C47.3333 49.379 47.5757 48.7142 48.1211 48.1702C48.6666 47.6263 49.4545 47.3241 50.4242 47.3241C51.212 47.3241 51.8787 47.5054 52.4242 47.9285V47.3241H53.5151V53.0054H52.4848ZM51.9999 48.7746C51.6363 48.412 51.1514 48.2307 50.4848 48.2307C49.8787 48.2307 49.3939 48.412 49.0302 48.7746C48.7272 49.1373 48.5454 49.6208 48.5454 50.1648C48.5454 50.7087 48.7272 51.1922 49.0302 51.5549C49.3939 51.9175 49.8787 52.0988 50.4848 52.0988C51.0908 52.0988 51.6363 51.9175 51.9999 51.5549C52.3636 51.1922 52.5454 50.7087 52.5454 50.1648C52.4848 49.6208 52.303 49.1373 51.9999 48.7746Z"
                                fill="currentColor"></path>
                            <path
                                d="M56.8485 49.0164C56.5454 49.4395 56.3636 49.9834 56.3636 50.7087V53.0054H55.2727V47.445H56.3636V47.9285C56.9091 47.5054 57.6969 47.3241 58.7879 47.3241V48.2911C57.8182 48.2911 57.1515 48.5329 56.8485 49.0164Z"
                                fill="currentColor"></path>
                            <path
                                d="M62.9697 49.5604L66.4242 52.945H64.9091L62.0606 50.1043L61.0909 50.7692V52.945H60V45.2692H61.0909V49.5604L64.6667 47.2032L66.6061 47.2637L62.9697 49.5604Z"
                                fill="currentColor"></path>
                            <path
                                d="M67.9395 50.6483C68.0607 51.6757 68.7274 52.1593 69.9395 52.1593C70.9092 52.1593 71.5758 51.7362 71.9395 50.9505H73.091C72.788 51.8571 72.3031 52.4615 71.7577 52.7637C71.2728 53.0054 70.6668 53.1263 70.0001 53.1263C68.9698 53.1263 68.2425 52.8845 67.6971 52.3406C67.1516 51.8571 66.9092 51.1318 66.9092 50.2856C66.9092 49.4395 67.2122 48.7746 67.7577 48.1702C68.3031 47.6263 69.091 47.3241 70.0607 47.3241C71.0304 47.3241 71.7577 47.5659 72.3637 48.0494C72.9698 48.5329 73.2122 49.1977 73.2122 50.0439V50.6483H67.9395ZM71.4546 48.7746C71.091 48.4724 70.6061 48.2911 70.0001 48.2911C69.394 48.2911 68.9092 48.4724 68.5455 48.7746C68.2425 49.0164 68.1213 49.3186 68.0001 49.6812H71.9395C71.8789 49.3186 71.6971 49.0164 71.4546 48.7746Z"
                                fill="currentColor"></path>
                            <path
                                d="M76.1213 48.533V52.9451H75.0304V48.533H73.8789V47.5659H75.0304V45.9945H76.1213V47.5659H77.2728V48.533H76.1213Z"
                                fill="currentColor"></path>
                            <path
                                d="M78.9698 46.8406C78.7274 46.8406 78.5455 46.7197 78.4243 46.4175V45.5714C78.5455 45.2692 78.7274 45.1483 78.9698 45.1483C79.1516 45.1483 79.3334 45.2692 79.5152 45.511V46.478C79.3334 46.7197 79.1516 46.8406 78.9698 46.8406ZM78.4849 52.945V47.2033H79.5758V52.945H78.4849Z"
                                fill="currentColor"></path>
                            <path
                                d="M85.5153 52.945V49.3791C85.5153 48.5934 85.0305 48.2307 84.0002 48.2307C83.4547 48.2307 82.9698 48.3516 82.6668 48.6538C82.3638 48.956 82.182 49.3186 82.182 49.8022V52.8846H81.0911V47.3241H82.182V47.6868C82.6668 47.3846 83.2729 47.2032 83.9395 47.2032C84.6668 47.2032 85.2729 47.3846 85.7577 47.6868C86.3032 48.0494 86.5456 48.5934 86.5456 49.2582V52.8846H85.5153V52.945Z"
                                fill="currentColor"></path>
                            <path
                                d="M91.0302 54.9999C90.303 54.9999 89.6969 54.879 89.2121 54.5768C88.606 54.2142 88.2424 53.6098 88.1818 52.6428H89.2727C89.3333 53.1867 89.5151 53.5494 89.7575 53.7307C89.9999 53.912 90.4242 54.0329 90.9696 54.0329C91.6363 54.0329 92.1211 53.912 92.4242 53.6703C92.7272 53.4285 92.8484 53.0659 92.8484 52.5823V52.4615C92.303 52.8845 91.6363 53.0659 90.8484 53.0659C90.1818 53.0659 89.5757 52.945 89.0908 52.6428C88.2424 52.0988 87.8181 51.3131 87.8181 50.2252C87.8181 49.379 88.1212 48.6538 88.6666 48.1098C89.2121 47.5659 89.9999 47.3241 90.909 47.3241C91.6363 47.3241 92.303 47.5054 92.7878 47.9285V47.445H93.8787V52.6428C93.8787 53.4285 93.6363 54.0329 93.0908 54.456C92.7272 54.8186 91.9999 54.9999 91.0302 54.9999ZM92.3636 48.8351C91.9999 48.4724 91.5757 48.2911 90.9696 48.2911C90.3636 48.2911 89.8787 48.4724 89.5151 48.8351C89.1515 49.1977 88.9696 49.6812 88.9696 50.2252C88.9696 50.7691 89.1515 51.2527 89.4545 51.6153C89.7575 51.9779 90.2424 52.1593 90.8484 52.1593C91.4545 52.1593 91.9393 51.9779 92.303 51.6757C92.6666 51.3131 92.8484 50.89 92.8484 50.2856C92.909 49.6812 92.7272 49.1977 92.3636 48.8351Z"
                                fill="currentColor"></path>
                            <path
                                d="M21.4545 13.2967H31.8788V40.5549V41.8241C31.8788 43.6373 31.5152 45.3901 30.7273 47.0219C29.9394 48.6538 28.9091 49.9835 27.6364 51.011C26.3636 52.0384 24.7273 52.7637 22.7879 53.1868C20.7879 53.6703 18.5455 53.8516 16 53.8516C10.1818 53.8516 6.18182 53.0055 4 51.2527C1.87879 49.5604 0.787879 47.2033 0.787879 44.3022C0.787879 43.9395 0.787879 43.456 0.848485 42.8516L11.6364 44.0604C11.8788 45.0274 12.303 45.7527 12.9091 46.1154C13.697 46.6593 14.7273 46.9615 16 46.9615C17.5758 46.9615 18.7879 46.5384 19.5758 45.6923C20.3636 44.8461 20.7273 43.3351 20.7273 41.2197V36.8077C19.6364 38.0769 18.5455 39.0439 17.4545 39.5879C15.7576 40.4945 13.8788 40.978 11.9394 40.978C8.06061 40.978 4.9697 39.2857 2.54545 35.9011C0.848485 33.5439 0 30.4011 0 26.4725C0 22 1.09091 18.5549 3.27273 16.1978C5.45455 13.8406 8.30303 12.6318 11.8182 12.6318C14.0606 12.6318 15.9394 12.9945 17.3939 13.7802C18.8485 14.5659 20.2424 15.7747 21.5152 17.5879V13.2967H21.4545ZM11.0909 27.3187C11.0909 29.3736 11.5152 30.945 12.4242 31.9725C13.3333 33 14.4848 33.4835 15.9394 33.4835C17.3333 33.4835 18.4848 32.9395 19.3939 31.9121C20.303 30.8846 20.7879 29.3132 20.7879 27.1978C20.7879 25.0824 20.303 23.511 19.3333 22.3626C18.3636 21.2747 17.1515 20.6703 15.7576 20.6703C14.3636 20.6703 13.2121 21.1538 12.3636 22.1813C11.5152 23.2088 11.0909 24.9615 11.0909 27.3187Z"
                                fill="currentColor"></path>
                            <path
                                d="M37.2122 27.8022C37.2122 23.3901 38.7273 19.7637 41.697 16.923C44.6667 14.0824 48.7273 12.6318 53.7576 12.6318C59.5758 12.6318 63.9394 14.3241 66.9091 17.6483C69.2728 20.3681 70.4849 23.6923 70.4849 27.6208C70.4849 32.0329 69.0303 35.7197 66.0606 38.5C63.0909 41.3406 59.0303 42.7307 53.8182 42.7307C49.1516 42.7307 45.394 41.5824 42.5455 39.2252C38.9697 36.3241 37.2122 32.5165 37.2122 27.8022ZM48.3637 27.8022C48.3637 30.4011 48.9091 32.2747 49.9394 33.4835C50.9697 34.6923 52.3031 35.3571 53.8788 35.3571C55.4546 35.3571 56.7879 34.7527 57.8182 33.5439C58.8485 32.3351 59.3334 30.4011 59.3334 27.6813C59.3334 25.2033 58.7879 23.3296 57.7576 22.1208C56.7273 20.9121 55.4546 20.3077 53.9394 20.3077C52.3031 20.3077 50.9697 20.9121 49.9394 22.1813C48.9091 23.3296 48.3637 25.2637 48.3637 27.8022Z"
                                fill="currentColor"></path>
                            <path
                                d="M81.697 0L93.3333 2.53846L91.3939 11.4231L85.2121 28.7692L78.0606 27.1978L79.8182 8.88462L81.697 0ZM75.6363 29.4945L86.4848 31.8517L84.3636 41.3407L73.5151 38.9835L75.6363 29.4945Z"
                                fill="currentColor"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_37_324">
                                <rect width="94" height="55" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg></div>
            </div>
            <!-- /wp:outermost/icon-block -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
            <p class="has-base-2-color has-text-color has-link-color">¡Llevamos tu marca a lo más alto!</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group">
            <!-- wp:heading {"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","fontSize":"35px"}},"textColor":"base-2","fontFamily":"montserrat"} -->
            <h2 class="wp-block-heading is-style-default has-base-2-color has-text-color has-link-color has-montserrat-font-family"
                style="font-size:35px;font-style:normal;font-weight:600;text-transform:uppercase">Contactanos</h2>
            <!-- /wp:heading -->

            <!-- wp:social-links {"iconColor":"base-2","iconColorValue":"#ffffff","size":"has-large-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"space-between"}} -->
            <ul class="wp-block-social-links has-large-icon-size has-icon-color is-style-logos-only">
                <!-- wp:social-link {"url":"#","service":"facebook"} /-->

                <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->

                <!-- wp:social-link {"url":"#","service":"mail"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"spacing":{"margin":{"top":"100px"}}},"textColor":"base-2"} -->
    <p class="has-text-align-center has-base-2-color has-text-color has-link-color" style="margin-top:100px">©2024 Go!
        Marketing</p>
    <!-- /wp:paragraph -->
</footer>
<!-- /wp:group -->
EOD;
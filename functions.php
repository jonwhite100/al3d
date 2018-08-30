<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom pagination for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';

/**
* Make Header Shrink on Page Scroll
**/

add_action ('wp_footer','vr_shrink_head',1);

function vr_shrink_head() {
    ?>
    <script>
        jQuery(document).ready(function($) {
            $(window).scroll(function () {
                if ($(window).scrollTop() > 100) {
                    $('.mob-menu-header-holder').addClass('shrink');
                }

                else{
                    $('.mob-menu-header-holder').removeClass('shrink');
                }
            });
        });
    </script>
    <?php
}

/**
* Multiple images for a post
**/
if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(
        array(
            'label' => __( 'Second Image', 'UnderStrap'),
            'id' => 'second-image',
            'post_type' => 'post'
        )
    );
    new MultiPostThumbnails(
        array(
            'label' => 'Third Image',
            'id' => 'third-image',
            'post_type' => 'post'

        )
    );
    new MultiPostThumbnails(
        array(
            'label' => 'Fourth Image',
            'id' => 'fourth-image',
            'post_type' => 'post'

        )
    );
    new MultiPostThumbnails(
        array(
            'label' => 'Fifth Image',
            'id' => 'fifth-image',
            'post_type' => 'post'

        )
    );
    new MultiPostThumbnails(
        array(
            'label' => 'Sixth Image',
            'id' => 'sixth-image',
            'post_type' => 'post'

        )
    );
}

<?php
/**
 * Title: Order today
 * Slug: citrus-press-lite/order-cta
 * Categories: citrus-press-lite
 * Description: A closing call to action with call, order and email buttons.
 * Keywords: call to action, order, contact
 * Viewport Width: 1400
 *
 * @package citrus-press-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","className":"cp-section"} -->
<section class="wp-block-group alignfull cp-section" id="order">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow","textColor":"orange"} -->
<p class="has-text-align-center has-orange-color has-text-color is-style-eyebrow"><?php echo esc_html__( 'Ready?', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Order your first cold-press today.', 'citrus-press-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"cp-lede"} -->
<p class="has-text-align-center cp-lede"><?php echo esc_html__( 'Walk in, order online for pick-up, or lock in a cleanse programme. We have everything you need to get started.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"cp-center"} -->
<div class="wp-block-buttons cp-center">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="tel:+15035550184"><?php echo esc_html__( 'Call to order', 'citrus-press-lite' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="__PAGE_cleanses__"><?php echo esc_html__( 'Start a cleanse', 'citrus-press-lite' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="mailto:hello@pressedandnourished.example"><?php echo esc_html__( 'Email us', 'citrus-press-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
<?php
echo citrus_press_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

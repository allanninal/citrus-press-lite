<?php
/**
 * Title: Selling points
 * Slug: citrus-press-lite/benefits
 * Categories: citrus-press-lite
 * Description: A band of short selling points.
 * Keywords: benefits, features, strip, badges
 * Viewport Width: 1400
 *
 * @package citrus-press-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"align":"full","backgroundColor":"accent","textColor":"on-accent","className":"cp-strip"} -->
<div class="wp-block-group has-on-accent-color has-text-color has-accent-background-color has-background alignfull cp-strip">
<!-- wp:list {"className":"cp-strip__list"} -->
<ul class="wp-block-list cp-strip__list">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Organic Where We Can', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Cold-Pressed Daily', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'No Artificial Flavours', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( '6 Farm Partners', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Gluten-Free Options', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Vegan-Friendly', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Traceable to the Farm', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<?php
echo citrus_press_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

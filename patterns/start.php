<?php
/**
 * Title: Easy ways to start
 * Slug: citrus-press-lite/start
 * Categories: citrus-press-lite
 * Viewport Width: 1400
 *
 * @package citrus-press-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","className":"ladder-section"} -->
<section class="wp-block-group alignfull ladder-section" id="start">
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Easy ways to start', 'citrus-press-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"14rem"},"className":"ladder"} -->
<div class="wp-block-group ladder">
<!-- wp:group {"layout":{"type":"default"},"className":"ladder__step"} -->
<div class="wp-block-group ladder__step">
<!-- wp:paragraph {"className":"ladder__n"} -->
<p class="ladder__n"><?php echo esc_html__( '1', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"ladder__title"} -->
<h3 class="wp-block-heading ladder__title"><?php echo esc_html__( 'Try a shot', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Two ounces of ginger, turmeric or wheatgrass, pressed today.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ladder__price"} -->
<p class="ladder__price"><?php echo esc_html__( 'From $3.50', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="__PAGE_menu__"><?php echo esc_html__( 'See the shots', 'citrus-press-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"ladder__step"} -->
<div class="wp-block-group ladder__step">
<!-- wp:paragraph {"className":"ladder__n"} -->
<p class="ladder__n"><?php echo esc_html__( '2', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"ladder__title"} -->
<h3 class="wp-block-heading ladder__title"><?php echo esc_html__( 'Pick a juice', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Sixteen ounces, cold-pressed to order. Ask what is in season.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ladder__price"} -->
<p class="ladder__price"><?php echo esc_html__( 'From $8.50', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="__PAGE_menu__"><?php echo esc_html__( 'See the juices', 'citrus-press-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"ladder__step"} -->
<div class="wp-block-group ladder__step">
<!-- wp:paragraph {"className":"ladder__n"} -->
<p class="ladder__n"><?php echo esc_html__( '3', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"ladder__title"} -->
<h3 class="wp-block-heading ladder__title"><?php echo esc_html__( 'Try a 1-day plan', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Six juices for one day, in drinking order, ready to collect.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ladder__price"} -->
<p class="ladder__price"><?php echo esc_html__( 'From $54', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="__PAGE_cleanses__"><?php echo esc_html__( 'See the plans', 'citrus-press-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<?php
echo citrus_press_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

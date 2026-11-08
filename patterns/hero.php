<?php
/**
 * Title: Hero
 * Slug: citrus-press-lite/hero
 * Categories: citrus-press-lite
 * Description: The opening section: headline, introduction, buttons and key facts.
 * Keywords: hero, header, banner, intro
 * Viewport Width: 1400
 *
 * @package citrus-press-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","className":"cp-section cp-hero"} -->
<section class="wp-block-group alignfull cp-section cp-hero" id="hero">
<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"width":"55%","verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Cold-pressed · Organic · Portland OR', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"fontSize":"huge"} -->
<h1 class="wp-block-heading has-huge-font-size"><?php echo wp_kses_post( __( 'Juice that <span class="cp-hl">feeds</span> your body.', 'citrus-press-lite' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large","className":"cp-lede-left"} -->
<p class="has-large-font-size cp-lede-left"><?php echo esc_html__( 'Small-batch juices, smoothies, and bowls made from real produce — nothing artificial, nothing processed.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="__PAGE_menu__"><?php echo esc_html__( 'See the menu', 'citrus-press-lite' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="__PAGE_cleanses__"><?php echo esc_html__( 'Explore cleanses', 'citrus-press-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"cp-stats"} -->
<div class="wp-block-group cp-stats">
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-stat"} -->
<div class="wp-block-group cp-stat">
<!-- wp:paragraph {"className":"cp-stat__value"} -->
<p class="cp-stat__value"><?php echo esc_html__( '2019', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-stat__label"} -->
<p class="cp-stat__label"><?php echo esc_html__( 'Opened', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-stat"} -->
<div class="wp-block-group cp-stat">
<!-- wp:paragraph {"className":"cp-stat__value"} -->
<p class="cp-stat__value"><?php echo esc_html__( '6', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-stat__label"} -->
<p class="cp-stat__label"><?php echo esc_html__( 'Organic farms', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-stat"} -->
<div class="wp-block-group cp-stat">
<!-- wp:paragraph {"className":"cp-stat__value"} -->
<p class="cp-stat__value"><?php echo esc_html__( '300+', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-stat__label"} -->
<p class="cp-stat__label"><?php echo esc_html__( 'Juices cold-pressed daily', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-stat"} -->
<div class="wp-block-group cp-stat">
<!-- wp:paragraph {"className":"cp-stat__value"} -->
<p class="cp-stat__value"><?php echo esc_html__( '800+', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-stat__label"} -->
<p class="cp-stat__label"><?php echo esc_html__( 'Cleanse regulars', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"45%","verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
<!-- wp:image {"id":"__ID_hero__","sizeSlug":"full","linkDestination":"none","className":"is-hero cp-hero__photo"} -->
<figure class="wp-block-image size-full is-hero cp-hero__photo"><img src="__SRC_hero__" alt="<?php echo esc_attr__( 'A glass of vibrant cold-pressed green juice', 'citrus-press-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_hero__"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<?php
echo citrus_press_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

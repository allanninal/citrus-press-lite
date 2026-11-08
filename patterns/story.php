<?php
/**
 * Title: Our story
 * Slug: citrus-press-lite/story
 * Categories: citrus-press-lite
 * Description: The story behind the business, with a few key numbers.
 * Keywords: about, story, history, numbers
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
<section class="wp-block-group alignfull cp-section" id="story">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"width":"40%","verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
<!-- wp:group {"layout":{"type":"grid","columnCount":2},"className":"cp-tiles"} -->
<div class="wp-block-group cp-tiles">
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-tile","backgroundColor":"surface-2"} -->
<div class="wp-block-group has-surface-2-background-color has-background cp-tile">
<!-- wp:paragraph {"align":"center","className":"cp-stat__value"} -->
<p class="has-text-align-center cp-stat__value"><?php echo esc_html__( '2019', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"cp-stat__label"} -->
<p class="has-text-align-center cp-stat__label"><?php echo esc_html__( 'Opened', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-tile","backgroundColor":"surface-2"} -->
<div class="wp-block-group has-surface-2-background-color has-background cp-tile">
<!-- wp:paragraph {"align":"center","className":"cp-stat__value"} -->
<p class="has-text-align-center cp-stat__value"><?php echo esc_html__( '6', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"cp-stat__label"} -->
<p class="has-text-align-center cp-stat__label"><?php echo esc_html__( 'Organic farms', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-tile","backgroundColor":"surface-2"} -->
<div class="wp-block-group has-surface-2-background-color has-background cp-tile">
<!-- wp:paragraph {"align":"center","className":"cp-stat__value"} -->
<p class="has-text-align-center cp-stat__value"><?php echo esc_html__( '300+', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"cp-stat__label"} -->
<p class="has-text-align-center cp-stat__label"><?php echo esc_html__( 'Juices cold-pressed daily', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-tile","backgroundColor":"surface-2"} -->
<div class="wp-block-group has-surface-2-background-color has-background cp-tile">
<!-- wp:paragraph {"align":"center","className":"cp-stat__value"} -->
<p class="has-text-align-center cp-stat__value"><?php echo esc_html__( '800+', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"cp-stat__label"} -->
<p class="has-text-align-center cp-stat__label"><?php echo esc_html__( 'Cleanse regulars', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Our story', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'From Consulting to a Bar Counter', 'citrus-press-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Maya spent a decade in corporate consulting in San Francisco, and the best part of most days was the juice counter on her walk to work.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'She moved to Portland and opened the first Pressed &amp; Nourished counter in a converted garage in the Alphabet District in 2019. The idea was simple: make real food taste like something you\'d crave.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Today the bar serves over 400 people a day, has a loyal cleanse programme with hundreds of repeat customers, and sources its produce from the certified organic and biodynamic farms listed below.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-founder","backgroundColor":"surface-2"} -->
<div class="wp-block-group has-surface-2-background-color has-background cp-founder">
<!-- wp:paragraph {"className":"cp-founder__name"} -->
<p class="cp-founder__name"><?php echo esc_html__( 'Maya Chen', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-founder__title"} -->
<p class="cp-founder__title"><?php echo esc_html__( 'Founder', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<?php
echo citrus_press_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

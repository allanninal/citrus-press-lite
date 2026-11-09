<?php
/**
 * Title: Cleanse programmes
 * Slug: citrus-press-lite/cleanses
 * Categories: citrus-press-lite
 * Description: Programmes or packages as cards: what each includes, its price and an order button.
 * Keywords: packages, programmes, pricing, plans, cleanse
 * Viewport Width: 1400
 *
 * @package citrus-press-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","backgroundColor":"surface-2","className":"cp-section"} -->
<section class="wp-block-group has-surface-2-background-color has-background alignfull cp-section" id="cleanse">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow","textColor":"orange"} -->
<p class="has-text-align-center has-orange-color has-text-color is-style-eyebrow"><?php echo esc_html__( 'Pick your length', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Cleanse Programmes', 'citrus-press-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"cp-lede"} -->
<p class="has-text-align-center cp-lede"><?php echo esc_html__( 'Curated juice sequences planned by our team. Pick your duration and we\'ll do the rest.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"15rem"},"className":"cp-plans"} -->
<div class="wp-block-group cp-plans">
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-plan"} -->
<div class="wp-block-group cp-plan">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( '1 Day · 6 juices', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"cp-plan__name"} -->
<h3 class="wp-block-heading cp-plan__name"><?php echo esc_html__( '1-Day Juice Plan', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-muted"} -->
<p class="cp-muted"><?php echo esc_html__( 'A gentle introduction, and an easy way to try the bar.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"cp-checks"} -->
<ul class="wp-block-list cp-checks">
<!-- wp:list-item -->
<li><?php echo esc_html__( '6 cold-pressed juices (morning to evening sequence)', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Ginger Fire juice shot', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Digital cleanse guide', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"cp-plan__price"} -->
<p class="cp-plan__price"><?php echo esc_html__( '$54', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-plan__each"} -->
<p class="cp-plan__each"><?php echo esc_html__( '$54 a day', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="__PAGE_shop|cleanses__"><?php echo esc_html__( 'Order 1-Day Juice Plan', 'citrus-press-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-plan cp-plan\u002d\u002dpopular"} -->
<div class="wp-block-group cp-plan cp-plan--popular">
<!-- wp:paragraph {"className":"cp-badge"} -->
<p class="cp-badge"><?php echo esc_html__( 'Most popular', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( '3 Days · 18 juices', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"cp-plan__name"} -->
<h3 class="wp-block-heading cp-plan__name"><?php echo esc_html__( '3-Day Juice Plan', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-muted"} -->
<p class="cp-muted"><?php echo esc_html__( 'Our most popular cleanse. Three days of juices, with a meal guide for afterwards.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"cp-checks"} -->
<ul class="wp-block-list cp-checks">
<!-- wp:list-item -->
<li><?php echo esc_html__( '18 cold-pressed juices', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( '3 Turmeric Gold shots', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Morning wheatgrass shot each day', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Digital meal guide for post-cleanse', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Pre-cleanse prep plan', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"cp-plan__price"} -->
<p class="cp-plan__price"><?php echo esc_html__( '$149', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-plan__each"} -->
<p class="cp-plan__each"><?php echo wp_kses_post( __( '$49.67 a day · <strong>save 8%</strong> on single days', 'citrus-press-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="__PAGE_shop|cleanses__"><?php echo esc_html__( 'Order 3-Day Juice Plan', 'citrus-press-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-plan"} -->
<div class="wp-block-group cp-plan">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( '5 Days · 30 juices + bowls', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"cp-plan__name"} -->
<h3 class="wp-block-heading cp-plan__name"><?php echo esc_html__( '5-Day Juice Plan', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-muted"} -->
<p class="cp-muted"><?php echo esc_html__( 'The longest programme. Juices, shots, and one nourishing bowl per day.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"cp-checks"} -->
<ul class="wp-block-list cp-checks">
<!-- wp:list-item -->
<li><?php echo esc_html__( '30 cold-pressed juices', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( '5 juice shots (rotating)', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( '5 Green Machine bowls', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Check-in call with our team', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( '14-day post-cleanse eating plan', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"cp-plan__price"} -->
<p class="cp-plan__price"><?php echo esc_html__( '$239', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-plan__each"} -->
<p class="cp-plan__each"><?php echo wp_kses_post( __( '$47.80 a day · <strong>save 11%</strong> on single days', 'citrus-press-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="__PAGE_shop|cleanses__"><?php echo esc_html__( 'Order 5-Day Juice Plan', 'citrus-press-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"cp-day"} -->
<div class="wp-block-group cp-day">
<!-- wp:heading {"level":3,"className":"cp-day__title"} -->
<h3 class="wp-block-heading cp-day__title"><?php echo esc_html__( 'A day on a plan', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:list {"ordered":true,"className":"cp-day__list"} -->
<ol class="wp-block-list cp-day__list">
<!-- wp:list-item -->
<li><?php echo esc_html__( '8:00 AM · Green Sunrise', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( '10:00 AM · Citrus Surge', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( '12:00 PM · Dark Greens', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( '2:00 PM · Beet Revival', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( '4:00 PM · Golden Hour', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( '6:00 PM · Watermelon Mint', 'citrus-press-lite' ); ?></li>
<!-- /wp:list-item -->
</ol>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"cp-muted","fontSize":"small"} -->
<p class="has-small-font-size cp-muted"><?php echo esc_html__( 'The 3- and 5-day plans repeat this day, with the shots and bowls listed above.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"align":"center","className":"cp-muted","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size cp-muted"><?php echo esc_html__( 'All cleanses must be ordered 24 hours in advance. Pick-up or local delivery available.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
<?php
echo citrus_press_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

<?php
/**
 * Title: Our farms
 * Slug: citrus-press-lite/sourcing
 * Categories: citrus-press-lite
 * Description: Where your ingredients come from: one card per supplier, with its certification.
 * Keywords: sourcing, farms, suppliers, ingredients
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
<section class="wp-block-group alignfull cp-section" id="sourcing">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'Where it comes from', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'We know our farms.', 'citrus-press-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"cp-lede"} -->
<p class="has-text-align-center cp-lede"><?php echo esc_html__( 'Every ingredient is traceable to its farm. We source certified organic, biodynamic, and fair-trade wherever possible.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"},"className":"cp-cards"} -->
<div class="wp-block-group cp-cards">
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-card cp-card\u002d\u002dfarm"} -->
<div class="wp-block-group cp-card cp-card--farm">
<!-- wp:heading {"level":3,"className":"cp-farm__name"} -->
<h3 class="wp-block-heading cp-farm__name"><?php echo esc_html__( 'Leafy Greens &amp; Herbs', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-farm__farm"} -->
<p class="cp-farm__farm"><?php echo esc_html__( 'Cedar Slough Organics', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-muted","fontSize":"small"} -->
<p class="has-small-font-size cp-muted"><?php echo esc_html__( 'Sauvie Island, OR', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Kale, spinach, parsley, basil, mint — harvested same morning, delivered by 6 AM.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-chip"} -->
<p class="cp-chip"><?php echo esc_html__( 'USDA Organic', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-card cp-card\u002d\u002dfarm"} -->
<div class="wp-block-group cp-card cp-card--farm">
<!-- wp:heading {"level":3,"className":"cp-farm__name"} -->
<h3 class="wp-block-heading cp-farm__name"><?php echo esc_html__( 'Citrus', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-farm__farm"} -->
<p class="cp-farm__farm"><?php echo esc_html__( 'Foothill Row Farms', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-muted","fontSize":"small"} -->
<p class="has-small-font-size cp-muted"><?php echo esc_html__( 'Porterville, CA', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Navel, blood orange, grapefruit, Meyer lemon — peak-season only, no off-season citrus.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-chip"} -->
<p class="cp-chip"><?php echo esc_html__( 'USDA Organic', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-card cp-card\u002d\u002dfarm"} -->
<div class="wp-block-group cp-card cp-card--farm">
<!-- wp:heading {"level":3,"className":"cp-farm__name"} -->
<h3 class="wp-block-heading cp-farm__name"><?php echo esc_html__( 'Tropical Fruit', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-farm__farm"} -->
<p class="cp-farm__farm"><?php echo esc_html__( 'Coastline Produce Co-op', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-muted","fontSize":"small"} -->
<p class="has-small-font-size cp-muted"><?php echo esc_html__( 'Portland, OR (distributed)', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Mango, pineapple, banana, papaya — direct from co-op growers in Ecuador and Costa Rica.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-chip"} -->
<p class="cp-chip"><?php echo esc_html__( 'Fair Trade', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-card cp-card\u002d\u002dfarm"} -->
<div class="wp-block-group cp-card cp-card--farm">
<!-- wp:heading {"level":3,"className":"cp-farm__name"} -->
<h3 class="wp-block-heading cp-farm__name"><?php echo esc_html__( 'Root Vegetables', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-farm__farm"} -->
<p class="cp-farm__farm"><?php echo esc_html__( 'Harlan Lane Farm', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-muted","fontSize":"small"} -->
<p class="has-small-font-size cp-muted"><?php echo esc_html__( 'Canby, OR', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Beets, carrots, turmeric, ginger — biodynamic soil, no synthetic inputs.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-chip"} -->
<p class="cp-chip"><?php echo esc_html__( 'Demeter Biodynamic', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-card cp-card\u002d\u002dfarm"} -->
<div class="wp-block-group cp-card cp-card--farm">
<!-- wp:heading {"level":3,"className":"cp-farm__name"} -->
<h3 class="wp-block-heading cp-farm__name"><?php echo esc_html__( 'Açaí', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-farm__farm"} -->
<p class="cp-farm__farm"><?php echo esc_html__( 'Várzea Açaí Collective', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-muted","fontSize":"small"} -->
<p class="has-small-font-size cp-muted"><?php echo esc_html__( 'Amazônia, Brazil', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Wild-harvested, flash-frozen.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-chip"} -->
<p class="cp-chip"><?php echo esc_html__( 'Fair Trade · Organic', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-card cp-card\u002d\u002dfarm"} -->
<div class="wp-block-group cp-card cp-card--farm">
<!-- wp:heading {"level":3,"className":"cp-farm__name"} -->
<h3 class="wp-block-heading cp-farm__name"><?php echo esc_html__( 'Wheatgrass', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-farm__farm"} -->
<p class="cp-farm__farm"><?php echo esc_html__( 'Glasshouse Row', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-muted","fontSize":"small"} -->
<p class="has-small-font-size cp-muted"><?php echo esc_html__( 'Portland, OR', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Grown in trays on-premises. Cut fresh daily — shortest possible farm-to-press.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-chip"} -->
<p class="cp-chip"><?php echo esc_html__( 'Spray-free', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<?php
echo citrus_press_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

<?php
/**
 * Title: Menu highlights
 * Slug: citrus-press-lite/menu-highlights
 * Categories: citrus-press-lite
 * Description: A short selection from the menu with prices, and a link to the full menu.
 * Keywords: menu, prices, products, bestsellers
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
<section class="wp-block-group alignfull cp-section" id="menu">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'What we make', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'The Menu', 'citrus-press-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"cp-lede"} -->
<p class="has-text-align-center cp-lede"><?php echo esc_html__( 'Everything made fresh daily from organic produce wherever we can source it. Real ingredients, nothing hidden.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"},"className":"cp-cards"} -->
<div class="wp-block-group cp-cards">
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-card"} -->
<div class="wp-block-group cp-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cp-card__head"} -->
<div class="wp-block-group cp-card__head">
<!-- wp:heading {"level":3,"className":"cp-card__name"} -->
<h3 class="wp-block-heading cp-card__name"><?php echo esc_html__( 'Green Sunrise', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-card__price"} -->
<p class="cp-card__price"><?php echo esc_html__( '$9.50', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cp-card__meta"} -->
<p class="cp-card__meta"><?php echo esc_html__( '16 oz · 110 kcal', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__desc"} -->
<p class="cp-card__desc"><?php echo esc_html__( 'Our flagship: cucumber, romaine, kale, green apple, lemon, ginger. Bright, clean, grassy.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__ingredients"} -->
<p class="cp-card__ingredients"><?php echo esc_html__( 'Cucumber · Romaine · Kale · Green Apple · Lemon · Ginger', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__tags"} -->
<p class="cp-card__tags"><?php echo esc_html__( 'vegan · raw · bestseller', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-card"} -->
<div class="wp-block-group cp-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cp-card__head"} -->
<div class="wp-block-group cp-card__head">
<!-- wp:heading {"level":3,"className":"cp-card__name"} -->
<h3 class="wp-block-heading cp-card__name"><?php echo esc_html__( 'Beet Revival', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-card__price"} -->
<p class="cp-card__price"><?php echo esc_html__( '$9.50', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cp-card__meta"} -->
<p class="cp-card__meta"><?php echo esc_html__( '16 oz · 125 kcal', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__desc"} -->
<p class="cp-card__desc"><?php echo esc_html__( 'Red beet, carrot, apple, ginger, cayenne. Earthy sweetness with a slow-building heat.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__ingredients"} -->
<p class="cp-card__ingredients"><?php echo esc_html__( 'Red Beet · Carrot · Apple · Ginger · Cayenne', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__tags"} -->
<p class="cp-card__tags"><?php echo esc_html__( 'vegan · raw · bestseller', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-card"} -->
<div class="wp-block-group cp-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cp-card__head"} -->
<div class="wp-block-group cp-card__head">
<!-- wp:heading {"level":3,"className":"cp-card__name"} -->
<h3 class="wp-block-heading cp-card__name"><?php echo esc_html__( 'Tropic Thunder', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-card__price"} -->
<p class="cp-card__price"><?php echo esc_html__( '$11.00', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cp-card__meta"} -->
<p class="cp-card__meta"><?php echo esc_html__( '20 oz · 310 kcal', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__desc"} -->
<p class="cp-card__desc"><?php echo esc_html__( 'Mango, pineapple, banana, coconut milk, lime, toasted coconut. A weekend in Hawaii.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__ingredients"} -->
<p class="cp-card__ingredients"><?php echo esc_html__( 'Mango · Pineapple · Banana · Coconut Milk · Lime · Toasted Coconut', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__contains"} -->
<p class="cp-card__contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> coconut', 'citrus-press-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__tags"} -->
<p class="cp-card__tags"><?php echo esc_html__( 'vegan · GF · bestseller', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-card"} -->
<div class="wp-block-group cp-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cp-card__head"} -->
<div class="wp-block-group cp-card__head">
<!-- wp:heading {"level":3,"className":"cp-card__name"} -->
<h3 class="wp-block-heading cp-card__name"><?php echo esc_html__( 'Berry Boost', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-card__price"} -->
<p class="cp-card__price"><?php echo esc_html__( '$11.50', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cp-card__meta"} -->
<p class="cp-card__meta"><?php echo esc_html__( '20 oz · 295 kcal', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__desc"} -->
<p class="cp-card__desc"><?php echo esc_html__( 'Wild blueberry, strawberry, raspberry, banana, oat milk, flaxseed, vanilla.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__ingredients"} -->
<p class="cp-card__ingredients"><?php echo esc_html__( 'Wild Blueberry · Strawberry · Raspberry · Banana · Oat Milk · Flaxseed', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__contains"} -->
<p class="cp-card__contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> oats', 'citrus-press-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__tags"} -->
<p class="cp-card__tags"><?php echo esc_html__( 'vegan · bestseller', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-card"} -->
<div class="wp-block-group cp-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cp-card__head"} -->
<div class="wp-block-group cp-card__head">
<!-- wp:heading {"level":3,"className":"cp-card__name"} -->
<h3 class="wp-block-heading cp-card__name"><?php echo esc_html__( 'PB Power', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-card__price"} -->
<p class="cp-card__price"><?php echo esc_html__( '$12.50', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cp-card__meta"} -->
<p class="cp-card__meta"><?php echo esc_html__( '20 oz · 420 kcal', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__desc"} -->
<p class="cp-card__desc"><?php echo esc_html__( 'Banana, natural peanut butter, oat milk, Medjool dates, cacao nibs. Fuel for a long day.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__ingredients"} -->
<p class="cp-card__ingredients"><?php echo esc_html__( 'Banana · Natural Peanut Butter · Oat Milk · Medjool Dates · Cacao Nibs', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__contains"} -->
<p class="cp-card__contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> peanuts, oats', 'citrus-press-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__tags"} -->
<p class="cp-card__tags"><?php echo esc_html__( 'vegan · bestseller', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-card"} -->
<div class="wp-block-group cp-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cp-card__head"} -->
<div class="wp-block-group cp-card__head">
<!-- wp:heading {"level":3,"className":"cp-card__name"} -->
<h3 class="wp-block-heading cp-card__name"><?php echo esc_html__( 'Açaí Classic', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-card__price"} -->
<p class="cp-card__price"><?php echo esc_html__( '$13.50', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cp-card__meta"} -->
<p class="cp-card__meta"><?php echo esc_html__( '410 kcal', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__desc"} -->
<p class="cp-card__desc"><?php echo esc_html__( 'Organic açaí, wild blueberry, banana base. Coconut flakes, house granola, sliced banana, honey drizzle.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__ingredients"} -->
<p class="cp-card__ingredients"><?php echo esc_html__( 'Organic Açaí · Wild Blueberry · Banana · Coconut Flakes · House Granola · Honey', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__contains"} -->
<p class="cp-card__contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> oats, coconut', 'citrus-press-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__tags"} -->
<p class="cp-card__tags"><?php echo esc_html__( 'bestseller', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-card"} -->
<div class="wp-block-group cp-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cp-card__head"} -->
<div class="wp-block-group cp-card__head">
<!-- wp:heading {"level":3,"className":"cp-card__name"} -->
<h3 class="wp-block-heading cp-card__name"><?php echo esc_html__( 'Ginger Fire', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-card__price"} -->
<p class="cp-card__price"><?php echo esc_html__( '$3.50', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cp-card__meta"} -->
<p class="cp-card__meta"><?php echo esc_html__( '2 oz · 15 kcal', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__desc"} -->
<p class="cp-card__desc"><?php echo esc_html__( 'Fresh ginger, lemon, cayenne. Hot, sharp and bright.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__ingredients"} -->
<p class="cp-card__ingredients"><?php echo esc_html__( 'Fresh Ginger · Lemon · Cayenne', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__tags"} -->
<p class="cp-card__tags"><?php echo esc_html__( 'vegan · raw · bestseller', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:buttons {"className":"cp-center"} -->
<div class="wp-block-buttons cp-center">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="__PAGE_menu__"><?php echo esc_html__( 'See the full menu', 'citrus-press-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
<?php
echo citrus_press_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

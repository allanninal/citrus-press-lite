<?php
/**
 * Title: Full menu
 * Slug: citrus-press-lite/menu-full
 * Categories: citrus-press-lite
 * Description: The whole menu by category, with descriptions and prices.
 * Keywords: menu, prices, products, categories
 * Viewport Width: 1400
 *
 * @package citrus-press-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"align":"full","className":"cp-section"} -->
<div class="wp-block-group alignfull cp-section" id="menu">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'What we make', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'The Menu', 'citrus-press-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-lede-left cp-muted"} -->
<p class="cp-lede-left cp-muted"><?php echo esc_html__( 'Everything made fresh daily from organic produce wherever we can source it. Real ingredients, nothing hidden.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"placeholder":"Order cut-off (filled in from WooCommerce > Settings > Shipping > Order ahead)","className":"is-style-order-cutoff"} -->
<p class="is-style-order-cutoff"></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"default"},"tagName":"section","className":"cp-menu-section"} -->
<section class="wp-block-group cp-menu-section">
<!-- wp:heading {"level":2,"className":"cp-menu-cat"} -->
<h2 class="wp-block-heading cp-menu-cat"><?php echo esc_html__( 'Cold-Pressed Juices', 'citrus-press-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-menu-intro"} -->
<p class="cp-menu-intro"><?php echo esc_html__( 'Hydraulic cold-pressed. Bottled to order, never HPP. Best within 3 days. Keep refrigerated.', 'citrus-press-lite' ); ?></p>
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
<h3 class="wp-block-heading cp-card__name"><?php echo esc_html__( 'Citrus Surge', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-card__price"} -->
<p class="cp-card__price"><?php echo esc_html__( '$9.00', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cp-card__meta"} -->
<p class="cp-card__meta"><?php echo esc_html__( '16 oz · 130 kcal', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__desc"} -->
<p class="cp-card__desc"><?php echo esc_html__( 'Blood orange, navel orange, pink grapefruit, Meyer lemon, turmeric. Bright and tart.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__ingredients"} -->
<p class="cp-card__ingredients"><?php echo esc_html__( 'Blood Orange · Navel Orange · Grapefruit · Meyer Lemon · Turmeric', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__tags"} -->
<p class="cp-card__tags"><?php echo esc_html__( 'vegan · raw', 'citrus-press-lite' ); ?></p>
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
<h3 class="wp-block-heading cp-card__name"><?php echo esc_html__( 'Watermelon Mint', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-card__price"} -->
<p class="cp-card__price"><?php echo esc_html__( '$8.50', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cp-card__meta"} -->
<p class="cp-card__meta"><?php echo esc_html__( '16 oz · 95 kcal', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__desc"} -->
<p class="cp-card__desc"><?php echo esc_html__( 'Cold-pressed watermelon, cucumber, fresh mint, lime. Summer in a bottle.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__ingredients"} -->
<p class="cp-card__ingredients"><?php echo esc_html__( 'Watermelon · Cucumber · Fresh Mint · Lime', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__tags"} -->
<p class="cp-card__tags"><?php echo esc_html__( 'hydration · vegan · raw · new', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-card"} -->
<div class="wp-block-group cp-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cp-card__head"} -->
<div class="wp-block-group cp-card__head">
<!-- wp:heading {"level":3,"className":"cp-card__name"} -->
<h3 class="wp-block-heading cp-card__name"><?php echo esc_html__( 'Golden Hour', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-card__price"} -->
<p class="cp-card__price"><?php echo esc_html__( '$10.00', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cp-card__meta"} -->
<p class="cp-card__meta"><?php echo esc_html__( '16 oz · 145 kcal', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__desc"} -->
<p class="cp-card__desc"><?php echo esc_html__( 'Pineapple, mango, fresh turmeric, black pepper, coconut water. Sunshine in a bottle.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__ingredients"} -->
<p class="cp-card__ingredients"><?php echo esc_html__( 'Pineapple · Mango · Fresh Turmeric · Black Pepper · Coconut Water', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__contains"} -->
<p class="cp-card__contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> coconut', 'citrus-press-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__tags"} -->
<p class="cp-card__tags"><?php echo esc_html__( 'vegan · raw', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-card"} -->
<div class="wp-block-group cp-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cp-card__head"} -->
<div class="wp-block-group cp-card__head">
<!-- wp:heading {"level":3,"className":"cp-card__name"} -->
<h3 class="wp-block-heading cp-card__name"><?php echo esc_html__( 'Dark Greens', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-card__price"} -->
<p class="cp-card__price"><?php echo esc_html__( '$9.00', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cp-card__meta"} -->
<p class="cp-card__meta"><?php echo esc_html__( '16 oz · 90 kcal', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__desc"} -->
<p class="cp-card__desc"><?php echo esc_html__( 'Spinach, celery, parsley, green apple, lemon. The no-compromise green.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__ingredients"} -->
<p class="cp-card__ingredients"><?php echo esc_html__( 'Spinach · Celery · Parsley · Green Apple · Lemon', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__contains"} -->
<p class="cp-card__contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> celery', 'citrus-press-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__tags"} -->
<p class="cp-card__tags"><?php echo esc_html__( 'vegan · raw', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"tagName":"section","className":"cp-menu-section"} -->
<section class="wp-block-group cp-menu-section">
<!-- wp:heading {"level":2,"className":"cp-menu-cat"} -->
<h2 class="wp-block-heading cp-menu-cat"><?php echo esc_html__( 'Smoothies', 'citrus-press-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-menu-intro"} -->
<p class="cp-menu-intro"><?php echo esc_html__( 'Whole-blended, nothing strained out. Real fruit, no syrup, no ice cream. Protein optional.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"},"className":"cp-cards"} -->
<div class="wp-block-group cp-cards">
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
<h3 class="wp-block-heading cp-card__name"><?php echo esc_html__( 'Green Goddess', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-card__price"} -->
<p class="cp-card__price"><?php echo esc_html__( '$12.00', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cp-card__meta"} -->
<p class="cp-card__meta"><?php echo esc_html__( '20 oz · 340 kcal', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__desc"} -->
<p class="cp-card__desc"><?php echo esc_html__( 'Spinach, banana, mango, almond milk, hemp seeds, spirulina. Earthy, tropical, protein-forward.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__ingredients"} -->
<p class="cp-card__ingredients"><?php echo esc_html__( 'Spinach · Banana · Mango · Almond Milk · Hemp Seeds · Spirulina', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__contains"} -->
<p class="cp-card__contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> tree nuts', 'citrus-press-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__tags"} -->
<p class="cp-card__tags"><?php echo esc_html__( 'vegan · GF', 'citrus-press-lite' ); ?></p>
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
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"tagName":"section","className":"cp-menu-section"} -->
<section class="wp-block-group cp-menu-section">
<!-- wp:heading {"level":2,"className":"cp-menu-cat"} -->
<h2 class="wp-block-heading cp-menu-cat"><?php echo esc_html__( 'Bowls', 'citrus-press-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-menu-intro"} -->
<p class="cp-menu-intro"><?php echo esc_html__( 'Açaí, pitaya, and grain bases loaded with house-made granola, seasonal fruit, and toppings.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"},"className":"cp-cards"} -->
<div class="wp-block-group cp-cards">
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
<h3 class="wp-block-heading cp-card__name"><?php echo esc_html__( 'Pitaya Power', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-card__price"} -->
<p class="cp-card__price"><?php echo esc_html__( '$14.00', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cp-card__meta"} -->
<p class="cp-card__meta"><?php echo esc_html__( '380 kcal', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__desc"} -->
<p class="cp-card__desc"><?php echo esc_html__( 'Pink dragon fruit, mango, pineapple. Crunchy seed granola, kiwi, mango chunks, chia.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__ingredients"} -->
<p class="cp-card__ingredients"><?php echo esc_html__( 'Pitaya · Mango · Pineapple · Seed Granola · Kiwi · Chia Seeds', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__contains"} -->
<p class="cp-card__contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> oats', 'citrus-press-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__tags"} -->
<p class="cp-card__tags"><?php echo esc_html__( 'vegan · new', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-card"} -->
<div class="wp-block-group cp-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cp-card__head"} -->
<div class="wp-block-group cp-card__head">
<!-- wp:heading {"level":3,"className":"cp-card__name"} -->
<h3 class="wp-block-heading cp-card__name"><?php echo esc_html__( 'Green Machine Bowl', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-card__price"} -->
<p class="cp-card__price"><?php echo esc_html__( '$13.00', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cp-card__meta"} -->
<p class="cp-card__meta"><?php echo esc_html__( '360 kcal', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__desc"} -->
<p class="cp-card__desc"><?php echo esc_html__( 'Spinach, pineapple, banana, coconut base. Hemp seeds, fresh berries, drizzle of almond butter.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__ingredients"} -->
<p class="cp-card__ingredients"><?php echo esc_html__( 'Spinach · Pineapple · Banana · Coconut Milk · Hemp Seeds · Almond Butter', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__contains"} -->
<p class="cp-card__contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> tree nuts, coconut', 'citrus-press-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__tags"} -->
<p class="cp-card__tags"><?php echo esc_html__( 'vegan · GF', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-card"} -->
<div class="wp-block-group cp-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cp-card__head"} -->
<div class="wp-block-group cp-card__head">
<!-- wp:heading {"level":3,"className":"cp-card__name"} -->
<h3 class="wp-block-heading cp-card__name"><?php echo esc_html__( 'Quinoa Fuel Bowl', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-card__price"} -->
<p class="cp-card__price"><?php echo esc_html__( '$14.50', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cp-card__meta"} -->
<p class="cp-card__meta"><?php echo esc_html__( '490 kcal', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__desc"} -->
<p class="cp-card__desc"><?php echo esc_html__( 'Warm quinoa, roasted sweet potato, avocado, edamame, radish, lemon-tahini, pumpkin seeds.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__ingredients"} -->
<p class="cp-card__ingredients"><?php echo esc_html__( 'Quinoa · Sweet Potato · Avocado · Edamame · Radish · Lemon-Tahini · Pumpkin Seeds', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__contains"} -->
<p class="cp-card__contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> sesame, soy', 'citrus-press-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__tags"} -->
<p class="cp-card__tags"><?php echo esc_html__( 'vegan · GF', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"tagName":"section","className":"cp-menu-section"} -->
<section class="wp-block-group cp-menu-section">
<!-- wp:heading {"level":2,"className":"cp-menu-cat"} -->
<h2 class="wp-block-heading cp-menu-cat"><?php echo esc_html__( 'Juice Shots', 'citrus-press-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-menu-intro"} -->
<p class="cp-menu-intro"><?php echo esc_html__( '2 oz concentrated boosts. Taken solo or added to any juice or smoothie. Best within 3 days. Keep refrigerated.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"},"className":"cp-cards"} -->
<div class="wp-block-group cp-cards">
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
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-card"} -->
<div class="wp-block-group cp-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cp-card__head"} -->
<div class="wp-block-group cp-card__head">
<!-- wp:heading {"level":3,"className":"cp-card__name"} -->
<h3 class="wp-block-heading cp-card__name"><?php echo esc_html__( 'Turmeric Gold', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-card__price"} -->
<p class="cp-card__price"><?php echo esc_html__( '$3.50', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cp-card__meta"} -->
<p class="cp-card__meta"><?php echo esc_html__( '2 oz · 25 kcal', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__desc"} -->
<p class="cp-card__desc"><?php echo esc_html__( 'Fresh turmeric, ginger, black pepper, orange, coconut oil. Warm and peppery.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__ingredients"} -->
<p class="cp-card__ingredients"><?php echo esc_html__( 'Fresh Turmeric · Ginger · Black Pepper · Orange · Coconut Oil', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__contains"} -->
<p class="cp-card__contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> coconut', 'citrus-press-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__tags"} -->
<p class="cp-card__tags"><?php echo esc_html__( 'vegan · raw', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-card"} -->
<div class="wp-block-group cp-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cp-card__head"} -->
<div class="wp-block-group cp-card__head">
<!-- wp:heading {"level":3,"className":"cp-card__name"} -->
<h3 class="wp-block-heading cp-card__name"><?php echo esc_html__( 'Wheatgrass Pure', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-card__price"} -->
<p class="cp-card__price"><?php echo esc_html__( '$4.00', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cp-card__meta"} -->
<p class="cp-card__meta"><?php echo esc_html__( '2 oz · 10 kcal', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__desc"} -->
<p class="cp-card__desc"><?php echo esc_html__( 'Fresh-cut wheatgrass pressed to order. Grassy and sweet.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__ingredients"} -->
<p class="cp-card__ingredients"><?php echo esc_html__( 'Fresh Wheatgrass', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__tags"} -->
<p class="cp-card__tags"><?php echo esc_html__( 'vegan · raw', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"cp-card"} -->
<div class="wp-block-group cp-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cp-card__head"} -->
<div class="wp-block-group cp-card__head">
<!-- wp:heading {"level":3,"className":"cp-card__name"} -->
<h3 class="wp-block-heading cp-card__name"><?php echo esc_html__( 'Aloe Calm', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cp-card__price"} -->
<p class="cp-card__price"><?php echo esc_html__( '$3.50', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cp-card__meta"} -->
<p class="cp-card__meta"><?php echo esc_html__( '2 oz · 8 kcal', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__desc"} -->
<p class="cp-card__desc"><?php echo esc_html__( 'Cold-pressed aloe vera, cucumber, mint. Cool and mild.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__ingredients"} -->
<p class="cp-card__ingredients"><?php echo esc_html__( 'Aloe Vera · Cucumber · Mint', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cp-card__tags"} -->
<p class="cp-card__tags"><?php echo esc_html__( 'hydration · vegan · raw', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cp-muted cp-allergens"} -->
<p class="cp-muted cp-allergens"><?php echo esc_html__( 'Our kitchen handles peanuts, tree nuts (including almond), coconut, sesame, soy, oats and celery, so we cannot promise any item is free of them, even those marked vegan or gluten free. Please tell us about any allergy before you order.', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<?php
echo citrus_press_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

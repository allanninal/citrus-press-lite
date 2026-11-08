<?php
/**
 * Title: Gallery
 * Slug: citrus-press-lite/gallery
 * Categories: citrus-press-lite
 * Description: A grid of captioned photos.
 * Keywords: gallery, photos, images
 * Viewport Width: 1400
 *
 * @package citrus-press-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","backgroundColor":"orange-tint","className":"cp-section"} -->
<section class="wp-block-group has-orange-tint-background-color has-background alignfull cp-section" id="gallery">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow","textColor":"orange"} -->
<p class="has-text-align-center has-orange-color has-text-color is-style-eyebrow"><?php echo esc_html__( 'From the bar', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'What it looks like.', 'citrus-press-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"},"className":"cp-gallery"} -->
<div class="wp-block-group cp-gallery">
<!-- wp:image {"id":"__ID_bottles__","sizeSlug":"large","linkDestination":"none","className":"cp-photo"} -->
<figure class="wp-block-image size-large cp-photo"><img src="__SRC_bottles__" alt="<?php echo esc_attr__( 'Rows of fresh juice in glass jars with straws, lined up on a stainless steel counter', 'citrus-press-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_bottles__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Morning press', 'citrus-press-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_citrus__","sizeSlug":"large","linkDestination":"none","className":"cp-photo"} -->
<figure class="wp-block-image size-large cp-photo"><img src="__SRC_citrus__" alt="<?php echo esc_attr__( 'Hands holding a vibrant orange citrus surge juice against a white wall, glistening condensation on the glass', 'citrus-press-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_citrus__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Citrus Surge', 'citrus-press-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_acai__","sizeSlug":"large","linkDestination":"none","className":"cp-photo"} -->
<figure class="wp-block-image size-large cp-photo"><img src="__SRC_acai__" alt="<?php echo esc_attr__( 'An açaí bowl topped with granola, sliced banana, kiwi, and a drizzle of honey on a light wooden surface', 'citrus-press-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_acai__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Açaí Classic', 'citrus-press-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_ingredients__","sizeSlug":"large","linkDestination":"none","className":"cp-photo"} -->
<figure class="wp-block-image size-large cp-photo"><img src="__SRC_ingredients__" alt="<?php echo esc_attr__( 'A flat lay of fresh ginger, turmeric root, lemons, and cayenne peppers on a white marble surface', 'citrus-press-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_ingredients__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Our ingredients', 'citrus-press-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_prep__","sizeSlug":"large","linkDestination":"none","className":"cp-photo"} -->
<figure class="wp-block-image size-large cp-photo"><img src="__SRC_prep__" alt="<?php echo esc_attr__( 'A blueberry smoothie in a glass beside slices of blood orange and mint', 'citrus-press-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_prep__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Made to order', 'citrus-press-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_exterior__","sizeSlug":"large","linkDestination":"none","className":"cp-photo"} -->
<figure class="wp-block-image size-large cp-photo"><img src="__SRC_exterior__" alt="<?php echo esc_attr__( 'The exterior of Pressed & Nourished on NW 23rd Ave, glass frontage with plants, warm morning light', 'citrus-press-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_exterior__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'NW 23rd Ave', 'citrus-press-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"align":"center","className":"cp-muted"} -->
<p class="has-text-align-center cp-muted"><?php echo wp_kses_post( __( 'Follow us on <a href="https://instagram.com/pressednourished">@pressednourished</a> for daily inspo.', 'citrus-press-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
<?php
echo citrus_press_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

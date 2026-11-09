<?php
/**
 * Title: Visit us
 * Slug: citrus-press-lite/visit
 * Categories: citrus-press-lite
 * Description: Address, contact details, directions and opening hours.
 * Keywords: visit, hours, address, location, contact
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
<section class="wp-block-group has-surface-2-background-color has-background alignfull cp-section" id="location">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'Come see us', 'citrus-press-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Find Us', 'citrus-press-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:columns {"className":"cp-visit"} -->
<div class="wp-block-columns cp-visit">
<!-- wp:column {"className":"cp-card"} -->
<div class="wp-block-column cp-card">
<!-- wp:heading {"level":3,"className":"cp-card__title"} -->
<h3 class="wp-block-heading cp-card__title"><?php echo esc_html__( 'Address', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( __( '<strong>Pressed &amp; Nourished</strong><br>1428 NW 23rd Ave, Portland, OR 97210<br><a href="tel:+15035550184">+1 (503) 555-0184</a><br><a href="mailto:hello@pressedandnourished.example">hello@pressedandnourished.example</a>', 'citrus-press-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://maps.google.com/?q=1428+NW+23rd+Ave+Portland+OR"><?php echo esc_html__( 'Get directions', 'citrus-press-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
<!-- wp:column {"className":"cp-card"} -->
<div class="wp-block-column cp-card">
<!-- wp:heading {"level":3,"className":"cp-card__title"} -->
<h3 class="wp-block-heading cp-card__title"><?php echo esc_html__( 'Hours', 'citrus-press-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:table {"className":"cp-hours"} -->
<figure class="wp-block-table cp-hours"><table class="has-fixed-layout"><tbody><tr><td>Mon–Fri</td><td>7:00 AM – 6:00 PM · Early morning cold-press ready by 7 AM</td></tr><tr><td>Saturday</td><td>8:00 AM – 5:00 PM · Weekly farmers-market blend specials</td></tr><tr><td>Sunday</td><td>9:00 AM – 4:00 PM · Slow start, good vibes</td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- wp:paragraph {"placeholder":"Open now status (filled in from the hours above)","className":"is-style-open-status"} -->
<p class="is-style-open-status"></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<?php
echo citrus_press_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

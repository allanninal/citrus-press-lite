<?php
/**
 * Food shop extras: section edges and textures, a menu board, diet chips, a
 * live "Open now" line, an order cut-off line and a schedule list that marks
 * what is done and what is next.
 *
 * Shipped only in themes with "food" in themes.config.json. Block styles
 * only, no custom blocks: every one is a class on a core block, so content
 * stays plain core blocks if the theme is ever switched off. The one script,
 * assets/js/open-status.js, loads only on a page that has one of the live
 * styles (or a product with a notice period, inc/product-details.php).
 *
 * @package citrus-press-lite
 */

defined( 'ABSPATH' ) || exit;

add_action( 'init', 'citrus_press_lite_food_block_styles' );

/**
 * The block styles, so the owner can apply them in the editor too.
 */
function citrus_press_lite_food_block_styles() {
	$styles = array(
		'core/group'     => array(
			'edge-wave'         => __( 'Wavy bottom edge', 'citrus-press-lite' ),
			'edge-scallop'      => __( 'Scalloped bottom edge', 'citrus-press-lite' ),
			'edge-zigzag'       => __( 'Zigzag bottom edge', 'citrus-press-lite' ),
			'texture-dots'      => __( 'Dotted background', 'citrus-press-lite' ),
			'texture-sprinkles' => __( 'Sprinkles background', 'citrus-press-lite' ),
			'menu-board'        => __( 'Menu board', 'citrus-press-lite' ),
		),
		'core/list'      => array(
			'chips'    => __( 'Chips', 'citrus-press-lite' ),
			'schedule' => __( 'Schedule (marks done and next)', 'citrus-press-lite' ),
		),
		'core/paragraph' => array(
			'open-status'  => __( 'Open now status', 'citrus-press-lite' ),
			'order-cutoff' => __( 'Order cut-off', 'citrus-press-lite' ),
		),
	);
	foreach ( $styles as $block => $list ) {
		foreach ( $list as $name => $label ) {
			register_block_style(
				$block,
				array(
					'name'  => $name,
					'label' => $label,
				)
			);
		}
	}
}

add_action( 'init', 'citrus_press_lite_food_register_script' );

/**
 * Register the open-status script; it is enqueued by the paragraph that needs it.
 * On init, not wp_enqueue_scripts: a block theme renders its template before
 * wp_head, so on that hook the paragraph found no script to attach to, and the
 * line stayed empty on every page (caught by the gate, 2026-11-07).
 */
function citrus_press_lite_food_register_script() {
	wp_register_script(
		'citrus-press-open-status',
		CITRUS_PRESS_LITE_URI . '/assets/js/open-status.js',
		array(),
		CITRUS_PRESS_LITE_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}

add_filter( 'render_block_core/paragraph', 'citrus_press_lite_food_live_block', 10, 2 );
add_filter( 'render_block_core/list', 'citrus_press_lite_food_live_block', 10, 2 );

/**
 * A block with one of the live styles: load the script, once.
 *
 * @param string              $html  Rendered block.
 * @param array<string,mixed> $block The block.
 * @return string
 */
function citrus_press_lite_food_live_block( $html, $block ) {
	if ( preg_match( '/\\bis-style-(open-status|order-cutoff|schedule)\\b/', (string) ( $block['attrs']['className'] ?? '' ) ) ) {
		citrus_press_lite_food_live_script();
	}
	return $html;
}

/**
 * Enqueue the live script, once, with the shop's time zone, the dates it is
 * closed, the order-ahead rules when WooCommerce has them on, and the
 * sentences it writes. Every line it fills stays empty (and hidden) when it
 * cannot work out an honest answer.
 */
function citrus_press_lite_food_live_script() {
	if ( wp_script_is( 'citrus-press-open-status', 'enqueued' ) ) {
		return;
	}
	// The order rules come from the shop's order-ahead module, when there is one.
	$tz    = wp_timezone();
	$ahead = apply_filters( 'citrus_press_lite_food_order_rules', null );
	preg_match_all( '/\\d{4}-\\d{2}-\\d{2}/', (string) ( $ahead['blocked'] ?? '' ), $closed );
	wp_add_inline_script(
		'citrus-press-open-status',
		'window.citrus_pressOpenStatus = ' . wp_json_encode(
			array(
				// An IANA name when the site has one, else a fixed offset in minutes.
				'tz'        => str_contains( $tz->getName(), '/' ) ? $tz->getName() : '',
				'offset'    => (int) round( $tz->getOffset( new DateTimeImmutable( 'now', $tz ) ) / 60 ),
				// Holidays and days off (WooCommerce > Settings > Shipping > Order ahead).
				'closed'    => $closed[0],
				// The order rules the checkout enforces, so the cut-off line and the
				// earliest pickup day say the same as the day list at checkout.
				'ahead'     => $ahead && $ahead['enabled'] ? array(
					'closedDays' => $ahead['closed'],
					'lead'       => $ahead['lead'],
					'cutoff'     => $ahead['cutoff'],
				) : null,
				/* translators: %s: closing time, as written in the hours. */
				'until'     => __( 'Open now until %s', 'citrus-press-lite' ),
				/* translators: %s: opening time, as written in the hours. */
				'today'     => __( 'Closed now. Opens today at %s', 'citrus-press-lite' ),
				/* translators: %s: opening time, as written in the hours. */
				'tomorrow'  => __( 'Closed now. Opens tomorrow at %s', 'citrus-press-lite' ),
				/* translators: 1: day of the week, 2: opening time, as written in the hours. */
				'day'       => __( 'Closed now. Opens %1$s at %2$s', 'citrus-press-lite' ),
				/* translators: 1: cut-off time, 2: "today", "tomorrow" or a day of the week. */
				'orderBy'   => __( 'Order by %1$s for pickup %2$s', 'citrus-press-lite' ),
				/* translators: %s: "today", "tomorrow" or a day of the week. */
				'orderNow'  => __( 'Order now for pickup %s', 'citrus-press-lite' ),
				'wordToday' => __( 'today', 'citrus-press-lite' ),
				'wordTmrw'  => __( 'tomorrow', 'citrus-press-lite' ),
				/* translators: %s: day of the week. */
				'wordOn'    => __( 'on %s', 'citrus-press-lite' ),
				'done'      => __( 'Out now', 'citrus-press-lite' ),
				'next'      => __( 'Next', 'citrus-press-lite' ),
			)
		) . ';',
		'before'
	);
	wp_enqueue_script( 'citrus-press-open-status' );
}

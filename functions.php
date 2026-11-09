<?php
/**
 * Citrus Press Lite — theme bootstrap.
 *
 * The free edition of Citrus Press, made by tools/build-lite.mjs from the paid
 * build. Edit the generator, not this file.
 *
 * @package citrus-press-lite
 */

defined( 'ABSPATH' ) || exit;

define( 'CITRUS_PRESS_LITE_VERSION', '1.1.0' );
define( 'CITRUS_PRESS_LITE_DIR', get_template_directory() );
define( 'CITRUS_PRESS_LITE_URI', get_template_directory_uri() );

require CITRUS_PRESS_LITE_DIR . '/inc/setup.php';
require CITRUS_PRESS_LITE_DIR . '/inc/media.php';
require CITRUS_PRESS_LITE_DIR . '/inc/food.php';
require CITRUS_PRESS_LITE_DIR . '/inc/lite.php';
require CITRUS_PRESS_LITE_DIR . '/inc/updater.php';

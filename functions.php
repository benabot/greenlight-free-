<?php
/**
 * Theme bootstrap.
 *
 * @package GreenlightFree
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$greenlight_free_autoload = __DIR__ . '/vendor/autoload.php';

if ( is_readable( $greenlight_free_autoload ) ) {
	require $greenlight_free_autoload;
} else {
	require __DIR__ . '/inc/App.php';
}

/**
 * Stops WordPress from enqueueing front-end emoji assets.
 *
 * @return void
 */
function greenlight_free_disable_front_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	add_filter( 'emoji_svg_url', '__return_false' );
}

add_action( 'after_setup_theme', 'greenlight_free_disable_front_emojis' );

GreenlightFree\Theme\App::boot();

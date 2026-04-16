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

GreenlightFree\Theme\App::boot();

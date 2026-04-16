<?php
/**
 * Asset loading.
 *
 * @package GreenlightFree
 */

namespace GreenlightFree\Theme;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueues the minimal theme stylesheet.
 */
final class Assets {

	/**
	 * Registers WordPress hooks.
	 *
	 * @return void
	 */
	public static function register() {
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'enqueue_stylesheet' ) );
	}

	/**
	 * Enqueues the front-end stylesheet.
	 *
	 * @return void
	 */
	public static function enqueue_stylesheet() {
		$relative_path = '/assets/css/screen.css';
		$absolute_path = get_theme_file_path( $relative_path );

		if ( ! is_readable( $absolute_path ) ) {
			return;
		}

		wp_enqueue_style(
			'greenlight-free-screen',
			get_theme_file_uri( $relative_path ),
			array(),
			(string) filemtime( $absolute_path )
		);
	}
}

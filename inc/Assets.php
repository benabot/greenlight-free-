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
 * Enqueues the minimal theme stylesheets.
 */
final class Assets {

	/**
	 * Registers WordPress hooks.
	 *
	 * @return void
	 */
	public static function register() {
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'enqueue_stylesheets' ) );
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'disable_frontend_heartbeat' ), 100 );
	}

	/**
	 * Enqueues only the front-end styles needed for the current template.
	 *
	 * @return void
	 */
	public static function enqueue_stylesheets() {
		$is_static_front_page = is_front_page() && ! is_home();

		self::enqueue_style_file( 'greenlight-free-base', '/assets/css/base.css' );

		if ( is_home() || is_archive() ) {
			self::enqueue_style_file(
				'greenlight-free-listing',
				'/assets/css/listing.css',
				array( 'greenlight-free-base' )
			);
		}

		if ( is_page() || is_single() ) {
			self::enqueue_style_file(
				'greenlight-free-singular',
				'/assets/css/singular.css',
				array( 'greenlight-free-base' )
			);
		}

		if ( $is_static_front_page ) {
			self::enqueue_style_file(
				'greenlight-free-front-page',
				'/assets/css/front-page.css',
				array( 'greenlight-free-base', 'greenlight-free-singular' )
			);
		}
	}

	/**
	 * Enqueues a theme style file when it exists.
	 *
	 * @param string   $handle        WordPress style handle.
	 * @param string   $relative_path Relative path from theme root.
	 * @param string[] $dependencies  Optional stylesheet dependencies.
	 * @return void
	 */
	private static function enqueue_style_file( $handle, $relative_path, $dependencies = array() ) {
		$absolute_path = get_theme_file_path( $relative_path );

		if ( ! is_readable( $absolute_path ) ) {
			return;
		}

		wp_enqueue_style(
			$handle,
			get_theme_file_uri( $relative_path ),
			$dependencies,
			(string) filemtime( $absolute_path )
		);
	}

	/**
	 * Disables Heartbeat on the public-facing site.
	 *
	 * @return void
	 */
	public static function disable_frontend_heartbeat() {
		wp_deregister_script( 'heartbeat' );
	}
}

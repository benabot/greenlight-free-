<?php
/**
 * Main application bootstrap.
 *
 * @package GreenlightFree
 */

namespace GreenlightFree\Theme;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Boots the theme services.
 */
final class App {

	/**
	 * Tracks whether the theme has already booted.
	 *
	 * @var bool
	 */
	private static $booted = false;

	/**
	 * Boots theme services once.
	 *
	 * @return void
	 */
	public static function boot() {
		if ( self::$booted ) {
			return;
		}

		self::load_dependencies();

		Setup::register();
		Assets::register();
		Accessibility::register();
		Seo::register();

		self::$booted = true;
	}

	/**
	 * Loads service classes when Composer autoload is unavailable.
	 *
	 * @return void
	 */
	private static function load_dependencies() {
		$files = array(
			'Setup.php',
			'Assets.php',
			'Accessibility.php',
			'Seo.php',
		);

		foreach ( $files as $file ) {
			$path = __DIR__ . '/' . $file;

			if ( is_readable( $path ) ) {
				require_once $path;
			}
		}
	}
}

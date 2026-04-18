<?php
/**
 * Accessibility hooks.
 *
 * @package GreenlightFree
 */

namespace GreenlightFree\Theme;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Keeps block-theme accessibility hooks centralized.
 */
final class Accessibility {

	/**
	 * Registers WordPress hooks.
	 *
	 * @return void
	 */
	public static function register() {
		// WordPress core already injects the skip link for block themes.
	}
}

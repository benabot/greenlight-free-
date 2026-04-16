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
 * Adds lightweight accessibility enhancements.
 */
final class Accessibility {

	/**
	 * Registers WordPress hooks.
	 *
	 * @return void
	 */
	public static function register() {
		add_action( 'wp_body_open', array( __CLASS__, 'render_skip_link' ) );
	}

	/**
	 * Outputs the skip link before the main content.
	 *
	 * @return void
	 */
	public static function render_skip_link() {
		printf(
			'<a class="skip-link" href="#main-content">%s</a>',
			esc_html__( 'Aller au contenu', 'greenlight-free' )
		);
	}
}

<?php
/**
 * Theme setup hooks.
 *
 * @package GreenlightFree
 */

namespace GreenlightFree\Theme;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Registers theme supports and editor integration.
 */
final class Setup {

	/**
	 * Registers WordPress hooks.
	 *
	 * @return void
	 */
	public static function register() {
		add_action( 'after_setup_theme', array( __CLASS__, 'configure_theme' ) );
		add_action( 'init', array( __CLASS__, 'register_pattern_categories' ) );
	}

	/**
	 * Configures the theme supports.
	 *
	 * @return void
	 */
	public static function configure_theme() {
		load_theme_textdomain( 'greenlight-free', get_theme_file_path( '/languages' ) );

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );
		add_theme_support(
			'html5',
			array(
				'caption',
				'comment-form',
				'comment-list',
				'gallery',
				'script',
				'search-form',
				'style',
			)
		);

		add_post_type_support( 'page', 'excerpt' );

		add_editor_style( 'assets/css/screen.css' );
	}

	/**
	 * Registers a small pattern category for theme-owned patterns.
	 *
	 * @return void
	 */
	public static function register_pattern_categories() {
		if ( ! function_exists( 'register_block_pattern_category' ) ) {
			return;
		}

		register_block_pattern_category(
			'greenlight-free',
			array(
				'label' => __( 'Greenlight Free', 'greenlight-free' ),
			)
		);
	}
}

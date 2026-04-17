<?php
/**
 * Title: Front Panels
 * Slug: greenlight-free/front-panels
 * Categories: greenlight-free
 * Inserter: false
 *
 * @package GreenlightFree
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"className":"front-panels","layout":{"type":"constrained"}} -->
<div class="wp-block-group front-panels">
	<!-- wp:group {"className":"manifesto-panel","layout":{"type":"constrained"}} -->
	<div class="wp-block-group manifesto-panel">
		<!-- wp:paragraph {"className":"eyebrow","fontSize":"xs"} -->
		<p class="eyebrow"><?php esc_html_e( 'Our Philosophy', 'greenlight-free' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"fontSize":"xl"} -->
		<h2 class="wp-block-heading"><?php esc_html_e( 'Digital items that age like fine linen.', 'greenlight-free' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"front-link","fontSize":"xs"} -->
		<p class="front-link"><a href="#main-content"><?php esc_html_e( 'Explore our manifesto', 'greenlight-free' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"capability-card front-panel--editorial","layout":{"type":"constrained"}} -->
	<div class="wp-block-group capability-card front-panel--editorial">
		<!-- wp:paragraph {"className":"eyebrow","fontSize":"xs"} -->
		<p class="eyebrow"><?php esc_html_e( 'Editorial Authority', 'greenlight-free' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'Carefully curated long-form content that respects your time and attention span.', 'greenlight-free' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"capability-card capability-card--accent front-panel--ethical","layout":{"type":"constrained"}} -->
	<div class="wp-block-group capability-card capability-card--accent front-panel--ethical">
		<!-- wp:paragraph {"className":"eyebrow","fontSize":"xs"} -->
		<p class="eyebrow"><?php esc_html_e( 'Ethical Architecture', 'greenlight-free' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'Building tools and frameworks that minimize data transfer and energy consumption.', 'greenlight-free' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

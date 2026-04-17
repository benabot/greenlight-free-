<?php
/**
 * Title: RSS CTA Centered
 * Slug: greenlight-free/rss-cta-centered
 * Categories: greenlight-free
 * Inserter: false
 *
 * @package GreenlightFree
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$greenlight_free_rss_url = get_feed_link();
?>
<!-- wp:group {"tagName":"section","className":"feed-cta feed-cta--centered","layout":{"type":"constrained"}} -->
<section class="wp-block-group feed-cta feed-cta--centered">
	<!-- wp:heading {"level":2} -->
	<h2 class="wp-block-heading"><?php esc_html_e( 'Follow via RSS.', 'greenlight-free' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Subscribe with your feed reader and keep the site free of signup forms, trackers and extra scripts.', 'greenlight-free' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $greenlight_free_rss_url ); ?>"><?php esc_html_e( 'Open RSS feed', 'greenlight-free' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</section>
<!-- /wp:group -->

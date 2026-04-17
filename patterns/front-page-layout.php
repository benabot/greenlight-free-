<?php
/**
 * Title: Front Page Layout
 * Slug: greenlight-free/front-page-layout
 * Categories: greenlight-free
 * Inserter: false
 *
 * @package GreenlightFree
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"className":"page-hero editorial-front","layout":{"type":"constrained"}} -->
<div class="wp-block-group page-hero editorial-front">
	<!-- wp:group {"className":"hero-lead","layout":{"type":"constrained"}} -->
	<div class="wp-block-group hero-lead">
		<!-- wp:post-title {"level":1,"fontSize":"display"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"hero-body","layout":{"type":"constrained"}} -->
	<div class="wp-block-group hero-body">
		<!-- wp:post-excerpt {"moreText":"","excerptLength":30,"className":"hero-description"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","anchor":"main-content","className":"site-main editorial-front__main","layout":{"type":"constrained"}} -->
<main id="main-content" class="wp-block-group site-main editorial-front__main">
	<!-- wp:pattern {"slug":"greenlight-free/front-panels"} /-->

	<!-- wp:post-featured-image {"isLink":false,"sizeSlug":"large","className":"front-hero-media"} /-->

	<!-- wp:group {"className":"front-hero-quote","layout":{"type":"constrained"}} -->
	<div class="wp-block-group front-hero-quote">
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'Nature does not hurry, yet everything is accomplished. Our digital world should reflect this timeless wisdom.', 'greenlight-free' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:post-content {"className":"page-content"} /-->

	<!-- wp:pattern {"slug":"greenlight-free/rss-cta-centered"} /-->
</main>
<!-- /wp:group -->

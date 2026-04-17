<?php
/**
 * Title: Page Main
 * Slug: greenlight-free/page-main
 * Categories: greenlight-free
 * Inserter: false
 *
 * @package GreenlightFree
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"main","anchor":"main-content","className":"site-main editorial-page","layout":{"type":"constrained"}} -->
<main id="main-content" class="wp-block-group site-main editorial-page">
	<!-- wp:group {"tagName":"article","className":"entry entry--page","layout":{"type":"constrained"}} -->
	<article class="wp-block-group entry entry--page">
		<!-- wp:group {"className":"page-hero","layout":{"type":"constrained"}} -->
		<div class="wp-block-group page-hero">
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

		<!-- wp:post-featured-image {"sizeSlug":"large","className":"page-hero-media"} /-->
		<!-- wp:post-content {"className":"entry-content page-content"} /-->
	</article>
	<!-- /wp:group -->

	<!-- wp:pattern {"slug":"greenlight-free/rss-cta-centered"} /-->
</main>
<!-- /wp:group -->

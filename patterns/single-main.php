<?php
/**
 * Title: Single Main
 * Slug: greenlight-free/single-main
 * Categories: greenlight-free
 * Inserter: false
 *
 * @package GreenlightFree
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"main","anchor":"main-content","className":"site-main editorial-single","layout":{"type":"constrained"}} -->
<main id="main-content" class="wp-block-group site-main editorial-single">
	<!-- wp:group {"tagName":"article","className":"entry entry--single","layout":{"type":"constrained"}} -->
	<article class="wp-block-group entry entry--single">
		<!-- wp:group {"className":"entry-header","layout":{"type":"constrained"}} -->
		<div class="wp-block-group entry-header">
			<!-- wp:post-terms {"term":"category","className":"entry-category-pill"} /-->
			<!-- wp:post-title {"level":1,"fontSize":"display"} /-->

			<!-- wp:group {"className":"entry-meta","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center","flexWrap":"wrap"}} -->
			<div class="wp-block-group entry-meta">
				<!-- wp:post-author-name {"className":"entry-author"} /-->
				<!-- wp:post-date {"className":"entry-date"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:post-featured-image {"sizeSlug":"large","className":"entry-hero-media"} /-->
		<!-- wp:post-excerpt {"moreText":"","excerptLength":40,"className":"entry-intro"} /-->
		<!-- wp:post-content {"className":"entry-content"} /-->
		<!-- wp:post-terms {"term":"post_tag","className":"entry-tags"} /-->
	</article>
	<!-- /wp:group -->

	<!-- wp:pattern {"slug":"greenlight-free/rss-cta-centered"} /-->
</main>
<!-- /wp:group -->

<?php
/**
 * Title: Archive Main
 * Slug: greenlight-free/archive-main
 * Categories: greenlight-free
 * Inserter: false
 *
 * @package GreenlightFree
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"main","anchor":"main-content","className":"site-main editorial-archive","layout":{"type":"constrained"}} -->
<main id="main-content" class="wp-block-group site-main editorial-archive">
	<!-- wp:group {"className":"archive-intro","layout":{"type":"constrained"}} -->
	<div class="wp-block-group archive-intro">
		<!-- wp:group {"className":"archive-intro-lead","layout":{"type":"constrained"}} -->
		<div class="wp-block-group archive-intro-lead">
			<!-- wp:paragraph {"className":"eyebrow","fontSize":"xs"} -->
			<p class="eyebrow"><?php esc_html_e( 'Archive Journal', 'greenlight-free' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:query-title {"type":"archive","fontSize":"display"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"archive-intro-body","layout":{"type":"constrained"}} -->
		<div class="wp-block-group archive-intro-body">
			<!-- wp:paragraph {"className":"archive-note"} -->
			<p class="archive-note"><?php esc_html_e( 'A slow index of essays and field notes.', 'greenlight-free' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:term-description {"className":"archive-note"} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"archive-stream","layout":{"type":"default"}} -->
	<div class="wp-block-query archive-stream">
		<!-- wp:post-template -->
		<!-- wp:group {"tagName":"article","className":"entry entry--archive","layout":{"type":"constrained"}} -->
		<article class="wp-block-group entry entry--archive">
			<!-- wp:post-featured-image {"isLink":true,"sizeSlug":"medium_large","className":"entry-media"} /-->

			<!-- wp:group {"className":"entry-body","layout":{"type":"constrained"}} -->
			<div class="wp-block-group entry-body">
				<!-- wp:group {"className":"entry-header","layout":{"type":"constrained"}} -->
				<div class="wp-block-group entry-header">
					<!-- wp:group {"className":"entry-label","layout":{"type":"flex","verticalAlignment":"center","flexWrap":"wrap"}} -->
					<div class="wp-block-group entry-label">
						<!-- wp:post-terms {"term":"category","className":"entry-category"} /-->
						<!-- wp:post-date /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:post-title {"isLink":true,"level":2,"className":"entry-title"} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:post-excerpt {"moreText":"Read file","excerptLength":18,"className":"entry-summary"} /-->
			</div>
			<!-- /wp:group -->
		</article>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-pagination {"className":"pagination","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
		<!-- wp:query-pagination-previous {"label":"Previous"} /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next {"label":"Next"} /-->
		<!-- /wp:query-pagination -->

		<!-- wp:query-no-results -->
		<!-- wp:pattern {"slug":"greenlight-free/no-results"} /-->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</main>
<!-- /wp:group -->

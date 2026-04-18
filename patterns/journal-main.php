<?php
/**
 * Title: Journal Main
 * Slug: greenlight-free/journal-main
 * Categories: greenlight-free
 * Inserter: false
 *
 * @package GreenlightFree
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"main","anchor":"main-content","className":"site-main editorial-index","layout":{"type":"constrained"}} -->
<main id="main-content" class="wp-block-group site-main editorial-index">
	<!-- wp:group {"className":"archive-intro","layout":{"type":"constrained"}} -->
	<div class="wp-block-group archive-intro">
		<!-- wp:group {"className":"archive-intro-lead","layout":{"type":"constrained"}} -->
		<div class="wp-block-group archive-intro-lead">
			<!-- wp:heading {"level":1,"className":"home-heading","fontSize":"display"} -->
			<h1 class="wp-block-heading home-heading"><?php esc_html_e( 'The Digital Lithograph.', 'greenlight-free' ); ?></h1>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"archive-intro-body","layout":{"type":"constrained"}} -->
		<div class="wp-block-group archive-intro-body">
			<!-- wp:paragraph {"className":"archive-lead"} -->
			<p class="archive-lead"><?php esc_html_e( 'Exploring the intersection of permanence and digital ecology. A journal dedicated to lasting ideas and low-carbon design.', 'greenlight-free' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"editorial-stream","layout":{"type":"default"}} -->
	<div class="wp-block-query editorial-stream">
		<!-- wp:post-template -->
		<!-- wp:group {"tagName":"article","className":"entry entry--stream","layout":{"type":"constrained"}} -->
		<article class="wp-block-group entry entry--stream">
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

				<!-- wp:post-excerpt {"excerptLength":24,"className":"entry-summary"} /-->
			</div>
			<!-- /wp:group -->
		</article>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-pagination {"className":"pagination","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->

		<!-- wp:query-no-results -->
		<!-- wp:pattern {"slug":"greenlight-free/no-results"} /-->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->

	<!-- wp:pattern {"slug":"greenlight-free/rss-cta-centered"} /-->
</main>
<!-- /wp:group -->

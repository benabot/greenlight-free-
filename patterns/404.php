<?php
/**
 * Title: 404 Content
 * Slug: greenlight-free/404
 * Categories: greenlight-free
 * Inserter: false
 *
 * @package GreenlightFree
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:heading {"level":1,"fontSize":"xl"} -->
<h1 class="wp-block-heading has-xl-font-size"><?php esc_html_e( 'Page introuvable', 'greenlight-free' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'La page demandee n\'existe pas ou n\'est plus disponible.', 'greenlight-free' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"showLabel":false,"buttonPosition":"button-inside","buttonUseIcon":true} /-->

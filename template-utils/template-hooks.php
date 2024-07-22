<?php
/**
 * Template hooks
 *
 * @package michallukas
 */

/**
 * Header
 *
 * @see  site_navigation_content()
 * @see  site_branding_content()
 */
add_action( 'michallukas_header', 'site_branding_content' );
add_action( 'michallukas_header', 'site_navigation_content' );

/**
 * Footer
 *
 * @see  michallukas_footer_content()
 */
add_action('michallukas_footer', 'michallukas_footer_content');
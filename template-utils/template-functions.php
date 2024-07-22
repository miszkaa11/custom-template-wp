<?php
/**
 * Template functions
 *
 * @package michallukas
 */

/**
 * Navigation
 */
if ( ! function_exists( 'site_navigation_content' ) ) {
    function site_navigation_content() {
    ?>
        <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'Primary',
                )
            );
            ?>
        </nav>
    <?php
    }
}

/**
 * Site branding
 */
if (! function_exists('site_branding_content')) {
    function site_branding_content() {
        ?>
        <div class="site-branding">
            <?php the_custom_logo(); ?>

            <?php if ( is_front_page() && is_home() ) : ?>
                <?php if ( get_theme_mod( 'show_site_title', true ) ) : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php endif; ?>
            <?php else : ?>
                <?php if ( get_theme_mod( 'show_site_title', true ) ) : ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php endif; ?>
            <?php endif; ?>

            <?php
            $test_description = get_bloginfo( 'description', 'display' );
            if ( $test_description || is_customize_preview() ) :
                ?>
                <?php if ( get_theme_mod( 'show_site_description', true ) ) : ?>
                <p class="site-description"><?php echo $test_description;?></p>
            <?php endif; ?>
            <?php endif; ?>
        </div>
        <?php
    }
}

/**
 * Footer
 */
function michallukas_footer_content() {
    echo '
        <div class="footer" id="footer">
            <div class="container-m">
                <div class="footer__content">
                	<div class="copyrights">
				        <p class="text">Copyright &copy; Michał Łukaszewicz</p>
			        </div>
                </div>
            </div>
        </div>
    ';
}

/**
 * Body classes
 */
function michallukas_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'michallukas_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function michallukas_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'michallukas_pingback_header' );

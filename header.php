<?php
/**
 * Header
 *
 * @package michallukas
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'michallukas' ); ?></a>
    <header id="masthead" class="site-header">
        <div class="container-nav p-2">
            <?php
            /***
            *
            * @hooked in to michallukas_header action
            */
            do_action('michallukas_header');
            ?>
        </div>
    </header>
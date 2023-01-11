<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @subpackage Maxicon_Theme
 * @since MAxicon-theme 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>
<head>
    <title><?php bloginfo('Maxicon'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header-section">
    <div class="Logo-img"></div>
    <div class="nav-bar--header">
            <a href="#">RESIDENTIAL</a>
            <a href="#">COMMERCIAL</a>
            <a href="#">PROJECTS</a>
            <a href="#">COMPANY</a>
            <a href="#">NEWS</a>
            <a href="#">SUPPORT</a>
            <a href="#">SHOWROOM</a>
            <a href="#">CONTACT</a>
            <div class="contac-phone">
                <div class="phone-ico"></div>
                <p>+1 305 901-6135</p>
            </div>
    </div>
</header>

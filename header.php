<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
        <nav id="site-navigation" class="main-navigation">
            <div class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            </div>
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="ligne"></span>
                <span class="ligne"></span>
                <span class="ligne"></span>
            </button>
            <button class="close-menu">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/burger_croix.png'; ?>" alt="Croix fermeture menu">
            </button>
            <div class="menu-burger" aria-hidden="true">
               
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cat.png'; ?>" alt="Chat bleu" class="chat1">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cat2.png'; ?>" alt="Chat roux" class="chat2">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/flower.png'; ?>" alt="Fleur orange" class="fleur1">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/orchid.png'; ?>" alt="Fleur Orchidée" class="fleur2">
               
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_menu.png'; ?>" alt="logo du site" class="logo_site">

                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Sunflower.png'; ?>" alt="Fleur marguerite" class="fleur3">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/random_flower.png'; ?>" alt="fleur quelconque" class="fleur4">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cat3.png'; ?>" alt="chat noir" class="chat3">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hibiscus_footer.png'; ?>" alt="Fleur Hibiscus" class="fleur5">

                <ul>
                    <li><a href="#story">Histoire</a></li>
                    <li><a href="#characters">Personnages</a></li>
                    <li><a href="#place">Lieu</a></li>
                    <li><a href="#studio">Studio Koukaki</a></li>
                </ul>
               
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/studio_koukaki.png'; ?>" alt="pied de page menu" class="pdp-menu">
            </div>
        </nav>
    </header>



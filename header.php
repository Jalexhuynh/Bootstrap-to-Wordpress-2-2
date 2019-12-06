<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Justin_Bootstrap_to_Wordpress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/assets/css/bootstrap.min.css">

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/assets/css/font-awesome/css/font-awesome.min.css">

    <!-- Google Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:400,700" type="text/css">
		
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>

    <!-- ========== HEADER SECTION ========== -->
    <header class="site-header" role="banner">

        <!-- ========== NAVBAR SECTION ========== -->
        <div class="navbar-wrapper">
            <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
						<a href="/" class="navbar-brand">
							<img src="assets/img/logo.png" alt="Bootstrap to Wordpress Logo">
						</a>
					</div> <!-- navbar-header end -->
					
					<?php
						 wp_nav_menu(array(
							 'theme_location' 	=> 'primary',
							 'container'		=> 'nav',
							 'container_class'	=> 'navbar-collapse collapse',
							 'menu_class'		=> 'nav navbar-nav navbar-right'
						 ));
					?>;

                </div> <!-- container end -->
            </div> <!-- navbar end -->
        </div> <!-- navbar-wrapper end-->

    </header>

	<div id="content" class="site-content">

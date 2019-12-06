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
	<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
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
							<img src="<?php bloginfo('stylesheet_directory')?>/assets/img/logo.png" alt="Bootstrap to Wordpress Logo">
						</a>
					</div> <!-- navbar-header end -->
					
					<?php
						 wp_nav_menu(array(
							 'theme_location' 	=> 'primary',
							 'container'		=> 'nav',
							 'container_class'	=> 'navbar-collapse collapse',
							 'menu_class'		=> 'nav navbar-nav navbar-right'
						 ));
					?>

                </div> <!-- container end -->
            </div> <!-- navbar end -->
        </div> <!-- navbar-wrapper end-->

    </header>
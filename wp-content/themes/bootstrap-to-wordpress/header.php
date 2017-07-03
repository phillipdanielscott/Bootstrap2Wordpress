<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BootStrap_To_Wordpress
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon.ico">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- icons -->
<link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/custom.css">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap-to-wordpress' ); ?></a>

	<header class="site-header" role="banner">





			<!-- navbar -->
			<div class="navbar-wrapper">
					<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
							<div class="container">
									<!-- navbar header -->
									<div class="navbar-header">
											<button type="button" name="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
											<span class="sr-only"> Toggle Navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											</button>

											<a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt="Bootstrap to Wordpress"></a>

									</div>

<?php
wp_nav_menu( array
'theme_location'  => primary,
'container'       => 'nav',
'container_class' => 'navbar-collapse collapse',
'menu_class' => 'nav navbar-nav navbar right'

)
?>



									<div class="navbar-collapse collapse">
											<ul class="nav navbar-nav navbar-right">
													<li class="active"><a href="#">HOME</a></li>
													<li class="active"><a href="blog.html">BLOG</a></li>
													<li class="active"><a href="resources.html">RESOURCES</a></li>
													<li class="active"><a href="contact.html">CONTACT</a></li>


											</ul>
									</div>
							</div>
					</div>
			</div>

	</header>

	<div id="content" class="site-content">

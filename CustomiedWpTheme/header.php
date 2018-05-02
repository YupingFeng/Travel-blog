<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yuping.co
 */

?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="profile" href="http://gmpg.org/xfn/11">
    
<link rel="stylesheet" href="<?php bloginfo(stylesheet_directory); ?>/assets/css/fontawesome/web-fonts-with-css/css/fontawesome-all.css">
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">


	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ken-cens-com' ); ?></a>
	

    <!--  ====================== Header ========================== -->

    <header>

        <nav class="navbar navbar-inverse navbar-fixed-top">

            <div class="container-fluid">

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarNav">

                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>

                    <a class="navbar-brand">Storymaker</a>

                </div>
                
                <?php
                	wp_nav_menu(array(
                	
                		"theme_location" => "primary",
                		"container" => "div",
                		"container_class" => "collapse navbar-collapse",
                		"container_id" => "navbarNav",
                		"menu_class" => "nav navbar-nav navbar-right",
                		
                	
                	));
                ?>

	  </div>

        </nav>

    </header>
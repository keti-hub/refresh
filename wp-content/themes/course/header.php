<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package course
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css" media="all">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/blog.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/single.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/hotels.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/services.css" media="all">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

        <div class="header container shadow">
        <div class="top-header flex">
            <ul>
                <li><a href="">(+995) 595-633-390</a></li>
                <li><a href="">hello@gotogudauri.com</a></li>
            </ul>
            <div class="language">
                <span>English</span>
            </div>
        </div>

        <div class="main-header container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="<?=site_url(); ?>">
                    <img class="logo" src="https://www.skiline.cc/shared/profile/skiresort/899/original_logo.png" alt="">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <?php

                        $args = [
                            'menu' => "primary", 
                            'menu_class' => "navbar-nav",
                        ];

                        wp_nav_menu($args);
                    ?>   

                    <form class="form-inline my-2 my-lg-0 ml-auto" action="http://localhost/wordpress/" method="get">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="s" value="<?php the_search_query(); ?>">
                        <button class="btn bg-yellow" type="submit">Book Now</button>
                    </form>
                </div>
            </nav>
        </div>
    </div>


    <div class="container shadow">



	<!-- 
            <form action="http://localhost/wordpress/" method="get">
                <input  class="book-search" type="text" name="s"
                        placeholder="Search.." id="search" 
                        value="<?php the_search_query(); ?>"
                />
                <button class="book">BOOK NOW</button>
            </form>
     -->


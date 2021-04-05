<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package refresh
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri();?>/assets/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri();?>/assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri();?>/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri();?>/assets/css/home.css">
    <link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri();?>/assets/css/catalog.css">
    <link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri();?>/assets/css/single-products.css">
    <link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri();?>/assets/css/partnership.css">
    <link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri();?>/assets/css/about-us.css">
    <link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri();?>/assets/css/contact.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="header container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="<?php echo site_url();?>">
                <img src="<?=get_template_directory_uri();?>/assets/img/re-fresh.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

            	<?php

                    $args = [
                        'menu' => "primary", 
                        'menu_class' => "navbar-nav",
                    ];

                    wp_nav_menu($args);
                ?>   
            </div>

            <div class="language">
                <span>
                    
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      log in
                    </button>

                        
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="form-group">
                                <input type="email" class="form-control sin-in-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email/Number">
                              </div>
                              <div class="form-group">
                                <input type="password" class="form-control sin-in-control" id="exampleInputPassword1" placeholder="Password">
                              </div>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                              </div>
                              <button type="submit" class="btn sign-in-button">Sign in</button>
                            </form>
                              <div class="or">

                                <div class="line"></div>
                                <p>or</p>
                                <div class="line"></div>

                              </div>

                              <div class="sign-in-social-media">
                                <button type="submit" class="btn sign-in-each-social-media">Sign in with Facebook</button>
                                <button type="submit" class="btn sign-in-each-social-media">Sign in with Google</button>
                                <p>Dont have an Account?</p><p><a href="">Sign In</a></p>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>

                </span>
            </div>

        </nav>
    </div>

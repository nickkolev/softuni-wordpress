<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <!-- Required Meta Tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title><?php wp_title(); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://localhost/suexam/wp-content/themes/softuni-exam/assets/images/logo/favicon.png" type="image/x-icon">

</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
	<header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <a href="<?php echo get_home_url() ?>"><img src="https://localhost/suexam/wp-content/themes/softuni-exam/assets/images/logo/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>  

                    <?php
                    wp_nav_menu(
                        array(
                            'menu'            => 'primary-menu',
                            'menu_id'         => 'main-menu',
                            'theme_location'  => 'primary_menu',
                            'container_class' => 'main-menu',
                        )
                    );
                    ?>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Banner Area Starts -->
    <section class="banner-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>the most interesting food in the world</h6>
                    <h1>Discover the <span class="prime-color">flavors</span><br>  
                    <span class="style-change">of <span class="prime-color">food</span>fun</span></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css?v=<?php echo time(); ?>">


    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header-area">
    <!-- Top Header Area Start -->
    <div class="top-header-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
               <div class="col-12">
                    <div class="top-header-content">                     
                        <!-- Top Social Area -->
                        <div class="top-social-area ml-auto">
                        <a href="mailto:realproperty.pulse@gmail.com"><i class="icon_mail"></i> <span>realproperty.pulse@gmail.com</span></a>
                        <a href="tel:+918765945870"><i class="icon_phone"></i> <span>+918765945870</span></a>
                        <a href="tel:+919648868596"><i class="icon_phone"></i> <span>+919648868596</span></a>
                            <a target="_blank"  href="https://www.youtube.com/@Propertypulsereal"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            <a target="_blank" href="https://www.facebook.com/people/Property-Pulse/pfbid0j5WMVgxTkEjwLdWs1GArXTnoU9GjrEymSNa1x7EoorRA5J8sAAmaoqLHWyzyEH6Vl/?rdid=tukS4xDpU5kNWn0C&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1FaaRzR3rP%2F"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a target="_blank" href="https://www.instagram.com/realproperty.pulse/profilecard/?igsh=MTRreGt5ejA1dXJibA=="><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <!-- <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Header Area End -->

    <!-- Main Header Start -->
    <div class="main-header-area animated">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="rehomesNav">
                    <!-- Logo -->
                    <a class="nav-brand" href="<?php echo home_url(); ?>" style="margin-left: -259px;">

                        <a class="nav-brand" href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/core-img/logo.png" width="180" height="180" alt="Site Logo">
                         </a>
                    </a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                           <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary-menu',
                                'container'      => 'div',
                                'container_class' => 'classynav',
                                'menu_class'     => 'nav',
                                'fallback_cb'    => false,
                            ));
                            ?>
                            
                            <!-- Contact btn -->
                            <div class="contact-btn mt-3 mt-lg-0 ml-3 ml-lg-5">
                                <a href="<?php echo esc_url(home_url('/contact')); ?>">Contact Us</a>
                            </div>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

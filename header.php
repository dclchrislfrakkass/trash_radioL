<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo('title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>

    <!-- *************************************** -->
    <!-- ************* Navigation ************* -->
    <!-- *************************************** -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top d-flex justify-content-around">
        <div class="container">
            <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo.png" height="50" alt="Studio Radio">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'navbar-collapse collapse justify-content-end',
                'container_id'      => 'navbar',
                'menu_class'        => 'navbar-nav',
				
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker()
            ));
            ?>
        </div>
        <!-- <span class="socialLink">
        <a href="https://www.facebook.com/mediacomsfr/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebook.png"></a>
        <a href="https://www.linkedin.com/company/m%C3%A9diacoms/about/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/linkedin.png"></a>
        <a href="https://www.youtube.com/user/agencemediacoms" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/youtube.png"></a>
        </span> -->
    </nav>



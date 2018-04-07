<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
    <a class="sr-only" href="#content"><?php _e( 'Skip to content', 'BS4WordPress' ); ?></a>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">


                <?php
                wp_nav_menu( array(
                    'theme_location'	=> 'primary',
                    'depth'				=> 1, // 1 = with dropdowns, 0 = no dropdowns.
                    'container'			=> 'div',
                    'container_class'	=> 'collapse navbar-collapse',
                    'container_id'		=> 'bs-example-navbar-collapse-1',
                    'menu_class'		=> 'navbar-nav ml-auto',
                    'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
                    'walker'			=> new WP_Bootstrap_Navwalker()
                ) );
                ?>
            </div>
        </nav>

        <main role="main" class="container" id="content">

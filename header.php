<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="container">
        <!-- Logo og side-navn -->
        <div class="site-branding">
            <a href="<?php echo home_url(); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Smykkeblog Logo">
            </a>
            <h1 class="site-title"><a href="<?php echo home_url(); ?>">Smykkeblog</a></h1>
        </div>

        <!-- Navigationsmenu -->
        <nav class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary', // Husk at registrere menuen i functions.php
                'menu_class' => 'nav-menu',
            ));
            ?>
        </nav>

        <!-- Søgefelt -->
        <div class="search-form">
            <?php get_search_form(); ?>
        </div>

        <!-- Indkøbskurv -->
        <div class="shopping-cart">
            <a href="#" class="cart-icon">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-count">0</span>
            </a>
            <div class="cart-dropdown">
                <p>Din indkøbskurv er tom.</p>
                <!-- Du kan tilføje dynamisk indhold her ved at integrere WooCommerce eller en anden løsning -->
            </div>
        </div>
    </div>
</header>

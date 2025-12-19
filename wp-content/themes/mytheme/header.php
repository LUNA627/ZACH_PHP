<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header class="header_section">
        <div class="container">
            <!-- Логотип -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="header_logo_link">
                <img class="header_logo" src="<?php echo get_template_directory_uri(); ?>/image/icon.png" alt="Логотип" width="100" height="100">
            </a>

            <!-- Меню и поиск -->
            <div class="header_controls">
                <?php get_search_form(); ?>
                <?php wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'menu_class'     => 'header_nav',
                    'container'      => false,
                )); ?>
            </div>
        </div>
    </header>
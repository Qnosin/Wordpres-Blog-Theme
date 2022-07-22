<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/screnshoot.png" alt="wordpress Logo">
        </header>

        <nav class="mobile-menu">
            <img class="hamburger-btn" src="<?php echo get_template_directory_uri() ?>/assets/images/Hamburger_icon.svg.png" alt="menu">
                Menu
        </nav>

        <div class="toggleMyMenu">
            <?php
            wp_nav_menu(array('theme_location' => 'nav menu'));
            ?>
        </div>



        <div class="slogan">
            Everything a writer needs.
        </div>

        <div class="container">
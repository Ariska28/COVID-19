<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('description'); ?></title>
    <?php wp_head();  ?>
</head>

<body>

    <header class="b-header js-header">
        <div class="b-header-wrapper">
            <button class="b-header__big-button js-menu-btn">
                <span class="visually-hidden">
                    closed mobile menu in all display
                </span>
            </button>

            <a href="#" class="b-header__media">
                <img class="b-header__media-logo" src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="COVID logo">
            </a>

            <?php get_sidebar(); ?>
    

               <button type="button" class="b-header__toggle js-menu-btn">
                <span class="b-header__toggle-line"></span>
                <span class="visually-hidden">
                    toggle mobile menu
                </span>
            </button>
        </div>
    </header>
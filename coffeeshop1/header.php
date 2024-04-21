<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/sanitize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div id="Menubar">
            <h1 id="Logo">安崎珈琲</h1>
            <nav id="Nav-menu">
                <?php
                  wp_nav_menu(array(
                  'theme_location' => 'header'
                  ));
                ?>
            </nav>
            <div id="Hum">
                <span id="span1"></span>
                <span id="span2"></span>
                <span id="span3"></span>
            </div>
        </div>
        <div id="Slider">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/photo/pc-img/slide-pc-img.jpg"
                    media="(min-width: 1100px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/photo/tab-img/slide-tab-img.jpg"
                    media="(min-width: 700px)">
                <img src="<?php echo get_template_directory_uri(); ?>/photo/sp-img/slide-sp-img.jpg" alt="">
            </picture>
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/photo/pc-img/slide-pc-img.jpg"
                    media="(min-width: 1100px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/photo/tb-img/slide-tab-img.jpg"
                    media="(min-width: 700px)">
                <img src="<?php echo get_template_directory_uri(); ?>/photo/sp-img/slide-sp-img.jpg" alt="">
            </picture>
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/photo/pc-img/slide-pc-img.jpg"
                    media="(min-width: 1100px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/photo/tb-img/slide-tab-img.jpg"
                    media="(min-width: 700px)">
                <img src="<?php echo get_template_directory_uri(); ?>/photo/sp-img/slide-sp-img.jpg" alt="">
            </picture>
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/photo/pc-img/slide-pc-img.jpg"
                    media="(min-width: 1100px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/photo/tb-img/slide-tab-img.jpg"
                    media="(min-width: 700px)">
                <img src="<?php echo get_template_directory_uri(); ?>/photo/sp-img/slide-sp-img.jpg" alt="">
            </picture>
        </div>
        <div id="Img-controll">
            <span id="controll1"></span>
            <span id="controll2"></span>
            <span id="controll3"></span>
            <span id="controll4"></span>
        </div>
    </header>
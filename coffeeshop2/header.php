<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/sanitize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/style.css">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div id="Side-nav">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/photo/pc-img/coffee2-logo.png" alt="">
                <h1>安崎珈琲</h1>
            </div>
            <nav>
            <?php
                  wp_nav_menu(array(
                  'theme_location' => 'header'
                  ));
                ?>
            </nav>
            <div id="Hum-menu">
                <span id="Hum1"></span>
                <span id="Hum2"></span>
                <span id="Hum3"></span>
            </div>
        </div>
    </header>
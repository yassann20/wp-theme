<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/site-data/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/site-data/css/sanitize.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <!--ヘッダー内にはmenuを入れない-->
        <div class="swiper-container top">
            <!--ここはトップスライダー-->
            <div class="swiper-wrapper">
                <!---トップスライダーはカスタム投稿で画像、枚数を制御-->
                <?php
                $slides = new WP_Query(array(
                    'post_type' => 'slide',
                    'posts_per_page' => -1,
                ));
                while($slides->have_posts()) : $slides->the_post();
                ?>
                <div class="swiper-slide">
                    <div class="img">
                    <?php the_post_thumbnail(); ?>
            </div>
                </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
            <!-- ページネーションがいるときか下記を追記 -->
            <div class="swiper-pagination"></div>

            <!-- 左右のナビゲーションボタンが必要であれば下記も追記 -->
            <div class="swiper-button-prev swiper-button-white"></div>
            <div class="swiper-button-next swiper-button-white"></div>

        </div>
    </header>

    <div id="menubar">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div id="header-menu">
        <nav>
            <ul>
            <?php
wp_nav_menu(array(
    'theme_location' => 'primary-menu',
    'container' => 'nav',
    'container_class' => 'main-navigation',
    'menu_class' => 'menu',
));
?>
            </ul>
        </nav>
    </div>
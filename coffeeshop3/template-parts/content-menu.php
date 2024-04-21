<div id="menu">
            <h2 class="center-border">MENU</h2>
            <div class="food-menu">
                <h3>Food</h3>
                <div class="food-container">
                    <div class="swiper-container foodmenu">
                        <!--ここはフードメニュー-->
                        <div class="swiper-wrapper">

                        <!---カスタム投稿(フードメニューを取得し表示する)-->
                            <?php 
                            $slides = new WP_Query(array(
                                'post_type' => 'food-slide',
                                'posts_per_page' => -1,
                            )) ;
                            while($slides->have_posts()) : $slides->the_post();
                            ?>

                            <div class="swiper-slide">
                                <div class="img">
                            <?php the_post_thumbnail(); ?>
                            </div>
                            <h4><?php the_title(); ?></h4>
                            </div>

                            <?php endwhile;
                            wp_reset_postdata();
                            ?>
                        <!--カスタム投稿(フードメニュー)ここまで-->

                        </div>
                    </div>
                </div>
            </div>
            <div class="drink-menu">
                <h3>Drink</h3>

                <div class="drink-container">
                    <div class="swiper-container drinkmenu">
                        <!--ここはドリンクメニュー-->
                        <div class="swiper-wrapper">
                            <!---カスタム投稿(フードメニューを取得し表示する)-->
                            <?php 
                            $slides = new WP_Query(array(
                                'post_type' => 'drink-slide',
                                'posts_per_page' => -1,
                            )) ;
                            while($slides->have_posts()) : $slides->the_post();
                            ?>

                            <div class="swiper-slide">
                                <div class="img">
                            <?php the_post_thumbnail(); ?>
                            </div>
                            <h4><?php the_title(); ?></h4>
                            </div>

                            <?php endwhile;
                            wp_reset_postdata();
                            ?>
                        <!--カスタム投稿(フードメニュー)ここまで-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
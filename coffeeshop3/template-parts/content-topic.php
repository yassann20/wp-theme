<div id="topic">
            <div class="topic-h2">
            <h2 class="center-border">おすすめ</h2>
            </div>
            <div class="topic-img-container">
                <div class="swiper-container topicimg">
                    <!--ここはトップスライダー-->
                    <div class="swiper-wrapper">
                        <!--ここからのスライダーコンテンツはカスタム投稿を使用してコンテンツを追加していきます。-->
                        <?php
                $slides = new WP_Query(array(
                    'post_type' => 'topic-slide',
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
                    <!-- 左右のナビゲーションボタンが必要であれば下記も追記 -->
                    <div class="swiper-button-prev topicimg-button-prev swiper-button-white"></div>
                    <div class="swiper-button-next topicimg-button-white"></div>
                </div>
            </div>
            <div class="topic-text-container">
                <div class="swiper-container topictext">
                    <div class="swiper-wrapper">

                        <!--トピック タイトルと本文を出力(topic-img-slideとシンクロして表示させる)-->

                        <?php
                $slides = new WP_Query(array(
                    'post_type' => 'topic-slide',
                    'posts_per_page' => -1,
                ));
                while($slides->have_posts()) : $slides->the_post();
                ?>
                        <div class="swiper-slide">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        </div>
                        
                        <?php endwhile;
                wp_reset_postdata(); ?>
                        
                        <!--トピック タイトルと本文を出力ここまで (topic-img-slideとシンクロして表示させる)-->

                    </div>
                </div>
            </div>
        </div>
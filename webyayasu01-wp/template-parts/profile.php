<div class="profile-container position">
    <div id="profile">
        <div class="profile-back">
            <div class="rhombus">
                <h2 class="profile-h2"><?php echo esc_html(get_theme_mod('profile_h2_text', 'プロフィール')); ?></h2>
            </div>
        </div>
        <div class="profile-inner">
            <div class="img">
            <img class="profile-img01" src="<?php echo esc_url(get_theme_mod('profile_image', get_template_directory_uri() . '/site-date/photos/pc-photo/profile.png')); ?>" alt="">
            </div>
            <div class="text">
            <h3><ruby class="name">安<rt>やす</rt>崎<rt>ざき</rt>&emsp;海<rt>&nbsp;&emsp;かい</rt>星<rt>せい</rt></ruby></h3>
            <div class="profile-text">
                <p class="profile-p"><?php echo esc_html(get_theme_mod('profile_p_text', '初めまして、当サイトをご覧いただきましてありがとうございます。私は北海道札幌市を拠点にフロントエンドエンジニアとして活動させていただいている。安崎 海星と申します。当方ではウェブサイトの構築、LPの作成、その他保守など様々案件に低価格で対応できるよう日々技術力の向上と作業の効率化に取り組んでいます')); ?></p>
            </div>
            </div>
        </div>
        <div class="programming-back">
            <div class="rhombus">
                <h2 class="profile-skill-h2-text"><?php echo esc_html(get_theme_mod('profile_skill_h2_text', 'スキル')); ?></h2>
            </div>
        </div>
        <ul>
            <!--ここからスキルコンテンツのカスタム投稿機能を付与-->
            <?php
            function add_skill_class_to_images($content){
                //画像の'<img>'タグにクラスを追加
                $content = preg_replace('/<img(.*?)class=\"(.*?)\"(.*?)>/', '<img$1class="$2 star-img"$3>', $content);
                return $content;
            }

            $custom_content_query = new WP_query(array(
                'post_type' => 'skill_content',
                'posts_per_page' => -1,
                'order' => 'DESC', // 投稿の順序を逆にする
            )) ;

            if ($custom_content_query->have_posts()):
                while ($custom_content_query->have_posts()): $custom_content_query->the_post();
            ?>
                <li>
                        <!--スキルのアイキャッチ画像を出力する-->
                        <div class="img">
                        <?php
                    if (has_post_thumbnail()) {
                        // アイキャッチの画像を取得
                        $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
                        // アイキャッチの画像を出力し、クラスを追加
                        echo '<img src="' . esc_url($thumbnail[0]) . '" alt="' . esc_attr(get_the_title()) . '" class="list-img">';
                    }
                    ?>
                    </div>
                        <div>
                            <!--スキルのレベルを表す画像を出力-->
                            <?php
                            //投稿のIDを取得
                            $post_id = get_the_ID();
                            //投稿コンテンツを取得
                            $content = get_post_meta($post_id, 'skill_content', true);
                            //コンテンツ内の画像にクラスを追加するフィルターを定義
                            //コンテンツ内の画像にクラスを追加するフィルターを適応させる
                            echo apply_filters('the_content', $content);
                            ?>
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                </li>
            <?php 
            endwhile;
            wp_reset_postdata();
        else: 
            _e('No custom content found.', 'textdomain');
        endif;
            ?>
            <!--ここまで-->
        </ul>
    </div>
</div>
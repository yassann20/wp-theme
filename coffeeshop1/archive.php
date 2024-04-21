<?php get_header(); ?>

<main>
    <h2 id="Blog-h2">NEWS</h2>
    <p id="Blog-p">店舗情報や季節限定のメニュー新作メニューなどのご紹介をしています。
        気になるメニューなどがあればチェックしてみてください</p>
    <div id="Blog-content">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
                <dl>
                    <a href="<?php echo get_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="blog-img" style="background-image: url('<?php get_the_post_thumbnail_url(); ?>')">
                            </div>
                        <?php else : ?>
                            <div class="blog-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/photo/pc-img/noimage.jpg')">
                            </div>
                        <?php endif; ?>
                        <div class="blog-text">
                            <dt><?php echo wp_trim_words(get_the_title(), 20, '…'); ?></dt>
                            <dd><?php the_excerpt(); ?></dd>
                            <dd><?php the_time('Y・n・j'); ?></dd>
                        </div>
                    </a>
                </dl>
        <?php
            endwhile;
        endif;
        ?>
        <dl>
            <a href="">
                <div class="blog-img"></div>
                <div class="blog-text">
                    <dt>商品名商品名商品名商品名商品名商品名商品名商品名商品名</dt>
                    <dd>商品説明商品説明商品説明商品説明商品説明商品説明商品説明
                        商品説明商品説明商品説明商品説明商品説明商品説明商品説明
                        商品説明商品説明商品説明商品説明商品説明商品説明商品説明</dd>
                    <dd>投稿日 ○○年○○月○○日</dd>
                </div>
            </a>
        </dl>
    </div>
    <div id="Reserve">
        <h2>予約フォーム</h2>
        <form action="">
            <label for="">
                <div>
                    <h3>代表様氏名</h3>
                </div>
                <input type="text">
            </label>
            <label for="">
                <div>
                    <h3>氏名フリガナ</h3>
                </div>
                <input type="text">
            </label>
            <label for="">
                <div>
                    <h3>メールアドレス</h3>
                </div>
                <input type="text">
            </label>
            <label for="">
                <div>
                    <h3>電話番号</h3>
                </div>
                <input type="text">
            </label>
            <label for="">
                <div>
                    <h3>人数</h3>
                </div>
                <input type="text">
            </label>
            <label for="">
                <div>
                    <h3>日時</h3>
                </div>
                <input type="text">
            </label>
            <label for="">
                <div>
                    <h3>備考</h3>
                </div>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </label>
            <button type="submit">送信</button>
        </form>
    </div>
    <div id="Access">
        <h2>ACCESS</h2>
        <div id="Map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4122.049880352923!2d141.34794616507605!3d43.06815801040526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b2974d2c3f903%3A0xa5e2b18cdd4a47a5!2z5pyt5bmM6aeF!5e0!3m2!1sja!2sjp!4v1683459156812!5m2!1sja!2sjp" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div>
            <h2>店舗情報</h2>
            <ul>
                <li>
                    <p>所在地</p>
                    <p>北海道札幌市中央区北○○条○○丁目〇号〇番</p>
                </li>
                <li>
                    <p>アクセス</p>
                    <p>地下鉄札幌駅から徒歩10分</p>
                </li>
                <li>
                    <p>駐車場</p>
                    <p>店内駐車スペース(10台有り)</p>
                </li>
            </ul>
        </div>
    </div>
</main>


<?php get_footer(); ?>
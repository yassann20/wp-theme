<?php get_header(); ?>

<main>
    <div id="Single">
        <div class="Film">

            <?php
      if ( have_posts() ) :
          while ( have_posts() ) : the_post();
      ?>
            <div id="Single-content">
                <?php if (has_post_thumbnail()) : ?>
                <div id="Thumbnail" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                </div>
                <?php else : ?>
                <div id="Thumbnail"
                    style="background-image: url('<?php echo get_template_directory_uri(); ?>/photo/pc-img/noimage.jpg');">
                </div>
                <?php endif; ?>
                <div id="Data">
                    <span id="Category"><?php echo get_the_category()[0]->name; ?></span>
                    <p id="Time"><?php the_time('Y・n・j'); ?></p>
                </div>
                <div id="Blog-text">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </div>
            </div>
        <?php
          endwhile;
      endif;
      ?>
      </div>
    </div>
    <div id="Contact">
        <div class="film">
            <h2>contact</h2>
            <p>当サイトでは来店ご予約を承っております。
                待ち時間なしでスムーズにお席へのご案内が可能です。</p>
            <form action="">
                <label for="">
                    <h3>予約者氏名</h3>
                    <input type="text">
                </label>
                <label for="">
                    <h3>ふりがな</h3>
                    <input type="text">
                </label>
                <label for="">
                    <h3>電話番号</h3>
                    <input type="tel" name="" id="">
                </label>
                <label for="">
                    <h3>メールアドレス</h3>
                    <input type="email" name="" id="">
                </label>
                <label for="">
                    <h3>予約日時</h3>
                    <input type="date" name="" id="">
                </label>
                <label for="">
                    <h3>予約時間</h3>
                    <input type="datetime" name="" id="">
                </label>
                <label for="">
                    <h3>人数</h3>
                    <select name="" id="">
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </label>
                <label for="">
                    <h3>備考・その他</h3>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </label>
                <button>送信</button>
            </form>
        </div>
    </div>
    <div id="Map">
        <div class="film">
            <h2>店舗情報</h2>
            <div id="Map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1457.3527153948846!2d141.3494678389388!3d43.068662552235025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b2974d2c3f903%3A0xa5e2b18cdd4a47a5!2z5pyt5bmM6aeF!5e0!3m2!1sja!2sjp!4v1684740087226!5m2!1sja!2sjp"
                    width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div>
                <dl>
                    <dt>所在地</dt>
                    <dd>北海道札幌市中央区北〇〇条〇〇丁目〇番〇号</dd>
                </dl>
                <dl>
                    <dt>アクセス</dt>
                    <dd>地下鉄札幌駅から徒歩10分</dd>
                </dl>
                <dl>
                    <dt>営業時間</dt>
                    <dd>毎日　9:00時～21:00時まで</dd>
                </dl>
                <dl>
                    <dt>定休日</dt>
                    <dd>毎週月曜</dd>
                </dl>
                <dl>
                    <dt>駐車場</dt>
                    <dd>店内駐車場(10台有り)</dd>
                </dl>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
<div id="content03" class="position">
    <?php
    $default_c3h2 = ['低価格な料金設定', '迅速な対応・幅広い連絡手段'];
    $default_c3p = ['一般的にウェブサイト制作するとなると小規模な物でもどうしても数十万円単位でお金がかかってきます。当方では小規模なウェブサイトを制作する場合、一桁万円から制作可能です。', '当方では日中夜間、平日土日を問わず素早い連絡が可能です。chatworkやskype、discord等幅広いチャットアプリでの連絡が可能です。お取引の際に普段連絡手段として使用しているアプリで連絡を行いたい場合もお気軽にお申し付けください。']
    ?>
    <div class="rhombus">
        <h2 class="c3-h2-text"><?php echo esc_html(get_theme_mod('content3_h2_text', '2つの魅力')); ?></h2>
    </div>
    <div class="top">
        <div class="appeal content" style="background-image:url('<?php echo get_option("content3_list_back_image1"); ?>') center cover">
            <!--リスト内見出し-->
            <h3 class="c3-list-h2-text1"><?php echo esc_html(get_theme_mod('content3_list_h2_text1', $default_c3h2[0])); ?></h3>
            <!--/リスト内見出し-->
            <!--リスト内本文-->
            <p class="c3-list-text1"><?php echo esc_html(get_theme_mod('content3_list_text1', $default_c3p[0])); ?></p>
            <!--/リスト内本文-->
        </div>
        <img class="content" src="<?php echo get_template_directory_uri(); ?>/site-date/photos/pc-photo/content3-sample.jpg" alt="">
        <img class="content2" src="<?php echo get_template_directory_uri(); ?>/site-date/photos/pc-photo/content3-sample.jpg" alt="">
        <div class="works content2" style="background-image:url('<?php echo get_option("content3_list_back_image1"); ?>') center cover">
            <!--リスト内見出し-->
            <h3 class="c3-list-h2-text2"><?php echo esc_html(get_theme_mod('content3_list_h2_text1', $default_c3h2[1])); ?></h3>
            <!--/リスト内見出し-->
            <!--リスト内本文-->
            <p class="c3-list-text2"><?php echo esc_html(get_theme_mod('content3_list_text2', $default_c3p[1])); ?></p>
            <!--/リスト内本文-->
        </div>
    </div>
</div>
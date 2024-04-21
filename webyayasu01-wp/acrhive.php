<!-- ヘッダー読み込み　-->
<?php get_header(); ?>
<main>
    <div id="top">
        <!--最初の見出し-->
        <?php get_template_part('template-parts/content01'); ?>
        <div class="archive">
            <div class="all-category">
                <?php
                //categoryをすべて取得しページリンクを作成
                $categories = get_categories();
                foreach ($categories as $category) {
                    $category_link = get_category_link($category->term_id);
                    echo '<a href="' . esc_url($category_link) . '">' . esc_html($category->name) . '</a><br>';
                }
                ?>
            </div>
            <h2>記事一覧</h2>
            <p>このページでは仕事の稼働状況、どのような案件をこなしているかなどお仕事に関する記事を
                ご紹介しています。</p>
            <div class="archive-content">
                <?php
                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                $custom_query = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 10,
                    'paged' => $paged

                ));
                // WordPressループ開始
                if ($custom_query->have_posts()) :
                    while ($custom_query->have_posts()) : $custom_query->the_post();
                ?>
                        <div class="archive-inner">
                            <div class="category">
                                <?php
                                $categories = get_the_category();
                                $separator = ', ';
                                $output = '';

                                if ($categories) {
                                    foreach ($categories as $category) {
                                        $output .= '<a href="' . esc_url(get_category_link($category->term_id)) . '" alt="' . esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name)) . '">' . esc_html($category->name) . '</a>' . $separator;
                                    }
                                    echo trim($output, $separator);
                                }
                                ?>
                                </p>
                            </div>
                            <div class="img">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('thumbnail', array('class' => 'archive-thumbnail'));
                                } else {
                                    echo '<img src="' . get_template_directory_uri() . '/site-date/photos/pc-photo/archive-noimg.jpg" alt="No Image Available">';
                                }
                                ?>
                            </div>
                            <div class="text-container">
                                <h3><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                            </div>
                        </div>
                <?php
                    endwhile;
                    // カスタムクエリの後処理
                    wp_reset_postdata();
                else :
                    echo '<p>記事が見つかりませんでした。</p>';
                endif;
                ?>

            </div>
            <div class="page-selecter">
                <?php
                // ページネーション
                echo paginate_links(array(
                    'total' => $custom_query->max_num_pages,
                    'current' => $paged,
                    'prev_text' => '＜ 前のページ',
                    'next_text' => '次のページ ＞',
                ));
                ?>
            </div>
        </div>
        <!--お問い合わせコンテンツ-->
        <?php get_template_part('template-parts/contact-in'); ?>
        <!--プロフィールコンテンツ-->
        <?php get_template_part('template-parts/profile'); ?>
        <!-- ここまで -->

</main>

<!-- footer読み込み -->
<?php get_footer(); ?>
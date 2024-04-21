<?php get_header(); ?>
<main>
    <div id="top">
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
            <h2><?php single_cat_title(); ?>一覧</h2>
            <p><?php echo category_description(); ?></p>
            <div class="archive-content">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
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
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php the_content(); ?>
                            </div>
                        </div>
                <?php
                    endwhile;

                    // ページネーション
                    echo paginate_links(array(
                        'prev_text' => '＜ 前のページ',
                        'next_text' => '次のページ ＞',
                    ));

                else :
                    echo '<p>このカテゴリーにはまだ投稿がありません。</p>';
                endif;
                ?>
            </div>
        </div>

        <?php get_template_part('template-parts/contact-in'); ?>
        <?php get_template_part('template-parts/profile'); ?>
    </div>
</main>
<?php get_footer(); ?>
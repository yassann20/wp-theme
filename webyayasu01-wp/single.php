<!-- ヘッダー読み込み　-->
<?php get_header(); ?>
<main>
    <div id="top">
        <!--最初の見出し-->
        <?php get_template_part('template-parts/content01'); ?>
        <!--事業内容3つ紹介-->
        <?php
        while (have_posts()) :
            the_post();
        ?>
            <div class="blog">
                <div class="img">
                    <?php if(has_post_thumbnail()): ?>
                    <!--サムネイルがある場合-->
                    <?php the_post_thumbnail('thumbnail', array('class'=>'thumbnail')); ?>
                    <?php else: ?>
                        <!--サムネイルがない場合-->
                <img class="thumbnail" src="<?php echo get_template_directory_uri(); ?>/photos/pc-photo/noimg.jpg" alt="">
                <?php endif;?>    
            </div>
                <div class="blog-inner">
                    <div class="date">
                        <p>更新日 <?php echo get_the_date('Y/m/d'); ?></p>
                    </div>
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

                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>


                    <div class="page-selecter">
                        <?php previous_post_link('%link', '＜ 前の記事'); ?>
                        &emsp;
                        <?php next_post_link('%link', '次の記事 ＞'); ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <!--お問い合わせコンテンツ-->
        <?php get_template_part('template-parts/contact-in'); ?>
        <!--プロフィールコンテンツ-->
        <?php get_template_part('template-parts/profile'); ?>
        <!-- ここまで -->
    </div>
</main>

<!-- footer読み込み -->
<?php get_footer(); ?>
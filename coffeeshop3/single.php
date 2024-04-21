<?php get_header(); ?>
    
<main>
<div class="main-outer">
            <div class="circle"></div>
        <!--ここからメインコンテンツ-->
        <?php
// WordPress のループ開始
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <div class="blog-content">
            <div class="blog-header">
                <p><?php echo __('更新日'); ?><time datetime="<?php echo get_the_date('Y/m/d'); ?>"><?php echo get_the_date(); ?></time></p>
                <!--カテゴリのパーマリンクを設定-->
                <?php
                // 投稿に関連付けられたカテゴリーを取得
                $categories = get_the_category();
                if (!empty($categories)) {
                    // 最初のカテゴリーのみ表示
                    $category = $categories[0];
                    // カテゴリーパーマリンクを表示
                    echo '<p><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></p>';
                }
                ?>
            </div>
            <div class="blog-inner">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="img">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                <?php endif; ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="blog-excerpt">
                    <?php the_excerpt(); ?>
                </div>
            </div>
            <div class="navigation">
                <div class="nav-previous"><?php previous_post_link( '%link', '<< 前の記事へ' ); ?></div>
                <div class="nav-next"><?php next_post_link( '%link', '次の記事へ >>' ); ?></div>
            </div>
        </div>
<?php
    endwhile;
else :
    // 投稿がない場合の処理
    echo __('投稿が見つかりませんでした。');
endif;
// WordPress のループ終了
?>
        

        <?php get_template_part('template-parts/content','contact'); ?>
        <?php get_template_part('template-parts/content','map'); ?>
</div>
</main>

    <?php get_footer(); ?>
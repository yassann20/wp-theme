<?php get_header(); ?>
    
    <main>
    <div class="main-outer">
            <div class="circle"></div>
        <!--ここからメインコンテンツ-->
        <?php get_template_part('template-parts/content','menu'); ?>

        <?php get_template_part('template-parts/content','topic'); ?>
        
        <?php get_template_part('template-parts/content','news'); ?>

        <?php get_template_part('template-parts/content','contact'); ?>

        <?php get_template_part('template-parts/content','map'); ?>
    </div>
    </main>

    <?php get_footer(); ?>
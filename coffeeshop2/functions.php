<?php
//メニュー有効
function register_my_menus() { 
  register_nav_menus( array(
    'header' => 'ヘッダー',//表示する位置
    'footer' => 'フッター',//表示する位置
    'side' => 'サイド',//表示する位置
  ) );
}
add_action( 'after_setup_theme', 'register_my_menus' );
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'news'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
add_theme_support('post-thumbnails');
remove_filter('the_excerpt', 'wpautop');
?>
<?php

//メニュー機能の追加
function register_my_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' ),
            'footer-menu' => __( 'Footer Menu' ),
        )
    );
}
add_action( 'init', 'register_my_menus' );

function webst8_setup()
{
    //ここに関数の中身を記述します。
    add_theme_support('post-thumbnails'); //アイキャッチ画像をON
    add_theme_support('menus');  //メニュー機能をON
}
add_action('after_setup_theme', 'webst8_setup');
//最後に作成したafter_setup_themeアクションフック※に登録します。

//archiveページをnewsという階層名で表示させる
function post_has_archive($args, $post_type)
{

    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'news'; //任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


//前の記事・次の記事のリンクにclassを付与する
function add_prev_post_link_class($output) {
  return str_replace('<a href=', '<a id="Prev-page" href=', $output); //前の記事リンク
}
add_filter( 'previous_post_link', 'add_prev_post_link_class' );

function add_next_post_link_class($output) {
  return str_replace('<a href=', '<a id="Next-page" href=', $output); //次の記事リンク
}
add_filter( 'next_post_link', 'add_next_post_link_class' );

/*トップページのスライドショーをカスタム投稿タイプで枚数、タイトル(管理画面のみ表示)、画像を設定する */
function custom_theme_register_slide_post_type(){
//トップスライダー
register_post_type('slide',array(
    'labels' => array(
        'name'=>__('トップスライダー'),//カスタム投稿に表示される名前
        'singular_name'=>__('トップスライド'),//カスタム投稿単体の名前
    ),
    'public'=>true,
    'supports'=>array('title','thumbnail'),
));
//フードメニュー(フードメニュー)スライダー
register_post_type('food-slide', array(
    'labels' => array(
        'name' => __('フードメニュースライダー(フード)'),
        'singular_name' => __('フードメニュースライド(フード)'),
    ),
    'public'=>true,
    'supports'=>array('title','thumbnail'),
    ));
//フードメニュー(ドリンクメニュー)スライダー
register_post_type('drink-slide', array(
    'labels' => array(
        'name' => __('フードメニュースライダー(ドリンク)'),
        'singular_name' => __('フードメニュースライド(ドリンク)'),
    ),
    'public'=>true,
    'supports'=>array('title','thumbnail'),
    ));

    //ここからはtopic
    //topic内画像スライダー
register_post_type('topic-slide', array(
    'labels' => array(
        'name' => __('トピックスライダー'),
        'singular_name' => __('トピックスライド'),
    ),
    'public'=>true,
    'supports'=>array('title','thumbnail', 'editor'),
    ));
}
add_action('init','custom_theme_register_slide_post_type');

?>
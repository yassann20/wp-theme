<?php
//サムネイルとメニュー機能を有効にする

function webyayasu3_setup()
{
  add_theme_support('post-thumbnails'); //アイキャッチ画像をON
  add_theme_support('menus');  //メニュー機能をON
  register_nav_menus(array(
    'main-menu' => 'メインメニュー'
  ));
  set_theme_mod('mytheme_option', 'default_value');
}

add_action('after_setup_theme', 'webyayasu3_setup');


//自作javascriptファイルを読み込ませる
function my_action_scripts_method(){
  //自作アニメーションjs(particles.js)の読み込み
  wp_enqueue_script(
    'particles_script',
    get_template_directory_uri().'/site-date/js/particles.js',array('jquery'),true
  );
  //自作アニメーションjs(action.js)の読み込み
  wp_enqueue_script(
    'action_script',
    get_template_directory_uri().'/site-date/js/action.js',array('jquery'),true
  );
}
add_action('wp_enqueue_scripts', 'my_action_scripts_method');



function customizer_widgets()
{
  add_theme_support('customize-selective-refresh-widgets');
}
add_action('init', 'customizer_widgets');

//カスタマイザー付与
function theme_customize_register($wp_customize)
{
    /*----------------------------------------------------------------------
    content1
    -----------------------------------------------------------------------*/
  /* コンテンツ1大見出し */
  $wp_customize->add_panel('content01', array(
    'title' => 'コンテンツ1',
    'priority' => 20,
  ));
  $wp_customize->add_section('top-h1-txt', array(
    'title' => '大見出し',
    'panel' => 'content01',
    'priority' => 10,
  ));
  $wp_customize->add_setting('top_h1_text', array(
    'default' => '事業内容',
    'transport' => 'postMessage',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('top_h1_text', array(
    'settings' => 'top_h1_text',
    'label' => 'コンテンツ1大見出し',
    'section' => 'top-h1-txt',
    'type' => 'text',
  ));

  // 編集ショートカットの設定
  $wp_customize->selective_refresh->add_partial('top_h1_text', array(
    'selector' => '.top-h1', // セレクターを実際の出力に合わせて変更する
    'container_inclusive' => false,
  ));
  /* 大見出しここまで */

  /* コンテンツ1p1 */
  $wp_customize->add_section('top_p1', array(
    'title' => 'コンテンツ1_テキスト1',
    'panel' => 'content01',
    'priority' => 30,
  ));
  $wp_customize->add_setting('top_p1_text', array(
    'default' => 'Business details',
    'transport' => 'postMessage',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('top_p1_text', array(
    'settings' => 'top_p1_text',
    'label' => 'コンテンツ1_テキスト1',
    'section' => 'top_p1',
    'type' => 'text',
  ));
  // 編集ショートカットの設定
  $wp_customize->selective_refresh->add_partial('top_p1_text', array(
    'selector' => '.top-p1', // セレクターを実際の出力に合わせて変更する
    'container_inclusive' => false,
  ));
  /* コンテンツ1p1ここまで */

  /* コンテンツ1h3 */
  $wp_customize->add_section('top_h3', array(
    'title' => 'コンテンツ1_小見出し',
    'panel' => 'content01',
    'priority' => 30,
  ));
  $wp_customize->add_setting('top_h3_text', array(
    'default' => '費用を抑えたウェブサイトの構築・LP作成など幅広く迅速に対応します',
    'transport' => 'postMessage',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('top_h3_text', array(
    'settings' => 'top_h3_text',
    'label' => 'コンテンツ1_テキスト1',
    'section' => 'top_h3',
    'type' => 'text',
  ));
  // 編集ショートカットの設定
  $wp_customize->selective_refresh->add_partial('top_h3_text', array(
    'selector' => '.top-h3', // セレクターを実際の出力に合わせて変更する
    'container_inclusive' => false,
  ));
  /* コンテンツ1h3ここまで */

  /*----------------------------------------------------------------------
    content2
    -----------------------------------------------------------------------*/

  /* content2-list内h2 */
  $wp_customize->add_panel('content02', array(
    'title' => 'コンテンツ2',
    'priority' => 30,
  ));
  $c2h2 = 3;
  $default_c2h2 = ['コーディング', 'WP制作', '保守・運営']; //リスト見出しデフォルト
  $default_c2p = [ //リスト本文デフォルト
    'ウェブサイトやLPのコーディング業務を請け負っています。与えられたデザインを忠実に再現しスピーディに納品します。',
    'wordpressのカスタマイズや保守。コーディングしたデータを元にオリジナルテーマの作成も行っています。',
    '既存のサイトの保守・運営業務を行っています。サイトのデザイン変更に伴うソースコード改修やブログ記事の更新などを行っています。'
  ];
  for ($i = 1; $i <= $c2h2; $i++) {
    $wp_customize->add_section('content2_list_h2_' . $i, array(
      'title' => 'コンテンツ2_h2テキスト' . $i,
      'panel' => 'content02',
      'priority' => 30,
    ));
    $wp_customize->add_setting('content2_list_h2_text' . $i, array(
      'default' => $default_c2h2[$i - 1],
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('content2_list_h2_text' . $i, array(
      'settings' => 'content2_list_h2_text' . $i,
      'label' => 'コンテンツ2_h2テキスト',
      'section' => 'content2_list_h2_' . $i,
      'type' => 'text',
    ));
    // 編集ショートカットの設定
    $wp_customize->selective_refresh->add_partial('content2_list_h2_text'.$i, array(
      'selector' => '.c2-h2-text'.$i, // セレクターを実際の出力に合わせて変更する
      'container_inclusive' => false,
    ));
  }
  /* content2-list内h2ここまで */

  /* content2-list内p */
  for ($i = 1; $i <= $c2h2; $i++) {
    $wp_customize->add_section('content2_list_p_' . $i, array(
      'title' => 'コンテンツ2_テキスト' . $i,
      'panel' => 'content02',
      'priority' => 30,
    ));
    $wp_customize->add_setting('content2_list_p_text' . $i, array(
      'default' => $default_c2p[$i - 1],
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('content2_list_p_text' . $i, array(
      'settings' => 'content2_list_p_text' . $i,
      'label' => 'コンテンツ2_テキスト' . $i,
      'section' => 'content2_list_p_' . $i,
      'type' => 'text',
    ));
    $wp_customize->selective_refresh->add_partial('content2_list_p_text' . $i, array(
      'selector' => '.c2-p-text' . $i, // セレクターを実際の出力に合わせて変更する
      'container_inclusive' => false,
    ));
  }
  /*----------------------------------------------------------------------
      content3
      -----------------------------------------------------------------------*/
    $default_c3h2 = ['低価格な料金設定', '迅速な対応・幅広い連絡手段'];
    $default_c3p = ['一般的にウェブサイト制作するとなると小規模な物でもどうしても数十万円単位でお金がかかってきます。当方では小規模なウェブサイトを制作する場合、一桁万円から制作可能です。', '当方では日中夜間、平日土日を問わず素早い連絡が可能です。chatworkやskype、discord等幅広いチャットアプリでの連絡が可能です。お取引の際に普段連絡手段として使用しているアプリで連絡を行いたい場合もお気軽にお申し付けください。'];
  /* content3-list内h2 */
  $wp_customize->add_panel('content03', array(
    'title' => 'コンテンツ3',
    'priority' => 30,
  ));
  $wp_customize->add_section('content3_h2', array(
    'title' => 'コンテンツ3_h2テキスト',
    'panel' => 'content03',
    'priority' => 30,
  ));
  $wp_customize->add_setting('content3_h2_text', array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('content3_h2_text', array(
    'settings' => 'content3_h2_text',
    'label' => 'コンテンツ3_h2テキスト',
    'section' => 'content3_h2',
    'type' => 'text',
  ));
  $wp_customize->selective_refresh->add_partial('content3_h2_text', array(
    'selector' => '.c3-h2-text', // セレクターを実際の出力に合わせて変更する
    'container_inclusive' => false,
  ));
  /* content3-list内h2ここまで */

  /* content3内見出し*/
  $c3list = 2;
  for ($i = 1; $i <= $c3list; $i++) {
    $wp_customize->add_section('content3_list_h2_' . $i, array(
      'title' => 'コンテンツ3_リスト_h2テキスト' . $i,
      'panel' => 'content03',
      'priority' => 30,
    ));
    $wp_customize->add_setting('content3_list_h2_text' . $i, array(
      'default' => $default_c3h2[$i - 1],
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('content3_list_h2_text' . $i, array(
      'settings' => 'content3_list_h2_text' . $i,
      'label' => 'コンテンツ3_リスト_h2テキスト' . $i,
      'section' => 'content3_list_h2_' . $i,
      'type' => 'text',
    ));
  
  $wp_customize->selective_refresh->add_partial('content3_list_h2_text'.$i, array(
    'selector' => '.c3-list-h2-text'.$i, // セレクターを実際の出力に合わせて変更する
    'container_inclusive' => false,
  ));
}
  /* content3内見出しここまで */

  /* content3背景画像 */
  for ($i = 1; $i <= $c3list; $i++) :
    $wp_customize->add_section('content3_list_back_img' . $i, array(
      'title' => 'コンテンツ3_リスト_背景画像' . $i,
      'panel' => 'content03',
      'priority' => 30,
    ));
    $wp_customize->add_setting('content3_list_back_image' . $i, array(
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field',
    ));
    if (class_exists('WP_Customize_Image_Control')) :
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'content3_list_back_image' . $i, array(
        'settings' => 'content3_list_back_image' . $i,
        'label' => 'コンテンツ3_リスト_背景画像' . $i,
        'section' => 'content3_list_back_img' . $i,
        'description' => 'リスト内の画像を選択してください',
      )));
    endif;
  endfor;
  /* content3背景画像ここまで */

  /* content3本文*/
  for ($i = 1; $i <= $c3list; $i++) {
    $wp_customize->add_section('content3_list_p' . $i, array(
      'title' => 'コンテンツ3_リスト_本文' . $i,
      'panel' => 'content03',
      'priority' => 30,
    ));
    $wp_customize->add_setting('content3_list_text' . $i, array(
      'default' => $default_c3p[$i - 1],
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('content3_list_text' . $i, array(
      'settings' => 'content3_list_text' . $i,
      'label' => 'コンテンツ3_リスト_本文' . $i,
      'section' => 'content3_list_p' . $i,
      'type' => 'text',
    ));
    $wp_customize->selective_refresh->add_partial('content3_list_text' . $i, array(
      'selector' => '.c3-list-text' . $i, // セレクターを実際の出力に合わせて変更する
      'container_inclusive' => false,
    ));
  }
  /* content3内見出しここまで */
  $wp_customize->add_panel('profile', array(
    'title' => 'プロフィール',
    'panel' => 'profile',
    'priority' => 40,
  ));


  /* content4 h2 */
  $wp_customize->add_panel('content04', array(
    'title' => 'コンテンツ3',
    'priority' => 30,
  ));
  $wp_customize->add_section('content4_h2', array(
    'title' => 'コンテンツ3_h2テキスト',
    'panel' => 'content03',
    'priority' => 30,
  ));
  $wp_customize->add_setting('content4_h2_text', array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('content4_h2_text', array(
    'settings' => 'content4_h2_text',
    'label' => 'コンテンツ3_h2テキスト',
    'section' => 'content4_h2',
    'type' => 'text',
  ));
  $wp_customize->selective_refresh->add_partial('content4_h2_text', array(
    'selector' => '.c4-h2-text', // セレクターを実際の出力に合わせて変更する
    'container_inclusive' => false,
  ));
  /* content4 h2ここまで */


  /* contact-in h2 */
  $wp_customize->add_panel('contact-in', array(
    'title' => 'コンテンツ3',
    'priority' => 30,
  ));
  $wp_customize->add_section('contact-in-h2', array(
    'title' => 'コンテンツ3_h2テキスト',
    'panel' => 'content03',
    'priority' => 30,
  ));
  $wp_customize->add_setting('contact_in_h2', array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('contact_in_h2', array(
    'settings' => 'contact_in_h2',
    'label' => 'お問い合わせ_h2テキスト',
    'section' => 'contact-in-h2',
    'type' => 'text',
  ));
  $wp_customize->selective_refresh->add_partial('contact_in_h2', array(
    'selector' => '.contact-in-h2', // セレクターを実際の出力に合わせて変更する
    'container_inclusive' => false,
  ));
  /* contact-in h2ここまで */


  /*----------------------------------------------------------------------
    profile
    -----------------------------------------------------------------------*/
  /* profile画像を編集*/
  $wp_customize->add_section('profile-img-sec', array(
    'title' => '画像',
    'panel' => 'profile',
    'priority' => 30,
  ));
  $wp_customize->add_setting('profile_image', array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'esc_url_raw',
  ));
  if (class_exists('WP_Customize_Image_Control')) :
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'profile_image', array(
      'settings' => 'profile_image',
      'label' => 'プロフィール画像の選択',
      'section' => 'profile-img-sec',
      'description' => 'プロフィール画像を選択してください',
    )));
  endif;
  $wp_customize->selective_refresh->add_partial('profile_image', array(
    'selector' => '.profile-img01', // セレクターを実際の出力に合わせて変更する
    'container_inclusive' => false,
  ));


  /* profile大見出しの編集 */
  $wp_customize->add_section('profile_h2', array(
    'title' => 'プロフィール大見出し',
    'panel' => 'profile',
    'priority' => 30,
  ));
  $wp_customize->add_setting('profile_h2_text', array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('profile_h2_text', array(
    'settings' => 'profile_h2_text',
    'label' => 'プロフィール大見出し',
    'section' => 'profile_h2',
    'type' => 'text',
  ));
  $wp_customize->selective_refresh->add_partial('profile_h2_text', array(
    'selector' => '.profile-h2', // セレクターを実際の出力に合わせて変更する
    'container_inclusive' => false,
  ));
  /* profile大見出しの編集ここまで */
  
  /* profile名前の編集 デフォルトでは使用しない*/
  $wp_customize->add_section('profile_text', array(
    'title' => 'プロフィール（本文）',
    'panel' => 'profile',
    'priority' => 30,
  ));
  $wp_customize->add_setting('profile_p_text', array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('profile_p_text', array(
    'settings' => 'profile_p_text',
    'label' => 'プロフィール（本文）',
    'section' => 'profile_text',
    'type' => 'text',
  ));
  $wp_customize->selective_refresh->add_partial('profile_p_text', array(
    'selector' => '.profile-p', // セレクターを実際の出力に合わせて変更する
    'container_inclusive' => false,
  ));
  /* profile名前はここまで */

  /* profileスキル(名前) デフォルトでは使用しない*/
  $wp_customize->add_section('profile-skill-h2-text', array(
    'title' => 'プロフィールスキル（名前）',
    'panel' => 'profile',
    'priority' => 30,
  ));
  $wp_customize->add_setting('profile_skill_h2_text', array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('profile_skill_h2_text', array(
    'settings' => 'profile_skill_h2_text',
    'label' => 'プロフィールスキル（名前）',
    'section' => 'profile-skill-h2-text',
    'type' => 'text',
  ));
  $wp_customize->selective_refresh->add_partial('profile_skill_h2_text', array(
    'selector' => '.profile-skill-h2-text', // セレクターを実際の出力に合わせて変更する
    'container_inclusive' => false,
  ));
  /* profileスキル(名前)はここまで */

  
}
add_action('customize_register', 'theme_customize_register');

//スキルをカスタム投稿形式で記載する
function create_skill_content_post_type() {
  register_post_type('skill_content',
      array(
          'labels' => array(
              'name' => __('スキル'),
              'singular_name' => __('スキル')
          ),
          'public' => true,
          'has_archive' => false,
          'rewrite' => array('slug' => 'skill_content'),
          'supports' => array('title', 'editor', 'thumbnail'),
      )
  );
}
add_action('init', 'create_skill_content_post_type');
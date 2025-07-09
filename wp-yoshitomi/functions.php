<?php

// ショートコード
// テーマurl
function shortcode_templateurl() {
  return get_bloginfo('template_url');
}
add_shortcode('template_url', 'shortcode_templateurl');
add_filter('widget_text', 'do_shortcode');

// url
function shortcode_url() {
  return get_bloginfo('url');
}
add_shortcode('url', 'shortcode_url');


// Bootstrap Navwalkerを使えるようにする
require_once('wp_bootstrap_navwalker.php');


// アイキャッチ画像を使用
add_theme_support('post-thumbnails');

// アイキャッチ画像サイズ属性削除
add_filter( 'post_thumbnail_html', 'custom_attribute' );
function custom_attribute( $html ){
    // width height を削除する
    $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
    return $html;
}


// 投稿記事一覧にアイキャッチ画像を表示
function manage_posts_columns($columns) {
  $columns['thumbnail'] = __('Thumbnail');
  return $columns;
}
function add_column($column_name, $post_id) {
  if ( 'thumbnail' == $column_name) {
    $thum = get_the_post_thumbnail($post_id, array(75,75), 'thumbnail');
  }
  if ( isset($thum) && $thum ) {
    echo $thum;
  } else {
    echo __('None');
  }
}
add_filter( 'manage_posts_columns', 'manage_posts_columns' );
add_action( 'manage_posts_custom_column', 'add_column', 10, 2 );


// 画像の不要な属性を削除
function remove_img_attr($html) {
  $html = preg_replace('/ (width|height)."\d*"/', '', $html);
  $html = preg_replace('/ class=".+"/', ' class=""', $html);
  return $html;
}
add_filter('get_image_tag', 'remove_img_attr');


// ウィジェット
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(4) )
  register_sidebars(1,
    array(
      'name'=>'年代別リスト',
      'before_widget' => '<div class="cat_list">',
      'after_widget' => '</div>',
      ));

function exclude_widget_categories( $args){
    $exclude = '6,7,9,10,11';          // 除外するカテゴリーのIDをカンマ区切りで指定
    $args['exclude'] = $exclude;
    return $args;
}
add_filter( 'widget_categories_args', 'exclude_widget_categories');


//不要なデフォルトウィジェットを非表示
function unregister_widgets(){
unregister_widget('WP_Widget_Pages');//固定ページ
unregister_widget('WP_Widget_Links');//リンク集
//unregister_widget('WP_Widget_Search');//サイト内検索フォーム
//unregister_widget('WP_Widget_Archives');//月別アーカイブ
unregister_widget('WP_Widget_Meta');//めた情報(login/outなど)
// unregister_widget('WP_Widget_Calendar');//カレンダー
//unregister_widget('WP_Widget_Text');//任意のテキストとHTML
//unregister_widget('WP_Widget_Categories');//カテゴリーリスト
//unregister_widget('WP_Widget_Recent_Posts');//最近の投稿
unregister_widget('WP_Widget_Recent_Comments');//最近のコメント
unregister_widget('WP_Widget_RSS');//RSSフィード
//unregister_widget('WP_Widget_Tag_Cloud');//タグクラウド
//unregister_widget('WP_Nav_Menu_Widget');//ナビゲーションメニュー
}
add_action('widgets_init', 'unregister_widgets');



// カテゴリ情報を取得する。
function apt_category_info($tax='category') {
  global $post;
  $cat = get_the_terms($post->ID, $tax);
  $obj = new stdClass;
  if ($cat) {
    $cat = array_shift($cat);
    $obj->name = $cat->name;
    $obj->slug = $cat->slug;
  } else {
    $obj->name = '';
    $obj->slug = '';
  }
  return $obj;
}

// ギャラリーのスタイルシートを消す
add_filter( 'use_default_gallery_style', '__return_false' );

// 確認メールアドレス
add_filter( 'wpcf7_validate_email', 'wpcf7_text_validation_filter_extend', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_text_validation_filter_extend', 11, 2 );
function wpcf7_text_validation_filter_extend( $result, $tag ) {
  $type = $tag['type'];
  $name = $tag['name'];
  $_POST[$name] = trim( strtr( (string) $_POST[$name], "\n", " " ) );
  if ( 'email' == $type || 'email*' == $type ) {
    if (preg_match('/(.*)_confirm$/', $name, $matches)){
      $target_name = $matches[1];
      if ($_POST[$name] != $_POST[$target_name]) {
        if (method_exists($result, 'invalidate')) {
          $result->invalidate( $tag,"確認用のメールアドレスが一致していません");
        } else {
          $result['valid'] = false;
          $result['reason'][$name] = '確認用のメールアドレスが一致していません';
        }
      }
    }
  }
  return $result;
}

// デバイスの切り分け
function is_iphone()
{
  $ua = $_SERVER['HTTP_USER_AGENT'];
  if(
    strpos($ua, 'iPhone')!== false||
    strpos($ua, 'iPod')!== false
    )
  {
    return true;
  }
  else
  {
    return false;
  }
}
function is_android()
{
  $ua = $_SERVER['HTTP_USER_AGENT'];
  if(
    strpos($ua, 'Android')!== false&&strpos($ua, 'Mobile')!== false
    )
  {
    return true;
  }
  else
  {
    return false;
  }
}
function is_firefox_os()
{
  $ua = $_SERVER['HTTP_USER_AGENT'];
  if(
    strpos($ua, 'Android')=== false&&strpos($ua, 'Firefox')!== false&&strpos($ua, 'Mobile')!== false
    )
  {
    return true;
  }
  else
  {
    return false;
  }
}
function is_windows_phone()
{
  $ua = $_SERVER['HTTP_USER_AGENT'];
  if(
    strpos($ua, 'Windows')!== false&&strpos($ua, 'Phone')!== false
    )
  {
    return true;
  }
  else
  {
    return false;
  }
}
function is_blackberry()
{
  $ua = $_SERVER['HTTP_USER_AGENT'];
  if(
    strpos($ua, 'BlackBerry')!== false
    )
  {
    return true;
  }
  else
  {
    return false;
  }
}
function is_ktai()
{
  $ua = $_SERVER['HTTP_USER_AGENT'];
  if(
    strpos($ua, 'DoCoMo')!== false||
    strpos($ua, 'KDDI')!== false||
    strpos($ua, 'UP.Browser')!== false||
    strpos($ua, 'MOT-')!== false||
    strpos($ua, 'J-PHONE')!== false||
    strpos($ua, 'WILLCOM')!== false||
    strpos($ua, 'Vodafone')!== false||
    strpos($ua, 'SoftBank')!== false
    )
  {
    return true;
  }
  else
  {
    return false;
  }
}
function is_mymobile()
{
  if(
    is_ktai()||
    is_iphone()||
    is_android()||
    is_firefox_os()||
    is_windows_phone()||
    is_blackberry()
    )
  {
    return true;
  }
  else
  {
    return false;
  }
}

// Webpアップロード
function add_file_types_to_uploads( $mimes ) {
  $mimes['webp'] = 'image/webp';
  return $mimes;
}
add_filter( 'upload_mimes', 'add_file_types_to_uploads' );
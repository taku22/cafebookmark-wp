<?php
//テーマのセットアップ
// HTML5でマークアップさせる
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );
//アイキャッチ画像を使用する設定
add_theme_support( 'post-thumbnails' );

function bundle_scripts (){
  wp_enqueue_script( 'bundle_scripts', get_template_directory_uri() .'/dist/javascripts/bundle.js', '', '', true );
}
add_action( 'wp_enqueue_scripts' , 'bundle_scripts' );

add_filter( 'tiny_mce_before_init', 'custom_tiny_mce_formats' );
function custom_tiny_mce_formats( $settings ){
  $settings[ 'block_formats' ] = '段落=p;見出し1=h2;見出し2=h3;見出し3=h4;';
  return $settings;
}

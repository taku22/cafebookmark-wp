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

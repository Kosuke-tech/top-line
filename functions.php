<?php

/*----------------------------------------------------------------------------
    cssファイルとjsファイルをfunctions.phpで管理。
-----------------------------------------------------------------------------*/

function theme_files()
{
    wp_enqueue_style('style.css', get_theme_file_uri('/css/style.css'), ['min.css'], '6.7.2');
    wp_enqueue_style('min.css', get_theme_file_uri('/css/style.min.css'),);
    wp_enqueue_script('jquery',);
    wp_enqueue_script('script.js', get_theme_file_uri('js/script.js'), ['jquery'], 'null', true);
}

add_action('wp_enqueue_scripts', 'theme_files');

/*----------------------------------------------------------------------------
    投稿編集画面で、アイキャッチ画像の設定を有効化する
-----------------------------------------------------------------------------*/

add_theme_support('post-thumbnails', ['post']);
// ※add_theme_supportは、テーマの機能を追加する関数。
// add_theme_supportが持っているオブジェクトのpost-thumbnailsというプロパティを引数に指定し、
// アクセスすることで、投稿画面にてサムネイルの設定を有効化することができる。
// 特定の投稿タイプに限定して機能を追加したい場合は、
// 第二引数に配列で、投稿タイプのslugを指定する。


add_image_size('270_200', 270, 200, true);
add_image_size('540_400', 540, 400, true);
// add_image_size('course_plan_img', 300, 250, true);
// the_post_thumbnailは、自動的にHTMLとしてsrcsetmを出力するので、２倍サイズの画像も作っておく。
// ただしadd_imege_sizeで指定した画像サイズ(1倍サイズ)より元々小さいサイズの画像をアップロードした場合、
// 大きい画像は作れないので、srcsetは、出力されない。



function img_uncompressed() {
    return 100;
}
add_filter('jpeg_quality', 'img_uncompressed');
// リサイズされたjoeg画像の品質を100%にした。


/*----------------------------------------------------------------------------
    アーカイブページの抜粋文の長さの変更
-----------------------------------------------------------------------------*/

function change_excerpt_length($length)
{
    $length = 50;
    if (is_front_page()) {
        return 50; //リターンをした時点で処理は、終了する。
    }
    return $length; //デフォルトで110文字
}

add_filter('excerpt_length', 'change_excerpt_length', 999);


/*----------------------------------------------------------------------------
    archive.php(コラム一覧ページ)のURLの指定
-----------------------------------------------------------------------------*/

function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'column';
        $args['label'] = 'コラム';
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

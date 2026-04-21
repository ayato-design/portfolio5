<?php
function mytheme_enqueue_assets() {
    // CSS
    wp_enqueue_style(
        'main-style',
        get_stylesheet_uri()
    );

    // JavaScript
    wp_enqueue_script(
        'main-script',
        get_template_directory_uri() . '/js/java.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');

    // single.php(投稿ページ)の画像非表示
function remove_images_from_content($content) {
    if (is_single()) {
        $content = preg_replace('/<img[^>]+\>/i', '', $content);
    }
    return $content;
}
add_filter('the_content', 'remove_images_from_content');

    // single.php(投稿ページ)の画像位置調整
function get_first_image_from_content() {
    global $post;
    preg_match('/<img[^>]+>/i', $post->post_content, $matches);

    if (!empty($matches[0])) {
        return $matches[0]; // imgタグそのまま返す
    }

    return '';
}

    // アイキャッチ画像対応設定
function setup_theme() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'setup_theme');

    // Contact Form7のp/br自動挿入禁止
add_filter('wpcf7_autop_or_not', '__return_false');
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/\s*size="\d+"/', '', $content);
    $content = preg_replace('/\s*cols="\d+"/', '', $content);
    $content = preg_replace('/\s*rows="\d+"/', '', $content);
    return $content;
});

?>
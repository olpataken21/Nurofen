<?php

function my_theme_assets() {

    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );

    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        '1.0'
    );
     wp_enqueue_style(
        'fancybox-css',
        'https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox/fancybox.css',
        array(),
        '6.1.0'
    );

    wp_enqueue_script(
        'fancybox-js',
        'https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox/fancybox.umd.js',
        array(),
        '6.1.0',
        true
    );

    wp_enqueue_script(
        'theme-script',
        get_template_directory_uri() . '/assets/js/script.js',
        array(),
        '1.0',
        true
    );

    

}

add_action('wp_enqueue_scripts', 'my_theme_assets');



/**
 * Преобразует обычные ссылки YouTube, RuTube и VK в embed-ссылки для Fancybox
 */
function get_video_embed_url($url) {

    if (empty($url)) {
        return '';
    }

    $url = trim($url);

    // Уже embed-ссылка
    if (
        strpos($url, 'youtube.com/embed/') !== false ||
        strpos($url, 'rutube.ru/play/embed/') !== false ||
        strpos($url, 'vkvideo.ru/video_ext.php') !== false
    ) {
        return $url;
    }

    // YouTube: https://www.youtube.com/watch?v=XXXX
    if (preg_match('~youtube\.com/watch\?v=([^&]+)~i', $url, $matches)) {
        return 'https://www.youtube.com/embed/' . $matches[1];
    }

    // YouTube: https://youtu.be/XXXX
    if (preg_match('~youtu\.be/([^?&/]+)~i', $url, $matches)) {
        return 'https://www.youtube.com/embed/' . $matches[1];
    }

    // RuTube: https://rutube.ru/video/XXXXXXXX/
    if (preg_match('~rutube\.ru/video/([a-zA-Z0-9]+)~i', $url, $matches)) {
        return 'https://rutube.ru/play/embed/' . $matches[1] . '/';
    }

    // VK: https://vkvideo.ru/video-123_456
    if (preg_match('~vkvideo\.ru/video(-?\d+)_(\d+)~i', $url, $matches)) {
        return 'https://vkvideo.ru/video_ext.php?oid=' . $matches[1] . '&id=' . $matches[2] . '&hd=4';
    }

    return $url;
}


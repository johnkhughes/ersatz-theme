<?php

add_action('wp_enqueue_scripts', function () {
    $styles = [
        'ersatz-theme-style' => 'dist/css/style.min.css',
    ];

    $deps = [];

    // Theme styles
    foreach ($styles as $handle => $style) {
        $url = path_join(THEME_URL, $style);
        $file = path_join(THEME_DIR, $style);
        $version = is_file($file) ? md5_file($file) : null;

        wp_enqueue_style($handle, $url, $deps, $version);
    }

    // WordPress styles
    // wp_enqueue_style('jquery');

    // External styles
    // wp_enqueue_style('example', 'https://www.example.com/');
});

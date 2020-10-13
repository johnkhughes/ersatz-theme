<?php

add_action('wp_enqueue_scripts', function () {
    $scripts = [
        'ersatz-theme-script' => 'dist/js/script.min.js',
    ];

    $deps = [
        'jquery',
    ];

    // Theme scripts
    foreach ($scripts as $handle => $script) {
        $url = path_join(THEME_URL, $script);
        $file = path_join(THEME_DIR, $script);
        $version = is_file($file) ? md5_file($file) : null;

        wp_enqueue_script($handle, $url, $deps, $version);
    }

    // WordPress scripts
    // wp_enqueue_script('jquery');

    // External scripts
    // wp_enqueue_script('example', 'https://www.example.com/');
});

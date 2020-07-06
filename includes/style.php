<?php

add_action('wp_enqueue_scripts', function () {
    $styles = [
        'ersatz-theme-style' => [
            'src' => 'dist/css/style.min.css',
        ],

        // 'example' => [
        //     'src' => 'https://www.example.com/example.css',
        //     'deps' => [
        //         'ersatz-theme-style',
        //     ]
        // ],
    ];

    foreach ($styles as $handle => $style) {
        $src = $style['src'] ?? null;
        $deps = $style['deps'] ?? [];

        // No source? Assume WordPress style handle.
        if (!$src) {
            wp_enqueue_style($handle);

            continue;
        }

        // Source has domain? Assume external style.
        if (!is_null(parse_url($src, PHP_URL_HOST))) {
            wp_enqueue_style($handle, $src, $deps);

            continue;
        }

        // Enqueue theme style with version number based on file modified time.
        $path = '/' . ltrim($src, '/');
        $url = THEME_URL . $path;
        $file = THEME_DIR . $path;

        if (!file_exists($file)) {
            continue;
        }

        wp_enqueue_style($handle, $url, $deps, filemtime($file));
    }
});

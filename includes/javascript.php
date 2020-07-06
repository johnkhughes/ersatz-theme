<?php

add_action('wp_enqueue_scripts', function () {
    $scripts = [
        'ersatz-theme-script' => [
            'src' => 'dist/js/script.min.js',
        ],

        // 'jquery' => [],

        // 'example' => [
        //     'src' => 'https://www.example.com/example.js',
        //     'deps' => [
        //         'ersatz-theme-script',
        //         'jquery',
        //     ]
        // ],
    ];

    foreach ($scripts as $handle => $script) {
        $src = $script['src'] ?? null;
        $deps = $script['deps'] ?? [];

        // No source? Assume WordPress script handle.
        if (!$src) {
            wp_enqueue_script($handle);

            continue;
        }

        // Source has domain? Assume external script.
        if (!is_null(parse_url($src, PHP_URL_HOST))) {
            wp_enqueue_script($handle, $src, $deps);

            continue;
        }

        // Enqueue theme script with version number based on file modified time.
        $path = '/' . ltrim($src, '/');
        $url = THEME_URL . $path;
        $file = THEME_DIR . $path;

        if (!file_exists($file)) {
            continue;
        }

        wp_enqueue_script($handle, $url, $deps, filemtime($file));
    }
});

<?php

add_action('acf/init', function () {
    add_local_field_group([
        'title' => 'Example',
        'key' => 'ersatz_theme__example',
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ],
            ],
        ],
        'fields' => [
            [
                'label' => 'Foo',
                'key' => 'ersatz_theme__example__foo',
                'name' => 'foo',
                'type' => 'text',
            ],

            [
                'label' => 'Bar',
                'key' => 'ersatz_theme__example__bar',
                'name' => 'bar',
                'type' => 'text',
            ],
        ],
    ]);
});

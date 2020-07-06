<?php

add_filter('get_the_archive_title', function ($title) {
    $pattern = '/^(category|tag|author|year|month|day|archives): /i';

    return preg_replace($pattern, '', $title);
});

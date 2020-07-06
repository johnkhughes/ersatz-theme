<!DOCTYPE html>
<html <?php language_attributes() ?>>
    <head>
        <!-- Site build by Castlegate <https://www.castlegateit.co.uk/> -->

        <meta charset="<?php bloginfo('charset') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php wp_head() ?>
    </head>

    <body <?php body_class() ?>>
        <?php wp_body_open() ?>

        <div>
            <h1>
                <a href="<?= home_url('/') ?>">
                    <?php bloginfo('name') ?>
                </a>
            </h1>

            <div>
                <?php

                wp_nav_menu([
                    'theme_location' => 'main-nav',
                ]);

                ?>
            </div>
        </div>

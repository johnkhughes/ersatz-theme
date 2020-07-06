<div id="comments">
    <?php

    if (have_comments()) {
        echo '<h2>Comments</h2>';
        echo '<ol>';

        wp_list_comments([
            'style' => 'ol',
        ]);

        echo '</ol>';

        if (get_comment_pages_count() > 1 && get_option('page_comments')) {
            echo previous_comments_link('Previous comments');
            echo next_comments_link('Next comments');
        }

        if (!comments_open() && get_comments_number()) {
            echo '<p>Comments are closed.</p>';
        }
    }

    comment_form();

    ?>
</div>

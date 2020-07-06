<?php

get_header();

?>

<div>
    <h1>Search: <?= get_search_query() ?></h1>

    <?php

    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_title('<h2><a href="' . get_permalink() . '">', '</a></h2>');
            the_date(null, '<p>', '</p>');
            the_excerpt();
        }
    } else {
        echo '<p>No posts found.</p>';
    }

    echo paginate_links();

    ?>
</div>

<?php

get_footer();

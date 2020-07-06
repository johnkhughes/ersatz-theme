<?php

get_header();

?>

<div>
    <h1>Posts</h1>

    <?php

    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_title('<h2><a href="' . get_permalink() . '">', '</a></h2>');
            the_date(null, '<p>', '</p>');
            the_excerpt();
        }
    }

    echo paginate_links();

    ?>
</div>

<?php

get_footer();

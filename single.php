<?php

get_header();
the_post();

?>

<div>
    <?php

    the_title('<h1>', '</h1>');
    the_date(null, '<p>', '</p>');
    the_content();
    comments_template();

    ?>
</div>

<?php

get_footer();

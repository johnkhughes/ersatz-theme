<?php

get_header();
the_post();

?>

<div>
    <?php

    the_title('<h1>', '</h1>');
    the_content();

    ?>
</div>

<?php

get_footer();

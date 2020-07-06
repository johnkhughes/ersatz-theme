<?php

$constants = [
    'AJAX_URL',
    'GOOGLE_MAPS_API_KEY',
    'THEME_URL',
];

?>

<script>
    <?php

    foreach ($constants as $constant) {
        if (!defined($constant)) {
            continue;
        }

        $value = (string) constant($constant);

        echo "$constant = '$value';";
    }

    ?>
</script>

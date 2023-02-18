<?php

/** @var TYPE_NAME $theme_settings */

header("Content-type: text/css; charset: UTF-8"); //look carefully to this line

$primary_color = $theme_settings['primary_colour'];
$secondary_color = $theme_settings['secondary_colour'];
$support_color = $theme_settings['support_colour'];
$background_color = $theme_settings['background_colour'];

$typo_primary_color = $theme_settings['typo_primary_colour'];
$typo_secondary_color = $theme_settings['typo_secondary_colour'];
$typo_support_color = $theme_settings['typo_support_colour'];


?>
<style>
    :root
    {
        --theme-primary: <?php echo $primary_color; ?>;
        --theme-secondary: <?php echo $secondary_color; ?>;
        --theme-support: <?php echo $support_color; ?>;
        --theme-background: <?php echo $background_color; ?>;
        --typo-primary: <?php echo $typo_primary_color; ?>;
        --typo-secondary: <?php echo $typo_secondary_color; ?>;
        --typo-support: <?php echo $typo_support_color; ?>;
    }
</style>


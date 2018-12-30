<?php
    ob_start();

    if (function_exists('add_theme_support')) {
        add_theme_support('post-thumbnails');
    }

    if (function_exists('acf_add_options_page')) {
        acf_add_options_page();
    }

?>
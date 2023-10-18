<?php

    function laszlos_files() {
        wp_enqueue_style('laszlos_main_styles', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'laszlos_files' );

?>
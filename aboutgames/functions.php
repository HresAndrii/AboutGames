<?php
add_action('wp_enqueue_scripts', 'scripts');

function scripts(): void {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('css', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js', array('jquery'), null, true);
}

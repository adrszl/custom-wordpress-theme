<?php
function custom_wordpress_theme_register_styles()
{
    // setting our styles version dynamically
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'bootstrap',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css',
        [],
        '4.4.1',
        'all'
    );
    wp_enqueue_style(
        'font-awasome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css',
        [],
        '5.13.0',
        'all'
    );
    wp_enqueue_style(
        'custom-wordpress-theme-styles',
        get_template_directory_uri() . '/style.css',
        ['bootstrap'],
        $version,
        'all'
    );
}

function custom_wordpress_theme_register_scripts()
{
    wp_enqueue_script(
        'jquery',
        'https://code.jquery.com/jquery-3.4.1.slim.min.js',
        [],
        '3.4.1',
        true
    );
    wp_enqueue_script(
        'popper',
        'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',
        [],
        '1.16.0',
        true
    );
    wp_enqueue_script(
        'bootstrap',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',
        [],
        '4.4.1',
        true
    );
    wp_enqueue_script(
        'custom-wordpress-theme-scripts',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'custom_wordpress_theme_register_scripts');
?>

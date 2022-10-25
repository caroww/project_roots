<?php

/** User Scripts*/
function enqueue_bf_wp_user_script()
{
    if (!is_admin()) {
        wp_enqueue_script('jquery');

        wp_enqueue_script(
            'bf',
            plugins_url('assets/js/bf-js.js', __FILE__),
            array( 'jquery' ),
            filemtime(plugin_dir_path(__FILE__) . 'assets/js/bf-js.js'),
            true
        );

        wp_enqueue_style(
            'bf',
            plugins_url('/assets/css/bf-css.css', __FILE__),
            array(),
            filemtime(plugin_dir_path(__FILE__) . '/assets/css/bf-css.css'),
            'all'
        );
    }
}
add_action('wp_enqueue_scripts', 'enqueue_bf_wp_user_script');
    
/** Admin Scripts*/
function enqueue_bf_wp_admin_script()
{
    wp_enqueue_script(
        'bf-admin',
        plugins_url('assets/js/bf-js.js', __FILE__),
        array( 'jquery' ),
        filemtime(plugin_dir_path(__FILE__) . 'assets/js/bf-js.js'),
        true
    );

    wp_enqueue_style(
        'bf-admin',
        plugins_url('/assets/css/bf-css.css', __FILE__),
        array(),
        filemtime(plugin_dir_path(__FILE__) . '/assets/css/bf-css.css'),
        'all'
    );
}
add_action('admin_enqueue_scripts', 'enqueue_bf_wp_admin_script');

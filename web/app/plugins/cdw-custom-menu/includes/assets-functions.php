<?php

/** User Scripts*/
function enqueue_cdwcm_user_script()
{
    if (!is_admin()) {
        wp_enqueue_script('jquery');

        wp_enqueue_script(
            'cdwcm',
            plugins_url('assets/js/cdwcm-js.js', __FILE__),
            array( 'jquery' ),
            filemtime(plugin_dir_path(__FILE__) . 'assets/js/cdwcm-js.js'),
            true
        );

        wp_enqueue_style(
            'cdwcm',
            plugins_url('/assets/css/cdwcm-css.css', __FILE__),
            array(),
            filemtime(plugin_dir_path(__FILE__) . '/assets/css/cdwcm-css.css'),
            'all'
        );
    }
}
add_action('wp_enqueue_scripts', 'enqueue_cdwcm_user_script');
    
/** Admin Scripts*/
function enqueue_cdwcm_admin_script()
{
    wp_enqueue_script(
        'cdwcm-admin',
        plugins_url('assets/js/cdwcm-js.js', __FILE__),
        array( 'jquery' ),
        filemtime(plugin_dir_path(__FILE__) . 'assets/js/cdwcm-js.js'),
        true
    );

    wp_enqueue_style(
        'cdwcm-admin',
        plugins_url('/assets/css/cdwcm-css.css', __FILE__),
        array(),
        filemtime(plugin_dir_path(__FILE__) . '/assets/css/cdwcm-css.css'),
        'all'
    );
}
add_action('admin_enqueue_scripts', 'enqueue_cdwcm_admin_script');

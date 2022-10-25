<?php
/*
Plugin Name: Cdw Custom Menu
Version: 1.0
Description: Met en forme les items des menus de navigation
Author: C.Dubois
Text Domain: Project Roots
*/

add_action('init', function () {

    include dirname(__FILE__) . '/includes/assets-functions.php';
    include dirname(__FILE__) . '/includes/Controllers/class-cdwcm-menus-controller.php';
    include dirname(__FILE__) . '/includes/Shortcodes/class-cdwcm-display-menu.php';

});

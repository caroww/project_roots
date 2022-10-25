<?php
/*
Plugin Name: Basic Functions WP
Version: 1
Description: Contient des fonctions de base utilisées dans le thème
Author: C.Dubois
Text Domain: Project Roots
*/

add_action('init', function () {

    include dirname(__FILE__) . '/includes/display-posts-functions.php';
    include dirname(__FILE__) . '/includes/display-menus-functions.php';
    include dirname(__FILE__) . '/includes/Controllers/class-bf-menus-controller.php';
});

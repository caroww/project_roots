<?php

/** Get menu and submenu items
 Source : https://stackoverflow.com/questions/72293586/how-do-i-generate-a-custom-menu-wp-get-nav-menu-items-into-fourth-level */

//function get_menu_array($menu_name) {
//
//    $locations = get_nav_menu_locations();
//    $current_menu = wp_get_nav_menu_object($locations[$menu_name] );
//
//    $array_menu = wp_get_nav_menu_items($current_menu);
//    $menu = array();
//    foreach ($array_menu as $m) {
//        if (empty($m->menu_item_parent)) {
//        $menu[$m->ID] = array();
//        $menu[$m->ID]['ID']          =   $m->ID;
//        $menu[$m->ID]['title']       =   $m->title;
//        $menu[$m->ID]['url']         =   $m->url;
//        $menu[$m->ID]['children']    =   array();
//        }
//    }
//    $submenu = array();
//    foreach ($array_menu as $m) {
//        if ($m->menu_item_parent) {
//        $submenu[$m->ID] = array();
//        $submenu[$m->ID]['ID']       =   $m->ID;
//        $submenu[$m->ID]['title']    =   $m->title;
//        $submenu[$m->ID]['url']      =   $m->url;
//        $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
//        }
//    }
//    return $menu;
//}
//
//function display_menu($menu_name){
//
//    $menu_items = (new Bf_Menu_Controller())->test($menu_name);
//
//    dd($menu_items);
////    echo '<ul class="">';
////    foreach ($menu_items as $item) {
////        echo '<li class="mb-3">';
////        if (isset($item['title'])) {
////            if (!empty($item['children'])) {
////                echo '<a class="" href="' . $item['url'] . '" title="' . $item['title'] . '" data-toggle="" data-target=""></a>
////                      <a class="" onclick="" href="' . $item['url'] . '" title="' . $item['title'] . '">' . $item['title'] . '</a>';
////            } else {
////                echo '<a class="" onclick="" href="' . $item['url'] . '" title="' . $item['title'] . '">' . $item['title'] . '</a>';
////            }
////        }
////
////        echo '</ul>';
////    }
//
//}
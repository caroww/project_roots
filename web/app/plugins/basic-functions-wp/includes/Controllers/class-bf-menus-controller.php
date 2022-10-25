<?php

class Bf_Menu_Controller
{
    /** Get menu and submenu items
    Original source  : https://stackoverflow.com/questions/72293586/how-do-i-generate-a-custom-menu-wp-get-nav-menu-items-into-fourth-level */

    public function get_menu_array($menu_name)
    {
        $locations = get_nav_menu_locations();
        $current_menu = wp_get_nav_menu_object($locations[$menu_name]);

        $array_menu = wp_get_nav_menu_items($current_menu);

        $menu = (object)[];
        foreach ($array_menu as $m) {
            if (empty($m->menu_item_parent)) {
                $menu->{$m->ID} = (object)[];
                $menu->{$m->ID}->ID          =   $m->ID;
                $menu->{$m->ID}->title       =   $m->title;
                $menu->{$m->ID}->url         =   $m->url;
                $menu->{$m->ID}->children    =   (object)[];
            }
        }

        $submenu = (object)[];
        foreach ($array_menu as $m) {
            if ($m->menu_item_parent) {
                $submenu->{$m->ID}  = (object)[];
                $submenu->{$m->ID}->ID       =   $m->ID;
                $submenu->{$m->ID}->title    =   $m->title;
                $submenu->{$m->ID}->url      =   $m->url;
                $menu->{$m->menu_item_parent}->children->{$m->ID} = $submenu->{$m->ID};
            }
        }
        return $menu;
    }

    public function display_menu($menu_name)
    {

        $menu_items = $this->get_menu_array($menu_name);

        $menu_ul_open = '<ul class="">';
        $menu_li='';

        foreach ($menu_items as $item) {
            $open_li = '<li class="mb-3">';
            if (isset($item->title)) {
                if (!empty($item->children)) {
                    $add_a = '<a class="" href="' . $item->url . '" title="' . $item->title . '" data-toggle="" data-target="">' . $item->title . '</a>';
                }
            }
            $close_li = '</li>';
            $menu_li .= $open_li . $add_a . $close_li;
        }
        $menu_ul_close = '</ul>';

        return $menu_ul_open . $menu_li . $menu_ul_close;
    }
}

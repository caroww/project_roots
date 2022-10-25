<?php
class BfDisplayMenu
{
    public function __construct()
    {
        add_shortcode('bfDisplayMenu', array($this, 'display_menu'));
    }

    public function display_menu($att)
    {
         return (new Bf_Menu_Controller())->generate_menu_html($att['menu_name']);
    }

}

new BfDisplayMenu();
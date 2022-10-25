<?php
class CdwcmDisplayMenu
{
    public function __construct()
    {
        add_shortcode('CdwcmDisplayMenu', array($this, 'display_menu'));
    }

    public function display_menu($att)
    {
         return (new CdwcmMenuController())->generate_menu_html($att['menu_name']);
    }
}

new CdwcmDisplayMenu();

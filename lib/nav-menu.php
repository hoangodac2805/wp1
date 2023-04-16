<?php
function register_my_menus()
{
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu')
        )
    );
}
add_action('init', 'register_my_menus');

//-----change active class
function custom_nav_menu_class($classes, $item)
{
    $classes = str_replace('current-menu-item', 'active', $classes);
    return $classes;
}
add_filter('nav_menu_css_class', 'custom_nav_menu_class', 10, 2);
?>
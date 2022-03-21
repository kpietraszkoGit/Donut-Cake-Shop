<?php 

if (!function_exists('dcs_theme_setup')):
    function dcs_theme_setup() {

        register_nav_menus([
            'main_menu' => 'Main menu',
        ]);
    }
endif;

add_action('after_setup_theme', 'dcs_theme_setup');


// function wpb_first_and_last_menu_class($items) {
//     $items[1]->classes[] = 'first';
//     $items[2]->classes[] = 'second';
//     $items[count($items)]->classes[] = 'last';
//     return $items;
// }
// add_filter('wp_nav_menu_objects', 'wpb_first_and_last_menu_class');



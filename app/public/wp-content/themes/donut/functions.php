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

function get_post_gallery_images_with_info($postvar = NULL) {
    if(!isset($postvar)){
        global $post;
        $postvar = $post;//if the param wasnt sent
    }


    $post_content = $postvar->post_content;
    preg_match('/\[gallery.*ids=.(.*).\]/', $post_content, $ids);
    $images_id = explode(",", $ids[1]); //we get the list of IDs of the gallery as an Array


    $image_gallery_with_info = array();
    //we get the info for each ID
    foreach ($images_id as $image_id) {
        $attachment = get_post($image_id);
        array_push($image_gallery_with_info, array(
            'alt' => get_post_meta($attachment->ID, '_wp_attachment_image_alt', true),
            'caption' => $attachment->post_excerpt,
            'description' => $attachment->post_content,
            'href' => get_permalink($attachment->ID),
            'src' => $attachment->guid,
            // 'title' => $attachment->post_title
                )
        );
    }
    return $image_gallery_with_info;
}


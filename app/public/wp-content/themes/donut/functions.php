<?php 

if (!function_exists('dcs_theme_setup')):
    function dcs_theme_setup() {

        register_nav_menus([
            'main_menu' => 'Main menu',
        ]);
    }
endif;

add_action('after_setup_theme', 'dcs_theme_setup');

function get_post_gallery_images_with_info($postvar = NULL) {
    if(!isset($postvar)){
        global $post;
        $postvar = $post;
    }


    $post_content = $postvar->post_content;
    preg_match('/\[gallery.*ids=.(.*).\]/', $post_content, $ids);
    $images_id = explode(",", $ids[1]);


    $image_gallery_with_info = array();
    foreach ($images_id as $image_id) {
        $attachment = get_post($image_id);
        array_push($image_gallery_with_info, array(
            'alt' => get_post_meta($attachment->ID, '_wp_attachment_image_alt', true),
            'caption' => $attachment->post_excerpt,
            'description' => $attachment->post_content,
            'href' => get_permalink($attachment->ID),
            'src' => $attachment->guid,
                )
        );
    }
    return $image_gallery_with_info;
}

?>

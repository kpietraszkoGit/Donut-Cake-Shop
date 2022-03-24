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

// function acf_portfolio_item_block() {
	
// 	// check function exists
// 	if( function_exists('acf_register_block') ) {
		
// 		// register a portfolio item block
// 		acf_register_block(array(
// 			'name'				=> 'portfolio-item',
// 			'title'				=> __('Portfolio Item'),
// 			'description'		=> __('A custom block for portfolio items.'),
// 			'render_template'	=> 'template-parts/blocks/portfolio-item/block-portfolio-item.php',
// 			'category'			=> 'layout',
// 			'icon'				=> 'excerpt-view',
// 			'keywords'			=> array( 'portfolio' ),
// 		));
// 	}
// }

// add_action('acf/init', 'acf_portfolio_item_block');

// register_post_type('event', array(
//     'capability_type' => 'event',
//     'map_meta_cap' => true,
//     'show_in_rest' => true,
//     'supports' => array('title', 'editor', 'excerpt'),
//     'rewrite' => array('slug' => 'events'),
//     'has_archive' => true,
//     'public' => true,
//     'labels' => array(
//       'name' => 'Events',
//       'add_new_item' => 'Add New Event',
//       'edit_item' => 'Edit Event',
//       'all_items' => 'All Events',
//       'singular_name' => 'Event'
//     ),
//     'menu_icon' => 'dashicons-calendar'
// ));


// add_action('acf/init', "include_usblocks");
// function include_usblocks(){
// 		global $usblocks;
// 		if( function_exists('acf_register_block') ) {
// 			$usblocks_active = $usblocks->getActiveBlocks();
// 			//echo "<pre>".print_r($usblocks_active,1)."</pre>";
// 			foreach($usblocks_active AS $block){
// 				require_once dirname(__FILE__)."/blocks/$block/block.php";
// 			}
// 		}else{
// 			echo "function 'acf_register_block' not available";
// 		}
// 	}

//     if( function_exists('acf_register_block') ) {
// 		$usblocks_active = $usblocks->getActiveBlocks();
// 		//echo "<pre>".print_r($usblocks_active,1)."</pre>";
// 		foreach($usblocks_active AS $block){
// 			require_once dirname(__FILE__)."/blocks/$block/block_render.php";
// 		}
// 	}

//     acf_register_block(array(
// 		'name'				=> 'featuredarticle',
// 		'title'				=> __('Featured Article', "usblocks"),
// 		'description'		=> __('Ein Featured-Article Block', "usblocks"),
// 		'render_callback'	=> 'block_featuredarticle_html',
// 		'category'		=> 'layout',
// 		'icon'			=> 'admin-comments',
// 		'keywords'		=> array("article", "featured")
// 	));
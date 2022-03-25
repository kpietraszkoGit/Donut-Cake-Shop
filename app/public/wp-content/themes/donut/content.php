<?php    
    $gallery = get_post_gallery_images_with_info($post);
    foreach( $gallery as $image_obj ) :    
?>                                

    <div class="item" style="background-image: url('<?php echo $image_obj['src'] ?>'); background-size: cover">
        <div class="caption">                
            <h2><?php echo $image_obj['caption']." ".$image_obj['description']; ?></h2>
        </div>                                        
    </div>
<?php    
endforeach;
?>






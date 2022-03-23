<!-- <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <h2>GALERIA ZDJEC</h2>
    <h2><?php the_title() ?></h2>
    <?php the_excerpt() ?>
<?php endwhile; else:?>
    <h2>Brak zdjęć w galerii</h2>
<?php endif; ?> -->


<!-- <?php if (have_posts()): while (have_posts()) : the_post();
    $id = the_title();
    $p = get_post($id);
    echo apply_filters('the_content', $p->post_content);
    ?>
<?php endwhile; else:?>
    <h2>Brak zdjęć w galerii</h2>
<?php endif; ?> -->

<!-- <?php if (have_posts()):
    $id = the_post();
    $p = get_post($id);
    echo apply_filters('the_content', $p->post_content);
    ?>
<?php else:?>
    <h2>Brak zdjęć w galerii</h2>
<?php endif; ?> -->



<?php    
    $gallery = get_post_gallery_images_with_info($post); //you can use it without params too
    foreach( $gallery as $image_obj ) :    
?>                                

    <div class="item" style="background-image: url('<?php echo $image_obj['src'] ?>'); background-size: cover">
        <div class="caption">                
            <!-- Here I want display the Title/Caption/ALT/Description of image -->
            <h2><?php echo $image_obj['caption']." ".$image_obj['description']; ?> </h2>
        </div>                                        
    </div>
<?php    
endforeach;
?>





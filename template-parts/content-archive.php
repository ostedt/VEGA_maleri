<div class="content">
   
    <?php $post_image_id = get_post_thumbnail_id($post_to_use->ID);
    
        if ($post_image_id) {
            
            $thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
            
            if ($thumbnail) (string)$thumbnail = $thumbnail[0];
            
        } 
    ?>



        <a href="<?php echo esc_url( get_permalink() ); ?>">
            <div class="archive-img" style="background-image: url('<?php echo $thumbnail; ?>')"></div>

            <?php the_title( '<h3>', '</h3>'); ?>
                <?php the_excerpt(); ?>
                    


            </div>
    </a>
    


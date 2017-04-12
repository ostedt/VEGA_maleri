<div class="content-post">
    <!-- get archive view for post  with link around title and excerpt-->
        <a href="<?php echo esc_url( get_permalink()); ?>"><?php the_title( '<h3>', '</h3>'); ?></a>
            <?php the_excerpt(); ?>
                
</div>


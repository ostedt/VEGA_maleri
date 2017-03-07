<?php get_header(); ?>

    
<?php $post_image_id = get_post_thumbnail_id($post_to_use->ID);
    
		if ($post_image_id) {
            
			$thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
            
			if ($thumbnail) (string)$thumbnail = $thumbnail[0];
            
		} 
    ?>

        <div class="single-header" style="background-image: url('<?php echo $thumbnail; ?>')">
            <?php the_title('<h2 class="single_page_h2">','</h2>'); ?>
</div>



    <div class="container">

    <?php while ( have_posts() ) : the_post(); ?>
        
        <?php get_template_part( 'template-parts/content' ); ?>

    <?php endwhile; ?>


<?php get_footer(); ?>
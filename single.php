<?php get_header(); ?>

<div class="container">

<?php
if ( is_user_logged_in() ){ ?>

    <div class="row">

        <?php the_title('<h2 class="single_page_h2">','</h2>'); ?>

        <?php while ( have_posts() ) : the_post(); ?>
            
            <?php get_template_part( 'template-parts/content' ); ?>

        <?php endwhile; ?>

    </div>

    <?php }else{ ?>

    	<div class="row">
        
	    	<h2>För att nå medarbetarsidan måste du logga in!</h2>

	    </div>

    <?php } ?>

</div>

<?php get_footer(); ?>
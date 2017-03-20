<?php

/**
*Template Name: Case
*/

?>

<?php get_header(); ?>
    
    <?php while ( have_posts() ) : the_post(); ?>

    	<div class="container">
    	<div class="row">

        <h1 class=""><?php the_title(); ?></h1>
			<div class="h2-underline-container">
		    <div class="h2-underline"></div>
        
        <?php VEGA_get_latest_cases(); ?>

        </div>
        </div>
        
    <?php endwhile; ?>

<?php get_footer(); ?>

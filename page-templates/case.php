<?php

/**
*Template Name: Case
*/

?>

<?php get_header(); ?>

<div class="container">

    <!-- Adding header with img and text -->

     <div class="subpage-header" style="background-image: url('<?php the_field("ref-header-img"); ?>');">

     <div class="row">

          <?php if( get_field('ref-header-heading') ): ?>
              <h1><?php the_field('ref-header-heading'); ?></h1>

                        <?php if( get_field('ref-header-text') ): ?>
                            <?php the_field('ref-header-text'); ?>
                        <?php endif; ?>
          <?php endif; ?>

        </div>

    </div>
    
    <!-- Adding cases to page, if there is some -->

    <?php while ( have_posts() ) : the_post(); ?>

    	<div class="row">

            <?php VEGA_get_all_cases(); ?>

        </div>
        
    <?php endwhile; ?>

</div>

<?php get_footer(); ?>

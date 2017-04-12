<?php

/**
*Template Name: Case
*/

?>

<?php get_header(); ?>

<div class="container">

    <!-- Adding header with img and text -->

      <div style="background-image: url('<?php echo the_field("ref-header-img"); ?>')" class="header-frontp">
    <div class="row">
      <div class="header-container">
          <!-- Adding header text -->
          <?php if( get_field('ref-header-heading') ): ?>
            <h1 class="h1-heading-frontp"><?php the_field('ref-header-heading'); ?></h1>  
          <?php endif; ?>

          <!-- Adding small text under header-->
          <?php if( get_field('ref-header-text') ): ?>
            <div class="section-bread section-bread-no-btn">
              <?php the_field('ref-header-text'); ?>
            </div>
          <?php endif; ?>
    
        </div>

    </div>
    
  </div>


    <!-- Adding cases to page, if there is some -->

    <?php while ( have_posts() ) : the_post(); ?>

    	<div class="row">
          <div class="case-archive-container">
          <!-- activate function fron functions.php -->
            <?php VEGA_get_all_cases(); ?>
          </div>
        </div>
        
    <?php endwhile; ?>

</div>

<?php get_footer(); ?>

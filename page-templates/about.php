<?php 
/*
* Template Name: About
*/
?>

<?php get_header(); ?>


<?php if( get_field('part1_about_heading') ) :?>
    <h2><?php the_field('part1_about_heading'); ?></h2>
    <div class="h2-underline-container">
    	<div class="h2-underline"></div>
    </div>
    
  <?php if( get_field('part1_about_breadtext') ) : ?>
    <?php the_field('part1_about_breadtext'); ?>
  <?php endif; ?>

  <?php if( get_field('part1_about_img') ): ?>
  	<div id="" class="" style="background-image: url('<?php echo the_field("part1_about_img"); ?>')"></div>
  <?php endif; ?>

<?php endif; ?>

<?php if( get_field('part2_about_heading') ) :?>

  <?php if( get_field('part2_about_img') ): ?>
  	<div id="" class="" style="background-image: url('<?php echo the_field("part2_about_img"); ?>')"></div>
  <?php endif; ?>

    <h2><?php the_field('part2_about_heading'); ?></h2>
    <div class="h2-underline-container">
    	<div class="h2-underline"></div>
    </div>
    
  <?php if( get_field('part2_about_breadtext') ) : ?>
    <?php the_field('part2_about_breadtext'); ?>
  <?php endif; ?>

<?php endif; ?>

<?php if( get_field('part3_about_heading') ) :?>
    <h2><?php the_field('part3_about_heading'); ?></h2>
    <div class="h2-underline-container">
    	<div class="h2-underline"></div>
    </div>
    
  <?php if( get_field('part3_about_breadtext') ) : ?>
    <?php the_field('part3_about_breadtext'); ?>
  <?php endif; ?>

  <?php if( get_field('part3_about_img') ): ?>
  	<div id="" class="" style="background-image: url('<?php echo the_field("part3_about_img"); ?>')"></div>
  <?php endif; ?>

<?php endif; ?>

<?php get_footer(); ?>
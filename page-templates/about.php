<?php 
/*
* Template Name: About
*/
?>

<?php get_header(); ?>

<?php if( get_field('part1_about_heading') ) :?>
	<div id="part1" class="about-page-section">
		<div>
		    <h1><?php the_field('part1_about_heading'); ?></h1>
		    <div class="h2-underline-container">
		    	<div class="h2-underline"></div>
		    </div>
		    
		  <?php if( get_field('part1_about_breadtext') ) : ?>
		    <?php the_field('part1_about_breadtext'); ?>
		  <?php endif; ?>
		</div>

	  <?php if( get_field('part1_about_img') ): ?>
	  	<div id="" class="" style="background-image: url('<?php echo the_field("part1_about_img"); ?>')"></div>
	  <?php endif; ?>

	</div>
<?php endif; ?>

<?php if( get_field('part2_about_heading') ) :?>
	<div id="part2" class="about-page-section">

		  <?php if( get_field('part2_about_img') ): ?>
		  	<div id="" class="" style="background-image: url('<?php echo the_field("part2_about_img"); ?>')"></div>
		  <?php endif; ?>

		<div>
		    <h2><?php the_field('part2_about_heading'); ?></h2>
		    <div class="h2-underline-container">
		    	<div class="h2-underline"></div>
		    </div>
		    
		  <?php if( get_field('part2_about_breadtext') ) : ?>
		    <?php the_field('part2_about_breadtext'); ?>
		  <?php endif; ?>
		</div>
	</div>
<?php endif; ?>

<?php if( get_field('part3_about_heading') ) :?>
	<div id="part3" class="about-page-section">

		<div>
		    <h2><?php the_field('part3_about_heading'); ?></h2>
		    <div class="h2-underline-container">
		    	<div class="h2-underline"></div>
		    </div>
		    
			  <?php if( get_field('part3_about_breadtext') ) : ?>
			    <?php the_field('part3_about_breadtext'); ?>
			  <?php endif; ?>
		  </div>

	  <?php if( get_field('part3_about_img') ): ?>
	  	<div id="" class="" style="background-image: url('<?php echo the_field("part3_about_img"); ?>')"></div>
	  <?php endif; ?>

	</div>
<?php endif; ?>

<?php if( get_field('part4_about_heading') ) :?>
	<div id="part4" class="about-page-section">

		  <?php if( get_field('part4_about_img') ): ?>
		  	<div id="" class="" style="background-image: url('<?php echo the_field("part4_about_img"); ?>')"></div>
		  <?php endif; ?>

		<div>
		    <h2><?php the_field('part4_about_heading'); ?></h2>
		    <div class="h2-underline-container">
		    	<div class="h2-underline"></div>
		    </div>
		    
		  <?php if( get_field('part4_about_breadtext') ) : ?>
		    <?php the_field('part4_about_breadtext'); ?>
		  <?php endif; ?>
		</div>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
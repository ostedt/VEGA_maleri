<?php 
/*
* Template Name: About
*/
?>

<?php get_header(); ?>

<div class="container">

<!-- add section one in ACF - about page with img-->

	<?php if( get_field('part1_about_heading') ) :?>
		<?php if( get_field('part1_about_img') ): ?>
		<div class="subpage-header col-xs-12 about-page-section" style="background-image: url('<?php echo the_field("part1_about_img"); ?>')">
		<div class="row">

			<div class="col-xs-12 col-md-8">
			    <h1><?php the_field('part1_about_heading'); ?></h1>
			    
			  <?php if( get_field('part1_about_breadtext') ) : ?>
			    <?php the_field('part1_about_breadtext'); ?>
			  <?php endif; ?>
			</div>
			</div>

		</div>
		<?php endif; ?>
	<?php endif; ?>

<!-- add section two in ACF - about page no img-->

	<?php if( get_field('part2_about_heading') ) :?>
		<div class="subpage-header subpage-block-color-grey col-xs-12 about-page-section">
		<div class="row">

			<div class="col-xs-12 col-md-8">
			    <h1><?php the_field('part2_about_heading'); ?></h1>
			    
			  <?php if( get_field('part2_about_breadtext') ) : ?>
			    <?php the_field('part2_about_breadtext'); ?>
			  <?php endif; ?>
			</div>
			</div>

		</div>
	<?php endif; ?>

<!-- add section three in ACF - about page with img-->

	<?php if( get_field('part3_about_heading') ) :?>
		<?php if( get_field('part3_about_img') ): ?>
		<div class="subpage-header col-xs-12 about-page-section" style="background-image: url('<?php echo the_field("part3_about_img"); ?>')">
		<div class="row">

			<div class="col-xs-12 col-md-8">
			    <h1><?php the_field('part3_about_heading'); ?></h1>
			    
			  <?php if( get_field('part3_about_breadtext') ) : ?>
			    <?php the_field('part3_about_breadtext'); ?>
			  <?php endif; ?>
			</div>
			</div>

		</div>
		<?php endif; ?>
	<?php endif; ?>

	<!-- add section four in ACF - about page no img-->

	<?php if( get_field('part4_about_heading') ) :?>
		<div class="subpage-header subpage-block-color-grey col-xs-12 about-page-section">
		<div class="row">

			<div class="col-xs-12 col-md-8">
			    <h1><?php the_field('part4_about_heading'); ?></h1>
			    
			  <?php if( get_field('part4_about_breadtext') ) : ?>
			    <?php the_field('part4_about_breadtext'); ?>
			  <?php endif; ?>
			</div>
			</div>

		</div>
	<?php endif; ?>

</div>

<?php get_footer(); ?>
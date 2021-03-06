<?php 
/*
* Template Name: About
*/
?>

<?php get_header(); ?>

<div class="container about-page">
  <!-- Adding header-img -->
  <div style="background-image: url('<?php echo the_field("part_about_img"); ?>')" class="header-frontp">
    <div class="row">
      <div class="header-container">
          <!-- Adding header text -->
          <?php if( get_field('part_about_heading') ): ?>
            <h1 class="h1-heading-frontp"><?php the_field('part_about_heading'); ?></h1>  
          <?php endif; ?>

          <!-- Adding small text under header-->
          <?php if( get_field('part_about_breadtext') ): ?>
            <div class="section-bread section-bread-no-btn">
              <?php the_field('part_about_breadtext'); ?>
            </div>
          <?php endif; ?>

        </div>

    </div>
  	
  </div>

<!-- add section one in ACF - about page with img-->

<div class="about-frontp container section about-small">
<?php if( get_field('part1_about_img') ) :?>
  <div class="inner" style="background-image: url('<?php echo the_field("part1_about_img"); ?>'); background-size: cover; background-position: center;"></div>
<?php endif; ?>

  <div class="inner">
  <div class="inner-about-text">
    <?php if( get_field('part1_about_heading') ) :?>
              <h2><?php the_field('part1_about_heading'); ?></h2>
              <div class="h2-underline-container"><div class="h2-underline"></div></div>
                
                <!-- adding breadtext to about -->
                <?php if( get_field('part1_about_breadtext') ) : ?>
                  <?php the_field('part1_about_breadtext'); ?>
                <?php endif; ?>

            <?php endif; ?>
            </div>
  </div>
  
  
</div>


<!-- Big section of one -->

<div class="about-frontp container section about-big">
<?php if( get_field('part1_about_img') ) :?>
  <div class="inner" style="background-image: url('<?php echo the_field("part1_about_img"); ?>'); background-size: cover; background-position: center;"></div>
<?php endif; ?>

  <div class="inner">
  <div class="inner-about-text">
    <?php if( get_field('part1_about_heading') ) :?>
              <h2><?php the_field('part1_about_heading'); ?></h2>
              <div class="h2-underline-container"><div class="h2-underline"></div></div>
                
                <!-- adding breadtext to about -->
                <?php if( get_field('part1_about_breadtext') ) : ?>
                  <?php the_field('part1_about_breadtext'); ?>
                <?php endif; ?>

            <?php endif; ?>
            </div>
  </div>
  
  
</div>


<!-- add section two in ACF - about page no img-->

<div class="about-frontp container section about-small">
<?php if( get_field('part2_about_img') ) :?>
  <div class="inner" style="background-image: url('<?php echo the_field("part2_about_img"); ?>'); background-size: cover; background-position: center;"></div>
<?php endif; ?>

  <div class="inner">
  <div class="inner-about-text">
    <?php if( get_field('part2_about_heading') ) :?>
              <h2><?php the_field('part2_about_heading'); ?></h2>
              <div class="h2-underline-container"><div class="h2-underline"></div></div>
                
                <!-- adding breadtext to about -->
                <?php if( get_field('part2_about_breadtext') ) : ?>
                  <?php the_field('part2_about_breadtext'); ?>
                <?php endif; ?>

            <?php endif; ?>
            </div>
  </div>
  
  
</div>


<!-- Big section of two -->

<div class="about-frontp container section about-big">

  <div class="inner">
  <div class="inner-about-text">
    <?php if( get_field('part2_about_heading') ) :?>
              <h2><?php the_field('part2_about_heading'); ?></h2>
              <div class="h2-underline-container"><div class="h2-underline"></div></div>
                
                <!-- adding breadtext to about -->
                <?php if( get_field('part2_about_breadtext') ) : ?>
                  <?php the_field('part2_about_breadtext'); ?>
                <?php endif; ?>

            <?php endif; ?>
            </div>
  </div>
  <?php if( get_field('part2_about_img') ) :?>
  <div class="inner" style="background-image: url('<?php echo the_field("part2_about_img"); ?>'); background-size: cover; background-position: center;"></div>
<?php endif; ?>
  
</div>
	
<!-- add section three in ACF - about page with img-->

<div class="about-frontp container section about-small">
<?php if( get_field('part3_about_img') ) :?>
  <div class="inner" style="background-image: url('<?php echo the_field("part3_about_img"); ?>'); background-size: cover; background-position: center;"></div>
<?php endif; ?>

  <div class="inner">
  <div class="inner-about-text">
    <?php if( get_field('part3_about_heading') ) :?>
              <h2><?php the_field('part3_about_heading'); ?></h2>
              <div class="h2-underline-container"><div class="h2-underline"></div></div>
                
                <!-- adding breadtext to about -->
                <?php if( get_field('part3_about_breadtext') ) : ?>
                  <?php the_field('part3_about_breadtext'); ?>
                <?php endif; ?>

            <?php endif; ?>
            </div>
  </div>
  
  
</div>

<!-- Big section of three -->

<div class="about-frontp container section about-big">
<?php if( get_field('part3_about_img') ) :?>
  <div class="inner" style="background-image: url('<?php echo the_field("part3_about_img"); ?>'); background-size: cover; background-position: center;"></div>
<?php endif; ?>

  <div class="inner">
  <div class="inner-about-text">
    <?php if( get_field('part3_about_heading') ) :?>
              <h2><?php the_field('part3_about_heading'); ?></h2>
              <div class="h2-underline-container"><div class="h2-underline"></div></div>
                
                <!-- adding breadtext to about -->
                <?php if( get_field('part3_about_breadtext') ) : ?>
                  <?php the_field('part3_about_breadtext'); ?>
                <?php endif; ?>

            <?php endif; ?>
            </div>
  </div>
  
  
</div>

	<!-- add section four in ACF - about page no img-->

<div class="about-frontp container section about-small">
<?php if( get_field('part4_about_img') ) :?>
  <div class="inner" style="background-image: url('<?php echo the_field("part4_about_img"); ?>'); background-size: cover; background-position: center;"></div>
<?php endif; ?>

  <div class="inner">
  <div class="inner-about-text">
    <?php if( get_field('part4_about_heading') ) :?>
              <h2><?php the_field('part4_about_heading'); ?></h2>
              <div class="h2-underline-container"><div class="h2-underline"></div></div>
                
                <!-- adding breadtext to about -->
                <?php if( get_field('part4_about_breadtext') ) : ?>
                  <?php the_field('part4_about_breadtext'); ?>
                <?php endif; ?>

            <?php endif; ?>
            </div>
  </div>
  
  
</div>

</div>


<!-- Big section of four -->
<div class="about-frontp container section about-big">

  <div class="inner">
  <div class="inner-about-text">
    <?php if( get_field('part4_about_heading') ) :?>
              <h2><?php the_field('part4_about_heading'); ?></h2>
              <div class="h2-underline-container"><div class="h2-underline"></div></div>
                
                <!-- adding breadtext to about -->
                <?php if( get_field('part4_about_breadtext') ) : ?>
                  <?php the_field('part4_about_breadtext'); ?>
                <?php endif; ?>

            <?php endif; ?>
            </div>
  </div>
  <?php if( get_field('part4_about_img') ) :?>
  <div class="inner" style="background-image: url('<?php echo the_field("part4_about_img"); ?>'); background-size: cover; background-position: center;"></div>
<?php endif; ?>
  
</div>


</div>

<?php get_footer(); ?>
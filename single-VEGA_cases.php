<?php get_header(); ?>

<div class="container">

     <div style="background-image: url('<?php echo the_field("case_big_img"); ?>')" class="">

        <div class="row">

          <div class="header-container">

              <?php if( get_field('case_heading ') ): ?>
                <h1 class=""><?php the_field('case_heading '); ?></h1>  
              <?php endif; ?>

            </div>

        </div>

    </div>

    <div class="row">

        <?php if( get_field('header-breadtext') ): ?>
                <div class="section-bread">
                  <?php the_field('header-breadtext'); ?>
                </div>
              <?php endif; ?>

              <?php if( get_field('header-btn-text') ): ?>
                <div class="btn-cover">
                  <a class="btn-round" href="<?php the_field('header-btn-link'); ?>"><?php the_field('header-btn-text'); ?></a>
                </div>
              <?php endif; ?>

    </div>
    
</div>

<?php get_footer(); ?>
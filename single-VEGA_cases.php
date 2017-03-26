<?php get_header(); ?>

<div class="container">

  <div class="row">

    <?php if( get_field('case_heading') ): ?>
      <h1 class=""><?php the_field('case_heading'); ?></h1>  
    <?php endif; ?>

    <?php if( get_field('case_breadtext') ): ?>
      <div class="">
        <p><?php the_field('case_breadtext'); ?></p>
      </div>
    <?php endif; ?>





    

    </div>
    
</div>

<?php get_footer(); ?>
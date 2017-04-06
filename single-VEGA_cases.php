<?php get_header(); ?>

<!-- single page for Cases -->

<div class="container">

<!-- Bootstrap carousel -->

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <?php //if( get_field('case_big_img1') ) :?>
      <div class="item active">
        <div class="carousel-img" style="background-image: url('<?php the_field("case_big_img"); ?>')">
          <div class="carousel-caption">
             <?php if( get_field('heading_case1') ): ?>
              <h2 class=""><?php the_field('heading_case1'); ?></h2>  
            <?php endif; ?>
            <?php if( get_field('text_case1') ): ?>
              <?php the_field('text_case1'); ?> 
            <?php endif; ?>
          </div>
          </div>
      </div>
    <?php //endif; ?>

    <?php //if( get_field('case_big_img2') ) :?>
        <div class="item">
      <div class="carousel-img" style="background-image: url('<?php the_field("case_big_img2"); ?>')">
      <div class="carousel-caption">
        <?php if( get_field('heading_case2') ): ?>
          <h2 class=""><?php the_field('heading_case2'); ?></h2>  
        <?php endif; ?>
        <?php if( get_field('text_case2') ): ?>
          <?php the_field('text_case2'); ?> 
        <?php endif; ?>
      </div>
      </div>
    </div>
  <?php //endif; ?>

    <?php //if( get_field('case_big_img3') ) :?>
        <div class="item">
      <div class="carousel-img" style="background-image: url('<?php the_field("case_big_img3"); ?>')">
      <div class="carousel-caption">
        <?php if( get_field('heading_case3') ): ?>
          <h2 class=""><?php the_field('heading_case3'); ?></h2>  
        <?php endif; ?>
        <?php if( get_field('text_case3') ): ?>
          <?php the_field('text_case3'); ?> 
        <?php endif; ?>
        </div>
        </div>
    </div>
  <?php //endif; ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">

  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">

  </a>
</div>

  <div class="row">

    <!-- get ACF fields thats filled with content-->

     <div class="col-xs-12 col-md-8 col-md-offset-2 single-container-content">
     <h1 class=""><?php the_field('heading_case1'); ?></h1>  
        <p><?php the_field('case_breadtext'); ?></p>
<div class="btn-content-centered">
      <button class="btn-round" onclick="goBack()">Tillbaka till föregående sida</button>
</div>
        <script>
        function goBack() {
            window.history.back();
        }
        </script>

      </div>

    </div>
    
</div>

<?php get_footer(); ?>
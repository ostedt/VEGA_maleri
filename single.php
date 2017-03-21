<?php get_header(); ?>

<div class="container">

    <div class="row">

        <?php the_title('<h2 class="single_page_h2">','</h2>'); ?>

        <?php while ( have_posts() ) : the_post(); ?>
            
            <?php get_template_part( 'template-parts/content' ); ?>

        <?php endwhile; ?>

    </div>

</div>

<?php get_footer(); ?>
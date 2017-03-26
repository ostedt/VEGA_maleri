<?php get_header(); ?>

<div class="container">

<?php if( get_field('emp_header_heading') ) :?>
    <?php if( get_field('emp_header_img') ): ?>
        <div class="subpage-header col-xs-12 about-page-section" style="background-image: url('<?php echo the_field("emp_header_img"); ?>')">
            <div class="row">

                <div class="col-xs-12 col-md-8">
                    <h1><?php the_field('emp_header_heading'); ?></h1>
                
                    <?php if( get_field('emp_header_breadtext') ) : ?>
                        <?php the_field('emp_header_breadtext'); ?>
                    <?php endif; ?>
                </div>
            </div>

        </div>
        <?php endif; ?>
    <?php endif; ?>

    <div class="row">

        <?php wp_nav_menu( array( 'theme_location' => 'medarbetare', 'menu_class' => 'menu-medarbetare' ) ); ?>
        
            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content', 'archive' ); ?>

            <?php endwhile; ?>
            
            <?php 
                the_posts_pagination( array(
                    'prev_text' => 'Föregående',
                    'next_text' => 'Nästa'
                ));
            ?>

    </div>
</div>

<?php get_footer(); ?>
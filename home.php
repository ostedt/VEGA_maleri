<?php get_header(); ?>
    
    <h1 class="">Medarbetare</h1>


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

<?php get_footer(); ?>
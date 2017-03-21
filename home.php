<?php get_header(); ?>

<div class="container">
    <div class="row">
    
         <h1 class="">Medarbetare</h1>
                <div class="h2-underline-container">
                <div class="h2-underline"></div>


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
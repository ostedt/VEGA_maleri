<?php get_header(); ?>

<!-- "Medarbetarsidan" -->

<div class="container">

<!-- Checking if user is logged in -->

<?php if ( is_user_logged_in() ){

    /* If user is logged in, show content from ACF if it is used*/ 

    if( get_field('emp_header_heading', 11) ) :?>
    <?php if( get_field('emp_header_img', 11) ): ?>
        <div class="subpage-header col-xs-12 about-page-section" style="background-image: url('<?php echo the_field("emp_header_img", 11); ?>')">
            <div class="row">

                <div class="col-xs-12 col-md-8">
                    <h1><?php the_field('emp_header_heading', 11); ?></h1>
                
                    <?php if( get_field('emp_header_breadtext', 11) ) : ?>
                        <?php the_field('emp_header_breadtext', 11); ?>
                    <?php endif; ?>
                </div>
            </div>

        </div>
        <?php endif; ?>
    <?php endif; ?>

    <div class="row">

  
       <div class="container-medarbetare col-xs-12 col-md-8">
        
            <!-- IF posts exist, show em with structure from content-archive file, use paginations if theres many.  -->

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


                <div class="sidebar-medarbetare col-xs-12 col-md-4">
                  <!-- Get menu "Medarbetar"-menu with pages connected to employees -->
                <?php wp_nav_menu( array( 'theme_location' => 'medarbetare', 'menu_class' => 'menu-medarbetare' ) ); ?>

                <li id="archives"><?php _e('Nyhetsarkiv'); ?>
                     <ul>
                        <?php wp_get_archives('type=monthly'); ?>
                     </ul>
                </li>
                                
            </div>
        </div>
<?php
   
}else{ ?>
    
    <!-- If user is not logged in, show content below -->

    <div class="row">
        
    <h2>För att nå medarbetarsidan måste du logga in!</h2>

    </div>
 
    <?php } ?>
</div>

<?php get_footer(); ?>
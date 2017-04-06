<?php get_header(); ?>

<!-- "Medarbetarsidan" -->



<!-- Checking if user is logged in -->

<?php if ( is_user_logged_in() ){

    /* If user is logged in, show content from ACF if it is used*/ 

      ?>
<div class="container">
      <div style="background-image: url('<?php echo the_field('emp_header_img', 11); ?>')" class="header-frontp">
    <div class="row">
      <div class="header-container">
          <!-- Adding header text -->
          <?php if( get_field('emp_header_heading', 11) ): ?>
            <h1 class="h1-heading-frontp"><?php the_field('emp_header_heading', 11); ?></h1>  
          <?php endif; ?>

          <!-- Adding small text under header-->
          <?php if( get_field('emp_header_breadtext', 11) ): ?>
            <div class="section-bread section-bread-no-btn">
              <?php the_field('emp_header_breadtext', 11); ?>
            </div>
          <?php endif; ?>

        </div>

    </div>
    
  </div>

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
                <?php wp_nav_menu( array( 'theme_location' => 'medarbetare', 'menu_class' => 'menu-medarbetare') ); ?>

                <li id="archives"><?php _e('Nyhetsarkiv'); ?>
                     <ul>
                        <?php wp_get_archives('type=monthly'); ?>
                     </ul>
                </li>
                                
            </div>
        </div></div>
<?php
   
}else{ ?>
    
    <!-- If user is not logged in, show content below -->
<div class="container container-member-notlogedin">
    <div class="row" style="padding-top:100px">
    
    <h2 class="login-member-text">För att nå medarbetarsidan måste du logga in!</h2>
    <div class="login-member-form col-sm-8 col-sm-offset-2 col-md-4  col-md-offset-4">
    <?php wp_login_form(array(
        'label_username' => __( 'Användarnamn' ),
        'label_password' => __( 'Lösenord' ),
        'label_remember' => __( 'Kom ihåg mig' ),
        'label_log_in'   => __( 'Logga in' ),
        )); ?>

    </div>
 </div>
 </div>
    <?php } ?>


<?php get_footer(); ?>
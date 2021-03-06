<?php get_header(); ?>

<!-- Single post for medarbetar-posts -->

<div class="container">

<!-- Check if user is logged in -->

<?php if ( is_user_logged_in() ){ 

    if( get_field('emp_header_heading', 11) ) :?>
    <?php if( get_field('emp_header_img', 11) ): ?>
        <div class="subpage-header col-xs-12 about-page-section" style="background-image: url('<?php echo the_field("emp_header_img", 11); ?>')">
            <div class="row">

                <div class="col-xs-12 col-md-8 col-md-offset-2">
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

        <!-- While have posts, show em from structure template-parts/content -->
        <div class="member-content-container col-xs-12 col-md-8">

            <?php while ( have_posts() ) : the_post(); ?>
                
                <?php get_template_part( 'template-parts/content' ); ?>

            <?php endwhile; ?>

        </div>

       
        <div class="sidebar-medarbetare col-xs-12 col-md-4">
        <!-- make sidebar with different components -->
            <div class="sidebar-container">

            <h4>Medarbetarmeny</h4>
                <div class="h2-underline-container"><div class="h2-underline"></div></div>
                <!-- Get menu "Medarbetar"-menu with pages connected to employees -->
                    <?php wp_nav_menu( array( 'theme_location' => 'medarbetare', 'menu_class' => 'menu-medarbetare') ); ?>

                    <li id="archives"><?php _e('Nyhetsarkiv'); ?>
                        <ul>
                            <?php wp_get_archives('type=monthly'); ?>
                        </ul>
                    </li>
                    
            </div> 

        </div>

    </div>

    <?php }else{ ?>

        <!-- When user is not logged in show content below -->
    	<div class="container container-member-notlogedin">
            <div class="row" style="padding-top:100px">
            
                <h2 class="login-member-text">Logga in för att nå medarbetarsidan!</h2>
            <!-- get loginform -->
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

</div>

<?php get_footer(); ?>
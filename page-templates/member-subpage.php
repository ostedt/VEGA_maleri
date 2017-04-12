<?php 
/*
* Template Name: Medarbetar-undersida
*/
?>

<?php get_header(); ?>

	<div class="container member-page-container">

		<!-- Checking if user is logged in -->

		<?php if ( is_user_logged_in() ){ ?>

			<?php if( get_field('emp_header_heading', 11) ) :?>
    		
    				<?php if( get_field('emp_header_img', 11) ): ?>

	        				<div class="subpage-header col-xs-12 about-page-section" style="background-image: url('<?php echo the_field("emp_header_img", 11); ?>');">
	            				<div class="row">

	                				<div class="col-xs-12 col-md-8 col-md-offset-2">
	                    				<h1><?php the_field('emp_header_heading', 11); ?></h1>
		                					<div class="section-bread section-bread-no-btn">
		                    				<?php if( get_field('emp_header_breadtext', 11) ) : ?>
		                        				<?php the_field('emp_header_breadtext', 11); ?>
		                    				<?php endif; ?>
		                    				</div>
		                			</div>
	            				</div>

	        				</div>

	        		<?php endif; ?>

	    	<?php endif; ?>

		    <div class="row">

			    	<!-- if user is logged in show content from ACF -->
			    	<div class="member-content-container col-xs-12 col-md-8">


		 				<?php if( get_field('mu_title') ): ?>
		              		<h2><?php the_field('mu_title'); ?></h2>

		                	<?php if( get_field('mu_content') ): ?>
		                    	<?php the_field('mu_content'); ?>
		                	<?php endif; ?>

		                	<?php if( get_field ('mu_files') ): ?>
		                		<a href="<?php the_field('mu_files'); ?>">Se dokument här</a>
		                	<?php endif; ?> 

		                	<?php if( get_field ('mu_files2') ): ?>
		                		<a href="<?php the_field('mu_files2'); ?>">Se dokument här</a>
		                	<?php endif; ?> 

		                	<?php if( get_field ('mu_files3') ): ?>
		                		<a href="<?php the_field('mu_files3'); ?>">Se dokument här</a>
		                	<?php endif; ?> 
		                    
		          		<?php endif; ?>
		      
		    		</div>

		    <div class="sidebar-medarbetare col-xs-12 col-md-4">

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

	    	<!-- if user is not logged in show content below -->

	    	<div class="row">
	        
		    	<h2>För att nå medarbetarsidan måste du logga in!</h2>

		    </div>

	    <?php } ?>

	</div>

<?php get_footer(); ?>
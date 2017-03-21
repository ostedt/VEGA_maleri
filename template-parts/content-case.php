<a href="<?php echo esc_url( get_permalink()); ?>"><div class="case-container">
	
	<?php if( get_field('case_small_img') ) : ?>
        <div id="" class="case-small-img" style="background-image: url('<?php echo the_field("case_small_img"); ?>')">
        	
			<?php if( get_field('case_heading') ) : ?>
				<div class="case-heading">
					<?php the_field('case_heading'); ?>
				</div>
			<?php endif; ?>

        </div>
    <?php endif; ?>

</div></a>
<div class="employee-container col-xs-12 col-sm-6 col-md-4 col-lg-3">
	
	<?php if( get_field('employee_img') ) : ?>
        <div id="" class="employee-img" style="background-image: url('<?php echo the_field("employee_img"); ?>')"></div>
    <?php endif; ?>

	
	<?php if( get_field('employee_name') ) : ?>
		<div class="employee-name">
			<?php the_field('employee_name'); ?>
		</div>
	<?php endif; ?>

	<?php if( get_field('employee_work') ) : ?>
		<div class="employee-work">
			<?php the_field('employee_work'); ?>
		</div>
	<?php endif; ?>

	<?php if( get_field('employee_tele') ) : ?>
		<div class="employee-tele">
			<?php the_field('employee_tele'); ?>
		</div>
	<?php endif; ?>

	<?php if( get_field('employee_mail') ) : ?>
		<div class="employee-mail">
			<?php the_field('employee_mail'); ?>
		</div>
	<?php endif; ?>

</div>
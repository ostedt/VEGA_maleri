<div class="container">
<div class="row"> 
	<div class="icon-container col-xs-12">
		<div class="col-xs-12 col-md-4"></div>
		<div class="col-xs-12 col-md-4"></div>
		<div class="col-xs-12 col-md-4"></div>
	</div>  
   	<footer>
		    <?php
		        if ( is_active_sidebar( 'footer-menu' ) ) {
		            dynamic_sidebar( 'footer-menu' );
		        }
		    ?>
    </footer>
</div>
</div>
<?php wp_footer(); ?>

</body>
</html>
<div class="container">
<div class="row">   
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
   	<footer>
	    <?php
	        if ( is_active_sidebar( 'footer-menu' ) ) {
	            dynamic_sidebar( 'footer-menu' );
	        }
	    ?>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
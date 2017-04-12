			

			<div class="container footer-container">

  
				<div class="row">
				 
				   	<footer>

							<!-- Adding active sidebar "footer-menu" -->

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
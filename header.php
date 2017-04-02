<!DOCTYPE html>
	<html>
		<head>

			<meta charset="utf-8">

			<!-- Adding jQuery -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

			<meta name="viewport" content="width=device-width, initial-scale=1">

			<!-- Adding font from googlefonts -->
			<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,700" rel="stylesheet">
			<style> @import "font-awesome-4.7.0"; </style>

			<?php wp_head(); ?>

		</head>

		<body>
			
			<!-- Get primarymenu -->

			<div class="top-header container">

				<nav>
					<div class="row">

						<div class="navbar" id="navbar-collapse">

							<!-- if img choosen in customizer (admin) we get the img and the link otherwiae nothing-->
							<?php if ( $my_image = get_theme_mod( 'vega_general_image')) : ?>
						
								<a href="<?php echo home_url(); ?>" class="logo-link">
										<img class="logo-img" src="<?php echo $my_image ?>">
								</a>

							<?php endif; ?>

							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav navbar-right' ) ); ?>

						</div>

					</div>

				</nav>

			</div>

			<div id="toggle-mobile-menu">

				<div class="container">

					<div class="row">

						<span class="mobilemenu-bars"><i id="toggle-icon" class="fa fa-bars" aria-hidden="true"></i></span>
					
					</div>

				</div>

			</div>


		
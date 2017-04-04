<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">

			<!-- Adding jQuery -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- Adding font from googlefonts -->
			<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,700" rel="stylesheet">
			<!-- Adding font-awesome -->
			<link rel="stylesheet" href="../wordpress/wp-content/themes/VEGA/font-awesome-4.7.0/css/font-awesome.min.css">

			<?php wp_head(); ?>

		</head>

		<body>

		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>

		      <!-- if img choosen in customizer (admin) we get the img and the link otherwiae nothing-->
				<?php if ( $my_image = get_theme_mod( 'vega_general_image')) : ?>
					<a href="<?php echo home_url(); ?>" class="logo-link">
						<img class="navbar-brand logo-img" src="<?php echo $my_image ?>">
					</a>
				<?php endif; ?>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

		      <?php wp_nav_menu( array( 
			      'theme_location' => 'primary', 
			      'menu_class' => 'nav navbar-nav navbar-right', 
			      'container' => false, 
		      ) ); ?>
		      
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
					<!-- Get primarymenu -->
			<!--
			<div class="top-header container">
				<nav>
					<div class="row">
						<div class="navbar" id="navbar-collapse">
							<!-- if img choosen in customizer (admin) we get the img and the link otherwiae nothing-->
							<?php //if ( $my_image = get_theme_mod( 'vega_general_image')) : ?>
							<!--	<a href="<?php echo home_url(); ?>" class="logo-link">
									<img class="logo-img" src="<?php echo $my_image ?>">
								</a>
							<?php //endif; ?>
							<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav navbar-right' ) ); ?>
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
			</div> --> 
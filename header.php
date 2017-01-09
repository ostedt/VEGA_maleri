<!DOCTYPE html>
	<html>
		<head>

			<meta charset="utf-8">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<link rel="stylesheet" href="wp-content/themes/VEGA/fonts/css/font-awesome.min.css">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,700" rel="stylesheet">

			<?php wp_head(); ?>

		</head>

		<body>


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


		<script>
			
			$("#toggle-icon").click(function(){
			    $(".menu-primary-menu-container").toggle();
			});


				$(document).ready(function(){
					$("a").on('click', function(event) {

						if (this.hash !== "") {

							event.preventDefault();
							var hash = this.hash;

							$('html, body').animate({
								scrollTop: $(hash).offset().top -100
							}, 500, function(){

								window.location.hash = hash;

							});
						} 
					});
				});


				$(function() {
				    //caches a jQuery object containing the header element
				    var header = $(".navbar");
				    $(window).scroll(function() {
				        var scroll = $(window).scrollTop();

				        if (scroll >= 150) {
				            header.removeClass('navbar').addClass("navbar_small");
				        } else {
				            header.removeClass("navbar_small").addClass('navbar');
				        }
				    });
				});

		</script>
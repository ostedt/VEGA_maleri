<?php get_header(); ?>

<!-- Adding content to 404.php and guide user back to home-page -->

<div class="container">
    <div class="row">

		<div class="container-error">
	    	<h1>Oups,</h1>
	    	<p>Nu har något gått snett!</p>

	            <div class="btn-cover">
	              <a class="btn-round" href="<?php echo home_url(); ?>">Tillbaka till förstasidan</a>
	            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>
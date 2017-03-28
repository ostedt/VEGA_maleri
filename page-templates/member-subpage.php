<?php 
/*
* Template Name: Medarbetar-undersida
*/
?>

<?php get_header(); ?>

	<div class="container">

	<?php if ( is_user_logged_in() ){ ?>

    <div class="row">

    
    </div>

    <?php }else{ ?>

    	<div class="row">
        
	    	<h2>För att nå medarbetarsidan måste du logga in!</h2>

	    </div>

    <?php } ?>

</div>

<?php get_footer(); ?>
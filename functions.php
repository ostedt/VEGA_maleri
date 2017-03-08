<?php

function VEGA_setup() {
    
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu' ),
        'footer'    => __( 'Footer Menu')
    ) );
    
}
add_action( 'after_setup_theme', 'VEGA_setup' );

/**********************************************************
***********************************************************
-----------------------------------------------------------
POST
-----------------------------------------------------------
***********************************************************
**********************************************************/

/* Get latest posts */

function VEGA_get_latest_posts() {
    
    $posts = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'order_by' => 'date',
    ) );
    
    if ( $posts->have_posts() ) :
    
        while ( $posts->have_posts() ) : $posts->the_post(); 
            
        get_template_part('template-parts/content', 'archive');
    
        endwhile;
    
    wp_reset_postdata();
         
    else:
        
        echo 'Det finns inga nyheter';
        
    endif;
}

/**********************************************************
***********************************************************
-----------------------------------------------------------
EMPLOYEES
-----------------------------------------------------------
***********************************************************
**********************************************************/

/* Below, adding employers as a post-type */

function VEGA_get_employees(){

	register_post_type('VEGA_employees', array(
		'labels' => array(
			'name' 			=> __( 'Anställda' ),
			'singular_name' => __( 'Anställda') 
		),
		'public' 	=> true,
		'supports' 	=> array(
			'thumbnail',
			'title',
			'editor',
			'custom-fields',
		)
	));

}
add_action( 'init', 'VEGA_get_employees' );

/* Fuction to get the latest employees */

function VEGA_get_latest_employees() {
    
    $posts = new WP_Query( array(
        'post_type' => 'VEGA_employees'
    ) );
    
    if ( $posts->have_posts() ) :
    
        while ( $posts->have_posts() ) : $posts->the_post(); 

        	get_template_part('template-parts/content', 'contact');
              
        endwhile;
    
    wp_reset_postdata();
         
    else:
        
        echo 'Det finns inga anställda';
        
    endif;
}

/**********************************************************
***********************************************************
-----------------------------------------------------------
CASES
-----------------------------------------------------------
***********************************************************
**********************************************************/

/* Below, adding cases as a post-type */

function VEGA_get_cases(){

	register_post_type('VEGA_cases', array(
		'labels' => array(
			'name' 			=> __( 'Referens Objekt' ),
			'singular_name' => __( 'Referens Objekt' )
		),
		'public' 		=> true,
		'has_archive' 	=> true,
		'supports' 		=> array(
			'thumbnail',
			'title',
			'editor',
			'custom-fields',
		)
	));

}
add_action( 'init', 'VEGA_get_cases' );

/* Fuction to get the latest cases */

function VEGA_get_latest_cases() {
    
    global $paged;
    
    $posts = new WP_Query( array(
        'post_type' => 'VEGA_cases',
        'posts_per_page' => 3,
        'order_by' => 'date',
    ) );
    
    if ( $posts->have_posts() ) :
    
        while ( $posts->have_posts() ) : $posts->the_post(); 
            
        get_template_part('template-parts/content', 'case');
    
        endwhile;
    
    ?>
	    
	<?php wp_reset_postdata(); 
	         
   	else:
        
    	echo 'Det finns inga referensobjekt';
        
    endif; 
} 

/**********************************************************
***********************************************************
-----------------------------------------------------------
SUPPLIERS
-----------------------------------------------------------
***********************************************************
**********************************************************/

/* Below, adding suppliers as a post-type */

function VEGA_get_suppliers(){

	register_post_type('VEGA_suppliers', array(
		'labels' => array(
			'name' => __( 'Leverantörer' ),
			'singular_name' => __( 'Leverantörer' )
		),
		'public' => true,
		'supports' => array(
			'thumbnail',
			'title',
			'editor',
			'custom-fields',
		)
	));

}
add_action( 'init', 'VEGA_get_suppliers' );

/* Fuction to get the latest suppliers */

function VEGA_get_latest_suppliers() {
    
    $posts = new WP_Query( array(
        'post_type' => 'VEGA_suppliers'
    ) );
    
    if ( $posts->have_posts() ) :
    
        while ( $posts->have_posts() ) : $posts->the_post(); 

        	get_template_part('template-parts/content', 'suppliers');
              
        endwhile;
    
    wp_reset_postdata();
         
    else:
        
        echo 'Det finns inga leverantörer';
        
    endif;
}

/**********************************************************
***********************************************************
-----------------------------------------------------------
ENQUEUE
-----------------------------------------------------------
***********************************************************
**********************************************************/

/* Below, adding employers as a post-type */

//Laddar in scripts (css och js)
function VEGA_enqueue_scripts() {

	wp_enqueue_style( 'style-name', get_template_directory_uri().'/assets/css/style.css' );

    //bootstrap
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );

    //default
    wp_enqueue_style( 'default-style', get_stylesheet_uri() );
    wp_enqueue_script( 'default-script', get_template_directory_uri() . '/js/main.js');
    
}
add_action( 'wp_enqueue_scripts', 'VEGA_enqueue_scripts' );

/**********************************************************
***********************************************************
-----------------------------------------------------------
FOOTER
-----------------------------------------------------------
***********************************************************
**********************************************************/

function VEGA_init() {
    //Registrerar en sidebar m. widgets
    register_sidebar( array(
        'name'              => __( 'Footer' ), //--() innebär att det inom paranteserna är översättningsbart
        'id'                => 'footer-menu', //detta är ett id där av är det inget __()...
        'before_widget'     => '<div class="col-md-3">', //Detta är en slags div...
        'after_widget'      => '</div>',
        'before_title'      => '<h3 class="widget-title">',
        'after_title'       => '</h3>'
    ));
}
add_action( 'widgets_init', 'VEGA_init' );

/**********************************************************
***********************************************************
-----------------------------------------------------------
CUSTOMIZER
-----------------------------------------------------------
***********************************************************
**********************************************************/

require 'inc/customizer.php';
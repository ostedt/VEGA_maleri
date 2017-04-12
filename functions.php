<?php
//Setup of theme, adding support and menus
function VEGA_setup() {
    
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu' ),
        'medarbetare'    => __( 'Medarbetare Menu')
    ) );
    
}
add_action( 'after_setup_theme', 'VEGA_setup' );

/**********************************************************
***********************************************************
-----------------------------------------------------------
LOGIN/LOGOUT
-----------------------------------------------------------
***********************************************************
**********************************************************/

// Used: http://wordpress.stackexchange.com/questions/15633/how-can-i-redirect-user-after-entering-wrong-password

function custom_login_failed( $username )
{
    $referrer = wp_get_referer();

    if ( $referrer && ! strstr($referrer, 'wp-login') && ! strstr($referrer,'wp-admin') )
    {
        wp_redirect( add_query_arg('login', 'failed', $referrer) );
        exit;
    }
}

add_action( 'wp_login_failed', 'custom_login_failed' );

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
        'posts_per_page' => -1,
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

/* Fuction to get all the latest employees */

function VEGA_get_latest_employees() {
    
    $posts = new WP_Query( array(
        'post_type' => 'VEGA_employees',
        'posts_per_page' => -1
    ) );
    
    if ( $posts->have_posts() ) :
    
        while ( $posts->have_posts() ) : $posts->the_post(); 
            //Direct to custom made template-part for loop
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
		'has_archive' 	=> false,
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

/* Function to get all cases */

function VEGA_get_all_cases() {
    
    global $paged;
    
    $posts = new WP_Query( array(
        'post_type' => 'VEGA_cases',
        'posts_per_page' => -1,
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
EXCERPT
-----------------------------------------------------------
***********************************************************
**********************************************************/

// functions taken from: https://developer.wordpress.org/reference/functions/the_excerpt/ and changed to VEGA's needs

function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( ' Läs mer', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


/**********************************************************
***********************************************************
-----------------------------------------------------------
ENQUEUE
-----------------------------------------------------------
***********************************************************
**********************************************************/

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
        'before_widget'     => '<div class="col-md-12">', //Detta är en slags div...
        'after_widget'      => '</div>',
        'before_title'      => '',
        'after_title'       => ''
    ));
}
add_action( 'widgets_init', 'VEGA_init' );
require 'inc/widgets/init.php';

/**********************************************************
***********************************************************
-----------------------------------------------------------
CUSTOMIZER
-----------------------------------------------------------
***********************************************************
**********************************************************/

require 'inc/customizer.php';
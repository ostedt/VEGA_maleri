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
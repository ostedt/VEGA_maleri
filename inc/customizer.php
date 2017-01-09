<?php 
/**
*Register customizer
*
*@param WP_Customize_Manager $wp_customize
*/

    function vega_customize_register( $wp_customize ) {
        
        //Add section for customizer
        $wp_customize->add_section( 'vega_general', array(
            'title' => __( 'Logga', 'vega' )
        ) );

        //Add setting for img in customizer
        $wp_customize->add_setting( 'vega_general_image');
        $wp_customize->add_control( new WP_Customize_Image_Control( 
            $wp_customize,
            'vega_general_image',
            array(
                'label'=> __('Logga', 'tc'),
                'section' => 'vega_general',
                'setting' =>'vega_general_image'
            )
        ) );
        
    }
    add_action( 'customize_register', 'vega_customize_register');
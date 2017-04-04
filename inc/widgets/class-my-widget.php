<?php

class MY_Widget extends WP_Widget {
    public function __construct() {
        
        parent::__construct( 'my-widget', __( 'My Widget', 'tw' ) );
    }
    
    public function widget( $arg, $instance ) {
        
        $title = isset( $instance['title'] ) ? $instance['title'] : null;
        $text = isset( $instance['text'] ) ? $instance['text'] : null;
        $icon = isset( $instance['icon'] ) ? $instance['icon'] : null;
        ?>

            <div class="my-widget col-xs-12 col-md-4">
                <?php if ( $icon ) : ?>
                     <i class="fa <?php echo $icon ?>" aria-hidden="true"></i>
                <?php endif; ?>

                <?php if ( $title ) : ?>
                    <h2><?php echo $title ?></h2>
                <?php endif; ?>

                <?php if ( $text ) : ?>
                    <p><?php echo $text ?></p>
                <?php endif; ?>
            </div>

        <?php
        
    }
    
    public function update ( $new_instance, $old_instance ) {
        
        $instance = $old_instance;
        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance['text'] = strip_tags( $new_instance['text'] );
        $instance['icon'] = strip_tags( $new_instance['icon'] );
        
        return $instance;
        
    }
    
    public function form ( $instance ) {
        ?>

            <p>
                <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title', 'tw' ) ?></label>
                <input type="text" 
                       name="<?php echo $this->get_field_name( 'title' ); ?>" 
                       id="<?php echo $this->get_field_id( 'title' );?>" 
                       value="<?php if ( ! empty( $instance['title'] ) ) echo esc_attr( $instance['title'] ); ?>"
                       class="widefat">
            </p>

             <p>
                <label for="<?php echo $this->get_field_id( 'text' ); ?>"><?php _e( 'Text', 'tw' ) ?></label>
                <input type="text" 
                       name="<?php echo $this->get_field_name( 'text' ); ?>" 
                       id="<?php echo $this->get_field_id( 'text' );?>" 
                       value="<?php if ( ! empty( $instance['text'] ) ) echo esc_attr( $instance['text'] ); ?>"
                       class="widefat">
            </p>

             <p>
                <label for="<?php echo $this->get_field_id( 'icon' ); ?>"><?php _e( 'Icon', 'tw' ) ?></label>
                <input type="text" 
                       name="<?php echo $this->get_field_name( 'icon' ); ?>" 
                       id="<?php echo $this->get_field_id( 'icon' );?>" 
                       value="<?php if ( ! empty( $instance['icon'] ) ) echo esc_attr( $instance['icon'] ); ?>"
                       class="widefat">
            </p>


        <?php
        
    }
}



?>
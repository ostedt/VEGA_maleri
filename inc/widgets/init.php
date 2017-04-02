<?php 

require 'class-my-widget.php';

function tw_register_widgets() {
    register_widget( 'My_Widget' );
}
add_action( 'widgets_init', 'tw_register_widgets' );


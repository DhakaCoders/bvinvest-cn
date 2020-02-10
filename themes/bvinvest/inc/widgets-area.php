<?php 
function deploy_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Testimonial Widget', 'demula' ),
		'id'            => 'testimonial-widget',
		'description'   => __( 'Add widgets here to appear in your testimonial.', 'demula' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<span>',
		'after_title'   => '</span>',
	) );
}
add_action( 'widgets_init', 'deploy_widgets_init' );

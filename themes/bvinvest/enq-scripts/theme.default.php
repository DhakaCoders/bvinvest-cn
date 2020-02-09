<?php
/**
Theme specific styles and scripts
	wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
	wp_enqueue_style( $handle, $src, $deps, $ver );
*/ 
wp_enqueue_style('cbv-style', get_stylesheet_uri(), array(), rand(0, 999));
wp_enqueue_style('cbv-devices-style', get_template_directory_uri() . '/assets/css/responsive.css', array(), array(0, 99));
wp_enqueue_script('mixitup', get_template_directory_uri() . '/assets/js/mixitup.min.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('onscreen', get_template_directory_uri() . '/assets/js/jquery.onscreen.min.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('curcle', get_template_directory_uri() . '/assets/js/curcle-animation.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('googlemaps', get_template_directory_uri() . '/assets/js/google-maps.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('appjs', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('cbv-custom', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);

?>